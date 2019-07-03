<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	 	<link rel="stylesheet" href="Css/aos.css" />
	 	<script src="Js/jquery-3.3.1.min.js"></script>
		<script src="Js/bootstrap.min.js"></script>
		<script src="Js/popper.js"></script>
		<link rel="stylesheet" href="Css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<link rel="stylesheet" type="text/css" href="Css/glyphicon.css">
		<link rel="stylesheet" type="text/css" href="Css/slide2.css">  
		<style type="text/css">
			.carousel-indicators{
				cursor:pointer;
			}
			.carousel-indicators li:hover{
				background-color: red;
			}

			div#cntct{
				background: url('Images/Homepage/cntct.jpg');
				height: 530px;    
				background-repeat: no-repeat;
			}

			div#contact{
				height: 530px; 
			}
			div#contact{
				height: 530px; 
			}
			div#contact{
				height: 530px; 
			}
			.container{
				box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);   
			}
			.container form div
			{
				position: relative;
			}
			.container form div label
			{
				position: absolute;
				top: 3px;
				pointer-events: none;
				left: 0;
				transition: .3s;
			}
			.container input:focus ~label,
			.container input:valid ~label
			{
				left: 0;
				top: -20px;
				color: rgb(66,133,244);
				font-size: 12px;
				font-weight: bold;
			}

			.form-control{
				text-decoration: none;
				width: 100%;
				border-top:0;
				border-left:0;
				border-right:0;
			}

			div#div1{
				height: 1px;
			}
			
		</style>
	</head>
	<body>
		<div class="container-fliud">
			<ul class="nav justify-content-end bg-dark top topnav fixed-top">
				<li class="nav-item" style=" background: rgba(0, 0, 0,0, 0.2);color: #f1f1f1;">
					<a class="nav-link" href="#" style="color: #f1f1f1;">Home</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link" href="#About" style="color: #f1f1f1;">About</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link" href="#contact" style="color: #f1f1f1;">Contact</a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link " href="login-form.php" style="color: #f1f1f1;">Login <span class="glyphicon glyphicon-log-in" style="font-size: 10pt;"></span></a>
	    		</li>
	    		<li class="nav-item">
	    			<a class="nav-link " href="Register.php" style="color: #f1f1f1;">Signup<span class="glyphicon glyphicon-user" style="font-size: 10pt;"></a>
	    		</li>
	    	</ul>

			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  		</ol>

		  		<div class="carousel-inner">
		  			<div class="carousel-item active">
		  				<img src="Images/Homepage/1.jpg" style="height: 600px;width: 100%;">
		  				<div class="text-block" >
		     				<h4 style="font-size: 15pt; color:darkgreen;">GET STARTED WITH ONLINE COURSES</h4>
		     				<h1 style="font-size: 25pt; ;left:0;" >BEST ONLINE<br/>LEARNING SYSTEM</h1>
		     				<p style="font-size: 15pt;color:black font-family: "Times New Roman", Times, serif;">
		     				Some people dream of accomplishing great things.<br> Others stay awake and make it happen.</p>
		    			</div>
					</div>

			    	<div class="carousel-item">
			      		<img  src="Images/Homepage/2.jpg" style="height: 600px;width: 100%;filter: blur(2px);">
			      		<div>
				      		<div class="about text-block" style="font-size: 16pt;" >
				      			<hr class="abouthr" style="background-color: white;">
				      			<ul style="list-style-type:none">
				      				<li>Online Tutorial originated from the idea that there exists of a online class for who respond better to online content and prefer to learn the subject.</li>
				      				<li> Our content and resources are freely available and we prefer to keep it that  way to encourage our student to acquire as many skills as they would <br>like to.</li>
				      				<li> Our mission is deliver the Simply Easy Learning with clear, crisp, and to-the-point content on a wide range of technical and non-technical subjects</li>
				      				<li> without any of the pre-conditions and impediments.</li>  
				        		</ul>
				        		<hr class="abouthr" style="background-color: white; ">
				        	</div>
			    		</div>
			    	</div>

			    	<div class="carousel-item">
			    		<img  src="Images/Homepage/3.jpg" style="height:600px;width: 100%;filter: blur(2px);">
			    		<div class="text-block-ben" style="margin-left: 23%;">
			    			<ul style="margin-top: 25%; font-size: 15pt;">
			    				<li >Easy Learning with clear, crisp, and to-the-point content.</li>
			        		</ul>
			      		</div>

			      		<div class="text-block-ben" style="margin-left: 53%;">
			      			<ul style="margin-top: 25%; font-size: 15pt;">
			      				<li>Quickly evaluate the progress reports</li>
			        		</ul>
			      		</div>

			      		<div class="text-block-ben" style="margin-left: 23%; margin-top:280px;">
			      			<ul style="margin-top: 25%; font-size: 15pt;">
			      				<li>Access the system anytime from anywhere</li>
			      			</ul>
			      		</div>

			        	<div class="text-block-ben" style="margin-left: 53%; margin-top:280px;">
			        		<ul style="margin-top: 25%; font-size: 15pt;">
			        			<li>Experience the best user-interface.</li>
			        		</ul>
			      		</div>

			      	</div>

				</div>

			</div>

		</div>

		<div class="aboutclr" id="About">
			<center><h2 >About Us</h2></center>
			<div class="profile" data-aos="zoom-in-right">
				<div class="inp1">
					<img src="Images/Homepage/4.png" >
					<span class="cline"></span>
				</div>

				<div class="inp2">
					<p><span class="line"><b>Name:</b>Shaikh Shadab Ali Murad Ali</span><br><span class="line"><b>Email:</b>ShaikhShadabali02@gmail.com</span><br><span class="line"><b>Contact No:</b>123547892</span><br><i class="fab fa-facebook" style="font-size: 20pt;color: blue;"></i><i class="fab fa-github" style="font-size: 20pt;margin-left: 10px;"></i><i class="fab fa-twitter-square" style="font-size: 20pt;color:#339af0;margin-left: 10px;"></i><i class="fab fa-linkedin" style="font-size: 20pt;color:#0077b5;margin-left: 10px;"></i></p>
				</div>  
			</div>

			<div class="profile1" data-aos="zoom-in-left">
				<div class="inp2" ">
					<p><span class="line"><b>Name:</b>Shaikh Shadab Ali Murad Ali</span><br><span class="line"><b>Email:</b>ShaikhShadabali02@gmail.com</span><br><span class="line"><b>Contact No:</b>123547892</span><br><i class="fab fa-facebook" style="font-size: 20pt;color: blue;"></i><i class="fab fa-github" style="font-size: 20pt;margin-left: 10px;"></i><i class="fab fa-twitter-square" style="font-size: 20pt;color:#339af0;margin-left: 10px;"></i><i class="fab fa-linkedin" style="font-size: 20pt;color:#0077b5;margin-left: 10px;"></i></p>

					<div class="inp1">
						<span class="cline"></span>
						<img src="Images/Homepage/4.png" style="margin-left: 18px;">
					</div>  
				</div>
			</div>

			<div class="profile2" data-aos="zoom-in-left">
				<div class="inp1">
					<img src="Images/Homepage/4.png" >
					<span class="cline"></span>
				</div>

				<div class="inp2">
					<p><span class="line"><b>Name:</b>Shaikh Shadab Ali Murad Ali</span><br><span class="line"><b>Email:</b>ShaikhShadabali02@gmail.com</span><br><span class="line"><b>Contact No:</b>123547892</span><br><i class="fab fa-facebook" style="font-size: 20pt;color: blue;"></i><i class="fab fa-github" style="font-size: 20pt;margin-left: 10px;"></i><i class="fab fa-twitter-square" style="font-size: 20pt;color:#339af0;margin-left: 10px;"></i><i class="fab fa-linkedin" style="font-size: 20pt;color:#0077b5;margin-left: 10px;"></i></p>
				</div>
				<br>
			</div>
			<br>
		</div>

		<div id='cntct' style="width: 60%; float:left">
	   		
		</div>
		<div id='contact' class='container' style="width: 39.6%; float:right">
			<center><label style="font-size:20pt; width:90px;" id="contact">Contact</label></center>
		  	<form method='post'>
				<div>
				    <input type="text" id="Uname" class="form-control" required />
				    <label  for="Uname">Name</label>
				</div>
				<br>
				  
				<div>
				    <input type="text" id="Ucontact" class="form-control" required />
				    <label  for="Ucontact">Contact Number</label>
				</div>

				<br>
				<div class="form-group">
				    <input type="text" id="UEmail" class="form-control" required />
				    <label  for="UEmail">Email</label>
				</div>
				      
				<div class="form-group">
				    <input type="text" id="USubj" class="form-control" required />
				    <label  for="USubj">Subject</label>
				</div>
				      
				<div class="form-group">
					 <textarea id="textrem" placeholder="Enter the Your message" required=""></textarea>
					 <h6 id="count_message" style="margin-right: 60px; text-align: right"></h6>
				</div>


				<div class="form-group">
					<input type='submit' name="submit" value='Send' class='btn btn-default'>
				</div>
		
			</form>

			<div class="message_box" id='div1'> </div>

		</div>

		
			
			
		
		

		<a href="#" class="scrollToTop"><span class="glyphicon glyphicon-chevron-up"></span></a>
		<br>
		<script src="Js/cquery.js"></script>
		<script src="Js/misc.js"></script>
		<script src="Js/aos.js"></script>
		<script>
			AOS.init();
			// You can also pass an optional settings object
			// below listed default settings
			AOS.init({
		  	// Global settings
		  	disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
		  	startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
		  	initClassName: 'aos-init', // class applied after initialization
		  	animatedClassName: 'aos-animate', // class applied on animation
		  	useClassNames: false, // if true, will add content of `data-aos` as classes on scroll

			  // Settings that can be overriden on per-element basis, by `data-aos-*` attributes:
			  offset: 120, // offset (in px) from the original trigger point
			  delay: 300, // values from 0 to 3000, with step 50ms
			  duration: 500, // values from 0 to 3000, with step 50ms
			  easing: 'ease', // default easing for AOS animations
			  once: false, // whether animation should happen only once - while scrolling down
			  mirror: false, // whether elements should animate out while scrolling past them
			  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
			});

			$(document).ready(function(){
			  // Add smooth scrolling to all links
			  $("a").on('click', function(event) {

			    // Make sure this.hash has a value before overriding default behavior
			    if (this.hash !== "") {
			      // Prevent default anchor click behavior
			      event.preventDefault();

			      // Store hash
			      var hash = this.hash;

			      // Using jQuery's animate() method to add smooth page scroll
			      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			      $('html, body').animate({
			        scrollTop: $(hash).offset().top
			      }, 800, function(){
			   
			        // Add hash (#) to URL when done scrolling (default click behavior)
			        window.location.hash = hash;
			      });
			    } // End if
			  });
			});
			$(document).ready(function(){

			    //Check to see if the window is top if not then display button
			    $(window).scroll(function(){
			        if ($(this).scrollTop() > 100) {
			            $('.scrollToTop').fadeIn();
			        } else {
			            $('.scrollToTop').fadeOut();
			        }
			    });

			    //Click event to scroll to top
			    $('.scrollToTop').click(function(){
			        $('html, body').animate({scrollTop : 0},800);
			        return false;
			    });

			});

			
		</script>
	</body> 
</html>
