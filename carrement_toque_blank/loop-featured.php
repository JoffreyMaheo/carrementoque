<section class="featured-posts">
  <?php
    $cat = get_category_by_slug('featured');
    $id = $cat->term_id;
    $args = array(
      'numberposts'      => 3,
      'category'         => $id,
    );
    $postsFeatured = get_posts($args);

    if ( $postsFeatured ) {
      foreach ( $postsFeatured as $post ) :
        setup_postdata( $post ); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <!-- post thumbnail -->
          <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class=picture>
              <?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
            </a>
          <?php endif; ?>
          <!-- /post thumbnail -->

          <div class="category-name">
            <?php the_category(' '); ?>
          </div>

          <div class="article-content">
            <!-- post title -->
            <h2>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h2>
            <!-- /post title -->

            <!-- post details -->
            <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
            <!-- /post details -->

            <?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

            <?php edit_post_link(); ?>
          </div>

        </article>
        <!-- /article -->

      <?php
        endforeach;
        wp_reset_postdata();
      }
    ?>

</section>
