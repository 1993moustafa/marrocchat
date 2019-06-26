<div class="row">
  <div class="col-12 col-sm-6 pr-lg-0 mb-3">
    <?php
    $args = array(
      'orderby' => 'post_date',
      'category_name' => 'nieuws',
      'numberposts' => 1,
    );
    $postslist = get_posts( $args );
    foreach ($postslist as $post) :  setup_postdata($post);
      ?>
      <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
        <a class="h-100" href="<?php echo get_permalink(); ?>">
          <div class="row h-100">
            <div class="col-12 mb-2 pb-3">
              <div class="date">
                <small>
                  <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                </div>
                <?php
                $image = get_field('cover_image');
                if( !empty($image) ):
                  ?>
                  <img
                  class="img"
                  alt="<?php the_title(); ?>"
                  src="<?php echo $image['url']; ?>"
                  />
                <?php endif; ?>
                <div class="card-body p-0">
                  <h6 class="mt-3 pt-lg-0">
                    <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                  </h6>
                  <p class="small-lead d-block">
                    <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                  </p>
                </div>
                <button class="btn btn-news d-block px-0 text-left" href="#">
                  <small class="d-flex align-items-center">
                    <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                  </small>
                </button>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="col-12 col-sm-6 pr-lg-0 mb-3">
      <?php
      $args = array(
        'orderby' => 'post_date',
        'offset' => 1,
        'category_name' => 'nieuws',
        'numberposts' => 1,
      );
      $postslist = get_posts( $args );
      foreach ($postslist as $post) :  setup_postdata($post);
        ?>
        <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
          <a class="h-100" href="<?php echo get_permalink(); ?>">
            <div class="row h-100">
              <div class="col-12 mb-2 pb-3">
                <div class="date">
                  <small>
                    <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                  </div>
                  <?php
                  $image = get_field('cover_image');
                  if( !empty($image) ):
                    ?>
                    <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                  <?php endif; ?>
                  <div class="card-body p-0">
                    <h6 class="mt-3 pt-lg-0">
                      <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                    </h6>
                    <p class="small-lead d-block mb-4">
                      <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                    </p>
                  </div>
                  <button class="btn btn-news d-block px-0 text-left" href="#">
                    <small class="d-flex align-items-center">
                      <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                    </small>
                  </button>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="col-12 col-sm-6 pr-lg-0 mb-3">
        <?php
        $args = array(
          'orderby' => 'post_date',
          'offset' => 2,
          'category_name' => 'nieuws',
          'numberposts' => 1,
        );
        $postslist = get_posts( $args );
        foreach ($postslist as $post) :  setup_postdata($post);
          ?>
          <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
            <a class="h-100" href="<?php echo get_permalink(); ?>">
              <div class="row h-100">
                <div class="col-12 mb-2 pb-3">
                  <div class="date">
                    <small>
                      <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                    </div>
                    <?php
                    $image = get_field('cover_image');
                    if( !empty($image) ):
                      ?>
                      <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                    <?php endif; ?>
                    <div class="card-body p-0">
                      <h6 class="mt-3 pt-lg-0">
                        <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                      </h6>
                      <p class="small-lead d-block mb-4">
                        <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                      </p>
                    </div>
                    <button class="btn btn-news d-block px-0 text-left" href="#">
                      <small class="d-flex align-items-center">
                        <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                      </small>
                    </button>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="col-12 col-sm-6 pr-lg-0 mb-3">
          <?php
          $args = array(
            'orderby' => 'post_date',
            'offset' => 3,
            'category_name' => 'nieuws',
            'numberposts' => 1,
          );
          $postslist = get_posts( $args );
          foreach ($postslist as $post) :  setup_postdata($post);
            ?>
            <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
              <a class="h-100" href="<?php echo get_permalink(); ?>">
                <div class="row h-100">
                  <div class="col-12 mb-2 pb-3">
                    <div class="date">
                      <small>
                        <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                      </div>
                      <?php
                      $image = get_field('cover_image');
                      if( !empty($image) ):
                        ?>
                        <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                      <?php endif; ?>
                      <div class="card-body p-0">
                        <h6 class="mt-3 pt-lg-0">
                          <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                        </h6>
                        <p class="small-lead d-block mb-4">
                          <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                        </p>
                      </div>
                      <button class="btn btn-news d-block px-0 text-left" href="#">
                        <small class="d-flex align-items-center">
                          <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                        </small>
                      </button>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="col-12 col-sm-6 pr-lg-0 mb-3">
            <?php
            $args = array(
              'orderby' => 'post_date',
              'offset' => 4,
              'category_name' => 'nieuws',
              'numberposts' => 1,
            );
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post);
              ?>
              <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
                <a class="h-100" href="<?php echo get_permalink(); ?>">
                  <div class="row h-100">
                    <div class="col-12 mb-2 pb-3">
                      <div class="date">
                        <small>
                          <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                        </div>
                        <?php
                        $image = get_field('cover_image');
                        if( !empty($image) ):
                          ?>
                          <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                        <?php endif; ?>
                        <div class="card-body p-0">
                          <h6 class="mt-3 pt-lg-0">
                            <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                          </h6>
                          <p class="small-lead d-block mb-4">
                            <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                          </p>
                        </div>
                        <button class="btn btn-news d-block px-0 text-left" href="#">
                          <small class="d-flex align-items-center">
                            <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                          </small>
                        </button>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
            <div class="col-12 col-sm-6 pr-lg-0 mb-3">
              <?php
              $args = array(
                'orderby' => 'post_date',
                'offset' => 5,
                'category_name' => 'nieuws',
                'numberposts' => 1,
              );
              $postslist = get_posts( $args );
              foreach ($postslist as $post) :  setup_postdata($post);
                ?>
                <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
                  <a class="h-100" href="<?php echo get_permalink(); ?>">
                    <div class="row h-100">
                      <div class="col-12 mb-2 pb-3">
                        <div class="date">
                          <small>
                            <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                          </div>
                          <?php
                          $image = get_field('cover_image');
                          if( !empty($image) ):
                            ?>
                            <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                          <?php endif; ?>
                          <div class="card-body p-0">
                            <h6 class="mt-3 pt-lg-0">
                              <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                            </h6>
                            <p class="small-lead d-block mb-4">
                              <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                            </p>
                          </div>
                          <button class="btn btn-news d-block px-0 text-left" href="#">
                            <small class="d-flex align-items-center">
                              <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                            </small>
                          </button>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="col-12 col-sm-6 pr-lg-0 mb-3">
              <?php
              $args = array(
                'orderby' => 'post_date',
                'offset' => 6,
                'category_name' => 'nieuws',
                'numberposts' => 1,
              );
              $postslist = get_posts( $args );
              foreach ($postslist as $post) :  setup_postdata($post);
                ?>
                <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
                  <a class="h-100" href="<?php echo get_permalink(); ?>">
                    <div class="row h-100">
                      <div class="col-12 mb-2 pb-3">
                        <div class="date">
                          <small>
                            <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                          </div>
                          <?php
                          $image = get_field('cover_image');
                          if( !empty($image) ):
                            ?>
                            <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                          <?php endif; ?>
                          <div class="card-body p-0">
                            <h6 class="mt-3 pt-lg-0">
                              <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                            </h6>
                            <p class="small-lead d-block mb-4">
                              <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                            </p>
                          </div>
                          <button class="btn btn-news d-block px-0 text-left" href="#">
                            <small class="d-flex align-items-center">
                              <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                            </small>
                          </button>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="col-12 col-sm-6 pr-lg-0 mb-3">
              <?php
              $args = array(
                'orderby' => 'post_date',
                'offset' => 7,
                'category_name' => 'nieuws',
                'numberposts' => 1,
              );
              $postslist = get_posts( $args );
              foreach ($postslist as $post) :  setup_postdata($post);
                ?>
                <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
                  <a class="h-100" href="<?php echo get_permalink(); ?>">
                    <div class="row h-100">
                      <div class="col-12 mb-2 pb-3">
                        <div class="date">
                          <small>
                            <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                          </div>
                          <?php
                          $image = get_field('cover_image');
                          if( !empty($image) ):
                            ?>
                            <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                          <?php endif; ?>
                          <div class="card-body p-0">
                            <h6 class="mt-3 pt-lg-0">
                              <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                            </h6>
                            <p class="small-lead d-block mb-4">
                              <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                            </p>
                          </div>
                          <button class="btn btn-news d-block px-0 text-left" href="#">
                            <small class="d-flex align-items-center">
                              <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                            </small>
                          </button>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="col-12 col-sm-6 pr-lg-0 mb-3">
              <?php
              $args = array(
                'orderby' => 'post_date',
                'offset' => 8,
                'category_name' => 'nieuws',
                'numberposts' => 1,
              );
              $postslist = get_posts( $args );
              foreach ($postslist as $post) :  setup_postdata($post);
                ?>
                <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
                  <a class="h-100" href="<?php echo get_permalink(); ?>">
                    <div class="row h-100">
                      <div class="col-12 mb-2 pb-3">
                        <div class="date">
                          <small>
                            <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                          </div>
                          <?php
                          $image = get_field('cover_image');
                          if( !empty($image) ):
                            ?>
                            <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                          <?php endif; ?>
                          <div class="card-body p-0">
                            <h6 class="mt-3 pt-lg-0">
                              <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                            </h6>
                            <p class="small-lead d-block mb-4">
                              <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                            </p>
                          </div>
                          <button class="btn btn-news d-block px-0 text-left" href="#">
                            <small class="d-flex align-items-center">
                              <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                            </small>
                          </button>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="col-12 col-sm-6 pr-lg-0 mb-3">
              <?php
              $args = array(
                'orderby' => 'post_date',
                'offset' => 9,
                'category_name' => 'nieuws',
                'numberposts' => 1,
              );
              $postslist = get_posts( $args );
              foreach ($postslist as $post) :  setup_postdata($post);
                ?>
                <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
                  <a class="h-100" href="<?php echo get_permalink(); ?>">
                    <div class="row h-100">
                      <div class="col-12 mb-2 pb-3">
                        <div class="date">
                          <small>
                            <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                          </div>
                          <?php
                          $image = get_field('cover_image');
                          if( !empty($image) ):
                            ?>
                            <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                          <?php endif; ?>
                          <div class="card-body p-0">
                            <h6 class="mt-3 pt-lg-0">
                              <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                            </h6>
                            <p class="small-lead d-block mb-4">
                              <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                            </p>
                          </div>
                          <button class="btn btn-news d-block px-0 text-left" href="#">
                            <small class="d-flex align-items-center">
                              <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                            </small>
                          </button>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="col-12 col-sm-6 pr-lg-0 mb-3">
              <?php
              $args = array(
                'orderby' => 'post_date',
                'offset' => 10,
                'category_name' => 'nieuws',
                'numberposts' => 1,
              );
              $postslist = get_posts( $args );
              foreach ($postslist as $post) :  setup_postdata($post);
                ?>
                <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
                  <a class="h-100" href="<?php echo get_permalink(); ?>">
                    <div class="row h-100">
                      <div class="col-12 mb-2 pb-3">
                        <div class="date">
                          <small>
                            <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                          </div>
                          <?php
                          $image = get_field('cover_image');
                          if( !empty($image) ):
                            ?>
                            <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                          <?php endif; ?>
                          <div class="card-body p-0">
                            <h6 class="mt-3 pt-lg-0">
                              <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                            </h6>
                            <p class="small-lead d-block mb-4">
                              <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                            </p>
                          </div>
                          <button class="btn btn-news d-block px-0 text-left" href="#">
                            <small class="d-flex align-items-center">
                              <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                            </small>
                          </button>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="col-12 col-sm-6 pr-lg-0 mb-3">
              <?php
              $args = array(
                'orderby' => 'post_date',
                'offset' => 11,
                'category_name' => 'nieuws',
                'numberposts' => 1,
              );
              $postslist = get_posts( $args );
              foreach ($postslist as $post) :  setup_postdata($post);
                ?>
                <div class="rounded-0 news-card card border border-gray-200 p-2 w-100 h-100">
                  <a class="h-100" href="<?php echo get_permalink(); ?>">
                    <div class="row h-100">
                      <div class="col-12 mb-2 pb-3">
                        <div class="date">
                          <small>
                            <?php $post_date = get_the_date( 'j M Y' ); echo $post_date; ?> | <?php the_time('H:i') ?></small>
                          </div>
                          <?php
                          $image = get_field('cover_image');
                          if( !empty($image) ):
                            ?>
                            <img class="img" alt="<?php the_title(); ?>" src="<?php echo $image['url']; ?>" />

                          <?php endif; ?>
                          <div class="card-body p-0">
                            <h6 class="mt-3 pt-lg-0">
                              <?php echo wp_trim_words( get_the_title(), 1000 ); ?>
                            </h6>
                            <p class="small-lead d-block mb-4">
                              <?php echo wp_trim_words (the_excerpt(), 30, '...' ); ?>
                            </p>
                          </div>
                          <button class="btn btn-news d-block px-0 text-left" href="#">
                            <small class="d-flex align-items-center">
                              <i class="material-icons">keyboard_arrow_right</i>&nbsp;Lees verder
                            </small>
                          </button>
                        </div>
                      </div>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
