<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    {{-- Page Actions --}}
    <div class="flex flex-wrap items-center gap-3 p-4">

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
</x-app-layout>

<script>
    function setYear(year) {
        document.getElementById('yearInput').value = year;
        document.getElementById('dashboardFilterForm').submit();
    }
</script>
