<?php get_header(); ?>

<div class="wrapper">

	<div class="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="content">

				<?php the_content(); ?>

			</article>

		<?php endwhile; ?>

	</div> <!-- .container -->

</div> <!-- .wrapper -->

<?php get_footer(); ?>