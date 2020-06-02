<?
  /*
    Template Name: Услуги
  */

?>
<?php get_header(); ?>

    <div style="padding-bottom: 2em;" class="is-pages__navs is-cases__navs container">
      <nav aria-label="breadcrumb">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<ol style="margin-left:0px;" class="breadcrumb bc-yoast">','</ol>' );
          }
          ?>
      </nav>
      <div class="row">
        <div class="col-md-6">
          <h2>
            <?php single_cat_title(); ?>
          </h2>
          <p>
            <?php echo category_description(); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div id="services-page" class="is-services__page">
    <div class="container is-services__page-main">
      <div class="row">

        <?
          $args = array(
            'posts_per_page' => 8,
            'cat' => '4'
          );

          $query_cases = new WP_Query( $args );
          if ( $query_cases->have_posts() ) {
            while ( $query_cases->have_posts() ) {
              $query_cases->the_post();
              ?>

              <div class="col-md-12 col-lg-6" style="padding-left: 15px;">
                <div class="is-services__page-card">
                  <div class="row">
                    <div class="col is-services__page-card-l">
                      <div class="is-services__page-card__bg0" style="background: url(<? echo get_field('services_item_img'); ?>);">
                        <div class="is-services__page-card__mask"></div>
                      </div>
                    </div>
                    <div class="col is-services__page-card-r">
                      <div class="is-services__page-card__info">
                        <h3><? the_title();?>
                        </h3>
                        <div class="is-services__title-divider1"></div>
                        <div class="is-services__title-divider2"></div>
                        <div style="max-height:185px;overflow:hidden;">
                          <p>
                            <?php the_excerpt(); ?>
                          </p>
                        </div>
                        <a href="<? the_permalink();?>" class="btn d-block">
                          Узнать больше
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?;
            }
          } else {
          }
          wp_reset_postdata();
        ?>
      </div>
      <div class="row col-md-12">
        <ul class="is-cases__pagination" style="margin-left:0;">
          <li>
            <a href="">
              <img src="<? echo get_template_directory_uri().'/assets/img/partners_slide_np.png'?>" alt="Страница назад">
            </a>
          </li>
          <li>
            <a href="">
              1
            </a>
          </li>
          <li>
            <a href="">
              2
            </a>
          </li>
          <li>
            <a href="">
              3
            </a>
          </li>
          <li>
            <a href="">
              ...
            </a>
          </li>
          <li>
            <a href="">
              <img src="<? echo get_template_directory_uri().'/assets/img/partners_slide_nn.png'?>" alt="Страница вперед">
            </a>
          </li>
        </ul>
      </div>
    </div>

<?php get_footer(); ?>
