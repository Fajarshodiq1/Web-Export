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
    {{-- hero --}}
    <section class="hero-section relative overflow-hidden w-full h-[100vh]" id="hero">
        @foreach ($heroes as $index => $hero)
            <div class="slide absolute top-0 left-0 w-full h-full transition-opacity duration-1000 ease-in-out {{ $index === 0 ? 'active' : '' }}"
                style="background-image: url('{{ Storage::url($hero->thumbnail) }}');"></div>
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

    {{-- paralax --}}

    {{-- <section class="h-screen relative flex items-center justify-center">
        <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat opacity-80 bg-fixed"
            style="background-image:url({{ asset('assets/footer.jpg') }})">
        </div>
        <div class="relative flex flex-col justify-center items-center max-w-[1280px] mx-auto text-center">
            <h1 class="text-white text-4xl md:text-6xl font-bold">WHY US</h1>

            <!-- Kotak Ikon -->
            <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-6 text-white items-center">
                <div class="p-6 bg-white bg-opacity-20 backdrop-blur-lg rounded-lg shadow-lg text-center">
                    <i class="fas fa-lightbulb text-4xl"></i>
                    <h3 class="mt-4 text-xl font-semibold">Innovative Solutions</h3>
                    <p class="mt-2 text-sm">We bring fresh ideas and cutting-edge technology to every project.</p>
                </div>

                <div class="p-6 bg-white bg-opacity-20 backdrop-blur-lg rounded-lg shadow-lg text-center">
                    <i class="fas fa-users text-4xl"></i>
                    <h3 class="mt-4 text-xl font-semibold">Expert Team</h3>
                    <p class="mt-2 text-sm">Our team consists of skilled professionals with deep industry knowledge.</p>
                </div>

                <div class="p-6 bg-white bg-opacity-20 backdrop-blur-lg rounded-lg shadow-lg text-center">
                    <i class="fas fa-chart-line text-4xl"></i>
                    <h3 class="mt-4 text-xl font-semibold">Proven Results</h3>
                    <p class="mt-2 text-sm">We deliver measurable success and long-term value to our clients.</p>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- about us --}}
    <section class="text-gray-600 body-font w-full md:max-w-[1280px] mx-auto md:px-5 lg:px-[52px] overflow-x-hidden">
        <div
            class="md:container px-4 md:mx-auto flex md:px-5 md:py-24 pb-10 md:pb-5 md:flex-row flex-col items-center w-full">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <div class="text-center my-10">
                    <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">WHY
                            ALMEA KAUSA ETERNA?</span>
                    </h1>
                </div>
                <p class="mb-8 leading-relaxed text-justify md:justify-normal">CV. ALMEA KAUSA ETERNA, we understand that
                    not every region in Indonesia produces the same quality of spices. Each spice thrives under specific
                    conditions, and we have the expertise to identify the regions that produce the finest spices for
                    different needs. With a deep knowledge of Indonesia’s spice-producing regions and their seasonal
                    patterns, we ensure you receive high-quality products at the best possible value for your business.</p>
                <div class="flex flex-col md:flex-row w-full md:justify-start justify-center items-end gap-5">
                    <a href=""
                        class="inline-flex items-center justify-center text-white bg-green-600 border-0 py-2 px-6 focus:outline-none hover:bg-green-700 rounded-full text-lg w-full">
                        About us
                    </a>

                    <a href=""
                        class="inline-flex items-center justify-center bg-white border-2 border-green-600 text-black py-2 px-6 focus:outline-none hover:bg-green-600 hover:text-white rounded-full text-lg w-full">
                        Product
                    </a>

                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full">
                <img class="object-cover object-center rounded" alt="hero"
                    src="https://almeakausaeterna.com/assets/Companyprofile/gambar2.jpg">
            </div>
        </div>
    </section>
    {{-- Category Product --}}
    {{-- <section id="Categories" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] mt-[50px] h-[50vh]">
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
    </section> --}}
    {{-- Card Product --}}
    <section id="Trending" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] h-auto overflow-x-hidden">
        <div class="flex flex-col gap-8">
            <!-- Header Section -->
            <div class="md:mt-10 flex justify-between">
                <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 title flex items-center">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT
                        CENTER</span>
                </h1>
                <a href="{{ route('products') }}" class="px-5 py-3 bg-green-600 text-white rounded-full">See All <i
                        class="ri-arrow-right-s-line"></i></a>
            </div>
            <!-- Modal -->
            <div x-data="{ showModal: false, product: {} }">
                <div x-show="showModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-40">
                    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
                        <h2 class="text-xl font-bold text-gray-800 mb-4" x-text="product.name"></h2>
                        <img :src="product.thumbnail" alt="Product Image" class="w-full h-40 object-cover rounded">
                        <p class="text-gray-600 mt-2" x-text="product.about"></p>
                        <button @click="showModal = false"
                            class="mt-4 bg-red-500 text-white px-4 py-2 rounded">Close</button>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @forelse ($products as $product)
                        <a href="javascript:void(0)"
                            class="card hover:shadow-md hover:shadow-green-400 transition rounded-3xl shadow-lg border">
                            <div class="flex flex-col h-full justify-between rounded-3xl p-6 gap-6 bg-white">
                                <!-- Product Thumbnail -->
                                <div class="relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                    <img src="{{ Storage::url($product->thumbnail) }}"
                                        class="w-full h-full object-cover border" alt="thumbnail">
                                    @if ($product->is_open)
                                        <div
                                            class="absolute top-3 left-3 flex items-center rounded-full py-2 px-4 gap-2 text-white bg-green-800 z-10">
                                            <span class="font-semibold text-sm md:text-base">In Stock</span>
                                        </div>
                                    @else
                                        <div
                                            class="absolute top-3 left-3 flex items-center rounded-full py-2 px-4 gap-2 bg-aktiv-red text-white z-10">
                                            <span class="font-semibold">CLOSED</span>
                                        </div>
                                    @endif
                                </div>
                                <!-- Product Details -->
                                <div class="flex flex-col gap-3">
                                    <h3
                                        class="font-semibold md:text-xl leading-6 line-clamp-2 hover:line-clamp-none transition">
                                        {{ $product->name }}
                                    </h3>
                                    <button class="flex items-start text-slate-400 gap-2"
                                        @click="showModal = true; product = { 
                                name: '{{ $product->name }}', 
                                thumbnail: '{{ Storage::url($product->thumbnail) }}', 
                                about: '{{ $product->about }}'
                            }">
                                        <i class="ri-eye-line"></i>View
                                    </button>
                                </div>
                                <div class="text-white bg-green-600 hover:bg-green-700 p-4 rounded-lg text-center">View
                                    Product</div>
                            </div>
                        </a>
                    @empty
                        <p class="text-center text-aktiv-grey">Belum ada data produk terbaru</p>
                    @endforelse
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination mt-6">
                {{ $products->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </section>
    {{-- CPR --}}
    <x-cpr />
    {{-- 4 values --}}
    <x-4values />
    {{-- track --}}
    <x-stats />
    <div class="text-center my-10">
        <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">FAQ</span>
        </h1>
    </div>
    <x-faq />

    <x-footer />
    <script>
        // stats
        function animateCounter(id, target) {
            let count = 0;
            const element = document.getElementById(id);
            const duration = 2000; // Durasi animasi dalam ms
            const stepTime = duration / target;

            const timer = setInterval(() => {
                count++;
                element.textContent = count;
                if (count >= target) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        function startAnimation(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter("counter1", 37);
                    animateCounter("counter2", 21);
                    observer.disconnect(); // Hentikan observer setelah animasi berjalan
                }
            });
        }

        const observer = new IntersectionObserver(startAnimation, {
            root: null, // Memantau viewport
            threshold: 0.5 // Animasi mulai ketika 50% elemen terlihat
        });

        observer.observe(document.getElementById("stats-section"));
    </script>
@endsection
