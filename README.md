# 💬 Curhat Anonim

**Curhat Anonim** adalah sebuah website yang menyediakan ruang aman bagi siapa pun untuk mencurahkan isi hati, perasaan, dan unek-unek secara **anonim**. Platform ini memungkinkan pengguna untuk menulis curhatan tanpa perlu login atau menyebutkan identitas mereka. Pengguna lain juga bisa memberikan bentuk dukungan atau merasa **relate** dengan curhatan yang ada.

---

## 📌 Latar Belakang

Banyak orang yang merasa kesepian, tidak punya tempat bercerita, atau takut dihakimi saat ingin mengungkapkan isi hatinya. Curhat Anonim hadir sebagai solusi untuk menyediakan wadah curhat tanpa identitas yang **aman, nyaman, dan bikin lega**.

Dengan fitur interaksi sederhana seperti **“Gue Dukung!”** dan **“Wah, gue juga!”**, pengguna juga bisa merasa ditemani dan dimengerti oleh orang lain yang merasakan hal serupa.

---

## 🎯 Tujuan & Fungsi Website

- Menyediakan ruang curhat anonim tanpa login
- Mempermudah pengguna menuangkan perasaan tanpa takut dihakimi
- Menyediakan tampilan yang nyaman dan komunikatif
- Memberi interaksi sederhana melalui tombol dukungan dan relate
- Mengumpulkan feedback dari pengguna untuk pengembangan selanjutnya

---

## 🧩 Fitur Utama

- Halaman Beranda dengan penjelasan ringan dan humanis
- Form Curhat Anonim dengan pilihan kategori
- Halaman Curhatan Publik yang bisa dilihat semua orang
- Reaksi sederhana: tombol “Dukung” dan “Relate”
- Form feedback dari pengunjung
- Halaman tentang website
- Tampilan mobile-friendly & simple

---

## 🗃️ Struktur Database & Relasi

### Tabel `curhat`
- `id`
- `judul`
- `isi`
- `kategori_id`
- `created_at`

### Tabel `kategori`
- `id`
- `nama_kategori`

### Tabel `reaksi`
- `id`
- `curhat_id`
- `tipe_reaksi` (`dukung` atau `relate`)
- `created_at`

### Tabel `feedback`
- `id`
- `isi_feedback`
- `created_at`

### Relasi:
- 1 `curhat` → 1 `kategori`
- 1 `curhat` → banyak `reaksi`

---

## ⚙️ Teknologi yang Digunakan

- Laravel 10 (PHP Framework)
- Blade Template
- TailwindCSS / Bootstrap
- Fontawesome / Lucide Icons
- MySQL / MariaDB

---

## 👨‍💻 Tim Developer

### 👤 Frontend Developer – **[Nama Kamu]**
- Mendesain UI/UX
- Mengimplementasikan tampilan halaman (Landing Page, Form Curhat, Curhatan Publik, Tentang Website)
- Membuat tampilan responsif dan enak dilihat
- Menyesuaikan bahasa UI agar santai & relevan

### 👨‍💻 Backend Developer – **Aldi**
- Mendesain dan membuat struktur database
- Menangani logic backend (form submission, penyimpanan curhat, reaksi, feedback)
- Menyusun controller, model, dan routing Laravel
- Validasi dan keamanan input

---

## 🎨 Gaya Bahasa & Desain

- Bahasa santai, tidak kaku, dan relevan dengan anak muda
- Desain clean, minimalis, warna lembut
- User experience yang nyaman dan tidak mengintimidasi

### Contoh Bahasa:
- \"Lagi kepikiran sesuatu? Cerita aja di sini. Nggak ada yang nge-judge.\"\n
- \"Udah lega? Kirim aja deh!\"\n
- \"Kamu nggak sendirian kok. Yuk baca cerita dari orang-orang yang mungkin ngerasa hal yang sama.\"

---

## 🤝 Kontribusi

Kalau kamu tertarik ikut bantu mengembangkan, feel free buat fork repo ini dan pull request! Bisa juga kasih saran via fitur feedback di website 😉

---

## 📢 Penutup

> **“Satu cerita bisa bikin hati lega. Satu dukungan bisa bikin hari orang jadi lebih baik.”**

Website ini bukan cuma proyek, tapi semoga bisa jadi tempat pelarian yang bikin hati lebih hangat dan lega.

---

**© 2025 Curhat Anonim**

APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:zB6ShE8wFxc6cva8enfZ3vLijz+sWLhKi5E9tMhKTiA=
APP_DEBUG=true
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_curhatin
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
# CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"
x
