<?php get_header(); ?>
		
		<div id="nav"></div>
		
			<?php get_sidebar(); ?>

			<div id="content" class="content-box">	

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				
				<!-- <div class="cal-date">
					<span class="cal-month"><?php the_time('M') ?></span>
					<span class="cal-day"><?php the_time('j') ?></span>
					
				</div> -->
				
				<h1><?php the_title(); ?></h1>
					
				
				<p><?php the_content(__('(more...)')); ?></p>
				
				<?php endwhile; else: ?>
				<?php _e('Sorry, we couldn’t find the post you are looking for.'); ?>
				<?php endif; ?>
	
				<div class="share-this">
						<a href="http://twitter.com/share"	
								class="twitter-share-button"
								data-count="horizontal">Tweet</a>
								<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</div>
				
				
				
				  <script>$('.shareme').sharrre({
					share: {
					twitter: true,
					facebook: true,
					googlePlus: false
					},
					template: '<div class="rox"><div class="left"><i class="foundicon-heart"></i><span class="totalshares"> {total}</span></div><div class="middle"><a href="#" class="facebook"><i class="social foundicon-facebook"></i></a><a href="#" class="twitter"><i class="social foundicon-twitter"></i></a></div></div>',
					enableHover: false,
					enableTracking: true,
					render: function(api, options){
					$(api.element).on('click', '.twitter', function() {
					api.openPopup('twitter');
					});
					$(api.element).on('click', '.facebook', function() {
					api.openPopup('facebook');
					});
					}
					});
				 </script>
				
				
			</div><!-- /#content -->
			
		

<?php get_footer(); ?>