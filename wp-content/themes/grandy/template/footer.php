<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Grandy
 */

?>

	</main><!-- #content -->
    
	<footer class="footer container-fluid">
        <div class="row mobile-hidden">
            <div class="col-lg-4 row">
                <ul class="social-container">
                    <li class="social-item">
                        <a href="<?php echo ot_get_option('footer_inst') ?>" class="inst mdi mdi-instagram" target="_blank"></a>
                    </li>
                    <li class="social-item">
                        <a href="<?php echo ot_get_option('footer_vk') ?>" class="vk mdi mdi-vk" target="_blank"></a>
                    </li>
                    <li class="social-item">
                        <a href="<?php echo ot_get_option('footer_fb') ?>" class="fb mdi mdi-facebook" target="_blank"></a>
                    </li>
                </ul>
                <a href="mailto:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('header-mail')) ?>" class="mail"><?php echo ot_get_option('header-mail') ?></a>
            </div>
            <div class="col-lg-4 row column justify-content-center">
                    <nav>
                        <?php 
            
                            $args = array(
                                'theme_location'  => '',
                                'menu'            => '', 
                                'container'       => '', 
                                'container_class' => '', 
                                'container_id'    => '',
                                'menu_class'      => 'header-nav', 
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s"  class="%2$s">%3$s</ul>',
                                'walker'          => '',
                            );

                            wp_nav_menu($args);
                        ?>
                    </nav>
                    <p class="politic">Заполняя любую печатную форму на&nbsp;нашем сайте, вы&nbsp;автоматически принимаете условия <a href="http://grandy.develop.kdm1.ru/?page_id=3">Политики&nbsp;Конфиденциальности</a></p>
                <div class="col-lg-12 text-center">
                    <p class="copyright">&copy;&nbsp;<script>
                        document.write(new Date().getFullYear());
                    </script></p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-2">
                <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('header-telephone')) ?>" class="tel"><?php echo ot_get_option('header-telephone'); ?></a>
                <div class="row nowrap align-items-center">
                    <div class="">
                        <a href="http://kdm1.ru" target="_blank">
                            <img src="<?php bloginfo('template_directory'); ?>/img/logo/kdm.svg" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="http://kdm1.ru" target="_blank">
                            <p class="kdm">Сайт разработан в&nbsp;агентстве</p>
                            <p class="kdm-gold">&laquo;Клиника доброго маркетолога&raquo;</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--mobile footer-->
        <div class="row mobile-footer desctop-hidden">
            <div class="col-6">
                <?php 
                    $args = array(
                        'theme_location'  => '',
                        'menu'            => '', 
                        'container'       => '', 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => 'footer-nav', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s"  class="%2$s">%3$s</ul>',
                        'walker'          => '',
                    );

                    wp_nav_menu($args);
                ?>
            </div>
            <div class="col-6">
                <ul class="footer-social">
                    <li class="footer-soc-item">
                        <a href="<?php echo ot_get_option('footer_inst') ?>" class="inst mdi mdi-instagram" target="_blank"></a>
                    </li>
                    <li class="footer-soc-item">
                        <a href="<?php echo ot_get_option('footer_vk') ?>" class="fb mdi mdi-vk" target="_blank"></a>
                    </li>
                    <li class="footer-soc-item">
                        <a href="<?php echo ot_get_option('footer_fb') ?>" class="fb mdi mdi-facebook" target="_blank"></a>
                    </li>
                </ul>
            </div>
            <div class="col-6">
                <a href="tel:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('header-telephone')) ?>" class="tel"><?php echo ot_get_option('header-telephone'); ?></a>
                <a href="mailto:<?php echo str_replace(array(" ", "(", ")", "-"), "", ot_get_option('header-mail')) ?>" class="mail"><?php echo  ot_get_option('header-mail'); ?></a>
            </div>
            <div class="col-6">
                <a href="http://kdm1.ru" target="_blank" class="kdm">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo/kdm.svg" alt="">
                    <p>Сайт разработан в агентстве<br><span>&laquo;Клиника доброго маркетолога&raquo;</span></p>
                </a>
            </div>
            <div class="col-12 row justify-content-center">
                <p class="politic col-12 ">Заполняя любую печатную форму на&nbsp;нашем сайте, вы&nbsp;автоматически принимаете условия <span><a href="http://grandy.develop.kdm1.ru/?page_id=3">Политики&nbsp;Конфиденциальности</a></span></p>
                <p class="copyright text-center col-12">&copy;&nbsp;<script>
                    document.write(new Date().getFullYear());
                </script></p>
            </div>
        </div>
    </footer>
<!--modal обратный звонок-->
        <div class="row container-fluid modal-call justify-content-center">
            <div class="col-5">
                <form method="post" id="modal-form" class="modal-form">
                    <label for="modal-tel" class="label">Телефон</label>
                    <input id="modal-tel" required name="modal-tel" placeholder="+7 999 000 00 00"  pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}">
                    <span class="valid">Пожалуйста, введите в формате 89990000000</span>
                    <button type="submit" class="btn call-btn">Отправить</button>
                </form>
                <?php if (ot_get_option('header_form_time')) { ?>
                    <p class="callback"><?php echo ot_get_option('header_form_time') ?></p>
                <?php } ?>
                <div class="close-modal"></div>
            </div>
        </div>
        <!--end modal-->
        <!--modal thanks-->
        <div class="row modal-thanks container-fluid  justify-content-center">
            <div class="col-5">
                <?php if(ot_get_option('header_form_thanks')) { ?>
                    <h3 class="modal-title"><?php echo ot_get_option('header_form_thanks') ?></h3>
                <?php } ?>
                <?php if (ot_get_option('header_logo_desc')) { ?>
                    <img src="<?php echo ot_get_option('header_logo_desc') ?>" alt="">
                <?php } ?>
                <?php if (ot_get_option('header_form_time')) { ?>
                    <p class="callback"><?php echo ot_get_option('header_form_time') ?></p>
                <?php } ?>
                <div class="close-modal"></div>
            </div>
        </div>
        <!--end modal-->
        <div class="modal-overlay"></div>
        <!--end mob footer-->
</div><!-- #page -->
<?php if(is_page('Контакты')) { ?>
<?php  echo    '<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHBQu9kyLtVcH0M0-HGM_6Q2WUjM4WN9Q&callback=initMap">
    </script>' ?>
<?php } ?>

<?php wp_footer(); ?>
</body>

</html>
