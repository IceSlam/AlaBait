<?
  /*
    Template Name: Клиенты отрасли Производство (молочная и сырная продукция)
  */

?>
<?php get_header(); ?>

<div style="padding-bottom: 2em;" class="is-pages__navs container">
      <nav aria-label="breadcrumb">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<ol style="margin-left:0px;" class="breadcrumb bc-yoast">','</ol>' );
          }
          ?>
      </nav>
      <h2>
        <?php single_cat_title(); ?>
      </h2>
    </div>
  </div>


<?php get_footer(); ?>
