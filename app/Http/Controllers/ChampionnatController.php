<?php

namespace App\Http\Controllers;

use App\Services\Football\FootballDataService;

class ChampionnatController extends Controller
{
    public function index()
    {
        $apiCompetitions = app(FootballDataService::class)->getCompetitions();
            return view('championnats.index', [
                'apiCompetitions' => $apiCompetitions,
            ]);
    }

}
