<?

/*
  Template Name: Новость
  Template Post Type: post
*/

?>
<?php get_header(); ?>

<div class="is-cases__navs container">
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
            <? the_title();?>
          </h2>
          <p>
            <? the_excerpt();?>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div id="sdetails-page" class="is-sdetails__page">
    <div class="is-sdetails__page-main container mb-5"  style="padding-top:3em;">
      <div class="row">
        <div class="col-md-12">
          <? the_content();?>
        </div>
      </div>
    </div>
    <div class="is-sdetails__page-other pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
              Читайте также другие новости
            </h2>
            <div class="is-services__title-divider1">
            </div>
            <div class="is-services__title-divider2">
            </div>
          </div>
        </div>
        <div class="row">
          <div uk-slider="center: false">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">
                <ul class="uk-slider-items uk-child-width-1-2 uk-grid">
                  <?
                    $args = array(
                      'posts_per_page' => 6,
                      'cat' => '16'
                    );

                    $query_cases = new WP_Query( $args );
                    if ( $query_cases->have_posts() ) {
                      while ( $query_cases->have_posts() ) {
                        $query_cases->the_post();
                        ?>

                        <li>
                          <div class="is-services__page-card">
                            <div class="row">
                              <div class="col is-services__page-card-l">
                                <div class="is-services__page-card__bg0" style="background: url(<? echo get_field('news_img'); ?>);">
                                  <div class="is-services__page-card__mask"></div>
                                </div>
                              </div>
                              <div class="col is-services__page-card-r">
                                <div class="is-services__page-card__info">
                                  <h3 style="max-height:56px;overflow:hidden;"><? the_title();?>
                                  </h3>
                                  <div class="is-services__title-divider1"></div>
                                  <div class="is-services__title-divider2"></div>
                                  <div style="max-height:185px; overflow:hidden;">
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
                        </li>
                        <?;
                      }
                    } else {
                    }
                    wp_reset_postdata();
                  ?>
                </ul>
                <a class="uk-position-center-left uk-position-small is-main__slider-navs fabric-nav-p" href="#" uk-slidenav-previous uk-slider-item="previous">
                  <img src="<? echo get_template_directory_uri().'/assets/img/partners_slide_np.png' ?>" alt="Слайд назад">
                </a>
                <a class="uk-position-center-right uk-position-small is-main__slider-navs fabric-nav-n" href="#" uk-slidenav-next uk-slider-item="next">
                  <img src="<? echo get_template_directory_uri().'/assets/img/partners_slide_nn.png' ?>" alt="Слайд вперед">
                </a>
            </div>
          </div>
        </div>
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
                <form class="" action="#!">
                  <div class="row" style="margin-top: 16px;">
                    <div class="col-md">
                      <label for="custName">Ваше имя</label>
                      <input type="text" id="custName" class="form-control">
                    </div>
                    <div class="col-md">
                      <label for="custPhone">Ваш номер телефона</label>
                      <input type="text" id="custPhone" class="form-control">
                    </div>
                  </div>
                  <div class="form-group" style="margin-top: 16px;margin-bottom: 0;">
                    <label for="custQuestion">Ваш вопрос</label>
                    <textarea class="form-control" id="custQuestion" rows="3" placeholder=""></textarea>
                  </div>
                  <div class="row is-sdetails__form-btns" style="margin-top: 32px;margin-bottom: 45px;">
                    <div class="col">
                      <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                          <label class="custom-control-label" for="defaultContactFormCopy">С политикой конфидициальных данных ознакомлен</label>
                      </div>
                    </div>
                    <div class="col">
                      <button class="btn btn-block" type="submit">
                        Заказать звонок
                      </button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="col-md-4" style="padding-right: 21px;padding-bottom: 22px;">
              <img style="margin-top: -50px;" src="<? echo get_template_directory_uri().'/assets/img/cases_form-img.jpg'?>" alt="Остались вопросы по кейсам?" class="img-fluid mx-auto">
            </div>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
