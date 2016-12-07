<?php include 'header.php'; ?>

    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/banner1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Travel for fun</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slider2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Nature is the best friend for you</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/slider3.png');"></div>
                <div class="carousel-caption">
                    <h2>Activities for joy</h2>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <div class="container zoomIn animated" id="top1">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab" id="opac"><b>Flights</b></a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" id="opac"><b>Hotels</b></a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" id="opac"><b>Holidays Activity</b></a></li>
  </ul>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
      <div class="col-md-12 media1" id="padd3434">
        <input type="radio" name="name"><b id="backon">One way</b>
        <input type="radio" name="name"><b id="backon">Round trip</b>
      </div>
      <div class="jumbo" id="padding2">
        <div class="panel panel-default" style="background-color: rgba(0,0,0,0.7);border:2px solid black;padding: 1em 0em 1em 0em;">
            <div class="panel-body">
              <form class="navbar-form navbar-left" role="search" id="search">
                <div class="form-group align">
                  <input type="text" class="form-control" placeholder="Select Origin">
                  <input type="text" class="form-control" placeholder="Select Destination">
                  <input type="text" class="form-control" placeholder="From Location">
                  <input type="text" class="form-control" placeholder="From date" id="datepicker">
                  <input type="text" class="form-control" placeholder="To Date" id="datepicker1">
                  <a href="inside.php" id="button1">SUBMIT</a>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <div class="col-md-12 media1" id="padd3434">
        <input type="radio" name="name"><b id="backon">Hotels</b>
        <input type="radio" name="name"><b id="backon">One day use <span class="glyphicon glyphicon-info-sign"></span></b>
      </div>
      <div class="jumbo" id="padding2">
        <div class="panel panel-default" style="background-color: rgba(0,0,0,0.7);border:2px solid black;padding: 1em 0em 1em 0em;">
            <div class="panel-body">
              <form class="navbar-form navbar-left" role="search" id="search">
                <div class="form-group align">
                  <input type="text" class="form-control" placeholder="Select Origin">
                  <input type="text" class="form-control" placeholder="Select Destination">
                  <input type="text" class="form-control" placeholder="From Location">
                  <input type="text" class="form-control" placeholder="From date" id="datepicker">
                  <input type="text" class="form-control" placeholder="To Date" id="datepicker1">
                  <a href="inside-hotel.php" id="button1">SUBMIT</a>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
      <div class="col-md-12 media1" id="padd3434">
        
      </div>
      <div class="jumbo" id="padding2">
        <div class="panel panel-default" style="background-color: rgba(0,0,0,0.7);border:2px solid black;padding: 1em 0em 1em 0em;">
            <div class="panel-body">
              <form class="navbar-form navbar-left" role="search" id="search">
                <div class="form-group align">
                  <input type="text" class="form-control" placeholder="Leaving from">
                  <input type="text" class="form-control" placeholder="Going to">
                  <input type="text" class="form-control" placeholder="From Location">
                  <input type="text" class="form-control" placeholder="From date" id="datepicker">
                  <input type="text" class="form-control" placeholder="To Date" id="datepicker1">
                  <a href="holiday-activity.php" id="button1">SUBMIT</a>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container" id="padd36">
    <div class="row ">
         <h1>Popular inernational flights</h1>
        <div class="col-lg-4">
            <a href="inside.php"><img src="images/flight1.jpg" class="box1" id="pad1"></a>
            <div id="having">
                <a href="inside.php"><h4>Flat 20% offer on Fortune Hotels</h4></a>
                <a href="inside.php"><p>valid till December 7, 2016</p></a>
            </div>
        </div>
                <div class="col-lg-4">
            <a href="inside.php"><img src="images/flight2.jpg" class="box1" id="pad1"></a>
            <div id="having">
                <a href="inside.php"><h4>Flat 20% offer on Fortune Hotels</h4></a>
                <a href="inside.php"><p>valid till December 7, 2016</p></a>
            </div>
        </div>
                <div class="col-lg-4">
            <a href="inside.php"><img src="images/flight3.jpg" class="box1" id="pad1"></a>
            <div id="having">
                <a href="inside.php"><h4>Flat 20% offer on Fortune Hotels</h4></a>
                <a href="inside.php"><p>valid till December 7, 2016</p></a>
            </div>
        </div>
    </div>
    <div class="row" id="top6">
                <h1>Popular Domestic Flights</h1>
                  <div class="col-lg-4">
            <a href="inside.php"><img src="images/flight4.jpg" class="box1" id="pad1"></a>
            <div id="having">
                <a href="inside.php"><h4>Flat 20% offer on Fortune Hotels</h4></a>
                <a href="inside.php"><p>valid till December 7, 2016</p></a>
            </div>
        </div>
                <div class="col-lg-4">
            <a href="inside.php"><img src="images/flight5.jpg" class="box1" id="pad1"></a>
            <div id="having">
                <a href="inside.php"><h4>Flat 20% offer on Fortune Hotels</h4></a>
                <a href="inside.php"><p>valid till December 7, 2016</p></a>
            </div>
        </div>
            <div class="col-lg-4">
            <a href="inside.php"><img src="images/flight6.jpg" class="box1" id="pad1"></a>
            <div id="having">
                <a href="inside.php"><h4>Flat 20% offer on Fortune Hotels</h4></a>
                <a href="inside.php"><p>valid till December 7, 2016</p></a>
            </div>
            </div>
    </div>
