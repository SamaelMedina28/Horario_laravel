<x-app-layout>
    <strong class="text-center block text-xl py-1 mt-5 border-2 w-20 mx-auto sm:text-2xl md:w-23 font-medium">Dias</strong>
    <main class="my-5">
        <x-boton href="{{route('home.dia', ['dia' => 'lunes'])}}" texto="Lunes"/>
        <x-boton href="{{route('home.dia', ['dia' => 'martes'])}}" texto="Martes"/>
        <x-boton href="{{route('home.dia', ['dia' => 'miercoles'])}}" texto="Miercoles"/>
        <x-boton href="{{route('home.dia', ['dia' => 'miercoles'])}}" texto="Jueves"/>
        <x-boton href="{{route('home.dia', ['dia' => 'jueves'])}}" texto="Viernes"/>
    </main>
</x-app-layout>
