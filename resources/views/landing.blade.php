<x-guest-layout>
        <div class="px-6 py-12 text-gray-800 text-center lg:text-left">
            <div class="mx-auto xl:px-32">
                <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                    <div class="mt-12 lg:mt-0">
                        <h1 class="text-4xl md:text-5xl xl:text-6xl font-bold tracking-tight text-mcmaster-gray mb-12">Welcome to the SEPT Manufacturing Execution System <br /><span class="text-3xl md:text-4xl xl:text-5xl text-mcmaster-burgundy">PROCTECH-4IT3 Project</span></h1>
                        <a class="inline-block px-9 py-3 mr-1 bg-mcmaster-gray text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-gray-800 hover:shadow-lg focus:bg-gray-800 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-mcmaster-burgundy active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{route('login')}}" role="button">Login</a>
                        <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="{{url('learn')}}" role="button">Learn more</a>
                    </div>
                    <div class="mb-12 lg:mb-0">
                        <div class="embed-responsive embed-responsive-16by9 relative w-full overflow-hidden" style="padding-top: 56.25%" >
                        <iframe
                           src="https://www.youtube.com/embed/c-_vr_RP-ms"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            class="rounded-lg shadow-lg embed-responsive-item absolute top-0 right-0 bottom-0 left-0 w-full h-full"
                            allowfullscreen>
                        </iframe>
                        </div>
                    </div>
                </div>

                <h5 class="text-xl font-bold mt-6 mb-6">Last 30 days key stats</h5>
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="mb-6 md:mb-0">
                        <div class="block shadow-lg rounded-xl">
                            <div class="flex justify-start items-center p-6 bg-white rounded-t-lg">
                                <div class="bg-mcmaster-burgundy text-white rounded-md flex justify-center items-center w-12 h-12">
                                    <x-heroicon-s-user-group class="h-10" />
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-500 mb-0.5">New Users</p>
                                    <p class="mb-0 flex justify-start">
                                        <span class="text-xl font-semibold mr-3">{{$data['users']}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="bg-gray-100 rounded-b-lg px-6 py-2.5">
                                <a href="{{route('users')}}" class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out text-sm font-medium">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-6 md:mb-0">
                        <div class="block shadow-lg rounded-xl">
                            <div class="flex justify-start items-center p-6 bg-white rounded-t-lg">
                                <div class="bg-mcmaster-burgundy text-white rounded-md flex justify-center items-center w-12 h-12">
                                    <x-heroicon-o-truck class="h-10"/>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-500 mb-0.5">Total Orders Created</p>
                                    <p class="mb-0 flex justify-start">
                                        <span class="text-xl font-semibold mr-3">{{$data['orders']}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="bg-gray-100 rounded-b-lg px-6 py-2.5">
                                <a href="{{route('inprogress-orders')}}" class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out text-sm font-medium">View all</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-0">
                        <div class="block shadow-lg rounded-xl">
                            <div class="flex justify-start items-center p-6 bg-white rounded-t-lg">
                                <div class="bg-mcmaster-burgundy text-white rounded-md flex justify-center items-center w-12 h-12">
                                    <x-heroicon-o-clipboard-list class="h-10"/>
                                </div>
                                <div class="ml-3">
                                    <p class="text-gray-500 mb-0.5">Items In Inventory</p>
                                    <p class="mb-0 flex justify-start">
                                        <span class="text-xl font-semibold mr-3">{{$data['inventory']}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="bg-gray-100 rounded-b-lg px-6 py-2.5">
                                <a href="{{route('inventory')}}" class="text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out text-sm font-medium">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
