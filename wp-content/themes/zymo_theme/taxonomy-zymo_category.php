<?php
get_header();
$process_section = get_field("our_process",435);
$get_a_quote_section = get_field("get_a_quote",9);
$banner_section = get_field("banner",435);
?>
 <main class="main" data-tax-id="<?php echo get_queried_object()->term_id ?>">
      <div class="home-hero-1 products-hero">
        <div class="container">
            <div class="hero-3-wrap">
            <div class="hero-3-column-1">
                <?php if(isset($banner_section["title"])) : ?>
              <h1 class="heading home-3-title" data-scroll-x>
                All Products
              </h1>
              <?php endif; ?>
              <div class="product-numbers fadein" data-scroll-x>
                 <?php if(is_array($banner_section["stats"])) : 
                    foreach($banner_section["stats"] as $data) {
                 ?>
                <div class="box">
                  <div class="h2 heading"><?php echo $data["numbers"] ?></div>
                  <div class="info"><?php echo $data["title"] ?></div>
                </div>
                <?php } endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio-3-overlay-color"></div>
      </div>
      <div class="mobile-fillters">
        <div class="categories">
          <div class="title">Filter by <span class="close-filter"><img src="<?php echo get_template_directory_uri()."/images/close.png" ?>" ></span></div>
          <?php $categories = get_terms(array( 'taxonomy' => 'zymo_category', 'parent' => 0,"hide_empty"=>false )); 
                foreach ($categories as $cate) {
                ?>
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
                                        in-p-feature"><?php echo $cate->name ?></p>
                                        <div class="accordion-circle"><img
                                                src="https://assets.website-files.com/626ec505bbe6b8b32d0eea38/627d7bf74709d61b5fdfee8b_expand_more_black_24dp.svg"
                                                loading="lazy" alt="" class="accordion-arrow">
                                        </div>
                                    </div>
                                    <nav class="accordion-content
                                    w-dropdown-list w--open" id="w-dropdown-list-5"
                                        aria-labelledby="w-dropdown-toggle-5">
                                        <div class="accordion-inner
                                        in-p-feature">
                                            <div class="rich-text
                                            in-p-feature
                                            w-richtext p">
                                            <?php
                                              $data = get_terms( array( 'taxonomy' => 'zymo_category', 'parent' => $cate->term_id,"hide_empty"=>false ) );
                                              if($data){
                                                foreach ($data as $cat) {
                                                echo "<li><a href='#' data-filter='".$cat->term_id."'>".$cat->name."</a></li>";
                                                }
                                                
                                              }
                                            ?>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                    </div>
            <?php } ?>
        </div>
      </div>
      <section class="product-listing section">
        <div class="container">
        <?php
              $categories = get_terms(array( 'taxonomy' => 'zymo_category', 'parent' => 0,"hide_empty"=>false ));
              ?>
            <div class="filter-top-c">
           <ul class="filter filterizr-filter filter-top" >
            <li><a href="#" class="" data-filter="all">All</a></li>
            <?php
                foreach ($categories as $cate) {
                ?>
                <li><a href="#" data-filter="<?php echo $cate->term_id; ?>"><?php echo $cate->name ?></a></li>
                <?php } ?>
           </ul>
           </div>
           <div class="filter-btn">
           <a href="#" class="main-button w-inline-block secondary-btn">
                    <div class="button-text">Filter by</div>
                    <img src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow-white.svg" loading="lazy" alt="" class="button-icon-x" />
                </a>
           </div>
           <div class="product-row row">
            <div class="col-filter">
              <ul class="filterizr-filter child-categories " data-id="all">
              <li><a href="#" class="" data-filter="all">All</a></li>
            <?php
                foreach ($categories as $cate) {
                ?>
                <li><a href="#" data-filter="<?php echo $cate->term_id; ?>"><?php echo $cate->name ?></a></li>
                <?php } ?>
              </ul>
              <?php
              foreach ($categories as $cate) {
                ?>
              <ul class="filterizr-filter child-categories <?php if($cate->term_id==get_queried_object()->term_id) echo 'active' ?>" data-id="<?php echo $cate->term_id ?>">
                  <?php
                    $data = get_terms( array( 'taxonomy' => 'zymo_category', 'parent' => $cate->term_id,"hide_empty"=>false ) );
                    if($data){
                      foreach ($data as $cat) {
                      echo "<li><a href='#' data-filter='".$cat->term_id."'>".$cat->name."</a></li>";
                      }
                      
                    }
                  ?>
              </ul>
              <?php } ?>
            </div>
            <div class="col-products">
              <div class="product-items">
              <?php $products = get_posts(["post_type"=>"zymo_products","numberposts"=>-1]);
                      foreach ($products as $key => $product) {
                        $categories = get_the_terms($product->ID,"zymo_category");
                        $categories_string = "";
                        $categories_slugs = [];
                        if($categories){
                          foreach ($categories as $key => $value) 
                          {
                            $categories_string = array_push($categories_slugs,$value->term_id);
                          }
                          $categories_string = implode(",",$categories_slugs);
                        }
                        ?>
                <div class="product-item filtr-item" data-category="<?php echo $categories_string; ?>">
                  <a href="<?php echo get_permalink($product->ID) ?>">
                    <div class="image">
                      <img loading="lazy" src="<?php echo get_the_post_thumbnail_url($product->ID) ?>" alt="">
                    </div>
                    <div class="p-title">
                      <div class="span">
                        <?php echo  $product->post_title ?>
                      </div>
                      <div class="icon"> <img src="<?php echo get_template_directory_uri() ?>/images/svg/right-chevron.svg" loading="lazy" /></div>
                    </div>
                  </a>
                </div>
                <?php } ?>
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
            <h1 class="heading is-inview">
            <?php echo $get_a_quote_section["title"] ?>
            </h1>
            </div>
            <div class="col-md-6">
            <div class="col-left">
           
            <?php
              if($get_a_quote_section["certificates"]) : ?>
              <div class="certificates fadein is-inview">
                <?php foreach ($get_a_quote_section["certificates"] as $certificate) { ?>
                <img src="<?php echo $certificate ?>" alt="">
                <?php } ?>
              </div>
              <?php endif; ?>
            <div class="buttons fadein is-inview">
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
        </div>
    </section>
    <?php endif; ?>
    </main>
    <script>
		
</script>
<?php
get_footer();
?>

<?php
