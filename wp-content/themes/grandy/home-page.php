<?php
/*
Template name: Главная страница
*/
get_header();
?>


<section class="row main-block1">
            <div class="col-1"></div>
            <div class="col-lg-4 col-sm-5 col-12 padding-left">
                <?php if(ot_get_option('main_block1_title1')) { ?>
                    <h2 class="big-title font-130"><?php echo ot_get_option('main_block1_title1')?></h2>
                <?php }?>
                <?php if(ot_get_option('main_block1_title2_1') && ot_get_option('main_block1_title2_2')) { ?>
                    <h1 class="middle-title"><span class="middle-span"><?php echo ot_get_option('main_block1_title2_1') ?></span><br><?php echo ot_get_option('main_block1_title2_2') ?></h1>
                <?php } ?>
                <?php if(ot_get_option('main_block1_title3_1') && ot_get_option('main_block1_title3_2')) { ?>
                <h3 class="middle-title"><span class="middle-span"><?php echo ot_get_option('main_block1_title3_1') ?></span><br><?php echo ot_get_option('main_block1_title3_2') ?></h3>
                <?php } ?>
                <ul class="social-container col-lg-6 col-10">
                    <li class="social-item">
                        <a href="<?php echo ot_get_option('footer_inst') ?>" target="_blank" class="inst mdi mdi-instagram"></a>
                    </li>
                    <li class="social-item">
                        <a href="<?php echo ot_get_option('footer_vk') ?>" class="vk mdi mdi-vk"></a>
                    </li>
                    <li class="social-item">
                        <a href="<?php echo ot_get_option('footer_fb') ?>" class="fb mdi mdi-facebook"></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-7 col-sm-7 video-cont">
                <video autoplay playsinline loop muted class="main-video">
                    <source src="wp-content/themes/grandy/video/Grandi_main.mp4" type="video/mp4">
                    <source src="wp-content/themes/grandy/video/Grandi_main.webm" type="video/webm">
                </video>
            </div>
        </section>
        <section class="row main-block2 justify-content-center">
            <div class="col-lg-10 col-sm-11 col-12">
                <!--slider in mobile-->
                <ul class="block2-list">
                    <li class="block2-item">
                        <img src="wp-content/themes/grandy/img/logo/1.svg" alt="">
                        <p class="block2-desc">Сорочки</p>
                    </li>
                    <li class="block2-item">
                        <img src="wp-content/themes/grandy/img/logo/2.svg" alt="">
                        <p class="block2-desc">Пальто</p>
                    </li>
                    <li class="block2-item">
                        <img src="wp-content/themes/grandy/img/logo/3.svg" alt="">
                        <p class="block2-desc">Деловые<br>костюмы</p>
                    </li>
                    <li class="block2-item">
                        <img src="wp-content/themes/grandy/img/logo/4.svg" alt="">
                        <p class="block2-desc">Форменная<br>одежда</p>
                    </li>
                    <li class="block2-item">
                        <img src="wp-content/themes/grandy/img/logo/5.svg" alt="">
                        <p class="block2-desc">Смокинги</p>
                    </li>
                    <li class="block2-item">
                        <img src="wp-content/themes/grandy/img/logo/6.svg" alt="">
                        <p class="block2-desc">Фраки</p>
                    </li>
                </ul>
                <!--end slider-->
            </div>
        </section>
        <section class="row main-block3">
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-sm-7">
                <?php if(ot_get_option('main_block2_title3')) { ?>
                    <h2 class="block3-big font-130"><?php echo ot_get_option('main_block2_title3') ?></h2>
                <?php } ?>
                <?php if(ot_get_option('main_block2_desc')) { ?>
                    <p class="block3-desc"><?php echo ot_get_option('main_block2_desc') ?></p>
                <?php } ?>
                <?php if(ot_get_option('main_block2_name') && ot_get_option('main_block2_work')) { ?>
                    <p class="block3-small"><?php echo ot_get_option('main_block2_name') ?><br><span><?php echo ot_get_option('main_block2_work') ?></span></p>
                <?php } ?>
            </div>
            <?php  if(ot_get_option('home_page_2_upload')) { ?>
                <div class="col-lg-5 col-sm-5">
                    <img src="<?php echo ot_get_option('home_page_2_upload') ?>" alt="">
                </div>
            <?php } ?>
        </section>
        <section class="row main-block4">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-sm-6 col-12 bg-1" style="background-image: url(<?php echo ot_get_option('main_block2_bg')['background-image'] ?>)">
                <?php if(ot_get_option('main_block2_title_gold')) { ?>
                    <h2 class="block4-big_gold"><?php echo ot_get_option('main_block2_title_gold') ?></h2>
                <?php } ?>
                <?php if(ot_get_option('main_block2_title_1')) { ?>
                    <h3 class="block4-middle"><?php echo ot_get_option('main_block2_title_1') ?></h3>
                <?php } ?>
                <?php if(ot_get_option('main_block2_title_2')) { ?>
                    <h3 class="block4-middle"><?php echo ot_get_option('main_block2_title_2') ?></h3>
                <?php } ?>
                <?php if(ot_get_option('main_block2_title_3')) { ?>
                    <h4 class="block4-middle_gold"><?php echo ot_get_option('main_block2_title_3') ?></h4>
                <?php } ?>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-sm-6 col-12">
                <?php if(ot_get_option('main_block2_desc_1')) { ?>
                    <p class="page-content_big"><?php echo ot_get_option('main_block2_desc_1') ?></p>
                <?php } ?>
                <?php if(ot_get_option('main_block2_desc_2')) { ?>
                    <p class="page-content margin-90"><?php echo ot_get_option('main_block2_desc_2') ?></p>
                <?php } ?>
                <?php if(ot_get_option('main_block2_desc_3')) { ?>
                    <p class="page-content"><?php echo ot_get_option('main_block2_desc_3') ?></p>
                <?php } ?>
            </div>
        </section>
        <?php
            $slider_main = get_post_meta($post->ID, 'main_slider_list', true);
        ?>
        <?php if($slider_main && (get_post_meta($post->ID, 'main_slider_show', true) != 'off')) : ?>
        
        <section class="row main-block5">
            <div class="col-lg-1"></div>
            <div class="col-lg-11 col-12 main-slider">
                <?php
                    $i = 2;
                    foreach($slider_main as $slider) : 
                    $slide_sub = $slider['main_slider_head_sub'] ? $slider['main_slider_head_sub'] : '';
                    $slide_cont1 = $slider['main_slider_cont1'] ? $slider['main_slider_cont1'] : '';
                    $slide_cont2 = $slider['main_slider_cont2'] ? $slider['main_slider_cont2'] : '';
                    $slide_cont3 = $slider['main_slider_cont3'] ? $slider['main_slider_cont3'] : '';
                    $slide_gold = $slider['main_slider_cont_gold'] ? $slider['main_slider_cont_gold'] : '';
                    $slide_big = $slider['main_slider_head_big'] ? $slider['main_slider_head_big'] : '';
                    $slide_big_gold = $slider['main_slider_head_gold'] ? $slider['main_slider_head_gold'] : '';
                    $slide_img = $slider['main_slider_upload'] ? $slider['main_slider_upload'] : '';  
                ?>
                    <div class="slide-1 main-slide">
                        <div class="main-slide_left">
                            <p class="page-content_big"><?php echo $slide_sub ?></p>
                            <p class="page-content"><?php echo $slide_cont1 ?></p>
                            <p class="page-content"><?php echo $slide_cont2 ?></p>
                            <p class="page-content"><?php echo $slide_cont3 ?></p>
                            <p class="page-content_gold"><?php echo $slide_gold ?></p>
                        </div>
                        <div class="main-slide_right bg<?=$i; $i++;?> m-order-0" style="background-image: url('<?php echo $slide_img ?>'); background-repeat: no-repeat;">
                            <h3 class="main-slider-title"><?php echo $slide_big ?></h3>
                            <h4 class="main-slider-subtitle"><?php echo $slide_big_gold ?></h4>
                        </div>
                    </div>
                <?php    
                    endforeach;
                ?>
            </div>
        </section>
        <?php endif; ?>
        <section class="row main-block6">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-sm-5 col-12" >
                <?php if(ot_get_option('main_block5_title_gold')) { ?>
                    <h3 class="title-gold"><?php echo ot_get_option('main_block5_title_gold') ?></h3>
                <?php } ?>
                <?php if(ot_get_option('main_block5_title_1')) { ?>
                    <h4 class="title"><?php echo ot_get_option('main_block5_title_1') ?></h4>
                <?php } ?>
                <?php if(ot_get_option('main_block5_title_2') && ot_get_option('main_block5_title_3') && ot_get_option('main_block5_title_4')) { ?>
                <h4 class="title-big"><?php echo ot_get_option('main_block5_title_2') ?><span><?php echo ot_get_option('main_block5_title_3') ?></span></h4>
                <h5 class="title-gold_small"><?php echo ot_get_option('main_block5_title_4') ?></h5>
                <?php } ?>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 col-sm-7 col-12" style="background-image: url('<?php echo ot_get_option('main_block5_bg')['background-image'] ?>')">
                <?php if(ot_get_option('main_block5_desc')) { ?>
                    <p class="page-content_big"><?php echo ot_get_option('main_block5_desc') ?></p>
                <?php } ?>
                
                <?php 
                    $form_main  = get_post_meta($post->ID, 'main_form_list' ,true);
                ?>
                <form method="post" id="main-form" class="main-block6-form">
                        <label for="main-select" class="label">Хочу заказать</label>
                        <div class="select-wrap">
                            <select id="main-select" name="main-select">
                                <?php 
                                    foreach($form_main as $form) :
                                $form_value = $form['main_form_name'];
                                $form_name = $form['main_form_desc'];
                                 ?>
                                <option value="<?php echo $form_value ?>"><?php echo $form_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    <label for="main-tel" class="label">Телефон</label>
                    <input id="main-tel" name="main-tel" type="tel" class="form-input" placeholder="+7 999 000 00 00" autocomplete="tel" method="post" pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" required>
                    <span class="valid">Пожалуйста, введите в формате 89990000000</span>
                    <button type="submit" class="btn main-submit">Отправить</button>
                </form>
            </div>
        </section>


<?php
get_footer();
