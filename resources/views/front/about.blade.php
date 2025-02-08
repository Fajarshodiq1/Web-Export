@extends('layouts.app')
@section('content')
    <x-nav />
    <div class="font-sans bg-white mt-20">
        <div class="py-6">
            <!-- Breadcrumbs -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="/" class="hover:underline hover:text-gray-600"><i
                            class="ri-home-4-fill text-lg text-green-500"></i> Home</a>
                    <span>
                        <svg class="h-5 w-5 leading-none text-gray-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                    <span>About Us</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
    </div>
    <nav class="flex gap-x-4 md:gap-x-8 px-4 max-w-[1280px] w-full mx-auto" aria-label="Tabs" role="tablist"
        aria-orientation="horizontal">
        <button type="button"
            class="border border-green-600 hs-tab-active:bg-green-600 hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-3 px-4 text-center flex-auto inline-flex justify-center items-center gap-x-2 bg-transparent text-[10px] md:text-sm font-medium text-gray-500 hover:text-green-600 focus:outline-none focus:text-green-600 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300 active"
            id="fill-and-justify-item-1" aria-selected="true" data-hs-tab="#fill-and-justify-1"
            aria-controls="fill-and-justify-1" role="tab">
            WHY US
        </button>
        <button type="button"
            class="border border-green-600 hs-tab-active:bg-green-600 hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-3 px-4 text-center flex-auto inline-flex justify-center items-center gap-x-2 bg-transparent text-[10px] md:text-sm font-medium text-gray-500 hover:text-green-600 focus:outline-none focus:text-green-600 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
            id="fill-and-justify-item-2" aria-selected="false" data-hs-tab="#fill-and-justify-2"
            aria-controls="fill-and-justify-2" role="tab">
            DOCUMENTATION
        </button>
        <button type="button"
            class="border border-green-600 hs-tab-active:bg-green-600 hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-3 px-4 text-center flex-auto inline-flex justify-center items-center gap-x-2 bg-transparent text-[10px] md:text-sm font-medium text-gray-500 hover:text-green-600 focus:outline-none focus:text-green-600 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
            id="fill-and-justify-item-3" aria-selected="false" data-hs-tab="#fill-and-justify-3"
            aria-controls="fill-and-justify-3" role="tab">
            GUIDELINE TO PROCESS
        </button>
    </nav>

    <div class="mt-3">
        <div id="fill-and-justify-1" role="tabpanel" aria-labelledby="fill-and-justify-item-1">
            <div class="mt-28"></div>
            <x-cpr />
            <x-4values />
            <x-ourResource />
            <x-stats />
            <x-companyLogo />
        </div>
        <div id="fill-and-justify-2" class="hidden" role="tabpanel" aria-labelledby="fill-and-justify-item-2">
            <!--HTML CODE-->
            <div class="px-4 w-full relative max-w-[1280px] mx-auto">
                <div class="text-center my-10 mt-28">
                    <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT</span>
                    </h1>
                </div>
                <div class="swiper multiple-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper mb-16">
                        @forelse ($product as $itemproduct)
                            <div class="swiper-slide">
                                <div class="relative group">
                                    <img src="{{ Storage::url($itemproduct->thumbnail) }}" alt="Gallery Image"
                                        class="w-full  h-96 object-cover rounded-lg transition duration-300 group-hover:brightness-75">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span
                                            class="text-white text-lg font-semibold bg-green-600 bg-opacity-50 px-4 py-2 rounded-xl">{{ $itemproduct->title }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Empty</p>
                        @endforelse
                    </div>
                    <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                        <button id="slider-button-left"
                            class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-green-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-green-600 !-translate-x-16"
                            data-carousel-prev>
                            <svg class="h-5 w-5 text-green-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button id="slider-button-right"
                            class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-green-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-green-600 !translate-x-16"
                            data-carousel-next>
                            <svg class="h-5 w-5 text-green-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="px-4 w-full relative max-w-[1280px] mx-auto">
                <div class="text-center my-10">
                    <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT</span>
                    </h1>
                </div>
                <div class="swiper multiple-slide-carousel swiper-container relative">
                    <div class="swiper-wrapper mb-16">
                        @forelse ($warehouse as $itemproduct)
                            <div class="swiper-slide">
                                <div class="relative group">
                                    <img src="{{ Storage::url($itemproduct->thumbnail) }}" alt="Gallery Image"
                                        class="w-full  h-96 object-cover rounded-lg transition duration-300 group-hover:brightness-75">
                                    <div
                                        class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <span
                                            class="text-white text-lg font-semibold bg-green-600 bg-opacity-50 px-4 py-2 rounded-xl">{{ $itemproduct->title }}</span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p>Empty</p>
                        @endforelse
                    </div>
                    <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                        <button id="slider-button-left"
                            class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-green-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-green-600 !-translate-x-16"
                            data-carousel-prev>
                            <svg class="h-5 w-5 text-green-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button id="slider-button-right"
                            class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-green-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-green-600 !translate-x-16"
                            data-carousel-next>
                            <svg class="h-5 w-5 text-green-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                                width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="fill-and-justify-3" class="hidden" role="tabpanel" aria-labelledby="fill-and-justify-item-3">
            <x-guideLine />
        </div>
    </div>
    <x-footer />
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil parameter "tab" dari URL
            const params = new URLSearchParams(window.location.search);
            const tab = params.get("tab");

            if (tab) {
                let tabId = "";
                let tabButtonId = "";

                // Cek tab yang dipilih
                if (tab === "why-us") {
                    tabId = "fill-and-justify-1";
                    tabButtonId = "fill-and-justify-item-1";
                } else if (tab === "documentation") {
                    tabId = "fill-and-justify-2";
                    tabButtonId = "fill-and-justify-item-2";
                } else if (tab === "guideline") {
                    tabId = "fill-and-justify-3";
                    tabButtonId = "fill-and-justify-item-3";
                }

                if (tabId && tabButtonId) {
                    // Sembunyikan semua tab
                    document.querySelectorAll('[role="tabpanel"]').forEach(tab => {
                        tab.classList.add("hidden");
                    });

                    // Hapus kelas active dari semua tombol tab
                    document.querySelectorAll('[role="tab"]').forEach(tabBtn => {
                        tabBtn.classList.remove("active");
                    });

                    // Tampilkan tab yang sesuai
                    document.getElementById(tabId).classList.remove("hidden");

                    // Tandai tombol tab sebagai aktif
                    document.getElementById(tabButtonId).classList.add("active");
                    document.getElementById(tabButtonId).setAttribute("aria-selected", "true");
                }
            }
        });
    </script>
@endsection
