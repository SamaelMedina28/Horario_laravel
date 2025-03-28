<x-app-layout>
    <h1 class="text-center mt-7 mb-10">
        <strong
            class="text-center inline-block text-xl border-2 px-5 mx-auto md:text-2xl py-1 font-medium">{{ ucfirst($dia) }}
        </strong>
    </h1>

    <main class="my-5">

        @foreach ($materias as $horario)
            <a class="block mb-5 bg-gray-100 text-center rounded-xl mx-auto shadow-md py-2.5 w-3/4 font-medium hover:bg-gray-200 max-w-100 md:mb-7"
                href="{{ route('home.materia', [$dia, $horario->materia->slug ]) }}">
                <span
                    class="text-center text-[24px] md:text-2xl w-3/5 block mx-auto leading-none my-1 font-medium">{{ $horario->materia->nombre }}</span>
                <span class="pb-1 block text-center text-lg">{{ substr($horario->entrada->hora, 0, 5) }} -
                    {{ substr($horario->salida->hora, 0, 5) }}</span>
            </a>
        @endforeach
        <a href="{{ route('home.index') }}"
            class="mt-10 w-30 rounded-3xl mx-auto py-1.5 select-none bg-green-600 flex items-center justify-center">
            <i class="fas fa-arrow-left text-white text-xl"></i>
        </a>
    </main>

</x-app-layout>
