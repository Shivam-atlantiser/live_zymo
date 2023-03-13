var camera, scene, renderer, model, loader, dracoLoader, container, directionalLight, PointLight, controls, ambientlight, modelGroup, scroll, modelx, splitLines,init,animation,video_animation;
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
    jQuery(document).ready(function () {
        const product_images_slider = new Swiper('.product-images-slider', {
            speed: 400,
            slidesPerView: 1,
            spaceBetween: 20,
            centeredSlides: true,
            loop: true,
            loopedSlides: 6, //スライドの枚数と同じ値を指定
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
                    spaceBetween: 20,
                    loop:true
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 40,
                    loop:true
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
                    loop: true
                },
                768: {
                    loop: true
                },
                1024: {
                    loop: false
                },
                1200: {
                    loop: false
                }
            }
        });
        history_swiper.controller.control = history_numbers;
    history_numbers.controller.control = history_swiper;
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
   scroll = new LocomotiveScroll({
    el: document.querySelector('.main-container'),
    smooth: false,
    getDirection:true,
});
let windowHeight = window.innerHeight;
scroll.on("scroll",function(e){
    jQuery("body").attr("direction", e.direction)
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
gsap.registerPlugin(ScrollTrigger);

    

/* ---------------------------------- */
/* Scroll Control! */
animation = bodymovin.loadAnimation({
    // animationData: { /* ... */ },
    container: document.getElementById('icon-container'), // required
    path: './wp-content/themes/zymo_theme/videos/ZymoMotion03 (1).mp4.lottie (1).json', // required
    renderer: 'svg', // required
    loop: false, // optional
    autoplay: false, // optional
});
video_animation = bodymovin.loadAnimation({
    // animationData: { /* ... */ },
    container: document.querySelector('.banner-video'), // required
    path: './wp-content/themes/zymo_theme/videos/video-part-1.mp4.lottie-part-1.json', // required
    renderer: 'canvas', // required
    loop: false, // optional
    autoplay: false, // optional
});

gsap.registerPlugin(ScrollTrigger);

let tl = gsap.timeline({
  defaults: { duration: 1 },
  scrollTrigger: {
    trigger: ".home-hero-1",
    start: "top top",
    end: "+=140%",
    scrub: true
    }
});
    jQuery(document).ready(function () {
        let scrollProgress;
        scroll.on("scroll",function(e){
             scrollProgress = tl.scrollTrigger.progress*75
            
        })
        setInterval(() => {
              animation.playSegments([scrollProgress,75],true);
            animation.pause()
        }, 33.33);

        
})
    })
    
}
(function () {
    
    
    
    if (jQuery(".canva").length>=1) {
        loader = new THREE.GLTFLoader()
        dracoLoader = new THREE.DRACOLoader();
        // dracoLoader.setDecoderPath( 'js/draco/' );
        loader.setDRACOLoader(dracoLoader);
        scene = new THREE.Scene();
        container = document.querySelector(".canva");
        renderer = new THREE.WebGLRenderer({ antialias: true,  alpha: true  });
        renderer.outputEncoding = THREE.sRGBEncoding;
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setSize(container.clientWidth, container.clientHeight);
        container.appendChild(renderer.domElement);
        camera = new THREE.OrthographicCamera(
            container.clientWidth / -2,
            container.clientWidth / 2,
            container.clientHeight / 2,
            container.clientHeight / -2,
            1,
            1000
          );
        PointLight = new THREE.PointLight(0xffffff,.3)
        directionalLight = new THREE.DirectionalLight(0xffffff, .5)
        ambientlight = new THREE.AmbientLight(0xffffff, 1)
        scene.background = new THREE.Color(0xe5ceff); //0xbd85ff
        modelGroup = new THREE.Object3D()
        scene.add(PointLight)
        scene.add(directionalLight)
        directionalLight.position.x = -0
        scene.add(ambientlight)
        scene.add(camera)
        const helper = new THREE.DirectionalLightHelper( directionalLight, 100 );
        // scene.add( helper );
        directionalLight.position.x = 100
        directionalLight.position.z = -100
        PointLight.position.x= 400
        PointLight.position.z= -400
        camera.position.z = -250;
        camera.position.x = 1;
        camera.position.y = 1;
        camera.zoom = 2.5;
        controls = new THREE.OrbitControls(camera, renderer.domElement);
        function loadModel(url) {
            return new Promise(resolve => {
              loader.load(url, resolve);
            });
        }
        
    
        let p1 = loadModel(js_config.theme_path+'/models/cosmetic-2.glb').then(result => {  model1 = result.scene.children[0];modelx = result; });
        // let p2 = loadModel(js_config.theme_path+'/models/bottle/bottle-2.glb').then(result => {  model2 = result.scene.children[0]; });
        // let p3 = loadModel(js_config.theme_path+'/models/bottle/bottle-5.glb').then(result => {  model3 = result.scene.children[0]; });
        // let p4 = loadModel(js_config.theme_path+'/models/bottle/bottle-4.glb').then(result => {  model4 = result.scene.children[0]; });
           
        Promise.all([p1]).then(() => {
            model1.position.set(-150, -150, 0);
            model1.rotation.z = 3;
  
            scene.add(model1);
          
            let material = new THREE.MeshStandardMaterial({
                roughness: .7,
                metalness: 0.7,
                color:0x773dbd
            })
            model1.traverse(function (child) {
                if (child instanceof THREE.Mesh) {
                    child.material = material;
                }
            })
            
            animate()
         });
        function render() {
            camera.lookAt(scene.position);
            renderer.render(scene, camera);
        }
        function animate() {
            if(controls!=null)
            {
                controls.update();
            }
            camera.updateProjectionMatrix();
            requestAnimationFrame(()=>animate());
            render();
        }
        function onResize() {
            location.reload();
            
        }
        window.addEventListener("resize", function () {
            // onResize();
        })
    }
   
    jQuery(window).on("load", function () {
        jQuery(".loading-screen").addClass("load-start");
        setTimeout(() => {
            jQuery("body").addClass("loaded");
            setTimeout(() => {
                document.querySelectorAll("[data-scroll-x]").forEach(element => {
                        element.classList.add("is-inview")
                })
                
            }, 500);
           setTimeout(() => {
            video_animation.play();
            video_animation.addEventListener("complete", function () {
                jQuery(".banner-video").remove();
            })
           }, 400);
        }, 1000);
    })
    document.fonts.ready.then(() => {
       
      });
      var lazyLoadInstance = new LazyLoad({
        // Your custom settings go here
      });
    if (jQuery(".col-products .product-items").length >= 1) {
        var filterizd = jQuery('.col-products .product-items').filterizr();

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
    }
    splitLines();
    init();

})()