<?php 

//Chamar a tag title
function jess_title_tag(){
	add_theme_support('title-tag');

}

add_action('after_setup_theme', 'jess_title_tag');

//versão antiga
if(!function_exists('wp_render_title_tag')){
	function jess_render_title(){
		?>
		<title><?php wp_title('|', true, 'right'); ?></title>
		<?php
	}

	add_action('wp_head', 'jess_render_title');
}

//Definir as miniaturas dos posts
add_theme_support('post-thumbnails');
set_post_thumbnail_size(1280,720, true);

//Definir o tamanho do resumo
add_filter( 'excerpt_length', function($length){
	return 20;
});

//Estilo de paginação
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {

	return 'class="blog-pagination col-12"';
}

// Widgets dinâmicos
register_sidebar(
	array(
		'name' => 'Barra lateral',
		'id' => 'sidebar',
		'before_widget' => '<div class="card mb-4 col-md-4 col-xl-4 col-lg-4 sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	)
)

?>