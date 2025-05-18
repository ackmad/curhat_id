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

// Fungsi membagi isi ke halaman secara custom
function splitToPagesCustom(text, firstPageWords = 100, nextPageWords = 200) {
    const paragraphs = text.split(/\n+/).map(p => p.trim()).filter(Boolean);

    let pages = [];
    let wordLimit = firstPageWords;
    let isFirstPage = true;
    let currentWords = 0;
    let currentPage = [];

    for (let i = 0; i < paragraphs.length; i++) {
        const words = paragraphs[i].split(/\s+/).filter(Boolean);
        let idx = 0;
        while (idx < words.length) {
            let remaining = wordLimit - currentWords;
            let take = Math.min(remaining, words.length - idx);
            let paraPart = words.slice(idx, idx + take).join(' ');

            currentPage.push(`<p style="line-height:25px;margin:0;padding:0;text-indent:1em; text-align:justify;">${paraPart}</p>`);
            currentWords += take;
            idx += take;

            if (currentWords >= wordLimit) {
                let content = '';
                content += currentPage.join('');
                pages.push(content);

                wordLimit = nextPageWords;
                isFirstPage = false;
                currentWords = 0;
                currentPage = [];
            }
        }
    }

    // Sisa paragraf di halaman terakhir
    if (currentPage.length > 0) {
        let content = '';
        content += currentPage.join('');
        pages.push(content);
    }

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
    pages = splitToPagesCustom(inputContent.value, 100, 200); // 100 kata halaman 1, 200 kata halaman 2 dst
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
