<?php  /* Template Name: Exposed template */ ?>
<?php get_header(); ?>
<div class="container exposed-container mt-3 mt-lg-0 px-lg-3">
  <div class="bg-white shadow-none shadow-sm pb-4">
    <div class="row pt-lg-4 px-lg-4">
      <div class="col-12 col-lg-8">
        <h1><?php the_title(); ?></h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
      </div>
      <div class="col-12 col-lg-4 mb-4">
        <!-- Ondersport -->
        <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-7475749348053006"
        data-ad-slot="3516906200"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </div>
    </div>
    <div class="row pt-lg-4 px-lg-4">
      <?php
      $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
      $args = array(
        'post_type' => 'post',
        'category__in' => wp_get_post_categories($post->ID), 
        'post__not_in' => array($post->ID),
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'paged' => $paged,
      );
      $arr_posts = new WP_Query( $args );
      if ( $arr_posts->have_posts() ) :
        while ( $arr_posts->have_posts() ) :
          $arr_posts->the_post();
          ?>
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <a class="d-block" href="<?php the_permalink() ?>">
              <div class="card rounded-0">
                <?php 
                $image = get_field('cover_image');
                if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" class="img-fluid w-100" alt="<?php the_title(); ?>">
                <?php endif; ?>

                <div class="card-body border-0">
                  <h5 class="card-title m-0"><?php the_title(); ?></h5>
                  <div class="tags mt-3">
                    <small>
                      <?php the_tags( '<span class="float-left mr-1">Beroep:</span><ul class="list-inline m-0"><li class="list-inline-item">', '</li><li class="list-inline-item">', '</li></ul>' ); ?>
                    </small>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <?php
        endwhile;
        echo '<div class="col-12 text-center mb-4">';
        wp_pagenavi( array( 'query' => $arr_posts, ));
        echo '</div>';
      endif;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>