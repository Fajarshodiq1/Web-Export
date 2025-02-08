@extends('layouts.app')
@section('content')
    <x-nav />
    <div class="h-20"></div>
    <section class="py-6">
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
                <span>{{ $product->name }}</span>
            </div>
        </div>
        <!-- ./ Breadcrumbs -->

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6">
            <div class="flex flex-col md:flex-row -mx-4">
                <div class="md:flex-1 px-4">
                    <div x-data="{ image: 1 }" x-cloak>
                        <div class="h-64 md:h-96 rounded-lg bg-gray-100 my-4">
                            <img src="{{ Storage::url($product->thumbnail) }}" x-show="image === 1"
                                class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                            </img>

                            <img src="{{ Storage::url($product->thumbnail2) }}" x-show="image === 2"
                                class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                            </img>

                            <img src="{{ Storage::url($product->thumbnail3) }}" x-show="image === 3"
                                class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                            </img>

                            <img src="{{ Storage::url($product->thumbnail4) }}" x-show="image === 4"
                                class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                            </img>
                        </div>

                        <div class="flex -mx-2 mb-4 p-3">
                            <template x-for="i in 4">
                                <div class="flex-1 px-2">
                                    <button x-on:click="image = i"
                                        :class="{ 'ring-2 ring-green-300 ring-inset': image === i }"
                                        class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center overflow-hidden transform transition-transform duration-300 hover:scale-105">
                                        <img :src="[
                                            '{{ Storage::url($product->thumbnail) }}',
                                            '{{ Storage::url($product->thumbnail2) }}',
                                            '{{ Storage::url($product->thumbnail3) }}',
                                            '{{ Storage::url($product->thumbnail4) }}'
                                        ][i - 1]"
                                            class="h-full w-full object-cover rounded-lg">
                                    </button>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
                <div class="md:flex-1 px-4">
                    <h2 class="mb-2 leading-tight tracking-tight font-bold text-gray-800 text-2xl md:text-3xl">
                        {{ $product->name }}</h2>
                    <p class="text-gray-500 text-sm mb-4">By <a href="#" class="text-green-600 hover:underline">Almea
                            Kausa Eterna</a></p>
                    <p class="text-gray-500">{{ $product->about }}</p>
                    <div class="flex w-full flex-col gap-4 text-on-surface dark:text-on-surface-dark my-5">
                        <div x-data="{ isExpanded: false }"
                            class="overflow-hidden rounded-xl border border-green-400 border-outline bg-surface-alt/40 dark:border-outline-dark dark:bg-surface-dark-alt/50">
                            <button id="controlsAccordionItemOne" type="button"
                                class="flex w-full items-center justify-between gap-2 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                                aria-controls="accordionItemOne" x-on:click="isExpanded = ! isExpanded"
                                x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold' :
                                    'text-on-surface dark:text-on-surface-dark font-medium'"
                                x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                                Spesification
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                    stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                    x-bind:class="isExpanded ? 'rotate-180' : ''">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                                aria-labelledby="controlsAccordionItemOne" x-collapse>
                                <table
                                    class="min-w-full border-collapse border border-green-300 shadow-lg rounded-lg overflow-hidden">
                                    <thead>
                                        <tr class="bg-green-600 text-white">
                                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Details</th>
                                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Specification
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($spesifications as $spesification)
                                            <tr>
                                                <td class="px-6 py-4 text-gray-800">{{ $spesification->detail }}</td>
                                                <td class="px-6 py-4 text-gray-600">{{ $spesification->spek }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>empty</td>
                                                <td>empty</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <div x-data="{ isExpanded: false }"
                            class="overflow-hidden rounded-xl border border-green-400 border-outline bg-surface-alt/40 dark:border-outline-dark dark:bg-surface-dark-alt/50">
                            <button id="controlsAccordionItemTwo" type="button"
                                class="flex w-full items-center justify-between gap-2 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                                aria-controls="accordionItemTwo" x-on:click="isExpanded = ! isExpanded"
                                x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold' :
                                    'text-on-surface dark:text-on-surface-dark font-medium'"
                                x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                                Packing
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                                    stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                                    x-bind:class="isExpanded ? 'rotate-180' : ''">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div x-cloak x-show="isExpanded" id="accordionItemTwo" role="region"
                                aria-labelledby="controlsAccordionItemTwo" x-collapse>
                                <table
                                    class="min-w-full border-collapse border border-green-300 shadow-lg rounded-lg overflow-hidden">
                                    <thead>
                                        <tr class="bg-green-600 text-white">
                                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Packing</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($product->packings as $packing)
                                            <tr>
                                                <td class="px-6 py-4 text-gray-800"> {{ $packing->name }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>empty</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div x-data="{ isExpanded: false }"
                            class="overflow-hidden rounded-xl border border-green-400 border-outline bg-surface-alt/40 dark:border-outline-dark dark:bg-surface-dark-alt/50">
                            <button id="controlsAccordionItemThree" type="button"
                                class="flex w-full items-center justify-between gap-2 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                                aria-controls="accordionItemThree" x-on:click="isExpanded = ! isExpanded"
                                x-bind:class="isExpanded ? 'text-on-surface-strong dark:text-on-surface-dark-strong font-bold' :
                                    'text-on-surface dark:text-on-surface-dark font-medium'"
                                x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                                Port
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke-width="2" stroke="currentColor" class="size-5 shrink-0 transition"
                                    aria-hidden="true" x-bind:class="isExpanded ? 'rotate-180' : ''">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                            <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region"
                                aria-labelledby="controlsAccordionItemThree" x-collapse>
                                <table
                                    class="min-w-full border-collapse border border-green-300 shadow-lg rounded-lg overflow-hidden">
                                    <thead>
                                        <tr class="bg-green-600 text-white">
                                            <th class="px-6 py-3 text-left text-sm font-semibold uppercase">Port</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($product->ports as $port)
                                            <tr>
                                                <td class="px-6 py-4 text-gray-800"> <i
                                                        class="ri-map-pin-range-fill px-3 text-green-600"></i>{{ $port->name }}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>empty</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <a href="https://wa.me/6285190000236" class="flex py-4 space-x-4">
                        <button type="button"
                            class="h-14 w-full px-6 py-2 font-semibold rounded-xl bg-green-600 hover:bg-green-500 text-white">
                            Learn more
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="max-w-[1280px] w-full mx-auto relative px-5 lg:px-[52px] h-auto overflow-x-hidden">
        <div class="md:my-10 flex justify-between">
            <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 title flex items-center">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT
                    CENTER</span>
            </h1>
            <a href="{{ route('products') }}" class="px-5 py-3 bg-green-600 text-white rounded-full">See All <i
                    class="ri-arrow-right-s-line"></i></a>
        </div>
        {{-- Cek jumlah produk yang diambil --}}
        <div class="swiper multiple-slide-carousel swiper-container relative mt-12 md:mt-1">
            <div class="swiper-wrapper md:mb-16">
                @forelse ($products as $product)
                    <a href="{{ route('front.details', ['product' => $product->slug]) }}"
                        class="swiper-slide w-full md:px-4 md:w-1/2 xl:w-1/3 block"
                        onclick="trackClick('{{ $product->slug }}')">
                        <div
                            class="mb-10 overflow-hidden duration-300 bg-white rounded-2xl dark:bg-dark-2 shadow-1 hover:shadow-3 dark:shadow-card dark:hover:shadow-3 min-h-[300px] lg:min-h-[450px] flex flex-col">

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
                                <p class="text-sm md:text-base leading-relaxed text-body-color mb-7 flex-1">
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

    <x-footer />
@endsection
