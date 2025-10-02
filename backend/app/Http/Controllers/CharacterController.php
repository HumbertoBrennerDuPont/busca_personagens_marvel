<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    // Página inicial apenas com busca
    public function search(Request $request)
    {
        $search = $request->get('q');
        $character = null;
        
        if ($search) {
            // Busca pelo nome (case insensitive)
            $character = Character::where('name', 'LIKE', "%{$search}%")
                                ->orWhere('real_name', 'LIKE', "%{$search}%")
                                ->first();
        }
        
        return view('characters.search', compact('character'));
    }
}