@extends('layouts.app')
@section('content')
    <x-nav />
    <div class="h-20"></div>
    <section class="font-sans bg-white">
        <div class="py-6">
            <!-- Breadcrumbs -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center space-x-2 text-gray-400 text-sm">
                    <a href="" class="hover:underline hover:text-gray-600"><i
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
        </div>
        <div class="p-4 lg:max-w-7xl max-w-4xl mx-auto">
            <div class="grid items-start grid-cols-1 lg:grid-cols-5 gap-12  border shadow-primary p-6 rounded-lg">
                <div class="lg:col-span-3 w-full lg:sticky top-0 text-center">
                    <div class="md:flex-1 px-4 border rounded-lg drop-shadow-xl shadow-primary">
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

                                <img src="{{ Storage::url($product->thumbnail) }}" x-show="image === 4"
                                    class="h-64 w-full md:h-96 rounded-lg bg-gray-100 mb-4 flex items-center object-cover">
                                </img>
                            </div>

                            <div class="flex -mx-2 mb-4 p-3">
                                <template x-for="i in 4">
                                    <div class="flex-1 px-2">
                                        <button x-on:click="image = i"
                                            :class="{ 'ring-2 ring-indigo-300 ring-inset': image === i }"
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
                </div>
                <div class="lg:col-span-2 border p-5 rounded-lg shadow-primary">
                    <h2
                        class="text-2xl block antialiased tracking-normal font-sans font-bold leading-snug text-inherit mb-6 text-gray-800">
                        {{ $product->title }}</h2>

                    <div class="flex flex-wrap gap-4 mt-8">
                        <div>
                            <div class="md:text-start text-center">
                                <div
                                    class="block antialiased tracking-normal font-sans text-sm font-semibold leading-snug text-inherit mb-6">
                                    {{ $product->about }}
                                </div>
                            </div>
                            <div class="bg-gradient-to-br from-pink-50 to-indigo-100 grid place-items-center rounded-lg shadow-primary"
                                x-data>
                                <div class="w-full mx-auto">
                                    <div class="bg-white p-4 shadow-sm">
                                        <div class="transition" x-data="{ open: false }">
                                            <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16"
                                                @click="open = !open">
                                                <i :class="open ? 'ri-subtract-line' : 'ri-add-line'"></i>
                                                <h3>Spesification?</h3>
                                            </div>
                                            <div class="accordion-content pt-0 overflow-hidden" x-show="open"
                                                :style="open ? 'max-height: 500px; padding-top: 1rem;' : ''">
                                                <table class="w-full text-sm leading-5">
                                                    <thead class="bg-gray-100">
                                                        <tr>
                                                            <th class="py-3 px-4 text-left font-medium text-gray-600">Detail
                                                            </th>
                                                            <th class="py-3 px-4 text-left font-medium text-gray-600">
                                                                Specification</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="py-3 px-4 text-left font-medium text-gray-600">Name
                                                            </td>
                                                            <td class="py-3 px-4 text-left">{{ $product->name }}</td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="py-3 px-4 text-left font-medium text-gray-600">
                                                                Curcumin</td>
                                                            <td class="py-3 px-4 text-left">> 3%</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-3 px-4 text-left font-medium text-gray-600">Sieve
                                                            </td>
                                                            <td class="py-3 px-4 text-left">0.4</td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="py-3 px-4 text-left font-medium text-gray-600">Colour
                                                            </td>
                                                            <td class="py-3 px-4 text-left">Yellow</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="py-3 px-4 text-left font-medium text-gray-600">
                                                                Foreign Stuff</td>
                                                            <td class="py-3 px-4 text-left">0%</td>
                                                        </tr>
                                                        <tr class="bg-gray-50">
                                                            <td class="py-3 px-4 text-left font-medium text-gray-600">
                                                                Moisture Content</td>
                                                            <td class="py-3 px-4 text-left">
                                                                < 12%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>

                                        <div class="transition" x-data="{ open: false }">
                                            <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16"
                                                @click="open = !open">
                                                <i :class="open ? 'ri-subtract-line' : 'ri-add-line'"></i>
                                                <h3>Port?</h3>
                                            </div>
                                            <div class="accordion-content px-5 pt-0 overflow-hidden" x-show="open"
                                                :style="open ? 'max-height: 500px; padding-top: 1rem;' : ''">
                                                <ul class="list-disc pl-9 text-justify">
                                                    @forelse ($product->ports as $port)
                                                        <li>{{ $port->name }}</li>
                                                    @empty
                                                        <li>Empty</li>
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="transition" x-data="{ open: false }">
                                            <div class="accordion-header cursor-pointer transition flex space-x-5 px-5 items-center h-16"
                                                @click="open = !open">
                                                <i :class="open ? 'ri-subtract-line' : 'ri-add-line'"></i>
                                                <h3>Packing?</h3>
                                            </div>
                                            <div class="accordion-content px-5 pt-0 overflow-hidden" x-show="open"
                                                :style="open ? 'max-height: 500px; padding-top: 1rem;' : ''">
                                                <ul class="list-disc pl-9 text-justify">
                                                    @forelse ($product->packings as $packing)
                                                        <li>{{ $packing->name }}</li>
                                                    @empty
                                                        <li>Empty</li>
                                                    @endforelse
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 my-10 flex w-full items-center gap-3">
                                <a href="https://wa.me/6285190000236" target="_blank"
                                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-green-500 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none w-full"
                                    type="button" data-ripple-light="true">
                                    BUY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-footer />
@endsection
