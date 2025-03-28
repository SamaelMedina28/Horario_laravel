<x-app-layout>
    <strong class="text-center block text-xl py-1 mt-5 border-2 w-20 mx-auto sm:text-2xl md:w-23 font-medium">Dias</strong>
    <main class="my-5">
        <a class="block mb-5 bg-gray-100 text-[24px]  text-center rounded-xl mx-auto shadow-md py-2 w-3/4 font-medium hover:bg-gray-200 max-w-100 md:mb-7 md:text-[27px]" href="{{route('home.dia', ['dia' => 'Lunes'])}}">
            Lunes
        </a>
        <a class="block mb-5 bg-gray-100 text-[24px]  text-center rounded-xl w-3/4 mx-auto shadow-md py-2 font-medium hover:bg-gray-200 max-w-100 md:mb-7 md:text-[27px]" href="{{route('home.dia', ['dia' => 'Martes'])}}">
            Martes
        </a>
        <a class="block mb-5 bg-gray-100 text-[24px]  text-center rounded-xl w-3/4 mx-auto shadow-md py-2 font-medium hover:bg-gray-200 max-w-100 md:mb-7 md:text-[27px]" href="{{route('home.dia', ['dia' => 'miercoles'])}}">
            Miercoles
        </a>
        <a class="block mb-5 bg-gray-100 text-[24px]  text-center rounded-xl w-3/4 mx-auto shadow-md py-2 font-medium hover:bg-gray-200 max-w-100 md:mb-7 md:text-[27px]" href="{{route('home.dia', ['dia' => 'jueves'])}}">
            Jueves
        </a>
        <a class="block mb-5 bg-gray-100 text-[24px]  text-center rounded-xl w-3/4 mx-auto shadow-md py-2 font-medium hover:bg-gray-200 max-w-100 md:mb-7 md:text-[27px]" href="{{route('home.dia', ['dia' => 'viernes'])}}">
            Viernes
        </a>
    </main>
</x-app-layout>
