<x-app-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-red-500">
                    <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                        <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                            <button
                                type="button"
                                data-bs-target="#carouselExampleCaptions"
                                data-bs-slide-to="0"
                                class="active"
                                aria-current="true"
                                aria-label="Slide 1"
                            ></button>
                            <button
                                type="button"
                                data-bs-target="#carouselExampleCaptions"
                                data-bs-slide-to="1"
                                aria-label="Slide 2"
                            ></button>
                            <button
                                type="button"
                                data-bs-target="#carouselExampleCaptions"
                                data-bs-slide-to="2"
                                aria-label="Slide 3"
                            ></button>
                        </div>
                        <div class="carousel-inner relative w-full overflow-hidden">
                            <div class="carousel-item active relative float-left w-full">
                                <img
                                    src="https://media-exp1.licdn.com/dms/image/C4E1BAQGgtw3EdHu7GA/company-background_10000/0/1563211555605?e=2147483647&v=beta&t=kYTqJmt25oEVWDN5F54dFoUkN7wz2VVUsI2tNLjiBJY"
                                    class="block w-full"
                                    alt="..."
                                />
                                <div class="carousel-caption hidden md:block absolute text-center">
                                    <h5 class="text-xl">McMaster University</h5>
                                    <p>PROCTECH 4IT3 600 Level Project</p>
                                </div>
                            </div>
                            <div class="carousel-item relative float-left w-full">
                                <img
                                    src="https://www.cloudways.com/blog/wp-content/uploads/Laravel-9.jpg"
                                    class="block w-full"
                                    alt="..."
                                />
                                <div class="carousel-caption hidden md:block absolute text-center">
                                    <h5 class="text-xl">Laravel Framework</h5>
                                    <p>The main framework used for SEPT-MES.</p>
                                </div>
                            </div>
                            <div class="carousel-item relative float-left w-full">
                                <img
                                    src="https://www.flexwareinnovation.com/wp-content/uploads/2017/03/manufacturing-execution-system-mes-systems-integrator-flexware-innovation-indiana.jpg"
                                    class="block w-full"
                                    alt="..."
                                />
                                <div class="carousel-caption hidden md:block absolute text-centerhttps://www.flexwareinnovation.com/wp-content/uploads/2017/03/manufacturing-execution-system-mes-systems-integrator-flexware-innovation-indiana.jpg">
                                    <h5 class="text-xl">MES</h5>
                                    <p>Manufacturing Execution Syste,</p>
                                </div>
                            </div>
                        </div>
                        <button
                            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev"
                        >
                            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button
                            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                            type="button"
                            data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next"
                        >
                            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
