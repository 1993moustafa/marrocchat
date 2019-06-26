<?php  /* Template Name: Body template */ ?>
<?php get_header();?>
<div class="container page-container mt-3 mt-lg-0 px-lg-3">
  <div class="bg-white shadow-none shadow-sm">
    <div class="row pt-lg-4 px-lg-4">
      <div class="col-12">
          <div class="row">
            <div class="col-12">
              <h1><?php the_title(); ?></h1>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
              endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>