<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curhat Dulu Yukk</title>
    <link rel="stylesheet" href="{{ asset('css/style_curhatDulu.css') }}">
</head>

<body>
    <x-navbar />
    <div class="main-container">
        <div class="story-section">
            <h3 class="section-title">Lihat Cerita Kamu:</h3>
            <div class="story-paper">
                <h3 id="story-title">Lorem ipsum dolor sit amet.</h3>
                <p id="story-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eius, omnis tempore similique eligendi consequatur repudiandae minus vitae earum. Voluptate officiis distinctio earum expedita quidem vitae natus, asperiores quasi, explicabo fuga cupiditate et. Temporibus deserunt amet optio aut quae. Vitae tempore cumque fugit ipsum accusantium blanditiis commodi quasi nulla expedita corrupti a architecto obcaecati delectus doloribus perferendis, id ab consequuntur autem quaerat repudiandae. Debitis commodi temporibus velit praesentium error officiis fuga numquam, aspernatur modi beatae itaque aperiam quasi odit rerum, tempora saepe! Enim obcaecati voluptates illum libero quo blanditiis magni labore beatae, perferendis est inventore atque a? Nam, pariatur</p>
                <img src="{{ asset('images/papper-curhat.png') }}" alt="Story Background" class="story-background">
            </div>
        </div>
        <div class="form-section">
            <div class="form-group">
                <h3 class="form-title">Judul Curhat Kamu</h3>
                <input type="text" placeholder="Kasih judul buat curhatanmu..." class="input-title">
            </div>
            <div class="form-group">
                <h3 class="form-title">Isi Curhat Kamu</h3>
                <textarea class="input-content" cols="30" rows="10"
                    placeholder="Tulis semua yang kamu rasain di sini..."></textarea>
            </div>
            <div class="category-container">
                <p class="category-title">Kategori</p>
                <div class="category-options">
                    <input type="radio" name="category" id="category-love">
                    <label for="category-love" class="category-label" style="--color: #f7c6ce">❤️ Cinta</label>

                    <input type="radio" name="category" id="category-family">
                    <label for="category-family" class="category-label" style="--color: #fde7a1">👨‍👩‍👧 Keluarga</label>

                    <input type="radio" name="category" id="category-school">
                    <label for="category-school" class="category-label" style="--color: #cbe4f9">🎓 Sekolah / Kuliah</label>

                    <input type="radio" name="category" id="category-friendship">
                    <label for="category-friendship" class="category-label" style="--color: #ffd5a4">🤝 Persahabatan</label>

                    <input type="radio" name="category" id="category-self-issues">
                    <label for="category-self-issues" class="category-label" style="--color: #d8c8f8">🧠 Masalah Diri</label>

                    <input type="radio" name="category" id="category-mental-health">
                    <label for="category-mental-health" class="category-label" style="--color: #d5f0ee">💭 Kesehatan Mental</label>

                    <input type="radio" name="category" id="category-career">
                    <label for="category-career" class="category-label" style="--color: #d4f7fa">🎯 Karier</label>

                    <input type="radio" name="category" id="category-finance">
                    <label for="category-finance" class="category-label" style="--color: #fff4bd">💸 Keuangan</label>

                    <input type="radio" name="category" id="category-social">
                    <label for="category-social" class="category-label" style="--color: #fad4d4">🌍 Sosial</label>

                    <input type="radio" name="category" id="category-spiritual">
                    <label for="category-spiritual" class="category-label" style="--color: #e9d9fc">🕊️ Spiritual</label>

                    <input type="radio" name="category" id="category-self-love">
                    <label for="category-self-love" class="category-label" style="--color: #e0f7d4">🌱 Self-Love</label>

                    <input type="radio" name="category" id="category-random">
                    <label for="category-random" class="category-label" style="--color: #e4e4e4">🌀 Random</label>
                </div>
            </div>
            <div class="form-group">
                <h3>Bagaimana perasaanmu saat ini?</h3>
                <div class="emoji-options">
                    <input type="radio" name="emoji" id="emoji-happy">
                    <label for="emoji-happy" class="emoji-label">😊</label>

                    <input type="radio" name="emoji" id="emoji-calm">
                    <label for="emoji-calm" class="emoji-label">☺️</label>

                    <input type="radio" name="emoji" id="emoji-neutral">
                    <label for="emoji-neutral" class="emoji-label">😐</label>

                    <input type="radio" name="emoji" id="emoji-relaxed">
                    <label for="emoji-relaxed" class="emoji-label">😌</label>

                    <input type="radio" name="emoji" id="emoji-sad">
                    <label for="emoji-sad" class="emoji-label">😩</label>

                    <input type="radio" name="emoji" id="emoji-nervous">
                    <label for="emoji-nervous" class="emoji-label">😬</label>

                    <input type="radio" name="emoji" id="emoji-shocked">
                    <label for="emoji-shocked" class="emoji-label">😳</label>

                    <input type="radio" name="emoji" id="emoji-thinking">
                    <label for="emoji-thinking" class="emoji-label">🤔</label>

                    <input type="radio" name="emoji" id="emoji-love">
                    <label for="emoji-love" class="emoji-label">🥰</label>

                    <input type="radio" name="emoji" id="emoji-angry">
                    <label for="emoji-angry" class="emoji-label">😡</label>

                    <input type="radio" name="emoji" id="emoji-scared">
                    <label for="emoji-scared" class="emoji-label">😱</label>
                </div>
            </div>
            <a href="#" class="submit-button">Kirim Cerita</a>
        </div>
    </div>
</body>

</html>
