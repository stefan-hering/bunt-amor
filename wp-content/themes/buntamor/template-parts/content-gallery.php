<?php /**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Buntamor
 */ ?>


<?php
$args = array(
    'numberposts' => -1, // Using -1 loads all posts
	'orderby' => 'menu_order', // This ensures images are in the order set in the page media manager
    'order'=> 'ASC',
    'post_mime_type' => 'image', // Make sure it doesn't pull other resources, like videos
    'post_parent' => $post->ID, // Important part - ensures the associated images are loaded
    'post_status' => null,
    'post_type' => 'attachment'
);
$images = get_children( $args );
?>

<?php if($images){ ?>

<div id="gallery" class="row" itemscope itemtype="http://schema.org/ImageGallery">
	<div class="grid-sizer"> </div>
	<?php foreach($images as $image){ 
		$original = wp_get_attachment_image_src($image->ID,'original');
		
		if($original[1] > $original[2]){
			$cssClass = 'large-3 medium-4 small-6';
			$thumbnail = wp_get_attachment_image_src($image->ID,'horizontal-thumb');
		} else {
			$cssClass = 'large-2 medium-3 small-4';
			$thumbnail = wp_get_attachment_image_src($image->ID,'vertical-thumb');
		}
	?>
	    <figure class="image columns <?php echo $cssClass; ?>" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
			<a href="<?php echo $original[0] ?>" itemprop="contentUrl" class="thumbnail">
				<img src="<?php echo $thumbnail[0] ?>" itemprop="thumbnail" width="<?php echo $thumbnail[1] ?>" height="<?php echo $thumbnail[2] ?>" alt="Short desc TODO" />
			</a>
			
			<meta itemprop="width" content="<?php echo $original[1] ?>">
			<meta itemprop="height" content="<?php echo $original[2] ?>">

			<figcaption itemprop="caption description">Long image description <span itemprop="copyrightHolder">Photo: AP</span>
			</figcaption>
		</figure>
	<?php } ?>
</div>


<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<div class="pswp__bg"></div>

	<div class="pswp__scroll-wrap">

		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<div class="pswp__ui pswp__ui--hidden">

			<div class="pswp__top-bar">

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

				<button class="pswp__button pswp__button--share" title="Share"></button>

				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
					  <div class="pswp__preloader__cut">
						<div class="pswp__preloader__donut"></div>
					  </div>
					</div>
				</div>
			</div>

			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>

			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			</button>

			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>

			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>

		</div>

	</div>

</div>

<script>
/*
var galleryImages = [
	<?php foreach($images as $image){ 
		$original = wp_get_attachment_image_src($image->ID,'original');
	?>
	{
			src: '<?php echo $original[0] ?>',
			w: <?php echo $original[1] ?>,
			h: <?php echo $original[2] ?>
	},
	<?php } ?>
];*/
</script>
<?php } ?>

<?php
			/* translators: %s: Name of current post 
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
			*/
		?>