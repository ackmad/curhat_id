<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stories;

class IntipCeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Stories::query();

        if ($request->filled('q') && $request->filled('by')) {
            $q = $request->q;
            $by = $request->by;

            if ($by == 'judul') {
                $query->where('judul', 'like', "%$q%");
            } elseif ($by == 'isi') {
                $query->where('isi', 'like', "%$q%");
            } elseif ($by == 'tanggal') {
                // Asumsikan format pencarian: '2025-05-18' atau '18-05-2025'
                $query->whereDate('created_at', $q);
            } elseif ($by == 'kategori') {
                $query->where('kategori', 'like', "%$q%");
            }
        }

        $stories = $query->withCount('visits')->latest()->get();

        return view('intip_cerita_orang', compact('stories'));
    }

    public function ajaxSearch(Request $request)
    {
        $query = \App\Models\Stories::query();

        if ($request->filled('q') && $request->filled('by')) {
            $q = $request->q;
            $by = $request->by;

            if ($by == 'judul') {
                $query->where('judul', 'like', "%$q%");
            } elseif ($by == 'isi') {
                $query->where('isi', 'like', "%$q%");
            } elseif ($by == 'tanggal') {
                $query->whereDate('created_at', $q);
            } elseif ($by == 'kategori') {
                $query->where('kategori', 'like', "%$q%");
            }
        }

        $stories = $query->withCount('visits')->latest()->get();

        return response()->json([
            'html' => view('partials.cards', compact('stories'))->render()
        ]);
    }
}
