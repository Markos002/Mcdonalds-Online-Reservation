<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PAYMENT PENDING') }}
        </h2>
    </x-slot>

        <h2 class="text-xl font-semibold text-gray-700 mb-4">Reservation History</h2>

        <!-- Search -->
        <div class="mb-6">
            <input id="search" type="text" placeholder="Search..." class="w-64 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <x-table.table 
        :headers="[
            'ID', 
            'Date', 
            'Check in Period',
            'Extension',
            'Payable Amount',  
        ]"

        :rows="$myHistory->map(function($payment) {
            return [
                'id' => $payment->partyDetail->reservation_id,
                'date' => $payment->partyDetail->check_in_date,
                'check_in_period' => $payment->partyDetail->check_period,
                'extend' => $payment->partyDetail->extended_time,
                'payable_amount' => '₱ ' . number_format($payment->partyDetail->grand_total, 2),
                
            ];
        })"

        :actions="$myHistory->map(function($history) { 
            return [
                        [
                            'label' => 'View', 
                            'type' => 'view', 
                            'url' => route('guest.reservation-details', ['guest_id' => $history->partyDetail->guest_id])
                        ],
                    ];
        })"
      
        empty-message="No sales records found"
    />

</x-app-layout>