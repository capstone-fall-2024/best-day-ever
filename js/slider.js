document.addEventListener("DOMContentLoaded", function () {
  const slider = document.querySelector(".testimonial-slider-inner");

  if (slider) {
    const testimonials = document.querySelectorAll(".testimonial-slider-item");
    const nextBtn = document.querySelector(".testimonial-next");
    const prevBtn = document.querySelector(".testimonial-prev");
    const messageBtns = document.querySelectorAll(".toggle-message");

    let currentIndex = 0;
    const totalTestimonials = testimonials.length;

    function getItemsToShow() {
      return window.innerWidth >= 1024 ? 2 : 1;
    }

    function updateActiveTestimonial() {
      const itemsToShow = getItemsToShow();
      testimonials.forEach((testimonial) =>
        testimonial.classList.remove("active")
      );

      testimonials[currentIndex].classList.add("active");
      for (let i = 0; i < itemsToShow; i++) {
        testimonials[(currentIndex + i) % totalTestimonials].classList.add(
          "active"
        );
      }
    }

    messageBtns.forEach((messageBtn) => {
      messageBtn.addEventListener("click", (e) => {
        e.preventDefault();
        const parentMessage = e.target.closest(".message");
        const shortMessage = parentMessage.querySelector(".short-message");
        const fullMessage = parentMessage.querySelector(".full-message");

        if (shortMessage.style.display === "none") {
          shortMessage.style.display = "inline";
          fullMessage.style.display = "none";
          messageBtn.textContent = "Read More";
        } else {
          shortMessage.style.display = "none";
          fullMessage.style.display = "inline";
          messageBtn.textContent = "Read Less";
        }
      });
    });

    function handleResize() {
      itemsPreview = window.innerWidth >= 1024 ? 2 : 1;
      updateActiveTestimonial();
    }

    nextBtn.addEventListener("click", function () {
      currentIndex = (currentIndex + 1) % totalTestimonials;
      updateActiveTestimonial();
    });
    prevBtn.addEventListener("click", function () {
      currentIndex =
        (currentIndex - getItemsToShow() + totalTestimonials) %
        totalTestimonials;
      updateActiveTestimonial();
    });
    window.addEventListener("resize", handleResize);
    updateActiveTestimonial();
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const certificate = document.querySelector(".certificates");

  if (certificate) {
    const slider = document.querySelector(".certificate-slider-inner");
    const certificates = document.querySelectorAll(".certificate-slider-item");
    const nextBtn = document.querySelector(".certificate-next");
    const prevBtn = document.querySelector(".certificate-prev");
    let currentIndex = 0;
    const totalCertificates = certificates.length;

    function updateActiveCertificate() {
      certificates.forEach((certificate) =>
        certificate.classList.remove("active")
      );

      certificates[currentIndex].classList.add("active");
      if (currentIndex + 1 < totalCertificates) {
        certificates[currentIndex + 1].classList.add("active");
      } else {
        certificates[0].classList.add("active");
      }

      const itemWidth = certificates[0].offsetWidth;
      slider.style.transform = `translateX(-${currentIndex * itemWidth}px)`;
    }

    nextBtn.addEventListener("click", function () {
      currentIndex = (currentIndex + 1) % (totalCertificates - 1);
      updateActiveCertificate();
    });
    prevBtn.addEventListener("click", function () {
      currentIndex =
        (currentIndex - 1 + (totalCertificates - 1)) % (totalCertificates - 1);
      updateActiveCertificate();
    });
    updateActiveCertificate();
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const sliderContainer = document.querySelector(".specialties-slider");
  if (!sliderContainer) {
    return;
  }

  const specialtiesSlider = new Swiper(".specialties-slider", {
    navigation: {
      nextEl: ".specialties-next",
      prevEl: ".specialties-prev",
    },
    centeredSlides: true,
    breakpoints: {
      320: {
        // Mobile View: Grid with 2 rows
        slidesPerView: 1,
        grid: {
          rows: 2,
          fill: "row",
        },
        spaceBetween: 10,
        loop: false,
      },
      750: {
        slidesPerView: 1.5,
        grid: {
          rows: 1,
        },
        spaceBetween: 15,
        loop: true,
      },
      1024: {
        // Desktop View: Coverflow effect with 3 slides visible
        slidesPerView: 3,
        centeredSlides: true,
        effect: "coverflow",
        loop: true,
        spaceBetween: 20,
        coverflowEffect: {
          rotate: 0,
          stretch: 0,
          depth: 100,
          modifier: 2,
        },
      },
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const dealsContainer = document.querySelector(".deals-cards");

  if (!dealsContainer) {
    return;
  }

  const dealsSlider = new Swiper(".deals-cards", {
    navigation: {
      nextEl: ".deals-next",
      prevEl: ".deals-prev",
    },
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      768: {
        slidesPerView: 3,
        grid: {
          rows: 2,
          fill: "row",
        },
        allowTouchMove: false,
      },
    },
  });
});
