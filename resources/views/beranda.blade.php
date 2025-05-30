<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Satu Ruang, Jutaan Cerita | Kamu Gak Sendiri, Ceritamu Berarti</title>
    <link rel="stylesheet" href="{{ asset('css/style_beranda.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <x-favicon />
</head>
<body>
    <x-navbar />
    <div class="home-container">
        <h1 class="home-tagline">Tempat Curhat Tanpa Nama</h1>
        <h1 class="home-tagline small-tagline">Tapi Tetap Didengar</h1>
        <h4 class="home-quote">“Curhat itu bukan drama. Itu bagian dari manusia.”</h4>
        <div class="home-actions">
            <a href="{{ url('curhat-dulu-yuk') }}" class="btn-curhat">📝 Curhat Sekarang</a>
            <a href="{{ url('intip-cerita-orang') }}" class="btn-read-stories">📖 Baca Cerita Orang</a>
        </div>
    </div>
    <div class="category-section" style="padding-top:30px;">
        <div class="category-left">
            <p class="category-quote">"Nggak semua luka harus terlihat, tapi semuanya layak didengar"</p>
            <div class="category-list-container">
                <h4 class="category-title">Tampilkan Kategori:</h4>
                <div class="category-list">
                    @foreach($kategoriList as $kat)
                        <a href="#"
                           class="btn-category {{ (isset($kategori) && $kategori == $kat) ? 'active' : '' }}"
                           data-kategori="{{ $kat }}">{{ $kat }}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="category-right">
            <img src="{{ asset('images/quotepapper.png') }}" alt="Quote Background" class="category-image">
        </div>
    </div>
    <div class="post-container" id="post-container" style="padding-top:30px;">
        <!-- Card akan diisi oleh JavaScript -->
    </div>
    <footer class="footer">
        <h3 class="footer-heading">Kita semua pernah ngerasa sendirian, ngerasa nggak didengerin, atau sekadar pengen cerita tanpa takut dihakimi. Di sinilah Curhat.id berdiri — bukan buat sok tau, tapi buat nemenin kamu yang mungkin lagi bingung, sedih, jatuh cinta diam-diam, atau bahkan... gagal move on padahal udah berdoa tiap malam. 😌</h3>
        <p class="footer-description">Curhat.id dibangun dari keresahan—iya, keresahan yang seringnya nggak bisa kita ucapin di dunia nyata. Tapi tenang, di sini kamu bebas. Mau cerita panjang, pendek, acak-acakan, atau typo segudang, kita baca satu per satu (dan diem-diem baper juga kadang 🥹).</p>
        <h5 class="footer-copyright">© 2025 Curhat.id | Made with Kopi, Coding, dan PLaylist malam hari.</h5>
    </footer>

     <!-- script -->
    <script src="{{ asset('beranda/js/beranda.js') }}"></script>
</body>
</html>
