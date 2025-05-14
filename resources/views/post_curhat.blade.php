<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curhatan | </title>
    <link rel="stylesheet" href="{{ asset('css/style_flipbook.css') }}">
</head>
<body>
    <x-navbar />
    <div class="flipbook">
        {{-- HardCover --}}
        <div class="hard">
            <div class="padd">
                <h1>Ternyata cinta jarak jauh itu nggak sesimpel katanya sabar</h1>
                <h4>22.01.2025</h4>
            </div>
        </div>
        <div class="hard">
            <div class="padd">
            </div>
        </div>
        {{-- End - HardCover --}}
        {{-- Isi --}}
        <div>
            <div class="padd">
                <p>Awalnya aku pikir, selama kita masih saling bilang “iya, aku juga sayang,” semuanya akan baik-baik aja. Tapi ternyata, rasa sayang itu nggak cukup kalau kita nggak lagi saling berjuang bareng.</p><br>
                <p>Kamu tahu rasanya nggak?  Ketika kamu masih stay, tapi kayak dihampain angin kosong. Aku nunggu kamu tanya “gimana harimu?” kayak dulu. Tapi sekarang, aku bahkan ragu kamu masih peduli atau cuma basa-basi yang udah jadi kebiasaan. Kita masih di cerita yang sama, tapi kayak nggak lagi baca halaman yang sama.</p><br>
                <p>Aku ngerasa... capek.  Bukan karena aku nggak kuat, tapi karena ngerasa berjuang sendirian itu beda banget rasanya.  Aku mulai mikir ulang—tentang kita. Tentang kenapa sekarang semua obrolan jadi sepi, tentang kenapa sekarang kamu lebih sering sibuk sama duniamu sendiri. Padahal dulu, aku yang paling kamu cari, bahkan buat hal-hal kecil yang nggak penting-penting amat.</p><br>
            </div>
        </div>
        <div>
            <div class="padd">
                <p>Aku nggak mau nyalahin kamu terus.  Mungkin kamu juga lagi lelah.</p><br>
                <p>  Mungkin kamu juga lagi bingung gimana ngejalanin ini. Tapi kenapa kita nggak ngobrol aja kayak dulu? Kenapa sekarang semua terasa kayak... perlahan menjauh, tapi nggak ada yang berani bilang “cukup.”</p><br>
                <p>Aku takut.  Takut ini cuma jadi hubungan yang dipertahankan karena udah lama, bukan karena masih saling cinta.  Takut kita tetap bareng, tapi hati kita udah nggak saling peluk.</p><br>
                <p>Tapi yang paling aku takutin...  adalah kalau suatu hari aku berhenti ngerasa kehilangan kamu. Karena itu artinya, aku udah bener-bener ngelepas.</p><br>
                <p>Kalau kamu baca ini, dan kamu ngerasa... mungkin kita masih bisa ngobrol.</p>
            </div>
        </div>
        {{-- HardCover --}}
        <div class="hard">
            <div class="padd">

            </div>
        </div>
        <div class="hard">
            <div class="padd">

            </div>
        </div>
        {{-- End - HardCover --}}
    </div>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/turn.js') }}"></script>
    <script>
        $(".flipbook").turn();
    </script>

</body>
</html>
