<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Awesome Theme</title>
		<?php wp_head(); ?>
	</head>
	
	<?php 
		
		if( is_front_page() ):
			$awesome_classes = array( 'awesome-class', 'my-class' );
		else:
			$awesome_classes = array( 'no-awesome-class' );
		endif;
		
	?>
	
	<body <?php body_class( $awesome_classes ); ?>>

	    <div class="container">
			<div class="row">
		 <div class="col-xs-12">
		  <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="container-fluid">
         <a class="navbar-brand" href="#"> Awesome Theme </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
           <?php  
             wp_nav_menu(array(
               'theme_location' => 'primary',
               'container' => false,
               'menu_class' => 'navbar-nav ms-auto'
             )); 
           ?>
         </div>
       </div>
     </nav>

				</div>
				
			</div>
		<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />