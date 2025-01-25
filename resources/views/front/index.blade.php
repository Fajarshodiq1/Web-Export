@extends('layouts.app')
@section('content')
    <style>
        .hero-section {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 100vh;
            /* Gambar memenuhi layar penuh */
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            /* Transisi gambar */
        }

        .slide.active {
            opacity: 1;
            /* Hanya gambar dengan kelas 'active' yang terlihat */
        }
    </style>
    <x-nav />
    <div class="hero-section relative overflow-hidden w-full h-[100vh]" id="hero">
        @foreach ($heroes as $index => $hero)
            <div class="slide absolute top-0 left-0 w-full h-full transition-opacity duration-1000 ease-in-out {{ $index === 0 ? 'active' : '' }}"
                style="background-image: url('{{ Storage::url($hero->thumbnail) }}');"></div>
        @endforeach
    </div>
    <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
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
            <p class="mx-auto mt-12 max-w-xl text-xs md:text-sm lg:text-xl text-white md:leading-7 animateTop3">
                Exporting and Supply
                the great quality of Rhizome Spices especially Turmeric and Ginger. The curtest export and import
                process to scale up your business. Contact us now and taste the best quality of Indonesian Spices.</p>
        </div>
    </div>
    </div>

    {{-- Category Product --}}
    <section id="Categories" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] mt-[50px] h-[50vh]">
        <div class="flex flex-col gap-8">
            <!-- Header Section -->
            <div class="text-center my-10">
                <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">CATEGORY
                        PRODUCT</span>
                </h1>
            </div>
            <!-- Categories Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($categories as $itemCategory)
                    <a href="{{ route('front.category', $itemCategory->slug) }}"
                        class="card hover:shadow-2xl transition rounded-xl shadow-lg">
                        <div class="flex items-center h-full rounded-3xl p-5 gap-3 bg-white">
                            <img src="{{ Storage::url($itemCategory->icon) }}" class="w-[56px] h-[56px] flex-shrink-0"
                                alt="icon">
                            <div class="flex flex-col gap-1 overflow-hidden">
                                <h3 class="font-semibold text-lg sm:text-xl leading-[24px] sm:leading-[27px] break-words">
                                    {{ $itemCategory->name }}
                                </h3>
                                <p class="font-medium text-sm sm:text-base text-aktiv-grey">{{ $itemCategory->tagline }}</p>
                            </div>
                        </div>
                    </a>
                @empty
                    <p class="text-center text-aktiv-grey">Belum ada data category</p>
                @endforelse
            </div>
        </div>
    </section>
    {{-- Card Product --}}
    <section id="Trending" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] h-[100vh]">
        <div class="flex flex-col gap-8">
            <!-- Header Section -->
            <div class="text-center my-10">
                <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">All
                        PRODUCTS</span>
                </h1>
            </div>
            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($products as $product)
                    <a href="{{ route('front.details', ['product' => $product->slug]) }}"
                        class="card hover:shadow-2xl transition rounded-xl shadow-lg border">
                        <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-6 bg-white">
                            <!-- Workshop Thumbnail -->
                            <div class="relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="{{ Storage::url($product->thumbnail) }}" class="w-full h-full object-cover border"
                                    alt="thumbnail">
                                @if ($product->is_open)
                                    <div
                                        class="absolute top-3 left-3 flex items-center rounded-full py-2 px-4 gap-2 text-white bg-green-800 z-10">
                                        <span class="font-semibold text-sm md:text-base">
                                            In Stock
                                        </span>
                                    </div>
                                @else
                                    <div
                                        class="absolute top-3 left-3 flex items-center rounded-full py-2 px-4 gap-2 bg-aktiv-red text-white z-10">
                                        <span class="font-semibold">CLOSED</span>
                                    </div>
                                @endif
                            </div>
                            <!-- Workshop Details -->
                            <div class="flex flex-col gap-3">
                                <h3 class="font-semibold text-xl leading-6 line-clamp-2 hover:line-clamp-none transition">
                                    {{ $product->name }}
                                </h3>
                                <p class="font-medium text-aktiv-grey text-sm md:text-base">
                                    {{ $product->category->name }}</p>
                            </div>
                            <!-- Pricing -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp
                                        {{ number_format($product->price, 0, '.', ',') }}
                                    </p>
                                </div>
                            </div>
                            <div class="text-white bg-green-800 p-4 rounded-lg text-center">View Product</div>
                        </div>
                    </a>
                @empty
                    <p class="text-center text-aktiv-grey">Belum ada data produk terbaru</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="pagination">
                {{ $products->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </section>
    {{-- why us --}}
    <section id="Goals" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] z-10 h-[100vh]">
        <!-- Header Section -->
        <div class="text-center my-10">
            <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">WHY
                    US?</span>
            </h1>
        </div>
        <div class="flex flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] gap-3 text-cente">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 items-center gap-6 rounded-3xl p-8 lg:p-[32px_52px] bg-white">
                <!-- Heading -->
                <div class="flex flex-col gap-3 text-center lg:text-start">
                    <h2
                        class="font-['Neue_Plak_bold'] text-2xl sm:text-3xl lg:text-[32px] leading-[30px] sm:leading-[38px] lg:leading-[41.6px] text-green-800 font-bold">
                        CPR <br class="hidden sm:block">
                    </h2>
                    <p class="font-medium text-aktiv-grey text-sm sm:text-base">CPR "Your curt, precise, and reliable
                        partner!"</p>
                </div>
                <!-- Card 1 -->
                <div
                    class="flex flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] gap-3 text-center min-h-7">
                    <img src="https://image3.jdomni.in/banner/13062021/16/7E/7E/5A9920439E52EF309F27B43EEB_1623568010437.png?output-format=webp"
                        class="w-12 sm:w-14 lg:w-[64px]" alt="icon">
                    <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">CURT</h3>
                    <p class="font-medium text-aktiv-grey text-sm sm:text-base">"Ability to offer the curtest preparation
                        for your product"
                    </p>
                </div>
                <!-- Card 2 -->
                <div
                    class="flex flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] gap-3 text-center min-h-7">
                    <img src="https://image3.jdomni.in/banner/13062021/EB/99/EE/8B46027500E987A5142ECC1CE1_1623567959360.png?output-format=webp"
                        class="w-12 sm:w-14 lg:w-[64px]" alt="icon">
                    <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">PRECISE</h3>
                    <p class="font-medium text-aktiv-grey text-sm sm:text-base">"The precise place to get to know about the
                        entire superior quality supply of spices from Indonesia."
                    </p>
                </div>
                <!-- Card 3 -->
                <div
                    class="flex flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] gap-3 text-center min-h-7">
                    <img src="https://almeakausaeterna.com/assets/handshake.png" class="w-12 sm:w-14 lg:w-[64px]"
                        alt="icon">
                    <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">RELIABLE</h3>
                    <p class="font-medium text-aktiv-grey text-sm sm:text-base">"Almea Kausa Eterna is reliable for your
                        business and will be your forever partner in escalating the industry with great services
                        consistently."
                    </p>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
@endsection
