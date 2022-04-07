<x-app-layout title="Resources">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Resources') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden px-4 shadow-sm sm:rounded-lg">
                <div class="mb-6 mt-6 pb-2">
                    <h2 class="text-3xl font-black">Resources</h2>
                </div>
                <p class="text-xl text-gray-500 mb-6">
                    Resources used for this project include the following:
                </p>
                <p class="text-gray-500 mb-6">
                <ul class="text-gray-500 mt-6 mb-6 list-disc list-inside">
                    <li class="mb-2"><a class="hover:text-blue-400" href="https://laravel-news.com/your-first-laravel-application">Laravel Sail</a></li>
                    <li class="mb-2"><a class="hover:text-blue-400" href="https://blade-ui-kit.com/">Blade UIKit</a></li>
                    <li class="mb-2"><a class="hover:text-blue-400" href="https://tailwindcss.com/">Tailwinds CSS</a></li>
                    <li class="mb-2"><a class="hover:text-blue-400" href="https://tailwind-elements.com/">Tailwinds Elements</a></li>
                    <li class="mb-2"><a class="hover:text-blue-400" href="https://laravel-livewire.com/">Livewire</a></li>
                    <li class="mb-2"><a class="hover:text-blue-400" href="https://fhs.mcmaster.ca/webdesign/web_colours.html">McMaster Branding Standards & Logo</a></li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