</div>
<div class="col-lg-12" id="pad23">
     <div class="col-lg-6">
         <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: http://www.jssor.com -->
    <!-- This code works with jquery library. -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: true,
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 3,
                $Align: 200
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <style>
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('images/b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        /* jssor slider thumbnail navigator skin 16 css *//*.jssort16 .p            (normal).jssort16 .p:hover      (normal mouseover).jssort16 .pav          (active).jssort16 .pav:hover    (active mouseover).jssort16 .pdn          (mousedown)*/.jssort16 .p {    position: absolute;    top: 0;    left: 0;    width: 200px;    height: 100px;}.jssort16 .t {    position: absolute;    top: 0;    left: 0;    width: 200px;    height: 100px;    border: none;}.jssort16 .p img {    position: absolute;    top: 0;    left: 0;    width: 200px;    height: 100px;    filter: alpha(opacity=55);    opacity: .55;    transition: opacity .6s;    -moz-transition: opacity .6s;    -webkit-transition: opacity .6s;    -o-transition: opacity .6s;}.jssort16 .pav img, .jssort16 .pav:hover img, .jssort16 .p:hover img {    filter: alpha(opacity=100);    opacity: 1;    transition: none;    -moz-transition: none;    -webkit-transition: none;    -o-transition: none;}.jssort16 .pav:hover img, .jssort16 .p:hover img {    filter: alpha(opacity=70);    opacity: .7;}.jssort16 .title, .jssort16 .title_back {    position: absolute;    bottom: 0px;    left: 0px;    width: 200px;    height: 30px;    line-height: 30px;    text-align: center;    color: #000;    font-size: 20px;}.jssort16 .title_back {    background-color: #fff;    filter: alpha(opacity=50);    opacity: .5;}.jssort16 .pav .title_back {    background-color: #000;    filter: alpha(opacity=50);    opacity: .5;}.jssort16 .pav .title {    color: #fff;}.jssort16 .p.pav:hover .title_back, .jssort16 .p:hover .title_back {    filter: alpha(opacity=40);    opacity: .4;}.jssort16 .p.pdn img {    filter: alpha(opacity=100);    opacity: 1;}
    </style>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 600px; height: 400px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('images/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 600px; height: 300px; overflow: hidden;">
            <div data-p="112.50">
                <img data-u="image" src="images/001.jpg" />
                <div data-u="thumb">
                    <img src="images/landscape.jpg" />
                    <div class="title_back"></div>
                    <div class="title">
                        Flight 1
                    </div>
                </div>
            </div>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/004.jpg" />
                <div data-u="thumb">
                    <img src="images/motor.jpg" />
                    <div class="title_back"></div>
                    <div class="title">
                        Flight 2   
                    </div>
                </div>
            </div>
            <a data-u="any" href="http://www.jssor.com" style="display:none">Table Slider</a>
            <div data-p="112.50" style="display: none;">
                <img data-u="image" src="images/05.jpg" />
                <div data-u="thumb">
                    <img src="images/photography.jpg" />
                    <div class="title_back"></div>
                    <div class="title">
                        Flight 3
                    </div>
                </div>
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort16" style="position:absolute;left:0px;bottom:0px;width:600px;height:100px;" data-autocenter="1">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="t"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb03" style="bottom:116px;right:16px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px;">
                <div data-u="numbertemplate"></div>
            </div>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
     </div>
     <div class="col-lg-6">
                <h4><b>Presently procession includes:</b></h4><br>
                <ul id="paddleft">
                    <li>Booking hotels</li>
                    <li>Holidays activites</li>
                    <li>On perfect travelling</li>
                    <li>Crazy feets</li>
                    <li>Excursions and fun</li>
                    <li>Event Organisations in hotels parks and all</li>
                
                <li><p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. <a href="#">Click here to know more</a></</p></li>
                <li><p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. <a href="#">Click here to know more</a></</p></li>
                <li><p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. <a href="#">Click here to know more</a></</p></li>
                </ul>
     </div>
</div>


<?php include 'footer.php'; ?>