<?php get_template_part( 'components/slider' );  ?>
<div class="container news mt-3 mt-lg-0 px-lg-3">
  <div class="bg-white shadow-none shadow-sm">
    <div class="row px-lg-4">
     <div class="col-12 col-lg-8 order-2 order-lg-1">
      <?php get_template_part( 'components/news');?>
      <div class="row d-none d-lg-block ml-lg-0">
        <div class="col-12 my-3 border border-gray-200">
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
   <div class="col-12 col-lg-4 mb-3 order-3">
    <?php get_sidebar(); ?>
  </div>
</div>

<div class="row px-lg-2 mx-2 bottom-news">
  <?php
  $args = array(
    'orderby' => 'rand',
    'posts_per_page' => 4,
  );
  $postslist = get_posts( $args );
  foreach ($postslist as $post) :  setup_postdata($post);
    ?>
    <div class="col-12 col-sm-6 col-md-3 mb-4 p-2 d-none d-lg-block">
      <a class="h-100" href="<?php echo get_permalink(); ?>">
        <div class="news-card card card-recent-tag border border-gray-200 rounded-0 h-100">
         <?php
         $image = get_field('cover_image');
         if( !empty($image) ):
          ?>
          <div class="img m-0" style="background-image: url('<?php echo $image['url']; ?>');">
            <span class="m-3 badge badge-pill badge-tall-poppy">
              <?php
              $tag = get_the_tags();
              if ($tag) {
                $tag = $tag[0]; echo $tag->name;
              }
              ?>
            </span>
          </div>
        <?php endif; ?>
        <div class="card-body p-3">
          <h6 class="card-title pt-2">
            <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
          </h6>
          <p class="card-text">
            <?php echo wp_trim_words (the_excerpt(), 1, '...' ); ?>
          </p>
        </div>
        <button class="btn btn-news d-block p-3 text-left position-relative">
          <small class="d-flex align-items-center">
            <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
          </small>
        </button>
      </div>
    </a>
  </div>
<?php endforeach; ?>
</div>
</div>
</div>
