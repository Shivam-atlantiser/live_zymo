var camera, scene, renderer, model, loader, dracoLoader, container, directionalLight, PointLight, controls, ambientlight, modelGroup, scroll, modelx, splitLines,init,home_video,filterizd,mobile_video,mobile_entrance,initPageTransitions,initScriptlazyLoadInstance,tl,tl2,banner_interval,banner_interval_mobile,filter;
splitLines = () => {
    setTimeout(() => {
        let splitElements = document.querySelectorAll(".heading");
        splitElements.forEach(element => {
            let x = new SplitText(element, { type: "lines", linesClass: "line" });
            x.lines.forEach((element, i) => { 
                let count = i + 1;
                let x = new SplitText(element, { type: "lines", linesClass: "line-inner line-inner-"+ ++i });
            })
        });
    }, 500);
}

init = () => {
  
    scroll.on("scroll", function (e) {
        jQuery("body").attr("direction", e.direction)
    })
    jQuery(document).ready(function () {
        if (jQuery(".col-products .product-items").length >= 1) {
            filterizd = jQuery('.col-products .product-items').filterizr();
            jQuery(".filter li a").on("click", function () {
                let term_id = jQuery(this).attr("data-filter");
                jQuery("[data-id]").removeClass("active");
                jQuery(".filter-top a").removeClass("active");
                jQuery(this).addClass("active");
                jQuery("[data-id='" + term_id + "']").addClass("active");
            })
            jQuery(".child-categories li a").on("click", function () {
                jQuery(".child-categories a").removeClass("active");
                jQuery(this).addClass("active");
            })
            if (jQuery("[data-tax-id]").length >= 1) {
                let id = jQuery("[data-tax-id]").attr("data-tax-id");
                filterizd.filterizr("filter", id)
                document.querySelector("[data-filter='"+id+"'").classList.add("active")
            }
        }
        const product_images_slider = new Swiper('.product-images-slider', {
            speed: 400,
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: true,
            loop: true,
            loopedSlides: 6,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
        });
        const product_images_thumb = new Swiper('.product-images-thumb', {
            speed: 400,
            slidesPerView: 'auto',
            spaceBetween: 20,
            centeredSlides: true,
            loop: true,
            slideToClickedSlide: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
        });
       
        product_images_slider.controller.control = product_images_thumb;
        product_images_thumb.controller.control = product_images_slider;
        const testimonial = new Swiper('.testimonial-slider', {
            speed: 400,
            spaceBetween: 30,
            autoHeight: true,
            navigation: {
                nextEl: '.w-slider-arrow-right',
                prevEl: '.w-slider-arrow-left',
              },
        });
    
        if (window.innerWidth <= 767) {
           let client_slider = new Swiper('.client-slider', {
                speed: 400,
               spaceBetween: 30,
               slidesPerView: 1,
                navigation: {
                    nextEl: '.w-slider-arrow-right',
                    prevEl: '.w-slider-arrow-left',
                },
                breakpoints: {
                    550: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 40,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    }
                }
            });
        }
        const more_products = new Swiper('.product-items.swiper', {
            speed: 400,
            spaceBetween: 30,
            navigation: {
                nextEl: '.w-slider-arrow-right',
                prevEl: '.w-slider-arrow-left',
            },
            breakpoints: {
                550: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                }
            }
        });
        const swiper_blogs = new Swiper('.swiper-blogs', {
            speed: 400,
            navigation: {
                nextEl: '.w-slider-arrow-right-blog',
                prevEl: '.w-slider-arrow-left-blog',
            },
            breakpoints: {
                550: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 60,
                }
            }
        });
        const history_swiper = new Swiper('.history-swiper', {
            speed: 400,
            spaceBetween: 20,
            centeredSlides: false,
            loopedSlides: 7,
            
            navigation: {
                nextEl: '.w-slider-arrow-right',
                prevEl: '.w-slider-arrow-left',
              },
            breakpoints: {
                550: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    loop: false,
                    centeredSlides: true,
                    autoHeight:true,
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                    loop: false,
                    autoHeight:true,
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop:false
                },
                1200: {
                    slidesPerView: 1.365,
                    spaceBetween: 80,
                    loop:false
                }
            }
        });
    
        const history_numbers = new Swiper('.history-numbers', {
            speed: 400,
            slidesPerView: "auto",
            spaceBetween: 20,
            centeredSlides: false,
            loop: true,
            slideToClickedSlide: true,
            navigation: {
                nextEl: '.w-slider-arrow-right-blog',
                prevEl: '.w-slider-arrow-left-blog',
            },
            breakpoints: {
                550: {
                    loop: true,
                    spaceBetween: 20,
                    centeredSlides: true,
                    loop:false
                },
                768: {
                    loop: true,
                },
                1024: {
                    loop: false
                },
                1200: {
                    loop: false
                }
            }
        });
        if (jQuery(window).width() >= 768) {
            history_swiper.controller.control = history_numbers;
            history_numbers.controller.control = history_swiper;
        }
        if (jQuery(window).width() <= 767) {
          
        }
    history_swiper.on('slideChange', function (e) {
        let number_slide = jQuery(".history-numbers .swiper-slide").length;
        jQuery(".history-numbers .swiper-slide").removeClass("active");
        jQuery(".history-numbers .swiper-slide").eq(history_swiper.activeIndex - number_slide).addClass("active");
    });
    jQuery(".history-numbers .swiper-slide").on("click", function (e) {
        history_swiper.slideTo(jQuery(this).index())
    })
    jQuery(".mobile li a").on("click", function (e) {
        let target = jQuery(this).attr("data-target");
        jQuery(".mobile li ul").slideUp();
        // jQuery(target).slideDown();
        jQuery(".mobile li ul").map(function (e, j) {
            
            if ("#"+jQuery(j).attr("id") != target) {
                jQuery(target).slideDown();
            }

        })
    })   
    jQuery(".filter-btn a").on("click", function () {
        jQuery(".mobile-fillters").addClass("slide");
    })
        jQuery(".mobile-fillters .accordion-content a").on("click", function () {
            jQuery(".mobile-fillters").removeClass("slide");
        })
    jQuery(".close-filter").on("click", function () {
        jQuery(".mobile-fillters").removeClass("slide");
    })
    function readUrl(input) {

        if (input.files && input.files[0]) {
          let reader = new FileReader();
          reader.onload = (e) => {
            let imgData = e.target.result;
            let imgName = input.files[0].name;
            input.setAttribute("data-title", imgName);
            console.log(e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      
    }
    jQuery(".form-control-file").on("change", function () {
        readUrl(this)
    })
    var request;
    $("#wf-form-Newsletter-form").on("submit", function( event ) {
        //abort any previous requests
        event.preventDefault();
        if ( request ) {
            request.abort();
        }
        var
            $form = $(this),
            $inputs = $form.find("input, button"),
            serializedData = $form.serialize();
    
        request = $.ajax({
            url: js_config.ajax_url,
            type: 'post',
            data: {
                action: 'jnz_tnp_ajax_subscribe',
                nonce: js_config.ajax_nonce,
                data: serializedData
            },
            beforeSend: function () {
                $inputs.prop("disabled", true);
                jQuery(".newsletter-error").remove();
                jQuery(".newsletter-success").remove();
            },
            success: function (response) {
                if (response.status == "success") {
                    jQuery(".newsletter-form-block").hide();
                    jQuery(".newsletter-section .w-form-done").show();
                    $.ajax({
                        type: "POST",
                        url: $form.attr("action"),
                        data: serializedData,
                        success: function (response) {
                            setTimeout(() => {
                                jQuery(".newsletter-section .newsletter-form").html(response);
                            }, 1000);
                        }
                      });
                }
                else {
                    $form.append('<p class="newsletter-' + response.status + '">' + response.msg + '</p>');
                }
            },
            error: function ( response, textStatus, errorThrown ) {
         
            },
            complete: function() {
                $inputs.prop( "disabled", false );
            }
        });
    
        event.preventDefault();
    });
    const getCookie = (name) => {
        const value = " " + document.cookie;
        const parts = value.split(" " + name + "=");
        return parts.length < 2 ? undefined : parts.pop().split(";").shift();
      };
      
      const setCookie = function (name, value, expiryDays, domain, path, secure) {
        const exdate = new Date();
        exdate.setHours(
          exdate.getHours() +
            (typeof expiryDays !== "number" ? 365 : expiryDays) * 24
        );
        document.cookie =
          name +
          "=" +
          value +
          ";expires=" +
          exdate.toUTCString() +
          ";path=" +
          (path || "/") +
          (domain ? ";domain=" + domain : "") +
          (secure ? ";secure" : "");
      };
   setTimeout(() => {
     const cookieName = "cookiesBanner";
    const hasCookie = getCookie(cookieName);
    
    if (!hasCookie) {
      document.querySelector(".cookie-notice").classList.add("show");
    }
    
    document.querySelector(".cookie-notice .main-button").addEventListener("click", () => {
      setCookie(cookieName, "closed");
      document.querySelector(".cookie-notice").classList.remove("show");
    });
   }, 5000);

            window.onbeforeunload = function () {
                jQuery("body").hide()
                window.scrollTo(0, 0);
              }
            
            
            jQuery(".btn-request").on("click", function () {
                jQuery(".request-a-form").addClass("show")
            })
            jQuery(".career-form-c .close").on("click", function () {
                jQuery(".request-a-form").removeClass("show")
            })
            jQuery(".testimonial-video").on("click", function () {
                let iframID = jQuery(this).attr("data-id");
                jQuery(".video-popup iframe").attr("src","https://www.youtube.com/embed/"+iframID)
                jQuery(".video-popup").addClass("show")
                jQuery("body").addClass("popup-open");
            })
            jQuery(".video-popup .close").on("click", function () {
                jQuery(".video-popup").removeClass("show")
                jQuery(".video-popup iframe").attr("src", "")
                jQuery("body").removeClass("popup-open");
            })
            
            jQuery(".scroll-down-button-4").on("click", function (e) {
                e.preventDefault()
                let target = jQuery(this).attr("id");
                jQuery('html, body').animate({
                    scrollTop: jQuery("#"+target).offset().top
                }, 500);
                
            })
        var tl = null;
             tl = gsap.timeline({
                defaults: { duration: 1 },
                scrollTrigger: {
                  trigger: ".home-hero-1",
                  start: "top top",
                  end: "+=150%",
                  scrub: true
                  }
               });     
    let scrollProgress = 0;
    let scrollProgress2 = 0;
    let scrollProgress3 = 0;
        scroll.on("scroll", function (e) {
            jQuery("body").attr("direction", e.direction)
        if(tl.scrollTrigger.progress){
        scrollProgress = tl.scrollTrigger.progress * 53
            }
            if (jQuery(".filter-top").length<=0) {
                if(e.scroll.y>=windowHeight){
                    jQuery("body").addClass("hide-nav");
                }
                else{
                    jQuery("body").removeClass("hide-nav");
                }
            }
            if (jQuery(".filter-top").length>=1) {
                let scrollY = e.scroll.y;
                let filterTop = jQuery(".filter-top-c").offset().top;
                let product_height = jQuery(".filter-top-c").offset().top + jQuery(".product-listing").height();
                if (filterTop <= scrollY && product_height >= scrollY) {
                    jQuery(".filter-top").addClass("sticky");
                }
                else {
                    jQuery(".filter-top").removeClass("sticky");
                    if(e.scroll.y>=windowHeight - 100){
                        jQuery("body").addClass("hide-nav");
                    }
                    else{
                        jQuery("body").removeClass("hide-nav");
                    }
                }
            }
    })
    
       let accelamount = 0.2;
       let scrollpos = 0;
       var delay = 0;
       var delay2 = 0;
       var delay3 = 0;
        
        if (jQuery(window).width() >= 1024) {
            document.querySelectorAll("#icon-container img").forEach(function (e) {
                e.setAttribute("src", e.getAttribute("data-src"));
            })
                banner_interval = setInterval(() => {
                    if (scrollProgress > 0) {
                        delay += (scrollProgress - delay) * accelamount;
                        jQuery("#icon-container img").hide()
                        jQuery("#icon-container img").eq(Math.round(delay)).show()
                        
                    }
                }, 33.33);
       }

        if (jQuery(window).width() < 1024) {
            tl2 = null;
            tl2 = gsap.timeline({
                    defaults: { duration: 1 },
                    scrollTrigger: {
                      trigger: ".mbile-video-c",
                      start: "top top",
                      end: "+=80%",
                        scrub: true,
                        pin:true
                      }
                   });
                if (jQuery(".mobile-video").length >= 1) {
                    mobile_video = lottie.loadAnimation({
                        container: document.querySelector(".mobile-video"),
                        renderer: 'svg',
                        loop: false,
                        autoplay: false,
                        path: js_config.theme_path + "/videos/mobile-video-final.json" // the path to the animation json
                    });
                    // mobile_entrance = lottie.loadAnimation({
                    //     container: document.querySelector(".mobile-entrance"),
                    //     renderer: 'svg',
                    //     loop: false,
                    //     autoplay: false,
                    //     path: js_config.theme_path + "/videos/mobile-entrance.json" // the path to the animation json
                    // });
                    scroll.on("scroll",function(e){
                         scrollProgress2 = tl2.scrollTrigger.progress*53
                    })
                    banner_interval_mobile = setInterval(() => {
                        delay2 += (scrollProgress2 - delay2) * accelamount;
                        mobile_video.playSegments([delay2, 200], true);
                        mobile_video.pause()
                    }, 33.33);
                }
            }
    
})
let windowHeight = window.innerHeight;
scroll.on("scroll",function(e){
    if (window.innerWidth <= 767) {
        windowHeight = 200;
    }
    if (jQuery(".filter-top").length<=0) {
        if(e.scroll.y>=windowHeight){
            jQuery("body").addClass("hide-nav");
        }
        else{
            jQuery("body").removeClass("hide-nav");
        }
    }
    if (jQuery(".filter-top").length>=1) {
        let scrollY = e.scroll.y;
        let filterTop = jQuery(".filter-top-c").offset().top;
        let product_height = jQuery(".filter-top-c").offset().top + jQuery(".product-listing").height();
        if (filterTop <= scrollY && product_height >= scrollY) {
            jQuery(".filter-top").addClass("sticky");
        }
        else {
            jQuery(".filter-top").removeClass("sticky");
            if(e.scroll.y>=windowHeight - 100){
                jQuery("body").addClass("hide-nav");
            }
            else{
                jQuery("body").removeClass("hide-nav");
            }
        }
    }
    
})
}
// Animation - Page transition In
function pageTransitionIn() {
    var tl = gsap.timeline();

    tl.call(function() {
      scroll.stop();
    });
  
    tl.set(".loading-screen-x", { 
          top: "200%" 
      });	

  
      tl.to(".loading-screen-x", {
          duration: .8,
          top: "0%",
          ease: "Power2.easeIn"
      });
  
      tl.to(".loading-screen-x", {
          duration: .8,
          top: "-200%",
          delay: .2,
          ease: "Power2.easeOut",

      });
  
    tl.set(".loading-screen-x", { 
          top: "200%" 
      });	
}


