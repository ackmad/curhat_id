document.addEventListener('DOMContentLoaded', function() {
    const paragraphs = document.querySelectorAll('.isi-curhat p'); // Mengambil semua elemen <p> di dalam .isi-curhat
    let delay = 0.5; // Waktu delay mulai (dalam detik)

    paragraphs.forEach((p, index) => {
        // Menambahkan kelas fade-in dan delay dinamis pada setiap <p>
        p.classList.add('fade-in', 'fade-in-delay');

        // Menetapkan delay berdasarkan urutan elemen
        p.style.setProperty('--delay', `${delay + (index * 0.2)}s`); // Set delay progresif, misalnya 0.5s lebih lama untuk setiap <p>
    });
});
