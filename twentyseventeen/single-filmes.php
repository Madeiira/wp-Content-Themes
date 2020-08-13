 

<?php get_header();?>
<div class="container">
 <h1><?php single_post_title(); ?></h1>
    <div class="row">
        <di vclass="col-md-9">
<?php
if(have_posts()): the_post();
the_post_thumbnail('medium');
the_content();
echo"<br/>";

echo"Estilo: ";
$id=get_the_id();
$termos=wp_get_post_terms($id,'estilo');
 
foreach ($termos as $termo) {
$link=get_term_link($termo);

echo"<a href='$link'>".$termo->name."</a> <br /> > ";
 
 
   
   echo'<br /><h4>Lançamento:'; the_field('ano_de_producao');
   echo'<br /><h4> Produtor:'; the_field('produtor');
   echo'<br /><h4> Valor De Produção R$:';the_field('valor_de_producao'); echo'.00';
   echo'<br />';
                }
 
endif;
?>
        </div>
        <div class="col-md-3">
<?php get_sidebar(); ?>
        </div>
    </div>
</div>
 
<?php get_footer(); ?>

