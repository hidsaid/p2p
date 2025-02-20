{{-- Intro Slider Section --}}
<div class="relative bg-slate-200 pb-[40px] pt-10 xl:pb-[220px]">
    <div class="container mx-auto px-4">
        <div class="items-center justify-center grid grid-cols-12 gap-y-5 lg:gap-x-16">
            {{-- Carousel --}}
            <div id="default-carousel" class="relative col-span-12 w-full xl:col-span-5" data-carousel="slide">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-[400px]">
                    <!-- Item 1 -->
                    <div class="raltive hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="opacity-55 absolute inset-0 z-40 bg-black"></div>
                        <img src="{{ 'imgfile/3.jpg' }}"
                            class="block h-full w-full translate-x-1/2 -translate-y-1/2 object-cover"
                            alt="slider 1">
                        <div class="relative z-50 flex h-full items-center justify-center">
                            <p class="w-fit bg-sky-900 p-3 font-bold text-white md:text-[20px]">Resolve Disputes Easily
                                and Fairly</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden bg-gray-200 duration-700 ease-in-out" data-carousel-item>
                        <div class="opacity-55 absolute inset-0 z-40 bg-black"></div>
                        <img src="{{ 'imgfile/1.jpg' }}"
                            class="block h-full w-full translate-x-1/2 -translate-y-1/2 object-cover"
                            alt="slider 2">
                        {{-- <div class="relative z-50 flex h-full items-center justify-center">
                            <p class="w-fit bg-sky-900 p-3 font-bold text-white md:text-[20px]">Find Solutions Without
                                the Stress</p>
                        </div> --}}
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden bg-gray-200 duration-700 ease-in-out" data-carousel-item>
                        <div class="opacity-55 absolute inset-0 z-40 bg-black"></div>
                        <img src="{{ 'imgfile/2.jpg' }}"
                            class=" block h-full w-full translate-x-1/2 -translate-y-1/2 object-cover"
                            alt="slider 3">
                        {{-- <div class="relative z-50 flex h-full items-center justify-center">
                            <p class="w-fit bg-sky-900 p-3 font-bold text-white md:text-[20px]">Professional Mediation
                                at Your Fingertips</p>
                        </div> --}}
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="h-3 w-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="group absolute start-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                        <svg class="h-4 w-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="group absolute end-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white">
                        <svg class="h-4 w-4 text-white rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>

            {{-- Intro Text --}}
            <div class="col-span-12 w-full xl:col-span-7">
                <h1
                    class="mx-auto mb-5 max-w-[700px] text-center text-[30px] font-medium text-sky-900 xl:ml-0 xl:mr-auto xl:text-left xl:text-[50px]">
                    <p class="text-sky-600">1337 Student Guide – Your Path to Success</p>
                </h1>
                <p
                    class="mx-auto mb-5 max-w-[600px] text-center text-[20px] leading-loose text-sky-900 xl:ml-0 xl:text-left">
                    Peer2Peer is a platform created by students, for students. Our mission is to make learning at 1337 easier by sharing guides, tips, and experiences for every project.</p>
                <button class="raltive mx-auto flex cursor-pointer justify-center lg:justify-start xl:ml-0">
                    <a href="{{route('projects.show')}}"
                        class="group relative z-[89] inline-flex items-center justify-center overflow-hidden rounded-full border-2 border-sky-600 bg-sky-600 p-4 px-6 py-3 font-medium text-white shadow-md transition duration-300 ease-out">
                        <span
                            class="ease bg-mainCopper absolute inset-0 flex h-full w-full -translate-x-full items-center justify-center text-white duration-300 group-hover:translate-x-0">
                        </span>
                        <span
                            class="ease absolute flex h-full w-full transform items-center justify-center text-white transition-all duration-300 group-hover:translate-x-full">
                            Get Started Now
                        </span>
                        <span class="invisible relative">
                            Get Started Now
                        </span>
                    </a>
                </button>
            </div>
        </div>
    </div>
    <div class="w-full">
        <svg class="bottom-[-20px] hidden w-full text-white xl:absolute xl:block" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,288L40,277.3C80,267,160,245,240,218.7C320,192,400,160,480,160C560,160,640,192,720,208C800,224,880,224,960,213.3C1040,203,1120,181,1200,149.3C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </div>
</div>

