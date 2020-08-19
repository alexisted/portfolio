<?php
/**
 * @var $data
 */
?>
<div class="swiper-container main-slider loading">
    <div class="swiper-wrapper">
        <?php foreach ($data as $item): ?>
            <div class="swiper-slide">
                <figure class="slide-bgimg"
                        style="background-image:url(https://drive.google.com/uc?export=view&id=0B_koKn2rKOkLVUpEems2ZXpHYVk)">
                    <img src="<?=$item['src']?>"
                         class="entity-img"/>
                </figure>
                <div class="content">
                    <p class="title"><?=$item['name']?></p>
                    <span class="caption"><?=$item['description']?></span>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
</div>
