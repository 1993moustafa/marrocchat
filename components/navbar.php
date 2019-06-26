<div class="container container-navbar sticky-top px-0 px-lg-3">
  <div class="navbar navbar-expand-lg navbar-tall-poppy border-bottom border-tall-poppy bg-light py-lg-0 shadow-sm">
    <div class="w-100">
      <div class="float-right">
        <button class="btn btn-tall-poppy float-right d-flex align-items-center btn-search" type="button" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
          <i class="material-icons">search</i>
        </button>
        <div class="collapse collapseSearch" id="collapseSearch">
          <div class="card card-body bg-tall-poppy p-1 rounded-0">
            <form class="form-inline" role="search" method="get" action="<?php echo home_url( '/' ); ?>">
              <input class="form-control border border-gray-900 border-right-0 rounded-0" type="search" placeholder="<?php echo esc_attr_x( 'Zoeken...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
              <button class="btn btn-gray-900 my-2 rounded-0 my-sm-0 btn-submit" type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
                Zoeken
              </button>
            </form>
          </div>
        </div>
      </div>
      <a class="navbar-brand d-block d-lg-none text-center mr-0" href="/">
        <img src="<?php bloginfo('template_url'); ?>/asset/images/logo.svg" alt="Marocchat">
      </a>
      <div class="float-left">
        <button class="navbar-toggler border-0 menu btn14" type="button" data-menu="14" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="icon"></div>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <hr class="d-block d-lg-none">
        <ul class="navbar-nav mr-auto">
          <?php wp_nav_menu_no_ul(); ?>
        </ul>
      </div>
    </div>
  </div>
</div>
