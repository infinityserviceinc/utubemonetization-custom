<section class="footer_sec">   
    <div class="container">        
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="footer_inner">
                    <h2>About us</h2>
                    <p>At Utubemonitization, we are passionate about empowering content creators and businesses to thrive in the dynamic world of YouTube. As pioneers in YouTube Automation Services, our mission is to redefine how you manage and grow your channel.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Refund policy</a></li>
                        <li><a href="#">Terms and Services</a></li>                       
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_links">
                    <h4>CONTACT Us</h4>
                    <ul>                       
                        <li><a href="mailto::Support@Utubemonitization.com">Support@Utubemonitization.com</a></li>
                        <li><a href="mailto::Sales@Utubemonitization.com">Sales@Utubemonitization.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bottom_footer">
                    <p>© 2024 Utubemonitization All Rights Reserved.</p>                    
                </div>
            </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
              <div class="desc">
                  <h2>Disclaimer:</h2>
                  <p>All company logos and trademarks appearing on our website are the property of their respective owners. We are not affiliated, associated, endorsed by, or in any way officially connected with these companies or their trademarks. The use of these logos and trademarks does not imply any endorsement, affiliation, or relationship between us and the respective companies. We solely use these logos and trademarks for identification purposes only. All information and content provided on our website is for informational purposes only and should not be construed as professional advice. We do not guarantee the accuracy or completeness of any information provided on our website. We are not responsible for any errors or omissions, or for the results obtained from the use of this information. Any reliance you place on such information is strictly at your own risk.</p>
              </div>
          </div>
        </div>
    </div>
</section>

<!-- footer end -->

<!-- modal -->
<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        	<div class="popup_form_wrp">
    <h2>GET FREE <span class="color_form">CONSULTATION</span></h2>
    <p><b>Discuss your idea</b> with our consultants <b>today</b></p>
    <form action="/leads/" method="POST">        
        <input type="text" name="name" placeholder="Full Name" required="">
        <input type="email" name="email" placeholder="Email Address" required="">
        <input type="tel" name="phone" placeholder="Phone Number" minlength="10" maxlength="11" required="">
        <textarea name="brief" placeholder="Enter a brief description about your project"></textarea>
        <input type="submit" value="Submit">
    </form> 
</div>
      </div>
    </div>
  </div>
</div>


<!-- script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>

//  Set caption from card text
$('.card-deck a').fancybox({
  caption : function( instance, item ) {
    return $(this).parent().find('.card-text').html();
  }
});

</script>

<script>

$('.success_slider').slick({
  dots: true,
  arrows:false,
  infinite: true,
  speed: 1500,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.rev_slider').slick({
  centerMode: true,
  dots: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});


var rev = $('.rev_slider_new');
rev.on('init', function(event, slick, currentSlide) {
  var
    cur = $(slick.$slides[slick.currentSlide]),
    next = cur.next(),
    prev = cur.prev();
  prev.addClass('slick-sprev');
  next.addClass('slick-snext');
  cur.removeClass('slick-snext').removeClass('slick-sprev');
  slick.$prev = prev;
  slick.$next = next;
}).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
  //console.log('beforeChange');
  var
    cur = $(slick.$slides[nextSlide]);
  //console.log(slick.$prev, slick.$next);
  slick.$prev.removeClass('slick-sprev');
  slick.$next.removeClass('slick-snext');
  next = cur.next(),
    prev = cur.prev();
  prev.prev();
  prev.next();
  prev.addClass('slick-sprev');
  next.addClass('slick-snext');
  slick.$prev = prev;
  slick.$next = next;
  cur.removeClass('slick-next').removeClass('slick-sprev');
});

rev.slick({
  speed: 1000,
  arrows: true,
  dots: true,
  focusOnSelect: true,
  prevArrow: '<button> prev</button>',
  nextArrow: '<button> next</button>',
  infinite: true,
  centerMode: true,
  slidesPerRow: 1,
  slidesToShow: 1,
  slidesToScroll: 1,
  centerPadding: '0',
  swipe: true,
  customPaging: function(slider, i) {
    return '';
  },
  /*infinite: false,*/
});

</script>

</body>
</html>