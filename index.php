<!DOCTYPE HTML>
<html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:svg="http://www.w3.org/2000/svg">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
	<title>Delicious - Restaurant website</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" id="camera-css"  href="css/flexslider.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
	
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/slider/jquery.flexslider-min.js"></script>
	<script src="js/slider/functions.js" type="text/javascript"></script>
	<script src="js/slider/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.src.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#ajax-contact-form").submit(function() {
				var str = $(this).serialize();		
				$.ajax({
					type: "POST",
					url: "contact_form/contact_process.php",
					data: str,
					success: function(msg) {
						// Message Sent - Show the 'Thank You' message and hide the form
						if(msg == 'OK') {
							result = '<div class="notification_ok">Your message has been sent. Thank you!</div>';
							$("#fields").hide();
						} else {
							result = msg;
						}
						$('#note').html(result);
					}
				});
				return false;
			});															
		});		
	</script>
	
</head>

<body>

<div class="menu">	
	<div class="container clearfix">

		<div id="logo" class="fleft">
			<a href="javascript:void(0);"><img class="logo_big" src="images/logo.png"><img class="logo_small" src="images/logo_small.png"></a>
		</div>
		
		<div id="nav" class="fright">
			<ul class="navigation">
				<li data-slide="1">Home</li>
				<li data-slide="2">About</li>
				<li data-slide="4">Menu</li>
				<li data-slide="5">Gallery</li>
				<li data-slide="6">Events</li>
				<li data-slide="10">Contact</li>
			</ul>
		</div>
	
	</div>
</div>


<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
	<div class="effect_2 padding_slide1">
		<div class="container clearfix">
			<div id="content" class="grid_12">
				<div class="filtr_bg">
					<h1>What makes our restaurant special?</h1>
					<h2>- Our Delicious Food and Your Inspiration</h2>
					<div class="bord_in_red"></div>
					<p>Fusce faucibus egestas condimentum. Suspendisse ac nibh ullamcorper quam iaculis pretium eu eu turpis.</p>
				</div>
				<a class="button" title="" data-slide="2">Read More</a>
			</div>
		</div>
	</div>
</div>



<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		
		<div id="content" class="grid_12">
			<h1>About</h1>
			<h2>Cras urna leo, fringilla nec aliquam ac, varius in enim. Maecenas non felis augue, quis sagittis justo. Donec gravida, arcu in aliquet convallis, purus lectus euismod nulla, in porttitor lorem ligula nec metus. Curabitur sit amet metus quis arcu pharetra hendrerit. Nulla at tempus ligula.</h2>
			<img class="icon_img" src="images/icon10.png" />
		</div>
		<div id="content" class="grid_12">
			<h4>Who We Are?</h4>
			<img class="about_img" src="images/about_img1.jpg" alt="" />
			<p>Integer libero felis, sagittis et ornare non, malesuada vitae turpis. Suspendisse potenti. Quisque nec lorem quis nisi consectetur fermentum. Fusce blandit mollis justo, a consequat est dignissim a. Quisque fringilla quam sed metus viverra id venenatis magna congue. Curabitur nulla ante, condimentum et tincidunt volutpat, vestibulum ut ipsum. Nullam sit amet nisi orci. Sed eu felis nec dolor dapibus viverra. In et massa odio. Mauris porttitor auctor blandit.</p>
			<p>Nunc venenatis lorem et mi elementum laoreet. Integer mollis erat lacus. Mauris eu eros vitae lacus tristique luctus. Vivamus diam augue, tempus non vestibulum ac, vulputate eu odio. In lorem libero, rutrum vel adipiscing at, tempus eget mi. Duis adipiscing placerat laoreet. Morbi non lorem sit amet erat pretium faucibus. Praesent vitae odio eu ligula ultricies mattis vel mollis sapien. Pellentesque sollicitudin justo quis urna auctor iaculis. Phasellus nec neque libero, vel aliquam enim. Mauris faucibus tincidunt augue, et pretium urna molestie non. Sed lacinia cursus mi, non adipiscing</p>
		</div>
	</div>
</div>



<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
	<div class="effect_2 padding_slide3">
		<div class="container clearfix">
		
			<div id="content" class="grid_12">
				<p>Integer ut lacus nec mauris dictum</p>
			</div>
		
		</div>
	</div>
</div>



