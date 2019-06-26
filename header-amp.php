<!doctype html>
<html amp lang="en">
<head>
  <meta charset="utf-8">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
  <title><?php wp_title(); ?></title>
  <meta http-equiv="language" content="<?php echo $lang=get_bloginfo("language"); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
  <!-- END META TAGS-->
  <link href="<?php bloginfo( 'stylesheet_url' );?>" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/asset/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" 
  href="<?php bloginfo('template_url'); ?>/asset/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" 
  href="<?php bloginfo('template_url'); ?>/asset/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/asset/favicon/site.webmanifest">
  <link rel="manifest" href="<?php bloginfo('template_url'); ?>/asset/favicon//manifest.json">

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

  <?php wp_head(); ?>
  <?php
  if ( has_post_thumbnail( $post->ID ) ) :
    $imageInfo = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    $imageUrl = $imageInfo[0];
  else:
    $imageUrl = get_stylesheet_directory_uri() . '/asset/images/bg.jpg';
  endif;
  ?>
</head>

<body style="background-image:url('<?php echo $imageUrl; ?>');">

  <header class="my-5 d-none d-lg-block">
    <div class="container">
      <div class="bg-white p-3 shadow-sm">
        <div class="row">
          <div class="col-12 col-lg-4 d-flex align-items-center">
            <a class="d-flex align-items-center" href="/">
              <img class="icon w-100" src="<?php bloginfo('template_url'); ?>/asset/images/logo.svg" alt="<?php the_title(); ?>">
            </a>
          </div>
          <div class="col-12 col-lg-8">
            <div class="my-3 text-center w-100">
              <!-- bovenkant nieuw website -->
              <amp-ad 
                layout="responsive"
                style="display:inline-block;width:700px;height:90px"
                data-ad-client="ca-pub-7475749348053006"
                data-ad-slot="5223490105">
              </amp-ad>
            <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
</header>

<?php get_template_part( 'components/navbar' ); ?>
