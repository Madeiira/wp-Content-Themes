<?php get_header(); 	  ?> 
 <?php// get_header('personalizado'); ?> 
 <div class="container"> 
 <h2>       	Posts Recentes  </h2>
   <div class="row">  
     <div class="col-md-6"> <!-- Tamanho máximo 12 !-->
    		<?php 
			 if(have_posts()):
			 	echo'<ul class="media-list">';
				while(have_posts()): the_post();
					$image = '';
					if(has_post_thumbnail()){ //Pegando Thumbnail
					$image = sprintf('<div class="media-left"> <a href="%s">%s</a> </div>',
					get_the_permalink(),get_the_post_thumbnail()); //reference %s , %s
					} 
					$body = sprintf('<div class="media-body"><h3 media-heading><a href="%s">%s</a> </h3><p>%s </p></div>',
					get_the_permalink(),get_the_title(), get_the_content('Continue lendo....')); 
					
					printf('<li class="media">%s%s</li>', $body, $image); //Post:%s, title:%s, content: %s pode ser mudado por uma template tag  $post->ID $post->post_title  $post->post_content
					
				endwhile;
			 else:
			 	echo"<p>Ainda não tem posts</p>";
			endif
			?>
            
	  </div>
     <div class="col-md-6"> <!-- tamanho max 12 !-->
      <?php get_sidebar(); ?>
     </div>
	</div>
 </div>

 <?php get_footer(); ?> 
  <?php// get_footer('personalizado');// ?> 	