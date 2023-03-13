<?php
/****
 * Template name: About us
 */
get_header();
$banner_section = get_field("banner");
$about_section = get_field("about_us");
$foundation_section = get_field("foundation");
$vision_section = get_field("vision");
$commitment_section = get_field("our_commitment");
$manifesto_section = get_field("manifesto");
$departments_section = get_field("departments");
$get_a_quote_section = get_field("get_a_quote");
$clients_section = get_field("our_clients");
?>
<main class="main">
        <div class="home-hero-1" >
          <div class="container">
            <div class="hero-3-wrap">
              <div class="hero-3-column-1">
                <h1 class="heading home-3-title" data-scroll-x>
                  <?php echo $banner_section["title"] ?>
                </h1>
                <p class="offering-private-lab fadein" data-scroll-x style="--delay:.5s">
                <?php echo $banner_section["description"] ?>
                </p>
                <?php if ($banner_section["button"]["url"] != "" && $banner_section["button"]["title"] != "") { ?>
                <div class="fadein" data-scroll-x style="--delay:.5s">
                <a href="<?php echo $banner_section["button"]["url"] ?>" class="main-button w-inline-block">
                  <div class="button-text"><?php echo $banner_section["button"]["title"] ?></div>
                  <img
                    data-src="<?php echo get_template_directory_uri() ?>/images/arrow_right_alt_FILL0_wght400_GRAD0_opsz48_white.svg"
                     alt=""
                    class="button-icon-x lazy" />
                  
                </a>
                </div>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="portfolio-3-overlay-color bg-image" data-scroll-x style="background:url(<?php echo get_the_post_thumbnail_url() ?>)"></div>
        </div>
        <section class="section section-about-about-page">
          <div class="container">
            <div class="row row-about-about-page">
              <div class="col-left">
                <div class="super-title fadein" data-scroll >
                <?php echo $about_section["super_title"] ?>
                </div>
                <div class="p fadein" data-scroll  style="--delay:.5s"><?php echo $about_section["description"] ?></div>
              </div>
              <div class="col-right">
                <div class="about-us-numbers">
                <?php foreach ($about_section["achievement"] as $achievements) {
                ?>
                  <div class="number-box">
                    <h1 class="heading" data-scroll >
                    <?php echo $achievements["numbers"] ?>
                    </h1>
                    <div class="number-p fadein" data-scroll  style="--delay:.5s">
                    <?php echo $achievements["information"] ?>
                    </div>
                  </div>
                <?php }?>
                </div>
                <div class="about-description">
                  <h2 class="heading" data-scroll >
                  <?php echo $about_section["inner_description"] ?>
                  </h2>
                  <div class="p fadein" data-scroll  style="--delay:.5s">
                  <?php echo $about_section["more_description"] ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section section-board">
          <div class="container">
            <div class="row row-board">
              <div class="col-left">
                <h2 class="heading" data-scroll >
                <?php echo $about_section["title"] ?>
                </h2>
              </div>
              <div class="col-right">
                <div class="team">
                <?php
                  foreach ($about_section["people"] as $people) {
                  ?>
                  <div class="team-item">
                    <img data-src="<?php echo $people["image"] ?>" class="lazy" alt="">
                    <div class="profile-name">
                    <?php echo $people["name"] ?>
                    </div>
                    <div class="designation p">
                    <?php echo $people["designation"] ?>
                    </div>
                  </div>
                <?php }?>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php if($foundation_section) : ?>
        <section class="section wf-section section-history">
              <div class="container">
                    <div class="padding-inner">
                      <?php if($foundation_section["super_title"]) : ?>
                      <div class="super-title">
                        <?php echo $foundation_section["super_title"]; ?>
                      </div>
                      <?php endif; ?>
                      <?php if(is_array($foundation_section["foundation"])) : ?>
                      <div class="swiper history-swiper">
                         <div class="swiper-wrapper">
                          <?php
                            foreach ($foundation_section["foundation"] as $key => $value) {
                          ?>
                          <div class="swiper-slide">
                            <div class="history-slide">
                              <div class="img"><img data-src="<?php echo $value["image"] ?>" class="lazy" alt=""></div>
                              <div class="history-details">
                                <div class="h1"><?php echo $value["year"] ?></div>
                                <div class="h2 heading" data-scroll><?php echo $value["title"] ?></div>
                                <div class="description p">
                                <?php echo $value["description"] ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php } ?>
                         </div>
                         <div class="carousel-button is-left w-slider-arrow-left"></div>
                        <div class="carousel-button w-slider-arrow-right"></div>
                      </div>
                      
                      <div class="swiper history-numbers">
                        <?php $years = array_column($foundation_section["foundation"],"year") ?>
                      <div class="swiper-wrapper">
                      <?php
                          $count = 1;
                          foreach ($years as $year) {
                        ?>
                        <div class="swiper-slide <?php if($count++ == 1) echo "active" ?>"><?php echo $year; ?></div>
                        <?php } ?>
                      </div>
                      </div>
                      <?php endif; ?>
                    </div>
              </div>
        </section>
        <?php endif; ?>
        <section class="section wf-section section-our-services section-vision-mission">
          <div class="container">
            <div class="padding-inner row">
              <div class="service-left">
                <div class="super-title fadein" data-scroll  style="--delay:.5s"><?php echo $vision_section["super_title"] ?></div>
                <h2 class="heading" data-scroll ><?php echo $vision_section["title"] ?></h2>
                <div class="p fadein" data-scroll  style="--delay:.5s">
                <?php echo $vision_section["description"] ?>
                </div>
                <?php if ($vision_section["button"]["url"] != "" && $vision_section["button"]["title"] != "") { ?>
                  <div class="fadein" data-scroll  style="--delay:.8s">
                <a href="<?php echo $vision_section["button"]["url"] ?>" class="main-button w-inline-block">
                  <div class="button-text"><?php echo $vision_section["button"]["title"] ?></div>
                  <img
                    data-src="<?php echo get_template_directory_uri() ?>/images/arrow_right_alt_FILL0_wght400_GRAD0_opsz48_white.svg"
                     alt=""
                    class="button-icon-x lazy" />
                   
                </a>
                </div>
                <?php }?>
              </div>
              <div class="listing-2-cms w-dyn-list">
                <div role="list" class="listing-2-cms-list w-dyn-items">
                <?php
                $delay = .5;
                foreach ($vision_section["particulars"] as $particulars) {
                ?>
                  <div role="listitem" class="listing-2-cms-item w-dyn-item fadein" data-scroll style="--delay:<?php echo $delay+=.3 ?>s">
                    <div 
                      class="listing-2-block-1">
                      <div class="title-icon">
                      <p class="listing-2-title-text"><?php echo $particulars["title"] ?></p>
                      </div>
                      <p class="listing-2-content-text p" data-w-id="6b657162-5826-ab74-ab78-56fc72def684">
                        <?php echo $particulars["description"] ?>
                        </p>
                      <div class="listing-2-image">
                        <div data-w-id="6b657162-5826-ab74-ab78-56fc72def68a"
                          class="service-1-bg-image"></div>
                        <img
                          data-src="<?php echo $particulars["image"] ?>"
                          
                          data-w-id="6b657162-5826-ab74-ab78-56fc72def68b"
                          alt="" class="cover-image lazy" />
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  </div>
              </div>
            </div>
          </div>
          <div class="fullwidth-divider"></div>
        </section>
        <section class="section wf-section section-commitment">
          <div class="container">
            <div class="super-title fadein" data-scroll >
            <?php echo $commitment_section["super_title"] ?>
            </div>
            <h2 class="heading" data-scroll >
            <?php echo $commitment_section["title"] ?>
            </h2>
            <div class="p description fadein" data-scroll  style="--delay:.5s">
            <?php echo $commitment_section["description"] ?>
            </div>
            <div class="overview-ui-kit">
            <?php
            $counter = 1;
            foreach ($commitment_section["particulars"] as $particular) {
            ?>
            <div class="fadein" data-scroll  style="--delay:<?php echo ++$counter*0.10 ?>s">
              <a href="#"
                class="overview-ui-link w-inline-block">
                <div class="bg">
                <div class="overview-ui-icon">
                  <?php //echo file_get_contents($particular["image"]); ?>
                  <img data-src="<?php echo $particular["image"]; ?>" alt="" class="lazy">
                </div>
                <p class="overview-ui-name"><?php echo $particular["title"] ?></p>
                </div>
              </a>
              </div>
              <?php }?>
            </div>
          </div>
          <div class="fullwidth-divider"></div>
        </section>
        <section data-w-id="48a029cf-c6d3-9e67-9c84-6a5448af8298" class="section
          is-overview-sec-1 wf-section section-menifesto">
          <div class="container">
            <div class="overview-title-block-1">
              <div class="overview-block-2">
                <div class="super-title fadein" data-scroll >
                <?php echo $manifesto_section["super_title"] ?>
                </div>
                <h2 data-w-id="48a029cf-c6d3-9e67-9c84-6a5448af829b" data-scroll 
                  class="heading"><?php echo $manifesto_section["title"] ?></h2>
                <div class="p description fadein" style="--delay:.5s" data-scroll >
                <?php echo $manifesto_section["description"] ?>
                </div>
                <div data-w-id="dca32e9c-fbb2-4796-cd68-f8f4d9136038"
                  class="buttons-flex fadein" style="--delay:.5s" data-scroll >
                  <?php if ($manifesto_section["button"]["url"] != "" && $manifesto_section["button"]["title"] != "") { ?>
                  <a href="<?php echo $manifesto_section["button"]["url"] ?>" class="main-button w-inline-block">
                    <div class="<?php echo $manifesto_section["button"]["url"] ?>"><?php echo $manifesto_section["button"]["title"] ?></div><img
                      data-src="<?php echo get_template_directory_uri() ?>/images/arrow_right_alt_FILL0_wght400_GRAD0_opsz48_white.svg"
                       alt="" class="button-icon-x lazy">
                    
                  </a>
                  <?php }?>
                </div>
              </div>
              <div class="overview-block-3">
              <?php
              foreach ($manifesto_section["particulars"] as $particular) {
              ?>
                <div class="custom-list-block">
                  <div class="circle-in-list">
                    <div class="circle-background"></div><img
                      data-src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg"  alt=""
                      class="custom-list-icon lazy">
                  </div>
                  <div class="list-content">
                    <p class="list-title"><?php echo $particular["heading"] ?></p>
                    <p class="list-paragraph"><?php echo $particular["description"] ?></p>
                  </div>
                  
                </div>
                <?php }?>
                </div>
            </div>
          </div>
        </section>
        <section class="section is-brand-2-sec wf-section about-us-clients">
          <div class="container">
            <div class="w-layout-grid grid-brands-2">
              <div id="w-node-e17a0150-af09-799e-6be4-b5b0726d6adb-726d6ad8" class="">
                <?php if($clients_section["super_title"]): ?>
                  <div class="super-title fadein" data-scroll >
                    <?php echo $clients_section["super_title"]; ?>
                  </div>
                <?php endif; ?>
                <?php if($clients_section["title"]): ?>
                <h2 id="w-node-e17a0150-af09-799e-6be4-b5b0726d6adc-726d6ad8" data-scroll  class="heading"><?php echo $clients_section["title"] ?></h2>
                <?php endif; ?>
              </div>
              <div class="brands-2-cms w-dyn-list">
                <div role="list" class="brand-2-cms-list w-dyn-items">
                <?php
                $images = $clients_section['image_box'];
                if ($images) : 
                $counter = 1; ?>
                    <?php foreach ($images as $image) { ?>
                  <div role="listitem" class="brand-2-cms-item w-dyn-item">
                    <a href="#" class="brand-2-link w-inline-block">
                    <img data-src="<?php print_r($image) ?>"   class="brand-2-image lazy" />  
                  </a>
                  </div>
                  <?php } 
                endif; ?>
                </div>
              </div>
            </div>
          </div>
        </section>
          <section class="section wf-section section-department">
            <div class="container">
                  <div class="super-title fadein" data-scroll ><?php echo $departments_section["super_title"] ?></div>
                  <h2 class="heading fadein" data-scroll ><?php echo $departments_section["title"] ?></h2>
              <div class="padding-inner">
                <div class="listing-2-cms w-dyn-list">
                  <div role="list" class="listing-2-cms-list w-dyn-items">
                  <?php
                        foreach ($departments_section["particulars"] as $particular) {
                        ?>
                    <div role="listitem" class="listing-2-cms-item w-dyn-item fadein" data-scroll >
                      <div
                        class="listing-2-block-1">
                        <div class="title-icon">
                        <p class="listing-2-title-text"><?php echo $particular["label"] ?></p></div>
                          <div class="listing-2-content-text p" data-w-id="6b657162-5826-ab74-ab78-56fc72def684">
                          <?php echo $particular["description"] ?>
                        </div>
                        <div role="list" class="p-feature-cms-list
                        w-dyn-items">
                            <div role="listitem" class="p-feature-cms-item
                            w-dyn-item">
                                <div data-hover="false" data-delay="0" class="accordion
                                in-p-feature w-dropdown" style="z-index: 901;">
                                    <div class="accordion-toggle
                                    in-p-feature
                                    w-dropdown-toggle w--open" id="w-dropdown-toggle-5"
                                        aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="true"
                                        role="button" tabindex="0">
                                        <p class="accordion-title
                                        in-p-feature">How <?php echo $particular["label"]; ?> team can help you? </p>
                                        <div class="accordion-circle"><img
                                                data-src="https://assets.website-files.com/626ec505bbe6b8b32d0eea38/627d7bf74709d61b5fdfee8b_expand_more_black_24dp.svg"
                                                 alt="" class="accordion-arrow lazy">
                                        </div>
                                    </div>
                                    <nav class="accordion-content
                                    w-dropdown-list w--open" id="w-dropdown-list-5"
                                        aria-labelledby="w-dropdown-toggle-5">
                                        <div class="
                                        in-p-feature">
                                            <div class="
                                            in-p-feature
                                            w-richtext p">
                                                <?php if(isset($particular["how_to"])) echo $particular["how_to"]; ?>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="listing-2-image">
                          <div data-w-id="6b657162-5826-ab74-ab78-56fc72def68a"
                            class="service-1-bg-image"></div>
                          <img
                            data-src="<?php echo $particular["image"] ?>"
                            
                            data-w-id="6b657162-5826-ab74-ab78-56fc72def68b"
                            alt="" class="cover-image lazy" />
                        </div>
                      </div>
                    </div>
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