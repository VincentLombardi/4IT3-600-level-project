<x-app-layout title="Settings">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="h-64 grid grid-rows-3 grid-cols-3 grid-flow-col gap-x-10 gap-y-12 items-center">
                        <button class="justify-self-center border border-gray-800 rounded"><a href="#">1</a></button>
                        <button class="justify-self-center border border-gray-800 rounded">2</button>
                        <button class="justify-self-center border border-gray-800 rounded">3</button>
                        <button class="justify-self-center border border-gray-800 rounded">4</button>
                        <button class="justify-self-center border border-gray-800 rounded">5</button>
                        <button class="justify-self-center border border-gray-800 rounded">6</button>
                        <button class="justify-self-center border border-gray-800 rounded">7</button>
                        <button class="justify-self-center border border-gray-800 rounded">8</button>
                        <button class="justify-self-center border border-gray-800 rounded">9</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
