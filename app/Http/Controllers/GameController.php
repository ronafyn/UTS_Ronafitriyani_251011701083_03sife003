<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $query = Game::query();

        if ($request->filled('q')) {
            $query->where('title', 'like', '%' . $request->q . '%');
        }

        if ($request->filled('genre')) {
            $query->where('genre', $request->genre);
        }

        $games = $query->orderBy('id')->paginate(6)->withQueryString();
        $genres = Game::select('genre')->distinct()->orderBy('genre')->pluck('genre');

        return view('games.index', compact('games', 'genres'));
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('games.show', compact('game'));
    }

    public function about()
    {
        return view('about');
    }
}