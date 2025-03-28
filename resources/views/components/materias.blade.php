@props([
    'href' => '#', // Enlace por defecto
    'materia' => 'Materia Desconocida', // Nombre de la materia
    'horaInicio' => '00:00', // Hora de entrada
    'horaFin' => '00:00' // Hora de salida
])

<a class="block mb-5 bg-gray-100 text-center rounded-xl mx-auto shadow-md py-2.5 w-3/4 font-medium hover:bg-gray-200 max-w-100 md:mb-7"
   href="{{ $href }}">
    <span class="text-center text-[24px] md:text-2xl w-3/5 block mx-auto leading-7.5 my-1 font-medium">
        {{ $materia }}
    </span>
    <span class="pb-1 block text-center text-lg">
        {{ $horaInicio }} - {{ $horaFin }}
    </span>
</a>
