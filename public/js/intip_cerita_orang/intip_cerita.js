document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('searchForm');
    const input = document.getElementById('searchInput');
    const select = document.getElementById('searchBy');
    const cardContainer = document.getElementById('cardContainer');
    const ajaxUrl = form.dataset.ajaxUrl;

    function setCardAnimationDelay() {
        const cards = document.querySelectorAll('.card-container .card');
        let baseDelay = 0.18; // detik
        let step = 0.08;      // detik, jarak antar card
        cards.forEach((card, i) => {
            card.style.animationDelay = (baseDelay + i * step) + 's';
        });
    }

    // Set delay animasi saat load awal
    setCardAnimationDelay();

    // Debounce agar tidak terlalu sering request saat mengetik
    let debounceTimer = null;
    function doSearch(e) {
        if (e) e.preventDefault();
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            fetch(`${ajaxUrl}?q=${encodeURIComponent(input.value)}&by=${encodeURIComponent(select.value)}`)
                .then(res => res.json())
                .then(data => {
                    cardContainer.innerHTML = data.html;
                    setCardAnimationDelay(); // Set delay ulang setelah hasil AJAX masuk
                });
        }, 300);
    }

    form.addEventListener('submit', doSearch);
    input.addEventListener('input', doSearch);
    select.addEventListener('change', doSearch);
});
