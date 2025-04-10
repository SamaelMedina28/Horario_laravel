<x-app-layout>
    <strong
        class="text-center block text-lg  mt-5 border-2 w-45 mx-auto sm:text-xl py-2 leading-6 font-medium tracking-wider">
        MATERIA SELECCIONADA
    </strong>
    <main class="my-7">
        <article class="block mb-5 bg-gray-100 rounded-xl mx-auto shadow-md py-13 px-4 w-3/4 p-3 max-w-100 md:mb-7 md:text-2xl">

            <span class="text-gray-800 block font-sm text-lg mb-1.5 leading-none">Materia:</span>
            <strong class=" text-lg font-medium block leading-none">{{ $horario->materia->nombre }}</strong>
            <span class="text-gray-800 block mt-3 font-sm text-lg mb-1 leading-none">Dia:</span>
            <strong class=" text-lg font-medium block leading-none">{{ $horario->dia->nombre }}</strong>

            <section class="grid grid-cols-2 grid-rows-auto gap-y-1.5 mt-9 mb-4">
                <span class="text-gray-800 font-sm text-lg leading-none">Hora de inicio:</span> {{-- Columna 1 --}}
                <span class="text-gray-800 font-sm text-lg leading-none">Hora de fin:</span> {{-- Columna 2 --}}

                <span class="text-lg font-medium block leading-none mb-3.5">{{ substr($horario->entrada->hora, 0, 5)}}</span> {{-- Columna 1 --}}
                <span class="text-lg font-medium block leading-none">{{ substr($horario->salida->hora, 0, 5)}}</span> {{-- Columna 2 --}}

                <span class="text-gray-800 font-sm text-lg leading-none">Salon:</span> {{-- Columna 1 --}}
                <span class="text-gray-800 font-sm text-lg leading-none">Edificio:</span> {{-- Columna 2 --}}

                <span class="text-lg font-medium block leading-none">{{ $horario->salon->nombre }}</span> {{-- Columna 1 --}}
                <span class="text-lg font-medium block leading-none">{{ $horario->salon->edificio->nombre }}</span> {{-- Columna 2 --}}
            </section>
        </article>

        <x-boton-atras href="{{route('home.dia', $dia)}}" />

    </main>
</x-app-layout>
