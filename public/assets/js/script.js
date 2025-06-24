document.querySelectorAll("btn-group").forEach(varName => {
    varName.onclick = function () {
        alert(this.innerHTML);
    }
});

document.addEventListener('DOMContentLoaded', function () {
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

    prev.addEventListener('click', function () {
        current = (current - 1 + slides.length) % slides.length;
        showSlide(current);
    });

    next.addEventListener('click', function () {
        current = (current + 1) % slides.length;
        showSlide(current);
    });

    showSlide(current);
});

document.querySelectorAll('nav a[href="education"], nav a[href="projects"], nav a[href="skills"]').forEach(function (link) {
    link.addEventListener('click', function (event) {
        event.preventDefault()
        if (this.getAttribute('href') === 'education') {
            alert('clicked education')
        } else if (this.getAttribute('href') === 'projects') {
            alert('clicked projects')
        } else if (this.getAttribute('href') === 'skills') {
            alert('clicked skills')
        }
    })
})


