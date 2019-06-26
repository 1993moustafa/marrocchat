<div class="bg-satin-linen waar-gebeurd-verhaal my-3 p-3 w-100 d-none d-lg-block">
  <h3>Exposed</h3>
     <?php
     $args = array(
      'post_type' => 'post',
      'offset' => 1,
      'post_status' => 'publish',
      'category_name' => 'exposed',
      'posts_per_page' => 4,
    );
     $arr_posts = new WP_Query( $args );
     if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <a class="media-cta" href="<?php the_permalink(); ?>">
          <div class="media mb-3">
           <?php
           $image = get_field('cover_image');
           if( !empty($image) ): ?>
            <img class="mr-3 img-fluid" src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" />
          <?php endif; ?>
          <div class="media-body">
            <small>
              <?php
              $excerpt= get_the_excerpt();
              echo substr($excerpt, 0, 70);
              echo "...";
              ?>
            </small>
          </div>
        </div>
      </a>
      <?php
    endwhile;
  endif;
  ?>
</div>
<div class="cutpaper d-none d-lg-block"></div>
