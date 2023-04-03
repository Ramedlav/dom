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
                to = index + 1;
            }
        });

        $('.image-gallery-index-current').text(to);
        $('.image-gallery-index-total').text(count);
        // var info = '<span class="image-gallery-index-current">' + to +'</span>';
        //     info += '<span class="image-gallery-index-separator">' + '/' + '</span>';
        //     info += '<span class="image-gallery-index-total">' + count +'</span>';
        // $('.image-gallery-index').html(info);
    });


});

Fancybox.bind('[data-fancybox="gallery"]', {
    // Your custom options
  });


$(document).ready(function(){
    $("#addressLink").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1100);
    });
});


$(document).ready(function() {
    var height = $('.css-1umupf3 .content-text').height();
    if( height < 120 ){
        $('.css-1umupf3 .more-btn').addClass('d-none');
    } else {
        $('.css-1umupf3 .more-btn').removeClass('d-none');
        $('.css-1umupf3 .more-btn').on('click',function(){
            $('.css-1umupf3 .content-text').toggleClass('css-1yc9uo8');
            $('.chevron-btn').toggleClass('transform-chevron');
        });
    }
});


$(document).ready(function() {
    $('.css-8ycw4').on('click',function(){
        $(this).toggleClass('d-none');
        $('.css-8ycw4-number').toggleClass('d-none');
    });

    $('.css-8ycw4-number').on('click',function(){
        $(this).toggleClass('d-none');
        $('.css-8ycw4').toggleClass('d-none');
    });
});

$(document).ready(function() {
    $('.css-1nbnxnr').on('click',function(){
        $('.sp-more').toggleClass('d-none');
        $('.sp-close').toggleClass('d-none');
        $('.css-b884ca').toggleClass('d-none');
    });
});


