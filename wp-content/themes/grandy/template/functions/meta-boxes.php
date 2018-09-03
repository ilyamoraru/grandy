<?php
/**
 * Initialize the custom Meta Boxes. 
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
    $main_page = array(
    'id'          => 'main_page_box',
    'title'       => 'Настройка страниц',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => 'Слайдер главная',
        'id'          => 'main_slider_tab',
        'type'        => 'tab'
      ),
      array(
        'label'       => 'Показывать слайдер',
        'id'          => 'main_slider_show',
        'type'        => 'on-off',
        'desc'        => 'Отображение слайдера на главной',
        'std'         => 'on'
      ),
      array(
        'id'          => 'main_slider_list',
        'label'       => 'Слайдер',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => 'main_slider_show:is(on)',
        'settings'    => array( 
          array(
            'id'          => 'main_slider_head_big',
            'label'       => 'Большой заголовок',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'main_slider_head_gold',
            'label'       => 'Золотой заголовок',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'main_slider_head_sub',
            'label'       => 'Подзаголовок',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'main_slider_cont1',
            'label'       => 'Текст-блок 1',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'main_slider_cont2',
            'label'       => 'Текст-блок 2',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'main_slider_cont3',
            'label'       => 'Текст-блок 3',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'main_slider_cont_gold',
            'label'       => 'Текст-блок золотой',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'main_slider_upload',
            'label'       => 'Загрузите слайд',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
        )
      ),
      array(
        'label'       => 'Форма опции главная',
        'id'          => 'main_form_tab',
        'type'        => 'tab'
      ),
      array(
        'id'          => 'main_form_list',
        'label'       => 'Список услуг в форме',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => '',
        'settings'    => array( 
          array(
            'id'          => 'main_form_name',
            'label'       => 'Значение услуги',
            'desc'        => 'На английском',
            'type'        => 'text',
          ),
          array(
            'id'          => 'main_form_desc',
            'label'       => 'Имя услуги',
            'desc'        => '',
            'type'        => 'text',
          ), 
        )
      ),
      array(
        'label'       => 'Коллекция тканей',
        'id'          => 'collection_tab',
        'type'        => 'tab'
      ),
      array(
        'id'          => 'collection_list',
        'label'       => 'Список тканей',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => '',
        'settings'    => array( 
          array(
            'id'          => 'collection_upload1',
            'label'       => 'Загрузите изображение 1',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
            array(
            'id'          => 'collection_url1',
            'label'       => 'Укажите ссылку(формат: collection=#)',
            'desc'        => 'Необходимо для автоперелистывания слайдера. Сопостовляйте номер с номером слайда',
            'std'         => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'collection_upload2',
            'label'       => 'Загрузите изображение 2',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'collection_url2',
            'label'       => 'Укажите ссылку(формат: collection=#)',
            'desc'        => 'Необходимо для автоперелистывания слайдера. Сопостовляйте номер с номером слайда',
            'std'         => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'collection_upload3',
            'label'       => 'Загрузите изображение 3(большое)',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'collection_url3',
            'label'       => 'Укажите ссылку(формат: collection=#)',
            'desc'        => 'Необходимо для автоперелистывания слайдера. Сопостовляйте номер с номером слайда',
            'std'         => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'collection_upload4',
            'label'       => 'Загрузите изображение 4',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'collection_url4',
            'label'       => 'Укажите ссылку(формат: collection=#)',
            'desc'        => 'Необходимо для автоперелистывания слайдера. Сопостовляйте номер с номером слайда',
            'std'         => '',
            'type'        => 'text',
            ),
          array(
            'id'          => 'collection_upload5',
            'label'       => 'Загрузите изображение 5',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'collection_url5',
            'label'       => 'Укажите ссылку(формат: collection=#)',
            'desc'        => 'Необходимо для автоперелистывания слайдера. Сопостовляйте номер с номером слайда',
            'std'         => '',
            'type'        => 'text',
            ),
        )
      ),
      array(
        'label'       => 'Страница тканей',
        'id'          => 'tissue_tab',
        'type'        => 'tab'
      ),
      array(
        'id'          => 'tissue_list',
        'label'       => 'Список тканей',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => '',
        'settings'    => array( 
          array(
            'id'          => 'tissue_title',
            'label'       => 'Имя бренда',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'tissue_date',
            'label'       => 'дата основания',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'tissue_desc1',
            'label'       => 'Текст блок 1',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'tissue_desc2',
            'label'       => 'Текст блок 2',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'tissue_desc3',
            'label'       => 'Текст блок 3',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'tissue_upload',
            'label'       => 'Загрузите изображение',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
        )
      ),
      array(
        'label'       => 'Страница отзывов',
        'id'          => 'reviews_tab',
        'type'        => 'tab'
      ),
      array(
          'id'          => 'reviews_list',
            'label'       => 'Список отзывов',
            'desc'        => '',
            'std'         => '',
            'type'        => 'list-item',
            'condition'   => '',
            'settings'    => array( 
                array(
                'id'          => 'reviews_list_item',
                'label'       => 'Отзыв',
                'desc'        => '',
                'type'        => 'custom-post-type-select',
                'post_type'   => 'grandy_reviews',
                ),
            ),
      ),
      array(
        'id'          => 'promo_list',
        'label'       => 'Список промокарт',
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'condition'   => '',
        'settings'    => array( 
          array(
            'id'          => 'promo_title1',
            'label'       => 'Заголовок',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'promo_text1',
            'label'       => 'Текст',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'promo_upload1',
            'label'       => 'Загрузите изображение',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
          array(
            'id'          => 'promo_title2',
            'label'       => 'Заголовок',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'promo_text2',
            'label'       => 'Текст',
            'desc'        => '',
            'type'        => 'text',
          ),
          array(
            'id'          => 'promo_upload2',
            'label'       => 'Загрузите изображение',
            'desc'        =>'',
            'std'         => '',
            'type'        => 'upload',
          ),
        )
      ),
      array(
        'label'       => 'Страница услуг(Общие)',
        'id'          => 'services_page',
        'type'        => 'tab'
      ),
      array(
          'id'          => 'services_page_form1',
            'label'       => 'Список услуг в форму 1блок',
            'desc'        => '',
            'std'         => '',
            'type'        => 'list-item',
            'condition'   => '',
            'settings'    => array( 
                array(
                'id'          => 'services_page_form2_item',
                'label'       => 'Услуга',
                'desc'        => '',
                'type'        => 'text',
                'post_type'   => 'grandy_reviews',
                ),
                array(
                'id'          => 'services_page_form2_item_value',
                'label'       => 'Услуга - значение в форме(цифрами)',
                'desc'        => '',
                'type'        => 'text',
                'post_type'   => 'grandy_reviews',
                ),
            ),
      ),
      array(
          'id'          => 'services_page_form2',
            'label'       => 'Список услуг в форму 2блок',
            'desc'        => '',
            'std'         => '',
            'type'        => 'list-item',
            'condition'   => '',
            'settings'    => array( 
                array(
                'id'          => 'services_page_form1_item',
                'label'       => 'Услуга',
                'desc'        => '',
                'type'        => 'text',
                'post_type'   => 'grandy_reviews',
                ),
                array(
                'id'          => 'services_page_form1_item_value',
                'label'       => 'Услуга - значение в форме(по английски)',
                'desc'        => '',
                'type'        => 'text',
                'post_type'   => 'grandy_services_ind',
                ),
            ),
      ),
      array(
          'id'          => 'services_page_form3',
            'label'       => 'Список услуг в форму 3блок',
            'desc'        => '',
            'std'         => '',
            'type'        => 'list-item',
            'condition'   => '',
            'settings'    => array( 
                array(
                'id'          => 'services_page_form3_item',
                'label'       => 'Услуга',
                'desc'        => '',
                'type'        => 'text',
                'post_type'   => 'grandy_reviews',
                ),
                array(
                'id'          => 'services_page_form3_item_value',
                'label'       => 'Услуга - значение в форме(цифрами)',
                'desc'        => '',
                'type'        => 'text',
                'post_type'   => 'grandy_services_ind',
                ),
            ),
      ),
      
    )
  );
    
    $meta_box_reviews = array(
    'id'          => 'reviews_meta_box',
    'title'       => 'Настроки отзывов',
    'desc'        => '',
    'pages'       => array( 'grandy_reviews' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(      
      array(
        'label'       => 'Имя',
        'id'          => 'reviews_name',
        'type'        => 'text',
        'desc'        => ''
      ),
       array(
        'label'       => 'Профессия',
        'id'          => 'reviews_work',
        'type'        => 'text',
        'desc'        => ''
      ),
       array(
        'label'       => 'Дата',
        'id'          => 'reviews_date',
        'type'        => 'text',
        'desc'        => ''
      ),
      
    )
  );
    
    $meta_box_services_rep = array(
    'id'          => 'services_rep_meta_box',
    'title'       => 'Настроки улуг',
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(      
      array(
        'label'       => 'Id услуги',
        'id'          => 'services_rep_id',
        'type'        => 'text',
        'desc'        => ''
      ),
      
    )
  );
    
    
  
    
  
  $my_meta_box = array(
    'id'          => 'demo_meta_box',
    'title'       => __( 'Demo Meta Box', 'theme-text-domain' ),
    'desc'        => '',
    'pages'       => array( 'post' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      array(
        'label'       => __( 'Conditions', 'theme-text-domain' ),
        'id'          => 'demo_conditions',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Show Gallery', 'theme-text-domain' ),
        'id'          => 'demo_show_gallery',
        'type'        => 'on-off',
        'desc'        => sprintf( __( 'Shows the Gallery when set to %s.', 'theme-text-domain' ), '<code>on</code>' ),
        'std'         => 'off'
      ),
      array(
        'label'       => '',
        'id'          => 'demo_textblock',
        'type'        => 'textblock',
        'desc'        => __( 'Congratulations, you created a gallery!', 'theme-text-domain' ),
        'operator'    => 'and',
        'condition'   => 'demo_show_gallery:is(on),demo_gallery:not()'
      ),
      array(
        'label'       => __( 'Gallery', 'theme-text-domain' ),
        'id'          => 'demo_gallery',
        'type'        => 'gallery',
        'desc'        => sprintf( __( 'This is a Gallery option type. It displays when %s.', 'theme-text-domain' ), '<code>demo_show_gallery:is(on)</code>' ),
        'condition'   => 'demo_show_gallery:is(on)'
      ),
      array(
        'label'       => __( 'More Options', 'theme-text-domain' ),
        'id'          => 'demo_more_options',
        'type'        => 'tab'
      ),
      array(
        'label'       => __( 'Text', 'theme-text-domain' ),
        'id'          => 'demo_text',
        'type'        => 'text',
        'desc'        => __( 'This is a demo Text field.', 'theme-text-domain' )
      ),
      array(
        'label'       => __( 'Textarea', 'theme-text-domain' ),
        'id'          => 'demo_textarea',
        'type'        => 'textarea',
        'desc'        => __( 'This is a demo Textarea field.', 'theme-text-domain' )
      )
    )
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
  if ( function_exists( 'ot_register_meta_box' ) )
    ot_register_meta_box( $my_meta_box );
    ot_register_meta_box( $main_page );
    ot_register_meta_box($meta_box_reviews);
    ot_register_meta_box($meta_box_services_rep);
    
}