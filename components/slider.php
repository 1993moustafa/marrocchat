<div class="container container-slider mt-lg-0 pt-lg-0 px-lg-3">
  <div class="bg-white shadow-sm">
    <div class="row pt-lg-4 px-lg-4">
      <div class="col-12 col-lg-8 pr-lg-0">
        <div class="slider">

          <?php if( have_rows('slider', 'option') ): ?>
            <?php while( have_rows('slider', 'option') ): the_row();
              $image = get_sub_field('slider_image', 'option');
              $date = get_sub_field('slider_date', 'option');
              $title = get_sub_field('slider_title', 'option');
              $link = get_sub_field('slider_link', 'option');
              ?>
              <a href="<?php echo $link['url']; ?>" class="d-flex align-items-end">
                <div class="img d-block  d-flex align-items-end w-100" style="background-image:url('<?php echo $image; ?>');">
                  <h4><?php echo $title; ?></h4>
                </div>
              </a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-12 col-lg-4 slider-thumbnails">
        <div class="row mt-4 mt-lg-0">
          <div class="col-12 col-md-6 col-lg-12">
            <?php
            $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'category_name' => 'nieuwsflits',
              'orderby' => 'post_date',
              'posts_per_page' => 1,
            );
            $arr_posts = new WP_Query( $args );
            if ( $arr_posts->have_posts() ) :
              while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                <?php 
                $image = get_field('cover_image');
                if( !empty($image) ): ?>
                  <div class="hovai-demo-box-6 box-shadow padding-bottom">
                    <a href="<?php echo get_permalink(); ?>" class="d-block">
                      <div class="hovai-box-image-6">
                        <div class="playbutton"></div>
                        <img class="media img" src="<?php echo $image['url']; ?>">
                        <div class="p-2 bg-opacity w-100 small-title">
                          <?php echo wp_trim_words( get_the_title(), 5 ); ?>
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
              <?php endwhile; endif; ?>
            </div>

            <div class="col-12 col-md-6 col-lg-12">
              <?php
              $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => 'exposed',
                'posts_per_page' => 1,
              );
              $arr_posts = new WP_Query( $args );
              if ( $arr_posts->have_posts() ) :
                while ( $arr_posts->have_posts() ) :
                  $arr_posts->the_post();
                  ?>
                  <?php 
                  $image = get_field('cover_image');
                  if( !empty($image) ): ?>
                    <div class="hovai-demo-box-6 box-shadow padding-bottom">
                      <a href="<?php echo get_permalink(); ?>" class="d-block">
                        <div class="hovai-box-image-6">
                          <div class="playbutton"></div>
                          <img class="media img" src="<?php echo $image['url']; ?>">
                          <div class="p-2 bg-opacity w-100 small-title">
                            <?php echo wp_trim_words( get_the_title(), 5 ); ?>
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
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
          <div class="col-12 d-block d-lg-none">
            <ins class="adsbygoogle"
            style="display:block; text-align:center;"
            data-ad-layout="in-article"
            data-ad-format="fluid"
            data-ad-client="ca-pub-7475749348053006"
            data-ad-slot="5053472862"></ins>
            <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
           </script>
         </div>
       </div>
     </div>
   </div>
