
function renderStories(kategori = null) {
    const container = document.getElementById('post-container');
    let stories = window.allStories;
    if (kategori) {
        stories = stories.filter(s => s.kategori === kategori);
    }
    let html = '';
    if (stories.length === 0) {
        html = '<p>Tidak ada cerita untuk kategori ini.</p>';
    } else {
        stories.slice(0, 10).forEach(story => {
            html += `
                <a href="/cerita/${story.id}" class="post-card">
                    <p class="post-date">${story.created_at ? story.created_at.substring(2, 10).replace(/-/g, '.') : ''}</p>
                    <div class="post-content">
                        <h3 class="post-title">${story.judul}</h3>
                        <p class="post-description">${story.isi.replace(/(<([^>]+)>)/gi, "").substring(0, 100)}</p>
                    </div>
                    <p class="post-category">${story.kategori ?? '-'}</p>
                </a>
            `;
        });
    }
    container.innerHTML = html;
}

document.querySelectorAll('.btn-category').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelectorAll('.btn-category').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const kategori = this.dataset.kategori;
        renderStories(kategori);
        document.getElementById('post-container').scrollIntoView({ behavior: 'smooth' });
    });
});

// Render all stories on first load
renderStories();
