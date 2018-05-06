export default function() {
  ;(function() {
    let bgImage = $('.is-bg');


    let snagBgImages = () => {

      bgImage.each( (i, img) => {
        let $t = $(img);
        let bgSrc = $t.attr('data-bg-src');
        let imger = new Image();

        $('<img>').attr('src', bgSrc).on('load', () => {
          $t.addClass('ready').css({'background-image': 'url('+ bgSrc  + ')'})
        })

       
      })
    }


    $(window).on('load', snagBgImages)
  })(jQuery);
}