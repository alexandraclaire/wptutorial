<?php get_header(); ?>

<div class="wrapper">

	<div class="container" id="single">

		<main>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    		<article>

				<h2><?php the_title(); ?></h2>
				<small><?php the_date(); ?></small>

				<?php the_content(); ?>

			</article>
			
			<?php endwhile; else: ?>

				<p><?php ( 'Sorry, no posts matched your criteria.' ); ?></p>

			<?php endif; ?>

				<?php comments_template(); ?>

		</main>

		<div class="secondary">

			<?php dynamic_sidebar('Aside'); ?> <!--pulling in widget sidebar-->

		</div><!--/secondary-->
	</div> <!--/container -->

</div> <!--/wrapper -->

<?php get_footer(); ?>