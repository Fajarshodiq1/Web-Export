<section class="h-[90vh] md:h-[60vh] relative flex items-center justify-center" id="stats-section">
    <div class="absolute w-full h-full top-0 left-0 bg-cover bg-center bg-no-repeat bg-fixed"
        style="background-image:url({{ asset('assets/turmeric.jpg') }})">
    </div>
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative flex flex-row items-center max-w-[1280px] mx-auto text-center justify-between z-10">
        <div class="text-white w-full">
            <div class="container px-5 mx-auto flex flex-col md:flex-row items-center justify-center">
                <header class="flex flex-col text-center w-1/2 mb-20 items-center justify-center mt-14">
                    <h1 class="text-3xl lg:text-6xl font-extrabold drop-shadow-2xl">
                        Our Global <br>
                        Achievements in <br> Numbers
                    </h1>
                </header>
                <main class="flex flex-col md:flex-row text-center gap-4 md:w-1/2">
                    <article class="p-4 w-full flex flex-col items-center justify-center">
                        <figure class="px-4 py-6 rounded-lg">
                            <i class="ri-hexagon-fill text-2xl text-green-600"></i>
                            <figcaption>
                                <h2 class="font-bold text-4xl lg:text-5xl text-white my-3" id="counter1">0
                                </h2>
                                <p class="leading-relaxed text-sm md:text-lg">
                                    Global Buyers Have Trusted Almea for Their Premium Spice Needs
                                </p>
                            </figcaption>
                        </figure>
                    </article>
                    <article class="p-4 w-full flex flex-col items-center justify-center">
                        <figure class="px-4 py-6 rounded-lg">
                            <i class="ri-hexagon-fill text-2xl text-yellow-600"></i>
                            <figcaption>
                                <h2 class="font-bold text-4xl lg:text-5xl text-white my-3" id="counter2">0
                                </h2>
                                <p class="leading-relaxed text-sm md:text-lg">
                                    Countries Reached with a Strong Commitment to Quality and Reliability.
                                </p>
                            </figcaption>
                        </figure>
                    </article>
                </main>
            </div>
        </div>
    </div>
</section>
<script>
    function animateCounter(id, target) {
        let count = 0;
        const element = document.getElementById(id);
        const duration = 2000;
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
                observer.disconnect();
            }
        });
    }

    const observer = new IntersectionObserver(startAnimation, {
        root: null,
        threshold: 0.5
    });

    observer.observe(document.getElementById("stats-section"));
</script>
