//  Opens the modal
    function openModal(id) {
        const modal = document.getElementById(id);
        if (!modal) return;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden'; 
    }

    //  Closes the modal
    function closeModal(id) {
        const modal = document.getElementById(id);
        if (!modal) return;
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    //  Closes modal when clicking outside
    document.addEventListener('click', (e) => {
        const modals = document.querySelectorAll('[id$="Modal"]');
        modals.forEach((modal) => {
            if (e.target === modal) closeModal(modal.id);
        });
    });

    let currentStep = 1;
    let skippedStep2 = false; // Track if we skipped step 2

    const steps = [
        document.querySelector('.reservation-step1'),
        document.querySelector('.reservation-step2-partyselected'),
        document.querySelector('.reservation-step3')
    ];

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const confirmBtn = document.getElementById('confirmBtn');

    function showStep(step) {
        steps.forEach((el, index) => el.classList.toggle('hidden', index + 1 !== step));
        prevBtn.classList.toggle('hidden', step === 1);
        nextBtn.classList.toggle('hidden', step === steps.length);
        confirmBtn.classList.toggle('hidden', step !== steps.length);
        
        // Check validation when showing a step
        if (step === 1) {
            validateStep1();
        }
    }
    function validateStep1() {
        const firstName = document.getElementById('firstName');
        const checkinDate = document.getElementById('checkinDate');
        const checkinTime = document.getElementById('checkinTime');
        const checkoutTime = document.getElementById('checkoutTime');
        const adult = document.getElementById('adult');
        const occasion = document.querySelector('input[name="occasion"]:checked');

        // Check if all required fields are filled
        const isValid = firstName?.value.trim() && 
                       checkinDate?.value && 
                       checkinTime?.value && 
                       checkoutTime?.value && 
                       adult?.value && 
                       occasion;

        // Enable or disable the Next button
        if (nextBtn) {
            nextBtn.disabled = !isValid;
            if (isValid) {
                nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                nextBtn.classList.add('hover:bg-red-700');
            } else {
                nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
                nextBtn.classList.remove('hover:bg-red-700');
            }
        }

        return isValid;
    }

    function nextStep() {
        const occasion = document.querySelector('input[name="occasion"]:checked')?.value;
        // Step 1 logic: Check if birthday party is selected
        if (currentStep === 1) {
            if (!validateStep1()) {
                return; // Don't proceed if validation fails
            }
            

            if (occasion === 'birthday') {
                // Birthday selected: go to step 2
                skippedStep2 = false;
                currentStep = 2;
            } else {
                // Non-birthday selected: skip step 2, go to step 3
                skippedStep2 = true;
                console.log(currentStep);
                currentStep = 3;
            }
            showStep(currentStep);
            return;
        }

        // Normal progression for other steps
        if (currentStep < steps.length) {
            currentStep++;
            showStep(currentStep);
        }
    }

    function prevStep() {
        if (currentStep > 1) {
            // If we're on step 3 and we skipped step 2, go back to step 1
            if (currentStep === 3 && skippedStep2) {
                currentStep = 1;
            } else {
                // Normal backward progression
                currentStep--;
            }
            showStep(currentStep);
        }
    }

    // Add event listeners to form fields for real-time validation
    document.addEventListener('DOMContentLoaded', () => {
        showStep(currentStep);

        // Get all required fields
        const firstName = document.getElementById('firstName');
        const checkinDate = document.getElementById('checkinDate');
        const checkinTime = document.getElementById('checkinTime');
        const checkoutTime = document.getElementById('checkoutTime');
        const adult = document.getElementById('adult'); 
        const occasionRadios = document.querySelectorAll('input[name="occasion"]');

        // Add input event listeners for real-time validation
        [firstName, checkinDate, checkinTime, checkoutTime, adult].forEach(field => {
            if (field) {
                field.addEventListener('input', validateStep1);
                field.addEventListener('change', validateStep1);
            }
        });

        // Add change listeners for radio buttons
        occasionRadios.forEach(radio => {
            radio.addEventListener('change', validateStep1);
        });

        // Initial validation check
        validateStep1();
    });

    const selects = document.querySelectorAll('.addons-select');
    const qtyInputs = document.querySelectorAll('.addon-qty');
    const qtyButtons = document.querySelectorAll('.qty-btn');

    function updateDisabledOptions() {
        // Get all selected values (excluding empty)
        const selectedValues = Array.from(selects)
            .map(select => select.value)
            .filter(value => value !== "");

        selects.forEach((select, index) => {
            const currentValue = select.value;
            const qtyInput = qtyInputs[index];
            const buttons = qtyInput.parentElement.querySelectorAll('.qty-btn');

            // Disable quantity & buttons if no addon selected
            const disableQty = !currentValue;
            qtyInput.disabled = disableQty;
            buttons.forEach(btn => {
                btn.disabled = disableQty;
                btn.classList.toggle('opacity-50', disableQty);
                btn.classList.toggle('cursor-not-allowed', disableQty);
            });

            // Disable selected add-ons in other dropdowns
            Array.from(select.options).forEach(option => {
                if (option.value && option.value !== currentValue && selectedValues.includes(option.value)) {
                    option.disabled = true;
                } else {
                    option.disabled = false;
                }
            });
        });
    }

    // Add listeners
    selects.forEach(select => {
        select.addEventListener('change', updateDisabledOptions);
    });

    // Initialize
    updateDisabledOptions();

window.openModal = openModal;
window.closeModal = closeModal;
window.prevStep = prevStep;
window.nextStep = nextStep;
window.validateStep1 = validateStep1;
window.showStep = showStep;
window.updateDisabledOptions = updateDisabledOptions;
