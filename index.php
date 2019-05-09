<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Home: Arpita Arts and Cooking</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="sketch.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Welcome to Arpita Arts and Cooking classes</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<!-- <ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul> -->
		<!-- 	<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
		     </form> -->
			<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in Rs.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>	
<section >
PreviousNext
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

<style type="text/css">
	.item img {
  width:100%
}
</style>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2FArts%20and%20Cooking.png?1555945962253" class="d-block w-100">
      <div class="carousel-caption">
         </div>
    </div>
    <div class="item">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2FArts%20and%20Cooking%20(3).png?1555661957438" class="d-block w-100">
      <div class="carousel-caption">
        </div>
    </div>
     <div class="item">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2FArts%20and%20Cooking%20(2).png?1555661808640" class="d-block w-100">
      <div class="carousel-caption">
      </div>
    </div>
 </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



</section>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
<!-- 		<div class="col-md-1"></div>
 -->				<div class="col-md-2 col-xs-12">
				<!-- <div id="get_category">
				</div> -->
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			<!-- 	<div id="get_brand">
				</div>
 -->				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Online Courses</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>

<section >

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

<style type="text/css">
	.carousel .testimonial {
	padding: 30px 0 10px;
}
.carousel .overview {	
	font-style: italic;
}
.carousel .item .img-box {
	width: 135px;
	height: 135px;
	margin: 0 auto;
	padding: 5px;
	border: 1px solid #ddd;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
</style>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" >
    <div class="item active">
    	<div class="img-box">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2Fgraphic-head-women-vector-20204927.jpg?1555945511946" class="d-block w-100">
  </div>
      <p class="testimonial">
              Nidhi has done our cosmetic and salad making workshop online. She is working mom and applying her knowledge for making healthy salads for her kids and family.
      </p>
      <p class="overview"><b>Nidhi</b>, Gujrat</p>
      <div class="carousel-caption">
         </div>
    </div>
    <div class="item">
    	<div class="img-box">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2Fgraphic-head-women-vector-20204927.jpg?1555945511946" class="d-block w-100">
  </div>
      <p class="testimonial">Divya has done our soap and chocolate making workshop online. She is college going students and earning with her part time work. She is happy with the support and experince from us.</p>
	  <p class="overview"><b>Divya</b>, Karnataka</p>
      <div class="carousel-caption">
        </div>
    </div>
     <div class="item">
     <div class="img-box">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2Fgraphic-head-women-vector-20204927.jpg?1555945511946" class="d-block w-100">
  </div>
      <p class="testimonial">
              Vipshita has done our online Hair care product making workshop, In this workshop she learned shampoo, conditioner hair serum, hair pack, hair care. She has interest to learn hair care product for her own & family use. But she didn’t found any workshop in her area. She connected to us by Facebook group, she has done this two workshop successfully. She is happy with our knowledge and way of teaching, notes.
      </p>
	  <p class="overview"><b>Vipshita</b>, Hyderabad</p>
      <div class="carousel-caption">
      </div>
    </div>
         <div class="item">
      <div class="img-box">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2Fgraphic-head-women-vector-20204927.jpg?1555945511946" class="d-block w-100">
  </div>
     <p class="testimonial">
              Namra has done our online herbal cosmetic and serum workshop. she is highly educated women, due to her daughter she is not able to doing job. She chooses work from home option. She already made lots of cosmetic related product, sell them, but she wants to learned some advance knowledge in details. she connected with us. She has done workshop successfully. she like our way of explanation after workshop also, she is happy from our after workshop query support, business guidance. Now she is not only selling the product but also provides consultation before giving product to customer. She got huge response for her product. She earns money from her hobby. She wants to learned more workshop from us now.
            </p>
		<p class="overview"><b>Namra</b>, Uttar Pradesh</p>
      <div class="carousel-caption">
      </div>
    </div>
         <div class="item">
    <div class="img-box">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2Fgraphic-head-women-vector-20204927.jpg?1555945511946" class="d-block w-100">
  </div>
     <p class="testimonial">
              Kalyani has done our basic chocolate workshop online, she didn’t get time to come
physically to attend workshop. She chooses to select online learning. Now she takes
chocolate order from home. she is happy to learn online.
            </p>
		<p class="overview"><b>Kalyani</b>, Pune</p>
      <div class="carousel-caption">
      </div>
    </div>
         <div class="item">
    <div class="img-box">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2Fgraphic-head-women-vector-20204927.jpg?1555945511946" class="d-block w-100">
  </div>
     <p class="testimonial">
              Shobhana has done our online soap making workshop. now she wants to do our perfume, shampoo, cosmetic combo workshop. shobhana has done workshop for per personal use. She connected to us by Facebook page, she has done this two workshop successfully. She is happy with our knowledge and way of teaching, notes and support.
            </p>
	<p class="overview"><b>Shobhana</b>, Kolkata</p>
      <div class="carousel-caption">
      </div>
    </div>
     <div class="item">
     <div class="img-box">
      <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2Fgraphic-head-women-vector-20204927.jpg?1555945511946" class="d-block w-100">
  </div>	
  <p class="testimonial">
	Shruti has done our basic chocolate workshop online, she is working girl, she didn’t get time
	to come physically to attend workshop. She chooses to select online learning. Now she takes
	corporate chocolate order from home. She is happy to learn online.
            </p>
		<p class="overview"><b>Shruti</b>, Pune</p>
      <div class="carousel-caption">
      </div>
    </div>
 </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>
<div class="col-md-1"></div>
	<div class="container-fluid">
		<div class="row">
  				<h1>About The Coach</h1>
			</div>
  <div class="card" style="width: 18rem;">
  <img src="https://cdn.glitch.com/71e6e663-a6b0-4641-aca8-21a592374319%2FWhatsApp%20Image%202019-04-22%20at%206.40.14%20PM.jpeg?1555942038217" style="  height: 250px; width: 250px;" class="card-img-top">
  <div class="card-body">
    <h3 class="card-title">Arpita</h3>
    <p class="card-text">A girl with Experience in Arts and Cooking. She is willing to share her Knowledge with world and make a difference.</p>
    <hr size="15">
  </div>
</div>
		</div>
	</div>
				<div class="panel-footer">&copy; 2019 <br> All Rights Reserved | <br> Arpita Arts and Cooking Classes, Pune</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
