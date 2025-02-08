@extends('layouts.app')
@section('content')
    <x-nav />
    <div class="font-sans bg-white pt-20">
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
                    <span>Product Center</span>
                </div>
            </div>
            <!-- ./ Breadcrumbs -->
        </div>
    </div>
    <section class="bg-gray-2 dark:bg-dark pb-10 bg-slate-50 overflow-hidden">
        <div class="max-w-[1280px] mx-auto w-full">
            <div class="md:my-10">
                <h1
                    class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 title flex items-center text-center justify-center">
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">PRODUCT
                        CENTER</span>
                </h1>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 w-full mt-4 px-[5px]">
                @forelse ($products as $product)
                    <a href="{{ route('front.details', ['product' => $product->slug]) }}" class="w-full block"
                        onclick="trackClick('{{ $product->slug }}')">
                        <div
                            class="mb-10 overflow-hidden duration-300 bg-white rounded-2xl dark:bg-dark-2 shadow-lg hover:shadow-xl dark:shadow-card dark:hover:shadow-xl transition-transform transform hover:scale-105">
                            <img src="{{ Storage::url($product->thumbnail) }}" alt="image"
                                class="w-full object-cover rounded-t-2xl" />
                            <div class="p-6 sm:p-8 text-start">
                                <h3>
                                    <p
                                        class="text-dark dark:text-white hover:text-green-600 mb-3 text-lg font-semibold sm:text-xl md:text-lg lg:text-xl">
                                        {{ $product->name }}
                                    </p>
                                </h3>
                                <p class="text-sm leading-relaxed text-body-color mb-6">
                                    {{ $product->about }}
                                </p>
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
                @empty
                    <p class="text-center col-span-full">No products available</p>
                @endforelse
            </div>

        </div>
    </section>
    <x-footer />
@endsection
