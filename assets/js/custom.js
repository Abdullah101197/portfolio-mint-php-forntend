$(document).ready(function() {
    $("li:first-child").addClass("first");
    $("li:last-child").addClass("last");
    $('[href="#"]').attr("href", "javascript:;");
    $('.menu-Bar').click(function() {
        $(this).toggleClass('open');
        $('.menuWrap').toggleClass('open');
        $('body').toggleClass('ovr-hiddn');
    });

    $('.loginUp').click(function(){
        $('.LoginPopup').fadeIn();
        $('.overlay').fadeIn();
    });

    $('.signUp').click(function(){
        $('.signUpPop').fadeIn();
        $('.overlay').fadeIn();
    });

     $('.closePop,.overlay').click(function(){
        $('.popupMain').fadeOut();
        $('.overlay').fadeOut();
    });

});








// Fancy Media
$('.fancybox-media').fancybox({
    openEffect: 'none',
    closeEffect: 'none',
    helpers: {
        media: {}
    }
});


// Slider For
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true
});


// Accordion
$('.myaccordi>li').click(function() {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
});
//  https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_accordion


// Sticky Navigation
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) {
        $(".fixed").addClass("sticky");
    } else {
        $(".fixed").removeClass("sticky");
    }
});


// Normal Slider
$('.index-slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
});
            

// Navigation Menu 
$(window).on('load', function() {
var currentUrl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
$('ul.menu li a').each(function() {
    var hrefVal = $(this).attr('href');
    if (hrefVal == currentUrl) {
        $(this).removeClass('active');
        $(this).closest('li').addClass('active')
        $('ul.menu li.first').removeClass('active');
    }
});

});

// Tabbing JS
  $('[data-targetit]').on('click', function(e) {
  $(this).addClass('current');
  $(this).siblings().removeClass('current');
  var target = $(this).data('targetit');
  $('.' + target).siblings('[class^="box-"]').hide();
  $('.' + target).fadeIn();
  $(".tab-slider").slick("setPosition");
});



const fixedDiv = document.querySelector('.titus');
const seclogo1 = document.querySelector('.seclogo');
const logoMian = document.querySelector('.logoMian');
const btnClose = document.querySelector('.btnClose');
const element = document.getElementById('headerMain');



// const scrollableDiv = document.querySelector('.scrollable-div');

// Define the height at which the fixed div should start scrolling
const scrollTriggerHeight = 400; // Adjust as needed
const seclogo = 700; // Adjust as needed

window.addEventListener('scroll', () => {
    // Get the current scroll position
    const scrollY = window.scrollY;

    if (scrollY >= scrollTriggerHeight) {
        // When the scroll position is greater than or equal to the trigger height
        // fix the div by setting its position to "absolute" and adjusting the top value
        fixedDiv.style.position = 'absolute';
        fixedDiv.style.paddingTop = '33%';
        // fixedDiv.style.top = `${scrollY - scrollTriggerHeight}px`;
    } else {
        // Otherwise, make the fixed div fixed again
        fixedDiv.style.position = 'fixed';
        fixedDiv.style.top = '0';
        fixedDiv.style.paddingTop = '15%';
    }

    if (scrollY >= seclogo) {
        seclogo1.style.opacity = '1';
        logoMian.style.opacity = '0';
        element.classList.remove('hide');
        seclogo1.style.top = '10%';

    } else {
        seclogo1.style.opacity = '0';
        logoMian.style.opacity = '1';
        element.classList.remove('hide');
        seclogo1.style.top = '10%';

    }
});
function toggleClass() {
    element.classList.toggle('hide');
    seclogo1.style.top = '3%';

}

/* RESPONSIVE JS */
// if ($(window).width() < 1400) {
    
//     window.addEventListener('scroll', () => {
//         // Get the current scroll position
//         const scrollY = window.scrollY;
    
//         if (scrollY >= scrollTriggerHeight) {
//             // When the scroll position is greater than or equal to the trigger height
//             // fix the div by setting its position to "absolute" and adjusting the top value
//             fixedDiv.style.position = 'absolute';
//             fixedDiv.style.paddingTop = '550px';
//             // fixedDiv.style.top = `${scrollY - scrollTriggerHeight}px`;
//         } else {
//             // Otherwise, make the fixed div fixed again
//             fixedDiv.style.position = 'fixed';
//             fixedDiv.style.top = '0';
//             fixedDiv.style.paddingTop = '200px';
//         }
    
//         if (scrollY >= seclogo) {
//             seclogo1.style.opacity = '1';
//             logoMian.style.opacity = '0';
//             element.classList.remove('hide');
    
//         } else {
//             seclogo1.style.opacity = '0';
//             logoMian.style.opacity = '1';
//             element.classList.remove('hide');
    
//         }
//     });
//     function toggleClass() {
//         element.classList.toggle('hide');
//     }  
// }











