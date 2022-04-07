<x-app-layout title="Users">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="block rounded-lg shadow-lg max-w-screen-2xl mt-4 mx-auto sm:px-6 lg:px-8 bg-white">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full mb-0">
                            <thead class="border-b rounded-t-lg text-left">
                            <tr>
                                <th scope="col" class="rounded-tl-lg text-sm font-medium px-6 py-4">ID</th>
                                <th scope="col" class="rounded-tl-lg text-sm font-medium px-6 py-4">NAME</th>
                                <th scope="col" class="text-sm font-medium px-6 py-4">EMAIL</th>
                                <th scope="col" class="text-sm font-medium px-6 py-4">EMAIL VERRIFIED?</th>
                                <th scope="col" class="text-sm font-medium px-6 py-4">CREATED AT</th>
                                <th scope="col" class="rounded-tr-lg text-sm font-medium px-6 py-4"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $value)
                                <tr class="border-b bg-gray-100">
                                    <th class="text-sm font-medium px-6 py-4 whitespace-nowrap text-left" scope="row">{{$value->id}}</th>
                                    <th class="text-sm font-medium px-6 py-4 whitespace-nowrap text-left" scope="row">{{$value->name}}</th>
                                    <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left text-gray-500">{{$value->email}}</td>
                                    <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left text-gray-500">
                                        @if(!($value->email_verified_at == null)) True @else False @endif</td>
                                    <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-left text-gray-500">{{$value->created_at}}</td>
                                    <td class="text-sm font-normal px-6 py-4 whitespace-nowrap text-right">
                                        <a href="#!" class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out">Edit</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
