<?php /*Template Name: fyc-wendi*/ ?>

<?php get_header("fyc");?>


		<div class="row">
			<div class="container-single">
				<div class="six columns">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="fyc-wrapper">
						
						<div class="fyc-video">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/TBwPZE5ME4E" frameborder="0" 
							allowfullscreen></iframe>
						</div>
	
						<?php $post_thumbnail_id = get_post_thumbnail_id( $post_id ); ?>
						<p><?php the_content(); ?></p>
						<?php endwhile; else : ?>
						<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>

					</div><!-- fyc wrapper ends -->
				</div><!-- six columns all-->
				
				<div class="six columns">
					<div class="fyc-quote">
						<img src="<?php bloginfo('template_url') ?>/images/goldbergs-logo.png">
						<h4>"...Beverly Goldberg, the laugh-out-loud funniest character on network TV."<br>
						<span class="citation">STAR TRIBUNE<span></h4>
						<h4>2014 Critic's Choice TV Awards Nominee<br>
						<span class="nom">BEST ACTRESS IN A COMEDY SERIES</span>
						</h4>
					</div>
					
					<div class="fyc-downloads">
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/emmywendi.jpg">
								<a href="<?php bloginfo('template_url') ?>/images/emmywendi.jpg"><figcaption><i class="fa fa-arrow-down"></i> Wendi Icon</figcaption></a>
							</figure>
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/troy-icon.jpg">
								<a href="<?php bloginfo('template_url') ?>/images/troy-icon.jpg">
								<figcaption><i class="fa fa-arrow-down"></i> Troy Icon</figcaption></a>
							</figure>
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/emmy4goldbergs.jpg">
								<a href="<?php bloginfo('template_url') ?>/images/emmy4goldbergs.jpg">
								<figcaption><i class="fa fa-arrow-down"></i> The Goldbergs Icon</figcaption></a>
							</figure><br>							
							
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/fyc-wendi.png">
								<a href="<?php bloginfo('template_url') ?>/images/fyc-wendi.png"><figcaption><i class="fa fa-arrow-down"></i> FYC Poster</figcaption></a>
							</figure>
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/fyc-troy-poster.png"></a>
								<a href="<?php bloginfo('template_url') ?>/images/fyc-troy-poster.png">
								<figcaption><i class="fa fa-arrow-down"></i> FYC Poster</figcaption></a>
							</figure>
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/fyc-goldbergs-poster.png">
								<a href="<?php bloginfo('template_url') ?>/images/fyc-goldbergs-poster.png">
								<figcaption><i class="fa fa-arrow-down"></i> FYC Poster</figcaption></a>
							</figure><br>
		
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/wendi-fb-banner.png">
								<a href="<?php bloginfo('template_url') ?>/images/wendi-twitter-banner.png">
								<figcaption><i class="fa fa-arrow-down"></i> Banner</figcaption></a>
							</figure>
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/troy-fb-banner.jpg">
								<a href="<?php bloginfo('template_url') ?>/images/troy-twitter-banner.jpg">
								<figcaption><i class="fa fa-arrow-down"></i> Banner</figcaption></a>
							</figure>
							<figure>
								<img width=150 src="<?php bloginfo('template_url') ?>/images/goldbergs-fb-banner.jpg">
								<a href="<?php bloginfo('template_url') ?>/images/goldbergs-twitter-banner.jpg">
								<figcaption><i class="fa fa-arrow-down"></i> Banner</figcaption></a>
							</figure>
							
						</div>
					
				</div>
			</div><!-- container-single ends -->
		</div><!-- row -->
	
		

<?php get_footer("fyc"); ?>