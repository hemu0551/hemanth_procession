<?php include 'header.php'; ?>

<div class="col-lg-8" id="padding123">
  <script src="js/jssor.slider-21.1.6.min.js" type="text/javascript"></script>
  <script type="text/javascript">
      jssor_1_slider_init = function() {

          var jssor_1_options = {
            $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$
            },
            $ThumbnailNavigatorOptions: {
              $Class: $JssorThumbnailNavigator$,
              $Cols: 15,
              $SpacingX: 3,
              $SpacingY: 3,
              $Align: 455
            }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

          /*responsive code begin*/
          /*you can remove responsive code if you don't want the slider scales while window resizing*/
          function ScaleSlider() {
              var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
              if (refSize) {
                  refSize = Math.min(refSize, 980);
                  jssor_1_slider.$ScaleWidth(refSize);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }
          ScaleSlider();
          $Jssor$.$AddEvent(window, "load", ScaleSlider);
          $Jssor$.$AddEvent(window, "resize", ScaleSlider);
          $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
          /*responsive code end*/
      };
  </script>
  <style>
      /* jssor slider arrow navigator skin 07 css */
      /*
      .jssora07l                  (normal)
      .jssora07r                  (normal)
      .jssora07l:hover            (normal mouseover)
      .jssora07r:hover            (normal mouseover)
      .jssora07l.jssora07ldn      (mousedown)
      .jssora07r.jssora07rdn      (mousedown)
      .jssora07l.jssora07lds      (disabled)
      .jssora07r.jssora07rds      (disabled)
      */
      .jssora07l, .jssora07r {
          display: block;
          position: absolute;
          /* size of arrow element */
          width: 50px;
          height: 50px;
          cursor: pointer;
          background: url('img/a07.png') no-repeat;
          overflow: hidden;
      }
      .jssora07l { background-position: -5px -35px; }
      .jssora07r { background-position: -65px -35px; }
      .jssora07l:hover { background-position: -125px -35px; }
      .jssora07r:hover { background-position: -185px -35px; }
      .jssora07l.jssora07ldn { background-position: -245px -35px; }
      .jssora07r.jssora07rdn { background-position: -305px -35px; }
      .jssora07l.jssora07lds { background-position: -5px -35px; opacity: .3; pointer-events: none; }
      .jssora07r.jssora07rds { background-position: -65px -35px; opacity: .3; pointer-events: none; }
      /* jssor slider thumbnail navigator skin 04 css *//*.jssort04 .p            (normal).jssort04 .p:hover      (normal mouseover).jssort04 .pav          (active).jssort04 .pav:hover    (active mouseover).jssort04 .pdn          (mousedown)*/.jssort04 .p {    position: absolute;    top: 0;    left: 0;    width: 62px;    height: 32px;}.jssort04 .t {    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    border: none;}.jssort04 .w, .jssort04 .pav:hover .w {    position: absolute;    width: 60px;    height: 30px;    border: #0099FF 1px solid;    box-sizing: content-box;}.jssort04 .pdn .w, .jssort04 .pav .w {    border-style: dashed;}.jssort04 .c {    position: absolute;    top: 0;    left: 0;    width: 62px;    height: 32px;    background-color: #000;    filter: alpha(opacity=45);    opacity: .45;    transition: opacity .6s;    -moz-transition: opacity .6s;    -webkit-transition: opacity .6s;    -o-transition: opacity .6s;}.jssort04 .p:hover .c, .jssort04 .pav .c {    filter: alpha(opacity=0);    opacity: 0;}.jssort04 .p:hover .c {    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}* html .jssort04 .w {    width /**/: 62px;    height /**/: 32px;}
  </style>
  <div id="jssor_1" style="position:relative;margin:0 auto;top:5em;left:0px;width:980px;height:430px;overflow:hidden;visibility:hidden;background:url('img/main_bg.jpg') 50% 50% no-repeat;">
      <!-- Loading Screen -->
      <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
          <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
          <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
      </div>
      <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 980px; height: 400px; overflow: hidden;">
          <a data-u="any" href="http://www.jssor.com" style="display:none">Content Slider</a>
          <div data-p="172.50" style="display: none;">
                <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                    <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;color: #FFFFFF;">Premier Room 1</span><br /><br />
                    <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                            we offer the best hotel plans for every room you choose

                    </span><br /><br />
                </div>
                <img style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" src="img/s2.png" />
                <img data-u="thumb" src="img/s2t.jpg" />
            </div>
            <div data-p="172.50" style="display: none;">
                  <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                      <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;color: #FFFFFF;">Premier Room 2</span><br /><br />
                      <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                              we offer the best hotel plans for every room you choose

                      </span><br /><br />
                  </div>
                  <img style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" src="img/s3.png" />
                  <img data-u="thumb" src="img/s3t.jpg" />
              </div>
              <div data-p="172.50" style="display: none;">
                    <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                        <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;color: #FFFFFF;">Premier Room 3</span><br /><br />
                        <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                we offer the best hotel plans for every room you choose

                        </span><br /><br />
                    </div>
                    <img style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" src="img/s4.png" />
                    <img data-u="thumb" src="img/s4t.jpg" />
                </div>
                <div data-p="172.50" style="display: none;">
                      <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                          <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;color: #FFFFFF;">Premier Room 4</span><br /><br />
                          <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                  we offer the best hotel plans for every room you choose

                          </span><br /><br />
                      </div>
                      <img style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" src="img/s5.png" />
                      <img data-u="thumb" src="img/s5t.jpg" />
                  </div>
                  <div data-p="172.50" style="display: none;">
                        <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                            <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;color: #FFFFFF;">Premier Room 5</span><br /><br />
                            <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                    we offer the best hotel plans for every room you choose

                            </span><br /><br />
                        </div>
                        <img style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" src="img/s6.png" />
                        <img data-u="thumb" src="img/s6t.jpg" />
                    </div>
                    <div data-p="172.50" style="display: none;">
                          <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                              <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;color: #FFFFFF;">Premier Room 6</span><br /><br />
                              <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                      we offer the best hotel plans for every room you choose

                              </span><br /><br />
                          </div>
                          <img style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" src="img/s7.png" />
                          <img data-u="thumb" src="img/s7t.jpg" />
                      </div>
                      <div data-p="172.50" style="display: none;">
                            <div style="position: absolute; top: 10px; left: 10px; width: 480px; height: 300px; font-family: Arial, Verdana; font-size: 12px; text-align: left;"><br />
                                <span style="display: block; line-height: 1em; text-transform: uppercase; font-size: 52px;color: #FFFFFF;">Premier Room 7</span><br /><br />
                                <span style="display: block; line-height: 1.1em; font-size: 2.5em; color: #FFFFFF;">
                                        we offer the best hotel plans for every room you choose

                                </span><br /><br />
                            </div>
                            <img style="position: absolute; top: 23px; left: 480px; width: 500px; height: 300px;" src="img/s8.png" />
                            <img data-u="thumb" src="img/s8t.jpg" />
                        </div>
      </div>
      <!-- Thumbnail Navigator -->
      <div data-u="thumbnavigator" class="jssort04" style="position:absolute;left:0px;bottom:0px;width:980px;height:60px;" data-autocenter="1">
          <!-- Thumbnail Item Skin Begin -->
          <div data-u="slides" style="cursor: default;">
              <div data-u="prototype" class="p">
                  <div class="w">
                      <div data-u="thumbnailtemplate" class="t"></div>
                  </div>
                  <div class="c"><img src="img/s2t.jpg" alt="s2t"><img src="img/s3t.jpg" alt="s2t"><img src="img/s4t.jpg" alt="s2t"><img src="img/s5t.jpg" alt="s2t"><img src="img/s6t.jpg" alt="s2t"></div><img src="img/s7t.jpg" alt="s2t"><img src="img/s8t.jpg" alt="s2t">
              </div>
          </div>
          <!-- Thumbnail Item Skin End -->
      </div>
      <!-- Arrow Navigator -->
      <span data-u="arrowleft" class="jssora07l" style="top:0px;left:8px;width:50px;height:50px;" data-autocenter="2"></span>
      <span data-u="arrowright" class="jssora07r" style="top:0px;right:8px;width:50px;height:50px;" data-autocenter="2"></span>
  </div>
  <script type="text/javascript">jssor_1_slider_init();</script>
  <!-- #endregion Jssor Slider End -->


</div>
<div class="col-lg-4" style="padding:5.5em 0em 0em 5em;">
  <img src="images/favicon.png" height="50" width="50"alt="favicon"  style="float:left;padding-right:5px;">
  <p>Trip advicer travelling rating <br> <a href="#">based on 17 reviews</a></p>
  <br>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8465.072855223696!2d77.4809841132708!3d12.924844094604191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3edbb60f6e99%3A0xc8b9f9ddb2cdf38!2sHoysala+Circle+Bus+Stop!5e0!3m2!1sen!2sin!4v1479818176112" width="300" height="200" frameborder="0" style="border:0" allowfullscreen></iframe><br>
  <div class="panel panel-default" style="margin:0em 5em 3em 0em;">
    <div class="panel-body">
      <p><b>Points of Interest</b><br><a href="#">Outdoor Theatre - 1.4 km</a><br><a href="#">Sayyed Ghulam Qadri's Tomb - 14.2 km</a><br><a href="#" style="float:right;">View all on Map</a></p>
    </div>
  </div>
</div>
</div>
</div>
<div class="alert alert-dismissible alert-primary" style="padding:2em 4em 0em 4em;">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>60% <br>Booked</h4>
  <p><b>Rooms are selling out fast on our site</b><br>Prices might go up, so book now while rooms are still available.</p>
</div>
<div class="col-lg-12">
  <div class="c-rooms">
        <div class="p-table">
          <div class="p-table-grids">
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Room type</h6>
              </div>
              <div class="p-table-grid-info">
                <a href="#"><img src="images/p2.jpg" alt=""></a>
                <div class="room-basic-info">
                  <a href="#">Excellent infra structured house</a>
                  <h6>1 king bed or  2 single beds</h6>
                  <p>Good room and hotel management</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Options</h6>
              </div>
              <div class="rate-features">
                <ul>
                  <li>Quite comfortable</li>
                  <li>Dressing room</li>
                  <li>Dining room</li>
                  <li>Natural food making</li>
                  <li>Nice Furniture</li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Avg rate per night</h6>
              </div>
              <div class="avg-rate">
                <h5>Recommended for you</h5>
                <p>Price is now:</p>
                <span class="p-offer">Rs.1409</span>
                <span class="p-last-price">Rs.2300</span>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Book</h6>
              </div>
              <div class="book-button-column">
                <a href="payment.php">Book</a>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="p-table">
          <div class="p-table-grids">
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Room type</h6>
              </div>
              <div class="p-table-grid-info">
                <a href="#"><img src="images/p1.jpg" alt=""></a>
                <div class="room-basic-info">
                  <a href="#">Excellent infra structured house</a>
                  <h6>1 king bed or  2 single beds</h6>
                  <p>Good room and hotel management</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Options</h6>
              </div>
              <div class="rate-features">
                <ul>
                  <li>Quite comfortable</li>
                  <li>Dressing room</li>
                  <li>Dining room</li>
                  <li>Natural food making</li>
                  <li>Nice Furniture</li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Avg rate per night</h6>
              </div>
              <div class="avg-rate">
                <h5>Recommended for you</h5>
                <p>Price is now:</p>
                <span class="p-offer">Rs.1409</span>
                <span class="p-last-price">Rs.2300</span>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Book</h6>
              </div>
              <div class="book-button-column">
                <a href="payment.php">Book</a>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
        <div class="p-table">
          <div class="p-table-grids">
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Room type</h6>
              </div>
              <div class="p-table-grid-info">
                <a href="#"><img src="images/p2.jpg" alt=""></a>
                <div class="room-basic-info">
                  <a href="#">Excellent infra structured house</a>
                  <h6>1 king bed or  2 single beds</h6>
                  <p>Good room and hotel management</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Options</h6>
              </div>
              <div class="rate-features">
                <ul>
                  <li>Quite comfortable</li>
                  <li>Dressing room</li>
                  <li>Dining room</li>
                  <li>Natural food making</li>
                  <li>Nice Furniture</li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Avg rate per night</h6>
              </div>
              <div class="avg-rate">
                <h5>Recommended for you</h5>
                <p>Price is now:</p>
                <span class="p-offer">Rs.1409</span>
                <span class="p-last-price">Rs.2300</span>
              </div>
            </div>
            <div class="col-md-3 p-table-grid">
              <div class="p-table-grad-heading">
                <h6>Book</h6>
              </div>
              <div class="book-button-column">
                <a href="payment.php">Book</a>
              </div>
            </div>
            <div class="clearfix"> </div>
          </div>
        </div>
      </div>
</div>
<div class="col-lg-12" style="padding:0em 2em 0em 2em;">
  <div class="col-lg-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9249.026158017406!2d77.47898352242598!3d12.924651810300787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae3edbb60f6e99%3A0xc8b9f9ddb2cdf38!2sHoysala+Circle+Bus+Stop!5e0!3m2!1sen!2s!4v1479886002119" width="600" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  <div class="col-lg-6">
    <b>4.5-star luxury hotel near Vidhana Soudha</b><br>
    <b>Location</b><br><br>
    <p style="text-align:justify;">Situated in the business district, this luxury hotel is 0.4 mi (0.7 km) from Mallya Hospital and within 3 mi (5 km) of Vidhana Soudha and Tipu's Summer Palace. Bangalore Palace is 2.9 mi (4.6 km) away.</p><br>
    <b>Hotel Features</b><br>
    <p style="text-align:justify;">This hotel features 2 restaurants, an outdoor pool, and a nightclub. Free WiFi in public areas and free valet parking are also provided. Additionally, a 24-hour fitness center, a bar/lounge, and a coffee shop/café are onsite.</p><br>
    <b>Room Amenities</b><br>
    <p style="text-align:justify;">All 225 rooms feature thoughtful touches like bathrobes and slippers, plus free WiFi and LCD TVs with digital channels. Guests will also find 24-hour room service, DVD players, and minibars.</p><br>
  </div>
</div>
<div class="container">
  <div class="col-lg-3">
    <h1><b>Reviews</b></h1>
    TRAVELLING RATING<br><br>
        <p style="font-size:13px;float:left;margin:0em 1em 0em 0em">EXCELLENT</p>
          <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 50%"></div>
        </div><br>
        <p style="font-size:13px;float:left;margin:0em 1em 0em 0em">VERY GOOD</p>
          <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 20%"></div>
        </div><br>
        <p style="font-size:13px;float:left;margin:0em 2em 0em 0em">AVERAGE</p>
          <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 8%"></div>
        </div><br>
        <p style="font-size:13px;float:left;margin:0em 4em 0em 0em">POOR</p>
          <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 1%"></div>
        </div><br>
        <p style="font-size:13px;float:left;margin:0em 2em 0em 0em">TERRIBLE</p>
          <div class="progress">
          <div class="progress-bar progress-bar-success" style="width: 1%"></div>
          </div>
  </div>
  <div class="col-lg-9" style="background-color:white;padding:1em;;">
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span> <b>A great experience!</b><br>
    <p style="font-size:10px;">by Pavan B on Mon November 21 12:06:21 IST 2016</p>
    <p>If you're looking for a weekend stay and want to enjoy the luxuries, look no further. Excellent hospitality from Mr. Ron, Mr. Arun, the Restaurant Manager - Mr. Siddharth Tripathi and the Executive Chef - Mr. Rayomund Pardiwalla. Food was delicious as well.</p><br>
    <hr>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star-empty"></span> <b>Memorable Stay :)</b><br>
    <p style="font-size:10px;">by Pavan B on Mon November 21 12:06:21 IST 2016</p>
    <p>If you're looking for a weekend stay and want to enjoy the luxuries, look no further. Excellent hospitality from Mr. Ron, Mr. Arun, the Restaurant Manager - Mr. Siddharth Tripathi and the Executive Chef - Mr. Rayomund Pardiwalla. Food was delicious as well.</p><br>
    <hr>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star-empty"></span> <b>Good Pick in Banglore</b><br>
    <p style="font-size:10px;">by Pavan B on Mon November 21 12:06:21 IST 2016</p>
    <p>If you're looking for a weekend stay and want to enjoy the luxuries, look no further. Excellent hospitality from Mr. Ron, Mr. Arun, the Restaurant Manager - Mr. Siddharth Tripathi and the Executive Chef - Mr. Rayomund Pardiwalla. Food was delicious as well.</p><br>
    <hr>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star"></span>
    <span class="glyphicon glyphicon-star-empty"></span>
    <span class="glyphicon glyphicon-star-empty"></span> <b>Get new towels</b><br>
    <p style="font-size:10px;">by Pavan B on Mon November 21 12:06:21 IST 2016</p>
    <p>If you're looking for a weekend stay and want to enjoy the luxuries, look no further. Excellent hospitality from Mr. Ron, Mr. Arun, the Restaurant Manager - Mr. Siddharth Tripathi and the Executive Chef - Mr. Rayomund Pardiwalla. Food was delicious as well.</p><br>
    <hr>
  </div>
  <div class="col-lg-3"></div>
  <div class="col-lg-9" style="background-color: #ddd;">
    <p style="float:right;padding-top: 1em;margin: 1em;"><a href="review.php" style="border: 1px solid blue;text-decoration: none; padding:0.5em; border-radius: 5px;">WRITE YOUR OWN REVIEW</a></p>
  </div>
</div>


<?php include 'footer.php'; ?>