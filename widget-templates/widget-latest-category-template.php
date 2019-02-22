<div class="c9-recent-posts">
	<div class="c9-recent-posts-container">
        <?php while ( $cortex_latest_cat_posts->have_posts() ) : $cortex_latest_cat_posts->the_post(); ?>
		<article class="c9-single-article d-flex align-items-center">
        <?php if ( has_post_thumbnail() ) { ?>
        	<figure class="c9-article-image entry-image w-25 mr-3">
        		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                	<?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid rounded-circle p-1')); ?>
                </a>
			</figure>
		<?php } ?>
			<header class="c9-article-title<?php if ( (has_post_thumbnail()) ) { echo " w-75"; } else { echo " w-100"; } ?>">
				<span class="entry-title d-block mb-3"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><span class="mt-0"><?php the_title();?></span></a></span>
				<div class="c9-article-date"><span class="c9-article-date-small"><?php cortextoo_widgets_posted_on(); ?></span></div>
			</header>
		</article>
        <?php endwhile; ?>
	</div>
</div>