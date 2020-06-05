<?
  /*
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
            Страница не найдена
          </h2>
          <p>
            Запрашиваемая Вами страница не найдена
          </p>
        </div>
      </div>
    </div>
  </div>
  <div style="min-height: auto;" id="services-page" class="is-services__page">
    <div class="container is-services__page-main">
      <div class="row">
        <div class="col-md-12">
          <div class="is-page__default-content">
            <h2>Страница, которую вы хотели открыть не найдена на сайте!</h2>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
