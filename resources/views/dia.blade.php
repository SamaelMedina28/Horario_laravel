<x-app-layout>
    <strong class="text-center block text-lg mt-5 border-2 w-25 mx-auto sm:text-xl sm:py-1">{{ucfirst($dia);}}
</strong>
    <main class="my-5">
        <a class="block mb-5 bg-gray-100 text-center rounded-xl mx-auto shadow-md py-2 w-3/4 font-medium hover:bg-gray-200 max-w-100 md:mb-7" href="/{{$dia}}/Programacion">
            <strong class="py-1 block text-center text-2xl md:text-2xl">Programacion avanzada</strong>
            <span class="pb-1 block text-center text-xl">12:00 - 14:00</span>
        </a>

    </main>
</x-app-layout>
