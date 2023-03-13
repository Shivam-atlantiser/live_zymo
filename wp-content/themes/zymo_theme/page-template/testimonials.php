<?php
/**********
 * Template name: Testimonials
 */
get_header();
$banner_section = get_field("banner");
$clients_section = get_field("our_clients",7);
$testimonials = get_field("testimonials");
?>
<main class="main">
<div class="home-hero-1 products-hero testimonial-hero">
        <div class="container">
          <div class="hero-3-wrap">
            <div class="hero-3-column-1">
              <h1 class="heading home-3-title" data-scroll-x>
              <?php if($banner_section["title"]) echo $banner_section["title"]; ?>
              </h1>
              <div class="product-numbers fadein" data-scroll-x>
                <div class="box">
                  <div class="h2 heading">80</div>
                  <div class="info">Clients</div>
                </div>
                <div class="box">
                  <div class="h2 heading">120</div>
                  <div class="info">Products</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio-3-overlay-color bg-image" data-scroll-x style="background:url(<?php echo get_the_post_thumbnail_url() ?>); background-color:transparent;"></div>
</div>
<section class="testimonials-c">
<div class="container">
    <div class="grid-testimonials">
      <?php
        foreach ($testimonials as $testimonial) {
      ?>
        <div class="grid-item">
            <div class="inner">
                <div class="title">
                <?php if($testimonial["message"]) echo $testimonial["message"]; ?>
                </div>
                <?php if($testimonial["video"]) {?>
                <div class="img-t-c" style="position:relative;">
                <img src="<?php echo $testimonial["video_thumbnail"] ?>" class="testimonial-video" data-id="<?php echo $testimonial["video"] ?>" alt="">
                <div class="play-icon"></div>
                </div>
                <?php } ?>
                <div class="testimonial-info">
                  <div class="info-left">
                  <?php if($testimonial["profile"]) { ?>
                    <img src="<?php echo $testimonial["profile_image"] ?>" alt="">
                    <?php } ?>
                    <div class="info">
                      <div class="name"><?php echo $testimonial["name"] ?></div>
                      <?php if($testimonial["position"]){ ?><div class="designation"><?php echo $testimonial["position"] ?></div> <?php }?>
                    </div>
                  </div>
                  <div class="info-right">
                    <div class="info">
                      <div class="name"><?php if($testimonial["company_name"]) echo $testimonial["company_name"]; ?></div>
                      <div class="designation">Spa & Salon</div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
</section>
<section class="section wf-section is-dark-sec section-clients">
        <div class="container">
            <div class="title-block-1">
                <div id="w-node-abaad8f9-8437-7d97-3e84-92da999b0a39-999b0a36" class="title-block-column-2">
                    <div class="super-title fadein" data-scroll><?php echo $clients_section["super_title"] ?></div>
                    <h2 class="heading" data-scroll>
                        <?php echo $clients_section["title"] ?>
                    </h2>
                </div>
                <div id="w-node-abaad8f9-8437-7d97-3e84-92da999b0a3c-999b0a36" class="title-block-column-3"></div>
            </div>
        </div>
        <div class="container brands-4-cms w-dyn-list swiper client-slider">
            <div role="list" class="brand-4-cms-list w-dyn-items swiper-wrapper">
                <?php
                $images = $clients_section['image_box'];
                if ($images) : $counter = 1; ?>
                    <?php foreach ($images as $image) { ?>
                        <div role="listitem" class="brand-4-cms-item w-dyn-item fadein swiper-slide" data-scroll style="--delay:<?php echo ++$counter*0.08 ?>s">
                            <a class="brand-4-link w-inline-block">
                                <img data-src="<?php print_r($image) ?>"   class="brand-4-image lazy" />
                            </a>
                        </div>
                    <?php } ?>
                <?php endif; ?>
            </div>
            <div class="carousel-button is-left w-slider-arrow-left"></div>
            <div class="carousel-button w-slider-arrow-right"></div>
        </div>
    </section>
</main>
<?php
get_footer();