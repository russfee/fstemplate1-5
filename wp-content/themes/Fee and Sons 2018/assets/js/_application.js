
jQuery( document ).ready(function($) {


// toggle Mobile Menu -----------------------------------------
var pageHeader = $('header');
var pageBody = $('body');
$('.mobile-toggle').on('click', function(e) {
    e.preventDefault();
    $(pageHeader).toggleClass('open');
    $(pageBody).toggleClass('noscroll');
});

// Toggle mobile submenus
$('.sub-toggle, .mega-toggle').on('click', function() {
    $(this).parent().toggleClass('open');
});


// Open sidebar children menus --------------------------------
// open current page
$('#sidebar .page_item_has_children.current_page_parent, #sidebar .page_item_has_children.current_page_item').addClass('open');
// open menu on click
$('#sidebar .page_item_has_children > a > i').on('click', function(e) {
    e.preventDefault();
    $(this).parent().parent().toggleClass('open');
});

// Sticky header menu ----------------------------------------
var prevScrollTop = 0,
didScroll = false;

$(window).scroll(function() {
    didScroll = true;
});

setInterval(function() {
    if ( didScroll ) {
        didScroll = false;
        headerScroll();
    }
}, 50);

function headerScroll() {
    var scrollTop = $(this).scrollTop();

    if ( scrollTop < 0 ) {
        scrollTop = 0;
    }
    if( scrollTop < 250) {
        $('header').removeClass('scroll');
    }
    if ( scrollTop > $('body').height() - $(window).height() ) {
        scrollTop = $('body').height() - $(window).height();
    }

    if (scrollTop >= prevScrollTop && scrollTop) {
        if (scrollTop >= 250) {
        $('header').addClass('scroll');
    }
    } else {
        // $('header').removeClass('scroll');
    }

    prevScrollTop = scrollTop;
} // end Header Scroll function




// Trigger modal 
var loginModalOpen = false,
loginModal = $('#login-modal'),
loginModalOverlay = $('#modal-overlay');

$('body.login a[href="#peo-login"], body.login-portal a[href="#peo-login"]').on('click', function(e) {
    if( loginModalOpen == false ) {
        e.preventDefault();
        $(loginModal).addClass('open');
        $(loginModalOverlay).addClass('open');
        $('body').addClass("noscroll");
        loginModalOpen = true;
    }
});

$('#close-modal, #modal-overlay').on('click', function() {
    $('body').removeClass("noscroll");
    $(loginModal).removeClass('open');
    $(loginModalOverlay).removeClass('open');
    loginModalOpen = false;
});



// Initiate slick on generic slides ----------------------------------------
$('.slides').slick({
    arrows: true,
    dots: true,
    lazyLoad: 'ondemand',
    prevArrow: '<span class="slick-arrow slick-prev"><i class="icon-chevron-right"></i></span>',
    nextArrow: '<span class="slick-arrow slick-next pulse"><i class="icon-chevron-right"></i></span>',
});


// Initiate Slick on Testimonial sliders -----------------------------------------
$('.test-slider__slides').slick({
    dots: false,
    arrows: true,
    lazyLoad: 'ondemand',
    asNavFor: '.test-slider__nav',
    prevArrow: '<span class="slick-arrow slick-prev"><i class="icon-chevron-right"></i></span>',
    nextArrow: '<span class="slick-arrow slick-next pulse"><i class="icon-chevron-right"></i></span>',
    responsive: [
        {
            breakpoint: 1100,
            settings: {
                asNavFor: '',
            }
          },
    ]
});

$('.test-slider__nav').slick({
    dots: false,
    arrows: false,
    asNavFor: '.test-slider__slides',
    centerMode: true,
    centerPadding: '20px',
    slidesToShow: 5,
    focusOnSelect: true,
});



// Open FAQs --------------------------------------
$('.faqs__item:first-child').addClass('open');
$('.faqs__item-title').on('click', function() {
  var faqClicked = $(this).parent();
  console.log(faqClicked);
  if( $(faqClicked).hasClass('open') ) {
    $(faqClicked).removeClass('open');
  } else {
    // $('.faq__item').removeClass('open');
    $(faqClicked).addClass('open');
  }
});


// Fix SVGs --------------------------------------
// $('.callouts .icon svg').attr('viewBox', '0 0 200 200').removeAttr('height').removeAttr('width').attr('preserveAspectRatio', 'MidYMid meet'); 
// $('.callouts .icon svg').attr('viewBox', '0 0 10 10').attr('height', '200').attr('width', '200').attr('preserveAspectRatio', 'MidYMid meet');
// $('.icon svg use').attr('xlink:href', '#b');

}); // End document Ready