{{-- About Us Section --}}
<div id="aboutus" class="relative py-12">
    <div class="container mx-auto px-4">
        <h1 class="mx-auto mb-10 max-w-[700px] text-center text-[30px] font-semibold text-sky-900 xl:ml-0 xl:mr-auto xl:text-left xl:text-[50px]">
            About <span class="text-sky-600">Peer2Peer</span>
        </h1>

        <div class="flex flex-col items-center justify-between gap-10 xl:flex-row">
            <!-- Left Content -->
            <div class="xl:w-[55%]">
                <p class="text-left text-[16px] leading-loose text-gray-800 xl:text-[20px]">
                    <span class="font-semibold text-sky-700">Peer2Peer</span> is a platform built by students, for students. Our mission is to 
                    simplify the learning experience at **1337** by sharing high-quality guides, best practices, and real experiences for every project.
                    <br><br>
                    We believe in **collaboration, knowledge sharing, and helping each other grow**. Whether you're searching for solutions, contributing insights, 
                    or learning from your peers, this is the place to **level up together**.
                    <br><br>
                    🚀 Join us and be part of a community where we **learn, code, and improve—peer by peer**!
                </p>
            </div>

            <!-- Right Image (Hidden on Mobile) -->
            <div class="xl:w-[45%] mx-auto">
                <img class="w-full max-w-[400px] mx-auto rounded-lg object-cover shadow-lg xl:max-w-full"
                    src="{{ asset('imgfile/dkali.jpg') }}"
                    alt="About Peer2Peer">
            </div>
        </div>
    </div>
</div>

{{-- Contact Us Section --}}
<div id="" class="relative mt-20">
    <div class="container mx-auto px-4">
        <section class="">
            <div class="mx-auto max-w-[700px] px-4 py-6 rounded-lg lg:py-16 border-2 bg-slate-200">
                <h1
                class="mx-auto mb-5 text-center text-[30px] font-medium text-sky-900 xl:text-[40px]">
                Contact<span class="text-sky-600"> Us</span>
            </h1>
                <p class="text-center text-[16px] text-pColor xl:text-[18px] mb-20">Reach out to us anytime for prompt
                    assistance, and we'll be here to help you every step of the way</p>
            <div class="mt-10">
                <form action="" method="" class="space-y-8">
                    <div class="flex flex-row justify-between gap-5 xl:flex-row">
                        <div class="xl:w-[50%]">
                            <label for="full_name" class="mb-2 block text-[16px] font-medium text-sky-900">Your name
                                <span class="text-red-500">*</span></label>
                            <input type="text" id="full_name" name=""
                                class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm"
                                placeholder="name" required>
                        </div>
                        <div class="xl:w-[50%]">
                            <label for="email" class="mb-2 block text-[16px] font-medium text-sky-900">Your email
                                <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name=""
                                class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm"
                                placeholder="email" required>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="mb-2 block text-[16px] font-medium text-sky-900">Your
                            message</label>
                        <textarea id="message" name="message" rows="6"
                            class="focus:ring-primary-500 focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm"
                            placeholder="Leave a comment..."></textarea>
                    </div>
                    <button type="submit" class="raltive mx-auto flex cursor-pointer px-4 justify-start lg:justify-start xl:ml-0">
                        <a href="/register"
                            class="group relative z-[89] inline-flex items-center justify-center overflow-hidden rounded-full border-2 border-sky-600 bg-sky-600 p-4 px-6 py-3 font-medium text-white shadow-md transition duration-300 ease-out">
                            <span
                                class="ease bg-mainCopper absolute inset-0 flex h-full w-full -translate-x-full items-center justify-center text-white duration-300 group-hover:translate-x-0">
                            </span>
                            <span
                                class="ease absolute flex h-full w-full transform items-center justify-center text-white transition-all duration-300 group-hover:translate-x-full">
                                Submit
                            </span>
                            <span class="invisible relative">
                                Submit
                            </span>
                        </a>
                    </button>
                </form>
            </div>
            </div>
        </section>
    </div>
    <div class="absolute left-0 top-[100%] z-[80] hidden w-full rotate-180 transform xl:block">
        <svg class="w-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1"
                d="M0,288L40,277.3C80,267,160,245,240,218.7C320,192,400,160,480,160C560,160,640,192,720,208C800,224,880,224,960,213.3C1040,203,1120,181,1200,149.3C1280,117,1360,75,1400,53.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </div>
</div>