<?
  /*
    Template Name: Обучение
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
  <div id="cases-main" class="is-cases__main">
    <div class="is-cases__main-plus container">
      <div class="row">
        <?
          $args = array(
            'posts_per_page' => 4,
            'cat' => '24',
            'paged' => get_query_var('paged') ?: 1
          );

          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>

              <div class="col-sm-12 col-md-6 is-cases__main-cardp">
                <div class="card card-image" style="background-image: linear-gradient(
to right bottom,
rgba(16, 102, 234, 0.6),
rgba(16, 102, 234, 0.9)), url(<? //echo get_field('news_img'); ?>); background-size: cover; background-position: left top; background: rgb(16, 102, 234)">
                  <div class="is-cases__main-cardp-mask">
                    <div class="text-white d-flex align-items-center">
                      <div class="is-cases__main-cardp-content">
                        <h5 class="pink-text"><? the_time( 'd.m.Y' ); ?></h5>
                        <h3 class="card-title"><a href="<? the_permalink();?>"><? the_title();?></a></h3>
                        <div style="overflow: hidden;max-height: 93px;">
                          <?php the_excerpt(); ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?;
            }
          } else {
            ?><p class="margin-left:3em;">Материалов нет</p></br><?
          }
          wp_reset_postdata();
        ?>
      </div>
      <br>
      <div class="row col-md-12">
        <?  pagination($query->max_num_pages, $query->query['paged'] ); ?>
      </div>
    </div>
    <div class="is-cases__main-form container">
      <div class="row is-cases__main-form-row">
        <div class="col-md-12 container is-cases__main-form-col">
          <div class="row is-cases__main-form-info">
            <div class="col-md-8" style="padding-left: 32px;padding-right: 32px;">
              <h2 style="margin-top: 40px;">
                Есть вопросы?
              </h2>
              <p>
                Оставьте свои контактные данные  и наш специалист свяжется с вами
              </p>
              <?php echo do_shortcode('[contact-form-7 id="1000" title="Обратная связь"]'); ?>
            </div>
            <div class="col-md-4" style="padding-right: 21px;padding-bottom: 22px;">
              <img style="margin-top: -50px;" src="<? echo get_template_directory_uri().'/assets/img/cases_form-img.jpg'?>" alt="Остались вопросы по кейсам?" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
