<?php
/***********
 * Template name: Contact us
 */
get_header();
?>
<main class="main">
    <div class="hero-6">
        <div class="container">
            <div class="hero-6-flex">
                <div class="hero-6-inner">
                    <h1 class="heading in-hero-6-title" data-scroll>Zymo’s here for you!</h1>
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
    </div>
    
    <section class="section wf-section">
        <div class="container">
            <div class="padding-inner">
                <div class="w-layout-grid grid-contact">
                    <div id="w-node-_508faf43-277f-e877-40b1-948fdb71a62f-2e906771" class="contact-grid-block-1">
                        <p class="contact-1-text-1">Get a quote from us today!</p>
                    </div>
                    <div id="w-node-_508faf43-277f-e877-40b1-948fdb71a632-2e906771" class="contact-grid-block-2">
                        <p class="form-text with-margin">We make the process simpler for you</p>
                        <div class="custom-list-gallery">
                            <div class="custom-list-block in-contact">
                                <div class="circle-in-list">
                                    <div class="circle-background"></div><img
                                        src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg"
                                        loading="lazy" alt="" class="custom-list-icon">
                                </div>
                                <div class="list-content">
                                    <p class="list-title">1<sup>st</sup> we will talk</p>
                                </div>
                                <div class="list-line"></div>
                            </div>
                            <div class="custom-list-block in-contact">
                                <div class="circle-in-list">
                                    <div class="circle-background"></div><img
                                        src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg"
                                        loading="lazy" alt="" class="custom-list-icon">
                                </div>
                                <div class="list-content">
                                    <p class="list-title">2<sup>nd</sup> we will ask</p>
                                </div>
                                <div class="list-line"></div>
                            </div>
                            <div class="custom-list-block in-contact">
                                <div class="circle-in-list">
                                    <div class="circle-background"></div><img
                                        src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg"
                                        loading="lazy" alt="" class="custom-list-icon">
                                </div>
                                <div class="list-content">
                                    <p class="list-title">3<sup>rd</sup> we will help develop</p>
                                </div>
                                <div class="list-line"></div>
                            </div>
                            
                            <div class="custom-list-block in-contact">
                                <div class="circle-in-list">
                                    <div class="circle-background"></div><img
                                        src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg"
                                        loading="lazy" alt="" class="custom-list-icon">
                                </div>
                                <div class="list-content">
                                    <p class="list-title">4<sup>th</sup> we will give samples</p>
                                </div>
                                <div class="list-line"></div>
                            </div>
                            <div class="custom-list-block in-contact">
                                <div class="circle-in-list">
                                    <div class="circle-background"></div><img
                                        src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg"
                                        loading="lazy" alt="" class="custom-list-icon">
                                </div>
                                <div class="list-content">
                                    <p class="list-title">5<sup>th</sup> we will give estimate</p>
                                </div>
                                <div class="list-line"></div>
                            </div>
                            <div class="custom-list-block in-contact">
                                <div class="circle-in-list">
                                    <div class="circle-background"></div><img
                                        src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg"
                                        loading="lazy" alt="" class="custom-list-icon">
                                </div>
                                <div class="list-content">
                                    <p class="list-title">6<sup>th</sup> we will finalize spec-&-price</p>
                                </div>
                                <div class="list-line"></div>
                            </div>
                            <div class="custom-list-block in-contact">
                                <div class="circle-in-list"><img
                                        src="<?php echo get_template_directory_uri() ?>/images/done_white_24dp_1.svg"
                                        loading="lazy" alt="" class="custom-list-icon">
                                    <div class="circle-background"></div>
                                </div>
                                <div class="list-content">
                                    <p class="list-title">7<sup>th</sup> we will deliver</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="w-node-_508faf43-277f-e877-40b1-948fdb71a635-2e906771" class="contact-grid-block-3">
                        <div class="form w-form">
                            <div id="wf-form-Contact-form-2" name="wf-form-Contact-form-2" data-name="Contact form" method="get" class="form-inner">
                            <?php echo do_shortcode('[contact-form-7 id="457" title="Contact page form"]') ?>
                            </div>
                            <div class="form-success-message-2 w-form-done">
                                <div class="form-success-title-2"><strong>Message sent!</strong> Thank you. We will
                                    contact us as soon as possible.</div>
                            </div>
                            <div class="form-error-message w-form-fail">
                                <p class="form-error-paragraph">An error has occurred somewhere and it is not possible
                                    to submit the form. Please try again later or <a href="#"
                                        class="form-error-link">contact us via email.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section with-blue-bg wf-section">
        <div class="padding-inner">
            <div class="container">
                <?php
                $contact = get_field('contact_us', 'option');
                ?>
                <div class="grid-contact contact-grid">
                    <div id="w-node-_034f98af-0033-8d6d-d353-95f5b9e5eeb4-2e906771" class="contact-1-column-1">
                        <p id="w-node-_034f98af-0033-8d6d-d353-95f5b9e5eeb5-2e906771" class="contact-1-text-1">Contact
                            us</p>
                    </div>
                    <div class="contact-1-column-1">
                    <p class="contact-1-text-2">Corporate Office</p>
                        <div class="address-inner"><span></span><a target="_blank" href="<?php echo $contact["address"]["url"] ?>" class="contact-1-text-link"><?php echo $contact["address"]["title"] ?></a></div>
                        
                        
                    </div>
                    <div class="contact-1-column-1">
                    <p class="contact-1-text-2">Manufacturing Unit</p>
                    <?php  if(isset( $contact["address2"])) : ?><div class="address-inner"><a target="_blank" href="<?php echo $contact["address2"]["url"] ?>" class="contact-1-text-link"><?php echo $contact["address2"]["title"] ?></a></div><?php endif; ?>
                        
                        
                    </div>
                    <div class="contact-1-column-1">
                    <p class="contact-1-text-2">Contact us</p>
                        <a href="tel:<?php echo $contact["phone"] ?>" class="contact-1-text-link"><?php echo $contact["phone"] ?></a>
                        <?php if(isset($contact["phone_2"])) : ?>
                        <a href="tel:<?php echo $contact["phone_2"] ?>" class="contact-1-text-link"><?php echo $contact["phone_2"] ?></a>
                        <?php endif; ?>
                        <a href="mailto:<?php echo $contact["email"] ?>" class="contact-1-text-link"><?php echo $contact["email"] ?></a>
                        <p style="margin-top:10px">Hours: 9:30am to 6pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php echo get_template_part("template-parts/newsletter") ?>
</main>
<?php get_footer();