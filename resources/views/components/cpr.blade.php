 <section class="w-full max-w-[1280px] mx-auto px-5 lg:px-[52px] h-auto mb-20">
     <div class="text-center my-10">
         <h1 class="text-xl md:text-4xl font-extrabold tracking-tight text-gray-900 text-center title">
             <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">WHY
                 US?</span>
         </h1>
     </div>
     <div class="w-full mx-auto md:px-5 z-10">
         <div class="border rounded-3xl p-[1px] shadow-lg animate-border">
             <div
                 class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 items-stretch gap-6 rounded-3xl p-8 lg:p-[32px_52px] bg-white">
                 <!-- Heading -->
                 <div class="flex flex-col gap-3 text-center items-center justify-center">
                     <h1 class="text-xl md:text-3xl font-extrabold tracking-tight text-gray-900 title flex items-center">
                         <span
                             class="text-transparent bg-clip-text bg-gradient-to-r from-green-500 via-green-600 to-gray-700">CPR
                             <br>
                             "Your curt, precise, and reliable partner!"</span>
                     </h1>
                 </div>
                 <!-- Card 1 -->
                 <div
                     class="flex flex-1 flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] text-center animate-border">
                     <div class="h-full flex flex-col justify-center items-center gap-6">
                         <img src="https://image3.jdomni.in/banner/13062021/16/7E/7E/5A9920439E52EF309F27B43EEB_1623568010437.png?output-format=webp"
                             class="w-12 sm:w-14 lg:w-[64px]" alt="icon">
                         <div class="flex flex-col gap-3">
                             <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">CURT</h3>
                             <p class="font-medium text-sm text-gray-500 sm:text-base">Ability to offer the curtest
                                 preparation for your
                                 product.</p>
                         </div>
                     </div>
                 </div>
                 <!-- Card 2 -->
                 <div
                     class="flex flex-1 flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] text-center animate-border">
                     <div class="h-full flex flex-col justify-center items-center gap-6">
                         <img src="https://image3.jdomni.in/banner/13062021/EB/99/EE/8B46027500E987A5142ECC1CE1_1623567959360.png?output-format=webp"
                             class="w-12 sm:w-14 lg:w-[64px]" alt="icon">
                         <div class="flex flex-col gap-3">
                             <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">PRECISE
                             </h3>
                             <p class="font-medium text-sm text-gray-500 sm:text-base">The precise place to get to know
                                 about the entire
                                 superior quality supply of spices from Indonesia.</p>
                         </div>
                     </div>
                 </div>
                 <!-- Card 3 -->
                 <div
                     class="flex flex-1 flex-col items-center rounded-2xl border border-[#E6E7EB] p-4 lg:p-[18px] text-center animate-border">
                     <div class="h-full flex flex-col justify-center items-center gap-6">
                         <img src="{{ asset('assets/handshake.png') }}" class="w-12 sm:w-14 lg:w-[64px]" alt="icon">
                         <div class="flex flex-col gap-3">
                             <h3 class="font-semibold text-base sm:text-lg leading-[24px] sm:leading-[27px]">RELIABLE
                             </h3>
                             <p class="font-medium text-sm text-gray-500">Almea Kausa Eterna is reliable for your
                                 business
                                 and will
                                 be your forever partner in escalating the industry with great services consistently.
                             </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <style>
     @keyframes borderGlow {
         0% {
             border-color: rgba(34, 197, 94, 0.1);
         }

         50% {
             border-color: rgba(34, 197, 94, 1);
         }

         100% {
             border-color: rgba(34, 197, 94, 0.1);
         }
     }

     .animate-border {
         border-width: 2px;
         border-style: solid;
         border-color: rgba(34, 197, 94, 0.1);
         animation: borderGlow 2s infinite;
     }
 </style>
