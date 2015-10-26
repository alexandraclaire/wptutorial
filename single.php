<?php get_header(); ?>

<div class="wrapper">

	<div class="container single">

		<main>

		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

    		<article>

				<h2><?php the_title(); ?></h2>
				<small><?php the_date(); ?></small>

				<p>Article by <?php the_author_meta('first_name'); ?></p>

				<p><?php the_author_meta('description'); ?></p>
				
				<?php the_content(); ?>

			</article>
			
			<?php endwhile; else: ?>

				<p><?php ( 'Sorry, no posts matched your criteria.' ); ?></p>

			<?php endif; ?>
			<ul>    <!--this makes a share this article link. You could add icon-->          
            	<li><a target="_blank" href="https://twitter.com/intent/tweet?&amp;url=<?php the_permalink(); ?>">Tweet</a></li>
            	<li><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>">Share</a></li>
            	<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Share</a></li>
            	<li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>">Share</a></li>
        	</ul>

			<h3>Comments</h3>

				<?php comments_template(); ?>

		</main>

		<div class="secondary">

			<?php dynamic_sidebar('Aside'); ?> <!--pulling in widget sidebar-->

		</div><!--/secondary-->
	</div> <!-- .container -->

</div> <!-- .wrapper -->

<?php get_footer(); ?>