<div class="card-top absolute top-0 right-0 end-0 z-50">
    <div class="relative">
        <h1 class="absolute text-white text-xl lg:text-3xl right-[50%] md:top-[35%] top-[25%]" id='health'><?= $loginData['health'] ?? 0 ?></h1>
        <img src="assets/img/button/badge.png" alt="">
        <img src="assets/img/icon/love.png" alt="" class="love w-[20%] h-auto absolute right-[10%] top-[25%] lg:right-[15%] lg:top-[25%]">
    </div>
    <div class="relative">
        <h1 class="absolute text-white text-xl lg:text-3xl right-[50%] md:top-[35%] top-[25%]" ><?= $loginData['star'] ?? 0 ?></h1>
        <img src="assets/img/button/badge.png" alt="">
        <img src="assets/img/icon/star.png" alt="" class="star w-[20%] h-auto absolute right-[10%] top-[25%] lg:right-[15%] lg:top-[25%]">
    </div>
</div>