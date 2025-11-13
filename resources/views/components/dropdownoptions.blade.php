@props([
    'id' => null,
    'name' => null,
    'label' => null,
    'options' => [],
    'placeholder' => 'Select...',
])

<div
    x-data="{
        open: false,
        selected: '',
        select(option) {
            this.selected = option;
            this.open = false;
            $refs.input.value = option;
        }
    }"
    class="mb-3 relative"
>
    @if($label)
        <label class="block text-gray-600 text-sm mb-1">{{ $label }}</label>
    @endif

    <div
        @click="open = !open"
        class="border border-gray-300 rounded p-2 text-sm bg-white cursor-pointer flex justify-between items-center hover:border-blue-400"
    >
        <span x-text="selected || '{{ $placeholder }}'" class="text-gray-700"></span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M19 9l-7 7-7-7" />
        </svg>
    </div>

    <input type="hidden" x-ref="input" id="{{ $id }}" name="{{ $name }}">

    <!-- Dropdown List -->
    <div
        x-show="open"
        @click.outside="open = false"
        class="absolute mt-1 w-full bg-white border border-gray-200 rounded-xl shadow-lg max-h-48 overflow-y-auto z-50"
        x-transition
    >
        @foreach($options as $option)
            <div
                @click="select('{{ $option }}')"
                class="p-2 text-sm text-gray-700 hover:bg-blue-100 cursor-pointer"
            >
                {{ $option }}
            </div>
        @endforeach

        @if (empty($options))
            <div class="p-2 text-sm text-gray-400">No options available</div>
        @endif
    </div>
</div>
