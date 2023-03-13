<?php
/**
 * The template for displaying all single posts
 *
 *
 * @package basics
 */    
get_header(); ?>
<section class="section is-article-sec-1 wf-section">
        <div class="container">
          <div class="article-title-wrap">
            <div class="article-title-block">
              <h1 class="heading is-blog-title" data-scroll><?php the_title()?>
            </h1>
            </div>
            <div class="hero-1-socials w-dyn-list">
              <div role="list" class="hero-1-social-list w-dyn-items">
              <?php
                $social_medias = get_field('social_media', 'option');
                foreach ($social_medias as $key => $social) {
                ?>
                <div role="listitem" class="hero-1-social-item w-dyn-item">
                  <a href="<?php echo $social["url"] ?>" target="_blank" class="circle-social-button w-inline-block">
                    <div class="circle-button-text-block">
                      <p class="circle-button-text-1 is-social-text is-white"><?php echo $social["name"] ?></p>
                    </div><img src="<?php echo $social["icon"] ?>" loading="lazy" alt="" class="circle-button-icon is-social">
                    <div class="circle-button-border is-social-border is-white"></div>
                  </a>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section with-blue-bg wf-section" hidden>
        <div class="about-article-inner">
          <div class="container">
            <div class="w-layout-grid grid-about-article">
              <div class="article-column-1">
                <div class="about-team-images">
                  <div class="circle-image-1 is-1st"><img src="<?php echo get_template_directory_uri() ?>/images/628bde5596f774967fd297a8_pexels-lara-jameson-9363208 (1)-p-500.jpeg" loading="lazy" alt="" class="cover-image"></div>
                  <div class="circle-image-1 is-2nd"><img src="<?php echo get_template_directory_uri() ?>/images/628bde5596f774967fd297a8_pexels-lara-jameson-9363208 (1)-p-500.jpeg" loading="lazy" alt="" class="cover-image"></div>
                </div>
              </div>
              <div class="article-column-1">
                <p class="article-grid-text-1">Spencer Hodgson</p>
                <p class="article-grid-text-2">article Author</p>
              </div>
              <div class="article-column-1">
                <p class="article-grid-text-1">Photographer</p>
                <p class="article-grid-text-2">Author&#x27;s role</p>
              </div>
              <div class="article-column-1">
                <p class="article-grid-text-1">May 28, 2022</p>
                <p class="article-grid-text-2">Article Published</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section wf-section">
        <div class="container">
          <!-- <div class="padding-inner">
            <div class="grid-about-article">
              <div id="w-node-_1235ebfa-6d17-ba4c-a90a-7426398c0dfc-b1906773" class="title-dot in-blog"></div>
              <p id="w-node-c7bb22b8-9394-04b1-9373-60c3024de8f6-b1906773" class="article-large-description"><?php the_title() ?></p>
            </div>
          </div> -->
        </div>
      </section>
      <section class="section wf-section single-blog-thumb">
        <div class="container">
          <div class="article-image-size">
            <div class="_3d-for-text">
              <p class="_3d-text"></p>
            </div>
            <div class="_3d-for-images">
              <div class="_3d-inner">
                <div class="image-animation-trigger is-3d-image">
                  <div class="animation-color-bg"></div><img src="<?php echo get_the_post_thumbnail_url(  ) ?>" loading="lazy" alt="" class="cover-image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section is-blog-article wf-section">
        <div class="container is-full-width">
          <div class="padding-inner">
            <div data-w-id="c7bb22b8-9394-04b1-9373-60c3024de902" class="w-layout-grid grid-article-content">
              <div id="w-node-c7bb22b8-9394-04b1-9373-60c3024de905-b1906773" class="article-content">
                <div class="rich-text w-richtext">
					<?php the_content()?>
				</div>
              </div>
              <div id="w-node-c7bb22b8-9394-04b1-9373-60c3024de907-b1906773" class="article-side-image">
                <div class="hero-1-socials w-dyn-list">
                  <div role="list" class="hero-1-social-list in-article w-dyn-items">
                  <div role="listitem" class="hero-1-social-item w-dyn-item">
                      <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>" target="_blank" class="circle-social-button w-inline-block">
                        <div class="circle-button-text-block">
                          <p class="circle-button-text-1 is-social-text">Facebook</p>
                        </div><img src="<?php echo home_url("/wp-content/uploads/2022/12/facebook.svg") ?>" loading="lazy" alt="" class="circle-button-icon is-social">
                        <div class="circle-button-border is-social-border"></div>
                      </a>
                    </div>
                    <div role="listitem" class="hero-1-social-item w-dyn-item">
                      <a href="https://twitter.com/intent/tweet?text=Hey, check out this cool blog I found:+<?php echo get_permalink() ?>" target="_blank" class="circle-social-button w-inline-block">
                        <div class="circle-button-text-block">
                          <p class="circle-button-text-1 is-social-text">Twitter</p>
                        </div><img src="<?php echo home_url("wp-content/uploads/2022/12/icons8-twitter-1.svg") ?>" loading="lazy" alt="" class="circle-button-icon is-social">
                        <div class="circle-button-border is-social-border"></div>
                      </a>
                    </div>
                    <div role="listitem" class="hero-1-social-item w-dyn-item">
                      <a href="https://www.linkedin.com/sharing/share-offsite/?mini=true&url=<?php echo get_permalink() ?>"  target="_blank" class="circle-social-button w-inline-block">
                        <div class="circle-button-text-block">
                          <p class="circle-button-text-1 is-social-text">Linkedin</p>
                        </div><img src="<?php echo home_url("wp-content/uploads/2022/12/icons8-linkedin-2.svg") ?>" loading="lazy" alt="" class="circle-button-icon is-social">
                        <div class="circle-button-border is-social-border"></div>
                      </a>
                    </div>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="brands" class="section is-author-sec wf-section" hidden>
        <div class="container in-listing-1">
          <div class="author-inner">
            <div class="listing-1-cms w-dyn-list">
              <div role="list" class="listing-1-cms-list w-dyn-items">
                <div role="listitem" class="listing-1-cms-item w-dyn-item">
                  <div class="listing-1-block-1">
                    <div class="listing-1-content">
                      <p class="listing-2-title-text is-larger">
                        Spencer Hodgson
                      </p>
                      <p class="plus-text is-3rd">+</p>
                      <p class="listing-2-content-text is-larger">Hi there. My name is Spencer Hodgson, and I am the content editor of this blog. I recently stepped into this role.</p>
                      <a href="#" class="small-link w-inline-block">
                        <p class="small-text-link">Author</p>
                        <div class="small-link-line"></div>
                      </a>
                    </div>
                    <div class="listing-2-image in-services-6">
                      <div class="image-animation-trigger"><img src="<?php echo get_template_directory_uri() ?>/images/628bde5596f774967fd297a8_pexels-lara-jameson-9363208 (1)-p-500.jpeg" loading="lazy" alt="" class="cover-image">
                        <div class="animation-color-bg"></div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section with-blue-bg wf-section section-blogs">
        <div class="container">
          <div class="padding-inner">
          <div class="blogs-cms w-dyn-list">
                    <div role="list" class="swiper swiper-blogs">
                        <div class="swiper-wrapper">
                        <?php
                            $args = array(
                              'post_type' => 'post',
                              'posts_per_page' => 3,
                              'post_status' => 'publish',
                              'post__not_in' => array( get_the_ID() ),
                              'orderby' => 'rand',
                            );
                          
                            $latest_blogs = get_posts( $args );
                            foreach($latest_blogs as $blog) {?>
                        <div role="listitem" class="blog-cms-item w-dyn-item swiper-slide">
                            <a data-w-id="e696bb9c-bc63-330f-0d5d-85e8bf096567" href="<?php echo get_permalink($blog->ID) ?>" class="blog-link-block w-inline-block">
                                <div class="blog-title-block">
                                    <p class="blog-name-text"><?php echo $blog->post_title ?></p>
                                </div>
                                <div class="blog-thumb-background">
                                    <img src="<?php echo get_the_post_thumbnail_url($blog->ID)?>" loading="lazy" alt="" class="cover-image" />
                                    <div class="blog-gradient-color"></div>
                                    <div class="blog-article-bg"></div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
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
	
<?php
get_sidebar();
get_footer();
