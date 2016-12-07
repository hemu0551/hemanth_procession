<?php include 'header.php'; ?>

  <div style="height:2em;">

    </div>
				<div class="container">
          <div class="col-lg-12">
            <div class="col-lg-6">
              <div class="col-lg-9">
              <div class="panel-heading">
      	               <div class="panel-title text-left">
      	               		<h1 class="title">Login</h1>
      	               	</div>
      	            </div>
      				<div class="main-login main-center">
      					<form class="form-horizontal" method="post" action="#">
      						<div class="form-group">
      							<div class="col-lg-12">
      								<div class="input-group">
      									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
      									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
      								</div>
      							</div>
      						</div>
      						<div class="form-group">
      							<div class="col-lg-12">
      								<div class="input-group">
      									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
      									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
      								</div>
      							</div>
      						</div>
      						<div class="form-group ">
      							<div class="col-lg-12">
                      <a href="redirect5.php"><button type="button" class="btn btn-primary">Login</button></a>
      							  <a href="redirect5.php"><button type="button" class="btn btn-primary">Login with Facebook</button></a>
      							</div>
      						</div>
      					</form>
      				</div>
    				</div>
            </div>
            <div class="col-lg-6">
              <div class="col-lg-9">
                <div class="panel-heading">
        	               <div class="panel-title text-left">
        	               		<h1 class="title">Create Account</h1>
        	               	</div>
        	            </div>
        				<div class="main-login main-center">
        					<form class="form-horizontal" method="post" action="#">

        						<div class="form-group">
        							<div class="col-lg-12">
        								<div class="input-group">
        									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
        									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
        								</div>
        							</div>
        						</div>

        						<div class="form-group">
        							<div class="col-lg-12">
        								<div class="input-group">
        									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
        									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
        								</div>
        							</div>
        						</div>

        						<div class="form-group">
        							<div class="col-lg-12">
        								<div class="input-group">
        									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
        									<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
        								</div>
        							</div>
        						</div>

        						<div class="form-group">
        							<div class="col-lg-12">
        								<div class="input-group">
        									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
        									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
        								</div>
        							</div>
        						</div>

        						

        						<div class="form-group ">
        							<div class="col-lg-12">
                        <a href="redirect4.php"><button type="button" class="btn btn-primary">Register</button></a>
        							  <a href="redirect4.php"><button type="button" class="btn btn-primary">Signup with facebook</button></a>
        							</div>
        						</div>
        					</form>
        				</div>
              </div>
            </div>
          </div>
		</div>
</div>


<?php include 'footer.php'; ?>