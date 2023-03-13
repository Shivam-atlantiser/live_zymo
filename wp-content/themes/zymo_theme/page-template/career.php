<?php
/****
 * Template name: Career
 */
get_header();
$banner_section = get_field("banner");
$why_choose_section = get_field("why_choose_us");

?>
<main class="main">
        <div class="home-hero-1">
          <div class="container">
            <div class="hero-3-wrap">
              <div class="hero-3-column-1">
                <h1 class="heading home-3-title" data-scroll-x>
                  <?php echo $banner_section["title"] ?>
                </h1>
                <p class="offering-private-lab fadein" data-scroll-x style="--delay:.5s">
                <?php echo $banner_section["description"] ?>
                </p>
                <?php if ($banner_section["button"]["url"] != "" && $banner_section["button"]["title"] != "") {?>
                <div class="fadein" data-scroll-x style="--delay:.8s">
                <a href="#jobs" class="main-button w-inline-block">
                  <div class="button-text"><?php echo $banner_section["button"]["title"] ?></div>
                  <img
                    src="<?php echo get_template_directory_uri() ?>/images/arrow_right_alt_FILL0_wght400_GRAD0_opsz48_white.svg"
                    loading="lazy" alt=""
                    class="button-icon-x" />
                  <div class="button-background"></div>
                </a>
                </div>
                <?php }?>
              </div>
            </div>
          </div>
          <div class="portfolio-3-overlay-color"></div>
        </div>
        <section id="jobs" class="section wf-section career-section">
        <div class="container">

          <div class="padding-inner">
            <div class="super-title">Jobs</div>
          <h1 class="heading" data-scroll>
          Current job openings
          </h1>
            <div class="testimonials-cms w-dyn-list">
              <div role="list" class="testimonial-cms-list w-dyn-items">
                <?php
                $counter = 1;
$jobs = get_posts(["post_type" => "jobs", "post_status" => "publish"]);
foreach ($jobs as $job) {
    ?>
                <div role="listitem" class="testimonial-cms-item w-dyn-item fadein" data-scroll style="--delay:<?php echo ++$counter*0.10 ?>s">
                  <div data-hover="false" data-delay="0" class="accordion in-testimonial w-dropdown">
                    <div class="accordion-toggle in-testimonial w-dropdown-toggle">
                      <div class="accordion-circle"><img src="<?php echo get_template_directory_uri() ?>/images/expand_more_black_24dp.svg" loading="lazy" alt="" class="accordion-arrow">
                        
                      </div>
                      <p class="accordion-title in-testimonial"><?php echo $job->post_title; ?></p>
                      <div class="testimonial-content">
                        <div class="testimonials-about">
                          <p class="testimonial-for-text is-1nd">Ahmedabad</p>
                          <div class="testimonial-line"></div>
                          <p class="testimonial-for-text is-2nd">Naroda</p>
                        </div>
                      </div>
                    </div>
                    <nav class="accordion-content w-dropdown-list">
                      <div class="accordion-inner in-testimonial ">
                        <?php
                            $position = get_field("job_position", $job->ID);
                            $vacancies = get_field("vacancies", $job->ID);
                            $location = get_field("location", $job->ID);
                            $education = get_field("education", $job->ID);
                            $experience = get_field("experience", $job->ID);
                            $skills = get_field("skills", $job->ID);
                            $description = get_field("description", $job->ID);
                          ?>
                        <div class="w-layout-grid grid-team-1">
                        <?php if (isset($position)): ?>
                          <div id="w-node-_15a53603-56db-b087-6933-a000ce98f852-4ab294cc" class="team-name-block-1">
                            <p id="w-node-_15a53603-56db-b087-6933-a000ce98f853-4ab294cc" class="about-title-1">Position</p>
                            <p id="w-node-_15a53603-56db-b087-6933-a000ce98f855-4ab294cc" class="about-title-name is-main-title">
                              <?php echo $position; ?>
                            </p></div>
                          <?php endif; ?>
                            <div id="w-node-_15a53603-56db-b087-6933-a000ce98f857-4ab294cc" class="team-content-wrap">
                            <?php if (isset($vacancies)): ?>
                              <div class="team-content-1"><p id="w-node-_15a53603-56db-b087-6933-a000ce98f858-4ab294cc" class="about-title-1">Vacancies</p>
                            <p id="w-node-_15a53603-56db-b087-6933-a000ce98f85a-4ab294cc" class="about-title-name"><?php echo $vacancies; ?></p></div>
                            <?php endif; ?>
                            <?php if (isset($location)): ?>
                            <div class="team-content-1">
                            <p class="about-title-1">Location</p><p class="about-title-name"><?php echo $location;?></p></div>
                            <?php endif; ?>
                            <?php if (isset($education)): ?>
                            <div class="team-content-1">
                            <p class="about-title-1">Education</p><p class="about-title-name"><?php echo $education ?></p></div>
                            <?php endif; ?>
                            <?php if (isset($experience)): ?>
                            <div class="team-content-1">
                            <p class="about-title-1">Experience</p><p class="about-title-name"><?php echo $experience; ?></p></div>
                            <?php endif; ?>
                            <?php if (isset($skills)): ?>
                            <div class="team-content-1">
                            <p class="about-title-1">Skills</p><p class="about-title-name"><?php echo $skills; ?></p></div>
                            <?php endif; ?>
                            </div>
                            <?php if (isset($description)): ?>
                            <div id="w-node-_15a53603-56db-b087-6933-a000ce98f864-4ab294cc" class="about-block-3">
                              <div class="about-content-block"><p class="about-title-1">Job description</p><div class="rich-text is-team w-richtext"><p>
                                <?php echo $description; ?>
                              </p></div></div></div>
                              <?php endif; ?>
                              </div>
                        <div class=" career-form-c">
                              <span></span>
                              <span>
                              <h2 class="about-title-name">Apply now</h2>
                            <?php echo do_shortcode('[contact-form-7 id="491" title="Career form"]'); ?>
                            </span>
                            <span></span>
                        </div>
                         

                        <p class="testimonial-title-1"></p>
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
      <?php echo get_template_part("template-parts/newsletter") ?>
      </main>
<?php
get_footer();