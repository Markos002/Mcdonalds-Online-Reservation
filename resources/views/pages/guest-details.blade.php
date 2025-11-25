<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 px-4 space-y-10">
        <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold text-gray-900 tracking-tight">
                Reservation Details
            </h2>
        </div>
        <!-- Guest Information -->
        <div class="bg-white/90 backdrop-blur shadow-md rounded-2xl border border-gray-100 p-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center gap-2">
                <span class="h-3 w-3 rounded-full bg-indigo-500"></span>
                Guest Information
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div>
                    <label class="text-xs uppercase tracking-wide text-gray-500">Full Name</label>
                    <div class="mt-1 bg-gray-50 border rounded-xl px-4 py-3 text-gray-800 font-medium">
                        {{ $reservationDetail->customer_name }}
                    </div>
                </div>

                <div>
                    <label class="text-xs uppercase tracking-wide text-gray-500">Address</label>
                    <div class="mt-1 bg-gray-50 border rounded-xl px-4 py-3 text-gray-800 font-medium">
                        {{ $reservationDetail->full_add }}, {{ $reservationDetail->zip_code }}
                    </div>
                </div>

                <div>
                    <label class="text-xs uppercase tracking-wide text-gray-500">Phone Number</label>
                    <div class="mt-1 bg-gray-50 border rounded-xl px-4 py-3 text-gray-800 font-medium">
                        {{ $reservationDetail->phone }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Party Information -->
        <div class="bg-white/90 backdrop-blur shadow-md rounded-2xl border border-gray-100 p-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center gap-2">
                <span class="h-3 w-3 rounded-full bg-emerald-500"></span>
                Party Information
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 text-sm">
                @php $party = $reservationDetail->partyDetail; @endphp

                @foreach([
                    'Reservation ID' => '#'.$party->reservation_id,
                    'Date' => \Carbon\Carbon::parse($reservationDetail->partyDetail->check_in_date)->format('F j, Y') ,
                    'Time' => $party->check_in_time . ' - ' . $party->check_out_time,
                    'Time Extend' => $party->time_extend . ' hour(s)',
                    'Adults' => $party->adults,
                    'Kids' => $party->kids,
                    'Occasion' => ucfirst($party->occasion),
                    'Event Type' => ucfirst($party->party_package),
                ] as $label => $value)

                <div class="bg-gray-50 border rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wide">{{ $label }}</p>
                    <p class="mt-1 text-gray-800 font-semibold">{{ $value }}</p>
                </div>
                @endforeach

                <div class="bg-gray-50 border rounded-xl p-4">
                    <p class="text-xs text-gray-500 uppercase tracking-wide">Status</p>
                    <span class="inline-block mt-1 px-3 py-1 rounded-full text-xs font-bold
                        @if($party->party_status == 'pending') bg-yellow-100 text-yellow-700
                        @elseif($party->party_status == 'confirmed') bg-blue-100 text-blue-700
                        @elseif($party->party_status == 'finished') bg-green-100 text-green-700
                        @elseif($party->party_status == 'cancelled') bg-red-100 text-red-700
                        @else bg-gray-200 text-gray-600 @endif">
                        {{ ucfirst($party->party_status) }}
                    </span>
                </div>
            </div>
        </div>

        <!-- Ordered Packages -->
        <div class="bg-white shadow-md rounded-2xl border border-gray-100 p-8">
            <h3 class="text-lg font-semibold text-gray-800 mb-6 flex items-center gap-2">
                <span class="h-3 w-3 rounded-full bg-orange-500"></span>
                Ordered Food Packages
            </h3>

            @if($reservationDetail->foodPack && count($reservationDetail->foodPack) > 0)
                <div class="overflow-x-auto rounded-xl border">
                    <table class="min-w-full text-sm">
                        <thead class="bg-gray-50 text-gray-600">
                            <tr>
                                <th class="px-5 py-3 text-left font-semibold">Package</th>
                                <th class="px-5 py-3 text-left font-semibold">Price</th>
                                <th class="px-5 py-3 text-left font-semibold">Qty</th>
                                <th class="px-5 py-3 text-left font-semibold">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservationDetail->foodPack as $package)
                                <tr class="border-t hover:bg-gray-50 transition">
                                    <td class="px-5 py-3 font-medium text-gray-800">{{ $package->name }}</td>
                                    <td class="px-5 py-3">₱{{ number_format($package->price, 2) }}</td>
                                    <td class="px-5 py-3">{{ number_format($package->quantity) }}</td>
                                    <td class="px-5 py-3 font-semibold text-gray-900">₱{{ number_format($package->price * $package->quantity, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-gray-500 text-sm bg-gray-50 border rounded-xl p-4">No packages selected.</div>
            @endif
        </div>

        <!-- Payment Summary -->
        <div class="bg-gradient-to-br from-gray-900 to-gray-800 text-white shadow-2xl rounded-2xl p-8">
            <h3 class="text-lg font-semibold mb-6 flex items-center gap-2">
                <span class="h-3 w-3 rounded-full bg-white"></span>
                Payment Summary
            </h3>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <p class="text-xs uppercase text-gray-300">Payment Status</p>
                    <span class="inline-block mt-2 px-4 py-1.5 rounded-full text-xs font-bold
                        @if($party->payment_status == 'paid') bg-green-500/90
                        @elseif($party->payment_status == 'pending') bg-yellow-500/90 text-black
                        @else bg-red-500/90 @endif">
                        {{ ucfirst($party->payment_status) }}
                    </span>
                </div>

                <div class="text-right">
                    <p class="text-xs uppercase text-gray-300">Grand Total</p>
                    <p class="text-3xl font-bold mt-2 tracking-wide">
                        ₱ {{ number_format($party->grand_total, 2) }}
                    </p>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>