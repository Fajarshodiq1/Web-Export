// hero section
document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".hero-section .slide");
    let currentSlide = 0;

    function showSlide(index) {
        slides[currentSlide].classList.remove("active");
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].classList.add("active");
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    setInterval(nextSlide, 4000);
});
// end hero section
document.addEventListener("DOMContentLoaded", function () {
    const carousel = document.getElementById("carouselExampleCaptions");
    const items = carousel.querySelectorAll("[data-twe-carousel-item]");
    const indicators = carousel.querySelectorAll("[data-twe-slide-to]");
    const nextButton = carousel.querySelector("[data-twe-slide='next']");
    const prevButton = carousel.querySelector("[data-twe-slide='prev']");
    let activeIndex = 0;
    let autoSlideInterval;

    function setActiveSlide(index) {
        items.forEach((item, i) => {
            item.classList.toggle("hidden", i !== index);
            item.classList.toggle("block", i === index);
        });
        indicators.forEach((indicator, i) => {
            indicator.classList.toggle("opacity-50", i !== index);
            indicator.classList.toggle("opacity-100", i === index);
        });
        activeIndex = index;
    }

    function nextSlide() {
        const nextIndex = (activeIndex + 1) % items.length;
        setActiveSlide(nextIndex);
    }

    function prevSlide() {
        const prevIndex = (activeIndex - 1 + items.length) % items.length;
        setActiveSlide(prevIndex);
    }

    indicators.forEach((indicator, i) => {
        indicator.addEventListener("click", () => {
            setActiveSlide(i);
        });
    });

    nextButton.addEventListener("click", nextSlide);
    prevButton.addEventListener("click", prevSlide);

    function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    carousel.addEventListener("mouseenter", stopAutoSlide);
    carousel.addEventListener("mouseleave", startAutoSlide);

    setActiveSlide(activeIndex);
    startAutoSlide();
});

// end carousel about

// product
var swiper = new Swiper(".multiple-slide-carousel", {
    loop: true, // Ubah ke false untuk mengecek apakah semua item muncul
    slidesPerView: 3,
    spaceBetween: 20,
    navigation: {
        nextEl: ".multiple-slide-carousel .swiper-button-next",
        prevEl: ".multiple-slide-carousel .swiper-button-prev",
    },
    breakpoints: {
        1920: {
            slidesPerView: 4,
            spaceBetween: 30,
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        0: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
    },
});
// end product

// stats
function animateCounter(id, target) {
    let count = 0;
    const element = document.getElementById(id);
    const duration = 2000; // Durasi animasi dalam ms
    const stepTime = duration / target;

    const timer = setInterval(() => {
        count++;
        element.textContent = count;
        if (count >= target) {
            clearInterval(timer);
        }
    }, stepTime);
}

function startAnimation(entries, observer) {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            animateCounter("counter1", 37);
            animateCounter("counter2", 21);
            observer.disconnect(); // Hentikan observer setelah animasi berjalan
        }
    });
}

const observer = new IntersectionObserver(startAnimation, {
    root: null, // Memantau viewport
    threshold: 0.5, // Animasi mulai ketika 50% elemen terlihat
});

observer.observe(document.getElementById("stats-section"));
// end stats
