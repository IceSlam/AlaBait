<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AlaBait
 */

?>

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
						<?php esc_html_e( 'Ничего не найдено', 'alabait' ); ?>
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
						if ( is_home() && current_user_can( 'publish_posts' ) ) :

							printf(
								'<p>' . wp_kses(
									/* translators: 1: link to WP admin new post page. */
									__( 'Готовы опубликовать свой первый пост? <a href="%1$s">Узнайте как здесь</a>.', 'alabait' ),
									array(
										'a' => array(
											'href' => array(),
										),
									)
								) . '</p>',
								esc_url( admin_url( 'post-new.php' ) )
							);

						elseif ( is_search() ) :
							?>

							<p><?php esc_html_e( 'Извините, Нет материалов согласно Вашему запросу. Попробуйте поиск по другим ключевым словам.', 'alabait' ); ?></p>
							<?php
							get_search_form();

						else :
							?>

							<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'alabait' ); ?></p>
							<?php
							get_search_form();

						endif;
						?>
					</div>
				</div>
			</div>
		</div>
