<?php get_header();?>
<div class="container page-container mt-3 mt-lg-0 px-lg-3">
  <div class="bg-white shadow-none shadow-sm">
    <div class="row pt-lg-4 px-lg-4">
      <div class="col-12">
        <div class="row mb-4">
          <div class="col-12">
              <h3><?php single_tag_title(__('Tag:&nbsp;'), true); ?></h3>
          </div>
        </div>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <div class="row mb-4">
              <div class="col-12 col-sm-4">
                <?php 
                $image = get_field('cover_image');
                if( !empty($image) ): ?>
                  <div class="hovai-demo-box-6 box-shadow padding-bottom">
                    <a href="<?php the_permalink() ?>" class="gids-href d-block" title="<?php the_title(); ?>">
                      <div class="hovai-box-image-6">
                        <div class="media img" title="<?php the_title(); ?>" style="background-image: url('<?php echo $image['url']; ?>');">
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
                        <a href="whatsapp://send?text=<?php echo ($title ." ". $url);?>">
                          <span class="icon whatsapp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
                          </span>
                        </a>
                        <a href="JavaScript:newPopup('http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>');">
                          <span class="icon facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                          </span>
                        </a>
                        <a href="JavaScript:newPopup('http://twitter.com/home?status=Reading:<?php the_permalink(); ?>');">
                          <span class="icon twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                          </span>
                        </a>
                        <a href="JavaScript:newPopup('https://plus.google.com/share?url=<?php the_permalink(); ?>');">
                          <span class="icon google-plus">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 24 24"><path d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
                          </span>
                        </a>
                      </div>
                    </div> 
                  </div>
                </div>
              <?php endif; ?>
            </div>

            <div class="col-12 col-sm-8 h-auto">
              <a href="<?php the_permalink() ?>" class="d-block news-href h-100" title="<?php the_title(); ?>">
                <div class="media-body news-media h-100 p-3 h-100">
                  <h6 class="mt-0"><?php the_title(); ?></h6>
                  <?php echo wp_trim_words (the_excerpt(), 1, '...' ); ?>
                  <div class="clearfix mt-4">
                    <small class="d-flex readmore align-items-center float-left">
                      <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                    </small>
                    <small class="date d-flex align-items-center float-right">
                      <i class="material-icons mr-2">calendar_today</i> <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?>
                    </small>
                  </div>
                </div>
              </a>
            </div>
            
          </div>
          <hr>
        <?php endwhile; ?>
      </div>
      <div class="mx-auto pb-3">
        <?php  wp_pagenavi(); ?>
      </div>
    </div>
  </div>
</div>

<?php else : ?>
  <article class="no-posts">
    <h1>Geen berichten gevonden.</h1>
  </article>
<?php endif; ?>
<?php get_footer();?>
