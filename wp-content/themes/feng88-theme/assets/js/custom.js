

jQuery( document ).ready(function( $ ) {

	"use strict";
    
        // $(function() {
        //     $( "#tabs" ).tabs();
        // });


        // Page loading animation

        $("#preloader").animate({
            'opacity': '0'
        }, 600, function(){
            setTimeout(function(){
                $("#preloader").css("visibility", "hidden").fadeOut();
            }, 300);
        });
        

        $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          var box = $('.header-text').height();
          var header = $('header').height();

          if (scroll >= box - header) {
            $("header").addClass("background-header");
          } else {
            $("header").removeClass("background-header");
          }
        });
        if ($('.owl-clients').length) {
            $('.owl-clients').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                items: 1,
                margin: 30,
                autoplay: false,
                smartSpeed: 700,
                autoplayTimeout: 6000,
                responsive: {
                    0: {
                        items: 1,
                        margin: 0
                    },
                    460: {
                        items: 1,
                        margin: 0
                    },
                    576: {
                        items: 3,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 30
                    }
                }
            });
        }
		if ($('.owl-testimonials').length) {
            $('.owl-testimonials').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                items: 1,
                margin: 30,
                autoplay: false,
                smartSpeed: 700,
                autoplayTimeout: 6000,
                responsive: {
                    0: {
                        items: 1,
                        margin: 0
                    },
                    460: {
                        items: 1,
                        margin: 0
                    },
                    576: {
                        items: 2,
                        margin: 20
                    },
                    992: {
                        items: 2,
                        margin: 30
                    }
                }
            });
        }
        if ($('.owl-banner').length) {
            $('.owl-banner').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                items: 1,
                margin: 0,
                autoplay: true,
                smartSpeed: 700,
                autoplayTimeout: 6000,
                responsive: {
                    0: {
                        items: 1,
                        margin: 0
                    },
                    460: {
                        items: 1,
                        margin: 0
                    },
                    576: {
                        items: 1,
                        margin: 20
                    },
                    992: {
                        items: 1,
                        margin: 30
                    }
                }
            });
        }

        $(".Modern-Slider").slick({
            autoplay:true,
            autoplaySpeed:10000,
            speed:600,
            slidesToShow:1,
            slidesToScroll:1,
            pauseOnHover:false,
            dots:true,
            pauseOnDotsHover:true,
            cssEase:'linear',
           // fade:true,
            draggable:false,
            prevArrow:'<button class="PrevArrow"></button>',
            nextArrow:'<button class="NextArrow"></button>', 
        });

        $('.filters ul li').click(function(){
        $('.filters ul li').removeClass('active');
        $(this).addClass('active');
          
          var data = $(this).attr('data-filter');
          $grid.isotope({
            filter: data
          })
        });

        var $grid = $(".grid").isotope({
          itemSelector: ".all",
          percentPosition: true,
          masonry: {
            columnWidth: ".all"
          }
        })
        $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

        $('.accordion a').click(function(j) {
            var dropDown = $(this).closest('li').find('.content');

            $(this).closest('.accordion').find('.content').not(dropDown).slideUp();

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.accordion').find('a.active').removeClass('active');
                $(this).addClass('active');
            }

            dropDown.stop(false, true).slideToggle();

            j.preventDefault();
        });


});


document.addEventListener("DOMContentLoaded", ()=>{
    // скролл для страниц "обучение" и "статьи"
    if(location.pathname == '/learn/' || location.pathname == '/articles/'){
      setTimeout(checkScroll, 500);
      setSpecialScroll();
    } else if(location.pathname.split('/')[1] == "course") setSpecialScroll();

    // обработка кликов по бургер меню
    if(window.innerWidth < 1025){
        burgerMenuInit();
    }

    //  установка кастомных кликов
    setupClicks();

    // установка картинки инпута для сайдбаров, создание стики-сайдбара
    if(document.querySelector(".sidebar-container")){
        checkSidebarInput();
        if (!(location.pathname == "/prognoz/")) initStickySidebar();

    }

    // кнопка "вверх"
    document.addEventListener('scroll', checkUpButton);
    registerUpButton();
});

// скролл для страниц "обучение" и "статьи"
function checkScroll(){

    if (!location.hash) return;

    let id = location.hash.slice(1),
        el = document.getElementById(id);

    window.scrollTo({
        top: (el.getBoundingClientRect().top + pageYOffset) - 80,
        behavior: "smooth"
    })
    console.log('scrolled!');
}
function setSpecialScroll(){
    document.addEventListener('click', function(ev){
        if(ev.target.closest('#menu-item-6 a') && location.pathname == "/learn/"){
            ev.preventDefault();
            let id = ev.target.closest('a').getAttribute('href').split('/')[2].slice(1),
                el = document.getElementById(id);

            window.scrollTo({
                top: (el.getBoundingClientRect().top + pageYOffset) - 80,
                behavior: "smooth"
            })
            console.log('scrolled!');
        }

        if(ev.target.closest('#menu-item-45 a') && location.pathname == "/articles/"){
            ev.preventDefault();
            let id = ev.target.closest('a').getAttribute('href').split('/')[2].slice(1),
                el = document.getElementById(id);

            window.scrollTo({
                top: (el.getBoundingClientRect().top + pageYOffset) - 80,
                behavior: "smooth"
            })
            console.log('scrolled!');
        }

        if (ev.target.closest('a.navigation-links')){
            ev.preventDefault();
            let id = ev.target.closest('a').getAttribute('href'),
                el = document.getElementById(id);

            window.scrollTo({
                top: (el.getBoundingClientRect().top + pageYOffset) - 80,
                behavior: "smooth"
            })
        }
    })
}

