<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Page Actions --}}
    <div class="flex justify-end flex-wrap items-center gap-3 p-4">

        {{-- Filter Form --}}
        <form id="dashboardFilterForm" 
              method="GET" 
              action="{{ route('admin.dashboard') }}" 
              class="flex items-center gap-3 w-full sm:w-auto py-1.5">

            <input type="hidden" name="year" id="yearInput" value="{{ $selectedYear }}">

            {{-- YEAR DROPDOWN --}}
            <x-dropdown>
                <x-slot:trigger>
                    <button type="button" 
                            class="rounded px-3 py-2 bg-gray-200 hover:bg-gray-300">
                        {{ $selectedYear }}
                    </button>
                </x-slot:trigger>

                <x-slot:content>
                    @foreach ($yearAvailable as $year)
                        <x-dropdown-link href="#" onclick="setYear('{{ $year }}')">
                            {{ $year }}
                        </x-dropdown-link>
                    @endforeach
                </x-slot:content>
            </x-dropdown>

        </form>
    </div>
    <!-- Reservation Overview -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        <div class="p-5 bg-white border rounded shadow">
            <h3 class="text-gray-600 text-sm">Pending</h3>
            <p class="text-3xl font-bold">{{ $reservationOverview['pending'] }}</p>
        </div>
        <div class="p-5 bg-white border rounded shadow">
            <h3 class="text-gray-600 text-sm">Ongoing</h3>
            <p class="text-3xl font-bold">{{ $reservationOverview['ongoing'] }}</p>
        </div>
        <div class="p-5 bg-white border rounded shadow">
            <h3 class="text-gray-600 text-sm">Completed</h3>
            <p class="text-3xl font-bold">{{ $reservationOverview['completed'] }}</p>
        </div>
        <div class="p-5 bg-white border rounded shadow">
            <h3 class="text-gray-600 text-sm">Cancelled</h3>
            <p class="text-3xl font-bold">{{ $reservationOverview['cancelled'] }}</p>
        </div>
    </div>
    <x-analytics.bargraph :data="$reservationTrends"/>

    <x-analytics.line :data="$salesIncome"/>
</x-app-layout>

<script>
    function setYear(year) {
        document.getElementById('yearInput').value = year;
        document.getElementById('dashboardFilterForm').submit();
    }
</script>
