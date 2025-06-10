document.addEventListener('DOMContentLoaded', function () {
    const detailModal = document.getElementById('detailSaranModal');
    const detailModalTitle = document.getElementById('detailSaranModalTitle');
    const detailModalBody = document.getElementById('detailSaranModalBody');
    const closeDetailModalBtn = document.getElementById('closeDetailSaranModalBtn');

    document.querySelectorAll('.btn-view-saran').forEach(btn => {
        btn.addEventListener('click', function () {
            detailModal.style.display = 'flex';
            detailModalTitle.innerText = 'Detail Saran';
            detailModalBody.innerHTML = `
                <div>
                    <div class="mb-2"><b>Nama:</b> ${this.dataset.nama}</div>
                    <div class="mb-2"><b>Email:</b> ${this.dataset.email}</div>
                    <div class="mb-2"><b>Kategori:</b> ${this.dataset.kategori}</div>
                    <div class="mb-2"><b>Tanggal:</b> ${this.dataset.tanggal}</div>
                    <hr>
                    <div><b>Pesan:</b><br>${this.dataset.pesan}</div>
                </div>
            `;
        });
    });

    closeDetailModalBtn.addEventListener('click', function () {
        detailModal.style.display = 'none';
    });

    detailModal.addEventListener('click', function (e) {
        if (e.target === detailModal) detailModal.style.display = 'none';
    });
});