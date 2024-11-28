const quotePage = document.querySelector('.quote-page')

if(quotePage) {
    document.addEventListener('DOMContentLoaded', () => {
        const quoteForm = document.querySelector('.quote-form')
        const nextBtns = document.querySelectorAll('.uacf7-next')
        const prevBtns = document.querySelectorAll('.uacf7-prev')
        const progressSteps = document.querySelectorAll('.steps-step')

        let currentStep = 0;

        const switchStep = (step, delay = 300) => {
            quoteForm.classList.remove('step-1', 'step-2');
            quoteForm.classList.add(`step-${step}`);
        }

        nextBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if(currentStep < progressSteps.length - 1) {
                    progressSteps[currentStep].classList.remove('active');
                    currentStep++;
                    progressSteps[currentStep].classList.add('active');
                    switchStep(2);
                }
            });
        });

        prevBtns.forEach((btn) => {
            btn.addEventListener('click', () => {
                if(currentStep > 0) {
                    progressSteps[currentStep].classList.remove('active');
                    currentStep--;
                    progressSteps[currentStep].classList.add('active');
                    switchStep(1);
                }
            } )
        })

        progressSteps[currentStep].classList.add('active');
        switchStep(1);
    })
}