<?php get_header(); ?>
<!-- Pse eshte page about 8 ,sepse id e faqes tek url about osht 8 , vetem nese e shfin ket faqe mundet
  me ndodh qe ky kod nuk funksionon, eshte unik per themes tende -->
	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
		
			
			<p><?php the_content(); ?></p>
            
			<h3><?php the_title(); ?></h3>
			
			<hr>
		
		<?php endwhile;
		
	endif;
			
	?>

<?php get_footer(); ?>