document.addEventListener('DOMContentLoaded', function() {
    let modal = document.getElementById('deleteModal');
    let closeModalBtn = document.getElementById('closeModalBtn');
    let confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
    let confirmTitleInput = document.getElementById('confirmTitleInput');
    let modalStoryTitle = document.getElementById('modalStoryTitle');
    let deleteError = document.getElementById('deleteError');
    let storyIdToDelete = null;
    let storyTitleToConfirm = '';

    // Open modal
    document.querySelectorAll('.btn-delete-story').forEach(btn => {
        btn.addEventListener('click', function() {
            storyIdToDelete = this.getAttribute('data-id');
            storyTitleToConfirm = this.getAttribute('data-title');
            modalStoryTitle.textContent = storyTitleToConfirm;
            confirmTitleInput.value = '';
            deleteError.style.display = 'none';
            modal.style.display = 'flex';
            confirmTitleInput.focus();
        });
    });

    // Close modal on button
    closeModalBtn.onclick = function() {
        modal.style.display = 'none';
    };

    // Close modal on outside click
    modal.onclick = function(e) {
        if (e.target === modal) modal.style.display = 'none';
    };

    // Delete action
    confirmDeleteBtn.onclick = function() {
        if (confirmTitleInput.value.trim() !== storyTitleToConfirm) {
            deleteError.textContent = 'Maaf konfirmasi anda gagal, tolong isi inputan dengan benar.';
            deleteError.style.display = 'block';
            confirmTitleInput.focus();
            return;
        }
        // AJAX delete
        fetch(`/cerita/${storyIdToDelete}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': window.csrfToken,
                'Accept': 'application/json'
            }
        })
        .then(res => {
            if (res.ok) {
                // Remove row
                document.querySelector(`button[data-id="${storyIdToDelete}"]`).closest('tr').remove();
                modal.style.display = 'none';
            } else {
                return res.json().then(data => { throw data; });
            }
        })
        .catch(() => {
            deleteError.textContent = 'Terjadi kesalahan saat menghapus. Coba lagi.';
            deleteError.style.display = 'block';
        });
    };
});