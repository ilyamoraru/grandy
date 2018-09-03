<?php
/*
Template name: Услуги
*/
get_header();
?>

<?php 
    $form_services_ind = get_post_meta($post->ID, 'services_page_form1', true);
    $form_services_corp  = get_post_meta($post->ID, 'services_page_form2' ,true);
    $form_services_rem = get_post_meta($post->ID, 'services_page_form3', true);
    $items = get_post_meta($post->ID, 'tissue_list', true);
?>
                  
    <form method="get" id='services-form-big'>
        <section class="services-show services row">
            <div class="col-lg-5 mob-order">
                <div class="service-item service-item-open ind-left">
                    <h2 class="title"><?php echo ot_get_option('services_right1_title') ?></h2>
                    <div class="bottom">
                       <div class="ind-left-form">
                            <select class="ind-left-select fix1" name="ind-left-select">
                                <?php foreach($form_services_ind as $item) :
                                    $form_value = $item['services_page_form2_item_value'];
                                    $form_name = $item['services_page_form2_item']; ?>
                                        <option value="<?php echo $form_value ?>"><?php echo $form_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <p class="left-desc"><?php echo ot_get_option('services_right1_desc') ?></p>
                        <p class="small"><?php echo ot_get_option('services_right1_grey') ?></p>
                    </div>
                </div>
                <div class="service-item corp-left">
                    <h2 class="title"><?php echo ot_get_option('services_right2_title') ?></h2>
                    <div class="bottom">
                        <div class="corp-left-form">
                            <select class="corp-left-select fix2"  name="corp-left-select">
                                <?php foreach($form_services_corp as $item) :
                                    $form_value = $item['services_page_form1_item_value'];
                                    $form_name = $item['services_page_form1_item']; ?>
                                        <option value="<?php echo $form_value ?>"><?php echo $form_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <p class="left-desc"><?php echo ot_get_option('services_right21_desc') ?></p>
                        <p class="left-desc"><?php echo ot_get_option('services_right22_desc') ?></p>
                        <p class="left-desc"><?php echo ot_get_option('services_right23_desc') ?></p>
                    </div>
                </div>
                
                <div class="service-item rem-left">
                    <h2 class="title"><?php echo ot_get_option('services_right3_title') ?></h2>
                    <div class="bottom">
                        <div class="rem-left-form">
                            <select class="rem-left-select" name="rem-left-select">
                                <?php foreach ($form_services_rem as $item):
                                    $form_value = $item['services_page_form3_item_value'];
                                    $form_name = $item['services_page_form3_item']; ?>
                                        <option value="<?php echo $form_value?>"><?php echo $form_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <p class="left-desc"><?php echo ot_get_option('services_right3_desc') ?></p>
                        <p class="small"><?php echo ot_get_option('services_right31_grey') ?></p>
                        <p class="small"><?php echo ot_get_option('services_right32_grey') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6">
                <div class="ind-right right-block-showed right-block">
                <?php 
                    $args = array(
                        'orderby'      => 'name',
                        'child_of'     => '16',
                        'order'        => 'ASC',
                        'orderby'      => 'ID',
                        'hide_empty'   => 1,
                        'exclude'      => '',
                        'include'      => '',
                        'taxonomy'     => 'category',
                    );

                    $categories = get_categories( $args );
                    ?>

                    <?php if(have_posts()) while(have_posts()) : the_post(); ?>
                    <?php 
                    $i = 1;
                    $j = 0;
                    foreach($categories as $cat) :
                    
                    $arg_posts = array(
                        'order'        => 'ASC', // от меньшего к большему
                        'post_type' => 'post', // тип записи "посты"
                        'post_status' => 'publish', // опубликованные посты
                        'cat' => $cat->cat_ID, // получаем id рубрик
                    );
                    $query = new WP_Query($arg_posts); ?>
                            <div class="ind-right-cont <?php echo $j == 0 ? 'ind-right-cont-showed' : ''; $j++; ?> ind-right<?=$i; $i++;?>">
                                <p class="subtitle">Верхняя одежда</p>
                                <ul class="ind-right-list">
                                    <?php query_posts('cat=');
                                    while($query -> have_posts()) : $query->the_post(); ?>
                                    <li class="ind-right-item">
                                        <?php the_title(); ?>
                                    </li>
                                
                                  <?php endwhile;
                                    wp_reset_query();
                                  ?>
                                </ul>
                        </div>
                    <?php endforeach; ?>
                    <?php endwhile; ?>  
                  
                    <div class="ind-right-form-cont">
                        <div class="ind-right-form">
                            <div class="wrap">
                                <div>
                                    <label for="right-brend" class="label">Бренд ткани</label>
                                    <div class="select-wrap">
                                        <select id="right-brend" name='right-brend'>
                                            <?php 
                                                foreach($items as $item) :
                                                $title = $item['tissue_title'];
                                            ?>
                                            <option value="<?php echo $title; ?>"><?php echo $title ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label for="rignt-item" class="label">Хочу заказать</label>
                                    <div class="select-wrap">
                                        <?php $all_query = new WP_Query(array('post_type' => 'post','post_status'=>'publish', 'posts_per_page'=>-1, 'cat'=>-7)) ?>
                                        
                                        <select id="right-item" id="rignt-item">
                                            <?php while ($all_query-> have_posts()) : $all_query->the_post();?>
                                                    <option value="<?php the_title() ?>"><?php the_title() ?></option> 
                                             <?php endwhile ?>
                                        </select>
                                       <?php wp_reset_postdata(); ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="wrap">
                                <div>
                                    <p class="label">Фотография</p>
                                    <label for="ind_file" class="down-input">Прикрепить файл</label>
                                </div>
                                <div class="fixfix" style="display: flex; flex-direction: column; margin-left: 45px;">
                                    <label for="color" class="label">Цвет</label>
                                    <div style="display: flex">
                                        <div  class="custom-color" style="cursor: pointer;transition: all 0.2s linear; margin: 0 5px; width: 45px;height: 45px; border-radius: 4px; border: 1px solid #020060; background-color: black; position: relative"><span style="position: absolute; bottom: -18px; font-size: 10px;left: 0;font-family: BNB, Arial, sans-serif">Черный</span></div>
                                        <div  class="custom-color" style="cursor: pointer;transition: all 0.2s linear; margin: 0 5px; width: 45px;height: 45px; border-radius: 4px; border: 1px solid #020060; background-color: #253c72;position: relative;"><span style="position: absolute; bottom: -18px; font-size: 10px;left: 0;font-family: BNB, Arial, sans-serif">Синий</span></div>
                                        <div  class="custom-color" style="cursor: pointer;transition: all 0.2s linear; margin: 0 5px; width: 45px;height: 45px; border-radius: 4px; border: 1px solid #020060; background-color: #020060;position: relative"><span style="position: absolute; bottom: -18px; font-size: 10px;left: 0;font-family: BNB, Arial, sans-serif">Фиолетовый</span></div>
                                        <div  class="custom-color" style="cursor: pointer; transition: all 0.2s linear; margin: 0 5px; width: 45px;height: 45px; border-radius: 4px; border: 1px solid #020060; background-color: #d4b32e;position: relative"><span style="position: absolute; bottom: -18px; font-size: 10px;left: 0;font-family: BNB, Arial, sans-serif">Желтый</span></div>
                                        <div  class="custom-color" style="cursor: pointer; transition: all 0.2s linear; margin: 0 5px; width: 45px; height: 45px; border-radius: 4px; border: 1px solid #020060; background: #fcfaf3; position: relative"><span style="position: absolute; bottom: -33px; font-size: 10px;left: 0;font-family: BNB, Arial, sans-serif">Выбрать<br>свой</span></div>
                                    </div>
                                    
                                </div>
                            </div>
                            <input type="file" id="ind_file" name="ind-file" style="opacity: 0; display: none">
                            <label for="ind-tel" class="label fix-label" name="ind-tel">Телефон</label>
                            <input type="tel" class="input-tel"  pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" id="ind-tel" placeholder="+7 999 000 00 00">
                            <textarea class="textarea" placeholder="Комментарий" name="ind-textarea" id="ind-textarea"></textarea>
                            <button type="submit" class="btn ind-right-btn">Отправить</button>
                        </div>
                    </div>
                </div>
                <div class="corp-right right-block">
                    <div class="corp-right-form">
                        <p class="label">Фотография</p>
                        <label for="down-input-corp" class="down-input">Прикрепить файл</label>
                        <input type="file" id="down-input-corp">
                        <label for="number" class="label">Количество</label>
                        <div class="wrap">
                            <button type="button" class="minus">-</button>
                            <input type="text" class="number-input" id="number" name="number-input" value="1">
                            <button type="button" class="plus">+</button>
                        </div>
                        <label for="corp-tel" class="label">Телефон</label>
                        <input id="corp-tel"  pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" type="tel" placeholder="+7 999 000 00 00">
                        <textarea class="textarea" placeholder="Комментарий"></textarea>
                        <button type="submit" class="btn ind-right-btn">Отправить</button>
                    </div>
                </div>
                <div class="rem-right right-block">
                    <div class="overflow-cont">
                        <?php 
                        $args1 = array(
                            'orderby'      => 'name',
                            'child_of'     => '7',
                            'order'        => 'DESC',
                            'orderby'      => 'ID',
                            'hide_empty'   => 1,
                            'exclude'      => '',
                            'include'      => '',
                            'taxonomy'     => 'category',
                        );
            
                        $categories1 = get_categories($args1);
                       
                        ?>
                        
                        <?php if(have_posts()) while(have_posts()) : the_post(); ?>
                        <?php 
                        $i = 1;
                        $j = 1;
                        foreach($categories1 as $cat1) :
                        
                        $arg_posts = array(
                            'order'        => 'DESC', // от меньшего к большему
                        
                            'post_type' => 'post', // тип записи "посты"
                            'post_status' => 'publish', // опубликованные посты
                            'cat' => $cat1->cat_ID, // получаем id рубрик
                        );
                        
                        $query1 = new WP_Query($arg_posts); ?>
                        
                        <div class="element" id="<?=$i; $i++ ?>">
                            <div class="element-title_cont">
                                <p class="element-title"><?php echo $cat1-> name; ?></p>
                            </div>
                            <ul class="element-list">
                                <?php query_posts('cat=');
                                while($query1 -> have_posts()): $query1->the_post(); ?>
                                <li class="element-item" data-item="<?php echo  get_post_meta(get_the_ID(), 'services_rep_id', true) ?>">
                                    <?php the_title(); ?>
                                </li>
                                <?php endwhile;
                                wp_reset_query();?>
                                
                            </ul>
                        </div>
                        <?php endforeach; ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="download-cont">
                        <p class="page-content">Выбраные услуги</p>
                        <button type="button" class="showmore-btn btn">Подробнее</button>
                        <button type="button" class="pdf-btn btn">Скачать PDF</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="services-select row">
            <div class="col-lg-1"></div>
            <div class="col-lg-5">
                <p class="page-content">Выбранные услуги</p>
                <?php 
                $i = 1;
                foreach ($form_services_rem as $item):
                $form_name = $item['services_page_form3_item']; ?>
                    <div class="option option_<?=$i; $i++ ?>">
                        <p class="option-title"><span class="counter">0</span><span><?php echo $form_name; ?></span></p>
                        <ul class="option-list">

                        </ul>
                    </div>
                <?php endforeach; ?>
                
                        
            </div>
            <div class="col-lg-6">
                <div class="select-form">
                    <label for="select-tel" class="label">Телефон</label>
                    <input type="tel" id="select-tel" placeholder="+7 999 000 00 00" pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}">
                    <textarea class="textarea" placeholder="Комментарий"></textarea>
                    <button type="submit" class="btn select-btn">Отправить</button>
                </div>
            </div>
        </section>
        <textarea name='all-services' id='all-services' style="display: none;"></textarea>
    </form>

<?php
get_footer();
