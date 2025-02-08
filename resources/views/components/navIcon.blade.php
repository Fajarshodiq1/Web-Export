<div id="container-floating" class="fixed bottom-8 right-2 z-40">
    <div class="menu-content" id="menuContent">
        <div class="nds">
            <a class="ilink" target="_blank" href="https://www.instagram.com/almeakausaeterna?igsh=cm51aWgxOTN0NWl0"><i
                    class="ri-instagram-line text-orange-600 text-2xl"></i></a>
        </div>
        <div class="nds">
            <a class="ilink" target="_blank" href=""><i
                    class="ri-linkedin-box-fill text-blue-600 text-2xl"></i></a>
        </div>
        <div class="nds">
            <a class="ilink" target="_blank" href="https://www.facebook.com/share/VuQmnJV3m4wr2rTN/?mibextid=LQQJ4d"><i
                    class="ri-facebook-circle-fill text-blue-600 text-2xl"></i></a>
        </div>
        <div class="nds">
            <a class="ilink" target="_blank"
                href="https://www.tiktok.com/@almeakausaeterna?is_from_webapp=1&sender_device=pc"><i
                    class="ri-tiktok-fill text-black text-2xl"></i></a>
        </div>
        <div class="nds">
            <a class="ilink" href="https://wa.me/6285190000236" target="_blank""><i
                    class="ri-whatsapp-line text-green-600 text-2xl"></i></a>
        </div>
    </div>

    <div id="floating-button"
        class="w-14 h-14 rounded-full bg-green-500 flex justify-center items-center cursor-pointer transition-colors duration-300">
        <i class="ri-add-line text-white text-2xl"></i>
        <i class="ri-subtract-line text-white text-2xl hidden"></i>
    </div>
</div>
<script>
    const floatingButton = document.getElementById('floating-button');
    const menuContent = document.getElementById('menuContent');

    floatingButton.addEventListener('click', () => {
        menuContent.classList.toggle('show');
        floatingButton.classList.toggle('open');
    });
</script>
