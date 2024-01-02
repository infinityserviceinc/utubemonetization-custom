<section class="footer_sec">   
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <div class="footer_logo">
                    <a href="/"><img src="assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-10">
                <div class="footer_menu">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="our-portfolio/">Our Portfolio</a></li>
                        <li><a href="customer-testimonials/">Customer Testimonials</a></li>
                        <button type="button" class="btn-dark">Book A Free Consultancy</button>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row mt-5 align-items-end">
            <div class="col-md-6">
                <div class="footer_inner">
                    <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                    <p>us erat. Fusce auctor rutrum eros, fringilla Fusce auctor rutrum eros, fringilla interdum odint</p>
                    <form action="/leads/" method="POST">
                        <input type="email" name="name" placeholder="Email Address">
                        <input type="submit">
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_links">
                    <h4>sOCIAL mEDIA</h4>
                    <ul>
                        <li><a href="#">FACEBOOK</a></li>
                        <li><a href="#">INSTAGRAM</a></li>
                        <li><a href="#">TWITTER</a></li>
                        <li><a href="#">LINKEDIN</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer_links">
                    <h4>CONTACT INFORMATION</h4>
                    <ul>
                        <li><a href="tel:+123 456 789 0">+123 456 789 0</a></li>
                        <li><a href="mailto::Sample@example.com">Sample@example.com</a></li>
                        <li><a href="#">4097 Whitetail Lane <br>Irving,TX 75060</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bottom_footer">
                    <p>Copyright @ 2023. All Rights Reserved.</p>
                    <span>
                      <a href="#">PRIVACY</a>
                      <a href="#">POLICY</a>
                    </span>
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
        <input type="hidden" name="route" value="/lp-2/">
        <input type="hidden" name="brand" value="theappfounders">
        <input type="hidden" name="token" value="4bec06cfac02e115ca4fc9242234e9d7cc88fbf8893a900082577086f3db94ae">
        <input type="hidden" name="tag" value="banner-right-form">
        <input type="hidden" name="price" value="null">
        <input type="hidden" name="news" value="1">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<script>

$('.testimonial_sldier').slick({
  dots: false,
  arrows:true,
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

$('.youtube_slider').slick({
  dots: false,
  arrows:true,
  infinite: true,
  speed: 1500,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 768,
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


$('.client_sldier').slick({
  dots: false,
  arrows:true,
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


</script>

</body>
</html>