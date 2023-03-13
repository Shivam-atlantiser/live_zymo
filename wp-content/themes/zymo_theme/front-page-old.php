<?php

/**
 * Front Page
 * 
 * @package basics
 */

get_header();
$banner_section = get_field("banner");
$why_zymo_section = get_field("why_zymo");
$why_choose_section = get_field("why_choose_us");
$process_section = get_field("process");
$clients_section = get_field("our_clients");
$categories_section = get_field("categories",350);
$standards_section = get_field("standards");
$get_a_quote_section = get_field("get_a_quote",9);
$testimonial_section = get_field("testimonial");
$faq_section = get_field("faq",638);
$blogs_section = get_field("blogs");

?>

<div id="icon-container">
    <?php
    for ($i=37; $i < 91; $i++) { 
      ?>
      <img style="<?php if($i!=37){ echo "display:none"; } ?>" src="<?php echo get_template_directory_uri() ?>/videos/banner-2/zymo-banner-<?php echo $i ?>.jpeg" alt="">
      <?php
    }
    ?>
</div>

<div class="banner-video">
    <video muted src="<?php echo get_template_directory_uri() ?>/videos/video-part-1.mp4" tabindex="0" autobuffer="autobuffer" preload="preload"></video>
</div>
<main class="main" >
    <div class="home-hero-1 home-page">
        <div class="container">
            <div class="hero-3-wrap">
                <div class="hero-3-column-1">
                    <?php
                    if ($banner_section["title"] != "" && isset($banner_section["title"])) {
                    ?>
                        <h1 class="heading home-3-title" data-scroll-x>
                            <?php echo $banner_section["title"] ?>
                        </h1>
                    <?php } ?>
                    <div data-scroll-x >
                    <div class="offering-private-lab fadein" style="--delay:.5s">
                        <?php echo $banner_section["description"] ?>
                    </div>
                    </div>
                    <?php if ($banner_section["button"]["url"] != "" && $banner_section["button"]["title"] != "") { ?>
                        <div class="fadein" data-scroll-x style="--delay:.8s" >
                        <a href="<?php echo $banner_section["button"]["url"] ?>" class="main-button w-inline-block">
                            <div class="button-text"><?php echo $banner_section["button"]["title"] ?></div>
                            <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"  alt="" class="button-icon-x lazy" />
                        </a>
                    </div>
                    <?php } ?>
                    <ul class="home-hero-list fadein" data-scroll-x style="--delay:1.1s" >
                        <?php
                        if(is_array($banner_section["perks"])):
                        foreach ($banner_section["perks"] as $perk) {
                        ?>
                            <li><?php echo $perk["title"] ?></li>
                        <?php
                        }
                    endif;
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="portfolio-3-overlay-color"></div> -->
    </div>
   <div class="mbile-video-c">
   <div class="mobile-video">
    </div>
    <div class="mobile-entrance">
    </div>
   </div>
    <section class="section section-about ">
        <div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="about-column-inner">
                        <div class="about-column-inner-1">
                            <div class="super-title fadein" data-scroll-x><?php echo $why_zymo_section["super_title"] ?></div>
                            <h2 class="heading" data-scroll><?php echo $why_zymo_section["title"] ?></h2>
                        </div>
                        <div class="about-column-inner-2">
                            <div class="desc fadein" data-scroll style="--delay:.5s">
                                <?php echo $why_zymo_section["super_description"] ?>
                            </div>
                            <p class="fadein" data-scroll style="--delay:.8s">
                                <?php echo $why_zymo_section["description"] ?>
                            </p>
                            <div class="fadein" data-scroll style="--delay:.5s">
                            <?php if ($why_zymo_section["button"]["url"] != "" && $why_zymo_section["button"]["title"] != "") { ?>
                                <a href="<?php echo $why_zymo_section["button"]["url"] ?>" class="main-button w-inline-block">
                                    <div class="button-text"><?php echo $why_zymo_section["button"]["title"] ?></div>
                                    <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"  alt="" class="button-icon-x lazy" />
                                </a>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-brands section-why-choose-us">
        <div class="container">
            <div class="padding-inner in-brands">
                <div class="super-title fadein" data-scroll><?php echo $why_choose_section["super_title"] ?></div>
                <h2 class="heading" data-scroll>
                    <?php echo $why_choose_section["description"] ?>
                </h2>
                <div class="brands-cms w-dyn-list fadein" data-scroll style="--delay:.5s">
                    <div role="list" class="brand-cms-list w-dyn-items">
                        <?php
                        foreach ($why_choose_section["benifits"] as $benifit) {
                        ?>
                            <div  role="listitem" class="brand-cms-item w-dyn-item" style="opacity: 1">
                                <a class="brand-link w-inline-block">
                                    <div class="brand-image-1">
                                        <?php //echo file_get_contents($benifit["image"]) ?>
                                        <img src="<?php echo $benifit["image"] ?>" alt="">
                                    </div>
                                    <!-- <img data-src="<?php echo $benifit["image"] ?>"   class="brand-image-1 lazy" /> -->
                                    <p class="brand-client-name-1"><?php echo $benifit["image_title"] ?></p>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section wf-section section-our-services">
        <div class="container">
            <div class="padding-inner row">
                <div class="service-left">
                    <div class="super-title fadein" data-scroll><?php echo $process_section["super_title"] ?></div>
                    <h2 class="heading" data-scroll><?php echo $process_section["title"] ?></h2>
                    <div class="p fadein" data-scroll style="--delay:.5s">
                        <?php echo $process_section["description"] ?>
                    </div>
                    <div class="fadein" data-scroll style="--delay:.8s">
                    <?php if (isset($process_section["button"]["url"]) && isset($process_section["button"]["title"])) { ?>
                        <a href="<?php echo $process_section["button"]["url"] ?>" class="main-button w-inline-block">
                            <div class="button-text"><?php echo $process_section["button"]["title"] ?></div>
                            <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"  alt="" class="button-icon-x lazy" />
                        </a>
                    <?php } ?>
                    </div>
                </div>
                <div class="listing-2-cms w-dyn-list">
                    <div role="list" class="listing-2-cms-list w-dyn-items">
                        <?php
                        $counter = .5;
                        foreach ($process_section["side_layouts"] as $side) {
                        ?>
                        <a href="<?php echo $side["link"] ?>" role="listitem" class="listing-2-cms-item w-dyn-item fadein" data-scroll style="--delay:<?php echo $counter+=.3; ?>s">
                                <div class="listing-2-block-1">
                                    <div class="title-icon">
                                    <p class="listing-2-title-text"><?php echo $side["title"] ?></p>
                                    </div>
                                        <p class="listing-2-content-text p" data-w-id="6b657162-5826-ab74-ab78-56fc72def684">
                                            <?php echo $side["description"] ?>
                                        </p>
                                    <div class="listing-2-image">
                                        <div data-w-id="6b657162-5826-ab74-ab78-56fc72def68a" class="service-1-bg-image"></div>
                                         <img data-src="<?php echo ($side["image"]) ?>"  data-w-id="6b657162-5826-ab74-ab78-56fc72def68b" alt="" class="cover-image lazy" />
                                    </div>
                                </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
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
    <section class="section wf-section section-categories">
        <div class="container">
            <div class="title-block-1">
                <div id="w-node-c07c34db-3b52-5a4c-ace6-971c64652f02-64652eff" class="title-block-column-2">
                    <div class="super-title fadein" data-scroll><?php echo $categories_section["super_title"] ?></div>
                    <h2 class="heading" data-scroll><?php echo $categories_section["title"] ?></h2>
                </div>
            </div>
            <div class="services-4-cms w-dyn-list">
                <div role="list" class="service-4-cms-list w-dyn-items">
                <?php
                $categories = get_terms(array( 'taxonomy' => 'zymo_category', 'parent' => 0,"hide_empty"=>false ));
                $counter=1;
                foreach ($categories as $particular) {
                ?>
                    <div id="w-node-c1ea538e-b2d8-211e-2f23-b77f2e5cdf33-b499b140" role="listitem" class="service-4-cms-item w-dyn-item">
                        <a href="<?php echo get_term_link($particular) ?>" data-w-id="b70812e3-462b-0f96-d99c-95740492bfa8"  class="service-4-link-block w-inline-block">
                            <div class="service-4-image-1">
                                <div class="image-animation-trigger">
                                    <div class="animation-color-bg" style="">
                                    </div>
                                    <?php if(function_exists('z_taxonomy_image_url')) : ?>
                                    <img src="<?php echo z_taxonomy_image_url($particular->term_id);  ?>" class="lazy"  alt="" sizes="(max-width: 479px) 44px, (max-width: 767px) 88px, (max-width: 991px) 96px, (max-width: 1439px) 8vw, (max-width: 1919px) 112px, 128px" srcset="" class="cover-image"/>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <p class="service-4-name">
                                <?php echo $particular->name ?>
                            </p>
                            <div class="service-4-icon-block">
                                <img data-src="<?php echo get_template_directory_uri()."/images/svg/right-arrow-black.svg" ?>"  data-w-id="" alt="" class="service-4-icon lazy" />
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    <section class="section wf-section section-standard">
        <div class="container">
            <?php if(isset($standards_section["super_title"])) : ?>
            <div class="super-title faden" data-scroll>
            <?php echo $standards_section["super_title"] ?>
            </div>
            <?php endif; ?>
            <h2 class="heading" data-scroll><?php echo $standards_section["title"] ?></h2>

            <div class="blogs-cms w-dyn-list">
                <div role="list" class="blog-cms-list w-dyn-items">
                    <?php
                        $counter = 1;
                        foreach ($standards_section["information"] as $information) {
                        ?>
                    <div role="listitem" class="blog-cms-item w-dyn-item fadein" data-scroll style="--delay:<?php echo ++$counter*0.08 ?>s">
                        <a data-w-id="e696bb9c-bc63-330f-0d5d-85e8bf096567" class="blog-link-block w-inline-block" style="color: rgb(39, 43, 61)">
                            <img data-src="<?php echo $information["image"] ?>" alt="" class="lazy" />
                            <div class="title">
                            <?php echo $information["title"] ?>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                    </div>

            </div>
        </div>
    </section>
    <section class="section wf-section section-custom-products" style="background-image:url(<?php echo $get_a_quote_section["background_image"]; ?>);display:none;">
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
                <h1 class="heading" data-scroll>
            <?php echo $get_a_quote_section["title"] ?>
            </h1>
            <div class="buttons fadein" data-scroll >
                <a href="javascript:void(0)" class="main-button w-inline-block btn-request">
                    <div class="button-text"><?php echo $get_a_quote_section["request"]["title"] ?></div>
                    <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"  alt="" class="button-icon-x lazy" />
                </a>
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
        </div>
    </section>
    <?php endif; ?>
    <div class="fullwidth-divider"></div>
    <?php 
    $testimonials = get_field("testimonials",473);
    ?>
    <section class="section wf-section section-testimonials">
        <div class="container">
            <div class="super-title fadein" data-scroll>
            <?php echo $testimonial_section["super_title"] ?>
            </div>
            <h2 class="heading" data-scroll>
            <?php echo $testimonial_section["title"] ?>
            </h2>
            <div class="padding-inner pt-4em">
                <div class="carousel-max-width">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                    <?php
                    $count = 1;
                    foreach ($testimonials as $testimonial) {
                        if($count++>=4){
                            break;
                        }
                    ?>
                    <div class="swiper-slide">
                    <article class=" w-slide">
                                <div href="#" class="carousel-block">
                                    <p class="testimonial-title-2">
                                    <?php echo $testimonial["message"] ?>
                                    </p>
                                    <div class="slider-info">
                                        <?php if($testimonial["profile_image"]): ?><img src="<?php echo $testimonial["profile_image"] ?>" alt=""> <?php endif; ?>
                                        <div class="slider-info-name">
                                            <div class="name"><?php echo $testimonial["name"] ?></div>
                                            <div class="cate-total"><?php echo $testimonial["company_name"] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                    </div>
                    <?php } ?>
                    
                    </div>
                    <div class="carousel-button is-left w-slider-arrow-left"></div>
                        <div class="carousel-button w-slider-arrow-right"></div>
                </div>
                    
                </div>
            </div>
        </div>
        <div class="fullwidth-divider"></div>
    </section>
    
    <section data-w-id="5f12009d-ea60-be2a-828c-d21ce38d055e" class="section wf-section section-faqs bg-primary">
          <div class="container">
            <div class="padding-inner">
              <div class="super-title fadein" data-scroll>
              <?php echo $faq_section["super_title"] ?>
              </div>
              <h2 class="heading" data-scroll><?php echo $faq_section["title"] ?></h2>
              <div class="testimonials-cms w-dyn-list fadein" data-scroll style="--delay:.5s">
                <div role="list" class="testimonial-cms-list w-dyn-items">
                <?php
                $counter = 1;
                    foreach ($faq_section["question_answers"] as $q_and_a) {
                        if($counter>=7){
                            break;
                        }
                    ?>
                  <div role="listitem" class="testimonial-cms-item w-dyn-item fadein" data-scroll style="--delay:<?php echo ++$counter*0.10 ?>s">
                    <div data-hover="false" data-delay="0" class="accordion in-testimonial w-dropdown"
                      style="z-index: 901;">
                      <div class="accordion-toggle in-testimonial w-dropdown-toggle " id="w-dropdown-toggle-5"
                        aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="true" role="button"
                        tabindex="0">
                        <p class="accordion-title in-testimonial">
                        <?php echo $q_and_a["question"] ?></p>
                          <div class="accordion-circle"><img
                            data-src="<?php echo get_template_directory_uri() ?>/images/svg/627d7bf74709d61b5fdfee8b_expand_more_black_24dp.svg"
                             alt="" class="accordion-arrow lazy">
                          
                        </div>
                      </div>
                      <nav class="accordion-content w-dropdown-list " id="w-dropdown-list-5"
                        aria-labelledby="w-dropdown-toggle-5">
                        <div class="accordion-inner in-testimonial">
                          <div class="rich-text in-testimonial w-richtext">
                            <p><?php echo $q_and_a["answer"] ?></p>
                          </div>
                        </div>
                      </nav>
                    </div>
                  </div>
                  <?php }?>
                  </div>
              </div>
              <div class="view-more-faqs">
              <a href="<?php echo home_url("faqs") ?>" class="main-button w-inline-block fadein" data-scroll>
                                <div class="button-text">
                                View more
                                </div>
                                <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"  alt="" class="button-icon-x lazy" />
                </a>
              </div>
            </div>
          </div>
          <div class="fullwidth-divider "></div>
    </section>
    
    <section class="section wf-section section-blogs" data-w-page="636de5ff61df2940af90676c">
        <div class="container">
            <div class="padding-inner pt-0">
                <div class="title-block-1">
                    <div id="w-node-abaad8f9-8437-7d97-3e84-92da999b0a39-999b0a36" class="">
                        <div class="super-title fadein" data-scroll>
                        <?php echo $blogs_section["super_title"] ?>
                        </div>
                        <div class="blog-title-inner">
                            <h2 class="heading" data-scroll><?php echo $blogs_section["title"] ?></h2>
                            <?php if ($blogs_section["button"]["url"] != "" && $blogs_section["button"]["title"] != "") { ?>
                            <a href="<?php echo $blogs_section["button"]["url"] ?>" class="main-button w-inline-block fadein w-hidden-small w-hidden-tiny" data-scroll>
                                <div class="button-text">
                                <?php echo $blogs_section["button"]["title"] ?>
                                </div>
                                <img data-src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"  alt="" class="button-icon-x lazy" />
                            </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="blogs-cms w-dyn-list fadein" data-scroll>
                    <div role="list" class="swiper swiper-blogs">
                        <div class="swiper-wrapper">
                        <?php
                            $args = array(
                            'numberposts' => 3,
                            'post_type'   => 'post',
                            );
                            $latest_blogs = get_posts( $args );
                            foreach($latest_blogs as $blog) {?>
                        <div role="listitem" class="blog-cms-item w-dyn-item swiper-slide">
                            <a href="<?php echo get_permalink($blog->ID) ?>" class="blog-link-block w-inline-block">
                                <div class="blog-title-block">
                                    <p class="blog-name-text"><?php echo $blog->post_title ?></p>
                                </div>
                                <div class="blog-thumb-background">
                                    <img data-src="<?php echo get_the_post_thumbnail_url($blog->ID)?>"  alt="" class="cover-image lazy" />
                                    <div class="blog-gradient-color"></div>
                                    <div class="blog-article-bg"></div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                        <div role="listitem" class="blog-cms-item w-dyn-item swiper-slide view-more">
                            <a href="<?php echo $blogs_section["button"]["url"]; ?>" class="blog-link-block w-inline-block">
                                <div class="blog-title-block">
                                    <p class="blog-name-text">View all blogs</p>
                                </div>
                            </a>
                        </div>
                       </div>
                       </div>
                       <div data-delay="4000" data-animation="slide" class="carousel w-slider" data-autoplay="false" data-easing="ease-in-out-circ" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="0" data-duration="900" data-infinite="false">
                        
                        <div class="carousel-button is-left w-slider-arrow-left-blog"></div>
                        <div class="carousel-button w-slider-arrow-right-blog"></div>
                        <div class="carousel-nav w-slider-nav w-slider-nav-invert"></div>
                        <div class="carousel-dot-custom-design w-embed">
                            <style>
                                .w-slider-dot {
                                    -webkit-box-flex: 1;
                                    -webkit-flex: 1;
                                    -ms-flex: 1;
                                    flex: 1;
                                    height: 1px !important;
                                    background-color: #272b3d;
                                    opacity: 0.2 !important;
                                    margin: 0px !important;
                                    display: block !important;
                                    width: auto !important;
                                }

                                .w-slider-dot.w-active {
                                    background-color: #272b3d;
                                    opacity: 1 !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo get_template_part("template-parts/newsletter") ?>
</main>
<?php
get_footer();
