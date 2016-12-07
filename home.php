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
<div class="clearfix"></div>
    <div class="container" id="padd36">
                <h2 class="page-heading">
                    Welcome to Procession
                </h2><br>
            <div class="col-md-4">
                <div class="panel panel-default slideInLeft animated">
                    <div class="panel-heading">
                        <h4>Flights</h4>
                    </div>
                    <div class="panel-body" id="justify1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default slideInUp animated">
                    <div class="panel-heading">
                        <h4>Hotel</h4>
                    </div>
                    <div class="panel-body" id="justify1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default slideInRight animated">
                    <div class="panel-heading">
                        <h4>Holiday Activity</h4>
                    </div>
                    <div class="panel-body" id="justify1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                    </div>
                </div>
            </div>
        <div class="row bounce animated">
            <div class="col-md-12">
                <h2 class="page-header">Our Places</h2>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="product.php" target="_blank"><img class="img-responsive" src="images/website3.jpg" alt=""></a>
                    <div class="caption">
                        <h3><a href="product.php" target="_blank">World Shopping market</a><br>
                            <small>Food market tour</small>
                        </h3>
                        <p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="product.php" target="_blank"><img class="img-responsive" src="images/website4.jpg" alt=""></a>
                    <div class="caption">
                        <h3><a href="product.php" target="_blank">River Location</a><br>
                            <small>Barcelona</small>
                        </h3>
                        <p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="product.php" target="_blank"><img class="img-responsive" src="images/website5.jpg" alt=""></a>
                    <div class="caption">
                        <h3><a href="product.php" target="_blank">Traditional dances</a><br>
                            <small>Chinloung water park</small>
                        </h3>
                        <p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="product.php" target="_blank"><img class="img-responsive" src="images/website6.jpg" alt=""></a>
                    <div class="caption">
                        <h3><a href="product.php" target="_blank">Luxury</a><br>
                            <small>Musium tour</small>
                        </h3>
                        <p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="product.php" target="_blank"><img class="img-responsive" src="images/website7.jpg" alt=""></a>
                    <div class="caption">
                        <h3><a href="product.php" target="_blank">Natural Resources</a><br>
                            <small>Visitor center</small>
                        </h3>
                        <p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <a href="product.php" target="_blank"><img class="img-responsive" src="images/website8.jpg" alt=""></a>
                    <div class="caption">
                        <h3><a href="product.php" target="_blank">Famous Statues</a><br>
                            <small>Brazil</small>
                        </h3>
                        <p id="justify1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="padding007">
            <div class="col-md-12">
                <h2 class="page-header">Modern processions in present era</h2>
            </div>
            <div class="col-md-6  rotateInUpLeft animated">
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
            <div class="col-md-6 rotateInUpRight animated">
                <img class="img-responsive" src="images/website6.jpg" alt="">
            </div>
        </div>
      <hr>
    
    </div>
  </div>


<?php include 'footer.php'; ?>