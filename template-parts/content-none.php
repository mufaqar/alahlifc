<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CT_Custom
 */

?>

<section class="no-results not-found">
	

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'ct-custom' ),
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

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'ct-custom' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			
<div class="d-flex flex-row mb-3 shadow p-0">
                        
                        <div class="col-8 p-3 ">
                          
                            <h4 class="mb-3"><a href=""><p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. ', 'ct-custom' ); ?></p></a></h4>
                           
                        </div>
                    </div>

			
			<?php
			//get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
