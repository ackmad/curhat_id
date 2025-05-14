    // Ambil elemen input dan elemen target
    const inputTitle = document.querySelector('.input-title');
    const storyTitle = document.getElementById('story-title');
    const inputContent = document.querySelector('.input-content');
    const storyContent = document.getElementById('story-content');

    // Event listener untuk input-title
    inputTitle.addEventListener('input', (e) => {
        storyTitle.textContent = e.target.value || 'Judul Curhat Kamu'; // Default jika kosong
    });

    // Event listener untuk input-content
    inputContent.addEventListener('input', (e) => {
        storyContent.textContent = e.target.value || 'Isi Curhat Kamu'; // Default jika kosong
    });
