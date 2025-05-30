document.body.style.overflow = 'hidden';
document.addEventListener('DOMContentLoaded', function () {
    const closeBtn = document.getElementById('alertSuccessClose');
    const popup = document.getElementById('alertSuccessPopup');
    const blur = document.getElementById('alertBlurOverlay');
    function closePopup() {
        popup.style.display = 'none';
        blur.style.opacity = 0;
        blur.style.pointerEvents = 'none';
        document.body.style.overflow = '';
        setTimeout(() => blur && blur.remove(), 400);
    }
    if (closeBtn && popup && blur) {
        closeBtn.onclick = closePopup;
        blur.onclick = closePopup;
    }
    setTimeout(closePopup, 5000);
});