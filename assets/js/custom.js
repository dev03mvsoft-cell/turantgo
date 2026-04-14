let currentSlide = 0;
const slides = document.querySelectorAll('.slide');
const dots = document.querySelectorAll('.dot');
const totalSlides = slides.length;
let isAnimating = false;

function updateSlides() {
    if (isAnimating) return;
    isAnimating = true;

    slides.forEach((slide, index) => {
        slide.classList.remove('active', 'prev', 'next', 'hidden');

        if (index === currentSlide) {
            slide.classList.add('active');
        } else if (index === (currentSlide + 1) % totalSlides) {
            slide.classList.add('next');
        } else if (index === (currentSlide - 1 + totalSlides) % totalSlides) {
            slide.classList.add('prev');
        } else {
            slide.classList.add('hidden');
        }
    });

    dots.forEach((dot, index) => {
        dot.classList.toggle('active', index === currentSlide);
    });

    setTimeout(() => {
        isAnimating = false;
    }, 800);
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateSlides();
}

function prevSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateSlides();
}

function goToSlide(index) {
    if (index !== currentSlide) {
        currentSlide = index;
        updateSlides();
    }
}

// Event Listeners
document.getElementById('nextBtn')?.addEventListener('click', nextSlide);
document.getElementById('prevBtn')?.addEventListener('click', prevSlide);

dots.forEach((dot, index) => {
    dot.addEventListener('click', () => goToSlide(index));
});

// Auto play
let autoPlayInterval = setInterval(nextSlide, 5000);

// Pause on hover
document.querySelector('.hero-wrapper')?.addEventListener('mouseenter', () => {
    clearInterval(autoPlayInterval);
});

document.querySelector('.hero-wrapper')?.addEventListener('mouseleave', () => {
    autoPlayInterval = setInterval(nextSlide, 5000);
});

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowLeft') prevSlide();
    if (e.key === 'ArrowRight') nextSlide();
});

document.addEventListener('DOMContentLoaded', () => {
    const cardsWrapper = document.querySelector('.cards-wrapper');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    const cardWidth = 300 + 30; // Card width (300px) + gap (30px)

    /* ------------------------------
       BUTTON SCROLL LEFT/RIGHT
    ------------------------------ */
    const scrollCards = (direction) => {
        const scrollAmount = direction === 'next' ? cardWidth : -cardWidth;
        cardsWrapper?.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    };

    prevBtn?.addEventListener('click', () => scrollCards('prev'));
    nextBtn?.addEventListener('click', () => scrollCards('next'));


    /* ------------------------------
       AUTO SCROLL (EVERY 3 SECONDS)
    ------------------------------ */
    setInterval(() => {
        cardsWrapper?.scrollBy({
            left: cardWidth,
            behavior: "smooth"
        });
    }, 3000);



    /* ------------------------------
       DRAG SCROLL (CLICK + DRAG)
    ------------------------------ */
    let isDown = false;
    let startX, scrollLeft;

    cardsWrapper?.addEventListener('mousedown', (e) => {
        isDown = true;
        cardsWrapper.classList.add('dragging');
        startX = e.pageX - cardsWrapper.offsetLeft;
        scrollLeft = cardsWrapper.scrollLeft;
    });

    cardsWrapper?.addEventListener('mouseleave', () => {
        isDown = false;
        cardsWrapper.classList.remove('dragging');
    });

    cardsWrapper?.addEventListener('mouseup', () => {
        isDown = false;
        cardsWrapper.classList.remove('dragging');
    });

    cardsWrapper?.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - cardsWrapper.offsetLeft;
        const walk = (x - startX) * 1.5; // faster drag
        cardsWrapper.scrollLeft = scrollLeft - walk;
    });


    /* ------------------------------
       MOUSE WHEEL HORIZONTAL SCROLL
    ------------------------------ */
    cardsWrapper?.addEventListener("wheel", (e) => {
        e.preventDefault();
        cardsWrapper.scrollBy({
            left: e.deltaY < 0 ? -cardWidth : cardWidth,
            behavior: "smooth"
        });
    }, {
        passive: false
    });

});
