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

        :rows="collect([
            [
                'id' => '#AHGA68',
                'date' => '23/09/2022',
                'customer' => 'Jacob Marcus',
                'payable_amount' => '₱100',
            ],
            [
                'id' => '#AHGA69',
                'date' => '24/09/2022',
                'customer' => 'Ella Grace',
                'payable_amount' => '₱250',
            ],
            [
                'id' => '#AHGA70',
                'date' => '25/09/2022',
                'customer' => 'Lucas Nathan',
                'payable_amount' => '₱500',
            ],
        ])"

        :actions="collect([
            [
                ['label' => 'Edit', 'type' => 'edit', 'url' => '#'],
            ],
            [
                ['label' => 'Edit', 'type' => 'edit', 'url' => '#'],
            ],
            [   
                ['label' => 'Edit', 'type' => 'edit', 'url' => '#'],
            ],
        ])"

        empty-message="No sales records found"
    />

</x-app-layout>