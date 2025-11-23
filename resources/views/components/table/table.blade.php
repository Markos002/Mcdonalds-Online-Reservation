@props([
    'headers' => [],
    'rows' => [],
    'actions' => [],
    'emptyMessage' => 'No data available',
])

<div class="w-full overflow-x-auto bg-white shadow-md rounded-xl border border-gray-200">
    <table class="w-full min-w-full table-auto divide-y divide-gray-200">

        {{-- Table Header --}}
        <thead class="bg-gray-100 text-gray-800">
            <tr>
                @foreach ($headers as $header)
                    <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold uppercase whitespace-nowrap">
                        {{ $header }}
                    </th>
                @endforeach

                @if (!empty($actions))
                    <th class="px-4 py-3 text-left text-xs sm:text-sm font-semibold uppercase whitespace-nowrap">
                        Actions
                    </th>
                @endif
            </tr>
        </thead>

        {{-- Table Body --}}
        <tbody class="divide-y divide-gray-100 bg-white text-gray-800">

            @forelse ($rows as $index => $row)
                <tr class="hover:bg-gray-50 transition duration-150">

                    {{-- Dynamic Cells --}}
                    @foreach ($row as $key => $cell)

                        @php
                            $statusClasses = '';

                            // Payment Status badges
                            if ($key === 'payment_status') {
                                $statusClasses = match(strtolower($cell)) {
                                    'paid' => 'bg-green-100 text-green-700',
                                    'pending' => 'bg-yellow-100 text-yellow-700',
                                    'unpaid' => 'bg-red-100 text-red-700',
                                    default => 'bg-gray-100 text-gray-700'
                                };
                            }

                            // Party Status badges
                            if ($key === 'status') {
                                $statusClasses = match(strtolower($cell)) {
                                    'confirmed' => 'bg-blue-100 text-blue-700',
                                    'finished' => 'bg-green-100 text-green-700',
                                    'cancelled' => 'bg-red-100 text-red-700',
                                    'pending' => 'bg-yellow-100 text-yellow-700',
                                    default => 'bg-gray-100 text-gray-700'
                                };
                            }
                        @endphp

                        <td class="px-4 py-3 text-xs sm:text-sm whitespace-nowrap">

                            {{-- Hash links --}}
                            @if(Str::startsWith($cell, '#'))
                                <span class="text-blue-600 font-medium hover:underline cursor-pointer">
                                    {{ $cell }}
                                </span>

                            {{-- Status Badges --}}
                            @elseif($key === 'payment_status' || $key === 'status')
                                <span class="px-3 py-1 text-xs font-semibold rounded-full {{ $statusClasses }}">
                                    {{ ucfirst($cell) }}
                                </span>

                            {{-- Normal text --}}
                            @else
                                {{ $cell }}
                            @endif

                        </td>
                    @endforeach

                    {{-- Action Buttons --}}
                    @if (!empty($actions))
                        <td class="px-4 py-3 whitespace-nowrap">
                            <div class="flex flex-wrap gap-2">
                                @foreach ($actions[$index] ?? [] as $action)
                                    @php
                                        $type = $action['type'] ?? 'default';

                                        $colorClasses = match($type) {
                                            'edit' => 'bg-blue-100 text-blue-600 hover:bg-red-200',
                                            'done' => 'bg-green-100 text-green-600 hover:bg-green-200',
                                            'cancel' => 'bg-red-100 text-red-600 hover:bg-red-200',
                                            'add' => 'bg-red-600 text-white hover:bg-red-700',
                                            default => 'bg-gray-200 text-gray-700 hover:bg-gray-300'
                                        };
                                    @endphp

                                    @if(in_array($type, ['done', 'cancel']))
                                        <button
                                            type="button"
                                            onclick="openConfirmModal('{{ $type }}', '{{ $action['url'] }}')"
                                            class="px-4 py-1.5 text-xs font-semibold rounded-md transition {{ $colorClasses }}">
                                            {{ $action['label'] }}
                                        </button>
                                    @else
                                        <a href="{{ $action['url'] }}"
                                        class="px-4 py-1.5 text-xs font-semibold rounded-md transition {{ $colorClasses }}">
                                            {{ $action['label'] }}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </td>
                    @endif
                </tr>

            @empty
                <tr>
                    <td colspan="{{ count($headers) + 1 }}"
                        class="px-4 py-12 text-center text-gray-500 text-sm">

                        <div class="flex flex-col items-center gap-2">
                            <svg class="w-12 h-12 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                                </path>
                            </svg>
                            <p class="font-medium">{{ $emptyMessage }}</p>
                        </div>

                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
<!-- MODAL -->
<div id="confirmModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-40">
    <div class="bg-white rounded-xl shadow-lg p-6 w-full max-w-md">
        <h2 class="text-lg font-semibold mb-3">Confirm Action</h2>

        <p id="confirmMessage" class="text-gray-600 mb-6 text-sm"></p>

        <div class="flex justify-end gap-2">
            <button onclick="closeConfirmModal()"
                    class="px-4 py-2 text-sm rounded bg-gray-200 hover:bg-gray-300">
                No
            </button>

            <a id="confirmButton"
                class="px-5 py-2 text-sm rounded transition cursor-pointer">
                Yes
            </a>
        </div>
    </div>
</div>


<script>
function openConfirmModal(actionType, url) {

    const modal = document.getElementById('confirmModal');
    const message = document.getElementById('confirmMessage');
    const confirmBtn = document.getElementById('confirmButton');

    if (actionType === 'done') {
        message.innerText = "Are you sure you want to ACCEPT this reservation?";
        confirmBtn.className = "px-5 py-2 text-sm rounded bg-green-600 text-white hover:bg-green-700 transition";
    } 
    else if (actionType === 'cancel') {
        message.innerText = "Are you sure you want to CANCEL this reservation?";
        confirmBtn.className = "px-5 py-2 text-sm rounded bg-red-600 text-white hover:bg-red-700 transition";
    }

    confirmBtn.href = url;

    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeConfirmModal() {
    const modal = document.getElementById('confirmModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}
</script>

