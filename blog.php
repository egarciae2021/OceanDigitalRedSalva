


<section class="py-5 bg-soft-secondary">
	<div class="container py-4">
		<h2 class="text-center text-primary pb-3">Nuestro BLOG</h2>
		<div class="row">
			<div class="col-md-8">
				<?php
		            // Define el contenido con shortcode1
		            $shortcode1_content = "[posthome]";
		            
		            // Ejecuta shortcode1 utilizando la función do_shortcode()
		            echo do_shortcode($shortcode1_content);
		            ?>
			</div>
			<div class="col-md-4">
				
				<?php
		            // Define el contenido con shortcode1
		            $shortcode2_content = "[posthome2]";
		            
		            // Ejecuta shortcode2 utilizando la función do_shortcode()
		            echo do_shortcode($shortcode2_content);
		            ?>
			</div>
			<div class="col-12">
				<?php
		            // Define el contenido con shortcode1
		            $shortcode3_content = "[postfooter]";
		            
		            // Ejecuta shortcode3 utilizando la función do_shortcode()
		            echo do_shortcode($shortcode3_content);
		            ?>
			</div>
		</div>
	</div>
</section>