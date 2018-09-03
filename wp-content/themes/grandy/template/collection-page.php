<?php
/*
Template name: Коллекция тканей
*/
get_header();
?>

<?php $collection = get_post_meta($post->ID, 'collection_list', true);?>

<?php 
foreach($collection as $col) :
$first = $col['collection_upload1'];
$second = $col['collection_upload2'];
$third = $col['collection_upload3'];
$fourth = $col['collection_upload4'];
$fifth = $col['collection_upload5'];

$url1 = $col['collection_url1'];
$url2 = $col['collection_url2'];
$url3 = $col['collection_url3'];
$url4 = $col['collection_url4'];
$url5 = $col['collection_url5'];
?>
<section class="collection row">
        <div class="col-lg-4 col-12">
            <a href="http://grandy.develop.kdm1.ru/?page_id=72&collection=<?php echo $url1 ?>" class="coll-img" data-slide="4" >
                <img src="<?php echo $first ?>"  alt="">
            </a>
            <a href="http://grandy.develop.kdm1.ru/?page_id=72&collection=<?php echo $url2 ?>" class="loro" class="coll-img" data-slide="3">
                <img src="<?php echo $second ?>" alt="">
            </a>
        </div>
        <div class="col-lg-4  m-order-0">
            <a href="http://grandy.develop.kdm1.ru/?page_id=72&collection=<?php echo $url3 ?>" class="scabal" class="coll-img" data-slide="0">
                <img src="<?php echo $third ?>"  alt="">
            </a>
        </div>
        <div class="col-lg-4 col-12">
            <a href="http://grandy.develop.kdm1.ru/?page_id=72&collection=<?php echo $url4 ?>" class="holland" class="coll-img" data-slide="1">
                <img src="<?php echo $fourth ?>"  alt="">
            </a>
            <a href="http://grandy.develop.kdm1.ru/?page_id=72&collection=<?php echo $url5 ?>" class="dormeuil"  class="coll-img" data-slide="2">
                <img src="<?php echo $fifth ?>" alt="">
            </a>
        </div>
    </section>
<?php 
    endforeach;
?>
<?php
get_footer();
