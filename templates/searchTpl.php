<?
  /*
    Template Name: Поиск по сайту
    Template Post Type: page
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
            <?php the_title(); ?>
          </h2>
          <p>
            <?php echo category_description(); ?>
          </p>
        </div>
      </div>
      <div class="row">
          <div class="col-md-12">
            <?php get_search_form(); ?>
          </div>
      </div>
    </div>
  </div>
  <div style="padding-top:0em;max-height:none !important;" id="cases-main" class="is-cases__main">
    <div class="is-cases__main-plus container">
      <div class="row">
          <div class="col-md-12">
            <?php get_search_form(); ?>
          </div>
      </div>
      <div class="row">
        <?
          $args = array(
            'posts_per_page' => 50,
            'cat' => '4, 5, 13, 14,, 15, 16'
          );

          $query_cases = new WP_Query( $args );
          if ( $query_cases->have_posts() ) {
            while ( $query_cases->have_posts() ) {
              $query_cases->the_post();
              ?>

              <div class="col-sm-12 col-md-6 is-cases__main-cardp">
                <div class="card card-image" style="background-image: url(<? if ( get_field('news_img') ) { echo get_field('news_img'); } else if ( get_field('services_item_img') ) { echo get_field('services_item_img'); } else if ( get_field('products_item_img') ) { echo get_field('products_item_img'); } else { echo get_template_directory_uri().'/assets/img/cases_cardp-item1.jpg'; } ?>"); background-size: cover; background-position: center;">
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
