<div class="border border-gray-200 mb-3 mb-lg-0 p-2 w-100 sport-nieuws">
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
              <img class="mr-2" src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" />

            <?php endif; ?>
            <small class="sidebar-small">
              <?php echo wp_trim_words( get_the_title(), 10 ); ?>
              <span class="time-and-date">
              <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?>
              </span>
            </small>

          </a>
        </li>
        <?php
      endwhile;
    endif;
    ?>
  </ul>
</div>

<div class="my-3">
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



<div class="my-3 border border-gray-200 mb-3 mb-lg-0 p-2 w-100 entertainment-nieuws d-none d-lg-block">
  <ul class="entertainment-item mt-1 list-group list-group-flush">
    <h5 class="text-uppercase">Entertainment</h5>
    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category_name' => 'entertainment',
      'posts_per_page' => 4,
    );
    $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <li class="list-group-item px-0 ">
          <a class="d-block d-flex align-items-center" href="<?php the_permalink(); ?>">
            <?php
            $image = get_field('cover_image');
            if( !empty($image) ): ?>
              <img class="mr-2" src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>

            <small class="sidebar-small">
              <?php echo wp_trim_words( get_the_title(), 10 ); ?>
              <span class="time-and-date">
              <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?>
            </span>
            </small>
            
          </a>
        </li>
        <?php
      endwhile;
    endif;
    ?>
  </ul>
</div>



<?php get_template_part( 'components/exposed' ); ?>



<div class="my-3 border border-gray-200 mb-3 mb-lg-0 p-2 w-100 video-nieuws">
  <ul class="video-item mt-1 list-group list-group-flush">
    <h5 class="text-uppercase">Marokko</h5>

    <?php
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'category_name' => 'toerisme','marokkogids',
      'posts_per_page' => 4,
    );
    $arr_posts = new WP_Query( $args );
    if ( $arr_posts->have_posts() ) :
      while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
        <li class="list-group-item px-0 ">
          <a class="d-block d-flex align-items-center" href="<?php the_permalink(); ?>">
            <?php
            $image = get_field('cover_image');
            if( !empty($image) ): ?>
              <img class="mr-2" src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>" />
            <?php endif; ?>

            <small class="sidebar-small">
              <?php echo wp_trim_words( get_the_title(), 10 ); ?>
              <span class="time-and-date">
              <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?>
            </span>
            </small>
            
          </a>
        </li>
        <?php
      endwhile;
    endif;
    ?>
  </ul>
</div>


<div class="my-3 p-3 border border-gray-200">
  <ins class="adsbygoogle"
  style="display:block"
  data-ad-client="ca-pub-7475749348053006"
  data-ad-slot="5185845556"
  data-ad-format="auto"
  data-full-width-responsive="true"></ins>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
  </script>

</div>



<div class="my-3 p-3 text-center w-100 nieuwsbrief bg-gray-200">
  <h5>Nieuwsbrief</h5>
  <small>Blijf op de hoogte van het nieuws en acties op MarocMagazine.</small><br/>
  <small>Geef hieronder je e-mail adres op:</small>
  <?php echo do_shortcode("[mc4wp_form id='2624']"); ?>
</div>




