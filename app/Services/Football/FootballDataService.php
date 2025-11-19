<?php

namespace App\Services\Football;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class FootballDataService
{
    public function getCompetitions(bool $forceRefresh = false): array
    {
        $baseUrl = config('services.football_data.base_url');
        $token = config('services.football_data.token');
        $ttl = (int) config('services.football_data.cache_ttl', 3600);
        $cacheKey = 'football_data_competitions';

        if (empty($token)) {
            Log::warning('FootballData: jeton API manquant (.env FOOTBALL_DATA_API_TOKEN)');
            return [];
        }

        if ($forceRefresh) {
            Cache::forget($cacheKey);
        }

        return Cache::remember($cacheKey, $ttl, function () use ($baseUrl, $token) {
            // Normalisation de l'URL de base
            $normalized = rtrim($baseUrl, '/');
            if (str_ends_with($normalized, '/competitions')) {
                $normalized = substr($normalized, 0, -strlen('/competitions'));
            }
            $endpoint = $normalized . '/competitions';
            Log::debug('FootballData: requête compétitions', ['endpoint' => $endpoint]);
            $response = Http::withHeaders([
                'X-Auth-Token' => $token,
                'Accept' => 'application/json',
            ])->get($endpoint);

            if (!$response->successful()) {
                Log::warning('FootballData: échec requête', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
                return [];
            }

            $data = $response->json();
            $competitions = $data['competitions'] ?? [];

            return array_values(array_filter($competitions, function ($c) {
                return isset($c['type']) && $c['type'] === 'LEAGUE';
            }));
        });
    }
}
