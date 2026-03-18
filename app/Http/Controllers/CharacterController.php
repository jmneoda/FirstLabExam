<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }

    public function create()
    {
        return view('characters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'power' => 'required',
            'universe' => 'required',
        ]);

        Character::create($request->all());

        return redirect()->route('characters.index')
            ->with('success', 'Character added successfully');
    }

    public function edit(Character $character)
    {
        return view('characters.edit', compact('character'));
    }

    public function update(Request $request, Character $character)
    {
        $request->validate([
            'name' => 'required',
            'power' => 'required',
            'universe' => 'required',
        ]);

        $character->update($request->all());

        return redirect()->route('characters.index')
            ->with('success', 'Character edited successfully');
    }

    public function destroy(Character $character)
    {
        $character->delete();

        return redirect()->route('characters.index')
            ->with('success', 'Character deleted successfully');
    }
}
