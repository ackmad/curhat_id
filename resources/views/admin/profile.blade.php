
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profil Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style_profile.css') }}">
</head>
<body>
<div class="container mt-5">
    <h2>Profil Admin</h2>
    <table class="table table-bordered mt-3">
        <tr><th>ID</th><td>{{ $admin->id }}</td></tr>
        <tr><th>Nama</th><td>{{ $admin->nama }}</td></tr>
        <tr><th>Username</th><td>{{ $admin->username }}</td></tr>
        <tr><th>Email</th><td>{{ $admin->email }}</td></tr>
        <tr><th>No HP</th><td>{{ $admin->nohp }}</td></tr>
        <tr><th>Bagian</th><td>{{ $admin->bagian }}</td></tr>
        <tr><th>Hobi</th><td>{{ $admin->hobi }}</td></tr>
        <tr><th>Alamat</th><td>{{ $admin->alamat }}</td></tr>
    </table>
    <form action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button class="btn btn-danger">Logout</button>
    </form>
</div>
</body>
</html>
