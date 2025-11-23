<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PAYMENT PENDING') }}
        </h2>
    </x-slot>

        <h2 class="text-xl font-semibold text-gray-700 mb-4">Sales Information</h2>

        <!-- Search -->
        <div class="mb-6">
            <input id="search" type="text" placeholder="Search..." class="w-64 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <x-table.table 
        :headers="[
            'ID', 
            'Date', 
            'Customer', 
            'Payable Amount',  
        ]"

        :rows="$pendingPayments->map(function($payment) {
            return [
                'id' => $payment->partyDetail->reservation_id,
                'date' => $payment->partyDetail->created_at->format('F j, Y'),
                'customer' => $payment->customer,
                'payable_amount' => '₱ ' . number_format($payment->partyDetail->grand_total, 2),
                
            ];
        })"

        :actions="$pendingPayments->map(function($payment) {
            return 
            [
                ['label' => 'Edit', 'type' => 'edit', 'url' => route('admin.reservation-edit', ['guestId' => $payment->partyDetail->guest_id])],
                ['label' => 'Accept', 'type' => 'done', 'url' => '#','confirm' => 'accept'],
                ['label' => 'Cancel', 'type' => 'cancel', 'url' => '#','confirm' => 'cancel'],
            ];
        })"

        empty-message="No sales records found"
    />

</x-app-layout>