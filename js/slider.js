document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector('.testimonial-slider-inner')
    const testimonials = document.querySelectorAll('.testimonial-slider-item')
    const nextBtn = document.querySelector('.testimonial-next')
    const prevBtn = document.querySelector('.testimonial-prev')
    let currentIndex = 0;
    const totalTestimonials = testimonials.length;

    function getItemsToShow() {
        return window.innerWidth >= 1024 ? 2 : 1;
    }

    function updateActiveTestimonial() {
        const itemsToShow = getItemsToShow();
        testimonials.forEach(testimonial => testimonial.classList.remove('active'))

        testimonials[currentIndex].classList.add('active');
        for(let i = 0; i < itemsToShow; i++) {
            testimonials[(currentIndex + i) % totalTestimonials].classList.add('active');
        }
    }

    function handleResize() {
        itemsPreview = window.innerWidth >= 1024 ? 2 : 1;
        updateActiveTestimonial();
    }

    nextBtn.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % totalTestimonials;
        updateActiveTestimonial();
    })
    prevBtn.addEventListener('click', function () {
        currentIndex = (currentIndex - getItemsToShow() + totalTestimonials) % totalTestimonials;
        updateActiveTestimonial()
    })
    window.addEventListener('resize', handleResize);
    updateActiveTestimonial();
})

document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector('.certificate-slider-inner')
    const certificates = document.querySelectorAll('.certificate-slider-item')
    const nextBtn = document.querySelector('.certificate-next')
    const prevBtn = document.querySelector('.certificate-prev')
    let currentIndex = 0;
    const totalCertificates = certificates.length;

    console.log(nextBtn);
    function updateActiveCertificate() {
        certificates.forEach(certificate => certificate.classList.remove('active'))

        certificates[currentIndex].classList.add('active');
        if(currentIndex + 1 < totalCertificates) {
            certificates[currentIndex + 1].classList.add('active');
        } else {
            certificates[0].classList.add('active')
        }

        const itemWidth = certificates[0].offsetWidth;
        slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }

    nextBtn.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % (totalCertificates -1);
        updateActiveCertificate();
    })
    prevBtn.addEventListener('click', function () {
        currentIndex = ((currentIndex - 1) + (totalCertificates -1)) % (totalCertificates -1);
        updateActiveCertificate()
    })
    updateActiveCertificate();
})

document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.specialties-slider-inner');
    const specialties = document.querySelectorAll('.specialties-slider-item');
    const nextBtn = document.querySelector('.specialties-next');
    const prevBtn = document.querySelector('.specialties-prev');
    let currentIndex = 0;
    const totalCards = specialties.length;
    const gap = 16;

    function updateSlider() {
        const cardWidth = specialties[0].offsetWidth;
        const totalWidth = cardWidth * totalCards + gap * (totalCards -1);
        slider.style.width = `${totalWidth}px`;
        slider.style.transform =`translateX(-${(cardWidth + gap) * currentIndex}px)`;
    }

    nextBtn.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % totalCards;
        updateSlider();
    });

    // Previous Button functionality
    prevBtn.addEventListener('click', function () {
        currentIndex = (currentIndex - 1 + totalCards) % totalCards;
        updateSlider();
    });

    updateSlider();
})