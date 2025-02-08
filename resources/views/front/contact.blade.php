@extends('layouts.app')
@section('content')
    <x-nav />
    <div class="h-20"></div>
    <div class="font-sans bg-white">
        <div class="py-6">
            <!-- Breadcrumbs -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="{{ route('index') }}" class="hover:underline hover:text-gray-600"><i
                            class="ri-home-4-fill text-lg text-green-500"></i> Home</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>Contact Us</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
    </div>
    @include('components.faq')
    <div class="text-center py-32 md:py-0 first">
        <div class="text-center mt-20">
            <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">CONTACT
                    US</span>
            </h1>
        </div>
    </div>
    <div
        class="flex gap-6 flex-col md:flex-row items-start justify-center w-screen h-[100vh] md:h-[80vh] text-gray-800 p-10">

        <!-- Component Start -->
        <div class="flex flex-wrap flex-col gap-6 w-full max-w-6xl seccond">

            <div class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-phone-line text-2xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-sm md:text-xl font-semibold">Telp : </span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm md:text-base">+62 851 9000 0236</span>
                    </div>
                </div>
            </div>
            <a href="https://wa.me/6285190000236" target="_blank"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-whatsapp-line text-2xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-sm md:text-xl font-semibold">Whatsapp :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm md:text-base">+62 851 9000 0236</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-2xl md:text-3xl"></i>
            </a>

            <!-- Tile 2 -->
            <a href="https://mail.google.com/mail/u/0/?hl=en#inbox?compose=CllgCJfnbMNVfztDpKJjxhDwSKZxKRGxPnDjGnncRfLqdkjxzhvbgdgPCFQLrSnKMbzpkGvqBbB"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-mail-line text-2xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-sm md:text-xl font-semibold">Email :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm md:text-base">almeakausaeterna@gmail.com</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-2xl md:text-3xl"></i>
            </a>
            <a href="https://maps.app.goo.gl/LpXrcTciMhosqwSv5" target="_blank"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-map-pin-line text-2xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-sm md:text-xl font-semibold">Address</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm md:text-base">Surabaya, East Java, Indonesia</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-2xl md:text-3xl"></i>
            </a>
        </div>
        <!-- Component End  -->

        <img src="{{ asset('assets/footer.jpg') }}" alt=""
            class="rounded-xl shadow-2xl h-[29rem] hidden lg:block third">

        <!-- Component Start -->
        <div class="flex flex-wrap flex-col gap-6 w-full max-w-6xl fourth">

            <!-- Tile 1 -->
            <a href="https://www.instagram.com/almeakausaeterna?igsh=cm51aWgxOTN0NWl0" target="_blank"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-instagram-line text-2xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-sm md:text-xl font-semibold">Instagram :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm md:text-base">@almeakausaeterna</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-2xl md:text-3xl"></i>
            </a>
            <a href="https://www.facebook.com/share/VuQmnJV3m4wr2rTN/?mibextid=LQQJ4d" target="_blank"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-facebook-circle-fill text-2xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-sm md:text-xl font-semibold">Facebook :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm md:text-base">@almeakausaeterna</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-2xl md:text-3xl"></i>
            </a>
            <a href=""
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-linkedin-box-fill text-2xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-sm md:text-xl font-semibold">Linkedin :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm md:text-base">@almeakausaeterna</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-2xl md:text-3xl"></i>
            </a>
            <a href="https://www.tiktok.com/@almeakausaeterna?_t=8nZN3x8o4H3&_r=1" target="_blank"
                class="flex items-center p-4 bg-white rounded border border-green-500 w-full md:w-auto flex-grow">
                <div class="flex flex-shrink-0 items-center justify-center bg-white  h-16 w-16 rounded-full">
                    <i class="ri-tiktok-line text-2xl md:text-5xl text-green-500"></i>
                </div>
                <div class="flex-grow flex flex-col ml-4">
                    <span class="text-sm md:text-xl font-semibold">Tiktok :</span>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-500 text-sm md:text-base">@almeakausaeterna</span>
                    </div>
                </div>
                <i class="ri-arrow-right-s-line text-green-500 text-2xl md:text-3xl"></i>
            </a>
        </div>
        <!-- Component End  -->
    </div>
    <section class="text-gray-600 body-font relative mt-20 lg:mt-0 first">
        <div class="px-5 py-24 mx-auto">
            <form action="https://api.web3forms.com/submit" method="POST">
                <input type="hidden" name="access_key" value="c9202fe9-e123-47a4-8174-c3846f3a3d3c">
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                <textarea id="message" name="message"
                                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <button type="submit" class="btn-primary">Send
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <x-footer />
@endsection
