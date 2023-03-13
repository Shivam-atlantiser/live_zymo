<?php
/*************
 * Template name: Events
 */
get_header();
$events = get_field("gallery");
$first_image = $events[0];
?>
    <main class="main">
      <div class="hero-6">
        <div class="container">
          <div class="hero-6-flex">
            <div class="hero-6-inner">
              <h1 class="heading in-hero-6-title" data-scroll-x><?php echo get_the_title() ?></h1>
            </div>
            <div>
            </div>
          </div>
        </div>
      </div>
      
      <div id="start" class="symbols-wrap">
        <section class="section wf-section">
          <div class="padding-inner">
            <div class="container">
                                <div class="w-layout-grid grid-gallery">
                                <?php
                                if($events) : 
                                for($i=1;$i<count($events);$i++) {
                                ?>
                                    <div id="w-node-_2ecc3c5f-c49d-b3bb-822d-97c6609572bf-5590682c" class="gallery-size">
                                    <a href="#" data-w-id="12318d57-2f2e-653d-dc35-54aec0deeeb4" class="lightbox-link w-inline-block w-lightbox">
                                        <div href="#details" data-w-id="12318d57-2f2e-653d-dc35-54aec0deeeb5" class="gallery-circle-button-1">
                                        <div class="circle-button-text-block">
                                            <p class="circle-button-text-1 is-invert">Open</p>
                                        </div>
                                        <div class="circle-button-border is-invert"></div>
                                        <img src="<?php echo get_template_directory_uri( ) ?>/images/open_in_full_FILL0_wght300_GRAD0_opsz48.svg" loading="lazy" alt="" class="circle-button-icon">
                                        </div>
                                        <div class="image-animation-trigger">
                                            <img srcset="<?php echo $events[$i]["url"] ?>" class="cover-image">
                                        <div class="animation-color-bg"></div>
                                        </div>
                                        <script type="application/json" class="w-json">{
                    "items": [
                        {
                            "_id": "example_img",
                            "origFileName": "<?php echo $events[$i]["filename"] ?>",
                            "fileName": "<?php echo $events[$i]["filename"] ?>",
                            "fileSize": <?php echo $events[$i]["filesize"] ?>,
                            "height": <?php echo $events[$i]["height"] ?>,
                            "url": "<?php echo $events[$i]["url"] ?>",
                            "width": <?php echo $events[$i]["width"]; ?>,
                            "type": "image"
                        }
                    ],
                    "group": "Gallery"
                    }</script>
                                    </a>
                                    </div>
                        <?php }
                          endif;
                        ?>
                                </div>
            </div>
          </div>
        </section>
      </div>
<?php
get_footer();