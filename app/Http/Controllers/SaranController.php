<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suggestions;

class SaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'kategori' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        Suggestions::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'kategori' => $request->kategori,
            'pesan' => $request->pesan,
        ]);

        return back()->with('success', 'Terima kasih atas sarannya!');
    }
}
