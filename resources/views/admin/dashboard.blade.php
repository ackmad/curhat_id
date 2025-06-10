<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style_dashboard.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=McLaren&display=swap" rel="stylesheet">
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
                    <a class="nav-link" href="{{ route('admin.profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.saran') }}">Kotak Saran</a>
                </li>
            </ul>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto px-md-5 py-4">
            <h2 class="mb-4" style="font-family:'McLaren',cursive;font-weight:bold;color:#3F4C3F;">
                <span style="background:linear-gradient(90deg,#C6DEBF 60%,#FFCA6C 100%);padding:8px 24px;border-radius:12px;">
                    Dashboard Administrator
                </span>
            </h2>
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
                                            <a href="#" 
                                               class="btn btn-sm btn-info btn-view-story" 
                                               data-id="{{ $story->id }}"
                                            >Lihat</a>
                                            <button 
                                                class="btn btn-sm btn-danger btn-delete-story"
                                                data-id="{{ $story->id }}"
                                                data-title="{{ $story->judul }}"
                                                type="button"
                                            >Hapus</button>
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
            <footer class="text-center mt-5" style="color:#3F4C3F;opacity:.7;font-size:1rem;">
                © {{ date('Y') }} Curhat.id | Admin Dashboard
            </footer>
        </main>
    </div>
</div>

<!-- Modal Konfirmasi Hapus -->
<div id="deleteModal" class="modal" tabindex="-1" style="display:none; position:fixed; z-index:1050; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.3); align-items:center; justify-content:center;">
    <div class="modal-dialog" style="max-width:400px; margin:auto;">
        <div class="modal-content" style="border-radius:16px;">
            <div class="modal-header">
                <h5 class="modal-title" id="modalStoryTitle"></h5>
            </div>
            <div class="modal-body">
                <p>Tolong konfirmasi stori yang ingin kamu hapus.</p>
                <input type="text" class="form-control" id="confirmTitleInput" placeholder="Tulis ulang judul cerita">
                <div id="deleteError" class="alert alert-danger mt-2 py-1 px-2" style="display:none; font-size:0.95em;"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="closeModalBtn">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Detail Cerita -->
<div id="detailModal" class="modal" tabindex="-1" style="display:none; position:fixed; z-index:1060; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.3); align-items:center; justify-content:center;">
    <div class="modal-dialog" style="max-width:600px; margin:auto;">
        <div class="modal-content" style="border-radius:16px;">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalTitle"></h5>
                <button type="button" class="btn-close" id="closeDetailModalBtn"></button>
            </div>
            <div class="modal-body" id="detailModalBody">
                <div class="text-center py-4">Memuat...</div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Detail Cerita -->

<script>
    window.csrfToken = '{{ csrf_token() }}';
</script>
<script src="{{ asset('js/dashboard/delete.js') }}"></script>
<script src="{{ asset('js/dashboard/lihat.js') }}"></script>
</body>
</html>
