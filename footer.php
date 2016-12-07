  <div class="clearfix"></div>
  <div class="footer pulse animated">
<!-- container -->
<div class="container">
  <div class="footer-top-grids">
    <div class="footer-grids" id="padd37">
      <div class="col-md-3 footer-grid">
        <h4>Our Products</h4>
        <ul>
          <li><a href="home.php">Flight Schedule</a></li>
          <li><a href="home.php">International Flights</a></li>
          <li><a href="home.php">International Hotels</a></li>
          <li><a href="home.php">Domestic Airlines</a></li>
          <li><a href="home.php">Holidays Trip</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-grid">
        <h4>Company</h4>
        <ul>
          <li><a href="about.php">About Us</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><a href="feedback.php">Feedback</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-grid">
        <h4>Travel Resources</h4>
        <ul>
          <li><a href="holidays.php">Holidays Packages</a></li>
          <li><a href="home.php">Weekend Getaways</a></li>
          <li><a href="home.php">International Airports</a></li>
          <li><a href="home.php">Domestic Flights Booking</a></li>
          <li><a href="home.php">Customer Support</a></li>
          <li><a href="home.php">Cancel Bookings</a></li>
        </ul>
      </div>
      <div class="col-md-3 footer-grid">
        <h4>More Links</h4>
        <ul class="chf_footer_list">
          <li><a href="#">Flights Discount Coupons</a></li>
          <li><a href="#">Domestic Airlines</a></li>
          <li><a href="#">Indigo Airlines</a></li>
          <li><a href="#">Air Asia</a></li>
          <li><a href="#">Jet Airways</a></li>
        </ul>
      </div>
      <div class="clearfix"> </div>
    </div>
    <!-- news-letter -->
    <div class="news-letter">
      <div class="news-letter-grids">
        <div class="col-md-4 news-letter-grid">
          <p>Toll Free No : <span>9985085791</span></p>
        </div>
        <div class="col-md-4 news-letter-grid">
          <p class="mail">Email : <a href="#">hemanthkandregula@gmail.com</a></p>
        </div>
        <div class="col-md-4 news-letter-grid">
          <form>

          </form>
        </div>
        <div class="clearfix"> </div>
      </div>
    </div>
    <!-- //news-letter -->
  </div>
</div>
<!-- //container -->
</div>
<!-- //footer -->
<div class="footer-bottom-grids">
<!-- container -->
<div class="container">
    <div class="footer-bottom-top-grids">
      <div class="col-md-4 footer-bottom-left">
        <h4>Download our mobile Apps</h4>
        <div class="d-apps">
          <ul>
            <li><a href="#"><img src="images/app1.png" alt="" /></a></li>
            <li><a href="#"><img src="images/app2.png" alt="" /></a></a></li>
            <li><a href="#"><img src="images/app3.png" alt="" /></a></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 footer-bottom-left">
        <h4>We Accept</h4>
        <div class="a-cards">
          <ul>
            <li><a href="#"><img src="images/c1.png" alt="" /></a></li>
            <li><a href="#"><img src="images/c2.png" alt="" /></a></a></li>
            <li><a href="#"><img src="images/c3.png" alt="" /></a></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 footer-bottom-left">
        <h4>Follow Us</h4>
        <div class="social">
          <ul>
            <li><a href="#" class="facebook"> </a></li>
            <li><a href="#" class="facebook twitter"> </a></li>
            <li><a href="#" class="facebook chrome"> </a></li>
            <li><a href="#" class="facebook dribbble"> </a></li>
          </ul>
        </div>
      </div>
      <div class="clearfix"> </div>
      <div class="copyright">
        <p>Copyrights © 2016 Bigperl . Design by <a href="home.php">Bigperl trainee</a></p>
      </div>
    </div>
</div>
</div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $( function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
    } );
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    $(function() {
            $( "#datepicker" ).datepicker();
        });
    $(function() {
            $( "#datepicker1" ).datepicker();
        });
    $(function() {
            $( "#datepicker2" ).datepicker();
        });
    $(function() {
            $( "#datepicker3" ).datepicker();
        });
    $(function() {
            $( "#datepicker4" ).datepicker();
        });
    $(function() {
            $( "#datepicker5" ).datepicker();
        });
    
    $( "#dialog-link" ).click(function( event ) {
  $( "#dialog" ).dialog( "open" );
  event.preventDefault();
});
$( "#dialog-link, #icons li" ).hover(
  function() {
    $( this ).addClass( "ui-state-hover" );
  },
  function() {
    $( this ).removeClass( "ui-state-hover" );
  }
);

    $('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
  <script>
  $( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 2000,
      max: 21373,
      values: [ 2075, 5000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "₹" + ui.values[ 0 ] + " - ₹" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "₹" + $( "#slider-range" ).slider( "values", 0 ) +
      " - ₹" + $( "#slider-range" ).slider( "values", 1 ) );
  } );
  </script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
</body>
</html>
