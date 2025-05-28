document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('searchForm');
    const input = document.getElementById('searchInput');
    const select = document.getElementById('searchBy');
    const cardContainer = document.getElementById('cardContainer');

    function doSearch(e) {
        if (e) e.preventDefault();
        fetch(`{{ route('ajax.search.cerita') }}?q=${encodeURIComponent(input.value)}&by=${encodeURIComponent(select.value)}`)
            .then(res => res.json())
            .then(data => {
                cardContainer.innerHTML = data.html;
            });
    }

    form.addEventListener('submit', doSearch);
    input.addEventListener('input', doSearch);
    select.addEventListener('change', doSearch);
});