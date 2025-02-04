@extends('layouts.app')
@section('content')
    <x-nav />
    <section id="Trending" class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] h-auto mt-20">
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
                        <span>Products</span>
                    </div>
                </div>
                <!-- ./ Breadcrumbs -->
            </div>
        </div>
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
                            <!-- Product Thumbnail -->
                            <div class="relative h-[200px] rounded-xl bg-[#D9D9D9] overflow-hidden">
                                <img src="{{ Storage::url($product->thumbnail) }}" class="w-full h-full object-cover border"
                                    alt="thumbnail">
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
                                <h3 class="font-semibold text-xl leading-6 line-clamp-2 hover:line-clamp-none transition">
                                    {{ $product->name }}</h3>
                                </p>
                            </div>
                            <!-- Pricing -->
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <p class="font-semibold text-2xl leading-8 text-aktiv-red">Rp
                                        {{ number_format($product->price, 0, '.', ',') }}</p>
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
            <div class="pagination mt-6">
                {{ $products->links('vendor.pagination.tailwind') }}
            </div>
        </div>
    </section>
@endsection
