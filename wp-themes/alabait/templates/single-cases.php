
<?
/*
  Template Name: Кейс или антикейс
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
