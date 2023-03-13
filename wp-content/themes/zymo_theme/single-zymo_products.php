<?php
get_header(); 

$gallery_section = get_field("gallery");
$information_section = get_field("information");
$clients_section = get_field("our_clients",7);
$categories_section = get_field("categories",350);
?>

<main class="main">
    <section class="product-detail-banner">
        <div class="">
            <div class="row">
                <div class="product-images">
                    <?php
                $image = get_the_post_thumbnail_url();
                if ($image) : ?>
                    <div class="product-img">
                        <img src="<?php print_r($image) ?>" alt="">
                    </div>
                    <?php endif; ?>
                </div>
                <div class="product-desc-col">
                    <div class="inner">

                        <div class="breadcrumbs">
                            <div class="breadcrumbs-ul">
                                <a href="<?php echo home_url("products") ?>">Products</a>
                                <?php
                                    $the_terms = get_the_term_list(get_the_ID(), "zymo_category");
                                    print_r($the_terms);
                                ?>
                        </div>
                        </div>
                        <h2 class="heading" data-scroll><?php the_title() ?></h2>
                        <div class="p p-description">
                            <?php //the_content()?>
                        </div>
                        <div class="product-metas">
                            <div class="p-meta">
                                <label>Brand Name</label>
                                <div class="meta-desc">
                                    <?php $the_terms = get_the_term_list(get_the_ID(), "zymo_brands");
                                echo $the_terms;
                                ?>
                                </div>
                            </div>
                            <div class="p-meta">
                                <label>Manufactured For</label>
                                <div class="meta-desc">
                                <?php echo $information_section["manufactured_for"]; ?>
                                </div>
                            </div>
                            <?php 
                            $field =  $information_section["market_presence"];
                            if(isset($field)): ?>
                            <div class="p-meta">
                                <label>Market Presence</label>
                                <div class="meta-desc">
                                <?php echo $field; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            <div class="p-meta">
                                <label>Sizes</label>
                                <div class="meta-desc">
                                    <?php $the_terms = get_the_terms(get_the_ID(),'zymo_sizes');
                                foreach ($the_terms as $key => $value) {
                                    if($key+1>=count($the_terms)){
                                        echo $value->name ;

                                    }
                                    else{
                                        echo $value->name." | ";
                                    }
                                }
                                ?>
                                </div>
                            </div>
                            <div class="p-meta">
                                <label>Manufacturing Since </label>
                                <div class="meta-desc">
                                <?php echo $information_section["manufacturing_since"]; ?>
                                </div>
                            </div>
                           <?php 
                            $field = $information_section["market_segments"];
                            if(isset($field)): ?>
                            <div class="p-meta">
                                <label>Market Segments</label>
                                <div class="meta-desc">
                                <?php echo $field; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <?php $the_terms = get_the_terms(get_the_ID(),'zymo_category');
                        if(isset($the_terms[0])):
                        ?>
                        <div class="p">Interested in making a <?php echo $the_terms[0]->name ?> products under third-party manufacturing</div>
                        <?php else: ?>
                         <div class="p">Interested in making a similar products</div>
                        <?php endif ?>
                            <a href="#" class="main-button w-inline-block btn-request">
                                <div class="button-text">Enquire today</div>
                                <img src="<?php echo get_template_directory_uri() ?>/images/svg/right-arrow.svg" loading="lazy" alt="" class="button-icon-x" />
                            </a>
                    </div>
                    <div class="product-features-advantages w-dyn-list">
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
                                        in-p-feature">Product details</p>
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
                                            <?php the_content()?>
                                            
                            <?php 
                            $field =  $information_section["functions"];
                            if(isset($field)): ?>
                            <div class="p-meta">
                                <label>Functions </label>
                                <div class="meta-desc">
                                <?php echo $field; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                            
                          
                            <?php 
                            $field = $information_section["key_ingredients"];
                            if(isset($field)): ?>
                            <div class="p-meta">
                                <label>Key Ingredients</label>
                                <div class="meta-desc">
                                <?php echo $field; ?>
                                </div>
                            </div>
                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
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
                                        in-p-feature">Features & Advantages</p>
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
                                                <?php echo $information_section["features"] ?>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="more-products">
        <div class="container">
            <div class="h2 heading" data-scroll>More products</div>
            <div class="product-items swiper">
                <div class="swiper-wrapper">
                <?php
                            $args = array(
                              'post_type' => 'zymo_products',
                              'posts_per_page' => 3,
                              'post_status' => 'publish',
                              'post__not_in' => array( get_the_ID() ),
                              'orderby' => 'rand',
                            );
                          
                            $related_products = get_posts( $args );
                            foreach($related_products as $product) {?>
                <div class="product-item swiper-slide ">
                    <a href="<?php echo get_permalink( $product->ID ) ?>">
                        <div class="image">
                            <img loading="lazy"
                                src="<?php echo get_the_post_thumbnail_url($product->ID) ?>" alt="">
                        </div>
                        <div class="p-title">
                            <div class="span">
                                <?php echo get_the_title($product->ID) ?>
                            </div>
                            <div class="icon"> <img
                                    src="<?php echo get_template_directory_uri() ?>/images/svg/right-chevron.svg"
                                    loading="lazy" /></div>
                        </div>
                    </a>
                </div>
                <?php } ?>
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
                            <a href="#" class="brand-4-link w-inline-block">
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
    <?php if($categories_section) : ?>
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
                                    <img src="<?php echo z_taxonomy_image_url($particular->term_id);  ?>" class=""  alt="" sizes="(max-width: 479px) 44px, (max-width: 767px) 88px, (max-width: 991px) 96px, (max-width: 1439px) 8vw, (max-width: 1919px) 112px, 128px" srcset="" class="cover-image"/>
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
</main>
<?php
get_sidebar();
get_footer();