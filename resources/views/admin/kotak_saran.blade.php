<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kotak Saran Admin</title>
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
                <small class="text-muted">Kotak Saran</small>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin.saran') }}">Kotak Saran</a>
                </li>
            </ul>
        </nav>
        <!-- Main Content -->
        <main class="col-md-10 ms-sm-auto px-md-5 py-4">
            <h2 class="mb-4" style="font-family:'McLaren',cursive;font-weight:bold;color:#3F4C3F;">
                <span style="background:linear-gradient(90deg,#C6DEBF 60%,#FFCA6C 100%);padding:8px 24px;border-radius:12px;">
                    Kotak Saran Pengguna
                </span>
            </h2>
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Daftar Saran Masuk</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Kategori</th>
                                    <th>Pesan</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($saranList as $i => $saran)
                                    <tr>
                                        <td>{{ $i + 1 }}</td>
                                        <td>{{ $saran->nama ?? '-' }}</td>
                                        <td>{{ $saran->email ?? '-' }}</td>
                                        <td>{{ $saran->kategori }}</td>
                                        <td>{{ \Illuminate\Support\Str::limit($saran->pesan, 40) }}</td>
                                        <td>{{ $saran->created_at->format('d M Y H:i') }}</td>
                                        <td>
                                            <button 
                                                class="btn btn-sm btn-info btn-view-saran"
                                                data-nama="{{ $saran->nama ?? '-' }}"
                                                data-email="{{ $saran->email ?? '-' }}"
                                                data-kategori="{{ $saran->kategori }}"
                                                data-pesan="{{ $saran->pesan }}"
                                                data-tanggal="{{ $saran->created_at->format('d M Y H:i') }}"
                                                type="button"
                                            >Lihat</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center py-4">Belum ada saran masuk.</td>
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

<!-- Modal Detail Saran -->
<div id="detailSaranModal" class="modal" tabindex="-1" style="display:none; position:fixed; z-index:1060; left:0; top:0; width:100vw; height:100vh; background:rgba(0,0,0,0.3); align-items:center; justify-content:center;">
    <div class="modal-dialog" style="max-width:500px; margin:auto;">
        <div class="modal-content" style="border-radius:16px;">
            <div class="modal-header">
                <h5 class="modal-title" id="detailSaranModalTitle"></h5>
                <button type="button" class="btn-close" id="closeDetailSaranModalBtn"></button>
            </div>
            <div class="modal-body" id="detailSaranModalBody">
                <div class="text-center py-4">Memuat...</div>
            </div>
        </div>
    </div>
</div>
<!-- End Modal Detail Saran -->

<script src="{{ asset('js/kotak_saran/lihat.js') }}"></script>
</body>
</html>