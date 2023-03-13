<footer>
      <div class="footer-grid">
          <div class="column column-1">
              <div class="inner">
                <a href="<?php echo home_url() ?>" class="logo logo-dark">
                  <img data-src="<?php echo home_url() ?>/wp-content/uploads/2023/01/Zymo-logo.svg" class="lazy" alt="">
                </a>
                <a href="<?php echo home_url() ?>" class="logo logo-white">
                  <img data-src="<?php echo home_url() ?>/wp-content/uploads/2023/01/logo-white.svg" class="lazy" alt="">
                </a>
                <div class="description">
                Zymo provides every client with high-quality, innovative, and effective cosmetic product solutions that not just exceeds expectations but also meets specific needs.
                </div>
                <div class="f-social">
                 <?php $social_medias = get_field('social_media', 'option');
foreach ($social_medias as $key => $social) {
    ?>
                <a href="<?php echo $social["url"] ?>" target="_blank"><img data-src="<?php echo $social["icon"] ?>" class="lazy" alt=""></a>
                <?php
}
?>
              </div>

              </div>
          </div>
          <div class="column column-2">
            <div class="inner">
              <div class="f-heading">
                General
              </div>
              <?php wp_nav_menu(["theme_location" => "footer1"]);?>
            </div>
          </div>
          <div class="column column-3">
            <div class="inner">
              <div class="f-heading">
                Products
              </div>
              <?php
              $categories = get_terms(array( 'taxonomy' => 'zymo_category', 'parent' => 0,"hide_empty"=>false ));
              ?>
           <ul >
            <?php
            $count = 1;
                foreach ($categories as $cate) {
                  if($count++>=7)
                  break;
                ?>
                <li><a href="<?php print_r(get_term_link($cate )); ?>"><?php echo $cate->name ?></a></li>
                <?php } ?>
                <li><a href="<?php print_r(home_url("products")); ?>" >Others</a></li>
           </ul>

            </div>
          </div>
          <div class="column column-4">
            <div class="inner">
              <div class="f-heading">
               Knowledge bases
              </div>
              <?php wp_nav_menu(["theme_location" => "footer3"]);?>

            </div>
          </div>
      </div>
      <div class="product-features-advantages footer-mobile-grid w-dyn-list">
                        <div role="list" class="p-feature-cms-list w-dyn-items">
                            <div role="listitem" class="p-feature-cms-item w-dyn-item">
                                <div data-hover="false" data-delay="0" class="accordion in-p-feature w-dropdown" style="z-index: 901;">
                                    <div class="accordion-toggle in-p-feature w-dropdown-toggle w--open" id="w-dropdown-toggle-5" aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="true role="button" tabindex="0">
                                        <p class="accordion-title in-p-feature">General</p>
                                        <div class="accordion-circle"><img src="https://assets.website-files.com/626ec505bbe6b8b32d0eea38/627d7bf74709d61b5fdfee8b_expand_more_black_24dp.svg" loading="lazy" alt="" class="accordion-arrow">
                                        </div>
                                    </div>
                                    <nav class="accordion-content w-dropdown-list w--open" id="w-dropdown-list-5" aria-labelledby="w-dropdown-toggle-5">
                                        <div class="accordion-inner in-p-feature">
                                            <div class="rich-text in-p-feature w-richtext">
                                            <?php wp_nav_menu(["theme_location" => "footer1"]);?>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div role="list" class="p-feature-cms-list w-dyn-items">
                            <div role="listitem" class="p-feature-cms-item w-dyn-item">
                                <div data-hover="false" data-delay="0" class="accordion in-p-feature w-dropdown" style="z-index: 901;">
                                    <div class="accordion-toggle in-p-feature w-dropdown-toggle w--open" id="w-dropdown-toggle-5" aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="true role="button" tabindex="0">
                                        <p class="accordion-title in-p-feature">Products</p>
                                        <div class="accordion-circle"><img src="https://assets.website-files.com/626ec505bbe6b8b32d0eea38/627d7bf74709d61b5fdfee8b_expand_more_black_24dp.svg" loading="lazy" alt="" class="accordion-arrow">
                                        </div>
                                    </div>
                                    <nav class="accordion-content w-dropdown-list w--open" id="w-dropdown-list-5" aria-labelledby="w-dropdown-toggle-5">
                                        <div class="accordion-inner in-p-feature">
                                            <div class="rich-text in-p-feature w-richtext">
                                            <?php
                                                  $categories = get_terms(array( 'taxonomy' => 'zymo_category', 'parent' => 0,"hide_empty"=>false ));
                                                  ?>
                                              <ul >
                                                <?php
                                                $count = 1;
                                                    foreach ($categories as $cate) {
                                                      if($count++>=7)
                                                      break;
                                                    ?>
                                                    <li><a href="<?php print_r(get_term_link($cate )); ?>"><?php echo $cate->name ?></a></li>
                                                    <?php } ?>
                                                    <li><a href="<?php print_r(home_url("products")); ?>" >Others</a></li>
                                              </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div role="list" class="p-feature-cms-list w-dyn-items">
                            <div role="listitem" class="p-feature-cms-item w-dyn-item">
                                <div data-hover="false" data-delay="0" class="accordion in-p-feature w-dropdown" style="z-index: 901;">
                                    <div class="accordion-toggle in-p-feature w-dropdown-toggle w--open" id="w-dropdown-toggle-5" aria-controls="w-dropdown-list-5" aria-haspopup="menu" aria-expanded="true role="button" tabindex="0">
                                        <p class="accordion-title in-p-feature">Knowledge bases</p>
                                        <div class="accordion-circle"><img src="https://assets.website-files.com/626ec505bbe6b8b32d0eea38/627d7bf74709d61b5fdfee8b_expand_more_black_24dp.svg" loading="lazy" alt="" class="accordion-arrow">
                                        </div>
                                    </div>
                                    <nav class="accordion-content w-dropdown-list w--open" id="w-dropdown-list-5" aria-labelledby="w-dropdown-toggle-5">
                                        <div class="accordion-inner in-p-feature">
                                            <div class="rich-text in-p-feature w-richtext">
                                            <?php wp_nav_menu(["theme_location" => "footer3"]);?>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
      <div class="footer-bottom">
      <div class=" container-x">
      <div class="copy">
                © 2022 Zymo Cosmetics - ALL RIGHTS RESERVED
                </div>
      <div class="copy websiteby"><span>Website by</span> <a href="http://atlantiser.com/" target="_blank">Atlantiser&reg;</a></div>
      </div>
      </div>
</footer>
<div class="request-a-form">
<div class=" career-form-c">
  <a href="javascript:void(0)" class="close">
    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                </a>
                              <span></span>
                              <span>
                              <h2 class="about-title-name">Request an estimate</h2>
                              <?php echo do_shortcode('[contact-form-7 id="457" title="Contact page form"]') ?>
                            </span>
                            <span></span>
                        </div>
</div>
</div>
</div>
<div class="hidden newsletter-form" hidden></div>
<div class="cookie-notice">
    <div class="cookie-notice-inner">
      <div class="text">
        This website uses cookies. <a href="#">Learn more</a>
      </div>
      <a href="javascript:void(0)" class="main-button w-inline-block"><div class="button-text">Okay</div><img src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg" loading="lazy" alt="" class="button-icon-x" /></a>
    </div>
</div>

<div class="video-popup">
<div class="inner">
<a href="javascript:void(0)" class="close"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg></a>
<iframe  src="https://www.youtube.com/embed/" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
</div>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <?php wp_footer()?>

</body>

</html>