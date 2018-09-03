
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

   jQuery('.call-btn').click(function() {
       if(window.matchMedia('(max-width: 800px)').matches) {
           jQuery('.modal-call').css('transform','translateY(-200vh)');
           jQuery('.modal-thanks').css('transform','none');
           jQuery('html, body').css('overflow','hidden');
       } else {
           jQuery('.modal-call').css('transform','translateY(-200vh)');
           jQuery('.modal-thanks').css('transform','none');
           jQuery('html, body').css('overflow','hidden');
       }

   });

   jQuery('.contacts-btn, .ind-right-btn, .select-btn').click(function() {
       jQuery('.modal-overlay').css('display','block');
       jQuery('.modal-thanks').css('transform', 'none');
       jQuery('html, body').css('overflow','hidden');
   });

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

        arraySelected[0] = jQuery('#2 .element-item-select').clone();
        arraySelected[1] = jQuery('#3 .element-item-select').clone();
        arraySelected[2] = jQuery('#4 .element-item-select').clone();

        var a1 = arraySelected[0];
        var a2 = arraySelected[1];
        var a3 = arraySelected[2];

        jQuery('.first-option .option-list').append(a1);
        jQuery('.second-option .option-list').append(a2);
        jQuery('.third-option .option-list').append(a3);

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
       sendAjaxForm('result_form','ajax_form', 'mail.php');
       return false;
    });


    //
    // function sendAjaxForm(result_form,ajax_form,url) {
    //     jQuery.ajax({
    //         url: url,
    //         type: 'POST',
    //         dataType: 'html',
    //         data: jQuery('#'+ajax_form).serialize(),
    //         success: function(response) {
    //             //result = jQuery.parseJSON(response);
    //             jQuery('.modal-overlay').css('display','block');
    //             jQuery('html, body').css('overflow','hidden');
    //             jQuery('.modal-thanks').css('transform','none');
    //         },
    //         error: function(response) {
    //             alert('Ошибка!')
    //         }
    //     })
    // }


    function sendAjaxForm(){
        var msg = jQuery('#main-form').serialize();
        jQuery.ajax({
            type: 'POST',
            url: '/mail.php',
            data: msg,
            success: function(response) {
                //result = jQuery.parseJSON(response);
                jQuery('.modal-overlay').css('display','block');
                jQuery('html, body').css('overflow','hidden');
                jQuery('.modal-thanks').css('transform','none');
            },
            error:  function(){
                alert('хуй соси губой тряси');
            }
        });

    }


    $(document).ready(function() {
        $('form').h5Validate({
            errorClass: 'error'
        });
    });


});