<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		
		<div id="content" class="grid_12">
			<h1><span>Menu</span></h1>
			<h2>Cras urna leo, fringilla nec aliquam ac, varius in enim. Maecenas non felis augue, quis sagittis justo. Donec gravida, arcu in aliquet convallis, purus lectus euismod nulla, in porttitor lorem ligula nec metus. Curabitur sit amet metus quis arcu pharetra hendrerit. Nulla at tempus ligula.</h2>
			<img class="icon_img" src="images/icon11.png" />
			<div class="overflow_hidden">
				<!-- portfolio_block -->
				<ul class="item gallery-list">                                  
					<li class="grid_3">
						<a href="javascript:void(0);" class="hover_img">
							<span class="img_bord"><img src="images/img_bord.png" /></span>
							<img src="images/portfolio/1.jpg" alt="" />
							<span class="portfolio_descr">
								<p>Aliquam posuere</p>
								<span>Nullam luctus lacus in massa feugiat venenatis.</span>
								<span class="more_link" >More</span>
							</span>
						</a>
					</li>
					<li class="grid_3">
						<a href="javascript:void(0);" class="hover_img">
							<span class="img_bord"><img src="images/img_bord.png" /></span>
							<img src="images/portfolio/2.jpg" alt="" />
							<span class="portfolio_descr">
								<p>Aliquam posuere</p>
								<span>Nullam luctus lacus in massa feugiat venenatis.</span>
								<span class="more_link" >More</span>
							</span>
						</a>
					</li>
					<li class="grid_3">
						<a href="javascript:void(0);" class="hover_img">
							<span class="img_bord"><img src="images/img_bord.png" /></span>
							<img src="images/portfolio/3.jpg" alt="" />
							<span class="portfolio_descr">
								<p>Aliquam posuere</p>
								<span>Nullam luctus lacus in massa feugiat venenatis.</span>
								<span class="more_link" >More</span>
							</span>
						</a>
					</li>
					<li class="grid_3">
						<a href="javascript:void(0);" class="hover_img">
							<span class="img_bord"><img src="images/img_bord.png" /></span>
							<img src="images/portfolio/4.jpg" alt="" />
							<span class="portfolio_descr">
								<p>Aliquam posuere</p>
								<span>Nullam luctus lacus in massa feugiat venenatis.</span>
								<span class="more_link" >More</span>
							</span>
						</a>
					</li>
					<li class="grid_3">
						<a href="javascript:void(0);" class="hover_img">
							<span class="img_bord"><img src="images/img_bord.png" /></span>
							<img src="images/portfolio/5.jpg" alt="" />
							<span class="portfolio_descr">
								<p>Aliquam posuere</p>
								<span>Nullam luctus lacus in massa feugiat venenatis.</span>
								<span class="more_link" >More</span>
							</span>
						</a>
					</li>
					<li class="grid_3">
						<a href="javascript:void(0);" class="hover_img">
							<span class="img_bord"><img src="images/img_bord.png" /></span>
							<img src="images/portfolio/6.jpg" alt="" />
							<span class="portfolio_descr">
								<p>Aliquam posuere</p>
								<span>Nullam luctus lacus in massa feugiat venenatis.</span>
								<span class="more_link" >More</span>
							</span>
						</a>
					</li>
					<li class="grid_3">
						<a href="javascript:void(0);" class="hover_img">
							<span class="img_bord"><img src="images/img_bord.png" /></span>
							<img src="images/portfolio/7.jpg" alt="" />
							<span class="portfolio_descr">
								<p>Aliquam posuere</p>
								<span>Nullam luctus lacus in massa feugiat venenatis.</span>
								<span class="more_link" >More</span>
							</span>
						</a>
					</li>
					<li class="grid_3">
						<a href="javascript:void(0);" class="hover_img">
							<span class="img_bord"><img src="images/img_bord.png" /></span>
							<img src="images/portfolio/8.jpg" alt="" />
							<span class="portfolio_descr">
								<p>Aliquam posuere</p>
								<span>Nullam luctus lacus in massa feugiat venenatis.</span>
								<span class="more_link" >More</span>
							</span>
						</a>
					</li>
					<div class="clear"></div>
				</ul>   
				<!-- //portfolio_block -->   
			</div>
			
		</div>
	
	</div>
</div>


<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
	<div class="padding_slide5">
		<div class="bord_top"></div>
		<div class="effect_2"></div>
		<div class="container clearfix">
		
			<div id="content" class="grid_12">
				
			</div>
			
		</div>
		
		<div class="flexslider">
			<ul class="slides">
				<li><img src="images/slider/1.jpg" alt=""/></li>
				<li><img src="images/slider/2.jpg"  alt=""/></li>
				<li><img src="images/slider/3.jpg" alt=""/></li>
				<li><img src="images/slider/4.jpg" alt=""/></li>
				<li><img src="images/slider/5.jpg"  alt=""/></li>
				<li><img src="images/slider/6.jpg" alt=""/></li>
				<li><img src="images/slider/7.jpg" alt=""/></li>
				<li><img src="images/slider/8.jpg"  alt=""/></li>
				<li><img src="images/slider/9.jpg" alt=""/></li>
			</ul>
		</div>
		
	</div>
</div>



