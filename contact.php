<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Club an Ecommerce Online Shopping Category  Flat Bootstrap responsive Website Template | Contact :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<?php
	session_start();
	if(isset($_SESSION['userfname']))
	{
?>
			
	<div class="account">
		<button onclick=my_account()>My Account</button>
	</div>
			
	<div class="logout">
		<button onclick=handle_logout()>LogOut</button>		
	</div>

<?php
	}
?>
<style>
	.logout {
		margin:20px;
		margin-left:1203px;
		margin-top:-44px;
	}

	.account {
		margin:20px;
	}
</style>
<!-- Log Out Script -->
<script>
	function handle_logout() {
		window.location.href = 'logout.php';
	}

	function my_account() {
		window.location.href = 'account.php';
	}
</script>

<div class="header-top-w3layouts">
	<div class="container">
		<div class="col-md-6 logo-w3">
			<a href="index.php"><img src="images/logo2.png" alt=" " /><h1>FASHION<span>CLUB</span></h1></a>
		</div>
		<div class="col-md-6 phone-w3l">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
				<li>+18045403380</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="header-bottom-w3ls">
	<div class="container">
		<div class="col-md-7 navigation-agileits">
			<nav class="navbar navbar-default">
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav ">
						<li><a href="index.php" class="hyper "><span>Home</span></a></li>	
						<li class="dropdown ">
							<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Clothing<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
			
												<li><a href="women.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Women's Clothing</a></li>
												<li><a href="men.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's Clothing</a></li>
												<li><a href="kids.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Kid's Wear</a></li>
												<li><a href="party.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Party Wear</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="casuals.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Casuals</a></li>
												<li><a href="night.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Night Wear</a></li>
												<li><a href="formals.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Formals</a></li>
												<li><a href="inner.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Inner Wear</a></li>
										
											</ul>						
										</div>
										<div class="col-sm-4 w3l">
											<a href="women.php"><img src="images/menu1.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="jewellery.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Jewellery </a></li>
												<li><a href="watches.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Watches</a></li>
												<li><a href="cosmetics.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>
												<li><a href="deos.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Perfumes</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4">
											
											<ul class="multi-column-dropdown">
												<li><a href="haircare.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Hair Care </a></li>
												<li><a href="shoes.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Shoes</a></li>
												<li><a href="handbags.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Handbags</a></li>
												<li><a href="skincare.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Skin care</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-4 w3l">
											<a href="jewellery.php"><img src="images/menu2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
						</li>
						<li><a href="about.php" class="hyper"><span>About</span></a></li>
						<li class=" active"><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-4 search-agileinfo">
			<form action="search.php" method="get">
				<input type="search" name="Search" id="search" placeholder="Search for a Product..." required="">
				<div id="productlist"></div>
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>

		<!-- AutoComplete Search CSS Code -->
		<style>
        ul {
            background-color: #eee;
            cursor: pointer;
        }

        li {
            padding: 12px;
        }
    	</style>

		<!-- AutoComplete Search Ajax Code -->
		<script>
    $(document).ready(function()
    {
        $('#search').keyup(function()
        {
            var query = $(this).val();

            if(query != '')
            {
                $.ajax({
                        url:"auto_search.php",
                        method:"POST",
                        data:{query:query},
                        success:function(data)
                        {
                            $('#productlist').fadeIn();
                            $('#productlist').html(data);
                        }
                });
            }
            else{
                $('#productlist').fadeOut();
                $('#productlist').html("");
            }
        });

        $(document).on('click','li',function(){
            $('#search').val($(this).text());
            $('#productlist').fadeOut();
        })
    });
</script>

		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="sub-banner">
</div>
<div class="contact">
	<div class="container">
		<h3>Contact Us</h3>
		<div class="col-md-3 col-sm-3 contact-left">
			<div class="address">
				<h4>ADDRESS</h4>
				<h5>345 Setwant natrer,</h5>
				<h5>Washington. United States.</h5>
			</div>
			<div class="phone">
				<h4>PHONE</h4>
				<h5>+1(401) 1234 567.</h5>
				<h5>+1(804) 4261 150.</h5>
			</div>
			<div class="email">
				<h4>EMAIL</h4>
				<h5><a href="mailto:info@example.com">example@gmail.com</a></h5>
				<h5><a href="mailto:info@example.com">example2@yahoo.com</a></h5>
			</div>
		</div>
		<div class="col-md-9 col-sm-9 contact-right">
			<form action="#" method="post">
				<input type="text" name="your name" placeholder="Your name" required=" ">
				<input type="text" name="your email" placeholder="Your email" required=" ">
				<input type="text" name="your subject" placeholder="Your subject" required=" ">
				<input type="text" name="your phone number" placeholder="Phone number" required=" ">
				<textarea  name="your message" placeholder="Your message" required=" "></textarea>
				<input type="submit" value="Send message">
			</form>
		</div>
	</div>
</div>
<div class="map-w3ls">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22702.22744502486!2d11.113366067229226!3d44.662878362361056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477fc3eca9065c15%3A0x12ec8a03aadae866!2s40019+Sant&#39;Agata+Bolognese+BO%2C+Italy!5e0!3m2!1sen!2sin!4v1451281303075" allowfullscreen></iframe>
</div>
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h2>Newsletter</h2>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="subscribe_email.php" method="post">
					<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.php"><img src="images/logo2.png" alt=" " /><h3>FASHION<span>CLUB</span></h3></a>
		<ul>
			<li>1234k Avenue, 4th block,</li>
			<li>New York City.</li>
			<li><a href="mailto:info@example.com">info@example.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="icons.php">Web Icons</a></li>
				<li><a href="typography.php">Typography</a></li>
				<li><a href="faq.php">FAQ's</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
				<li><a href="jewellery.php">Jewellery</a></li>
				<li><a href="cosmetics.php">Cosmetics</a></li>
				<li><a href="shoes.php">Shoes</a></li>
				<li><a href="deos.php">Deos</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
				
				<li><a href="login.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
				<li><a href="recommended.php">Recommended </a></li>
				<li><a href="payment.php">Payments</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2016 Fashion Club . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
	</div>
</div>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>
