<x-app-layout title="FAQ">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FAQ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="text-3xl mt-6 mb-6 pl-6">Frequently asked questions</h2>

                <div class="accordion accordion-flush" id="accordionFlush">
                    <div
                        class="accordion-item border-t-0 border-l-0 border-r-0 rounded-none bg-white border border-gray-200">
                        <h2 class="accordion-header mb-0" id="flush-headingOne">
                            <button
                                class="accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 font-bold text-left bg-white border-0 rounded-none transition focus:outline-none"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Is SEPT-MES finished?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse border-0 collapse show"
                             aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlush">
                            <div class="accordion-body py-4 px-5 text-gray-500">
                                No. SEPT-MES is a proof of concept. In the future, many more features will be added.
                                Reference the <a class="hover:text-blue-400" href="url('learn)" }}>Learn</a> section for
                                more information.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-l-0 border-r-0 rounded-none bg-white border border-gray-200">
                        <h2 class="accordion-header mb-0" id="flush-headingTwo">
                            <button
                                class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 font-bold text-left bg-white border-0 rounded-none transition focus:outline-none"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Why can new users register? This seems like a security issue.
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse border-0 collapse"
                             aria-labelledby="flush-headingTwo"
                             data-bs-parent="#accordionFlush">
                            <div class="accordion-body py-4 px-5 text-gray-500">
                                When the application is run in demonstration mode, new user registration is enabled.
                                This is done so that the registration features can be demonstrated. In the final build,
                                an admin account is created on first run and then can manage and add new users from the
                                users menu
                            </div>
                        </div>
                    </div>
                    <div
                        class="accordion-item border-l-0 border-r-0 border-b-0 rounded-none bg-white border border-gray-200">
                        <h2 class="accordion-header mb-0" id="flush-headingThree">
                            <button
                                class="accordion-button collapsed relative flex items-center w-full py-4 px-5 text-base text-gray-800 font-bold text-left bg-white border-0 rounded-none transition focus:outline-none"
                                type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                How do I get started with Laravel?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                             aria-labelledby="flush-headingThree"
                             data-bs-parent="#accordionFlush">
                            <div class="accordion-body py-4 px-5 text-gray-500">
                                There are many great resources to get started with Laravel. Some of the most popular include the following:
                                <ul class="text-gray-500 mt-6 mb-6 list-disc list-inside">
                                    <li class="mb-2"><a class="hover:text-blue-400" href="https://www.digitalocean.com/community/tech_talks/getting-started-with-laravel">Digital Ocean</a></li>
                                    <li class="mb-2"><a class="hover:text-blue-400" href="https://laravel.com/docs/4.2/quick">Laravel Quickstart</a></li>
                                    <li class="mb-2"><a class="hover:text-blue-400" href="https://laravel-news.com/your-first-laravel-application">Digital News</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
