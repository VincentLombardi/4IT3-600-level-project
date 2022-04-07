<x-app-layout title="Learn">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Learn') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="hidden xl:block">
                    <img
                        class="opacity-10 absolute w-48 right-0 greyscale"
                        src="https://mdbootstrap.com/img/Photos/new-templates/podcaster/dots-pink-2.png"
                        alt="dots"
                    />
                </div>
                <div class="image-wrapper-2 hidden xl:block">
                    <img
                        class="opacity-10 absolute w-48 top-3/4 left-0 greyscale"
                        src="https://mdbootstrap.com/img/Photos/new-templates/podcaster/dots-pink-2.png"
                        alt="dots"
                    />
                </div>
                <div class="image-wrapper-3 hidden xl:block">
                    <img
                        class="opacity-10 absolute w-48 top-full right-0 greyscale"
                        src="https://mdbootstrap.com/img/Photos/new-templates/podcaster/dots-pink-2.png"
                        alt="dots"
                    />
                </div>
                <div class="grid grid-cols-1 justify-center">
                    <div class="xl:w-10/12 lg:w-12 mx-auto">
                        <ul class="mt-4 stepper" data-mdb-stepper="stepper">
                            <li class="stepper-step stepper-active">
                                <div class="stepper-head">
                                    <span class="stepper-head-icon"> 1 </span>
                                    <span class="stepper-head-text"> Introduction </span>
                                </div>
                                <div class="stepper-content">
                                    <p class="text-center uppercase text-blue-600 font-bold mt-4 mb-4">Introuction</p>
                                    <h2 class="text-3xl text-center font-black mb-6 pb-2">
                                        What is an MES?
                                    </h2>
                                    <p class="text-xl font-normal text-gray-500 mb-6">
                                        In today’s competitive marketplace, manufacturers like you need to know how to
                                        improve efficiency to gain an advantage. Essentially, you need to make more with
                                        less—and a manufacturing execution system (MES) can help you do just that.

                                        In technical terms, a manufacturing execution system is a system that connects
                                        and monitors machines and work centers on the factory floor. The main goal of an
                                        MES is to ensure successful implementation of manufacturing operations and
                                        improve production efficiency.
                                    </p>
                                    <p class="text-gray-500 mb-6">
                                        The intruction of IoT provides oppertunties to further integrate these systems.

                                        “By 2024, 50% of MES solutions will include IIoT platforms synchronized with
                                        microservices-based manufacturing operations management (MOM) apps, providing
                                        near-real-time transaction management, control, data collection, and analytics.”
                                        <a class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out"
                                           href="https://tulip.co/blog/mes-or-iiot-platform-or-both-which-is-right-for-me/#:~:text=What%20are%20IIoT%20Platforms%3F,end%20systems%E2%80%93a%20middle%20layer.">Tulip
                                            Co</a> says.
                                        </br></br>Major functionality include:
                                    </p>
                                    <ul class="text-gray-500 mb-6 list-disc list-inside">
                                        <li class="mb-2">Operations Management.</li>
                                        <li class="mb-2">Dispatching Production Units.
                                        </li>
                                        <li>Product Tacking and geneology.</li>
                                    </ul>
                                    <p class="text-gray-500 mb-12">
                                        The future of manufacturing execution systems is tied closely to the future of
                                        manufacturing itself. As Industry 4.0 and the Internet of Things (IoT) become
                                        commonplace, MES systems are allowing manufacturers to implement their factory
                                        of the future.
                                    </p>
                                    <h2 class="text-2xl font-bold mb-6 pb-2">What is Laravel?</h2>
                                    <p class="text-gray-500 mb-6">
                                        Laravel is an open-source PHP framework designed to make developing web apps
                                        easier and faster through built-in features.
                                    </p>
                                    <figure class="border-l-4 border-gray-200">
                                        <blockquote class="ml-2 italic font-bold">
                                            <p class="ml-4 py-2">
                                                “Laravel is a web application framework with expressive, elegant syntax.
                                                We’ve already laid the foundation — freeing you to create without
                                                sweating the small things.”
                                            </p>
                                        </blockquote>
                                    </figure>
                                    <p class="text-gray-500 my-6 pb-2">
                                        Laravel is considered to have a short learning curve, especially if you're
                                        already familiar with PHP. Even when stuck, the community is really helpful and
                                        there are a plethora of resources to help you learn Laravel from scratch, from
                                        podcasts and videos to written tutorials.
                                    </p>
                                    <figure class="mb-6 pb-4">
                                        <img
                                            class="rounded-lg shadow-lg w-full"
                                            src="https://www.mindinventory.com/blog/wp-content/uploads/2016/10/laravel.jpg"
                                            alt="image"
                                        />
                                        <figcaption class="text-sm text-gray-500 mt-3">
                                            Overview of some of Laravel's most popular features.
                                        </figcaption>
                                    </figure>
                                    <h2 class="text-2xl font-bold mb-6 pb-2">Using Laravel for SEPT-MES</h2>
                                    <p class="text-gray-500 mb-6">
                                        Laravel was chosen for
                                        <a class="font-medium text-blue-600 hover:text-blue-700 focus:text-blue-700 active:text-blue-800 transition duration-300 ease-in-out"
                                           href="{{ url('/') }}">SEPT-MES</a>. This is mainly due to the fact that
                                        SEPT-MES is a web application and can make use of many features of laravel. It
                                        uses the database deep integration for storing MES data, middleware for
                                        authentication, and much more. Laravel makes it easy to structure the web app
                                        and add features quickly
                                    </p>
                                </div>
                            </li>
                            <li class="stepper-step">
                                <div class="stepper-head">
                                    <span class="stepper-head-icon"> 2 </span>
                                    <span class="stepper-head-text"> SEPT-MES </span>
                                </div>
                                <div class="stepper-content">

                                    <div class="mb-6 pb-2">
                                        <p class="uppercase text-blue-600 font-bold mb-4">SEPT-MES</p>
                                        <h2 class="text-3xl font-black">Meet SEPT-MES</h2>
                                    </div>
                                    <div class="grid lg:grid-cols-2 gap-12">
                                        <div class="order-2 lg:order-1">
                                            <p class="text-xl text-gray-500 mb-6">
                                                SEPT-MES is a custom-built web app to handle Manufacturing Execution
                                                System tasks for the learning factory.
                                            </p>
                                            <p class="text-gray-500 mb-6">
                                                With Laravel at the core, SEPT-MES adds a beautiful front-end to
                                                database management. Users can track orders, inventory, suppliers and
                                                much more.

                                                The site is fully customizable to fit the needs of the Learning Factory.
                                            </p>
                                            <p class="text-gray-500 mb-6">
                                                Some of the key-features of SEPT-MES include the following:
                                            </p>
                                            <ul class="text-gray-500 mb-6 list-disc list-inside">
                                                <li class="mb-2">Order, inventory, and part tracking</li>
                                                <li class="mb-2">Automatic user management, including full
                                                    authentication with validation and password resets
                                                </li>
                                                <li>Room for future expansion into IIOT with protocols like MQTT</li>
                                            </ul>
                                            <p class="text-gray-500 mb-12">
                                                At it's current point, SEPT-MES is in beta. While most features are
                                                working, the team still has some bugs to work out. Currently, no
                                                hardware is integreated into the system for part tracking. SEPT-MES is
                                                also currently not hosted on the SEPT network.
                                            </p>
                                            <h2 class="text-2xl font-bold mb-6 pb-2">Future Plans</h2>
                                            <p class="text-gray-500 mb-6">
                                                In the future, the plan is to connect SEPT-MES to hardware devices. This
                                                includes barcode scanners, QR code readers, NFC, etc. This can be done
                                                in a variety of methods.
                                            </p>
                                            <p class="text-gray-500 mb-12">
                                                One plan, to push into the IIoT space is to use MQTT in conjunction with
                                                these hardware devices to create a database of sensor readings for live,
                                                automatic tracking.
                                            </p>
                                        </div>
                                        <div class="order-1 lg:order-2">
                                            <figure class="figure image-wrapper">
                                                <img
                                                    class="rounded-lg shadow-lg w-full"
                                                    src="https://www.spaceo.ca/wp-content/uploads/2021/01/manufacturing-execution-system-mes.jpg"
                                                    alt="image"
                                                />
                                                <figcaption class="text-sm text-gray-500 mt-3 flex items-center">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                         data-icon="camera" class="w-3 mr-2" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                              d="M512 144v288c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48h88l12.3-32.9c7-18.7 24.9-31.1 44.9-31.1h125.5c20 0 37.9 12.4 44.9 31.1L376 96h88c26.5 0 48 21.5 48 48zM376 288c0-66.2-53.8-120-120-120s-120 53.8-120 120 53.8 120 120 120 120-53.8 120-120zm-32 0c0 48.5-39.5 88-88 88s-88-39.5-88-88 39.5-88 88-88 88 39.5 88 88z"></path>
                                                    </svg>
                                                    MES Diagram
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="stepper-step">
                                <div class="stepper-head">
                                    <span class="stepper-head-icon"> 3 </span>
                                    <span class="stepper-head-text"> Features </span>
                                </div>
                                <div class="stepper-content">
                                    <div class="flex justify-center">
                                        <div class="text-center max-w-[700px]">
                                            <p class="uppercase text-blue-600 font-bold mb-6">Features</p>
                                            <h2 class="text-3xl font-bold mb-6">Why is it so great?</h2>
                                            <p class="text-gray-500 mb-12">
                                                Due to the flexible nature of Laravel, SEPT-MES has a large amount of
                                                helpful packages integrated. These provide performance as well as
                                                cosmetic benefits. Listed below are some of Laravel greatest features
                                            </p>
                                        </div>
                                    </div>

                                    <div class="grid md:grid-cols-2 lg:grid-cols-4 lg:gap-x-12">
                                        <div class="mb-12 lg:mb-0">
                                            <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block mb-6">
                                                <x-codicon-source-control class="inline-block h-8 w-8"/>
                                            </div>
                                            <h5 class="text-lg font-bold mb-4">Flexible</h5>
                                            <p class="text-gray-500">
                                                Laravel can be used to fit a variety of needs. The framework serves a
                                                broad scope of applications
                                            </p>
                                        </div>

                                        <div class="mb-12 lg:mb-0">
                                            <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block mb-6">
                                                <x-bi-shield-lock class="inline-block h-8 w-8"/>
                                            </div>
                                            <h5 class="text-lg font-bold mb-4">Secure</h5>
                                            <p class="text-gray-500">
                                                With built-in authentication, Laravel is secure out of the box
                                            </p>
                                        </div>

                                        <div class="mb-12 md:mb-0">
                                            <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block mb-6">
                                                <x-heroicon-o-fast-forward class="inline-block h-8 w-8"/>
                                            </div>
                                            <h5 class="text-lg font-bold mb-4">Extremely fast</h5>
                                            <p class="text-gray-500">
                                                Laravel is extremely responsive and quick, pages are cached dynamically
                                                and un-used resources are purged. Making Laravel fast as ever
                                            </p>
                                        </div>

                                        <div class="mb-12 md:mb-0">
                                            <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block mb-6">
                                                <x-bi-plug class="inline-block h-8 w-8"/>
                                            </div>
                                            <h5 class="text-lg font-bold mb-4">Plugins</h5>
                                            <p class="text-gray-500">
                                                There is a vast majority of plugin support available for Laravel.
                                                Community as well as official plugins exist that can be installed with
                                                composer
                                            </p>
                                        </div>
                                    </div>
                                    <div class=" mt-4 grid md:grid-cols-2 lg:grid-cols-4 lg:gap-x-12">
                                        <div class="mb-12 lg:mb-0">
                                            <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block mb-6">
                                                <x-heroicon-o-support class="inline-block h-8 w-8"/>
                                            </div>
                                            <h5 class="text-lg font-bold mb-4">Support 24/7</h5>
                                            <p class="text-gray-500">
                                                The Laravel community is fantastic and support is available whenever it is needed
                                            </p>
                                        </div>

                                        <div class="mb-12 lg:mb-0">
                                            <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block mb-6">
                                                <x-heroicon-o-document-report class="inline-block h-8 w-8"/>
                                            </div>
                                            <h5 class="text-lg font-bold mb-4">Documented</h5>
                                            <p class="text-gray-500">
                                                Laravel is extremely well documented. The official documentation has pages for everything plus all the third-party resources
                                            </p>
                                        </div>

                                        <div class="mb-12 md:mb-0">
                                            <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block mb-6">
                                                <x-bi-paint-bucket class="inline-block h-8 w-8"/>
                                            </div>
                                            <h5 class="text-lg font-bold mb-4">Customizable</h5>
                                            <p class="text-gray-500">
                                                Laravel can be customized with any package to fit your needs
                                            </p>
                                        </div>

                                        <div class="mb-12 md:mb-0">
                                            <div class="p-4 bg-blue-600 rounded-full shadow-lg inline-block mb-6">
                                                <x-bi-cash-stack class="inline-block h-8 w-8"/>
                                            </div>
                                            <h5 class="text-lg font-bold mb-4">Free</h5>
                                            <p class="text-gray-500">
                                                Best of all, it is completely free. Laravel is fully open-source and completely free to use
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
