@extends('layouts.app')
@section('title')
    Details {{ $category->name }}
@endsection
@section('content')
    <x-nav />
    <section id="Category"
        class="max-w-[1280px] mx-auto px-[52px] mt-[100px] mb-[100px] relative overflow-hidden w-full h-[100vh]">
        <div class="flex flex-col gap-9">
            <div class="flex flex-col items-center gap-1">
                <h1 class="font-Neue-Plak-bold text-[32px] leading-[44.54px] capitalize">{{ $product->name }}
                    {{ $category->product }}</h1>
                <div class="flex items-center gap-2 ">
                    <a class="font-medium text-aktiv-grey last:font-semibold last:text-aktiv-black">Homepage</a>
                    <span>></span>
                    <a class="font-medium text-aktiv-grey last:font-semibold last:text-aktiv-black">Category Workshop</a>
                </div>
            </div>
            <div class="grid grid-rows-1 lg:grid-cols-3 gap-6">
                @forelse ($category->products as $product)
                    <a href="" class="card hover:shadow-2xl transition rounded-xl shadow-lg border">
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
                    <p>Belum ada data workshop terbaru</p>
                @endforelse
            </div>
        </div>
    </section>
@endsection
