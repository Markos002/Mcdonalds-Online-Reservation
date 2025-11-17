// =====================
// MODAL CONTROL
// =====================
function openModal(id) {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}

function closeModal(id) {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.body.style.overflow = '';
}

// Close modal when clicking outside
document.addEventListener('click', (e) => {
    const modal = e.target.closest('[id$="Modal"]');
    if (modal && e.target === modal) closeModal(modal.id);
});

// =====================
// STEP NAVIGATION LOGIC
// =====================
let currentStep = 1;
let skippedStep2 = false;

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
    if (step === 1) validateStep1(); // Revalidate on step 1
}

function validateStep1() {
    const firstName = document.getElementById('first_name');
    const checkinDate = document.getElementById('check_in_date');
    const checkinTime = document.getElementById('check_in_time');
    //const checkoutTime = document.getElementById('check_out_time');
    const adult = document.getElementById('adult'); // ✅ fixed ID mismatch
    const occasion = document.querySelector('input[name="occasion"]:checked');

    const isValid = firstName?.value.trim() &&
                    checkinDate?.value &&
                    checkinTime?.value &&
                    //checkoutTime?.value &&
                    adult?.value &&
                    occasion;

    nextBtn.disabled = !isValid;
    return !!isValid;
}

function nextStep() {
    const occasion = document.querySelector('input[name="occasion"]:checked')?.value;
    if (currentStep === 1) {
        if (!validateStep1()) return;

        if (occasion === 'birthday') {
            skippedStep2 = false;
            currentStep = 2;
        } else {
            skippedStep2 = true;
            currentStep = 3;
        }
    } else if (currentStep < steps.length) {
        currentStep++;
    }
    showStep(currentStep);
}

function prevStep() {
    if (currentStep > 1) {
        currentStep = (currentStep === 3 && skippedStep2) ? 1 : currentStep - 1;
        showStep(currentStep);
    }
}

// =====================
// ADD-ON LOGIC
// =====================
const selects = document.querySelectorAll('.addons-select');
const qtyInputs = document.querySelectorAll('.addon-qty');

function updateDisabledOptions() {
    const selectedValues = Array.from(selects)
        .map(select => select.value)
        .filter(Boolean);

    selects.forEach((select, index) => {
        const currentValue = select.value;
        const qtyInput = qtyInputs[index];
        const buttons = qtyInput?.parentElement.querySelectorAll('.qty-btn') || [];

        const disableQty = !currentValue;
        qtyInput.disabled = disableQty;
        buttons.forEach(btn => {
            btn.disabled = disableQty;
            btn.classList.toggle('opacity-50', disableQty);
            btn.classList.toggle('cursor-not-allowed', disableQty);
        });

        Array.from(select.options).forEach(option => {
            option.disabled = option.value && 
                              option.value !== currentValue &&
                              selectedValues.includes(option.value);
        });
    });
}

selects.forEach(select => select.addEventListener('change', updateDisabledOptions));

// =====================
// INITIALIZATION
// =====================
document.addEventListener('DOMContentLoaded', () => {
    showStep(currentStep);

    // Attach validation listeners
    const firstName = document.getElementById('first_name');
    const checkinDate = document.getElementById('check_in_date');
    const checkinTime = document.getElementById('check_in_time');
    //const checkoutTime = document.getElementById('check_out_time');
    const adult = document.getElementById('adult');
    const occasionRadios = document.querySelectorAll('input[name="occasion"]');

    [firstName, checkinDate, checkinTime, /*checkoutTime*/, adult].forEach(field => {
        field?.addEventListener('input', validateStep1);
        field?.addEventListener('change', validateStep1);
    });

    occasionRadios.forEach(radio => radio.addEventListener('change', validateStep1));

    updateDisabledOptions();
    validateStep1();
});




// Make functions globally accessible for inline HTML calls
window.openModal = openModal;
window.closeModal = closeModal;
window.prevStep = prevStep;
window.nextStep = nextStep;
