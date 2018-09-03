<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Grandy
 */

get_header();
?>

	<div id="primary" class="content-area">
		<section class="row main-block1">
            <div class="col-1"></div>
            <div class="col-lg-4 col-sm-5 col-12 padding-left">
                <h2 class="big-title font-130">20 лет</h2>
                <h1 class="middle-title"><span class="middle-span">конструируем</span><br>и шьем на заказ</h1>
                <h3 class="middle-title"><span class="middle-span">исключительно</span><br>мужскую одежду</h3>
                <ul class="social-container col-lg-6 col-10">
                    <li class="social-item">
                        <a href="https://www.instagram.com/ateliergrandi/" target="_blank" class="inst mdi mdi-instagram"></a>
                    </li>
                    <li class="social-item">
                        <a href="#" class="vk mdi mdi-vk"></a>
                    </li>
                    <li class="social-item">
                        <a href="#" class="fb mdi mdi-facebook"></a>
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
                <h2 class="block3-big font-130">35 лет</h2>
                <p class="block3-desc">Петр Владимирович создает изысканные костюмы,&nbsp;которые подчеркивают элегантность своих&nbsp;владельцев.</p>
                <p class="block3-small">Петр Владимирович Саяпин<br><span>мастер-закройщик</span></p>
            </div>
            <div class="col-lg-5 col-sm-5">
                <img src="wp-content/themes/grandy/img/main/master.png" alt="">
            </div>
        </section>
        <section class="row main-block4">
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-sm-6 col-12 bg-1">
                <h2 class="block4-big_gold">Шьем 60</h2>
                <h3 class="block4-middle">Эксклюзивных</h3>
                <h3 class="block4-middle">костюмов</h3>
                <h4 class="block4-middle_gold">каждый месяц</h4>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-sm-6 col-12">
                <p class="page-content_big">Костюмы, смокинги, форменная одежда по&nbsp;индивидуальным&nbsp;меркам</p>
                <p class="page-content margin-90">Индивидуальный пошив решает проблему разницы в&nbsp;размерах пиджака и&nbsp;брюк, поиска костюма на&nbsp;высокий рост или нестандартные объемы&nbsp;&mdash; изделие от&nbsp;мастеров ателье ГРАНДИ идеально сядет по&nbsp;фигуре и&nbsp;гарантированно будет гарантированно существовать в&nbsp;единственном экземпляре.</p>
                <p class="page-content">Мы&nbsp;также занимаемся пошивом театральных костюмов: как исторических, с&nbsp;проработанными деталями, так и&nbsp;современных.</p>
            </div>
        </section>
        <section class="row main-block5">
            <div class="col-lg-1"></div>
            <div class="col-lg-11 col-12 main-slider">
                <div class="slide-1 main-slide">
                    <div class="main-slide_left">
                        <p class="page-content_big">Шьем в&nbsp;Петербурге, из&nbsp;тканей признанных европейских брендов&nbsp;&mdash; экономим на&nbsp;стороннем производстве и&nbsp;дополнительной логистике, а&nbsp;не&nbsp;на&nbsp;качестве</p>
                        <p class="page-content">С&nbsp;каждым клиентом мастера ателье ГРАНДИ работают индивидуально:&nbsp;снимают мерки, консультируют при выборе фасона&nbsp;и&nbsp;фурнитуры, рассказывают о&nbsp;нюансах тканей английских&nbsp;и&nbsp;итальянских мануфактур&nbsp;&mdash; Scabal, Dormeuil, Cerruti.</p>
                        <p class="page-content">После создания выкройки мастер продолжает&nbsp;контролировать процесс пошива. Он&nbsp;сам тщательно кроит части костюма, принимает изделие в&nbsp;швейном цехе.</p>
                        <p class="page-content">Персонал ателье ГРАНДИ&nbsp;&mdash; швеи и&nbsp;мастера-закройщики высшего разряда, которые постоянно повышают квалификацию. Портные ателье владеют технологией бесклеевой обработки, ручной отделочной строчки, неаполитанского плеча.</p>
                        <p class="page-content_gold">Швейный цех оборудован современным немецким, итальянским&nbsp;и&nbsp;японским&nbsp;оборудованиям.</p>
                    </div>
                    <div class="main-slide_right bg2 m-order-0">
                        <h3 class="main-slider-title">Полгода<br>гарантии</h3>
                        <h4 class="main-slider-subtitle">на&nbsp;фурнитуру</h4>
                    </div>
                </div>
                <div class="slide-2 main-slide">
                    <div class="main-slide_left">
                        <p class="page-content_big">Шьем в&nbsp;Петербурге, из&nbsp;тканей признанных европейских брендов&nbsp;&mdash; экономим на&nbsp;стороннем производстве и&nbsp;дополнительной логистике, а&nbsp;не&nbsp;на&nbsp;качестве</p>
                        <p class="page-content">С&nbsp;каждым клиентом мастера ателье ГРАНДИ работают индивидуально: снимают мерки, консультируют при выборе фасона и&nbsp;фурнитуры, рассказывают о&nbsp;нюансах тканей английских и&nbsp;итальянских мануфактур&nbsp;&mdash; Scabal, Dormeuil, Cerruti.</p>
                        <p class="page-content">После создания выкройки мастер продолжает контролировать процесс пошива. Он&nbsp;сам тщательно кроит части костюма, принимает изделие в&nbsp;швейном цехе.</p>
                        <p class="page-content">Персонал ГРАНДИ&nbsp;&mdash; швеи и&nbsp;мастера-закройщики высшего разряда, которые постоянно повышают квалификацию. Портные ателье владеют технологией бесклеевой обработки, ручной отделочной строчки, неаполитанского плеча.</p>
                        <p class="page-content_gold">Швейный цех оборудован современным немецким, итальянским и&nbsp;японским оборудованиям.</p>
                    </div>
                    <div class="main-slide_right bg3 m-order-0">
                        <h3 class="main-slider-title">Полгода<br>гарантии</h3>
                        <h4 class="main-slider-subtitle">На ткань</h4>
                    </div>
                </div>
                <div class="slide-3 main-slide">
                    <div class="main-slide_left">
                        <p class="page-content_big">Шьем в&nbsp;Петербурге, из&nbsp;тканей признанных европейских брендов&nbsp;&mdash; экономим на&nbsp;стороннем производстве и&nbsp;дополнительной логистике, а&nbsp;не&nbsp;на&nbsp;качестве</p>
                        <p class="page-content">С&nbsp;каждым клиентом мастера ателье ГРАНДИ работают индивидуально: снимают мерки, консультируют при выборе фасона и&nbsp;фурнитуры, рассказывают о&nbsp;нюансах тканей английских и&nbsp;итальянских мануфактур&nbsp;&mdash; Scabal, Dormeuil, Cerruti.</p>
                        <p class="page-content">После создания выкройки мастер продолжает контролировать процесс пошива. Он&nbsp;сам тщательно кроит части костюма, принимает изделие в&nbsp;швейном цехе.</p>
                        <p class="page-content">Персонал ГРАНДИ&nbsp;&mdash; швеи и&nbsp;мастера-закройщики высшего разряда, которые постоянно повышают квалификацию. Портные ателье владеют технологией бесклеевой обработки, ручной отделочной строчки, неаполитанского плеча.</p>
                        <p class="page-content_gold">Швейный цех оборудован современным немецким, итальянским и&nbsp;японским оборудованиям.</p>
                    </div>
                    <div class="main-slide_right bg4 m-order-0">
                        <h3 class="main-slider-title">Полгода<br>гарантии</h3>
                        <h4 class="main-slider-subtitle">на швы</h4>
                    </div>
                </div>
            </div>
        </section>
        <section class="row main-block6">
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-sm-5 col-12">
                <h3 class="title-gold">шьем</h3>
                <h4 class="title">костюмы</h4>
                <h4 class="title-big">за <span>10</span></h4>
                <h5 class="title-gold_small">рабочих<br>дней</h5>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5 col-sm-7 col-12">
                <p class="page-content_big">Закажите эксклюзивное изделие из&nbsp;итальянской ткани</p>
                <form class="main-block6-form">
                        <label for="main-select" class="label">Хочу заказать</label>
                        <div class="select-wrap">
                            <select id="main-select" name="main-select">
                                <option value="pidzak">Пиджак</option>
                                <option value="kostum">Костюм</option>
                                <option value="palto">Пальто</option>
                                <option value="bruki">Брюки</option>
                                <option value="frak">Фрак</option>
                                <option value="smoking">Смокинг</option>
                                <option value="kurtka">Куртка</option>
                                <option value="sorochka">Сорочка</option>
                            </select>
                        </div>
                    <label for="main-tel" class="label">Телефон</label>
                    <input id="main-tel" name="main-tel" type="tel" class="form-input" placeholder="+7 999 000 00 00"  pattern="8[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" required>
                    <span class="valid">Пожалуйста, введите в формате 89990000000</span>
                    <button type="submit" class="btn">Отправить</button>
                </form>
            </div>
        </section>
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