// Animation - Page transition Out


initScript = () => {
    jQuery(".loading-screen").addClass("load-start");
    jQuery(".career-section .accordion-title").on("click", function () {
        let title = jQuery(this).text();
        let parent = jQuery(this).find(".w-dyn-item");
        let form = jQuery(parent).find("form");
        form.find('[name="Position"]').val(title)
    })
    init();
}
function initLoader() { 

  
}

initPageTransitions = () => {
  
    barba.hooks.before(() => {
    //   select('html').classList.add('is-transitioning');
    });
  
    barba.hooks.after(() => {
    //   select('html').classList.remove('is-transitioning');
      scroll.init();
      scroll.stop();
    });
  
    // scroll to the top of the page
    barba.hooks.enter(() => {
      scroll.destroy();
    });
  
    // scroll to the top of the page
    barba.hooks.afterEnter(() => {
      window.scrollTo(0, 0);
    });
  
    function delay(n) {
        n = n || 2000;
        return new Promise((done) => {
            setTimeout(() => {
                done();
            }, n);
        });
    }
    barba.init({
      sync: true,
      debug: true,
      timeout:7000,
      transitions: [{
        name: 'default',
        once(data) {
            initSmoothScroll(data.next.container);
            initScript();
            initLoader();
            splitLines();
            setTimeout(() => {
                document.querySelectorAll("[data-scroll-x]").forEach(element => {
                    element.classList.add("is-inview")
                })
                jQuery("body").addClass("page-transition-complete")
            }, 1500);
            jQuery(".career-section .accordion-toggle").on("click", function () {
                let title = jQuery(this).find(".accordion-title").text()
                let parent = jQuery(this).parents(".w-dyn-item");
                let form = parent.find("form");
                form.find('[name="Position"]').val(title)
            })
            // document.querySelector(".career-section .accordion-toggle").addEventListener("click", function () {
            //     alert()
            // })
        },
        async leave(data) {
          
            clearInterval(banner_interval)
            clearInterval(banner_interval_mobile)
            pageTransitionIn(data.current);
          await delay(795);
            data.current.container.remove();
            ScrollTrigger.getAll().forEach(t => t.kill());
            jQuery("body").attr("class", "");
            jQuery("body").addClass("loaded")
            jQuery("body").addClass("is-loaded-x")
            jQuery("body").addClass("is-loaded")
            
        },
        async enter(data) {
          // animate loading screen away
          
          cf7srLoadCallback()
        lazyLoadInstance.update()
       
            if (jQuery("[data-tax-id]").length >= 1) {
                var id = jQuery("[data-tax-id]").attr("data-tax-id");
                  if (id > 0) {
                      if (typeof filterizd === "undefined") {
                        console.log(filterizd)
                        setTimeout(() => {
                            filterizd = jQuery('.col-products .product-items').filterizr('filter', id); 
                        }, 500);   
                        document.querySelector("[data-filter='"+id+"'").classList.add("active")
                      }
                    else {
                        filterizd.filter("filter",id)
                        document.querySelector("[data-filter='"+id+"'").classList.add("active")
                      }
                    
                }
          }
              setTimeout(() => {
                document.querySelectorAll("[data-scroll-x]").forEach(element => {
                    element.classList.add("is-inview")
                })
                if (jQuery(".banner-video video").length>=1)
                {
                    home_video = document.querySelector(".banner-video video");
                    home_video.play();
                    home_video.onended = function () {
                        jQuery(".banner-video").remove();
                        setTimeout(() => {
                            jQuery("body").addClass("loadedd")
                        }, 100);
                    }
                   
                }
              }, 700);
            setTimeout(() => {
                jQuery("body").addClass("page-transition-complete");
            }, 2000);
        },
          async beforeEnter(data) {
            let classes = jQuery("[data-class]").attr("data-class");
              jQuery("body").addClass(classes);
              
              const forms = document.querySelectorAll(".wpcf7 > form");
                forms.forEach((form) => wpcf7.init(form));
                ScrollTrigger.addEventListener("refresh", () => scroll.update());
                ScrollTrigger.refresh();
            
            scroll.destroy();
            initSmoothScroll(data.next.container);
            initScript(); 
              webflowcall()
              splitLines();
             
            //   if (jQuery(".mobile-video").length >= 1 && mobile_entrance) {
            //     mobile_entrance.play();
            //     mobile_entrance.addEventListener("complete", function () {
            //         jQuery(".mobile-entrance").remove();
            //     })
            // }
        },
      }]
    });
  
    function initSmoothScroll(container) {
      scroll = new LocomotiveScroll({
        el: container.querySelector('[data-scroll-container]'),
          smooth: false,
          getDirection: true
      });
      jQuery(".career-section .accordion-toggle").on("click", function () {
        let title = jQuery(this).find(".accordion-title").text()
        let parent = jQuery(this).parents(".w-dyn-item");
        let form = parent.find("form");
        form.find('[name="Position"]').val(title)
    })
      window.onresize = scroll.update();
  
      scroll.on("scroll", () => ScrollTrigger.update());
      
      ScrollTrigger.scrollerProxy('[data-scroll-container]', {
        scrollTop(value) {
          return arguments.length ? scroll.scrollTo(value, 0, 0) : scroll.scroll.instance.scroll.y;
        }, 
        getBoundingClientRect() {
          return {top: 0, left: 0, width: window.innerWidth, height: window.innerHeight};
        },
        pinType: container.querySelector('[data-scroll-container]').style.transform ? "transform" : "fixed"
      });
  
      ScrollTrigger.defaults({
        scroller: document.querySelector('[data-scroll-container]'),
      });
  
      ScrollTrigger.addEventListener('refresh', () => scroll.update());
  
      ScrollTrigger.refresh();
    }  
  }
(function () {
    gsap.registerPlugin(ScrollTrigger);
    document.fonts.ready.then(() => {
        initPageTransitions()
      });
      lazyLoadInstance = new LazyLoad({
        // Your custom settings go here
      });
   
    

})()

jQuery(window).on("load", function () {
    jQuery("body").addClass("loaded");
    setTimeout(() => {
        if (jQuery(".banner-video video").length>=1)
                {
                    home_video = document.querySelector(".banner-video video");
                    home_video.play();
                    home_video.onended = function () {
                        jQuery(".banner-video").remove();
                        setTimeout(() => {
                            jQuery("body").addClass("loadedd")
                        }, 100);
                    }
                    if (jQuery(".mobile-video").length >= 1 && mobile_entrance) {
                        // mobile_entrance.play();
                        // mobile_entrance.addEventListener("complete", function () {
                        //     jQuery(".mobile-entrance").remove();
                        // })
                    }
                }
    }, 500);
})