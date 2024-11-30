document.addEventListener('DOMContentLoaded', () => {
    // Function to initialize progress steps after the form is loaded
    const initializeProgressSteps = () => {
        const quoteForm = document.querySelector('.wpcf7');
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
            const styleStart = window.getComputedStyle(stepStart);
            return styleStart.display !== 'none';
        };

        // Next button
        nextBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if (!checkStepStartVisibility() && currentStep === 0) {
                    switchStep(1); 
                } else if (currentStep < formSteps.length - 1) {
                    switchStep(currentStep + 1);
                }
            });
        });

        // Prev button click handler
        prevBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if (currentStep === formSteps.length - 1) {
                    switchStep(0);
                }
            });
        });
        switchStep(0);
    };

    // Create a MutationObserver to watch for the form loading
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
});
