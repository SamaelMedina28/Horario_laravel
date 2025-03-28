@props(['href' => '#', 'texto'])

<a class="block mb-5 bg-gray-100 text-[24px] text-center rounded-xl w-3/4 mx-auto shadow-md py-2 font-medium hover:bg-gray-200 max-w-100 md:mb-7 md:text-[27px]"
   href="{{ $href }}">
    {{ $texto }}
</a>
