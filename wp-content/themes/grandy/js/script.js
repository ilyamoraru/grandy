
//google maps api

var slide;

function initMap() {
    var center = {lat: 59.870241, lng: 30.312825};

    var map = new google.maps.Map(
        document.getElementById('map'), {
            zoom: 15,
            center: center,
            disableDefaultUI: true,
            scrollwheel: false,
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#2569e3"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
        }
    )

  var marker = new google.maps.Marker({
      position: center,
      map: map,
      icon: {
          url: '/wp-content/themes/grandy/img/logo/mapmarker.png',
          size: new google.maps.Size(53,60),
      }
  })
};


jQuery(document).ready(function() {

    //slider

   jQuery('.main-slider').slick({
       arrows: false,
       dots: true,
       fade: true,
   });

   jQuery('.item-slider').slick({
       arrows: false,
       dots: true,
       fade: true,
       appendDots: jQuery('.dots-cont'),
       adaptiveHeight: true,
       // responsive: [{
       //     breakpoint: 900,
       //     settings: {
       //         adaptiveHeight: false,
       //     }
       // }
       // ]
   });

   jQuery('.reviews-slider').slick({
       arrows: false,
       dots: true,
       fade: true,
       responsive: [{
           breakpoint: 900,
           settings: {
               adaptiveHeight: true,
           }
       }]
   });

   jQuery('.review-gallery').slick({
       arrows: false,
       dots: true,
       infinite: false,
       slidesToShow: 2,
       slidesToScroll: 1,
       responsive: [{
           breakpoint: 440,
           settings: {
               slidesToShow: 1,
           }
       }]
   });

    if(window.matchMedia('(max-width: 440px)').matches) {
        jQuery('.block2-list').slick({
           arrows: false,
           dots: true,
           slidesToShow: 1,
           slidesToScroll: 1,
           centerMode: true,
           centerPadding: '120px',
            responsive: [{
               breakpoint: 360,
                settings: {
                   centerPadding: '90px'
                }
            }]
        });
    }


   //dots for item page names brends

   var names = jQuery('.item-slide').find('.item-name');
   var dots = jQuery('.dots-cont').find('button');
   var spans = dots.after('<span class="dots-name"></span>');
   var spanItem = jQuery('.dots-name');

   for (var i = 0; i < names.length; i++) {
       var name = names[i];
       var span = spanItem[i];
       name = name.innerHTML;
       span.innerText = name;
    };

   //смена темы в зависимости от слайда

    jQuery('.item-slider').on('afterChange',function(event, slick, currentSlide) {
       if(currentSlide == 1 || currentSlide == 3) {
           jQuery('.item-page').removeClass('white-theme');
           jQuery('.item-page').addClass('blue-theme');
       } else {
           jQuery('.item-page').removeClass('blue-theme');
           jQuery('.item-page').addClass('white-theme');
       }
    });

    //header

    jQuery('.close-info').click(function() {
       jQuery('.info-cont').css('display','none');
    });

    jQuery(window).on('scroll', function() {
        if(jQuery(window).scrollTop() > 170) {
            jQuery('.header-wrap').addClass('header-wrap_pad');
        } else {
            jQuery('.header-wrap').removeClass('header-wrap_pad');
        }
    });

    //modals

    //open

    jQuery('.request-btn').click(function() {
       jQuery('.modal-overlay').css('display','block');
       jQuery('.modal-call').css('transform','none');
       jQuery('html, body').css('overflow','hidden');
    });

//   jQuery('.ind-right-btn, .select-btn').click(function() {
//       jQuery('.modal-overlay').css('display','block');
//       jQuery('.modal-thanks').css('transform', 'none');
//       jQuery('html, body').css('overflow','hidden');
//   });

   //close

   jQuery('.close-modal, .modal-overlay').click(function() {
       if(window.matchMedia('(max-width: 800px)').matches) {
           jQuery('.modal-overlay').css('display','none');
           jQuery('.modal-call').css('transform','translateY(-200vh)');
           jQuery('.modal-thanks').css('transform', 'translateY(-200vh)');
           jQuery('html, body').css('overflow','auto');
       } else {
           jQuery('.modal-overlay').css('display','none');
           jQuery('.modal-call').css('transform','translateY(-200vh)');
           jQuery('.modal-thanks').css('transform', 'translateY(-200vh)');
           jQuery('html, body').css('overflow','auto');
       }

   });

    window.addEventListener("keydown", function(evt) {
        if(evt.keyCode === 27) {
            evt.preventDefault();

            jQuery('.modal-overlay').css('display','none');
            jQuery('.modal-call').css('transform','translateY(-200vh)');
            jQuery('.modal-thanks').css('transform', 'translateY(-200vh)');
            jQuery('html, body').css('overflow','auto');
        };
    });

    //страница услуг

    jQuery('.service-item').click(function() {

        //отображаем контент слева

        jQuery('.service-item').removeClass('service-item-open');
        jQuery(this).addClass('service-item-open');

        //контент справа

        if(jQuery(this).hasClass('ind-left')) {
            jQuery('.right-block').removeClass('right-block-showed');
            jQuery('.ind-right').addClass('right-block-showed');
        };

        if(jQuery(this).hasClass('corp-left')) {
            jQuery('.right-block').removeClass('right-block-showed');
            jQuery('.corp-right').addClass('right-block-showed');
        };

        if(jQuery(this).hasClass('rem-left')) {
            jQuery('.right-block').removeClass('right-block-showed');
            jQuery('.rem-right').addClass('right-block-showed');
        };

        //меняем порядок в мобиле

        if(window.matchMedia('(max-width: 440px)').matches) {
            jQuery('.service-item').removeClass('m-order-0');
            jQuery(this).addClass('m-order-0');
        }
    });

    //индивидуальный пошив справа

    //отображаем форму при выборе

    jQuery('.ind-right-item').click(function() {
        jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
        jQuery('.ind-right-form-cont').addClass('ind-right-form-cont-show');
    });

    //меняем заголовок

    var lengthIndForm = jQuery('.ind-left-form option').length;
    var options = jQuery('.ind-left-form option');
    var titles = jQuery('.ind-right-cont .subtitle');

    for (var i = 0; i < lengthIndForm; i++) {
        var option = options[i];
        var title = titles[i];
        var text = option.text;
        title.innerHTML = text;
    };

    //выбираем нужный

    jQuery('.ind-left-form').change( function() {
        jQuery('.ind-right-form-cont').removeClass('ind-right-form-cont-show');

        if(jQuery('.ind-left-select').val() == 1) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right1').addClass('ind-right-cont-showed');
        };

        if(jQuery('.ind-left-select').val() == 2) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right2').addClass('ind-right-cont-showed');
        };

        if(jQuery('.ind-left-select').val() == 3) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right3').addClass('ind-right-cont-showed');
        };

        if(jQuery('.ind-left-select').val() == 4) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right4').addClass('ind-right-cont-showed');
        };

        if(jQuery('.ind-left-select').val() == 5) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right5').addClass('ind-right-cont-showed');
        };

        if(jQuery('.ind-left-select').val() == 6) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right6').addClass('ind-right-cont-showed');
        };
        
        if(jQuery('.ind-left-select').val() == 7) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right7').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 8) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right8').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 9) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right9').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 10) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right10').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 11) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right11').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 12) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right12').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 13) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right13').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 14) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right14').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 15) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right15').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 16) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right16').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 17) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right17').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 18) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right18').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 19) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right19').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 20) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right20').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 21) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right21').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 22) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right22').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 23) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right23').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 24) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right24').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 25) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right25').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 26) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right26').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 27) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right27').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() ==28) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right28').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 29) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right29').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 30) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right30').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 31) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right31').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 32) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right32').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 33) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right33').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 34) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right34').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 35) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right35').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 36) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right36').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 37) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right37').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 38) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right38').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 39) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right39').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 40) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right40').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 41) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right41').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 42) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right42').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 43) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right43').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 44) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right44').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 45) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right45').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 46) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right46').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 47) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right47').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 48) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right48').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 49) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right49').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 50) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right50').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 51) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right51').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 52) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right52').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 53) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right53').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 54) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right54').addClass('ind-right-cont-showed');
        };
        if(jQuery('.ind-left-select').val() == 55) {
            jQuery('.ind-right-cont').removeClass('ind-right-cont-showed');
            jQuery('.ind-right55').addClass('ind-right-cont-showed');
        };
    });

    //количество товара в input

    jQuery('.minus').click(function() {
        var value = jQuery('.number-input').val();

        parseInt(value);

        if(value > 1) {
            value = value - 1;
            jQuery('.number-input').val(value);
        } else {
            alert('Укажите корректное число')
        }
    });

    jQuery('.plus').click(function() {
        var value = jQuery('.number-input');
        value.val(parseInt(value.val()) + 1);
        value.change();
    });

    //ремонт и подгонка

    //разворачиваем список

    jQuery('.element-title_cont').click(function() {
        var child = jQuery(this).find('.element-title');

        if(child.hasClass('element-title-open')) {
            child.removeClass('element-title-open');
            var list = jQuery(this).parent().find('.element-list');
            list.removeClass('element-list-show');
            //поворот треугольника
            var parent = jQuery(this).parent();
            parent.removeClass('element-after');
        } else {
            child.addClass('element-title-open');
            var list = jQuery(this).parent().find('.element-list');
            list.addClass('element-list-show');
            //поворот треугольника
            var parent = jQuery(this).parent();
            parent.addClass('element-after');
        }
    });

    //подсвечиваем и считаем блоки услуг

    var arraySelected = [];

    jQuery('.element-item').click(function() {
        var attr = jQuery(this).attr('data-item');
        var a = jQuery('.element-list').find("[data-item='" + attr + "']");

        //подсвечиваем

        if(jQuery(this).hasClass('element-item-select')) {
            jQuery(this).removeClass('element-item-select');
            a.removeClass('element-item-select');
        } else {
            jQuery(this).addClass('element-item-select');
            a.addClass('element-item-select');
        };

        arraySelected[0] = jQuery('#1 .element-item-select').clone();
        arraySelected[1] = jQuery('#2 .element-item-select').clone();
        arraySelected[2] = jQuery('#3 .element-item-select').clone();
        arraySelected[3] = jQuery('#4 .element-item-select').clone();
        arraySelected[4] = jQuery('#5 .element-item-select').clone();
        arraySelected[5] = jQuery('#6 .element-item-select').clone();
        arraySelected[6] = jQuery('#7 .element-item-select').clone();
        arraySelected[7] = jQuery('#8 .element-item-select').clone();
        arraySelected[8] = jQuery('#9 .element-item-select').clone();
        arraySelected[9] = jQuery('#10 .element-item-select').clone();
        arraySelected[10] = jQuery('#11 .element-item-select').clone();
        arraySelected[11] = jQuery('#12 .element-item-select').clone();
        arraySelected[12] = jQuery('#13 .element-item-select').clone();
        arraySelected[13] = jQuery('#14 .element-item-select').clone();
        arraySelected[14] = jQuery('#15 .element-item-select').clone();
        arraySelected[15] = jQuery('#16 .element-item-select').clone();
        arraySelected[16] = jQuery('#17 .element-item-select').clone();
        arraySelected[17] = jQuery('#18 .element-item-select').clone();
        arraySelected[18] = jQuery('#19 .element-item-select').clone();
        arraySelected[19] = jQuery('#20 .element-item-select').clone();
        arraySelected[20] = jQuery('#21 .element-item-select').clone();
        arraySelected[21] = jQuery('#22 .element-item-select').clone();
        arraySelected[22] = jQuery('#23 .element-item-select').clone();
        arraySelected[23] = jQuery('#24 .element-item-select').clone();
        arraySelected[24] = jQuery('#25 .element-item-select').clone();
        arraySelected[25] = jQuery('#26 .element-item-select').clone();
        arraySelected[26] = jQuery('#27 .element-item-select').clone();
        arraySelected[27] = jQuery('#28 .element-item-select').clone();
        arraySelected[28] = jQuery('#29 .element-item-select').clone();
        arraySelected[29] = jQuery('#30 .element-item-select').clone();
        arraySelected[30] = jQuery('#31 .element-item-select').clone();
        arraySelected[31] = jQuery('#32 .element-item-select').clone();
        arraySelected[32] = jQuery('#33 .element-item-select').clone();
        arraySelected[33] = jQuery('#34 .element-item-select').clone();
        arraySelected[34] = jQuery('#35 .element-item-select').clone();
        arraySelected[35] = jQuery('#36 .element-item-select').clone();
        arraySelected[36] = jQuery('#37 .element-item-select').clone();
        arraySelected[37] = jQuery('#38 .element-item-select').clone();
        arraySelected[38] = jQuery('#39 .element-item-select').clone();
        arraySelected[39] = jQuery('#40 .element-item-select').clone();
        arraySelected[40] = jQuery('#41 .element-item-select').clone();
        arraySelected[41] = jQuery('#42 .element-item-select').clone();
        arraySelected[42] = jQuery('#43 .element-item-select').clone();
        arraySelected[43] = jQuery('#44 .element-item-select').clone();
        arraySelected[44] = jQuery('#45 .element-item-select').clone();
        arraySelected[45] = jQuery('#46 .element-item-select').clone();
        arraySelected[46] = jQuery('#47 .element-item-select').clone();
        arraySelected[47] = jQuery('#48 .element-item-select').clone();
        arraySelected[48] = jQuery('#49 .element-item-select').clone();
        arraySelected[49] = jQuery('#50 .element-item-select').clone();
        arraySelected[50] = jQuery('#51 .element-item-select').clone();
        arraySelected[51] = jQuery('#52 .element-item-select').clone();
        arraySelected[52] = jQuery('#53 .element-item-select').clone();
        arraySelected[53] = jQuery('#54 .element-item-select').clone();

        var a1 = arraySelected[0];
        var a2 = arraySelected[1];
        var a3 = arraySelected[2];
        var a4 = arraySelected[3];
        var a5 = arraySelected[4];
        var a6 = arraySelected[5];
        var a7 = arraySelected[6];
        var a8 = arraySelected[7];
        var a9 = arraySelected[8];
        var a10 = arraySelected[9];
        var a11 = arraySelected[10];
        var a12 = arraySelected[11];
        var a13 = arraySelected[12];
        var a14 = arraySelected[13];
        var a15 = arraySelected[14];
        var a16 = arraySelected[15];
        var a17 = arraySelected[16];
        var a18 = arraySelected[17];
        var a19 = arraySelected[18];
        var a20 = arraySelected[19];
        var a21 = arraySelected[20];
        var a22 = arraySelected[21];
        var a23 = arraySelected[22];
        var a24 = arraySelected[23];
        var a25 = arraySelected[24];
        var a26 = arraySelected[25];
        var a27 = arraySelected[26];
        var a28 = arraySelected[27];
        var a29 = arraySelected[28];
        var a30 = arraySelected[29];
        var a31 = arraySelected[30];
        var a32 = arraySelected[31];
        var a33 = arraySelected[32];
        var a34 = arraySelected[33];
        var a35 = arraySelected[34];
        var a36 = arraySelected[35];
        var a37 = arraySelected[36];
        var a38 = arraySelected[37];
        var a39 = arraySelected[38];
        var a40 = arraySelected[39];
        var a41 = arraySelected[40];
        var a42 = arraySelected[41];
        var a43 = arraySelected[42];
        var a44 = arraySelected[43];
        var a45 = arraySelected[44];
        var a46 = arraySelected[45];
        var a47 = arraySelected[46];
        var a48 = arraySelected[47];
        var a49 = arraySelected[48];
        var a50 = arraySelected[49];
        var a51 = arraySelected[50];
        var a52 = arraySelected[51];
        var a53 = arraySelected[52];
        var a54 = arraySelected[53];
        var a55 = arraySelected[54];
        

        jQuery('.option_1 .option-list').append(a1);
        jQuery('.option_2 .option-list').append(a2);
        jQuery('.option_3 .option-list').append(a3);
        jQuery('.option_4 .option-list').append(a4);
        jQuery('.option_5 .option-list').append(a5);
        jQuery('.option_6 .option-list').append(a6);
        jQuery('.option_7 .option-list').append(a7);
        jQuery('.option_8.option-list').append(a8);
        jQuery('.option_9 .option-list').append(a9);
        jQuery('.option_10 .option-list').append(a10);
        jQuery('.option_11 .option-list').append(a11);
        jQuery('.option_12 .option-list').append(a12);
        jQuery('.option_13 .option-list').append(a13);
        jQuery('.option_14 .option-list').append(a14);
        jQuery('.option_15 .option-list').append(a15);
        jQuery('.option_16 .option-list').append(a16);
        jQuery('.option_17 .option-list').append(a17);
        jQuery('.option_18 .option-list').append(a18);
        jQuery('.option_19 .option-list').append(a19);
        jQuery('.option_20 .option-list').append(a20);
        jQuery('.option_21 .option-list').append(a21);
        jQuery('.option_22 .option-list').append(a22);
        jQuery('.option_23 .option-list').append(a23);
        jQuery('.option_24 .option-list').append(a24);
        jQuery('.option_25 .option-list').append(a25);
        jQuery('.option_26 .option-list').append(a26);
        jQuery('.option_27 .option-list').append(a27);
        jQuery('.option_28 .option-list').append(a28);
        jQuery('.option_29 .option-list').append(a29);
        jQuery('.option_30 .option-list').append(a30);
        jQuery('.option_31 .option-list').append(a31);
        jQuery('.option_32 .option-list').append(a32);
        jQuery('.option_33 .option-list').append(a33);
        jQuery('.option_34 .option-list').append(a34);
        jQuery('.option_35 .option-list').append(a35);
        jQuery('.option_36 .option-list').append(a36);
        jQuery('.option_37 .option-list').append(a37);
        jQuery('.option_38 .option-list').append(a38);
        jQuery('.option_39 .option-list').append(a39);
        jQuery('.option_40 .option-list').append(a40);
        jQuery('.option_41 .option-list').append(a41);
        jQuery('.option_42 .option-list').append(a42);
        jQuery('.option_43 .option-list').append(a43);
        jQuery('.option_44 .option-list').append(a44);
        jQuery('.option_45 .option-list').append(a45);
        jQuery('.option_46 .option-list').append(a46);
        jQuery('.option_47 .option-list').append(a47);
        jQuery('.option_48 .option-list').append(a48);
        jQuery('.option_49 .option-list').append(a49);
        jQuery('.option_50 .option-list').append(a50);
        jQuery('.option_51 .option-list').append(a51);
        jQuery('.option_52 .option-list').append(a52);
        jQuery('.option_53 .option-list').append(a53);
        jQuery('.option_54 .option-list').append(a54);
        jQuery('.option_55 .option-list').append(a55);

        jQuery('.option-list li').addClass('option-item');

        //var i = arraySelected[0].length + arraySelected[1].length + arraySelected[2].length;

        jQuery('.change-el').text(i);

        counter();

    });



    //листаем до нужного справа

    jQuery('.rem-left-form').change(function() {
        if(jQuery('.rem-left-select').val() == 1) {
            jQuery('.overflow-cont').animate({
                scrollTop: jQuery('#1').offset().top - jQuery('.overflow-cont').offset().top
            }, 2000);
        };

        if(jQuery('.rem-left-select').val() == 2) {
            jQuery('.overflow-cont').animate({
                scrollTop: jQuery('#2').offset().top - jQuery('.overflow-cont').offset().top
            }, 2000);
        };

        if(jQuery('.rem-left-select').val() == 3) {
            jQuery('.overflow-cont').animate({
                scrollTop: jQuery('#3').offset().top - jQuery('.overflow-cont').offset().top
            }, 2000);
        };

        if(jQuery('.rem-left-select').val() == 4) {
            jQuery('.overflow-cont').animate({
                scrollTop: jQuery('#4').offset().top - jQuery('.overflow-cont').offset().top
            }, 2000);
        };
    });

    //блок выбранных услуг

    //show

    jQuery('.showmore-btn ').click(function() {
       jQuery('.services').removeClass('services-show');
       jQuery('.services-select').addClass('services-select-show')
        counter();
        //собираем услуги
        var services_php = jQuery('.option-list .element-item').text();
        jQuery('#all-services').val(services_php);
        console.log(jQuery('#all-services').val())
    });

    //количество выбранных

    function counter() {
        var count = jQuery('.counter');
        count.each(function() {
            var a = jQuery(this).parent().next().find('li');
            jQuery(this).text(a.length);
        });
    };

    //раскрываем директории

    jQuery('.option-title').click(function() {
        if(jQuery(this).hasClass('option-title-show')) {
            jQuery(this).removeClass('option-title-show');
            var list = jQuery(this).next();
            list.removeClass('option-list-show');
            jQuery(this).parent().removeClass('option-open')
        } else {
            jQuery(this).addClass('option-title-show');
            var list = jQuery(this).next();
            list.addClass('option-list-show');
            jQuery(this).parent().addClass('option-open');
        }
    });

    //генерим выбранные

    //mobile

    //menu

    jQuery('.burger-menu').click(function() {
        if(jQuery('.header').hasClass('header-mobile-show')) {
            jQuery('.header').removeClass('header-mobile-show');
            jQuery('.mobile-menu').removeClass('mobile-menu-show');
            jQuery('html,body').css('overflow','auto');
        } else {
            jQuery('.header').addClass('header-mobile-show');
            jQuery('.mobile-menu').addClass('mobile-menu-show');
            jQuery('html, body').css('overflow','hidden');
        }
    });

    //pdf

    jQuery('.pdf-btn').click(function() {
        var selectedServices = jQuery('#1 .element-item-select');
        var array = selectedServices.text();
        var docInfo = {
            info: {
                title: 'Выбранные услуги',
                author: 'Grandy',
                subject: 'Услуги',
                keywords: '',
            },

            pageSize: 'A4',
            pageOrientation: 'portrait',
            pageMargins: [20,20,20,20],

            content: [
                {
                    text: array,
                    fontSize: 16,
                    margin: [50,50,50,50],
                }
            ]
        };
       pdfMake.createPdf(docInfo).download('grandy.pdf');
    });

    //ajax
    
    jQuery('#main-form').submit(function() {
       var form_data = jQuery('#main-form').serialize();
        jQuery.ajax({
            type: 'POST',
            url: '/mail.php',
            data: form_data,
            success: function() {
                jQuery('.modal-overlay').css('display','block');
                jQuery('html, body').css('overflow','hidden');
                jQuery('.modal-thanks').css('transform','none');
            }
        });
        return false;
    });
    
    jQuery('#modal-form').submit(function() {
        var form_data = jQuery('#modal-form').serialize();
        jQuery.ajax({
            type: 'POST',
            url: '/mail-modal.php',
            data: form_data,
            success: function() {
                jQuery('.modal-overlay').css('display','block');
                jQuery('html, body').css('overflow','hidden');
                jQuery('.modal-thanks').css('transform','none');
            }
        });
        return false;
    });
    
    jQuery('#contacs-form').submit(function() {
        var form_data = jQuery('#contacs-form').serialize();
        jQuery.ajax({
            type: 'POST',
            url: '/mail-contacts.php',
            data: form_data,
            success: function() {
                jQuery('.modal-overlay').css('display','block');
                jQuery('html, body').css('overflow','hidden');
                jQuery('.modal-thanks').css('transform','none');
            }
        });
        
        return false;
    });
    
    jQuery('#services-form-big').submit(function() {
       var form_data = jQuery('#services-form-big').serialize();
        jQuery.ajax({
            type: 'POST',
            url: '/mail-idn.php',
            data: form_data,
            success: function() {
                jQuery('.modal-overlay').css('display','block');
                jQuery('html, body').css('overflow','hidden');
                jQuery('.modal-thanks').css('transform','none');
            }
        });
        return false;
    });
});