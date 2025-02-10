<section class="bg-gray-50 overflow-x-hidden">
    <div class="text-gray-600 w-full md:max-w-[1280px] mx-auto md:px-5 lg:px-[52px] pb-12">
        <div class="px-4 md:mx-auto flex md:px-5 md:py-16 pb-10 md:pb-5 md:flex-row flex-col items-center w-full">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start text-center md:text-left mb-16 md:mb-0">
                <header class="text-center my-10">
                    <h1 class="text-2xl md:text-4xl font-extrabold tracking-tight text-gray-900">
                        <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">
                            WHY ALMEA KAUSA ETERNA?
                        </span>
                    </h1>
                </header>
                <p class="mb-8 leading-relaxed text-justify md:text-left text-sm md:text-base text-gray-950">
                    CV. ALMEA KAUSA ETERNA, we understand that not every region in Indonesia produces the same quality
                    of spices. Each spice thrives under specific conditions, and we have the expertise to identify the
                    regions that produce the finest spices for different needs. With a deep knowledge of Indonesia’s
                    spice-producing regions and their seasonal patterns, we ensure you receive high-quality products at
                    the best possible value for your business.
                </p>
                <nav class="flex flex-col md:flex-row w-full md:justify-start justify-center items-end gap-5">
                    <a href="{{ route('about') }}"
                        class="inline-flex items-center justify-center text-white bg-green-600 border-0 py-2 px-6 focus:outline-none hover:bg-green-700 rounded-full md:text-lg w-full">
                        About us
                    </a>
                    <a href="{{ route('products') }}"
                        class="inline-flex items-center justify-center bg-white border-2 border-green-600 text-black py-2 px-6 focus:outline-none hover:bg-green-600 hover:text-white rounded-full md:text-lg w-full">
                        Product
                    </a>
                </nav>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-full">
                <div x-data="{
                    activeIndex: 0,
                    totalSlides: {{ count($companies) }},
                    next() {
                        this.activeIndex = (this.activeIndex + 1) % this.totalSlides;
                    },
                    prev() {
                        this.activeIndex = (this.activeIndex - 1 + this.totalSlides) % this.totalSlides;
                    },
                    autoSlide() {
                        setInterval(() => { this.next(); }, 6000);
                    }
                }" x-init="autoSlide()" class="relative">
                    <figure class="relative overflow-hidden w-full min-h-96 bg-white rounded-lg">
                        <div class="absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700"
                            :style="`transform: translateX(-${activeIndex * 100}%)`">
                            @forelse ($companies as $itemCompany)
                                <div class="w-full flex-shrink-0">
                                    <img src="{{ Storage::url($itemCompany->thumbnail) }}" alt="Slide"
                                        class="w-full h-full object-cover rounded-lg">
                                </div>
                            @empty
                                <p>empty</p>
                            @endforelse
                        </div>
                    </figure>
                    <div class="flex justify-center absolute bottom-3 start-0 end-0 space-x-2">
                        <template x-for="(dot, index) in totalSlides" :key="index">
                            <button @click="activeIndex = index"
                                class="size-3 border border-gray-400 rounded-full cursor-pointer"
                                :class="activeIndex === index ? 'bg-green-700 border-green-700' : ''">
                            </button>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
