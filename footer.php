
<footer class="mt-3">
  <div class="container mt-lg-0 px-lg-3">
    <div class="bg-codgray p-4">
      <div class="row">
        <div class="col-12 col-lg-6">
          <small>
           <?php
           $page = get_page_by_title( 'home' );
           $content = apply_filters('the_content', $page->post_content); 
           echo $content;
           ?>
         </small>
       </div>
       <div class="col-12 col-lg-5">
        <ul class="inline my-3 mb-0 p-0 socialmedia text-lg-right">
          <li class="list-inline-item">
            <h5>Stay in touch</h5>
          </li>
          <li class="list-inline-item icon">
            <a target="_blank" href="https://www.facebook.com/MarocNieuws.NL/">
              <img class="svg" src="<?php bloginfo('template_url'); ?>/asset/images/facebook.svg" alt="Facebook">
            </a>
          </li>
          <li class="list-inline-item icon">
            <a target="_blank" href="https://www.youtube.com/channel/UCu-N0vAM_CsibPRi-GsMrcw">
              <img class="svg" src="<?php bloginfo('template_url'); ?>/asset/images/youtube.svg" alt="youtube">
            </a>
          </li>
          <li class="list-inline-item icon">
            <a target="_blank" href="#">
              <img class="svg" src="<?php bloginfo('template_url'); ?>/asset/images/snapchat.svg" alt="snapchat">
            </a>
          </li>
          <li class="list-inline-item icon">
            <a target="_blank" href="#">
              <img class="svg" src="<?php bloginfo('template_url'); ?>/asset/images/instagram.svg" alt="instagram">
            </a>
          </li>
        </ul>
      </div>
      <div class="col-12 col-lg-1 text-center">
        <div class="footer-logo d-none d-lg-block"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <small>
          <ul class="footermenu inline mt-3 mb-0 p-0">
            <?php if( have_rows('footer_url', 'option') ): ?>
              <?php while( have_rows('footer_url', 'option') ): the_row(); ?>
                <li class="list-inline-item"><a href="<?php the_sub_field('footer_link'); ?>"><?php the_sub_field('footer_tekst'); ?></a></li>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php if( have_rows('googleplay_and_appstore', 'option') ): ?>
              <?php while( have_rows('googleplay_and_appstore', 'option') ): the_row(); 
                ?>
                <li class="list-inline-item border-0 px-0">
                  <a href="<?php the_sub_field('app_url'); ?>" target="_blank">
                    <?php $image = get_sub_field('app_icon'); ?>
                    <img class="googleplay" src="<?php echo $image['url'];?>" alt="Google-Playstore" />
                  </a>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </small>
      </div>
    </div>
  </div>
</div>
<div class="container mt-lg-0 px-lg-3">
  <div class="bg-gray-900 p-2">
    <div class="row">
      <div class="col-12">
        <ul class="list-inline m-0 copyright">
          <small>
            <li class="list-inline-item mr-0">
              © <a href="https://www.marocchat.NL">MarocChat.NL</a>,
            </li>
            <li class="list-inline-item mr-0">
              <a href="https://www.islamvandaag.nl">IslamVandaag.NL</a>
            </li>
            <li class="list-inline-item mr-0">
              en <a href="https://www.smakelijkhalal.nl">SmakelijkHalal.NL</a> are powered by Maroc Magazine
            </li>
            <li class="list-inline-item mr-0">
              <a target="_blank" href="/feed/">Entries (RSS) Comments (RSS)</a>
            </li>
          </small>
        </ul>
      </div>
    </div>
  </div>
</div>
<a href="#0" class="cd-top js-cd-top cd-top--show cd-top--fade-out">
  <i class="material-icons">
    keyboard_arrow_up
  </i>
</a>
</footer>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights') === false): ?>
<script src="<?php bloginfo('template_url'); ?>/asset/js/main.min.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script>


window.open('fb-messenger://share?link=' + encodeURIComponent(link) + '&app_id=' + encodeURIComponent(app_id));


  $(function(){
    $('.slider').bxSlider({
      auto: true,
      captions: true,
      mode: 'horizontal',
      autoControls: false,
      stopAutoOnClick: true,
      pager: true
    });
  });

  $('[data-toggle="slide-collapse"]').on('click', function() {
    $navMenuCont = $($(this).data('target'));
    $navMenuCont.animate({
      'width': 'toggle'
    }, 350);
    $(".menu-overlay").fadeIn(500);

  });
  $(".menu-overlay").click(function(event) {
    $(".navbar-toggle").trigger("click");
    $(".menu-overlay").fadeOut(500);
  });
</script>

<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/65f626a8ae1a8461f6ad91817/71514040e7c06e436e58a7ade.js");</script>
<?php wp_footer(); ?>
<?php endif; ?>

</body>
</html>
