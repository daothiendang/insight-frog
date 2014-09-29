$(document).ready(function() {
    setHeightForServiceRightSidebar();
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
// set main content at first time loading
activeService = '#' + window.location.hash.substr(1);
if (activeService === '#') {
    activeService = '#1';
}
$(activeService).addClass('active');
$('a[href=' + activeService + ']').parent().addClass('active');
$('.active').find('.service_icon_thumbnail').hide();
$('.active').find('.service_icon_hover').show();

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

/*  ----------------------------  Contact  -------------------------------  */
$('#about_us_header #myTab a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
});


/*  ---------------------------  Promotion  --------------------------------  */
$('.promotion_read_more').click(function() {
    $(this).next().slideToggle('slow', function() {});
    var text = $(this).text();
    $(this).text(text === "HIDE" ? "READ MORE" : "HIDE");
});