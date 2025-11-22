<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('HISTORY') }}
        </h2>
    </x-slot>

        <h2 class="text-xl font-semibold text-gray-700 mb-4">Reservation History</h2>

        <!-- Search -->
        <div class="mb-6">
            <input id="search" type="text" placeholder="Search..." class="w-64 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <x-table.table 
        :headers="[ 
            'Customer',
            'Date',
            'Time',
            'Occasions', 
            'Status',
            'Payment Status'
        ]"

        :rows="$reservationHistory->map(function($history) {
            return [
                'customer' => $history->reservation_id,
                'date' => $history->check_in_date,
                'time' => $history->check_period,
                'ocassions' => $history->occasion,
                'status' => $history->party_status,
                'payment_status' => $history->payment_status,
                
            ];
        })"

        

        empty-message="No sales records found"
    />

</x-app-layout>