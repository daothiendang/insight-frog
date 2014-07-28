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
    windowHeight = $(window).width();
    if (windowHeight > 768) {
        var y = $(this).scrollTop();
    //    alert(y);
        testimonialDistance = $('#box_testimonial').offset().top - 200;
    //    tellRequestDistance = $('#tell_request').offset().top - 100;
        offsetRight = $(window).width() - ($('#box_testimonial').offset().left + $('#box_testimonial').width());

    //    if (y > testimonialDistance && y < tellRequestDistance) {
        if (y > testimonialDistance) {
            $('#btn_promotion').css('position', 'fixed');
            $('#btn_promotion').css('top', '50%');
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
    activeService = '#service_1';
}
$(activeService).addClass('active');
$('a[href=' + activeService + ']').parent().addClass('active');
$('.active').find('.service_icon_thumbnail').hide();
$('.active').find('.service_icon_hover').show();

// hover thumbnail img
$('.list_services .service_icon_thumbnail img').mouseover(function() {
    if (!$(this).closest('.list_services').hasClass('active')) {
        $(this).parent().hide();
        $(this).parent().next().show();
        $(this).parent().parent().next().css('color', '#ea544a');
    }
});
$('.list_services .service_icon_hover img').mouseout(function() {
    if (!$(this).closest('.list_services').hasClass('active')) {
        $(this).parent().hide();
        $(this).parent().prev().show();
        $(this).parent().parent().next().css('color', '#333333');
    }
});

// hover service name text
$('.list_services .service_detail').mouseover(function() {
    if (!$(this).closest('.list_services').hasClass('active')) {
        $(this).prev().find('.service_icon_thumbnail').hide();
        $(this).prev().find('.service_icon_hover').show();
        $(this).css('color', '#ea544a');
    }
});
$('.list_services .service_detail').mouseout(function() {
    if (!$(this).closest('.list_services').hasClass('active')) {
        $(this).prev().find('.service_icon_hover').hide();
        $(this).prev().find('.service_icon_thumbnail').show();
        $(this).css('color', '#333333');
    }
});



$('#myTab a').click(function () {
    $('.active').find('.service_icon_hover').hide();
    $('.active').find('.service_icon_thumbnail').show();
    window.location.hash = $(this).attr('href');
//  e.preventDefault();
//  $(this).tab('show');
});
