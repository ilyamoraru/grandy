<?php
// Register Custom Post Type
function custom_post_type_reviews() {

	$labels = array(
		'name'                  => 'Отзывы',
		'singular_name'         => 'Отзыв',
		'menu_name'             => 'Отзывы',
		'add_new_item'          => 'Добавить новый',
		'add_new'               => 'Добавить новую',
		'new_item'              => 'Новый',
		'edit_item'             => 'Редактировать',
		'update_item'           => 'Обновить',
		'view_item'             => 'Просмотр',
		'view_items'            => 'Посмотреть все',

	);
	$rewrite = array(
		'slug'                  => 'reviews',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => 'Отзыв',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-comments',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'grandy_reviews', $args );

}
add_action( 'init', 'custom_post_type_reviews', 0 );
?>