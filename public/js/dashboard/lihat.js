
document.addEventListener('DOMContentLoaded', function () {
    // Modal detail
    const detailModal = document.getElementById('detailModal');
    const detailModalTitle = document.getElementById('detailModalTitle');
    const detailModalBody = document.getElementById('detailModalBody');
    const closeDetailModalBtn = document.getElementById('closeDetailModalBtn');

    document.querySelectorAll('.btn-view-story').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            const storyId = this.getAttribute('data-id');
            detailModal.style.display = 'flex';
            detailModalTitle.innerText = 'Memuat...';
            detailModalBody.innerHTML = '<div class="text-center py-4">Memuat...</div>';
            fetch(`/admin/ajax-cerita/${storyId}`)
                .then(res => res.json())
                .then(data => {
                    detailModalTitle.innerText = data.judul;
                    detailModalBody.innerHTML = `
                        <div>
                            <div class="mb-2"><span class="badge bg-primary">${data.kategori}</span> &nbsp; <small class="text-muted">${data.tanggal}</small></div>
                            <div class="mb-2"><b>View:</b> ${data.view}</div>
                            <hr>
                            <div>${data.isi}</div>
                        </div>
                    `;
                })
                .catch(() => {
                    detailModalTitle.innerText = 'Gagal Memuat';
                    detailModalBody.innerHTML = '<div class="alert alert-danger">Gagal memuat detail cerita.</div>';
                });
        });
    });

    closeDetailModalBtn.addEventListener('click', function () {
        detailModal.style.display = 'none';
    });

    detailModal.addEventListener('click', function (e) {
        if (e.target === detailModal) detailModal.style.display = 'none';
    });
});
