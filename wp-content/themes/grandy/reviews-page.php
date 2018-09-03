<?php
/*
Template name: Отзывы
*/
get_header();
?>
<?php $reviews = get_post_meta($post->ID, 'reviews_list', true);?>
 

    <section class="reviews row">
        <div class="col-lg-7 col-12">
            <!--review slider-->
            <div class="reviews-slider">
                <?php 
                    $i = 0;
                    foreach ($reviews as $review_id) : 
                        $review = get_post($review_id['reviews_list_item'], ARRAY_A); 
                        if($i % 3 == 0 || $i == 0) {
                             ?>
                            <div class="review-slide">
                                
                        <?php } 
                        $i++;
                        ?>
                            <div class="review-cont row">
                                <div class="col-lg-2">
                                    <div>
                                        <p class="author"><?php echo get_post_meta($review['ID'],'reviews_name', true) ?></p>
                                        <p class="position"><?php echo get_post_meta($review['ID'],'reviews_work', true) ?></p>
                                    </div>
                                    <p class="date"><?php echo get_post_meta($review['ID'],'reviews_date', true) ?></p>
                                </div>
                                <div class="col-lg-10">
                                    <p class="page-content"><?php echo $review['post_content'] ?></p>
                                </div>
                            </div>
                        <?php
                            if ($i % 3 == 0 || $i == 0) {
                                ?>
                            </div>

                        <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>
            <!--end slider-->
        </div>
        
<?php $promos = get_post_meta($post->ID, 'promo_list', true);?>
        
        <div class="col-lg-5 col-12 m-order-0">
            <!--gallery slider-->
            <div class="review-gallery">
                <?php
                foreach($promos as $promo) :
                $title1 = $promo['promo_title1'];
                $text1 = $promo['promo_text1'];
                $img1 = $promo['promo_upload1'];
                
                $title2 = $promo['promo_title2'];
                $text2 = $promo['promo_text2'];
                $img2 = $promo['promo_upload2'];
                ?>
                
                <div class="gallery-slide">
                    <?php if($title1 && $text1 && $img1) { ?>
                        <div class="gallery-item">
                            <img src="<?php echo $img1 ?>" alt="">
                            <div class="gallery-wrap">
                                <p class="name"><?php echo $title1 ?></p>
                                <p class="desc"><?php echo $text1 ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if($title2 && $text2 && $img2) { ?>
                    <div class="gallery-item hidden-only-mobile">
                        <img src="<?php echo $img2 ?>" alt="">
                        <div class="gallery-wrap">
                            <p class="name"><?php echo $title2 ?></p>
                            <p class="desc"><?php echo $text2 ?></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php endforeach; ?>
                
            </div>
            <!--end slider-->
        </div>
    </section>
<?php
get_footer();
