<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AlaBait
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>

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
			            <?php
			  					/* translators: %s: search query. */
			  					printf( esc_html__( 'Результаты поиска для: %s', 'alabait' ), '<span>' . get_search_query() . '</span>' );
			  					?>
			          </h2>
			          <p>
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
									<?php
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();

										/**
										 * Run the loop for the search to output the results.
										 * If you want to overload this in a child theme then include a file
										 * called content-search.php and that will be used instead.
										 */
										get_template_part( 'template-parts/content', 'search' );

									endwhile;

									the_posts_navigation();

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
								?>
			          </div>
			        </div>
			      </div>
			    </div>

<?php
get_footer();
