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
            <input type="text" placeholder="Cari sesuka hatimu">
        </div>

        <div class="card-container">
            <x-card-intipCerita/>
            <x-card-intipCerita/>
            <x-card-intipCerita/>
            <x-card-intipCerita/>
            <x-card-intipCerita/>
            <x-card-intipCerita/>
            <x-card-intipCerita/>
            <x-card-intipCerita/>
            <x-card-intipCerita/>
        </div>
    </div>
</body>

</html>
