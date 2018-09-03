<?php
/*
Template name: Страница тканей
*/
get_header();
?>

<?php $items = get_post_meta($post->ID, 'tissue_list', true);?>


<script>
    jQuery('.item-slider').slick('slickGoTo', <?php echo $_GET['collection'] ?>);
</script>
<section class="item-page white-theme row">
        <div class="dots-cont col-lg-2 col-12 m-order-2">

        </div>
        <!--slider-->
        <div class="item-slider col-lg-10 col-12 m-order-1">
            
            <?php 
                foreach($items as $item) :
                $title = $item['tissue_title'];
                $date = $item ['tissue_date'];
                $desc1 = $item ['tissue_desc1'];
                $desc2 = $item['tissue_desc2'];
                $desc3 = $item['tissue_desc3'];
                $img = $item['tissue_upload'];
            ?>
            
            <div class="row item-slide item-slide-1">
                <div class="col-lg-12 col-12 m-order-1">
                    <h2 class="item-name"><?php echo $title ?></h2>
                    <p class="page-content_big desctop-hidden"><?php echo $date ?></p>
                </div>
                <div class="col-lg-5 col-12 m-order-3">
                    <p class="page-content_big mobile-hidden"><?php echo $date ?></p>
                    <p class="page-content"><?php echo $desc1 ?></p>
                    <p class="page-content"><?php echo $desc2 ?></p>
                    <p class="page-content"><?php echo $desc3 ?></p>
                </div>
                <div class="col-lg-7 col-12 m-order-2">
                    <img src="<?php echo $img ?>" alt="">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <!--end slider-->
    </section>
<?php
get_footer();
