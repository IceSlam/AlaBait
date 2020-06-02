<?
/*
  Template Name: Услуга
  Template Post Type: post
*/

?>
<?php get_header(); ?>

<div style="margin-bottom:-2.5em;" class="is-cases__navs container">
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
          <a href="!#" class="btn is-details__header__btn-buy"  uk-toggle="target: #order-buy">
            <span class="mx-auto">
              Заказать услугу
            </span>
            <span class="ml-auto">
              <img src="<? echo get_template_directory_uri().'/assets/img/sdetails_btn-buy.svg'?>" alt="Заказать услугу">
            </span>
          </a>

        </div>
        <div class="col-md-6">
          <a class="is-video__fancy-video" data-fancybox href="<? echo get_field('services_item_video'); ?>&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
              <div class="is-video__preview" style="background:url(<? echo get_field('services_item_video_preview'); ?>);"></div>
              <div class="is-video__mask"></div>
              <img class="is-video__play-button" src="/wp-content/themes/alabait/assets/img/video_play.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>
  <div id="sdetails-page" class="is-sdetails__page">
    <div class="is-sdetails__page-main container mb-5">
      <div class="row">
        <div class="col-md-6">
          <p class="is-sdetails__page-main-description">
            <? echo get_field('services_item_description'); ?>
          </p>
          <div class="is-services__title-divider1">
          </div>
          <div class="is-services__title-divider2">
          </div>
          <div class="is-sdetails__page-main-features">
            <?php while ( have_rows('services_item_bonuses') ) : the_row(); ?>
              <p class="align-middle">
                <span class="is-sdetails__page-main-icon">
                  <img src="<? echo get_template_directory_uri().'/assets/img/ok.png' ?>" alt="">
                </span>
                <span class="is-sdetails__page-main-feature">
                  <? echo get_sub_field('bonus_title'); ?>
                </span>
              </p>
    		    <?php endwhile; ?>
          </div>
        </div>
        <div class="col-md-6">
          <? echo get_field('services_support_pack') ?>
        </div>
      </div>
    </div>
    <div class="is-sdetails__page-other pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>
              Смотрите также другие наши услуги
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
                      'cat' => '4'
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
                                  <p>
                                    <?php the_excerpt(); ?>
                                  </p>
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
    <div id="order-buy" uk-modal>
      <div style="padding:0;" class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical is-products__form">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <form class="is-products__form-main" action="#!">
            <div style="position: relative;z-index:10;">
              <p class="h4">
                Заказать услугу <br/>
                <? echo the_title(); ?>
              </p>
              <p class="capt">
                Оставьте свои контактные данные и наш специалист свяжется с вами
              </p>
              <input type="text" id="is-form-title" style="display:none;" class="form-control" value="<? the_title(); ?>">
              <label for="is-form-name" style="margin-top: 0px;">Ваше имя*</label>
              <input type="name" id="is-form-name" class="form-control">
              <label for="is-form-phone">Ваш номер телефона*</label>
              <input type="phone" id="is-form-phone" class="form-control">
              <label for="is-form-textarea">Ваш вопрос*</label>
              <textarea class="form-control" id="is-form-textarea" rows="2"></textarea>
              <div class="d-flex justify-content-center" style="margin-top: 16px;">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="privacyBuyTheService">
                    <label style="max-width:none;padding-top:1em;" class="custom-control-label" for="privacyBuyTheService"><a href="<? echo get_page_link(3); ?>">С политикой конфидициальных данных ознакомлен</a></label>
                </div>
                <button class="btn ml-auto mr-0" type="submit">Заказать звонок</button>
              </div>
            </div>
            <svg style="position: absolute;top:1em;right:25px;z-index:5;" width="87" height="134" viewBox="0 0 116 178" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M48 128.5L44.25 88L45.5 86.75C61.5 86.4167 73.75 83.0833 82.25 76.75C90.9167 70.4167 95.25 61.8333 95.25 51C95.25 41.8333 91.9167 34.1667 85.25 28C78.5833 21.6667 69.75 18.5 58.75 18.5C41.9167 18.5 26.75 26.3333 13.25 42L0.5 29.75C16.5 10.4167 36.0833 0.749987 59.25 0.749987C75.9167 0.749987 89.4167 5.41665 99.75 14.75C110.083 24.0833 115.25 36.0833 115.25 50.75C115.25 65.5833 110.417 77.25 100.75 85.75C91.0833 94.0833 78.5833 99.3333 63.25 101.5L60.75 128.5H48ZM42.75 178V151.75H65.75V178H42.75Z" fill="#0A4472" fill-opacity="0.08"/>
            </svg>
            <p style="font-size:.75em;">* - поля, помеченные данным символом, являются обязательными для заполнения</p>
        </form>
      </div>
    </div>
<?php get_footer(); ?>
