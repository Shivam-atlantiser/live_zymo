<?php

/****
 * Template name: Private Label
 */
get_header();
$banner_section = get_field("banner");
$our_process_section = get_field("our_process");
$benifit_section = get_field("benifits");
$process_section = get_field("process");
$faq_section = get_field("faq",638);
$categories_section = get_field("categories",350);
$get_a_quote_section = get_field("get_a_quote",9);
$certificates = get_field("certificates");
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
                  <div class="fadein" data-scroll-x style="--delay:.8s">
                <a href="<?php echo $banner_section["button"]["url"] ?>" class="main-button w-inline-block">
                  <div class="button-text"><?php echo $banner_section["button"]["title"] ?></div>
                  <img
                    src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"
                    loading="lazy" alt=""
                    class="button-icon-x" />
                </a>
                </div>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="portfolio-3-overlay-color bg-image" data-scroll-x style="background:url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
        </div>
        <section class="private-label-numbers-section" hidden>
          <div class="container">
          <div class="private-label-numbers">
                    <div class="number-grid">
                      <div class="grid-box">
                        <h1 class="heading" data-scroll>350+</h1>
                        <div class="title">Satisfied Clients</div>
                        <div class="desc">Our client base is increasing day-by-day.</div>
                      </div>
                      <div class="grid-box">
                        <h1 class="heading" data-scroll>4000<span>kg</span></h1>
                        <div class="title">Production Capacity</div>
                        <div class="desc">Our state-of-art facilities help us to produce huge quantities</div>
                      </div>
                      <div class="grid-box">
                        <h1 class="heading" data-scroll>55K <span>sq.ft</span></h1>
                        <div class="title">Manufacturing Area</div>
                        <div class="desc">A huge area to fulfil large scale requirements.</div>
                      </div>
                      <div class="grid-box">
                        <h1 class="heading" data-scroll>200+</h1>
                        <div class="title">Dedicated Employees</div>
                        <div class="desc">We are lucky to have dedicated employees.</div>
                      </div>
                    </div>
              </div>
          </div>
              <div class="fullwidth-divider"></div>
        </section>
        <section class="section section-process section-process-private-label ">
          <div class="container">
            <div class="padding-inner in-brands">
              <div class="super-title fadein" data-scroll ><?php echo $our_process_section["super_title"] ?></div>
              <h2 class="heading" data-scroll ><?php echo $our_process_section["title"] ?></h2>
              <div class="p process-desc fadein" data-scroll   style="--delay:.5s"><?php echo $our_process_section["description"] ?></div>
                <div class="fadein" data-scroll  style="--delay:.8s">
              <a href="javascript:void(0)" class="main-button w-inline-block btn-request">
                <div class="button-text"><?php echo $our_process_section["button"]["title"] ?></div>
                <img
                  src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"
                  loading="lazy" alt=""
                  class="button-icon-x" />
              </a>
              </div>
              
            </div>
          </div>
        </section>
        <section id="details" data-w-id="5f12009d-ea60-be2a-828c-d21ce38d055e" class="section wf-section">
        <div class="vertical-images-1-wrap">
        <?php
                $images = $our_process_section['gallery'];
                if ($images) : ?>
                    <?php foreach ($images as $image) { ?>
                        <div class="about-1-photo-4">
                            <img srcset="<?php print_r($image) ?>" loading="lazy" sizes="30vw"  class="cover-image"></div>
                    <?php } ?>
                <?php endif; ?>
        </div>
      </section>
   
        <section class="section wf-section section-commitment section-commitment-private">
          <div class="container">
            <div class="super-title fadein" data-scroll >
            <?php echo $benifit_section["super_title"] ?>
            </div>
            <h2 class="heading" data-scroll > 
            <?php echo $benifit_section["title"] ?>
            </h2>
            <div class="p description fadein" data-scroll  style="--delay:.5s">
            <?php echo $benifit_section["description"] ?>
            </div>
            <div class="overview-ui-kit">
            <?php
            $counter = 1;
            foreach ($benifit_section["perks"] as $perk) {
            ?>
            <div class="fadein" data-scroll  style="--delay:<?php echo ++$counter*0.10 ?>s">
              <a
                class="overview-ui-link w-inline-block">
                  <div class="overview-ui-icon">
                    <?php if($perk["image"]) : 
                    //echo file_get_contents($perk["image"]);
                  ?>
                  <img src="<?php echo $perk["image"] ?>" alt="">
                  <?php
                  endif;?>
                  </div>
                <p class="overview-ui-name"><?php echo $perk["title"] ?></p>
              </a>
            </div>
              <?php }?>
              </div>
          </div>
        </section>
        <section  class="section
          is-overview-sec-1 wf-section section-private-label">
            <div class="is-testimonial-con ">
              <div class="image-size-80">
                <div class="_3d-for-text">
                  <p class="_3d-text"></p>
                </div>
                <div class="_3d-for-images">
                  <div class="_3d-inner">
                    <div class="image-animation-trigger is-3d-image">
                      <video class="cover-image is-3d-image" loop autoplay muted>
                      <?php if(isset($benifit_section["video_mp4"])) : ?>
                      <source src="<?php echo $benifit_section["video_mp4"] ?>" type="video/mp4">
                      <?php endif ?>
                      <?php if(isset($benifit_section["video_webm"])) : ?>
                      <source src="<?php echo $benifit_section["video_webm"] ?>" type="video/webm">
                      <?php endif ?>
                    </video>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
            <div class="overview-title-block-1">
              <div class="overview-block-2">
                <div class="super-title fadein" data-scroll >
                <?php echo $process_section["super_title"] ?>
                </div>
                <h2 data-w-id="48a029cf-c6d3-9e67-9c84-6a5448af829b" data-scroll
                  class="heading"><?php echo $process_section["title"] ?></h2>
                <div class="p description fadein" data-scroll style="--delay:.5s"><?php echo $process_section["description"] ?></div>
                <div data-w-id="dca32e9c-fbb2-4796-cd68-f8f4d9136038"
                  class="buttons-flex fadein" data-scroll>
                  <?php if ($process_section["button"]["url"] != "" && $process_section["button"]["title"] != "") { ?>
                  <a href="<?php echo $process_section["button"]["url"] ?>" class="main-button w-inline-block">
                    <div class="button-text"><?php echo $process_section["button"]["title"] ?></div><img
                      src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg"
                      loading="lazy" alt="" class="button-icon-x">
                    
                  </a>
                  <?php }?>
                </div>
              </div>
              <div class="overview-block-3">
              <?php
              $counter = 1;
              foreach ($process_section["particulars"] as $particular) {
              ?>
                <div class="custom-list-block">
                  <div class="circle-in-list">
                    <div class="circle-background"></div><img
                      src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg" loading="lazy" alt=""
                      class="custom-list-icon">
                  </div>
                  <div class="list-content">
                    <div class="step-title">Step <?php echo $counter++; ?></div>
                    <p class="list-title"><?php echo $particular["title"] ?></p>
                    <div class="list-paragraph"><?php echo $particular["description"] ?></div>
                  </div>
                  <div class="list-line"></div>
                </div>
                <?php }?>
                </div>
            </div>
          </div>
        </section>
        <?php if($categories_section) : ?>
          <div class="fullwidth-divider"></div>
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
    <?php endif; ?>
        <?php if(isset($certificates)): ?>
        <section class="section section-certificates">
          <div class="fullwidth-divider"></div>
          <div class="padding-inner">
                <div class="container">
                  <?php if($certificates["super_title"]): ?>
                  <div class="super-title fadein" data-scroll>
                    <?php echo $certificates["super_title"]; ?>
                  </div>
                  <?php endif; ?>
                  <?php if($certificates["title"]): ?>
                    <h2 class="heading" data-scroll ><?php echo $certificates["title"]; ?></h2>
                  <?php endif; ?>
                  <div class="certificates">
                  <div class="w-layout-grid">
                                <?php
                                if($certificates["certificates"]) : 
                                for($i=0;$i<count($certificates["certificates"]);$i++) {
                                ?>
                                    <div id="w-node-_2ecc3c5f-c49d-b3bb-822d-97c6609572bf-5590682c" class="gallery-size">
                                    <a href="#" data-w-id="12318d57-2f2e-653d-dc35-54aec0deeeb4" class="lightbox-link w-inline-block w-lightbox">
                                        <div href="#details" data-w-id="12318d57-2f2e-653d-dc35-54aec0deeeb5" class="gallery-circle-button-1">
                                        <div class="circle-button-text-block">
                                            <p class="circle-button-text-1 is-invert">Open</p>
                                        </div>
                                        <div class="circle-button-border is-invert"></div>
                                        <img src="<?php echo get_template_directory_uri( ) ?>/images/open_in_full_FILL0_wght300_GRAD0_opsz48.svg" loading="lazy" alt="" class="circle-button-icon">
                                        </div>
                                        <div class="image-animation-trigger">
                                            <img srcset="<?php echo $certificates["certificates"][$i]["url"] ?>"  class="cover-image">
                                        <div class="animation-color-bg"></div>
                                        </div>
                                        <script type="application/json" class="w-json">{
                    "items": [
                        {
                            "_id": "example_img",
                            "origFileName": "<?php echo $certificates["certificates"][$i]["filename"] ?>",
                            "fileName": "<?php echo $certificates["certificates"][$i]["filename"] ?>",
                            "fileSize": <?php echo $certificates["certificates"][$i]["filesize"] ?>,
                            "height": <?php echo $certificates["certificates"][$i]["height"] ?>,
                            "url": "<?php echo $certificates["certificates"][$i]["url"] ?>",
                            "width": <?php echo $certificates["certificates"][$i]["width"]; ?>,
                            "type": "image"
                        }
                    ],
                    "group": "Gallery"
                    }</script>
                                    </a>
                                    </div>
                        <?php }
                          endif;
                        ?>
                                </div>
                  </div>
                </div>
          </div>
        </section>
        <?php endif; ?>
        <div class="fullwidth-divider "></div>
        <?php if($faq_section) : ?>
        <section data-w-id="5f12009d-ea60-be2a-828c-d21ce38d055e" class="section wf-section section-faqs">
          <div class="container">
            <div class="padding-inner">
              <div class="super-title fadein" data-scroll>
              <?php echo $faq_section["super_title"] ?>
              </div>
              <h2 class="heading" data-scroll><?php echo $faq_section["title"] ?></h2>
              <div class="testimonials-cms w-dyn-list">
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
                      <div class="accordion-toggle in-testimonial w-dropdown-toggle w--open" id="w-dropdown-toggle-5"
                        aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="true" role="button"
                        tabindex="0">
                        <p class="accordion-title in-testimonial">
                        <?php echo $q_and_a["question"] ?></p>
                          <div class="accordion-circle"><img
                            src="https://assets.website-files.com/626ec505bbe6b8b32d0eea38/627d7bf74709d61b5fdfee8b_expand_more_black_24dp.svg"
                            loading="lazy" alt="" class="accordion-arrow">
                          
                        </div>
                      </div>
                      <nav class="accordion-content w-dropdown-list w--open" id="w-dropdown-list-5"
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
        <?php endif; ?>
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
