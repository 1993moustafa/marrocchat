<?php get_header(); ?>
<div class="container page-container mt-3 mt-lg-0 px-lg-3">
  <div class="bg-white shadow-none shadow-sm">
    <div class="row pt-lg-4 px-lg-4">
      <div class="col-12 col-lg-8 pr-lg-0 order-2 order-lg-1 mt-5 mt-lg-0">
        <div class="row my-4">
          <div class="col-12"><h1><?php the_title(); ?></h1></div>
          <div class="col-12">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
            endwhile; else: ?>
            <p>Sorry, no posts matched your criteria.</p>
          <?php endif; ?>
        </div>
      </div>
      <div class="my-3 text-center w-100 d-block d-lg-none">
        <ins class="adsbygoogle"
        style="display:block; text-align:center;"
        data-ad-layout="in-article"
        data-ad-format="fluid"
        data-ad-client="ca-pub-7475749348053006"
        data-ad-slot="5053472862"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
      </div>
      <?php
      $paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
      $args = array(
        'post_type' => 'post',
        'category__in' => wp_get_post_categories($post->ID),
        'post__not_in' => array($post->ID),
        'post_status' => 'publish',
        'posts_per_page' => 12,
        'paged' => $paged,
      );
      $arr_posts = new WP_Query( $args );
      if ( $arr_posts->have_posts() ) :
        while ( $arr_posts->have_posts() ) :
          $arr_posts->the_post();
          ?>
          <div class="row mb-2">
            <div class="col-12 col-sm-4 pr-lg-0">
              <?php
              $image = get_field('cover_image');
              if( !empty($image) ): ?>
                <div class="hovai-demo-box-6 box-shadow padding-bottom">
                  <a href="<?php the_permalink() ?>" class="d-block news-href h-100">
                    <div class="hovai-box-image-6">
                      <img class="media img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>">
                      />
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
                        <a href="JavaScript:newPopup('https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>');">
                          <span class="icon linkedin">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0v24h24v-24h-24zm8 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.397-2.586 7-2.777 7 2.476v6.759z"/></svg>
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
    </div>
    <div class="col-12 col-lg-4 order-lg-2 d-none d-lg-block mb-3">
      <?php get_sidebar(); ?>
      <div class="my-3 text-center w-100">
        <ins class="adsbygoogle"
        style="display:block; text-align:center;"
        data-ad-layout="in-article"
        data-ad-format="fluid"
        data-ad-client="ca-pub-7475749348053006"
        data-ad-slot="8888463408"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
      </div>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
