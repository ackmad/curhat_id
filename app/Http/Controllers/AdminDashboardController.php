<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stories;
use App\Models\Visits;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AdminDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        // Filter
        $selectedCategory = $request->get('category', '');
        $selectedPeriod = $request->get('period', 'all');

        // Kategori
        $categories = Stories::select('kategori')->distinct()->pluck('kategori');

        // Query stories
        $storiesQuery = Stories::query();

        if ($selectedCategory) {
            $storiesQuery->where('kategori', $selectedCategory);
        }

        if ($selectedPeriod == 'month') {
            $storiesQuery->whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year);
        }

        // Ambil stories dengan jumlah view
        $stories = $storiesQuery
            ->withCount('visits')
            ->orderByDesc('visits_count')
            ->get();

        // Statistik
        $totalCurhatan = Stories::count();

        // Akumulasi view
        $totalViews = Visits::count();

        $admin = Auth::guard('admin')->user();

        return view('admin.dashboard', [
            'totalCurhatan' => $totalCurhatan,
            'totalViews' => $totalViews,
            'categories' => $categories,
            'stories' => $stories,
            'selectedCategory' => $selectedCategory,
            'selectedPeriod' => $selectedPeriod,
            'admin' => $admin,
        ]);
    }

    public function profile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }
}
