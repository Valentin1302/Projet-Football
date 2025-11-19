<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function index()
    {
        $equipes = Equipe::all();
        return view('equipes.index', compact('equipes'));
    }

    public function create()
    {
        return view('equipes.create');
    }
}
