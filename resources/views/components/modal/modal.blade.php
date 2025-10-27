@props([
    'id' => 'defaultModal', // unique modal ID for targeting
    'maxWidth' => 'md', // sm, md, lg, xl, 2xl
])

@php
$maxWidthClass = [
    'sm' => 'sm:max-w-sm',
    'md' => 'sm:max-w-md',
    'lg' => 'sm:max-w-lg',
    'xl' => 'sm:max-w-xl',
    '2xl' => 'sm:max-w-2xl',
][$maxWidth] ?? 'sm:max-w-md';
@endphp

<div id="{{ $id }}" class="fixed inset-0 z-50 hidden items-center justify-center bg-black/50 backdrop-blur-sm transition-opacity duration-300">
    <div 
        class="w-full {{ $maxWidthClass }} mx-4 sm:mx-0 bg-[#F2F3F4] dark:bg-white text-[#1b1b18] dark:text-white shadow-2xl overflow-hidden transform scale-100 transition-all duration-300"
        role="dialog"
        aria-modal="true"
    >
        <!-- Header -->
        <div class="flex items-center justify-between px-6 py-4 bg-[#C04033] border-b border-gray-200 dark:border-gray-700">
                <h2 class="text-lg font-semibold">
                {{ $title ?? 'Modal Title' }}
                </h2>
            <button type="button" class="text-white hover:text-gray-700 dark:hover:text-gray-300 transition" onclick="closeModal('{{ $id }}')">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Body -->
        <div class="p-6 space-y-4">
            {{ $slot }}
        </div>

        <!-- Footer --> 
        @isset($footer)
            <div class="px-6 py-4 border-t border-gray-200 dark:border-gray-700 flex justify-end gap-3">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>

<script>
    
</script>
