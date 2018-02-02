<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cgce-revision
 */

?>

<!-- post  header -->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="page-header sidebar-title post-heading">', '</h1>' );
		else :
			the_title( '<h2 class="page-header sidebar-title post-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

	 					<div class="row">
	 						<div class="col-md-12">
	 							<div class="entry-meta">
	 								 <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date('F,j,Y');?></span>
	 								 <span><i class="fa fa-user"></i> Posted by <a href="#"><?php the_author(); ?></a></span>
	 								 <span> <i class="fa fa-tag"></i> <a href="#" rel="tag"><?php the_category(',');?></a></span>
	 								 <div class="pull-right"> <span><i class="fa fa-comment"></i>  <?php comments_number()?></span></div>
	 							</div>
	 					</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php cgce_revision_post_thumbnail(); ?>


	<!-- Adsens space -->

	<div class="col-md-12">
		<div class="adsens-post">
			<!--ads banner space-->
	              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<!-- responive -->
	<ins class="adsbygoogle"
	     style="display:block"
	     data-ad-client="ca-pub-6915392312901512"
	     data-ad-slot="1645768180"
	     data-ad-format="link"></ins>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({});
	</script>
		</div>
	</div>



	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'cgce-revision' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cgce-revision' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	
	
	
<div class="col-md-12">
	<div class="adsens-post">
		<!--ads banner space-->
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- responive -->
<ins class="adsbygoogle"
		 style="display:block"
		 data-ad-client="ca-pub-6915392312901512"
		 data-ad-slot="1645768180"
		 data-ad-format="link"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>
</div>
	
	

	<footer class="entry-footer">
		<?php cgce_revision_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->



<!-- Adsens space  -->


