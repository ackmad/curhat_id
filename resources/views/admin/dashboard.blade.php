
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f7f8fa; }
        .sidebar {
            background: #fff;
            min-height: 100vh;
            border-right: 1px solid #eee;
        }
        .sidebar .nav-link.active {
            background: #f0f4ff;
            color: #3f51b5;
            font-weight: bold;
        }
        .stat-card {
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 2px 8px rgba(63,81,181,0.07);
            padding: 24px 32px;
            margin-bottom: 24px;
        }
        .stat-title { color: #888; font-size: 1rem; }
        .stat-value { font-size: 2.2rem; font-weight: 700; color: #3f51b5; }
        .table thead { background: #f0f4ff; }
        .profile-img {
            width: 60px; height: 60px; border-radius: 50%; object-fit: cover;
            border: 2px solid #3f51b5;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-2 d-none d-md-block sidebar py-4">
            <div class="text-center mb-4">
                <img src="{{ asset('images/admin-profile.png') }}" alt="Profile" class="profile-img mb-2">
                <h5 class="mb-0">Admin</h5>
                <small class="text-muted">Dashboard</small>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto px-md-5 py-4">
            <div class="row g-4 mb-4">
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-title">Total Curhatan</div>
                        <div class="stat-value">{{ $totalCurhatan }}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-title">Total View</div>
                        <div class="stat-value">{{ $totalViews }}</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="stat-card text-center">
                        <div class="stat-title">Kategori Aktif</div>
                        <div class="stat-value">{{ count($categories) }}</div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header d-flex flex-wrap align-items-center justify-content-between">
                    <h5 class="mb-0">Management Curhatan</h5>
                    <form class="row g-2" method="GET" action="">
                        <div class="col-auto">
                            <select name="category" class="form-select form-select-sm">
                                <option value="">Semua Kategori</option>
                                @foreach($categories as $cat)
                                    <option value="{{ $cat }}" {{ $selectedCategory == $cat ? 'selected' : '' }}>{{ $cat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-auto">
                            <select name="period" class="form-select form-select-sm">
                                <option value="all" {{ $selectedPeriod == 'all' ? 'selected' : '' }}>Sepanjang Waktu</option>
                                <option value="month" {{ $selectedPeriod == 'month' ? 'selected' : '' }}>Bulan Ini</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-primary btn-sm" type="submit">Filter</button>
                        </div>
                    </form>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>Peringkat</th>
                                    <th>ID Card</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>View</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($stories as $i => $story)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $story->id }}</td>
                                        <td>{{ $story->judul }}</td>
                                        <td>{{ $story->kategori }}</td>
                                        <td>{{ $story->created_at->format('d M Y') }}</td>
                                        <td>{{ $story->visits_count }}</td>
                                        <td>
                                            <a href="{{ route('cerita.show', $story->id) }}" class="btn btn-sm btn-info" target="_blank">Lihat</a>
                                            <form action="{{ route('cerita.destroy', $story->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus curhatan ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">Tidak ada data curhatan.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>