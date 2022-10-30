<?php //Template Name:Full-Width Page With Row
get_header(); 
get_template_part('breadcrums'); ?>
<div class="row enigma_blog_wrapper">
	<div class="col-md-12">
		<?php get_template_part('template-parts/post','page'); ?>	
	</div>		
</div>
<?php get_footer(); ?>