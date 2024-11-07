document.addEventListener("DOMContentLoaded", function() {
    const slider = document.querySelector('.slider-inner')
    const testimonials = document.querySelectorAll('.slider-item')
    const nextBtn = document.querySelector('.slider-next')
    const prevBtn = document.querySelector('.slider-prev')
    let currentIndex = 0;
    const totalTestimonials = testimonials.length;

    function updateActiveTestimonial() {
        testimonials.forEach(testimonial => testimonial.classList.remove('active'))

        testimonials[currentIndex].classList.add('active');
        if(currentIndex + 1 < totalTestimonials) {
            testimonials[currentIndex + 1].classList.add('active');
        } else {
            testimonials[0].classList.add('active')
        }

        const itemWidth = testimonials[0].offSetWidth;
        slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }

    nextBtn.addEventListener('click', function () {
        currentIndex = (currentIndex + 1) % (totalTestimonials -1);
        updateActiveTestimonial();
    })
    prevBtn.addEventListener('click', function () {
        currentIndex = ((currentIndex - 1) + (totalTestimonials -1)) % (totalTestimonials -1);
        updateActiveTestimonial()
    })

    updateActiveTestimonial();

})

