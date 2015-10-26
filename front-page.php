<?php get_header(); ?>

<div class="wrapper">

	<div class="container">

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

	<?php if(is_sticky()) { ?> <!--checks if article is sticky and displays the below-->
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	
	<?php } else { ?> <!--if article isn't sticky then the format below will run-->

   		<article class="teaser">

    		<div class="thumbnail">
    			<a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {the_post_thumbnail('post-thumbnail'); } ?></a>

    		</div>
    		<div class="excerpt">		
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<?php the_excerpt(); ?>

			</div>		
		</article>
	<?php }	?>	
			
<?php endwhile; else: ?>

	<p><?php ( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

	</div> <!-- .container -->

</div> <!-- .wrapper -->

<?php get_footer(); ?>