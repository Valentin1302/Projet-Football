<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChampionnatRequest;
use App\Models\Championnat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ChampionnatController extends Controller
{
    public function index()
    {
        $championnats = Championnat::with('user')->latest()->get();
        return view('championnats.index', [
            'championnats' => $championnats
        ]);
    }

    public function create()
    {
        return view('championnats.create');
    }

    public function store(ChampionnatRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['user_id'] = Auth::id();
        Championnat::create($data);

    return to_route('championnats')->with('success', 'Championnat créé avec succès.');
    }

    public function edit(Championnat $championnat)
    {
        return view('championnats.edit', compact('championnat'));
    }

    public function show(Championnat $championnat)
    {
        $championnat->load('user');
        return view('championnats.show', compact('championnat'));
    }

    public function update(ChampionnatRequest $request, Championnat $championnat): RedirectResponse
    {
        $data = $request->validated();
        $championnat->update($data);
    return to_route('championnats')->with('success', 'Championnat mis à jour avec succès.');
    }

    public function destroy(Championnat $championnat): RedirectResponse
    {
        $championnat->delete();
    return to_route('championnats')->with('success', 'Championnat supprimé.');
    }
}
