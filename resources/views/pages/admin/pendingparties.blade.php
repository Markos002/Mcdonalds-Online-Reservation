<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PENDING PARTIES') }}
        </h2>
    </x-slot>

        <h2 class="text-xl font-semibold text-gray-700 mb-4">ON GOING PARTIES</h2>

        <!-- Search -->
        <div class="mb-6">
            <input id="search" type="text" placeholder="Search..." class="w-64 px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none">
        </div>

        <x-table.table 
        :headers="[
            'Customer', 
            'Date', 
            'Occasions',
            'Payment Status',
            'Status',
        ]"

        :rows="$pendingParties->map(function($pendingParty) {
            return [
                'customer' => $pendingParty->customer,
                'date' => $pendingParty->partyDetail->check_in_date,
                'occasions' => $pendingParty->partyDetail->occasion,
                'payment_status' => $pendingParty->partyDetail->payment_status,
                'status' => $pendingParty->partyDetail->party_status,
            ];
        })"

        :actions="collect([
            [
                ['label' => 'View', 'type' => 'view', 'url' => '#'],
            ],
            [
                ['label' => 'View', 'type' => 'view', 'url' => '#'],
            ],
            [
                ['label' => 'View', 'type' => 'view', 'url' => '#'],
            ],
        ])"

        empty-message="No sales records found"
    />

</x-app-layout>