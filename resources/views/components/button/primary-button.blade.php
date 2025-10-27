<button type="submit" {{ $attributes->merge(['class'=>"px-5 py-2 bg-[#d9232e] hover:bg-[#b71c24] text-white font-semibold rounded-full shadow-md transition-all"]) }}>
    {{ $slot }}
</button>