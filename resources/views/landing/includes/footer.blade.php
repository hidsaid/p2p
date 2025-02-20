{{-- Footer --}}
<footer class="dark:bg-darkColor-1 bg-slate-100 pt-10 xl:pt-60">
    <div class="container mx-auto px-2">
        <div class="grid grid-cols-12 gap-5 py-9 text-center md:text-left">
            <div class="col-span-12 md:col-span-4 lg:col-span-4 xl:col-span-5">
                <!-- Logo image -->
                <a href="/en" class="relative z-[100]">
                    <img src="{{ asset(path: 'imgfile/logo2.png') }}" alt="Logo" class="w-[150px] object-cover mt-[-40px]">
                </a>
                <p class="text-[14px] text-darkBlue mt-5">
                    PeerToPeer is a platform where 1337 students share knowledge, guides, and experiences to help each other succeed. Whether you're new or experienced, you can find resources and contribute to the community. Together, we make learning and collaboration easier!
                </p>
            </div>
            <div class="col-span-12 md:col-span-3 lg:col-span-2 xl:col-span-3 relative z-[100]">
                <h3 class="mb-3 text-[18px] font-bold text-darkBlue">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#aboutus" class="text-darkBlue mb-2 text-[14px] cursor-pointer">About Us</a></li>
                    <li><a href="#projects" class="text-darkBlue mb-2 text-[14px] cursor-pointer">projects</a></li>
                    <li><a href="#chooseus" class="text-darkBlue mb-2 text-[14px] cursor-pointer">guides</a></li>
                    <li><a href="#howitworks" class="text-darkBlue mb-2 text-[14px] cursor-pointer">projects</a></li>
                    <li><a href="#contactus" class="text-darkBlue mb-2 text-[14px] cursor-pointer">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-span-12 md:col-span-3 lg:col-span-3 xl:col-span-4">
                <h3 class="mb-3 text-[18px] font-bold text-darkBlue">Contact Info</h3>
                <div class="mb-4 flex items-center justify-center md:justify-start">
                    <i class="fa-solid fa-headphones text-mainBlue mr-3 text-[40px]"></i>
                    <div>
                        <p class="text-darkBlue mb-2 text-[14px]">Got questions? Call us 24/7!</p>
                        <p class="text-darkBlue mb-2 text-[14px]">(+212) 629416308</p>
                        <p class="text-darkBlue text-[14px]">peer2peer@gmail.com</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-darkBluetext-[18px] font-bold mb-5">Follow Us On Social media</h3>
                    <div >
                        <a href="https://www.facebook.com/"><i
                                class="fa-brands fa-facebook text-darkBlue mr-4 text-[23px]"></i></a>
                        <a href="https://www.youtube.com/"><i
                                class="fa-brands fa-youtube text-darkBlue mr-4 text-[23px]"></i></a>
                        <a href="https://www.instagram.com/"><i
                                class="fa-brands fa-instagram text-darkBlue mr-4 text-[23px]"></i></a>
                        <a href="https://www.tiktok.com/"><i
                                class="fa-brands fa-tiktok text-darkBlue text-[23px]"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-veryLightBlue py-5 text-darkBlue text-center text-[17px]">
        &copy;<span id="currentYear"></span> <strong class="text-mainBlue">Peer2Peer</strong>. All Rights Reserved.
    </div>
</footer>