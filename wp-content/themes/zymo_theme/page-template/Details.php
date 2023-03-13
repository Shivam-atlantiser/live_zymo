<?php
/*****
 * Template name: Blank page
 */
get_header();
?>
    <main class="main">
      <section class="section is-article-sec-1 wf-section">
        <div class="container">
          <div class="article-title-wrap">
            <div class="article-title-block">
              <h1 class="heading is-blog-title">
                <?php
                    the_title();
                ?>
              </h1>
            </div>
            <div class="hero-1-socials w-dyn-list">
              <div role="list" class="hero-1-social-list w-dyn-items">
              <?php
                $social_medias = get_field('social_media', 'option');
                foreach ($social_medias as $key => $social) {
                ?>
                <div role="listitem" class="hero-1-social-item w-dyn-item">
                  <a href="<?php echo $social["url"] ?>" class="circle-social-button w-inline-block">
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
      <section class="section with-blue-bg wf-section">
        <div class="about-article-inner">
          <div class="container">
            <div class="w-layout-grid grid-about-article">
              <div class="article-column-1">
              </div>
              <div class="article-column-1"></div>
              <div class="article-column-1">
                <p class="article-grid-text-1"></p>
                <p class="article-grid-text-2"></p>
              </div>
              <div class="article-column-1">
                <p class="article-grid-text-1"><?php echo get_the_modified_date() ?></p>
                <p class="article-grid-text-2">Updated on</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section is-blog-article wf-section">
        <div class="container is-full-width">
          <div class="padding-inner">
            <div data-w-id="1afd8504-a330-8cdc-5fee-cf66fd4ad285" class="w-layout-grid grid-article-content">
              <div id="w-node-_1afd8504-a330-8cdc-5fee-cf66fd4ad288-55906779" class="article-content">
                <div class="">
                    <?php the_content(); ?>
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