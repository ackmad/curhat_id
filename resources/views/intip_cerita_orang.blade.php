<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intip Cerita Orang Ahhh</title>
    <link rel="stylesheet" href="{{ asset('css/style_intipCerita.css') }}">
    <x-favicon />
</head>

<body>
    <x-navbar />
    <div class="container">
        <div class="search-bar">
            <h3>Intip Cerita Orang yukk...</h3>
            <form id="searchForm"
                  data-ajax-url="{{ route('ajax.search.cerita') }}"
                  style="display:flex;gap:10px;flex-wrap:wrap;">
                <input type="text" name="q" id="searchInput" value="{{ request('q') }}" placeholder="Cari sesuka hatimu">
                <select name="by" id="searchBy">
                    <option value="">cari berdasarkan</option>
                    <option value="judul">judul</option>
                    <option value="isi">isi curhat</option>
                    <option value="kategori">kategori</option>
                </select>
            </form>
        </div>

        <div class="card-container" id="cardContainer">
            @foreach($stories as $story)
                <x-card-intipCerita :story="$story"/>
            @endforeach
            @if($stories->isEmpty())
                <div style="padding:30px;text-align:center;width:100%;">Tidak ada cerita ditemukan.</div>
            @endif
        </div>
    </div>

     <!-- script -->
    <script src="{{ asset('js/intip_cerita_orang/intip_cerita.js') }}"></script>
</body>

</html>
