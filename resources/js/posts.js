
    $(document).ready(function(){
        $("#carouselRecommendPost").on("click", function (event) {
            event.preventDefault();
            $('.chevron-btn').toggleClass("transform-chevron");
        });
    });

    $(function () {
        $('#carouselRecommendPost').carousel({
            // interval: 10000,
            keyboard: false,
            pause: 'hover',
            ride: 'false',
        //     wrap: false
         });

        $('#carouselRecommendPost').on('slide.bs.carousel', function (e) {
            var to;
            var count = $(e.relatedTarget).parent().find('.carousel-item').length;
            $(e.relatedTarget).parent().find('.carousel-item').each(function (index, element) {
                if (element === e.relatedTarget) {
                    to = index + 1;
                }
            });

            $('.image-gallery-index-current').text(to);
            $('.image-gallery-index-total').text(count);

        });

    });
