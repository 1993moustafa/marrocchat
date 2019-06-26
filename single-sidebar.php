<div class="my-3 border border-gray-200 mb-3 mb-lg-0 p-2 w-100 sport-nieuws">
  <ul class="top-item mt-1 list-group list-group-flush">
    <h5 class="text-uppercase">SPORT</h5>
    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category_name' => 'sport-nieuws',
      'posts_per_page' => 4,
    );
    $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <li class="list-group-item px-0 ">
          <a href="<?php the_permalink(); ?>" class="d-block d-flex align-items-center">
            <?php
            $image = get_field('cover_image');
            if( !empty($image) ): ?>


              <amp-img
              class="mr-2"
              src="<?php echo $image['url']; ?>"
              srcset="<?php echo $image['url']; ?> 640w,
              <?php echo $image['url']; ?> 320w"
              width="50"
              height="50"
              layout="responsive"
              alt="<?php the_title(); ?>">
            </amp-img>
          <?php endif; ?>
          <small class="sidebar-small">
            <?php
            $excerpt= get_the_excerpt();
            echo substr($excerpt, 0, 70);
            echo "...";
            ?>
          </small>
        </a>
      </li>
      <?php
    endwhile;
  endif;
  ?>
</ul>
</div>

<div class="my-3 text-center w-100">
  <ins class="adsbygoogle"
  style="display:block"
  data-ad-client="ca-pub-7475749348053006"
  data-ad-slot="5185845556"
  data-ad-format="auto"
  data-full-width-responsive="true"></ins>
</div>

<div class="my-3 border border-gray-200 mb-3 mb-lg-0 p-2 w-100 video-nieuws">
  <ul class="video-item mt-1 list-group list-group-flush">
    <h5 class="text-uppercase">Marokko</h5>

    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category_name' => 'video-nieuws',
      'posts_per_page' => 4,
    );
    $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <li class="list-group-item px-0 ">
          <a class="d-block d-flex align-items-center" href="<?php the_permalink(); ?>">
            <i class="material-icons mx-auto position-absolute">
              play_circle_outline
            </i>

            <?php
            $image = get_field('cover_image');
            if( !empty($image) ): ?>


             <amp-img
              class="mr-2"
              src="<?php echo $image['url']; ?>"
              srcset="<?php echo $image['url']; ?> 640w,
              <?php echo $image['url']; ?> 320w"
              width="50"
              height="50"
              layout="responsive"
              alt="<?php the_title(); ?>">
            </amp-img>

            <?php endif; ?>

            <small class="sidebar-small">
              <?php
              $excerpt= get_the_excerpt();
              echo substr($excerpt, 0, 70);
              echo "...";
              ?>
            </small>
          </a>
        </li>
        <?php
      endwhile;
    endif;
    ?>
  </ul>
</div>
