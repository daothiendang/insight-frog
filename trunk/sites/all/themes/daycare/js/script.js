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
    var y = $(this).scrollTop();
//    alert(y);
    testimonialDistance = $('#box_testimonial').offset().top - 200;
    tell_requestDistance = $('#tell_request').offset().top - 100;
    offsetRight = $(window).width() - ($('#box_testimonial').offset().left + $('#box_testimonial').width());
    
    if (y > testimonialDistance && y < tell_requestDistance) {
        $('#btn_promotion').css('position', 'fixed');
        $('#btn_promotion').css('top', '20%');
        $('#btn_promotion').css('right', offsetRight);
    } else {
        $('#btn_promotion').css('position', 'absolute');
        $('#btn_promotion').css('top', '0');
        $('#btn_promotion').css('right', 0);
    }
});

$('#btn_promotion').hover(function() {

});