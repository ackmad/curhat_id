<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curhatan | {{ $story->judul }}</title>
    <link rel="stylesheet" href="{{ asset('css/style_flipbook.css') }}">
    <x-favicon />
</head>

<body>
    <x-navbar />
    <div class="flipbook">
        {{-- HardCover Depan --}}
        <div class="hard cover-front">
            <div class="padd cover-content animate-pop">
                <div class="emoji-cover">📖✨</div>
                <h1 class="judul-curhat">{{ $story->judul }}</h1>
                <h4 class="tanggal-curhat">
                    {{ $story->created_at->translatedFormat('l, d F Y • H:i') }}
                </h4>
                <div class="cover-divider"></div>
                <div class="cover-subtitle">{{ $story->kategori }}</div>
            </div>
        </div>
        <div class="hard cover-shadow"><div class="padd"></div></div>
        {{-- End - HardCover Depan --}}

        {{-- Isi otomatis dibagi halaman --}}
        @php
            // Bagi isi per 130 katapa
            $words = preg_split('/\s+/', $story->isi);
            $pages = array_map(function($chunk) {
                return implode(' ', $chunk);
            }, array_chunk($words, 130));

            // Jika jumlah halaman isi ganjil, tambahkan halaman kosong agar genap (1 lembar)
            if (count($pages) % 2 !== 0) {
                $pages[] = '';
            }
        @endphp

        @foreach($pages as $page)
            <div>
                <div class="padd">
                    {!! $page !!}
                </div>
            </div>
        @endforeach

        {{-- HardCover Belakang --}}
        <div class="hard"><div class="padd"></div></div>
        <div class="hard"><div class="padd"></div></div>
        {{-- End - HardCover Belakang --}}
    </div>

    {{-- Start - Mobile UI --}}
    <div class="container">
        <div class="header-info animate-scroll">
            <h1 class="judul">{{ $story->judul }}</h1>
            <div class="info">
                <h4 class="tanggal">{{ $story->created_at->translatedFormat('l, d F Y • H:i') }}</h4>
                <h4 class="kategori">{{ $story->kategori }}</h4>
            </div>
        </div>
        <hr>
        <div class="isi-curhat">
            <!-- Tampilkan konten dengan format paragraf yang sudah diproses -->
            {!! $paragrafWithIndent !!}
        </div>
    </div>
    {{-- End - Mobile UI --}}

    <!-- script -->
    <script src="{{ asset('js/post_curhat/jquery.js') }}"></script>
    <script src="{{ asset('js/post_curhat/scroll.js') }}"></script>
    <script src="{{ asset('js/post_curhat/turn.js') }}"></script>
    <script>
        $(".flipbook").turn();
    </script>
</body>

</html>
