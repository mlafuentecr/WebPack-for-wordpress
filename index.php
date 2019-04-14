<?php


    get_header();
        $featurePost  = get_field('feature_article',6);
        $havesidebar  = get_field('havesidebar',6);
        $banner       = get_field('banner',6);
        $size         = 'full'; // (thumbnail, medium, large, full or custom size)


?>

    <!-- Content
    -------------------------------------------------------->
    <div class="container col-lg-12">

         <div class="row section">
            <?php if ( is_active_sidebar( 'sidebar' ) ) { ?>  <div class="col-9 a"> <?php } else{ ?> <div class="col-12"> <?php } ?>

                <?php
                  if( $featurePost ):
                	$post = $featurePost;
                	setup_postdata( $post );
                	?>

                    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    	<span>Post Object Custom Field: <?php the_field('field_name'); ?></span>

                    <?php
                    wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
                    endif;


                    if ( have_posts() ) :
                        // Start the Loop.
                        while ( have_posts() ) : the_post();

                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );

                        endwhile;
                            posts_nav_link();

                    else :
                        // If no content, include the "No posts found" template.
                        get_template_part( 'content', 'none' );

                    endif;
                        //get comment template
                        comments_template();
                ?>

            </div>



            <?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
              <div class="col-3  sideBar hidden-sm-down ">
                  <?php get_sidebar('sidebar'); ?>
              </div>
            <?php } ?>


        </div> <!--row group-->

    </div> <!--container -->

<?php
    get_footer();
?>
