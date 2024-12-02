document.addEventListener('DOMContentLoaded', () => {

    const initializeProgressSteps = () => {
        const quoteForm = document.querySelector('.wpcf7');
        const outerForm = document.querySelector('.quote-form')
        const nextBtns = document.querySelectorAll('.uacf7-next');
        const prevBtns = document.querySelectorAll('.uacf7-prev');
        const progressSteps = document.querySelectorAll('.steps-step');
        const formSteps = document.querySelectorAll('.uacf7-step');
        const stepStart = document.querySelector('.step-start');
        let currentStep = 0;

        const updateProgress = () => {
            progressSteps.forEach((step, index) => {
                step.classList.toggle('active', index === currentStep);
            });
        };

        const switchStep = (step) => {
            currentStep = step;
            updateProgress();
            quoteForm.className = `step-${currentStep + 1}`;
        };

        // Check if step-start is visible
        const checkStepStartVisibility = () => {
            if (!stepStart) return false;  // Ensure stepStart is not null
            const styleStart = window.getComputedStyle(stepStart);
            return styleStart.display !== 'none';
        };

        nextBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if (currentStep === 0 && !isStep1Valid()) {
                    return;
                }
                
                if (!checkStepStartVisibility() && currentStep === 0) {
                    switchStep(1);
                    outerForm.classList.add('step-2')
                    outerForm.classList.remove('step-1')
                } else if (currentStep < formSteps.length - 1) {
                    switchStep(currentStep + 1);
                }
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if (currentStep === formSteps.length - 1) {
                    switchStep(0);
                    outerForm.classList.add('step-1')
                    outerForm.classList.remove('step-2')
                } else if (currentStep > 0) {
                    switchStep(currentStep - 1);
                }
            });
        });

        // Validate Step 1 before moving to Step 2
        const isStep1Valid = () => {
            const firstName = document.querySelector('[name="first-name"]');
            const lastName = document.querySelector('[name="last-name"]');
            const email = document.querySelector('[name="email"]');
            const phone = document.querySelector('[name="mobile-phone"]')
            const homePhone = document.querySelector('[name="home-phone"]')
            const adults = document.querySelector('[name="number-of-adults"]')
            const child = document.querySelector('[name="number-of-child"]')
            const childAges = document.querySelector('[name="child-ages"]')
            
            if (!firstName.value || !lastName.value || !email.value || !phone.value || !homePhone.value || !adults.value || !child.value || !childAges.value) {
                return false;
            }
            return true;
        };
        switchStep(0);
    };

    // Using MutationObserver to wait for the AJAX form loaded
    const observer = new MutationObserver((mutationsList, observer) => {
        for (const mutation of mutationsList) {
            if (mutation.type === 'childList') {
                const formLoaded = document.querySelector('.wpcf7');
                if (formLoaded) {
                    initializeProgressSteps();
                    observer.disconnect();
                }
            }
        }
    });
    observer.observe(document.body, { childList: true, subtree: true });

    // Check if form has been pre-render
    if (document.querySelector('.wpcf7')) {
        initializeProgressSteps();
    }
});
