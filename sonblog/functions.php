
 

<?php
 
function my_wp_scripts() {
wp_enqueue_style('bootstrap',
sprintf('%s/assets/css/bootstrap.min.css', get_template_directory_uri()));
wp_enqueue_style('style', get_stylesheet_uri());
wp_enqueue_script('bootstrap',
sprintf('%s/assets/css/bootstrap.min.js', get_template_directory_uri()), array('jquery'),null,true);
}
 
add_action('wp_enqueue_scripts','my_wp_scripts');
 
add_theme_support('post-thumbnails');
set_post_thumbnail_size(120,150);
 
/* CRIAÇÃO DE CUSTOM POST TYPES */
 
function theme_blog_post_type_jogos() {
$labels=array(
'name' => "Jogos",
'singular_name' => "Jogo",
'add_new' => "Adicionar Novo Jogo",
'add_new_label' => "Adicionar Novo Jogo",
'all_item' => "Todos os jogos",
'add_new_item' => "Adicionar Novo Jogo",
'edit_item' => "Adicionar Novo Jogo",
'new_item' => "Novo Jogo",
'view_item' => "Visualizar Jogo",
'search_item' => "Procurar Jogo",
'not_found' => "Nenhum Jogo Encontrado",
'not_found_in_trash' => "Nenhum Jogo Na Lixeira"
    );
 
$args=array(
 
'labels' => $labels,
'public' => true,
'has_archive' => true,
'publicly_queryable' => true, 
'query_var' => true,
'rewrite' => true,
'capability_type' => 'post',
'supports' => array (
'title','editor','thumbnail','excerpt'
        ),
'menu_position' => 5,
'exclude_from_search' => false
    );
 
register_post_type('jogos',$args);
 
}
 
add_action('init','theme_blog_post_type_jogos');

    

function theme_blog_taxonomias() {

// Taxonomia hierarquica, que possui pai/filho - Gêneros
 
$labels=array(
'name' => "Gêneros",
'singular_name' => "Gênero",
'search_item' => "Procurar Gênero",
'all_items' => "Todos os Gêneros",
'parent_item' => "Gênero Pai",
'parent_item_colon' => "Gênero Pai",
'edit_item' => "Editar Gênero",
'update_item' => "Atualizar Gênero",
'add_new_item' => "Adicionar Novo Gênero",
'new_item_name' => "Novo Gênero",
'menu_name' => "Gênero"
    );
 
$args=array(
'hierarchical' => true,
'labels' => $labels,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array("slug"=>"generos")
    );

register_taxonomy('genero','jogos',$args);

//taxonomia nao hierarquica -diretores
$labels=array(
'name' => "Diretores",
'singular_name' => "Diretor",
'search_item' => "Procurar Diretor",
'all_items' => "Todos os Diretores",
'parent_item' => "Diretor Pai",
'parent_item_colon' => "Diretor Pai",
'edit_item' => "Editar Diretor",
'update_item' => "Atualizar Diretor",
'add_new_item' => "Adicionar Novo Diretor",
'new_item_name' => "Novo Diretor",
'menu_name' => "Diretor"
    );
 
$args=array(
'hierarchical' => false,
'labels' => $labels,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array("slug"=>"diretores")
    );
register_taxonomy('diretores','jogos',$args);

}
 
add_action('init','theme_blog_taxonomias');


 
function theme_blog_post_type_filmes() {
$labels=array(
'name' => "Filmes",
'singular_name' => "Filme",
'add_new' => "Adicionar Novo Filme",
'add_new_label' => "Adicionar Novo Filme",
'all_item' => "Todos os filmes",
'add_new_item' => "Adicionar Novo Filme",
'edit_item' => "Adicionar Novo Filme",
'new_item' => "Novo Filme",
'view_item' => "Visualizar Filme",
'search_item' => "Procurar Filme",
'not_found' => "Nenhum Filme Encontrado",
'not_found_in_trash' => "Nenhum Filme Na Lixeira"
    );
 
$args=array(
 
'labels' => $labels,
'public' => true,
'has_archive' => true,
'publicly_queryable' => true, 
'query_var' => true,
'rewrite' => true,
'capability_type' => 'post',
'supports' => array (
'title','editor','thumbnail','excerpt'
        ),
'menu_position' => 6,
'exclude_from_search' => false
    );
 
register_post_type('filmes',$args);
 
}
 
add_action('init','theme_blog_post_type_filmes');
 

function theme_blog_taxonomias_filmes() {
    
    // Taxonomia hierarquica, que possui pai/filho - Gêneros
 
    $labels = array(
        'name' => "Estilos",
        'singular_name' => "Estilo",
        'search_item' => "Procurar Estilo",
        'all_items' => "Todos os Estilos",
        'parent_item' => "Estilo Pai",
        'parent_item_colon' => "Estilo Pai",
        'edit_item' => "Editar Estilo",
        'update_item' => "Atualizar Estilo",
        'add_new_item' => "Adicionar Novo Estilo",
        'new_item_name' => "Novo Estilo",
        'menu_name' => "Estilo"
    );
 
    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array("slug"=>"estilos")
    );
    
    register_taxonomy('estilo', 'filmes', $args);
}
 
add_action('init', 'theme_blog_taxonomias_filmes');
 


 
 
 
?>
