$(document).ready(function() {
    $('.css-ocljxl textarea').on('keyup',function(){
        if ($('.css-ocljxl textarea').length !==0) {
            $(' button.css-2zsnaw').removeClass('css-2zsnaw').addClass('css-9x8rrm');
        }else {
            $(' button.css-9x8rrm').removeClass('css-9x8rrm').addClass('css-2zsnaw');
        }
    });
});
