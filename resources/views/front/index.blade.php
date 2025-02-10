@extends('layouts.app')
@section('content')
    <x-nav />
    {{-- hero --}}
    <section x-data="{ activeIndex: 0, total: {{ count($heroes) }} }" x-init="setInterval(() => { activeIndex = (activeIndex + 1) % total }, 5000)" class="hero-section relative overflow-hidden w-full h-[100vh]"
        id="hero">
        @foreach ($heroes as $index => $hero)
            <div class="slide w-full h-full bg-cover bg-center absolute top-0 left-0 transition-all duration-1000 ease-in-out"
                style="background-image: url('{{ Storage::url($hero->thumbnail) }}');"
                x-show="activeIndex === {{ $index }}" x-transition:enter="opacity-0 blur-md"
                x-transition:enter-start="opacity-0 blur-md" x-transition:enter-end="opacity-100 blur-0"
                x-transition:leave="opacity-100 blur-0" x-transition:leave-start="opacity-100 blur-0"
                x-transition:leave-end="opacity-0 blur-md"></div>
        @endforeach
    </section>
    <section class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="flex flex-1 w-full flex-col items-center justify-center text-center px-4  mt-20">
            <a href="#" target="_blank" rel="noreferrer"
                class="animateTop1 border rounded-2xl py-1 px-4 text-white text-xs md:text-sm mb-5 hover:scale-105 transition duration-300 ease-in-out animateTop1">Welcome
                to our Website
            </a>
            <h1
                class="mx-auto max-w-4xl font-display text-3xl lg:text-5xl font-bold tracking-normal text-white sm:text-7xl animateTop2">
                Almea Kausa
                <span class="relative whitespace-nowrap text-green-500">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="absolute top-2/3 left-0 h-[0.58em] w-full fill-green-300/70" preserveAspectRatio="none">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    <span class="relative">Eterna</span>
                </span>
            </h1>
            <p class="mx-auto mt-12 max-w-4xl text-xs md:text-sm lg:text-xl text-white md:leading-7 animateTop3">
                Trusted export company specializing in premium Indonesian spices. With successful shipments to over 20
                countries and a proven record of buyer satisfaction, we take pride in delivering the finest spices tailored
                to diverse market needs. Our key value lies in our regional spice expertise, ensuring that buyers receive
                top-quality products sourced from the best spice regions across Indonesia.</p>
        </div>
    </section>
    <section class="max-w-[1280px] w-full mx-auto relative px-5 lg:px-[52px] h-auto overflow-x-hidden mt-10 lg:mt-0">
        <div class="md:my-10 flex justify-between">
            <h1 class="text-2xl md:text-4xl font-extrabold tracking-tight text-gray-900 title flex items-center">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT
                    CENTER</span>
            </h1>
            <a href="{{ route('products') }}"
                class="px-4 md:px-5 py-2 md:py-3 text-sm md:text-base bg-green-600 text-white rounded-full">See All
                <i class="ri-arrow-right-s-line"></i></a>
        </div>
        {{-- Cek jumlah produk yang diambil --}}
        {{-- <p class="mb-4">Total Products: {{ $products->count() }}</p> --}}
        <div class="swiper multiple-slide-carousel swiper-container relative mt-12 md:mt-1">
            <div class="swiper-wrapper md:mb-16">
                @forelse ($products as $product)
                    <a href="{{ route('front.details', ['product' => $product->slug]) }}"
                        class="swiper-slide w-full md:px-4 md:w-1/2 xl:w-1/3 block"
                        onclick="trackClick('{{ $product->slug }}')">
                        <div
                            class="mb-10 overflow-hidden duration-300 bg-white rounded-2xl shadow-md hover:shadow-lg min-h-[300px] lg:min-h-[450px] flex flex-col">

                            <!-- Gambar dengan tinggi tetap -->
                            <img src="{{ Storage::url($product->thumbnail) }}" alt="image"
                                class="w-full h-[200px] lg:h-[300px] object-cover transition-transform duration-300 transform hover:scale-105" />

                            <!-- Wrapper konten -->
                            <div class="p-8 text-start sm:p-9 md:p-7 xl:p-9 flex flex-col justify-between h-full">
                                <h3>
                                    <p
                                        class="text-dark dark:text-white hover:text-green-600 mb-4 block text-sm font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
                                        {{ $product->name }}
                                    </p>
                                </h3>
                                <p
                                    class="text-sm md:text-base leading-relaxed text-body-color mb-7 flex-1 min-h-[50px] line-clamp-2 hover:line-clamp-none">
                                    {{ $product->about }}
                                </p>

                                <!-- Tombol -->
                                <div
                                    class="w-full flex items-center justify-center gap-2 border border-green whitespace-nowrap bg-green px-5 py-2 md:py-4 rounded-xl text-white text-center bg-green-600 text-xs md:text-base">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        aria-hidden="true" class="size-3.5 hidden md:flex">
                                        <path fill-rule="evenodd"
                                            d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    View Product
                                </div>
                            </div>
                        </div>
                    </a>
                    <script>
                        function trackClick(slug) {
                            fetch("{{ route('track.click') }}", {
                                    method: "POST",
                                    headers: {
                                        "Content-Type": "application/json",
                                        "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                    },
                                    body: JSON.stringify({
                                        product: slug
                                    })
                                }).then(response => response.json())
                                .then(data => console.log(data));
                        }
                    </script>
                @empty
                    <p class="text-center text-gray-500">No products available.</p>
                @endforelse
            </div>
            <div class="absolute flex justify-center items-center m-auto left-0 right-0 w-fit bottom-12">
                <button id="slider-button-left"
                    class="swiper-button-prev group !p-2 flex justify-center items-center border border-solid border-green-600 !w-12 !h-12 transition-all duration-500 rounded-full  hover:bg-green-600 !-translate-x-16"
                    data-carousel-prev>
                    <svg class="h-5 w-5 text-green-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M10.0002 11.9999L6 7.99971L10.0025 3.99719" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
                <button id="slider-button-right"
                    class="swiper-button-next group !p-2 flex justify-center items-center border border-solid border-green-600 !w-12 !h-12 transition-all duration-500 rounded-full hover:bg-green-600 !translate-x-16"
                    data-carousel-next>
                    <svg class="h-5 w-5 text-green-600 group-hover:text-white" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M5.99984 4.00012L10 8.00029L5.99748 12.0028" stroke="currentColor" stroke-width="1.6"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <x-company-profile />
    <x-cpr />
    <x-4values />
    <x-stats />
    <x-faq />
    <x-footer />
    <x-navIcon />
@endsection
