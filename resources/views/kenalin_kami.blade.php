<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kenali Kami Lebih Dekat</title>
    <link rel="stylesheet" href="{{ asset('css/style_kenaliKami.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <x-favicon />
</head>
<body>
    <div class="right-side" style="padding-top:90px;">
        <a href="/" class="btn-back"> Kembali ke Beranda</a>
        <h1 class="title">Tentang Website Kita</h1>
        <div class="container">
            <div class="content">
                <h1 class="title-content">💬 Tentang Website Kita – CURHAT.ID</h1>
                <p class="text-content">
                    Halo, selamat datang di CURHAT.ID 👋<br>
                    Sebuah tempat yang kami bikin khusus buat kamu yang lagi banyak pikiran, atau sekadar pengin cerita tanpa harus mikir, “Nanti orang-orang bilang apa ya?”<br>
                    Di dunia yang serba cepat ini, kadang kita nggak punya waktu — atau keberanian — buat cerita ke orang lain. Padahal, kepala udah penuh, hati udah sesak, dan overthinking makin merajalela. Nah, di sinilah CURHAT.ID hadir.
                </p>
            </div>
            <div class="content">
                <h1 class="title-content">😌 Tempat Curhat Bebas, Tanpa Nama, Tanpa Drama</h1>
                <p class="text-content">
                CURHAT.ID itu kayak temen yang nggak bakal nyela, nggak bakal nge-judge, dan yang paling penting: nggak nanya balik “siapa yang kamu maksud?” 😂<br>
                Di sini kamu bebas cerita apa aja. Lagi seneng? Cerita! Lagi sedih? Cerita! Lagi kesel sama hidup tapi nggak tahu kenapa? Cerita aja!<br>
                Kami percaya bahwa menulis itu bisa jadi cara yang manjur buat ngeluarin unek-unek yang susah diungkapin secara lisan. Lewat kata-kata, kamu bisa lebih jujur — bahkan ke diri sendiri.
                </p>
            </div>
            <div class="content">
                <h1 class="title-content">🫶 Karena Kadang, Kita Cuma Butuh Didengerin</h1>
                <p class="text-content">
                Kami nggak janji bisa kasih solusi. Tapi kami yakin satu hal: cerita kamu layak didengerin.
                <br>
                Perasaanmu itu valid. Dan kamu nggak sendirian.<br>
                Mau curhat tentang sekolah yang bikin pusing, temen yang makin jauh, perasaan yang nggak bisa disampein, atau sekadar keresahan random yang muncul pas lagi ngeliat langit — semuanya boleh.
                Nggak ada yang remeh di sini. Karena semua rasa itu berharga.<br>
                </p>
            </div>
            <div class="content">
                <h1 class="title-content">💡 Anonim? Aman Banget!</h1>
                <p class="text-content">
                Tenang, kamu nggak perlu masukin nama, email, atau identitas apapun. Cukup tulis, klik kirim, dan lega. Semua tetap anonim. Karena kami paham, kadang kita cuma pengin cerita... tanpa perlu dikenal.
                </p>
            </div>
        </div>
    </div>
    <div class="left-side" style="padding-top:90px;">
        <h1 class="title left">Tentang Pembuat Website</h1>
        <div class="content">
            <p class="desc-content">
                Website ini dibuat oleh dua orang siswa SMK yang juga pernah ngerasa butuh tempat buat cerita. Elfan dan Aldi, dua anak yang hobi ngulik kode sambil ngopi sachet dan muter playlist galau, ngerasa: “Kenapa sih, nggak ada tempat curhat yang simpel, anonim, tapi tetep bikin nyaman?”
            </p>
            <p class="desc-content">
                Akhirnya, kami bikin sendiri.
                Kami bukan profesional. Tapi kami ngerti rasanya butuh tempat cerita. Kami harap, CURHAT.ID bisa jadi tempat itu buat kamu.
            </p>
            <h4 class="title-klik">klik salah satu foto, untuk kenali lebih dekat :</h4>
        </div>
        <div class="container-img">
            <img src="{{ asset('images/aldi.png') }}" class="img img-elfan">
            <img src="{{ asset('images/elfan.png') }}" class="img img-aldi">
        </div>
    </div>

     <!-- script -->
    <script src="{{ asset('kenalin_kami/js/kenalin.js') }}"></script>
</body>
</html>
