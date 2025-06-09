document.addEventListener('DOMContentLoaded', function () {
    const elfanImg = document.querySelector('.img-elfan');
    if (elfanImg) {
        elfanImg.style.cursor = 'pointer';
        elfanImg.addEventListener('click', function () {
            window.location.href = "/aldi";
        });
    }
});
document.addEventListener('DOMContentLoaded', function () {
    const aldiImg = document.querySelector('.img-aldi');
    if (aldiImg) {
        aldiImg.style.cursor = 'pointer';
        aldiImg.addEventListener('click', function () {
            window.location.href = "/elfan";
        });
    }
});
