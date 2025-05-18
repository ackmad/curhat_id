<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intip Cerita Orang Ahhh</title>
    <link rel="stylesheet" href="{{ asset('css/style_intipCerita.css') }}">
</head>

<body>
    <x-navbar />
    <div class="container">
        <div class="search-bar">
            <h3>Intip Cerita Orang yukk...</h3>
            <form id="searchForm" style="display:flex;gap:10px;flex-wrap:wrap;">
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

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('searchForm');
        const input = document.getElementById('searchInput');
        const select = document.getElementById('searchBy');
        const cardContainer = document.getElementById('cardContainer');

        function doSearch(e) {
            if(e) e.preventDefault();
            fetch(`{{ route('ajax.search.cerita') }}?q=${encodeURIComponent(input.value)}&by=${encodeURIComponent(select.value)}`)
                .then(res => res.json())
                .then(data => {
                    cardContainer.innerHTML = data.html;
                });
        }

        form.addEventListener('submit', doSearch);
        input.addEventListener('input', doSearch);
        select.addEventListener('change', doSearch);
    });
    </script>
</body>

</html>
