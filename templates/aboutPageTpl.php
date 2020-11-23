<?
  /*
    Template Name: О компании
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
        </div>
      </div>
    </div>
  </div>
  <div style="min-height: auto;" id="services-page" class="is-services__page">
    <div class="container is-services__page-main">
      <div class="row">
        <div class="col-md-12">
          <div class="is-page__default-content">
            <? the_content(); ?>
          </div>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
