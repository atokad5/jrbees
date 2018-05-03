export default function() {
  ;(function() {
    let bgImage = $('.is-bg');


    let snagBgImages = () => {
      
      bgImage.each( (i, img) => {
        let $t = $(img);
        let bgSrc = $t.attr('data-bg-src');
        console.log($t)
        $t.css({
          'background-image': 'url(' + bgSrc + ')' 
        })

      })
    }


    $(window).on('load', snagBgImages)
  })(jQuery);
}