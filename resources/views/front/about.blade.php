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
    <nav class="flex gap-x-1 max-w-[1280px] w-full mx-auto" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
        <button type="button"
            class="hs-tab-active:bg-green-600 hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-3 px-4 text-center flex-auto inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-medium text-gray-500 hover:text-green-600 focus:outline-none focus:text-green-600 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300 active"
            id="fill-and-justify-item-1" aria-selected="true" data-hs-tab="#fill-and-justify-1"
            aria-controls="fill-and-justify-1" role="tab">
            CPR
        </button>
        <button type="button"
            class="hs-tab-active:bg-green-600 hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-3 px-4 text-center flex-auto inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-medium text-gray-500 hover:text-green-600 focus:outline-none focus:text-green-600 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
            id="fill-and-justify-item-2" aria-selected="false" data-hs-tab="#fill-and-justify-2"
            aria-controls="fill-and-justify-2" role="tab">
            4 VALUES
        </button>
        <button type="button"
            class="hs-tab-active:bg-green-600 hs-tab-active:text-white hs-tab-active:hover:text-white hs-tab-active:dark:text-white py-3 px-4 text-center flex-auto inline-flex justify-center items-center gap-x-2 bg-transparent text-sm font-medium text-gray-500 hover:text-green-600 focus:outline-none focus:text-green-600 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-400 dark:hover:text-neutral-300 dark:focus:text-neutral-300"
            id="fill-and-justify-item-3" aria-selected="false" data-hs-tab="#fill-and-justify-3"
            aria-controls="fill-and-justify-3" role="tab">
            OUR RESOURCE
        </button>
    </nav>

    <div class="mt-3 max-w-[1280px] w-full mx-auto">
        <div id="fill-and-justify-1" role="tabpanel" aria-labelledby="fill-and-justify-item-1">
            <div class="mt-28"></div>
            <x-cpr />
        </div>
        <div id="fill-and-justify-2" class="hidden" role="tabpanel" aria-labelledby="fill-and-justify-item-2">
            <x-4values />
        </div>
        <div id="fill-and-justify-3" class="hidden" role="tabpanel" aria-labelledby="fill-and-justify-item-3">
            <div class="mt-28"></div>
            <x-ourResource />
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Ambil hash dari URL (misal: #tabs-home02)
            let hash = window.location.hash;

            if (hash) {
                let targetTab = document.querySelector(hash);
                if (targetTab) {
                    // Nonaktifkan semua tab
                    document.querySelectorAll("[role='tab']").forEach(tab => {
                        tab.classList.add("hidden");
                        tab.classList.remove("opacity-100");
                        tab.classList.add("opacity-0");
                    });

                    // Aktifkan tab yang sesuai dengan hash
                    targetTab.classList.remove("hidden");
                    targetTab.classList.add("opacity-100");
                    targetTab.classList.remove("opacity-0");

                    // Ubah tampilan tombol tab yang aktif
                    document.querySelectorAll("[data-twe-toggle='pill']").forEach(tab => {
                        tab.removeAttribute("data-twe-nav-active");
                    });

                    let activeButton = document.querySelector(`[data-twe-target='${hash}']`);
                    if (activeButton) {
                        activeButton.setAttribute("data-twe-nav-active", "true");
                    }
                }
            }
        });
    </script>
@endsection
