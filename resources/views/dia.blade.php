<x-app-layout>
    <h1 class="text-center mt-7 mb-10">
        <strong
            class="text-center inline-block text-xl border-2 px-5 mx-auto md:text-2xl py-1 font-medium">{{ ucfirst($dia) }}
        </strong>
    </h1>

    <main class="my-5">
        @foreach ($materias as $horario)
            <x-materias
            href="{{ route('home.materia', [$dia, $horario->materia->slug]) }}"
            materia="{{ $horario->materia->nombre }}"
            horaInicio="{{ substr($horario->entrada->hora, 0, 5) }}"
            horaFin="{{ substr($horario->salida->hora, 0, 5) }}"
            />
        @endforeach
        <x-boton-atras href="{{route('home.index')}}" />
    </main>
</x-app-layout>
