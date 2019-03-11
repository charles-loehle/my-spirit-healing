<?php
/*
  Template Name: Home Page
*/

// Advanced Custom Fields
$services_title = get_field('services_title');
$services_subtitle = get_field('services_subtitle');
$service_1_title = get_field('service_1_title');
$service_1_description = get_field('service_1_description');
$service_2_title = get_field('service_2_title');
$service_2_description = get_field('service_2_description');
$service_3_title = get_field('service_3_title');
$service_3_description = get_field('service_3_description');
$certification_badge = get_field('certification_badge');


$emo_code_title = get_field('emo_code_title');
$emo_code_subtitle = get_field('emo_code_subtitle');
$emo_code_title_1 = get_field('emo_code_title_1');
$emo_code_title_1_description = get_field('emo_code_title_1_description');
$emo_code_title_2 = get_field('emo_code_title_2');
$emo_code_title_2_description = get_field('emo_code_title_2_description');
$emo_code_title_3 = get_field('emo_code_title_3');
$emo_code_title_3_description = get_field('emo_code_title_3_description');

$testimonials_title = get_field('testimonials_title');
$testimonials_subtitle = get_field('testimonials_subtitle');
$testimonial_1_title = get_field('testimonial_1_title');
$testimonials_1_description = get_field('testimonials_1_description');
$testimonials_1_image = get_field('testimonials_1_image');
$testimonial_2_title = get_field('testimonial_2_title');
$testimonials_2_description = get_field('testimonials_2_description');
$testimonials_2_image = get_field('testimonials_2_image');
$testimonial_3_title = get_field('testimonial_3_title');
$testimonials_3_description = get_field('testimonials_3_description');
$testimonials_3_image = get_field('testimonials_3_image');
$testimonial_4_title = get_field('testimonial_4_title');
$testimonials_4_description = get_field('testimonials_4_description');
$testimonials_4_image = get_field('testimonials_4_image');
$testimonial_5_title = get_field('testimonial_5_title');
$testimonials_5_description = get_field('testimonials_5_description');
$testimonials_5_image = get_field('testimonials_5_image');
$testimonial_6_title = get_field('testimonial_6_title');
$testimonials_6_description = get_field('testimonials_6_description');
$testimonials_6_image = get_field('testimonials_6_image');

get_header(); ?>

<!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
			<div class="col-lg-12 text-center certification_badge">
				<?php if( !empty($certification_badge) ) : ?>

				<img src="<?php echo $certification_badge['url']; ?>" alt="<?php echo $certification_badge['alt']; ?>">

				<?php endif; ?>
			</div>
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php echo $services_title; ?></h2>
            <h3 class="section-subheading text-muted"><?php echo $services_subtitle; ?></h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-heartbeat fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php echo $service_1_title; ?></h4>
            <p class="text-muted"><?php echo $service_1_description; ?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php echo $service_2_title; ?></h4>
            <p class="text-muted"><?php echo $service_2_description; ?></p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-child fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"><?php echo $service_3_title; ?></h4>
            <p class="text-muted"><?php echo $service_3_description; ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php echo $emo_code_title; ?></h2>
            <h3 class="section-subheading text-muted"><?php echo $emo_code_subtitle; ?></h3>

          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/portfolio/theemotioncode.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php echo $emo_code_title_1; ?></h4>
              <p class="text-muted"><?php echo $emo_code_title_1_description; ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/portfolio/emcodevid-thumb2.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php echo $emo_code_title_2; ?></h4>
              <p class="text-muted"><?php echo $emo_code_title_2_description; ?></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="<?php bloginfo('stylesheet_directory') ?>/assets/img/portfolio/emcodevid-thumb3.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4><?php echo $emo_code_title_3; ?></h4>
              <p class="text-muted"><?php echo $emo_code_title_3_description; ?></p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php echo $testimonials_title; ?></h2>
            <h3 class="section-subheading text-muted"><?php echo $testimonials_subtitle; ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <?php if( !empty($testimonials_1_image) ) : ?>

                    <img class="rounded-circle img-fluid" src="<?php echo $testimonials_1_image['url']; ?>" alt="<?php echo $testimonials_1_image['alt']; ?>">

                  <?php endif; ?>

                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading"><?php echo $testimonial_1_title; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php echo $testimonials_1_description; ?></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <?php if( !empty($testimonials_2_image) ) : ?>

                    <img class="rounded-circle img-fluid" src="<?php echo $testimonials_2_image['url']; ?>" alt="<?php echo $testimonials_2_image['alt']; ?>">

                  <?php endif; ?>

                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading"><?php echo $testimonial_2_title; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php echo $testimonials_2_description; ?></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <?php if( !empty($testimonials_3_image) ) : ?>

                    <img class="rounded-circle img-fluid" src="<?php echo $testimonials_3_image['url']; ?>" alt="<?php echo $testimonials_3_image['alt']; ?>">

                  <?php endif; ?>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading"><?php echo $testimonial_3_title; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php echo $testimonials_3_description; ?></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <?php if( !empty($testimonials_4_image) ) : ?>

                    <img class="rounded-circle img-fluid" src="<?php echo $testimonials_4_image['url']; ?>" alt="<?php echo $testimonials_4_image['alt']; ?>">

                  <?php endif; ?>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading"><?php echo $testimonial_4_title; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php echo $testimonials_4_description; ?></p>
                  </div>
                </div>
              </li>
              <li>
                <div class="timeline-image">
                  <?php if( !empty($testimonials_5_image) ) : ?>

                    <img class="rounded-circle img-fluid" src="<?php echo $testimonials_5_image['url']; ?>" alt="<?php echo $testimonials_5_image['alt']; ?>">

                  <?php endif; ?>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading"><?php echo $testimonial_5_title; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php echo $testimonials_5_description; ?></p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <?php if( !empty($testimonials_6_image) ) : ?>

                    <img class="rounded-circle img-fluid" src="<?php echo $testimonials_6_image['url']; ?>" alt="<?php echo $testimonials_6_image['alt']; ?>">

                  <?php endif; ?>
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4></h4>
                    <h4 class="subheading"><?php echo $testimonial_6_title; ?></h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted"><?php echo $testimonials_6_description; ?></p>
                  </div>
                </div>
              </li>

              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
