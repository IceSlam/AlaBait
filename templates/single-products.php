<?
/*
  Template Name: Продукт 1С или оборудование
  Template Post Type: post
*/

?>
<?php get_header(); ?>

<div style="position:relative;" class="is-cases__navs container">
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
          <a href="!#" style="margin-bottom: -2.8em;" class="btn is-details__header__btn-buy"  uk-toggle="target: #order-buy">
            <span class="mx-auto">
              Заказать продукт
            </span>
            <span class="ml-auto">
              <img src="<? echo get_template_directory_uri().'/assets/img/sdetails_btn-buy.svg'?>" alt="Заказать услугу">
            </span>
          </a>

        </div>
        <div class="col-md-6">
          <?
          $productVideoExists = get_field('products_item_video');
          if ( $productVideoExists ) {
            ?>
            <a class="is-video__fancy-video" data-fancybox href="<? echo get_field('products_item_video'); ?>&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
                <div class="is-video__preview" style="background:url(<? echo get_field('products_item_video_preview'); ?>);"></div>
                <div class="is-video__mask"></div>
                <img class="is-video__play-button" src="/wp-content/themes/alabait/assets/img/video_play.png" alt="">
            </a>
          <? } else { ?>
            <style >
              .is-content-page__template p:nth-child(2), .is-content-page__template p:nth-child(4) {
                display: none;
              }
              .is-content-page__template p:nth-child(3) {
                margin-bottom: 4em;
              }
              .is-content-page__template .is-details__header__btn-buy {
                margin-top: -4em;
              }
              .is-cases__navs .row .col-md-6:first-child {
                width: 100%;
                max-width: 100%;
                flex: 0 0 auto;
              }
              .is-cases__navs .row .col-md-6:last-child {
                display: none;
              }
            </style>
          <? }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div id="sdetails-page" class="is-sdetails__page">
    <div class="is-sdetails__page-main container mb-5">
      <div class="row">
        <?
          $bonusPackExists = get_field('products_support_pack');
          if ( $bonusPackExists ) { ?>
            <div class="col-md-6">
              <? the_content(); ?>
              <div class="is-services__title-divider1">
              </div>
              <div class="is-services__title-divider2">
              </div>
              <div class="is-sdetails__page-main-features">
                <?php while ( have_rows('products_item_bonuses') ) : the_row(); ?>
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
              <? echo get_field('products_support_pack') ?>
            </div>
          <?  } else { ?>
            <style>
              .is-sdetails__page-main {
                padding-top: 3em;
              }
              .is-sdetails__page-main .row .is-sdetails__page-description-block {
                width: 100% !important;
                max-width: 100% !important;
                flex: 0 0 100% !important;
              }
              .wp-block-image {
                max-width: 100% !important;
              }
            </style>
            <div class="col-md-6 is-sdetails__page-description-block">
              <p class="is-sdetails__page-main-description">
                <? echo get_field('products_item_description'); ?>
              </p>
            </div>
            <?
              $productsBonusesExists = get_field('products_item_bonuses');
              if ( $productsBonusesExists ) { ?>
                <div class="col-md-6 is-sdetails__page-main-features" style="margin-top:0;">
              <?php while ( have_rows('products_item_bonuses') ) : the_row(); ?>
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
          <? } else { ?>
          <? }
          }
        ?>
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
                      'cat' => '5'
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
                                <div class="is-services__page-card__bg0" style="background: url(<? echo get_field('products_item_img'); ?>);">
                                  <div class="is-services__page-card__mask"></div>
                                </div>
                              </div>
                              <div class="col is-services__page-card-r">
                                <div class="is-services__page-card__info">
                                  <h3 style="max-height:56px;overflow:hidden;"><? the_title();?>
                                  </h3>
                                  <div class="is-services__title-divider1"></div>
                                  <div class="is-services__title-divider2"></div>
                                  <div style="max-height:180px;overflow:hidden;">
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
              <?php echo do_shortcode('[contact-form-7 id="1000" title="Обратная связь"]'); ?>
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
        <form class="is-products__form-main" action="#" method="post">
            <div style="position: relative;z-index:10;">
              <p class="h4">
                Заказать продукт <br/>
                <? echo the_title(); ?>
              </p>
              <p class="capt">
                Оставьте свои контактные данные и наш специалист свяжется с вами
              </p>
              <input type="text" name="product_name" id="is-form-title" style="display:none;" class="form-control" value="<? the_title(); ?>">
              <input type="text" name="product_link" id="is-form-title" style="display:none;" class="form-control" value="<? the_permalink(); ?>">
              <input type="text" name="product_img" id="is-form-title" style="display:none;" class="form-control" value="<? echo get_field('products_item_img'); ?>">
              <label for="is-form-name" style="margin-top: 0px;">Ваше имя*</label>
              <input type="name" name="client_name" id="is-form-name" class="form-control" required>
              <label for="is-form-phone">Ваш номер телефона*</label>
              <input type="phone" name="client_tel" id="is-form-phone" class="form-control" required>
              <label for="is-form-textarea">Ваш вопрос*</label>
              <textarea class="form-control" name="client_msg" id="is-form-textarea" rows="2" required></textarea>
              <div class="d-flex justify-content-center" style="margin-top: 16px;">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="privacyBuyTheProduct" required>
                    <label style="max-width:none;padding-top:1em;" class="custom-control-label" for="privacyBuyTheProduct"><a href="<? echo get_page_link(3); ?>">С политикой конфидициальных данных ознакомлен</a></label>
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
    <?php
      $client_name = trim($_POST['client_name']);
      $product_name = trim($_POST['product_name']);
      $client_tel = trim($_POST['client_tel']);
      $client_msg = trim($_POST['client_msg']);
      $product_link = trim($_POST['product_link']);
      $product_img = trim($_POST['product_img']);

      $fromMail = get_option( 'alabait_feedback_email' );
      $fromName = 'АлаБайт - Отдел продаж';

      $emailTo =  get_option( 'alabait_product_feedback' );
      $subject = "Заказ продукта - ". $product_name;
      $subject = '=?utf-8?b?'. base64_encode($subject) .'?=';
      $headers = "Content-type: text/html; charset=\"utf-8\"\r\n";
      $headers .= "From: ". $fromName ." <". $fromMail ."> \r\n";

      $body = '
          <style>
            @import url(http://three.al-dev.ru/wp-content/themes/alabait/assets/css/main.css);

          </style>
          <div style="background:#033057;">
            <div class="container is-main__header-logo" style="padding:15px;">
              <div class="row" style="padding: 16px 2px;display:flex">
                <div class="col-md-6" style="flex: 0 0 50%;max-width: 50%;">
                  <a href="http://three.al-dev.ru/" class="navbar-brand align-middle is-header__logo is-header__logo-text">
                    <img src="http://three.al-dev.ru/wp-content/uploads/2020/07/alabait_email_logo.png" class="img-fluid pull-xs-left" alt="АлаБайт">
                  </a>
                </div>
              <div class="col-md-6 text-right" style="vertical-align:middle;flex: 0 0 50%;max-width: 50%;text-align:right;">
                <h2 style="vertical-align:middle;margin-top:16px;color:#fff;font-weight:500 !important;font-size:2rem">
                  Заказ продукта
                </h2>
              </div>
            </div>
          </div>
          </div>
          <div style="background:url(http://three.al-dev.ru/wp-content/themes/alabait/assets/img/sdetails_bg.jpg);padding:3rem 0;">
          <div class="container is-main__header-logo" style="padding:15px;>
            <div class="row" style="padding: 16px;display:flex">
              <div class="col-md-12" style="flex: 0 0 100%;max-width: 100%;">
                <h4 style="font-weight:200 !important;font-size:1.125rem;margin-bottom:2rem;">
                  С сайта компании АлаБайт поступила заявка на продукт
                </h4>
                <h4 class="text-uppercase" style="line-height:0.75 !important;text-transform:uppercase;font-weight:200 !important;font-size:1.5rem;">
                  Продукт
                </h4>
                <h2 style="font-weight:500;font-size:32px !important;line-height:1">'.
                  $product_name
                .'</h2>
              </div>
            </div>
            <div class="row" style="padding: 16px;display:flex;">
              <div class="col-md-6" style="margin-top:2rem;flex: 0 0 50%;max-width: 50%;">
                <p style="margin-top:1.5rem">
                  Клиент
                  <br>
                  <span style="margin-left:1em;font-weight:600">
                  '
                  .$client_name.
                  '
                  </span>
                </p>
                <p style="margin-top:1.5rem">
                  Номер телефона:
                  <br>
                  <span style="margin-left:1em;font-weight:600">
                  '
                  .$client_tel.
                  '
                  </span>
                </p>
                <p style="margin-top:1.5rem">
                  Сообщение клиента:
                  <br>
                  <span style="margin-left:1em;font-weight:600">
                  '
                  .$client_msg.
                  '
                  </span>
                </p>
                <p style="margin-top:1.5rem">
                  Ссылка на продукт:
                  <br>
                  <a href="'.$product_link.'" style="margin-left:1em;font-weight:200;text-decoration:none">
                    '
                    .$product_name.
                    '
                  </a>
                </p>
              </div>
              <div class="col-md-6" style="flex: 0 0 50%;max-width: 50%;">
                <img class="img-fluid" style="max-width:100%" src="'.$product_img.'" alt="'.$product_name.'">
              </div>
            </div>
          </div>
        </div>
        <div style="background:#033057;">
          <div class="container is-main__header-logo" style="padding:15px;">
            <div class="row" style="padding: 16px 2px;display:flex">
              <div class="col-md-6" style="flex: 0 0 50%;max-width: 50%;">
                <a href="http://three.al-dev.ru/" class="navbar-brand align-middle is-header__logo is-header__logo-text">
                  <img src="http://three.al-dev.ru/wp-content/uploads/2020/07/alabait_email_logo.png" class="img-fluid pull-xs-left" alt="АлаБайт">
                </a>
              </div>
            <div class="col-md-6 text-right" style="vertical-align:middle;flex: 0 0 50%;max-width: 50%;text-align:right;">
              <h2 style="vertical-align:middle;margin-top:16px;color:#fff;font-weight:500 !important;font-size:1rem">
                Сообщение отправлено с сайта компании АлаБайт
              </h2>
            </div>
          </div>
        </div>
        </div>
      '
      ;

      if (strlen($client_tel) > 0) {
          $mail = mail($emailTo, $subject, $body, $headers, '-f'. $fromMail );
      }

      ?>
<?php get_footer(); ?>