//  кнопка ВВЕРХ , работающая по скроллу и клик по ней
function checkUpButton(){
    let btn = document.querySelector('.arrow-up');
    if (window.scrollY > 500) {
        btn.classList.remove('hidden');
    } else {
        btn.classList.add('hidden');
    }
}
function registerUpButton() {
    document.querySelector('.arrow-up').addEventListener('click',()=>{
        let yTop = window.innerWidth > 1200 ? 200 : 0;
        console.log(yTop);
        window.scrollTo({
            top: yTop,
            behavior: "smooth"
        });
    });
}

// обработка кликов по бургер меню
function burgerMenuInit(){
    $('.navbar-toggler').click(function(){
        console.log('click!');
        $('.sub-menu').removeClass('active');
       $('#navbarResponsive').toggleClass('active');
    });

    document.addEventListener('click', function(event){

        if(event.target.closest('.menu-item-has-children > a')){
            event.preventDefault();
            let submenu = event.target.parentNode.querySelector( '.sub-menu'),
                allsubmenu = document.querySelectorAll('.sub-menu');

            console.log(submenu);
            allsubmenu.forEach((el)=>{
                el.classList.remove('active');
            });
            submenu.classList.add('active');
        }
    })
}

// картинка в сайдбар инпуте
function checkSidebarInput(){
    let sidebar = document.querySelector(".sidebar-container"),
        inp = sidebar.querySelector("input[type=text]");

    if(!sidebar) return;

    inp.addEventListener("change", function () {
            if(Boolean(inp.value)) {
                inp.classList.add('active');
                return;
            }
        inp.classList.remove('active');
    });

};

//   все основные кастомные клики
function setupClicks() {
    document.addEventListener('click', function (event) {

        // клик по кнопке закрытия сайдбара
        if(event.target.closest('.close-btn-cont')){
            let sidebar = document.querySelector('.sidebar-container'),
                contentblock = sidebar.nextElementSibling,
                showSideBar = document.querySelector('.open-sidebar-btn');

            sidebar.style.opacity = 1;

            (function fade() {
                if(sidebar.style.opacity < 0){
                    sidebar.classList.add('hidden');
                    contentblock.classList.remove('col-lg-8');
                    showSideBar.style.display = 'block';
                    sidebar.style.opacity = 0;
                    return;
                }
                sidebar.style.opacity -= 0.05;
                setTimeout(fade, 30);
            })();

        };

        // клик по кнопке открытия сайдбара
        if(event.target.closest('.open-sidebar-btn')){
            let sidebar = document.querySelector('.sidebar-container'),
                contentblock = sidebar.nextElementSibling,
                showSideBar = document.querySelector('.open-sidebar-btn');

            (function fadeIn() {
                showSideBar.style.display = 'none';
                contentblock.classList.add('col-lg-8');
                sidebar.classList.remove('hidden');

                if(sidebar.style.opacity < 1){

                    sidebar.style.opacity = +sidebar.style.opacity + 0.05;
                    setTimeout(fadeIn, 30);
                };

            })();
        }
    })
}
let downed = false;
//  инициализация стики-сайдбара
function initStickySidebar() {

    let sideBar = document.querySelector('.sidebar-inner'),
        sideBarCont = document.querySelector('.sidebar-container'),
        sideBarHeight = getHeight();

        sideBar.style.height = sideBarHeight + "px";


        document.addEventListener('scroll', ()=>{
            let bannerHeight = document.querySelector(".hello-block").offsetHeight,
                sideBarTop = sideBar.getBoundingClientRect().bottom + pageYOffset,
                sideBarContTop = sideBarCont.getBoundingClientRect().bottom + pageYOffset;

            if(window.scrollY > bannerHeight){
                sideBar.classList.add('sticky');
                sideBar.style.width = sideBar.parentElement.offsetWidth - 30 + "px";
            }
            if(window.scrollY < bannerHeight){
                sideBar.classList.remove('sticky');
            }
            if(sideBarTop >= sideBarContTop && !sideBarCont.classList.contains('hidden')){
                sideBar.classList.remove('sticky');
                sideBar.classList.add('stopped');
                downed = true;
            }
            if(sideBar.getBoundingClientRect().top > 80 && downed){
                sideBar.classList.remove('stopped');//
                sideBar.classList.add('sticky');
                downed = false;
            }
        })

    function getHeight() {
        let height = 0;
        for(let i = 0; i < sideBar.children.length; i++){
            let el = sideBar.children[i];
            height += el.offsetHeight + parseInt(window.getComputedStyle(el).marginTop);
        }
        return height;
    }
}