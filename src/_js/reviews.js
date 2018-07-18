export default function() {
  ;(function() {
  let urlEndpoint = "http://hisandherscreativespace.com/coffeeendpoint/fetch.php?result=-BNyWVPZFOwkGvJ1FNRx5A";
  let $reviewContainer = $('.review-nest');




  const fetchReviews = () => {
    

    $.ajax({
      url: urlEndpoint,
      dataType: 'JSON',
      success: function(data) {
        for(let i = 0; i < data.reviews.length; i++) {
          let entryPoint = data.reviews[i];
          let name = entryPoint.user.name;
          let rating = entryPoint.rating;
          let review = entryPoint.text;
          let url = entryPoint.url;
          
          
          // console.log(entryPoint)
          $reviewContainer.append(`
            <div class="review-el">
              <div class="review-el-inner">
                <div class="review-content">
                <h2>${rating} Star Review by ${name}</h2>
                <p>${review}</p>
                <div className="view-review">
                  <a target="_BLANK" href="${url}">View Review</a>
                </div></div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" style="enable-background:new 0 0 100 100;" xml:space="preserve"><style type="text/css">
              .st0{fill-rule:evenodd;clip-rule:evenodd;}
              </style><path class="st0" d="M90.4,54.9v17.7c0,4.9-4,8.9-8.9,8.9H63.8c-4.9,0-8.9-4-8.9-8.9V54.9c0-19.6,15.9-35.4,35.4-35.4V32  c-9.1,0.6-16.9,6.2-20.6,14.1h11.8C86.4,46.1,90.4,50,90.4,54.9z M37.2,81.5H19.5c-4.9,0-8.9-4-8.9-8.9V54.9  c0-19.6,15.9-35.4,35.4-35.4V32c-9.1,0.6-16.9,6.2-20.6,14.1h11.8c4.9,0,8.9,4,8.9,8.9v17.7C46.1,77.5,42.1,81.5,37.2,81.5z"/>
            </svg>
              </div>
              
            </div>
          `)
        }
       
      }
    })
  }

  fetchReviews();
  })(jQuery);
}