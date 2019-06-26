<!doctype html>
<html lang="nl">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(); ?></title>
  <meta name="theme-color" content="#c32627">
  <meta name="msapplication-navbutton-color" content="#c32627">
  <meta name="apple-mobile-web-app-status-bar-style" content="#c32627">
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
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134866817-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-134866817-1');
  </script>

  <?php wp_head(); ?>
</head>

<body id="bg-<?php echo get_the_id(); ?>">

  <header class="my-5 d-none d-lg-block">
    <div class="container">
      <div class="bg-white p-3 shadow-sm">
        <div class="row">
          <div class="col-12 col-lg-4 d-flex align-items-center">
            <a class="d-flex align-items-center" href="/">
              <img class="icon w-100" src="<?php bloginfo('template_url'); ?>/asset/images/logo.svg" alt="<?php the_title(); ?>">
            </a>
          </div>
          <div class="col-12 col-lg-8 d-none d-lg-block">
            <div class="my-3 text-center w-100">
              <ins class="adsbygoogle"
              style="display:block; top: 67px;"
              data-ad-client="ca-pub-7475749348053006"
              data-ad-slot="9321974649"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
              <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<?php get_template_part( 'components/navbar' ); ?>
