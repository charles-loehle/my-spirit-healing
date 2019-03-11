<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package my-spirit-healing
 */

$about_title = get_field('about_title');
$practitioner_image = get_field('practitioner_image');
$practitioner_name = get_field('practitioner_name');
$practitioner_subtitle = get_field('practitioner_subtitle');
$practitioner_description = get_field('practitioner_description');
$practitioner_twitter_username = get_field('practitioner_twitter_username');
$practitioner_facebook_username = get_field('practitioner_facebook_username');
$practitioner_linkedin_username = get_field('practitioner_linkedin_username');

$creator_image = get_field('creator_image');
$creator_name = get_field('creator_name');
$creator_subtitle = get_field('creator_subtitle');
$creator_description = get_field('creator_description');
$creator_twitter_username = get_field('creator_twitter_username');
$creator_facebook_username = get_field('creator_facebook_username');
$creator_linkedin_username = get_field('creator_linkedin_username');

$contact_title = get_field('contact_title');
$contact_subtitle = get_field('contact_subtitle');

?>

<?php wp_footer(); ?>

<!-- Team -->
<section class="bg-light" id="team">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="section-heading"><?php  echo $about_title; ?></h2>
				<h3 class="section-subheading text-muted"></h3>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<div class="team-member">
					<?php if( !empty($practitioner_image) ) : ?>

						<img class="rounded-circle img-fluid" src="<?php echo $practitioner_image['url']; ?>" alt="<?php echo $practitioner_image['alt']; ?>">

					<?php endif; ?>

					<h4><?php echo $practitioner_name; ?></h4>
					<p class="text-muted"><?php echo $practitioner_subtitle; ?></p>
					<p class="text-muted"><?php echo $practitioner_description; ?></p>
				
				</div>
			</div>

			<div class="col-sm-6">
				<div class="team-member">
					<?php if( !empty($creator_image) ) : ?>

						<img class="rounded-circle img-fluid" src="<?php echo $creator_image['url']; ?>" alt="<?php echo $creator_image['alt']; ?>">

					<?php endif; ?>
					<h4><?php echo $creator_name ?></h4>
					<p class="text-muted"><?php echo $creator_subtitle ?></p>
					<p class="text-muted"><?php echo $creator_description ?></p>
					<a href="http://www.drbradleynelson.com/"><p>Learn More</p></a>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 mx-auto text-center">

			</div>
		</div>
	</div>
</section>

<!-- Contact -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">

				<h2 class="section-heading"><?php echo $contact_title; ?></h2>

				<h3 class="section-subheading"><?php echo $contact_subtitle; ?></h3>
				
				<?php
              			if(is_active_sidebar('footer-1')){
              			dynamic_sidebar('footer-1');
              			}
              			?>
			</div>
		</div>
		 
	</div>
</section>

<!-- Footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<span class="copyright">Copyright &copy; <a href="http://cldigitaldesign.com">CL Digital Design</a> 2017</span>
			</div>	
			<div class="col-md-6">
				<span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=onQxo3UEo87jQZZ0huSY11NvpyREASgUrGN7bEydfSlCiOq3Xr4kV8S8Tunt"></script></span>
			</div>
		</div>
	</div>
</footer>

<!-- Portfolio Modals -->

<!-- Modal 1 -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Explore</h2>
							<p class="item-intro text-muted">Listen to the Emotion Code Book.</p>
							<div style="position:relative;height:0;padding-bottom:75.0%"><iframe width="700" height="525" src="https://www.youtube.com/embed/8T-QKTQslbQ" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
							<p>In The Emotion Code, renowned holistic physician and lecturer Dr Bradley Nelson DC skillfully lays bare the inner workings of the subconscious mind. He reveals how emotionally-charged events from your past can still be haunting you in the form of “Trapped Emotions”; emotional energies that literally inhabit your body.</p>

							<button class="btn btn-primary" data-dismiss="modal" type="button">
								<i class="fa fa-times"></i>
								Close Window</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal 2 -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Depression Hurts</h2>
							<p class="item-intro text-muted">Watch How The Emotion Code Can Help</p>
							<div style="position:relative;height:0;padding-bottom:75.0%"><iframe src="https://www.youtube.com/embed/1OkDnyKqBpY?ecver=2" width="480" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
							<p></p>

							<button class="btn btn-primary" data-dismiss="modal" type="button">
								<i class="fa fa-times"></i>
								Close Window</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal 3 -->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<div class="lr">
					<div class="rl"></div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Muscle Testing</h2>
							<p class="item-intro text-muted">Muscle Testing and The Emotion Code</p>
							<div style="position:relative;height:0;padding-bottom:75.0%"><iframe src="https://www.youtube.com/embed/yPrHryxxbc8?ecver=2" width="480" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
							<p>Getting answers from your subconscious mind- The Subconscious already knows all about you and where trapped emotions exist in the body and even when they became trapped.</p>

							<button class="btn btn-primary" data-dismiss="modal" type="button">
								<i class="fa fa-times"></i>
								Close Window</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Bootstrap core JavaScript -->
<!-- jquery is enqued in header.php -->
<script src="<?php bloginfo ('template_directory'); ?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/vendor/popper/popper.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Contact form JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/agency.min.js"></script>

</body>
</html>
