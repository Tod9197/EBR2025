<?php  
// テーマのサポート機能を追加
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

// ギャラリーページの作成
function create_gallery_post_type(){
    register_post_type('gallery',
        array(
            'labels' => array(
                'name' => __('Gallery'),
                'singular_name' => __('Gallery item')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'taxonomies' => array('category','post_tag')
        )
    );
}
add_action('init', 'create_gallery_post_type');

// メディアライブラリ用のカスタムタクソノミーを作成
function add_media_category_taxonomy(){
    register_taxonomy(
        'media_category',
        'attachment',
        array(
            'label' => 'メディアカテゴリ',
            'hierarchial' => true,
            'rewrite' => array('slug' => 'media-category'),
        )
        );
}
add_action('init','add_media_category_taxonomy');
?>