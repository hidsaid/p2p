{{-- Header for larger screens --}}
<header>

    {{-- =========navBar section for Larger Screens======== --}}
    <nav class="mainNav relative hidden items-center shadow-sm xl:block py-2 bg-slate-200">
        <div class="container mx-auto px-5">
            <div class="flex h-[88px] items-center justify-between">
                {{-- logo --}}
                <div class="w-[100px]">
                    <a class="active mx-4 text-darkBlue" href="{{route('EnLanding')}}">
                        <a class="active text-[20px] text-darkBlue" href="{{route('EnLanding')}}">
                            <img class="w-full object-cover" src='{{ asset('imgfile/logo2.png') }}' alt=""
                                srcset="">
                        </a>
                    </a>
                </div>
                {{-- navLinks --}}
                <ul class="flex h-full items-center">
                    <li class=""><a class="active mx-4 text-sky-600 hover:text-sky-600" href="#">Home</a>
                    </li>
                    <li><a class="mx-4 text-darkBlue hover:text-sky-600" href="#aboutus">About Us</a></li>
                    <li><a class="mx-4 text-darkBlue hover:text-sky-600" href="{{route('projects.show')}}">Projects</a></li>
                    <li><a class="mx-4 text-darkBlue hover:text-sky-600" href="#contactus">Contact Us</a></li>
                </ul>
                {{-- buttons --}}
                <div class="flex space-x-2">
                    <div>
                        <a class="text-darkBlue" href="{{route('showLogin')}}">
                            <button
                                class="mr-3 rounded-md border border-sky-600 px-3 py-2 text-sky-600 hover:bg-darkersky-600 hover:text-red-600">
                                Logout
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    {{-- =========Nav for mobile screens======== --}}
    <nav class="navMobile relative z-[100] shadow-sm xl:hidden py-3">
        <div class="container mx-auto px-10">
            <div class="flex items-center justify-between">
                {{-- logo --}}
                <div class="w-[100px]">
                    <a class="active text-[20px] text-darkBlue" href="{{route('EnLanding')}}">
                        <img class="w-full object-cover" src='{{ asset('imgfile/logo2.png') }}' alt=""
                            srcset="">
                    </a>
                </div>
                {{-- icon bars --}}
                <div>
                    <i class="fa-solid fa-bars flex cursor-pointer text-[30px] text-gray1" id="navIcon"></i>
                </div>

            </div>

            {{-- hiddenMenu --}}
            <div class="hidden min-h-[80vh] w-full px-2" id="navMenuMobile">
                {{-- navLinks --}}
                <ul class="space-y-8 pt-8">
                    <li><a class="active text-sky-600 hover:text-sky-600" href="#">Home</a></li>
                    <li><a class="flex w-full justify-between text-darkBlue hover:text-sky-600" href="#aboutus">About
                            Us</a></li>
                    <li><a class="flex w-full justify-between text-darkBlue hover:text-sky-600"
                            href="{{route("projects.show")}}">Projects</a></li>
                    <li><a class="flex w-full justify-between text-darkBlue hover:text-sky-600" href="#contactus">Contact
                            Us</a></li>
                </ul>
                <div class="mt-5 space-y-4">
                    <div>
                        <a href="{{route('showLogin')}}">
                            <button
                                class="mr-3 w-full rounded-md bg-sky-600 p-3 font-medium text-white hover:bg-sky-600">
                                logout
                            </button>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </nav>
</header>
