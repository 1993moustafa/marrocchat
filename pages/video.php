<?php  /* Template Name: Video template */ ?>
<?php get_header();?>
<div class="container page-container mt-3 mt-lg-0 px-lg-3">
  <div class="bg-white shadow-none shadow-sm pb-4">
    <div class="row pt-lg-4 px-lg-4">
      <div class="col-12">
        <h1><?php the_title(); ?></h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
          the_content();
        endwhile; else: ?>
        <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
    </div>
  </div>
  <div class="row pt-lg-4 px-lg-4 news">

    <?php
global $post;
$args = array( 
  'posts_per_page' => 3, 
  'orderby' => 'publish_date',
  'offset'=> 0, 
  'cat_ID' => 2729,
  'category_name' => 'nieuwsflits',
);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : 
  setup_postdata( $post ); 
  ?>
      <div class="col-12 col-lg-4 d-flex align-items-stretch nieuws-inbeeld mb-4">
        <a class="d-flex align-items-stretch w-100" href="<?php the_permalink() ?>">
        <div class="news-card  w-100 card rounded-0">
          <?php 
          $image = get_field('cover_image');
          if( !empty($image) ): ?>
            <div class="play-button"></div>
            <img src="<?php echo $image['url']; ?>" class="card-img-top card-video rounded-0" alt="<?php the_title(); ?>">
          <?php endif; ?>

          <div class="card-body">
            <h5 class="card-title m-0 h-auto"><?php the_title(); ?></h5>
          </div>
          <small class="p-3 text-muted d-flex align-items-center">
              <i class="material-icons mr-2">calendar_today</i> <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?>
            </small>
        </div>
        </a>
      </div>
      <?php endforeach;
wp_reset_postdata(); ?>
    <div class="col-6 col-lg-3 mt-4">
      <a href="/nieuwsflits" class="btn btn-outline-tall-poppy" role="button">bekijk meer</a>
    </div>
  </div>

  <div class="row pt-lg-4 px-lg-4 ">
      <div class="col-12">
      <ins class="adsbygoogle"
      style="display:block;"
      data-ad-client="ca-pub-7475749348053006"
      data-ad-slot="5185845556"
      data-ad-format="auto"
      data-full-width-responsive="true"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
  </div>

  <?php
  $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
  $args = array(
    'post_type' => 'post',
    'category__in' => wp_get_post_categories($post->ID), 
    'post__not_in' => array($post->ID),
    'post_status' => 'publish', 
    'posts_per_page' => 4,
    'paged' => $paged,
  );
  $arr_posts = new WP_Query( $args );
  if ( $arr_posts->have_posts() ) :
    while ( $arr_posts->have_posts() ) :
      $arr_posts->the_post();
      ?>

      <div class="row pt-lg-4 px-lg-4">
        <div class="col-12 col-sm-4 pr-lg-0">
          <?php 
          $image = get_field('cover_image');
          if( !empty($image) ): ?>
            <div class="hovai-demo-box-6 box-shadow padding-bottom">
              <a href="<?php the_permalink() ?>" class="d-block news-href h-100">
                <div class="hovai-box-image-6">
                  <div class="media img" style="background-image: url('<?php echo $image['url']; ?>');">
                  </div>
                </div>
                <div class="hovai-box-details-6">
                  <div class="tabel">
                    <div class="tabel-cell">
                      <small><?php the_title(); ?></small> 
                    </div>
                  </div>
                </div>
              </a>

              <div class="hovai-box-social-6">
                <div class="tabel">
                  <div class="tabel-cell">
                    <a href="whatsapp://send?text=<?php echo ($title .''. $url);?>">
                      <span class="icon whatsapp">
                        <img src="<?php bloginfo('template_url'); ?>/asset/images/whatsapp-hover.svg" alt="Whatsapp">
                      </span>
                    </a>
                    <a href="JavaScript:newPopup('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>');">
                      <span class="icon facebook">
                        <img src="<?php bloginfo('template_url'); ?>/asset/images/facebook-hover.svg" alt="Facebook">
                      </span>
                    </a>
                    <a href="JavaScript:newPopup('http://twitter.com/home?status=Reading:<?php the_permalink(); ?>');">
                      <span class="icon twitter">
                        <img src="<?php bloginfo('template_url'); ?>/asset/images/twitter-hover.svg" 
                        alt="Twitter">
                      </span>
                    </a>
                    <a href="JavaScript:newPopup('https://plus.google.com/share?url=<?php the_permalink(); ?>');">
                      <span class="icon google-plus">
                        <img src="<?php bloginfo('template_url'); ?>/asset/images/googleplus-hover.svg" alt="Google Plus">
                      </span>
                    </a>
                  </div>
                </div> 
              </div>
            </div>
          <?php endif; ?>
        </div>
        <div class="col-12 col-sm-8 h-auto">
          <a href="<?php the_permalink() ?>" class="d-block news-href h-100">
            <div class="media-body news-media h-100 p-3">
              <h5 class="mt-0"><?php the_title(); ?></h5>
              <p class="mb-3 float-left">
                <?php echo wp_trim_words (the_excerpt(), 1, '...' ); ?>
              </p>

              <div class="clearfix">
                <small class="d-flex readmore align-items-center float-left">
                  <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                </small>
                <small class="date d-flex align-items-center float-right">
                  <i class="material-icons mr-2">calendar_today</i> <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?>
                </small>
              </div>
            </div>
          </div>
        </a>
      </div>
      <hr>
      <?php
    endwhile;
    echo '<div class="text-center mb-4">';
    wp_pagenavi( array( 'query' => $arr_posts, ));
    echo '</div>';
  endif;
  ?>

  <div class="col-12">
      <ins class="adsbygoogle"
      style="display:block;"
      data-ad-client="ca-pub-7475749348053006"
      data-ad-slot="5185845556"
      data-ad-format="auto"
      data-full-width-responsive="true"></ins>
      <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>

</div>
</div>
</div>
<?php get_footer();?>