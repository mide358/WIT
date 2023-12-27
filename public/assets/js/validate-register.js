// Function to validate a step
function validateStep(step) {
    const inputs = step.querySelectorAll('input, textarea, select');
    let isValid = true;

    inputs.forEach(input => {
        // Check for required fields
        if (input.required && !input.value.trim()) {
            isValid = false;
            input.classList.add('invalid');
            if (!input.nextElementSibling || input.nextElementSibling.classList.contains('error-message')) {
                const errorMessage = document.createElement('span');
                errorMessage.classList.add('error-message');
                errorMessage.textContent = "This field is required";
                input.parentNode.insertBefore(errorMessage, input.nextElementSibling);
            } else {
                input.nextElementSibling.textContent = "This field is required";
            }
        } else {
            input.classList.remove('invalid');
            if (input.nextElementSibling && input.nextElementSibling.classList.contains('error-message')) {
                input.nextElementSibling.textContent = ""; // Clear previous error message
            }
        }
    });

    return isValid;
}

// Function to handle step navigation
function handleStepNavigation(nextButton, previousButton) {
    nextButton.addEventListener('click', () => {
        const currentStep = document.querySelector('.step.active');
        const nextStep = currentStep.nextElementSibling;
        const currentTab = document.querySelector('.tab.active');
        const nextTab = currentTab.nextElementSibling;
        console.log(nextTab);


        if (validateStep(currentStep)) {
            currentStep.classList.remove('active');
            currentStep.classList.remove('show');

            nextStep.classList.add('active');
            nextStep.classList.add('show');

            currentTab.classList.remove('active');
            nextTab.classList.add('active');
            // Focus the first input field in the next step

            console.log(nextTab);
            nextStep.querySelector('input, textarea, select').focus();
        }
    });

    previousButton.addEventListener('click', () => {
        const currentStep = document.querySelector('.step.active');
        const previousStep = currentStep.previousElementSibling;

        const currentTab = document.querySelector('.tab.active');
        const previousTab = currentTab.previousElementSibling;

        currentStep.classList.remove('active');
        currentStep.classList.remove('show');
        previousStep.classList.add('active');
        previousStep.classList.add('show');

        currentTab.classList.remove('active');
        previousTab.classList.add('active');
    });
}

// Example usage:
const nextButton = document.querySelector('.nexttab');
const previousButton = document.querySelector('.prevtab');

handleStepNavigation(nextButton, previousButton);
