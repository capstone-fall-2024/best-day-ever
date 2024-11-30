document.addEventListener('DOMContentLoaded', () => {
    const initializeProgressSteps = () => {
        console.log('Initializing progress steps...');

        // Select necessary elements
        const quoteForm = document.querySelector('.quote-form');
        const nextBtns = document.querySelectorAll('.uacf7-next');
        const prevBtns = document.querySelectorAll('.uacf7-prev');
        const progressSteps = document.querySelectorAll('.steps-step');
        const formSteps = document.querySelectorAll('.uacf7-step');
        let currentStep = 0;

        const updateProgress = () => {
            progressSteps.forEach((step, index) => {
                step.classList.toggle('active', index === currentStep); // Only highlight the current step
            });
        };

        const switchStep = (step) => {
            // Update the form's classes for step tracking
            quoteForm.classList.remove(`step-${currentStep + 1}`);
            currentStep = step;
            quoteForm.classList.add(`step-${currentStep + 1}`);
            updateProgress();
        };

        nextBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if (currentStep < formSteps.length - 1) {
                    switchStep(currentStep + 1);
                }
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if (currentStep > 0) {
                    switchStep(currentStep - 1);
                }
            });
        });

        // Check for the visibility change on the form steps
        const observeStepVisibility = () => {
            formSteps.forEach((step, index) => {
                const observer = new MutationObserver(() => {
                    // Only update progress if the step is visible
                    const style = window.getComputedStyle(step);
                    if (style.display == 'none') {
                        if(index === 0 && currentStep === 0) {
                            switchStep(1)
                        } else if (index === 1 && currentStep === 1) {
                            switchStep(0)
                        }
                    }
                });

                observer.observe(step, { attributes: true, attributeFilter: ['style'] });
            });
        };

        // Initialize the first step without marking it active
        switchStep(0);
        updateProgress(); // This will remove the active class initially

        // Start observing visibility of steps
        observeStepVisibility();
    };

    // Wait for the form to load
    if (document.querySelector('.uacf7-step')) {
        initializeProgressSteps();
    } else {
        const observer = new MutationObserver(() => {
            const formLoaded = document.querySelector('.uacf7-step');
            if (formLoaded) {
                console.log('Form loaded. Initializing progress steps...');
                initializeProgressSteps();
                observer.disconnect(); // Stop observing after initialization
            }
        });

        observer.observe(document.body, { childList: true, subtree: true });
    }
});
