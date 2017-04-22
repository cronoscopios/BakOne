<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<?php include 'inc/head_common.php';?>
	<title>Bak-One</title>	
</head>
<body>
	<?php include 'inc/header.php';?>
	
	<div id="content-list">
		<article id="home" class="content content-home">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 main-info">
						<h1>We Build <span>Brand</span></h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>Maecenas mauris magna, fermentum vel laoreet eget, porta in massa.</p>
					</div>
				</div>
				<div>
					<button id="button" type="button" class="btn btn-default">
      					<span>LEARN MORE</span>
    				</button>
				</div>
				<div>
					<button id="arrow-down" type="button" class="btn btn-default">
						<a href="#portfolio"><span class="glyphicon glyphicon-chevron-down"></span></a>
    				</button>
				</div>
			</div>
			
		</article>
		<article id="portfolio" class="content content-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 portfolio-info">
						<h2>Portfolio</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
					<div class="col-xs-12 container">
						<a id="btn-all" href="#" class="btn btn-custom">ALL</a>
						<a id="btn-web" href="#" class="btn btn-custom">WEB DESIGN</a>
						<a id="btn-graphic" href="#" class="btn btn-custom">GRAPHIC DESIGN</a>
						<a id="btn-flat" href="#" class="btn btn-custom">FLAT DESIGN</a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div>
					<div id="gallery" class="col-xs-12 row container">
						<a href="#"><img src="img/img_1.png" alt=""></a>
						<a href="#"><img src="img/img_2.png" alt=""></a>
						<a href="#"><img src="img/img_3.png" alt=""></a>
						<a href="#"><img src="img/img_4.png" alt=""></a>
					</div>
				</div>
				
				<div>
					<div id="gallery" class="col-xs-12 row container">
						<a href="#"><img src="img/img_5.png" alt=""></a>
						<a href="#"><img src="img/img_6.png" alt=""></a>
						<a href="#"><img src="img/img_7.png" alt=""></a>
						<a href="#"><img src="img/img_8.png" alt=""></a>
					</div>
				</div>
			</div>
		</article>
		<article id="about" class="content content-about">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 portfolio-info">
						<h2>About Us</h2>
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
					</div>
					<div class="trainer-list">
						<div class="col-xs-3 trainer-1">
							<img src="img/ava-1.png" alt="">
							<h3>Melannie Doe</h3>
							<h5>Project Manager</h5>
							<p>Maecenas sed nisl mattis, mollis nisi id, commodo massa. Quisque vitae mauris lectus. Cras eget facilisis urna.</p>

						</div>
						<div class="col-xs-3 trainer-2">
							<img src="img/ava-2.png" alt="">
							<h3>Jhonnie Doe</h3>
							<h5>Graphic Designer</h5>
							<p>Maecenas sed nisl mattis, mollis nisi id, commodo massa. Quisque vitae mauris lectus. Cras eget facilisis urna.</p>
						</div>
						<div class="col-xs-3 trainer-3">
							<img src="img/ava-3.png" alt="">
							<h3>Daniel Doe</h3>
							<h5>Web Designer</h5>
							<p>Maecenas sed nisl mattis, mollis nisi id, commodo massa. Quisque vitae mauris lectus. Cras eget facilisis urna.</p>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article id="contact" class="content content-contact">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 contact-info">
						<h2>Contact</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</div>
				<div class="col-xs-6">
					<form class="form-inline" role="form">
						<div class="form-group">
						    <label class="sr-only" for="email">Your email</label>
						    <input id="email" type="email" class="form-control input-lg" placeholder="Your email">
						</div>
						<div class="form-group">
						    <div>
						    	<input id="name" type="text" class="form-control input-lg" type="name" placeholder="Your name">
						    </div>
						</div>
						<div class="clearfix"></div>
						<div class="form-group">
						  	<div>
						  		<textarea id="message" class="form-control input-lg" ows="5" ols="42">Your message</textarea>
						  	</div>
						</div>
						<div class="clearfix"></div>
						<div class="form-group">
							<button class="btn btn-custom">SUBMIT</button>
						</div>
					</form>
						<div class="container">
							<div class="row">
								<div id="info" class="col-xs-3 pull-right">
									<h2>INFORMATION</h2>
									<p>Bak-one Company <br> 
										12345 Hollywood Bvld Street <br> 
										Los Angeles, California</p> <br> 
									<p>+ 444 (Phone) 123456 </p> <br> 
									<p>+ 123 (FAX) 0011223 <br> </p>
									<p><a href="#">info@bak-onecompany.com</a></p>
								</div>
							</div>
						</div>
					</div>						
				</div>
			</div>
		</article>
	</div> 
	<?php include 'inc/footer.php';?>
	<?php include 'inc/footer_common.php';?>
</body>
</html>