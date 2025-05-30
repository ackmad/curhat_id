<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curhat Dulu Yukk</title>
    <link rel="stylesheet" href="{{ asset('css/style_curhatDulu.css') }}">
    <x-favicon />
</head>

<body>
    <x-navbar />

    {{-- POPUP MODAL SUKSES --}}
    @if(session('curhat_success') && session('curhat_id'))
        <div class="alert-blur-overlay" id="alertBlurOverlay"></div>
        <div class="alert-success-popup" id="alertSuccessPopup">
            <span class="alert-success-message">
                Curhatanmu sudah terkirim dan dapat dilihat orang lain.<br>
                <div style="margin-top:18px;display:flex;gap:12px;justify-content:center;">
                    <a href="{{ url('cerita/' . session('curhat_id')) }}" class="modal-btn btn-primary" style="font-size:1rem;">Lihat Cerita Saya</a>
                    <a href="{{ url('intip-cerita-orang') }}" class="modal-btn" style="font-size:1rem;">Baca Cerita Orang</a>
                </div>
            </span>
            <button class="alert-success-close" id="alertSuccessClose">&times;</button>
        </div>
        <script>
        document.body.style.overflow = 'hidden';
        document.addEventListener('DOMContentLoaded', function() {
            const closeBtn = document.getElementById('alertSuccessClose');
            const popup = document.getElementById('alertSuccessPopup');
            const blur = document.getElementById('alertBlurOverlay');
            function closePopup() {
                popup.style.display = 'none';
                blur.style.opacity = 0;
                blur.style.pointerEvents = 'none';
                document.body.style.overflow = '';
                setTimeout(() => blur && blur.remove(), 400);
            }
            if (closeBtn && popup && blur) {
                closeBtn.onclick = closePopup;
                blur.onclick = closePopup;
            }
            setTimeout(closePopup, 50000);
        });
        </script>
        <script src="{{ asset('js/curhat_dulu_yuk/curhat_dulu.js') }}"></script>
    @endif

    <div class="main-container" style="padding-top:90px;">
        <div class="story-section">
            <h3 class="section-title">Lihat Cerita Kamu:</h3>
            <div class="story-paper">
                <h3 id="story-title">Judul Curhat Kamu</h3>
                <div id="story-pages">
                    <div class="story-page active" id="story-page-0">
                        <p id="story-content">Isi Curhat Kamu</p>
                    </div>
                </div>
                <div class="story-nav">
                    <button type="button" id="prev-page" disabled>&lt;</button>
                    <span id="page-indicator">1/1</span>
                    <button type="button" id="next-page" disabled>&gt;</button>
                </div>
                <img src="{{ asset('images/papper-curhat.png') }}" alt="Story Background" class="story-background">
            </div>
        </div>
        <div id="story-measure" style="visibility:hidden;position:absolute;z-index:-1;left:-9999px;top:-9999px;width:55%;"></div>
        <div class="form-section">
            <form action="{{ route('curhat.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <h3 class="form-title">Judul Curhat Kamu</h3>
                    <input type="text" placeholder="Kasih judulnya singkat ajaa..." class="input-title"
                        name="judul" required>
                </div>
                <div class="form-group">
                    <h3 class="form-title">Isi Curhat Kamu</h3>
                    <textarea class="input-content" cols="30" rows="10" placeholder="Tulis semua yang kamu rasain di sini..."
                        name="isi" required></textarea>
                </div>
                <div class="category-container">
                    <p class="category-title">Kategori</p>
                    <div class="category-options">
                        <input type="radio" name="kategori" id="category-love" value="Cinta" required>
                        <label for="category-love" class="category-label" style="--color: #f7c6ce">❤️ Cinta</label>

                        <input type="radio" name="kategori" id="category-family" value="Keluarga">
                        <label for="category-family" class="category-label" style="--color: #fde7a1">👨‍👩‍👧 Keluarga</label>

                        <input type="radio" name="kategori" id="category-school" value="Sekolah / Kuliah">
                        <label for="category-school" class="category-label" style="--color: #cbe4f9">🎓 Sekolah / Kuliah</label>

                        <input type="radio" name="kategori" id="category-friendship" value="Persahabatan">
                        <label for="category-friendship" class="category-label" style="--color: #ffd5a4">🤝 Persahabatan</label>

                        <input type="radio" name="kategori" id="category-self-issues" value="Masalah Diri">
                        <label for="category-self-issues" class="category-label" style="--color: #d8c8f8">🧠 Masalah Diri</label>

                        <input type="radio" name="kategori" id="category-mental-health" value="Kesehatan Mental">
                        <label for="category-mental-health" class="category-label" style="--color: #d5f0ee">💭 Kesehatan Mental</label>

                        <input type="radio" name="kategori" id="category-career" value="Karier">
                        <label for="category-career" class="category-label" style="--color: #d4f7fa">🎯 Karier</label>

                        <input type="radio" name="kategori" id="category-finance" value="Keuangan">
                        <label for="category-finance" class="category-label" style="--color: #fff4bd">💸 Keuangan</label>

                        <input type="radio" name="kategori" id="category-social" value="Sosial">
                        <label for="category-social" class="category-label" style="--color: #fad4d4">🌍 Sosial</label>

                        <input type="radio" name="kategori" id="category-spiritual" value="Spiritual">
                        <label for="category-spiritual" class="category-label" style="--color: #e9d9fc">🕊️ Spiritual</label>

                        <input type="radio" name="kategori" id="category-self-love" value="Self-Love">
                        <label for="category-self-love" class="category-label" style="--color: #e0f7d4">🌱 Self-Love</label>

                        <input type="radio" name="kategori" id="category-random" value="Random">
                        <label for="category-random" class="category-label" style="--color: #e4e4e4">🌀 Random</label>
                    </div>
                </div>
                <div class="form-group">
                    <h3>Bagaimana perasaanmu saat ini?</h3>
                    <div class="emoji-options">
                        <input type="radio" name="mood" id="emoji-bahagia" value="Bahagia" required>
                        <label for="emoji-bahagia" class="emoji-label">😊</label>

                        <input type="radio" name="mood" id="emoji-tenang" value="Tenang">
                        <label for="emoji-tenang" class="emoji-label">☺️</label>

                        <input type="radio" name="mood" id="emoji-biasa" value="Biasa Saja">
                        <label for="emoji-biasa" class="emoji-label">😐</label>

                        <input type="radio" name="mood" id="emoji-santai" value="Santai">
                        <label for="emoji-santai" class="emoji-label">😌</label>

                        <input type="radio" name="mood" id="emoji-sedih" value="Sedih">
                        <label for="emoji-sedih" class="emoji-label">😢</label>

                        <input type="radio" name="mood" id="emoji-lelah" value="Lelah">
                        <label for="emoji-lelah" class="emoji-label">🥱</label>

                        <input type="radio" name="mood" id="emoji-tertekan" value="Tertekan">
                        <label for="emoji-tertekan" class="emoji-label">😩</label>

                        <input type="radio" name="mood" id="emoji-gugup" value="Gugup">
                        <label for="emoji-gugup" class="emoji-label">😬</label>

                        <input type="radio" name="mood" id="emoji-kaget" value="Kaget">
                        <label for="emoji-kaget" class="emoji-label">😳</label>

                        <input type="radio" name="mood" id="emoji-bingung" value="Bingung">
                        <label for="emoji-bingung" class="emoji-label">🤔</label>

                        <input type="radio" name="mood" id="emoji-cinta" value="Cinta">
                        <label for="emoji-cinta" class="emoji-label">🥰</label>

                        <input type="radio" name="mood" id="emoji-marah" value="Marah">
                        <label for="emoji-marah" class="emoji-label">😡</label>

                        <input type="radio" name="mood" id="emoji-takut" value="Takut">
                        <label for="emoji-takut" class="emoji-label">😱</label>

                        <input type="radio" name="mood" id="emoji-malu" value="Malu">
                        <label for="emoji-malu" class="emoji-label">😳</label>

                        <input type="radio" name="mood" id="emoji-kecewa" value="Kecewa">
                        <label for="emoji-kecewa" class="emoji-label">😔</label>

                        <input type="radio" name="mood" id="emoji-antusias" value="Antusias">
                        <label for="emoji-antusias" class="emoji-label">😁</label>

                        <input type="radio" name="mood" id="emoji-takpeduli" value="Tidak Peduli">
                        <label for="emoji-takpeduli" class="emoji-label">🙄</label>
                    </div>
                </div>
                <button type="submit" class="submit-button">Kirim Cerita</button>
            </form>
        </div>
    </div>

     <!-- script -->
    <script src="{{ asset('js/curhat_dulu_yuk/typing-papper.js') }}"></script>
    <script src="{{ asset('js/curhat_dulu_yuk/curhat_dulu.js') }}"></script>
</body>

</html>
