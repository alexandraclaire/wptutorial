<?php get_header(); ?>


	<div class="container" id="home">
		<div class="jumbotron">
  			

		</div><!--/jumbotron-->
      <div class="row">
                <!--right-->
          <?php 
          /*
            Start with variables to help with row creation;
          */
            $startRow = true;
            $postCounter = 0;
          ?>
          <?php
          /*
            Start the loop
          */
            if (have_posts()) : while (have_posts()) : the_post();  
          ?>

            <?php
            /*
              Check whether we need to add the start of a new row.
              If true, echo a div with the "row" class and set the startRow variable to false 
              If false, do nothing. 
            */
            if ($startRow) {
              echo '<!-- START OF INTERNAL ROW --><div class="row">';
              $startRow = false;
            }  
            ?>
            <?php
            /* Add one to the counter because a new post is being added to your page.  */ 
              $postCounter += 1; 
            ?>
            <!-- This div serves as the template for each post returned within the loop -->
            <div class="col-xs-12 col-sm-4">
              <article class="post blog-post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="post-info">
                  <p class="post-summary"><?php the_excerpt(); ?></p>
                </div><!--/post-info-->
              </article>
            </div>
            <?php 
            /*
            Check whether the counter has hit 3 posts.  
            If true, close the "row" div.  Also reset the $startRow variable so that before the next post, a new "row" div is being created. Finally, reset the counter to track the next set of three posts.
            If false, do nothing. 
            */
            if ( 3 === $postCounter ) {
                echo '</div><!-- end of internal row -->';
                $startRow = true;
                $postCounter = 0;
            }
            ?>
            <?php 
            /* END THE WHILE LOOP*/
            endwhile;
            ?>
            <?php 
            /* If you are returning an odd number of posts (i.e., anything other than a multiple of 3), we will need to close the row div.*/
            if ($postCounter !== 0 ) {
              echo '</div><!-- END OF INTERNAL ROW -->';
            }
            ?>
            <?php else:  ?>
              <div class="page-header"><h1>Uh Oh!</h1></div>
              <p>Sorry, for some reason the contents of this page aren't displaying.</p>
            <?php endif; ?>
      </div><!--/row-->


		

	</div> <!--/container-fluid -->


<?php get_footer(); ?>
