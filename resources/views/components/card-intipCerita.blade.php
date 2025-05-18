@php
    // Mapping kategori ke warna
    $categoryColors = [
        'Cinta' => '#FAD0C9', // pastel pink
        'Keluarga' => '#F9E8A2', // pastel yellow
        'Sekolah / Kuliah' => '#A7D8FF', // sky blue
        'Persahabatan' => '#E1B7FF', // lavender
        'Masalah Diri' => '#B8A0D6', // pastel violet
        'Kesehatan Mental' => '#B8E4D8', // soft green
        'Karier' => '#FFABAB', // light coral
        'Keuangan' => '#F8D5A4', // soft gold
        'Sosial' => '#C3E5C8', // pastel green
        'Spiritual' => '#A2C8D9', // light teal
        'Self-Love' => '#FFDFD3', // soft peach
        'Random' => '#F5B1D7', // light pink
    ];
    // Dapatkan warna berdasarkan kategori
    $categoryColor = $categoryColors[$story->kategori] ?? '#FFFFFF'; // default ke putih jika tidak ditemukan
@endphp

<a class="card" href="{{ route('cerita.show', $story->id) }}" style="background-color: {{ $categoryColor }};">
    <h4>{{ $story->judul }}</h4>
    <p>{{ Str::limit(strip_tags($story->isi), 100) }}</p>
    <div class="info-card">
        <span>{{ $story->created_at->format('d.m.Y') }}</span>
        <span>{{ $story->kategori }}</span>
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" style="vertical-align:middle;margin-right:3px;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1.458 12C2.732 7.943 6.522 5 12 5c5.478 0 9.268 2.943 10.542 7-1.274 4.057-5.064 7-10.542 7-5.478 0-9.268-2.943-10.542-7z" />
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
            </svg>
            {{ $story->visits_count }}
        </span>
    </div>
</a>
