<?php
/***********
 * Template name: Blogs
 */
get_header();
?>
    <main class="main">
      <section class="section is-hero-2-sec wf-section blog-banner">
        <div class="hero-4">
          <div class="hero-4-sizing">
            <div class="container">
              <div class="hero-4-title-block">
                <h1 class="heading " data-scroll>What’s trending?</h1>
              </div>
            </div>
          </div>
          <div class="hero-4-grid">
            <a href="#articles" id="w-node-_28057fad-4b66-34db-a8d6-524fc040f614-c040f60b" class="scroll-down-button-4 w-inline-block">
              <p class="hero-button-text-3 is-smaller">Stay updated on the cosmetic industry</p>
              <div class="hero-circle-button-2 is-smaller">
                <div class="circle-button-text-block">
                  <p class="circle-button-text-1">Explore</p>
                </div>
                <div class="circle-button-border"></div><img src="<?php echo get_template_directory_uri() ?>/images/south_west_white_300.svg" loading="lazy" alt="" class="circle-button-icon">
              </div>
            </a>
            <div id="w-node-_28057fad-4b66-34db-a8d6-524fc040f61d-c040f60b" class="hero-4-cms-socials w-dyn-list">
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
          <div class="absolute-block-200vh">
            <div class="sticky-100vh">
              <div class="custom-slider">
                <div class="slider-overlay-color"></div>
                <div class="slider-backgrounds">
                  <div class="slider-inner">
                    <div class="slider-container">
                      <div class="slider-image-block-1"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="slider-image is-1st"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
        $featured_post = get_posts(["post_type"=>"post","post_status"=>"publish","numberposts"=>1]);
        $featured_post = $featured_post[0];
      ?>
      <section id="articles" class="section wf-section">
        <div class="container">
          <div class="padding-inner pt-0">
            <div class="title-block-1">
              <div id="w-node-c07c34db-3b52-5a4c-ace6-971c64652f02-64652eff" class="title-block-column-2">
                <h1 class="heading" data-scroll>Latest on the blog</h1>
              </div>
            </div>
            <div class="blogs-cms w-dyn-list">
              <div role="list" class="blog-cms-list w-dyn-items">
                <?php
                  $args = array("posts_per_page" => "-1", "post_status" => "publish", "post_type" => "post");
                  $the_query = new WP_Query( $args ); ?>
                  <?php if ( $the_query->have_posts() ) : ?>
                  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div role="listitem" class="blog-cms-item w-dyn-item">
                      <a  href="<?php echo get_permalink() ?>" class="blog-link-block w-inline-block">
                        <div class="blog-title-block">
                          <p class="blog-name-text"><?php the_title() ?></p>
                        </div>
                        <div class="blog-thumb-background">
                        <?php echo get_the_post_thumbnail(get_the_ID(),'full') ?>
                          <div class="blog-gradient-color"></div>
                          <div class="blog-article-bg"></div>
                        </div>
                      </a>
                    </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php echo get_template_part("template-parts/newsletter") ?>
    </main>
  <?php
  get_footer();