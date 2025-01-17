<?php 
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit; ?>
 
<div class="post-slides">
	<div class="post-content-position">
	<div class="post-content-left wp-medium-8 wpcolumns">
	
	<?php if($showCategory) { ?>
	<div class="recentpost-categories">		
			<?php echo $cat_list; ?>
		</div>
	<?php } ?>		
		  <h2 class="wp-post-title">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h2>
		<?php if($showDate || $showAuthor)    {  ?>	
			<div class="wp-post-date">		
				<?php  if($showAuthor) { ?> <span><?php  esc_html_e( 'By', 'wp-current-date-post-slider' ); ?>  <?php the_author(); ?></span><?php } ?>
				<?php echo ($showAuthor && $showDate) ? '&nbsp;/&nbsp;' : '' ?>
				<?php if($showDate) { echo get_the_date(); } ?>
				</div>
				<?php }   ?>
				
				<?php if($showContent) {  ?>	
				<div class="wp-post-content">
					<?php
					$customExcerpt = get_the_excerpt();				
					if (has_excerpt($post->ID))  { ?>
						<div class="wp-sub-content"><?php echo $customExcerpt ; ?></div> 
					<?php } else {
						$excerpt = strip_tags(get_the_content()); ?>
					<div class="wp-sub-content"><?php echo wpcdps_limit_words($excerpt,$words_limit); ?></div>	
					<?php } ?>
					
					<?php if($showreadmore) { ?>
						<a class="readmorebtn" href="<?php the_permalink(); ?>"><?php _e('Read More', 'wp-current-date-post-slider'); ?></a>
					<?php } ?>
					
				</div>
				<?php } ?>
				</div>
				<div class="post-image-bg">
			<img src="<?php echo $feat_image; ?>" alt="<?php the_title(); ?>" />
			</div>
			</div>
	</div>
