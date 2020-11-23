<?
  /*
    Template Name: Продукты 1C и оборудование
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
          'posts_per_page' => 4,
          'category__in' => 5,
          'paged' => get_query_var('paged') ?: 1
        );

          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>

              <div class="col-md-12 col-lg-6" style="padding-left: 15px;">
                <div class="is-services__page-card">
                  <div class="row">
                    <div class="col is-services__page-card-l">
                      <div class="is-services__page-card__bg0" style="background: url(<? echo get_field('products_item_img'); ?>);">
                        <div class="is-services__page-card__mask"></div>
                      </div>
                    </div>
                    <div class="col is-services__page-card-r">
                      <div class="is-services__page-card__info">
                        <h3 style="overflow:hidden;"><? the_title();?>
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
        <?  pagination($query->max_num_pages, $query->query['paged'] ); ?>
      </div>
    </div>

<?php get_footer(); ?>
