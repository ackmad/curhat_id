// Ambil elemen input dan elemen target
const inputTitle = document.querySelector('.input-title');
const storyTitle = document.getElementById('story-title');
const inputContent = document.querySelector('.input-content');
const storyPagesContainer = document.getElementById('story-pages');
const prevBtn = document.getElementById('prev-page');
const nextBtn = document.getElementById('next-page');
const pageIndicator = document.getElementById('page-indicator');
const measureDiv = document.getElementById('story-measure');

let pages = [];
let currentPage = 0;

// Fungsi membagi isi ke halaman berdasarkan tinggi
function splitToPagesByHeight(text, maxHeightPx = 900) {
    // Pisahkan berdasarkan baris kosong (paragraf)
    const paragraphs = text.split(/\n+/).map(p => p.trim()).filter(Boolean);
    let pages = [];
    let currentContent = '';
    let measureDiv = document.getElementById('story-measure');

    measureDiv.innerHTML = '';
    // Samakan lebar dengan .story-page (ganti jika perlu)
    measureDiv.style.width = document.querySelector('.story-page')?.offsetWidth + 'px' || '320px';

    for (let i = 0; i < paragraphs.length; i++) {
        let paraHtml = `<p style="line-height:25px;margin:0;padding:0;text-indent:1em;text-align:justify;">${paragraphs[i]}</p>`;
        // Coba tambah paragraf ini
        measureDiv.innerHTML = currentContent + paraHtml;

        if (measureDiv.offsetHeight > maxHeightPx && currentContent !== '') {
            // Jika melebihi tinggi, simpan halaman & mulai baru
            pages.push(currentContent);
            currentContent = paraHtml;
        } else {
            currentContent += paraHtml;
        }
    }
    if (currentContent) pages.push(currentContent);

    return pages;
}

function renderPages() {
    storyPagesContainer.innerHTML = '';
    // Hanya render halaman yang sedang aktif
    if (pages.length > 0) {
        const div = document.createElement('div');
        div.className = 'story-page active'; // <-- tambahkan 'active'
        div.innerHTML = pages[currentPage];
        storyPagesContainer.appendChild(div);
    }
    pageIndicator.textContent = `${currentPage + 1}/${pages.length}`;
    prevBtn.disabled = currentPage === 0;
    nextBtn.disabled = currentPage === pages.length - 1;
}

// Ganti pemanggilan di updatePages:
function updatePages() {
    // Pastikan tinggi sesuai dengan CSS .story-page
    const storyPage = document.querySelector('.story-page');
    let maxHeight = 330;
    if (storyPage) maxHeight = storyPage.offsetHeight || 330;
    pages = splitToPagesByHeight(inputContent.value, maxHeight);
    if (currentPage >= pages.length) currentPage = pages.length - 1;
    if (currentPage < 0) currentPage = 0;
    renderPages();
}

inputTitle.addEventListener('input', (e) => {
    storyTitle.textContent = e.target.value || 'Judul Curhat Kamu';
});

inputContent.addEventListener('input', () => {
    currentPage = 0;
    updatePages();
});

// Navigasi
prevBtn.addEventListener('click', () => {
    if (currentPage > 0) {
        currentPage--;
        renderPages();
    }
});
nextBtn.addEventListener('click', () => {
    if (currentPage < pages.length - 1) {
        currentPage++;
        renderPages();
    }
});

// Inisialisasi awal
updatePages();