<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		
		<div id="content" class="grid_12">
			<h1><span>Events</span></h1>
			<h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in sem non sapien pellentesque malesuada. Pellentesque mattis posuere lorem a luctus. In orci odio, dignissim eget interdum sed, iaculis a dui. Suspendisse ornare rutrum auctor. Donec sit amet sapien id libero</h2>
			<img class="icon_img" src="images/icon12.png" />
		</div>
		<div class="clear"></div>
		
		<div class="grid_12 events_cont">
			<img class="about_img" alt="" src="images/events_img1.jpg">
			<a href="javascript:void(0);"><h4>Cras at orci eget libero pharetra dictum</h4></a>
			<span>February 14, 2020</span>
			<p>Mauris sit amet massa enim. Vivamus scelerisque feugiat ornare. Nulla quis nulla lectus. Curabitur sed erat vitae elit tincidunt tempor non quis turpis. Proin ac lacus quis sem ultrices faucibus. Suspendisse ut arcu quis odio commodo luctus et pulvinar erat. Nulla egestas ultricies dolor, eget mattis lorem mollis sed. Aliquam posuere urna eget nibh volutpat sed interdum lectus luctus. Vestibulum sodales sagittis suscipit. Nullam convallis cursus magna non condimentum. Proin in turpis vel massa porta fermentum sed quis sapien</p>
		</div>
		<div class="clear"></div>
		<div class="grid_12 events_cont">
			<img class="about_img" alt="" src="images/events_img2.jpg">
			<a href="javascript:void(0);"><h4>Nunc tincidunt posuere urna quis</h4></a>
			<span>February 14, 2020</span>
			<p>Fusce faucibus egestas condimentum. Suspendisse ac nibh ullamcorper quam iaculis pretium eu eu turpis. Pellentesque dolor tellus, dapibus non hendrerit in, hendrerit eu eros. Etiam tortor ligula, tristique a elementum nec, ultrices quis dui. Etiam id mauris at velit porttitor venenatis. In bibendum, urna at convallis lacinia, quam dolor tempus ipsum, vitae pretium lorem dolor ut justo. Nullam ornare malesuada augue, non ornare dui scelerisque in. Donec sed mauris eget mauris cursus fermentum. Mauris porta vehicula ornare. Etiam quis auctor ante. Sed eu viverra eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam velit ipsum, ornare in ultricies vitae, ultricies at purus.</p>
		</div>
		<div class="clear"></div>
	
	</div>
</div>


<div class="slide" id="slide7" data-slide="7" data-stellar-background-ratio="0.5">
	<div class="effect_2 padding_slide7">
		<div class="container clearfix">
		
			<div id="content" class="grid_12">
				<span>Integer dapibus, tellus non laoreet gravida, neque turpis ultricies</span>
			</div>
		
		</div>
	</div>
</div>




<div class="slide" id="slide10" data-slide="10" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
		
		<div id="content" class="grid_12">
			<h1><span>Contact</span></h1>
			<h2>Cras urna leo, fringilla nec aliquam ac, varius in enim. Maecenas non felis augue, quis sagittis justo. Donec gravida, arcu in aliquet convallis, purus lectus euismod nulla, in porttitor lorem ligula nec metus. Curabitur sit amet metus quis arcu pharetra hendrerit. Nulla at tempus ligula.</h2>
			<img class="icon_img" src="images/icon13.png" />
		</div>
		<div class="clear"></div>
		
		<div class="grid_3 contact_det_block">
			<p>Quisque imperdiet neque et nunc laoreet nec luctus erat consectetur. Proin dapibus aliquet odio</p>
			<ul class="foot_block_intouch">
				<li class="touch_phone"><p>(+1) 245 5462 252</p></li>
				<li class="touch_clock"><p>Mon - Sat 9:00am - 6:00 pm</p></li>
				<li class="touch_mail"><a href="mailto:support@lorem.com">support@lorem.com</a></li>
				<li class="touch_site"><a href="javascript:void(0);">www.lorem.com</a></li>
				<li class="touch_adress"><p>3301 Lorem Ipsum, Dolor Sit Amet St</p></li>
			</ul>
		</div>
		<div class="grid_9 omega">
			<div class="contact_form">  
				<div id="note"></div>
				<div id="fields">
					<form id="ajax-contact-form" action="">
						<input type="text" name="name" value="" placeholder="Name" />
						<input type="text" name="subject" value="" placeholder="Phone" />
						<input type="text" name="email" value="" placeholder="Email" />
						<textarea name="message" id="message" placeholder="Message"></textarea>
						<div class="clear"></div>
						<input type="reset" class="contact_btn" value="Clear Form" />
						<input type="submit" class="contact_btn send_btn" value="Send" />
						<div class="clear"></div>
					</form>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	
	</div>
	
	<div id="map_block"><iframe width="100%" height="722" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=los+angeles&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=53.080379,114.169922&amp;ie=UTF8&amp;hq=&amp;hnear=Los+Angeles,+California&amp;ll=34.052234,-118.243685&amp;spn=0.003427,0.006968&amp;t=m&amp;z=14&amp;output=embed"></iframe></div>
	
</div>


<div id="footer">
	<div class="container clearfix">
		<div class="copyright">Delicious &copy; 2020 | <a href="javascript:void(0);">Privacy Policy</a></div>
		<div id="back_top"><a class="button" title="" data-slide="1">Back to top</a></div>
	</div>
</div>


</body>
</html>