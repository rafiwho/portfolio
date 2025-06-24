document.querySelectorAll("btn-group").forEach(varName => {
    varName.onclick = function() {
        alert(this.innerHTML);
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const prev = document.querySelector('.slider .prev');
    const next = document.querySelector('.slider .next');
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) slide.classList.add('active');
        });
    }

    prev.addEventListener('click', function() {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    });

    next.addEventListener('click', function() {
        current = (current + 1) % slides.length;
        showSlide(current);
    });

    showSlide(current);
});


