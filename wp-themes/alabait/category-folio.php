<?
  /*
    Template Name: Кейсы и Антикейсы
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
        <div class="row is-services__title">
          <div class="col-md-6">
            <h2>
              Кейсы
              <span class="is-cases__main-plus-title-s">Наши успешные внедрения</span>
            </h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="<? echo get_category_link(13); ?>" class="btn is-services__title-btn">
              <span>
                Смотреть все наши кейсы
              </span>
              <span>
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d)">
                  <path d="M12.3135 13.3137C11.7612 13.3137 11.3135 13.7614 11.3135 14.3137C11.3135 14.866 11.7612 15.3137 12.3135 15.3137V13.3137ZM22.3135 14.3137L23.0206 15.0208C23.4111 14.6303 23.4111 13.9971 23.0206 13.6066L22.3135 14.3137ZM18.5935 9.17954C18.203 8.78902 17.5698 8.78902 17.1793 9.17954C16.7887 9.57007 16.7887 10.2032 17.1793 10.5938L18.5935 9.17954ZM17.0686 18.1444C16.6781 18.5349 16.6781 19.1681 17.0686 19.5586C17.4591 19.9491 18.0923 19.9491 18.4828 19.5586L17.0686 18.1444ZM12.3135 15.3137L22.3135 15.3137V13.3137L12.3135 13.3137V15.3137ZM23.0206 13.6066L18.5935 9.17954L17.1793 10.5938L21.6063 15.0208L23.0206 13.6066ZM21.6063 13.6066L17.0686 18.1444L18.4828 19.5586L23.0206 15.0208L21.6063 13.6066Z" fill="url(#paint0_linear)"/>
                  </g>
                  <defs>
                  <filter id="filter0_d" x="0.899414" y="0.899536" width="32.8284" height="32.8284" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                  <feOffset dy="3"/>
                  <feGaussianBlur stdDeviation="5"/>
                  <feColorMatrix type="matrix" values="0 0 0 0 0.0933333 0 0 0 0 0.183467 0 0 0 0 0.266667 0 0 0 0.3 0"/>
                  <feBlend mode="multiply" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                  </filter>
                  <linearGradient id="paint0_linear" x1="14.8135" y1="11.8137" x2="19.8135" y2="16.8137" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.7"/>
                  </linearGradient>
                  </defs>
                </svg>
              </span>
            </a>
          </div>
        </div>
        <div class="is-services__title-divider1">
        </div>
        <div class="is-services__title-divider2">
        </div>
        <div class="row">
          <?
            $args = array(
              'posts_per_page' => 4,
              'cat' => '13'
            );

            $query_cases = new WP_Query( $args );
            if ( $query_cases->have_posts() ) {
              while ( $query_cases->have_posts() ) {
                $query_cases->the_post();
                ?>

                <div class="col-sm-12 col-md-6 is-cases__main-cardp">
                  <div class="card card-image" style="background-image: url(<? echo get_field('case_img'); ?>">
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
            }
            wp_reset_postdata();
          ?>
        </div>
      </div>
      <div class="is-cases__main-negative container">
        <div class="row is-services__title">
          <div class="col-md-6">
            <h2>
              Антикейсы
              <span class="is-cases__main-plus-title-s">Наши неудачи</span>
            </h2>
          </div>
          <div class="col-md-6 text-right">
            <a href="<? echo get_category_link(14); ?>" class="btn is-services__title-btn">
              <span>
                Смотреть все наши антикейсы
              </span>
              <span>
                <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g filter="url(#filter0_d)">
                  <path d="M12.3135 13.3137C11.7612 13.3137 11.3135 13.7614 11.3135 14.3137C11.3135 14.866 11.7612 15.3137 12.3135 15.3137V13.3137ZM22.3135 14.3137L23.0206 15.0208C23.4111 14.6303 23.4111 13.9971 23.0206 13.6066L22.3135 14.3137ZM18.5935 9.17954C18.203 8.78902 17.5698 8.78902 17.1793 9.17954C16.7887 9.57007 16.7887 10.2032 17.1793 10.5938L18.5935 9.17954ZM17.0686 18.1444C16.6781 18.5349 16.6781 19.1681 17.0686 19.5586C17.4591 19.9491 18.0923 19.9491 18.4828 19.5586L17.0686 18.1444ZM12.3135 15.3137L22.3135 15.3137V13.3137L12.3135 13.3137V15.3137ZM23.0206 13.6066L18.5935 9.17954L17.1793 10.5938L21.6063 15.0208L23.0206 13.6066ZM21.6063 13.6066L17.0686 18.1444L18.4828 19.5586L23.0206 15.0208L21.6063 13.6066Z" fill="url(#paint0_linear)"/>
                  </g>
                  <defs>
                  <filter id="filter0_d" x="0.899414" y="0.899536" width="32.8284" height="32.8284" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                  <feOffset dy="3"/>
                  <feGaussianBlur stdDeviation="5"/>
                  <feColorMatrix type="matrix" values="0 0 0 0 0.0933333 0 0 0 0 0.183467 0 0 0 0 0.266667 0 0 0 0.3 0"/>
                  <feBlend mode="multiply" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                  </filter>
                  <linearGradient id="paint0_linear" x1="14.8135" y1="11.8137" x2="19.8135" y2="16.8137" gradientUnits="userSpaceOnUse">
                  <stop stop-color="white"/>
                  <stop offset="1" stop-color="white" stop-opacity="0.7"/>
                  </linearGradient>
                  </defs>
                </svg>
              </span>
            </a>
          </div>
        </div>
        <div class="is-services__title-divider1">
        </div>
        <div class="is-services__title-divider2">
        </div>
        <div class="row">
          <?
            $args = array(
              'posts_per_page' => 2,
              'cat' => '14'
            );

            $query_cases = new WP_Query( $args );
            if ( $query_cases->have_posts() ) {
              while ( $query_cases->have_posts() ) {
                $query_cases->the_post();
                ?>

                <div class="col-sm-12 col-md-6 is-cases__main-cardn">
                  <div class="card card-image" style="background-image: url(<? echo get_field('case_img'); ?>">
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
            }
            wp_reset_postdata();
          ?>
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
                    <div class="row is-cases__form-btns" style="margin-top: 32px;margin-bottom: 45px;">
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
                <img style="margin-top: -50px;" src="<? echo get_template_directory_uri().'/assets/img/cases_form-img.jpg'?>" alt="Остались вопросы по кейсам?" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>
