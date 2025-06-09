document.addEventListener('DOMContentLoaded', function() {
    const bgImage = document.querySelector('.bg-image');
    const formSaran = document.querySelector('.form-saran-tab');
    const formWa = document.querySelector('.form-wa-tab');
    const btnWaSend = document.getElementById('wa-send');

    bgImage.addEventListener('click', function() {
        const saranActive = formSaran.classList.contains('active');
        if (saranActive) {
            formSaran.classList.remove('active');
            formWa.classList.add('active');
        } else {
            formWa.classList.remove('active');
            formSaran.classList.add('active');
        }
        // animasi lucu pada gambar
        bgImage.animate([
            { transform: 'scale(1) rotate(0)' },
            { transform: 'scale(1.15) rotate(-8deg)' },
            { transform: 'scale(1) rotate(0)' }
        ], { duration: 500, easing: 'cubic-bezier(.77,0,.18,1)' });
    });

    // WhatsApp API send
    btnWaSend.addEventListener('click', function(e) {
        e.preventDefault();
        const nama = document.getElementById('wa-nama').value.trim();
        const tujuan = document.getElementById('wa-tujuan').value;
        const pesan = document.getElementById('wa-pesan').value.trim();

        let nomor = '';
        if (tujuan === 'elfan') nomor = '6289666192392';
        if (tujuan === 'aldi') nomor = '6281918087647';

        if (!nama || !pesan) {
            alert('Nama dan pesan wajib diisi!');
            return;
        }

        const text = `Halo ${tujuan === 'elfan' ? 'Kak Elfan' : 'Kak Aldi'}!%0ASaya: ${nama}%0APesan: ${pesan}`;
        const url = `https://wa.me/${nomor}?text=${text}`;
        window.open(url, '_blank');
    });
});

////

document.addEventListener('DOMContentLoaded', function() {
    const closeBtn = document.getElementById('alertSuccessClose');
    const popup = document.getElementById('alertSuccessPopup');
    const blur = document.getElementById('alertBlurOverlay');
    if (closeBtn && popup && blur) {
        closeBtn.onclick = function() {
            popup.style.display = 'none';
            blur.style.opacity = 0;
            blur.style.pointerEvents = 'none';
            setTimeout(() => blur.remove(), 400);
        };
    }
    // Optional: auto close after 5s
    setTimeout(() => {
        if (popup && blur) {
            popup.style.display = 'none';
            blur.style.opacity = 0;
            blur.style.pointerEvents = 'none';
            setTimeout(() => blur.remove(), 400);
        }
    }, 5000);
});
