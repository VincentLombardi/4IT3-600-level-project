<footer class="rounded-sm p-2 bg-white shadow md:px-4 md:py-4">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="https://www.eng.mcmaster.ca/sept" target="_blank"
               rel="noreferrer noopener" class="flex items-center sm:mb-0">
                <img src="{{ asset('storage/logos/SEPT-LOGO.png') }}" class="w-50 h-10 mr-3" alt="McMaster University"/>

                <span class="self-center lg:text-xl font-semibold sm:text-sm">SEPT Manufacturing Execution System</span>
            </a>
            <ul class="flex flex-wrap items-center self-center mb-6 mt-2 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="{{url('learn')}}" class="mr-4 hover:underline md:mr-6 ">Learn</a>
                </li>
                <li>
                    <a href="{{url('faq')}}" class="mr-4 hover:underline md:mr-6">FAQ</a>
                </li>
                <li>
                    <a href="{{url('resources')}}" class="mr-4 hover:underline md:mr-6 ">Resources</a>
                </li>
                <li>
                    <a href="{{url('contact')}}" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>

        <hr class="my-2 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-4"/>
        <div class="sm:flex items-center justify-between">
            <div class="sm:flex-1">
                SEPT-MES is made with
                <x-heroicon-s-heart class="inline-block w-4 text-red-900"/>
                by <a class="hover:text-blue-400" href="https://www.linkedin.com/in/vincent-lombardi-444aa9170/"
                      target="_blank" rel="noreferrer noopener">Vincent Lombardi</a>
            </div>
            <div class="text-sm text-gray-500 lg:text-center dark:text-gray-400">
                © {{ date('Y') }} <a href="https://www.eng.mcmaster.ca/sept" class="hover:underline" target="_blank"
                                     rel="noreferrer noopener">McMaster University</a> - W.Booth School of Engineering
                Practice and Technology
            </div>
            <div class="sm:flex-1 lg:text-right">
                <a class="hover:text-blue-400" href="https://github.com/VincentLombardi/SEPT-MES" target="_blank"
                   rel="noreferrer noopener">
                    <x-codicon-source-control class="inline-block h-4 w-4"/>
                    Version 1.05</a>
            </div>
        </div>

</footer>
