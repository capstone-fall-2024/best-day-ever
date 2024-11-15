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