<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guest Dashboard') }}
        </h2>
    </x-slot>

    <!-- INFO ALERT -->
    <div class="border-l-4 border-green-500 bg-green-50 text-green-800 p-3 rounded-lg m-4">
        To reserve, select a date and check the available time slots.
    </div>

    <!-- CALENDAR -->
    <div id="calendar" class="m-4 bg-white p-4 rounded-xl shadow"></div>

    <!-- MODAL -->
    <div id="timeModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-xl w-96 p-6 relative">
            <h3 class="text-lg font-semibold text-gray-700 mb-4 text-center">Select Time In / Time Out</h3>

            <form id="timeForm">
                @csrf   
                <input type="hidden" id="selectedDate" name="date">

                <!-- Time In -->
                <x-dropdownoptions id="timeIn" name="time_in" label="Time In" :options="[]" placeholder="Select..." />

                <div class="flex justify-end space-x-2 mt-4">
                    <button type="button" id="cancelBtn"
                        class="px-4 py-2 border border-gray-300 rounded text-gray-600 hover:bg-gray-100 text-sm">
                        Cancel
                    </button>
                    <button type="submit" id="saveBtn"
                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>

<!-- JS Dependencies -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
<script src="//unpkg.com/alpinejs" defer></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const modal = document.getElementById('timeModal');
    const selectedDate = document.getElementById('selectedDate');
    const cancelBtn = document.getElementById('cancelBtn');
    const displayTimes = document.getElementById('displayTimes');

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        selectable: true,
        height: 'auto',
        validRange: {
                start: new Date().toISOString().split("T")[0]
            },
        dateClick: function(info) {
            const today = new Date().toISOString().split("T")[0];

            if (info.dateStr < today) {
                alert("You cannot reserve a past date.");
                return;
            }
            const date = info.dateStr;
            selectedDate.value = date;

            axios.post(`{{ route('guest.date.request') }}`, 
                { date: date },
                { headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' } }
            )
            .then(response => {
                const data = response.data;
                console.log("Received data:", data);

                if (data.success && data.available) {
                    updateDropdown('timeIn', data.time_slots);

                    modal.classList.remove('hidden');
                } else if (data.success) {
                    alert(`No available time slots for ${date}.`);
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error checking availability:', error);
                alert('Something went wrong while checking availability.');
            });
        }
    });

    calendar.render();

    //update dropdown
    function updateDropdown(id, options) {
        const dropdownRoot = document.getElementById(id)?.closest('[x-data]');
        if (!dropdownRoot) return;

        const container = dropdownRoot.querySelector('[x-show]');
        if (!container) return;
        container.innerHTML = '';

        if (!options.length) {
            container.innerHTML = `<div class="p-2 text-sm text-gray-400">No options available</div>`;
            return;
        }

        options.forEach(option => {
            const div = document.createElement('div');
            div.textContent = option;
            div.className = 'p-2 text-sm text-gray-700 hover:bg-blue-100 cursor-pointer';
            div.addEventListener('click', () => {
                const alpine = Alpine.$data(dropdownRoot);
                alpine.select(option);
            });
            container.appendChild(div);
        });
    }

    document.getElementById('timeForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const date = selectedDate.value;
        const timeInVal = document.getElementById('timeIn').value;

        if (!timeInVal) {
            alert('Please select both Time In and Time Out.');
            return;
        }

        modal.classList.add('hidden');
        const url = `{{ route('guest.reservations') }}?date=${encodeURIComponent(date)}&time_in=${encodeURIComponent(timeInVal)}`;
        window.location.href = url;
    });

    cancelBtn.addEventListener('click', () => modal.classList.add('hidden'));
    modal.addEventListener('click', (e) => { if (e.target === modal) modal.classList.add('hidden'); });
});
</script>