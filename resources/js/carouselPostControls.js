$(function () {
    $('#carouselPostControls').carousel({
        // interval: 10000,
        keyboard: false,
        pause: 'hover',
        // ride: 'false',
        // wrap: false
    });

    $('#carouselPostControls').on('slide.bs.carousel', function (e) {
        var to;
        var count = $(e.relatedTarget).parent().find('.carousel-item').length;
        $(e.relatedTarget).parent().find('.carousel-item').each(function (index, element) {
            if (element === e.relatedTarget) {
                to = index;
            }
        });

        var info = '<span class="image-gallery-index-current">' + to +'</span>';
            info += '<span class="image-gallery-index-separator">' + '/' + '</span>';
            info += '<span class="image-gallery-index-total">' + count +'</span>';
        $('.image-gallery-index').html(info);
    });

});

$(document).ready(function(){
    $("#addressLink").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });

});
