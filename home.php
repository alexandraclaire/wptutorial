<?php get_header(); ?>


	<div class="container" id="home">
		<div class="jumbotron">
    <h1><?php echo get_bloginfo ( 'description' );  ?></h1>
  	 <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" id="banner"
          viewBox="0 0 960 560" style="enable-background:new 0 0 960 560;" xml:space="preserve">
        <style type="text/css">
          .st0{fill:#595858;stroke:#595858;stroke-miterlimit:10;}
          .st1{fill:#F7F7F7;stroke:#F7F7F7;stroke-miterlimit:10;}
          .st2{fill:#BFBBBB;stroke:#898888;stroke-miterlimit:10;}
          .st3{fill:#E2D9D9;stroke:#898888;stroke-miterlimit:10;}
          .st4{fill:#898888;stroke:#898888;stroke-miterlimit:10;}
          .st5{fill:#F2F0F0;stroke:#F2F0F0;stroke-miterlimit:10;}
          .st6{fill:#BFBBBB;stroke:#BFBBBB;stroke-miterlimit:10;}
          .st7{fill:#F4EFEF;stroke:#F4EFEF;stroke-miterlimit:10;}
        </style>
        <g id="Layer_7">
        </g>
        <g id="Layer_1">
        </g>
        <g id="Layer_2">
        </g>
        <g id="Layer_3">
          <g>
            <path class="st0" d="M465.5,413.5c0,0,1,12.5,0,16.5c-1.2,4.8-9,17.5-9,17.5H533c0,0-6.4-10.8-7.5-14.8c-1.2-4.7-1-19.2-1-19.2
              H465.5z"/>
            <path class="st0" d="M617.1,235.5H372.7c-6.2,0-11.2,5-11.2,11.2v162.2c0,6.9,5.6,12.6,12.6,12.6h244.2c5.7,0,10.2-4.6,10.2-10.2
              V246.9C628.5,240.6,623.4,235.5,617.1,235.5z"/>
            <rect x="371.5" y="245.5" class="st1" width="247" height="154"/>
          </g>
        </g>
        <g id="Layer_4">
          <ellipse class="st2" cx="204.1" cy="399" rx="8.9" ry="8.5"/>
          <ellipse class="st3" cx="208.1" cy="399" rx="8.9" ry="8.5"/>
        </g>
        <g id="Layer_6">
        </g>
        <g id="Layer_5">
          <g>
            <path class="st4" d="M697.5,260v88v71v2c0,3,2.5,5.5,5.5,5.5h75c3,0,5.5-2.5,5.5-5.5V254l0,0c0-3-2.5-5.5-5.5-5.5h-75.3
              c-3.1,0-5.6,2.6-5.5,5.7L697.5,260z"/>
            <ellipse class="st2" cx="740.1" cy="411" rx="8.9" ry="8.5"/>
            <polygon class="st5" points="705.5,263.5 705.5,299.5 705.5,353.1 705.5,397.5 774.5,397.5 774.5,263.5    "/>
          </g>
          <g>
            <path class="st4" d="M116.5,232.5v211.4c0,8.6,7,15.6,15.6,15.6h146.8c8.1,0,14.7-6.6,14.7-14.7V231.3c0-8.2-6.6-14.8-14.8-14.8
              H132.5C123.7,216.5,116.5,223.7,116.5,232.5z"/>
            <ellipse class="st6" cx="202.9" cy="445.7" rx="8.1" ry="7.7"/>
            <rect x="128.5" y="232.5" class="st7" width="154" height="200"/>
          </g>
        </g>
        <g id="Layer_8">
        </g>
        </svg>

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
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69352404-1', 'auto');
  ga('send', 'pageview');

</script>


<?php get_footer(); ?>
