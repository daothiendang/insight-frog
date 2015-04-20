$(document).ready(function() {
    setHeightForServiceRightSidebar();
    $('.fb-comments').attr('data-width', '100%');
    $('#widget_bound').hide();
});


/*  ----------------------------  Home page  -------------------------------  */
// testimonial
noOfTestimonial = $("#testimonial_inner .testimonial_content").length;
if (noOfTestimonial > 1) {
    $('#testimonial_inner > div:gt(0)').hide();

    setInterval(function() {
        $('#testimonial_inner > div:first')
                .fadeOut(1000)
                .next().delay(1000)
                .fadeIn(1000)
                .end()
                .appendTo('#testimonial_inner');
    }, 9000);
}

// promotion button
$(document).scroll(function() {
    windowWidth = $(window).width();
    if (windowWidth > 768) {
        $('#btn_promotion').css('margin', '0');
        var y = $(this).scrollTop();
        testimonialDistance = $('#box_testimonial').offset().top - 500;
    //    tellRequestDistance = $('#tell_request').offset().top - 100;
        offsetRight = $(window).width() - ($('#box_testimonial').offset().left + $('#box_testimonial').width());

    //    if (y > testimonialDistance && y < tellRequestDistance) {
        if (y > testimonialDistance) {
            $('#btn_promotion').css('position', 'fixed');
            $('#btn_promotion').css('top', '80%');
            $('#btn_promotion').css('right', offsetRight);
        } else {
            $('#btn_promotion').css('position', 'absolute');
            $('#btn_promotion').css('top', '0');
            $('#btn_promotion').css('right', 0);
        }
    } else {
        $('#btn_promotion').css('position', 'relative');
        $('#btn_promotion').css('margin', '50px auto');
        $('#btn_promotion').css('top', '0');
        $('#btn_promotion').css('right', '0');
    }
});


//  ---------------------------  About Us  -------------------------------------
$('.about_read_more').click(function() {
    $(this).prev().find('.about_summarize, .about_full').toggle();
    var text = $(this).text();
    
    $(this).text(text === "HIDE" ? "READ MORE" : "HIDE");
});


//  ---------------------------  Services  -------------------------------------
// set main content at first time loading of Services and Booking
url = window.location.href;
var pageName = url.replace(siteUrl, '');
lastPath = pageName.split('/');

if (lastPath[0] === 'services') {
    activeService = '#' + window.location.hash.substr(1);
    if (activeService === '#') {
        activeService = '#1';
    }
    $(activeService).addClass('active');
    $('a[href=' + activeService + ']').parent().addClass('active');
    $('.active').find('.service_icon_thumbnail').hide();
    $('.active').find('.service_icon_hover').show();
} else if (lastPath[0] === 'package_tours') {
    activeBooking = '#' + window.location.hash.substr(1);
    if (activeBooking === '#') {
        activeBooking = 'list_tours';
    } else {
        $('#list_tours').removeClass('active');
    }
    $(activeBooking).addClass('active');
    $('a[href=' + activeBooking + ']').parent().parent().addClass('active');
}


// hover list service
$('.list_services a').mouseover(function() {
    if (!$(this).hasClass('active')) {
        $(this).find('.service_icon_thumbnail').hide();
        $(this).find('.service_icon_hover').show();
        $(this).find('.service_detail').css('color', '#ea544a');
    }
});
$('.list_services a').mouseout(function() {
    if (!$(this).closest('.list_services').hasClass('active')) {
        $(this).find('.service_icon_hover').hide();
        $(this).find('.service_icon_thumbnail').show();
        $(this).find('.service_detail').css('color', '#333333');
    }
});

// click list service
$('#box_services #myTab a').click(function () {
    if (!$(this).parent().hasClass('active')) {
        $('.active').find('.service_icon_hover').hide();
        $('.active').find('.service_icon_thumbnail').show();
        $('.active').find('.service_detail').css('color', '#333333');
        window.location.hash = $(this).attr('href');
    }
//  e.preventDefault();
//  $(this).tab('show');
});

// set height for right sidebar
$( window ).resize(function() {
    setHeightForServiceRightSidebar();
});
function setHeightForServiceRightSidebar() {
    if ($(window).width() > 768) {
        contentHeight = $('#service_content').height();
        $('#service_right_sidebar').height(contentHeight);
    } else {
        $('#service_right_sidebar').height(0);
    }
}

/*  ---------------------------  Promotion  --------------------------------  */
$('.promotion_read_more').click(function() {
    $(this).next().slideToggle('slow', function() {});
    var text = $(this).text();
    $(this).text(text === "HIDE" ? "READ MORE" : "HIDE");
});


/*  -----------------------------  Booking  --------------------------------  */
$('.contact_us_header#myTab a').click(function (e) {
    window.location.hash = $(this).attr('href');
});
$('.package_tour_intro').click(function() {
    visibleStatus = $(this).parent().find('.package_tour_list').css('display');
    $(this).next().slideToggle();
    
    if ($.trim(visibleStatus) !== 'block') {
        $('html, body').animate({
            scrollTop: $(this).next().offset().top
        }, 1000);
    }
});
$('#header_reserve').click(function() {
    $('html, body').animate({
        scrollTop: $('#main').offset().top
    }, 1000);
});

/*  --------------------------  Package Tour  ------------------------------  */
$('.package_tour_small_img img').click(function() {
    src = $(this).attr('src');
    $('.package_tour_big_img img').attr('src', src);
});


function getSiteName() {
    pathArray = window.location.pathname.split( '/' );
    siteName  = window.location.protocol + '//' + window.location.host + '/' + pathArray[1] + '/';
    return siteName;
}