<x-app-layout>
    <strong class="text-center block text-xl mt-5 border-2 w-25 mx-auto md:text-2xl py-1">{{ ucfirst($dia) }}
    </strong>
    <main class="my-5">
        <a class="block mb-5 bg-gray-100 text-center rounded-xl mx-auto shadow-md py-2.5 w-3/4 font-medium hover:bg-gray-200 max-w-100 md:mb-7"
            href="/{{ $dia }}/Programacion">
            <span class="text-center text-[24px] md:text-2xl w-3/5 block mx-auto leading-none my-1 font-medium">Programacion Estructurada</span>
            <span class="pb-1 block text-center text-lg">12:00 - 14:00</span>
        </a>

    </main>
</x-app-layout>
