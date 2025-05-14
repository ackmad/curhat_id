<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ada Saran ?</title>
    <link rel="stylesheet" href="{{ asset('css/style_adaSaran.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
</head>
<body>
    <x-navbar />
    <div class="container">
        <div class="content-left">
            <h1 class="title-content">Ada sesuatu yang pengen kamu sampein?</h1>
            <p class="desc-content">Kami percaya, website yang baik itu tumbuh bareng penggunanya. Kalau kamu punya kritik, ide, atau saran biar Curhat.id makin nyaman dan relate, tulis aja di bawah ini ya.</p>
            <p class="desc-content">Tenang aja, semua suara kamu itu penting — dan didengerin kok.</p>
        </div>
        <div class="content-right">
            <form action="" method="POST" class="form-saran form-tab form-saran-tab active">
                @csrf
                <h2>Form Input Saran</h2>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Nama kamu (boleh kosong, bisa anonim juga 😊)">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email kamu (kalau mau dapet respon balik)">
                <label for="kategori">Kategori:</label>
                <input type="text" id="kategori" name="kategori" placeholder="Kritik / Saran / Apresiasi">
                <label for="pesan">Pesan:</label>
                <textarea id="pesan" name="pesan" rows="6" placeholder="Tulis pesannya di sini ya~ kami baca satu per satu 🧡"></textarea>
                <button type="submit">Kirim Aja 🚀</button>
            </form>

            <form class="form-saran form-tab form-wa-tab">
                <h2>Kirim Pesan ke Programmer</h2>
                <label for="wa-nama">Nama:</label>
                <input type="text" id="wa-nama" name="wa-nama" placeholder="Nama kamu">
                <label for="wa-tujuan">Tujuan:</label>
                <select id="wa-tujuan" name="wa-tujuan">
                    <option value="elfan">Elfan</option>
                    <option value="aldi">Aldi</option>
                </select>
                <label for="wa-pesan">Pesan:</label>
                <textarea id="wa-pesan" name="wa-pesan" rows="6" placeholder="Tulis pesan pribadimu untuk programmer"></textarea>
                <button type="button" id="wa-send">Kirim ke WhatsApp 📲</button>
            </form>

            <img src="{{ asset('images/formPapperSaran.png') }}" alt="" class="bg-image" tabindex="0">
        </div>
    </div>
</body>
<script src="{{ asset('js/saran.js') }}"></script>
</html>
