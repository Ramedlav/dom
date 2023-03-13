

    $(document).ready(function(){
        $("#search-form-more-filters").on("click", function (event) {
            event.preventDefault();
            $('.chevron-btn').toggleClass("transform-chevron");
        });
    });
