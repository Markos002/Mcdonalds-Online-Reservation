<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guest Dashboard') }}
        </h2>
    </x-slot>
    <div class="border-l-2 border-green-500 bg-gray-100 p-3 rounded-lg m-1"> To Reserve Select a Date and check the availability</div>
    <div id="calendar"></div>

    <!-- Modal -->
    <div id="timeModal" class="hidden fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl shadow-xl w-96 p-6">
            <h3 class="text-lg font-semibold text-gray-700 mb-4 text-center">Select Time In / Out</h3>

            <form id="timeForm">
                @csrf
                <input type="hidden" id="selectedDate" name="date">

                <div class="mb-3">
                    <label class="block text-gray-600 text-sm mb-1">Time In</label>
                    <select id="timeIn" name="time_in" class="w-full border border-gray-300 rounded p-2 text-sm">
                        <option value="">Select...</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="block text-gray-600 text-sm mb-1">Time Out</label>
                    <select id="timeOut" name="time_out" class="w-full border border-gray-300 rounded p-2 text-sm">
                        <option value="">Select...</option>
                    </select>
                </div>

                <div class="flex justify-end space-x-2 mt-4">
                    <button type="button" id="cancelBtn" class="px-4 py-2 border border-gray-300 rounded text-gray-600 hover:bg-gray-100 text-sm">
                        Cancel
                    </button>
                    <button type="submit" id="saveBtn" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

<!-- ✅ Include Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    const modal = document.getElementById('timeModal');
    const timeIn = document.getElementById('timeIn');
    const timeOut = document.getElementById('timeOut');
    const selectedDate = document.getElementById('selectedDate');

    const calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        
        dateClick: function(info) {
            const date = info.dateStr;
            selectedDate.value = date;

            //  Check if date is available (POST to backend)
            axios.post(`{{ route('guest.date.request') }}`, {
                date: date
            }, {
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => {
                const data = response.data;

                if (data.available) {
                    populateTimeOptions(timeIn);
                    populateTimeOptions(timeOut);
                    modal.classList.remove('hidden');
                } else {
                    alert(`Date ${date} is already occupied.`);
                }
            })
            .catch(error => {
                console.error('Error checking availability:', error);
            });
        }
    });

    calendar.render();

    function populateTimeOptions(selectEl, options) {
        selectEl.innerHTML = '<option value="">Select...</option>';
        options.forEach(time => {
            const opt = document.createElement('option');
            opt.value = time;
            opt.textContent = time;
            selectEl.appendChild(opt);
        });
    }

    // Handle form submit (temporary event)
    document.getElementById('timeForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const date = selectedDate.value;
        const timeInVal = timeIn.value;
        const timeOutVal = timeOut.value;

        if (!timeInVal || !timeOutVal) {
            alert('Please select both Time In and Time Out.');
            return;
        }

        // Just add a temporary event (for now)
        calendar.addEvent({
            title: `Guest (${timeInVal} - ${timeOutVal})`,
            start: `${date}T${timeInVal}`,
            end: `${date}T${timeOutVal}`,
            allDay: false
        });

        modal.classList.add('hidden');
    });

    document.getElementById('cancelBtn').addEventListener('click', function() {
        modal.classList.add('hidden');
    });

    modal.addEventListener('click', function(e) {
        if (e.target === modal) modal.classList.add('hidden');
    });
});
</script>
