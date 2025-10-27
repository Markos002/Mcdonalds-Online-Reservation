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

window.openModal = openModal;
window.closeModal = closeModal;