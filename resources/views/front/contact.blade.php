@extends('layouts.app')
@section('content')
    <x-nav />
    <section class="text-gray-600 body-font max-w-[1280px] w-full mx-auto">
        <div class="container px-5 py-24 mx-auto">
            <div class="text-center my-10">
                <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">CONTACT
                        US</span>
                </h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 justify-items-center">
                <!-- Card 1 -->
                <div class="p-4 flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-blue-100 text-blue-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8">
                            <path
                                d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821Z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Call us</h2>
                    <p class="leading-relaxed text-base">Main phone:</p>
                    <a href="www.google.com" class="text-blue-500 hover:border-b-2">+62 263 2933925</a>
                    <p>24/7</p>
                </div>

                <!-- Card 2 -->
                <div class="p-4 flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-orange-100 text-orange-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8">
                            <path
                                d="M21 3C21.5523 3 22 3.44772 22 4V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V19H20V7.3L12 14.5L2 5.5V4C2 3.44772 2.44772 3 3 3H21ZM8 15V17H0V15H8ZM5 10V12H0V10H5ZM19.5659 5H4.43414L12 11.8093L19.5659 5Z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Office email:</h2>
                    <p class="leading-relaxed text-base">Main phone:</p>
                    <a href="www.google.com" class="text-blue-500 hover:border-b-2">hallo@abizardniagautama.com</a>
                    <a href="www.google.com" class="text-blue-500 hover:border-b-2">sales@abizardniagautama.com</a>
                </div>

                <!-- Card 3 -->
                <div class="p-4 flex flex-col items-center text-center">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-green-100 text-green-500 mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-8">
                            <path
                                d="M4.99509 3C3.89262 3 3 3.89323 3 4.99509V19.0049C3 20.1074 3.89323 21 4.99509 21H19.0049C20.1074 21 21 20.1068 21 19.0049V4.99509C21 3.89262 20.1068 3 19.0049 3H4.99509ZM5 19V5H19V19H5ZM12 8C12.5523 8 13 8.44772 13 9C13 9.55228 12.5523 10 12 10C11.4477 10 11 9.55228 11 9C11 8.44772 11.4477 8 12 8ZM12 12C13.6569 12 15 10.6569 15 9C15 7.34315 13.6569 6 12 6C10.3431 6 9 7.34315 9 9C9 10.6569 10.3431 12 12 12ZM12 15C10.8954 15 10 15.8954 10 17H8C8 14.7909 9.79086 13 12 13C14.2091 13 16 14.7909 16 17H14C14 15.8954 13.1046 15 12 15Z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Press info:</h2>
                    <p class="leading-relaxed text-base">Personal contact:</p>
                    <p class="leading-relaxed text-base font-semibold text-gray-950">Siti Zahra</p>
                    <a href="www.google.com" class="text-blue-500 hover:border-b-2">hallo@abizardniagautama.com</a>
                    <a href="www.google.com" class="text-blue-500 hover:border-b-2">sales@abizardniagautama.com</a>
                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font max-w-6xl mx-auto p-5">
        <div class="container mx-auto flex flex-wrap items-center">
            <!-- Gambar -->
            <div class="lg:w-1/2 w-full h-full p-5 flex justify-center">
                <img src="https://almeakausaeterna.com/assets/Tampilan/contact/image.jpg" alt="Contact Image"
                    class="rounded-lg shadow-lg w-full h-auto object-cover">
            </div>
            <!-- Formulir -->
            <div class="lg:w-1/2 md:w-2/3 w-full p-5">
                <div class="flex flex-wrap -m-2 bg-white shadow-lg rounded-lg p-6">
                    <div class="w-full">
                        <div class="p-2 w-full">
                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full bg-gray-100 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-2 px-4 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="p-2 w-full">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full bg-gray-100 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-700 py-2 px-4 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="p-2 w-full">
                            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                            <textarea id="message" name="message"
                                class="w-full bg-gray-100 rounded border border-gray-300 focus:border-green-500 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-700 py-2 px-4 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        <div class="p-2 w-full">
                            <button
                                class="w-full text-white bg-green-500 border-0 py-2 px-6 focus:outline-none hover:bg-green-600 rounded text-lg">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
