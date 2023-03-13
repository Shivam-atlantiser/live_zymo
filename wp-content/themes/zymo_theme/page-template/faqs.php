<?php
/********
 * Template name: Faqs
 */
get_header();
$faq_section = get_field("faq",638);
?>
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
            </div>
          </div>
    </section>
<?php
get_footer();