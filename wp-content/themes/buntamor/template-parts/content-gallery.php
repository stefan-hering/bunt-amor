<?php /**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Buntamor
 */ ?>
GALLERIIIIEEEE


					<?php
							

								echo wp_get_attachment_image( get_the_ID(), $image_size );
								
								
									        if ( $attachments ) {

	            foreach ( $attachments as $attachment ) {

	                $class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );

	                $title = wp_get_attachment_link( $attachment->ID, 'album-grid', true );

	                echo '<li class="' . $class . ' album-grid">' . $title . '</li>';

	            }
			}
							?>
							
							
									<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>