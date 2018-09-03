<?php
/*
Template name: Ткани
*/
get_header();
?>


    <section class="tis-block1 row" style="background-image: url('<?php echo ot_get_option('tissue_block1_bg')['background-image'] ?>')">
        <div class="col-lg-1"></div>
        <div class="col-lg-8 col-sm-12 col-9">
            <div class="block1-wrap">
                <?php if(ot_get_option('tissue_block1_title')) { ?>
                    <h2 class="page-title mobile-hidden"><?php echo ot_get_option('tissue_block1_title') ?></h2>
                <?php } ?>
                <?php if(ot_get_option('tissue_block1_title_mob')) { ?>
                    <h2 class="page-title desctop-hidden"><?php echo ot_get_option('tissue_block1_title_mob') ?></h2>
                <?php } ?>
                <?php if(ot_get_option('tissue_block1_subtitle')) { ?>
                    <h3 class="page-subtitle"><?php echo ot_get_option('tissue_block1_subtitle') ?></h3>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-3 mobile-hidden"></div>
        <div class="col-lg-3 col-sm-1"></div>
        <?php if(ot_get_option('tissue_block1_subtitle_gold')) { ?>
            <div class="col-lg-5 col-sm-7 col-12">
                <h3 class="page-title_gold"><?php echo ot_get_option('tissue_block1_subtitle_gold') ?></h3>
            </div>
        <?php } ?>
        <div class="col-lg-4 col-4"></div>
    </section>
    <section class="tis-block2 row" style="background-image: url('<?php echo ot_get_option('tissue_block2_bg')['background-image'] ?>')">
        <div class="col-lg-1"></div>
        <div class="col-lg-3 col-sm-5 col-12">
            <?php if (ot_get_option('tissue_block2_subtitle_gold')) { ?>
                <p class="page-content_underline"><?php echo ot_get_option('tissue_block2_subtitle_gold') ?></p>
            <?php } ?>
        </div>
        <div class="col-lg-8 col-sm-7 col-12"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-6 col-sm-7 col-12">
            <?php if (ot_get_option('tissue_block2_title')) { ?>
                <p class="big"><?php echo ot_get_option('tissue_block2_title') ?></p>
            <?php } ?>
            <?php if (ot_get_option('tissue_block2_subtitle')) { ?>
                <p class="middle"><?php echo ot_get_option('tissue_block2_subtitle') ?></p>
            <?php } ?>
        </div>
        <?php if(ot_get_option('tissue_block2_content')) { ?>
            <div class="col-lg-3 col-sm-5 col-8 row align-items-end">
                <p class="page-content"><?php echo ot_get_option('tissue_block2_content') ?></p>
            </div>
        <?php } ?>
        <div class="col-lg-2"></div>
    </section>
    <section class="tis-block3 row justify-content-center">
        <?php if(ot_get_option('tissue_block3_title')) { ?>
            <div class="col-lg-1"></div>
            <div class="col-lg-10 col-sm-10 col-12">
                <p class="big"><?php echo ot_get_option('tissue_block3_title') ?></p>
            </div>
            <div class="col-lg-1"></div>
        <?php } ?>
        <div class="col-lg-2 mobile-hidden"></div>
        <?php if(ot_get_option('tissue_block3_title')) { ?>
            <div class="col-lg-3 col-sm-5 col-12">
                <p class="page-content"><?php echo ot_get_option('tissue_block3_content1') ?></p>
            </div>
        <?php } ?>
        <div class="col-lg-2 mobile-hidden"></div>
        <?php if(ot_get_option('tissue_block3_title')) { ?>
        <div class="col-lg-3 col-sm-5 col-12">
            <p class="page-content"><?php echo ot_get_option('tissue_block3_content2') ?></p>
        </div>
        <?php } ?>
        <div class="col-lg-2"></div>
        <div class="col-lg-2 col-sm-5 col-6">
            <a href="http://grandy.develop.kdm1.ru/?page_id=80" class="btn">Коллекции тканей</a>
        </div>
    </section>
    <section class="tis4-block row" style="background-image: url('<?php echo ot_get_option('tissue_block4_bg')['background-image'] ?>')">
        <div class="col-lg-1"></div>
        <div class="col-lg-4 col-sm-5 col-12 hidden-only-mobile">
            <div class="tis4-wrap">
                <?php if(ot_get_option('tissue_block4_content1')) { ?>
                    <p class="page-content_big"><?php echo ot_get_option('tissue_block4_content1') ?></p>
                <?php } ?>
                <?php if(ot_get_option('tissue_block4_content2')) { ?>
                    <p class="page-content"><?php echo ot_get_option('tissue_block4_content2') ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="col-lg-7 col-sm-7 col-12">
            <?php if(ot_get_option('tissue_block4_title')) { ?>
                <p class="big"><?php echo ot_get_option('tissue_block4_title') ?></p>
            <?php } ?>
            <?php if(ot_get_option('tissue_block4_subtitle')) { ?>
                <p class="middle"><?php echo ot_get_option('tissue_block4_subtitle') ?></p>
            <?php } ?>
            <div class="tis4-wrap hidden-only-all">
                <?php if(ot_get_option('tissue_block4_subtitle')) { ?>
                    <p class="page-content_big"><?php echo ot_get_option('tissue_block4_content3') ?></p>
                <?php } ?>
                <?php if(ot_get_option('tissue_block4_subtitle')) { ?>
                    <p class="page-content"><?php echo ot_get_option('tissue_block4_content4') ?></p>
                <?php } ?>
            </div>
            <?php if(ot_get_option('tissue_block4_subtitle_gold')) { ?>
                <p class="middle-gold"><?php echo ot_get_option('tissue_block4_subtitle_gold') ?></p>
            <?php } ?>
        </div>
    </section>
    <section class="tis-block5 row" style="background-image: url('<?php echo ot_get_option('tissue_block5_bg')['background-image'] ?>')">
        <div class="col-lg-2 col-2"></div>
        <?php if(ot_get_option('tissue_block5_title1')) { ?>
            <div class="col-lg-5 col-sm-5 col-12">
                <h3 class="midlle marginl"><?php echo ot_get_option('tissue_block5_title1') ?></h3>
            </div>
        <?php } ?>
        <div class="col-lg-5 col-sm-5"></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-sm-6 col-12">
            <?php if(ot_get_option('tissue_block5_content1')) { ?>
                <p class="page-content margin"><?php echo ot_get_option('tissue_block5_content1') ?></p>
            <?php } ?>
            <?php if(ot_get_option('tissue_block5_content2')) { ?>
                <p class="page-content"><?php echo ot_get_option('tissue_block5_content2') ?></p>
            <?php } ?>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-sm-6 col-12 row align-self-center">
            <?php if(ot_get_option('tissue_block5_title2')) { ?>
                <h3 class="midlle"><?php echo ot_get_option('tissue_block5_title2') ?></h3>
            <?php } ?>
            <?php if(ot_get_option('tissue_block5_content3')) { ?>
                <p class="page-content text-center"><?php echo ot_get_option('tissue_block5_content3') ?></p>
            <?php } ?>
            <a href="http://grandy.develop.kdm1.ru/?page_id=80" class="btn">Коллекции тканей</a>
        </div>
    </section>

<?php
get_footer();
