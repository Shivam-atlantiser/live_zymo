<?php

/****
 * Template name: Solutions
 */
get_header();
$banner_section = get_field("banner");
$process_section = get_field("our_process");
$get_a_quote_section = get_field("get_a_quote",9);
?>
<main class="main">
  <div class="home-hero-1">
    <div class="container">
      <div class="hero-3-wrap">
        <div class="hero-3-column-1">
          <h1 class="heading home-3-title" data-scroll-x>
            <?php echo $banner_section["title"] ?>
          </h1>
          <div class="offering-private-lab fadein" data-scroll-x style="--delay:.5s">
            <?php echo $banner_section["description"] ?>
          </div>
          <?php if ($banner_section["button"]["url"] != "" && $banner_section["button"]["title"] != "") { ?>
            <div class="fadein" data-scroll-x style="--delay:.5s">
            <a href="<?php echo $banner_section["button"]["url"] ?>" class="main-button w-inline-block">
              <div class="button-text"><?php echo $banner_section["button"]["title"] ?></div>
              <img src="<?php echo get_template_directory_uri() ?>/images/arrow_right_alt_FILL0_wght400_GRAD0_opsz48_white.svg" loading="lazy" alt="" class="button-icon-x" />
            
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="portfolio-3-overlay-color bg-image" data-scroll-x style="background:url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
  </div>
  <section class="section section-process section-process-solution" hidden>
    <div class="container">
      <div class="padding-inner in-brands">
        <div class="super-title fadein" data-scroll ><?php echo $process_section["sub_title"] ?></div>
        <h2 class="heading fadein" data-scroll ><?php echo $process_section["title"] ?></h2>
        <div class="p process-desc fadein" data-scroll  style="--delay:.5s"><?php echo $process_section["description"] ?></div>
      </div>
    </div>
    <?php $custom = $process_section["custom"] ?>
    <?php $private = $process_section["private"] ?>
    <div class="fullwidth-divider"></div>
    <div class="container">
    <div class="row w-hidden-tiny w-hidden-medium">
      <div class="col-md-6 col-heading">
      <div class="h2 heading" data-scroll><?php echo $custom["title"] ?></div>
      </div>
      <div class="col-md-6 col-heading">
      <div class="h2 heading" data-scroll><?php echo $private["title"] ?></div>
      </div>
    </div>
    </div>
    <div class="fullwidth-divider"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <div class="h2 heading w-hidden-main" data-scroll ><?php echo $custom["title"] ?></div>
          <div class="brands-1-cms w-dyn-list">
            <div role="list" class="brands-1-cms-list w-dyn-items">
              <?php
              $counter = 1;
              foreach ($custom["all_points"] as $points) {
              ?>
                <div role="listitem" class="brands-1-cms-item w-dyn-item fadein" data-scroll style="--delay:<?php echo ++$counter*0.10 ?>s">
                  <div id="" class="">
                    <div class="w-layout-grid grid-brands-1">
                      <div id="w-node-f6b44a03-7609-b334-0579-fb83d463d73a-1c90676f" class="brand-1-column-1">
                        <p class="brand-1-name"><?php echo $points["point"] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <?php if ($custom["button"]["url"] != "" && $custom["button"]["title"] != "") { ?>
            <div data-scroll class="fadein">
          <a href="<?php echo $custom["button"]["url"] ?>" class="main-button w-inline-block">
            <div class="button-text"><?php echo $custom["button"]["title"] ?></div>
            <img src="<?php echo get_template_directory_uri() ?>/images/arrow_right_alt_FILL0_wght400_GRAD0_opsz48_white.svg" loading="lazy" alt="" class="button-icon-x" />
          
          </a>
          </div>
          <?php }?>
        </div>
        <div class="col-md-6">
        <div class="h2 heading w-hidden-main" data-scroll ><?php echo $private["title"] ?></div>
          <div class="brands-1-cms w-dyn-list">
            <div role="list" class="brands-1-cms-list w-dyn-items">
              <?php
              $counter = 1;
              foreach ($private["all_points"] as $points) {
              ?>
                <div role="listitem" class="brands-1-cms-item w-dyn-item fadein" data-scroll  style="--delay:<?php echo ++$counter*0.10 ?>s">
                  <div id="" class="">
                    <div class="w-layout-grid grid-brands-1">
                      <div id="w-node-f6b44a03-7609-b334-0579-fb83d463d73a-1c90676f" class="brand-1-column-1">
                        <p class="brand-1-name"><?php echo $points["point"] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
          <?php if ($private["button"]["url"] != "" && $private["button"]["title"] != "") { ?>
            <div class="fadein" data-scroll >
          <a href="<?php echo $private["button"]["url"] ?>" class="main-button w-inline-block">
            <div class="button-text"><?php echo $private["button"]["title"] ?></div>
            <img src="<?php echo get_template_directory_uri() ?>/images/arrow_right_alt_FILL0_wght400_GRAD0_opsz48_white.svg" loading="lazy" alt="" class="button-icon-x" />
          </a>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
  <section class="section wf-section section-vmkljdlhsp">
    <div class="is-testimonial-con " hidden>
      <div class="image-size-80">
        <div class="_3d-for-text">
          <p class="_3d-text"></p>
        </div>
        <div class="_3d-for-images">
          <div class="_3d-inner">
            <div class="image-animation-trigger is-3d-image">
              <div class="animation-color-bg"></div>
              <video class="cover-image is-3d-image" loop autoplay muted>
                <?php if(isset($process_section["video_mp4"])) : ?>
                <source src="<?php echo $process_section["video_mp4"] ?>" type="video/mp4">
                <?php endif ?>
                <?php if(isset($process_section["video_webm"])) : ?>
                <source src="<?php echo $process_section["video_webm"] ?>" type="video/webm">
                <?php endif ?>
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container in-listing-1">
      <div class="padding-inner in-services-6">
        <div class="listing-1-cms w-dyn-list">
          <div role="list" class="listing-1-cms-list w-dyn-items">
          <?php
            foreach ($process_section["particulars"] as $particular) {
            ?>
            <div role="listitem" class="listing-1-cms-item w-dyn-item fadein" data-scroll>
                  <div  class="listing-1-block-1" >
                    <div class="listing-1-content">
                      <p class="listing-2-title-text is-larger"><?php echo $particular["title"] ?></p>
                    </div>
                    <div class="listing-2-image in-services-6">
                    <div class="listing-2-content-text is-larger"><?php echo $particular["description"] ?></div>
                      <div  data-w-id="e1609259-80d4-5b36-04ac-a857771c2d69" class="small-link w-inline-block">
                      <a  href="#" class="main-button w-inline-block btn-request">
                        <div class="button-text">Enquire now</div>
                        <img src="<?php echo get_template_directory_uri() ?>/images/arrow_right_alt_FILL0_wght400_GRAD0_opsz48_white.svg" loading="lazy" alt="" class="button-icon-x" />
                      </a>
                      </div>
                      <!-- <div data-w-id="ea3febf2-d9ba-4377-38fa-a822aecf988f" class="service-1-bg-image"></div>
                      <img src="<?php echo $particular["image"] ?>" loading="lazy" data-w-id="ea3febf2-d9ba-4377-38fa-a822aecf9890" alt="" class="cover-image"> -->
                    </div>
                  </div>
                </div>
           <?php }?>
            </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section wf-section section-custom-products section-custom-solution" style="display:none">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
            <div class="cta-img">
                        <?php if(isset($get_a_quote_section["image"])) : ?>
                        <img src="<?php echo $get_a_quote_section["image"] ?>" alt="">
                        <?php endif; ?>
                    </div>
            </div>
            <div class="col-md-6">
            <h1 class="heading" data-scroll >
            <?php echo $get_a_quote_section["title"] ?>
            </h1>
            <div class="buttons fadein" data-scroll >
            <?php if ($get_a_quote_section["request"]["url"] != "" && $get_a_quote_section["request"]["title"] != "") { ?>
                <a href="<?php echo $get_a_quote_section["request"]["url"] ?>" class="main-button w-inline-block">
                    <div class="button-text"><?php echo $get_a_quote_section["request"]["title"] ?></div>
                    <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"  alt="" class="button-icon-x lazy" />
                </a>
                <?php }?>
                <?php if ($get_a_quote_section["order"]["url"] != "" && $get_a_quote_section["order"]["title"] != "") { ?>
                <a href="<?php echo $get_a_quote_section["order"]["url"] ?>" class="main-button w-inline-block secondary-btn">
                    <div class="button-text"><?php echo $get_a_quote_section["order"]["title"] ?></div>
                    <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow-white.svg"  alt="" class="button-icon-x lazy" />
                </a>
                <?php }?>
            </div>
            </div>
          </div>
        </div>
    </section>
    <?php if(isset($get_a_quote_section)) : ?>
          <div class="fullwidth-divider"></div>
        <section class="section wf-section section-custom-products">
          
        <div class="container">
          <div class="cta-row row">
            <div class="col-md-6">
            <h1 class="heading" data-scroll >
            <?php echo $get_a_quote_section["title"] ?>
            </h1>
            </div>
            <div class="col-md-6">
            <div class="col-left">
           
            <?php
              if($get_a_quote_section["certificates"]) : ?>
              <div class="certificates fadein" data-scroll >
                <?php foreach ($get_a_quote_section["certificates"] as $certificate) { ?>
                <img src="<?php echo $certificate ?>" alt="">
                <?php } ?>
              </div>
              <?php endif; ?>
            <div class="buttons fadein" data-scroll >
                <a href="javascript:void(0)" class="main-button w-inline-block btn-request">
                    <div class="button-text"><?php echo $get_a_quote_section["request"]["title"] ?></div>
                    <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"  alt="" class="button-icon-x lazy" />
                </a>
                <?php if ($get_a_quote_section["order"]["url"] != "" && $get_a_quote_section["order"]["title"] != "") { ?>
                <a target="_blank" href="<?php echo $get_a_quote_section["order"]["url"] ?>" class="main-button w-inline-block secondary-btn">
                    <div class="button-text"><?php echo $get_a_quote_section["order"]["title"] ?></div>
                    <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow-white.svg"  alt="" class="button-icon-x lazy" />
                </a>
                <?php }?>
            </div>
            </div>
            </div>
          </div>
        </div>
    </section>
    <?php endif; ?>
</main>
<?php
get_footer();
