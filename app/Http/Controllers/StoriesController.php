<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stories;
use App\Models\Mood;
use App\Models\Visits;

class StoriesController extends Controller
{
    public function index()
    {
        // Ambil kategori unik dari stories
        $kategoriList = Stories::select('kategori')->distinct()->pluck('kategori');
        $stories = Stories::withCount('visits')->latest()->get();
        return view('beranda', compact('stories', 'kategoriList'));
    }

    public function filterByKategori($kategori)
    {
        $kategoriList = Stories::select('kategori')->distinct()->pluck('kategori');
        $stories = Stories::where('kategori', $kategori)->latest()->get();
        return view('beranda', compact('stories', 'kategoriList', 'kategori'));
    }

    public function create()
    {
        // Hardcode kategori, atau ambil dari stories jika ingin dinamis
        $kategoriList = ['Cinta', 'Keluarga', 'Persahabatan', 'Pendidikan', 'Karir'];
        $moodList = Mood::orderBy('id')->pluck('nama_mood', 'id');
        return view('curhat_dulu_yuk', compact('kategoriList', 'moodList'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'kategori' => 'required|string|max:255',
            'mood' => 'required|string|max:255',
        ]);

        // Ubah baris baru menjadi tag <p> dan tambahkan <br> setelah </p>
        $isi = trim($request->isi);
        $isi = '<p>' . preg_replace('/\r\n|\r|\n/', '</p><br><p>', e($isi)) . '</p><br>';

        $curhat = Stories::create([
            'judul' => $request->judul,
            'isi' => $isi,
            'kategori' => $request->kategori,
            'mood' => $request->mood,
        ]);

        // Redirect ke halaman curhat-dulu-yuk dengan session flash yang sesuai
        return redirect()->route('curhat-dulu-yuk')->with([
            'curhat_success' => true,
            'curhat_id' => $curhat->id
        ]);
    }

    public function intipCeritaOrang()
    {
        $stories = Stories::withCount('visits')->latest()->get();
        return view('intip_cerita_orang', compact('stories'));
    }

    public function show($id)
    {
        $story = Stories::findOrFail($id);

        // Tambahkan visit setiap kali cerita dibuka
        Visits::create([
            'story_id' => $story->id,
            'aksi' => 'Membaca Cerita',
            'tanggal_aksi' => now(),
        ]);

        return view('post_curhat', compact('story'));
    }
}
