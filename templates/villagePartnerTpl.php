<?php
/**
 * Template Name: Партнеры в категории Сельское хозяйство
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AlaBait
 */

get_header();
?>


<div style="padding-bottom: 2em;" class="is-pages__navs container">
      <nav aria-label="breadcrumb">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<ol style="margin-left:0px;" class="breadcrumb bc-yoast">','</ol>' );
          }
          ?>
      </nav>
      <h2>
        <?php the_title(); ?>
      </h2>
    </div>
  </div>
  <div id="partners" class="is-partners" style="padding-bottom:3em;max-height:none !important">
      <div id="fabric" class="is-fabric container">
        <div class="row is-services__title">
          <div class="col-md-6">
            <h2>
              Наши клиенты отрасли Сельское хозяйство
            </h2>
          </div>
        </div>
        <div class="is-services__title-divider1">
        </div>
        <div class="is-services__title-divider2">
        </div>
        <div class="row is-fabric__main">
          <div class="col-md-12">
            <div class="uk-position-relative uk-visible-toggle uk-light is-fabric__main-slider" tabindex="-1" uk-slider style="border: 2px solid rgba(255,255,255,.5);">
              <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <?php while ( have_rows('mol_partner') ) : the_row(); ?>
                  <li>
                    <span class="align-middle">
                      <img class=" d-block mx-auto" src="<? echo get_sub_field('mol_logo');?>" alt="<? echo get_sub_field('mol_title');?>">
                    </span>
                  </li>
        		    <?php endwhile; ?>
              </ul>
              <a class="uk-position-center-left uk-position-small is-main__slider-navs fabric-nav-p" href="#" uk-slidenav-previous uk-slider-item="previous">
                <img src="<? echo get_template_directory_uri().'/assets/img/partners_slide_np.png'?>" alt="Слайд назад">
              </a>
              <a class="uk-position-center-right uk-position-small is-main__slider-navs fabric-nav-n" href="#" uk-slidenav-next uk-slider-item="next">
                <img src="<? echo get_template_directory_uri().'/assets/img/partners_slide_nn.png'?>" alt="Слайд вперед">
              </a>
          </div>
          </div>
        </div>
        <div class="row is-fabric__main" style="margin-top: 3em;">
          <div class="col-md-12">
            <? the_content(); ?>
          </div>
        </div>
      </div>
  </div>
<?php get_footer(); ?>
