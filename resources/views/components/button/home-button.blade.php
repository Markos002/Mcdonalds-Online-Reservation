@props([
    'hrefLink',
    'label'
])

<button {{ $attributes->merge(['class' => 'inline-block px-5 py-1.5 text-[#1b1b18] border-white border py-2 px-5 text-white font-semibold rounded-xl hover:bg-red-800']) }}>
    <a href="{{$hrefLink ?? ""}}">{{ $slot }}</a>
</button>