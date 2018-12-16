<?php
	Session_start();
	
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "1"){
		$logged_in = true;
		$first_name = $_SESSION['first_name'];
		$lastname = $_SESSION['last_name'];
		
	}
	else{
		$logged_in = false;
		$first_name = "";
		$lastname= "";
	}
	
?>

<!doctype <!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <!-- Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/themify-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- Dropdown -->


    <div class="navbar-fixed z-depth-0">
        <nav class="darkNav">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><img style="height: 100%" src="img/logosecondary.svg" alt=""></a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger">
                    <i class="material-icons teal-text"><img style="height: 100%" src="img/logosecondary.svg" alt=""></i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    
                    <li class="active">
                        <a class="dropdown-trigger" href="#!" data-target="services1">Services (Advertising)
                            <i class="material-icons right">arrow_drop_down</i>                                
                        </a>
                    </li>
					
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="login.php", id="login_btn">Login</a>
                    </li>
					<li>
                        <a class="dropdown-trigger" href="#!" data-target="User1", id="User1Btn">UserPlaceholder
                            <i class="material-icons right">arrow_drop_down</i>                                
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
	
		<script>
		var loggedin = <?php echo json_encode($logged_in);?>;
		
		
		if(!loggedin){
			document.getElementById("login_btn").style.display = "initial";
			document.getElementById("User1Btn").style.display = "none";
		}
		else{
			var firstname = <?php echo json_encode($first_name);?>;
			document.getElementById("login_btn").style.display = "none";
			document.getElementById("User1Btn").style.display = "initial";
			
			document.getElementById("User1Btn").innerHTML = firstname;

			
		}
	</script>
	
    <ul id='services1' class='dropdown-content'>
        <li>
            <a href="advertising.php">Advertising</a>
        </li>
        <li>
            <a href="webdesign.php">Web Design</a>
        </li>
        <li>
            <a href="media.php">Media</a>
        </li>
    </ul>

    <ul id='services2' class='dropdown-content'>
        <li>
            <a href="advertising.php">Advertising</a>
        </li>
        <li>
            <a href="webdesign.php">Web Design</a>
        </li>
        <li>
            <a href="media.php">Media</a>
        </li>
    </ul>

    <ul class="sidenav draggable preventScrolling" id="mobile-nav">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="about.php">About</a>
        </li>
        
        <li>
            <a class="dropdown-trigger" href="#!" data-target="services2">Services
                <i class="material-icons right">arrow_drop_down</i>
            </a>
        </li>
        <li>
            <a href="contact.php">Contact</a>
        </li>
        <li>
            <a href="login.php">Login</a>
        </li>
    </ul>
	
	<ul id="User1" class='dropdown-content'>
        <li>
            <a href="board.php">Profile</a>
        </li>
        <li>
            <a href="#!">Settings</a>
        </li>
        <li>
            <a href="php/logout.php">Log-Out</a>
        </li>
    </ul>

    <div id="gridAdv" class="mainGrid">
        <header id="about">
            <div class="nGrid-12" id="scAdv">
                <div class="scCover"></div>
                <div data-aos="fade-up" data-aos-duration="3000" class="scMainline">
                    <h1>Advertising</h1>
                </div>
            </div>
        </header>

        <section class="nGrid-12 perks">
            <div data-aos="flip-down" data-aos-duration="1500" class="empHeading">
                <h2>We Put You On Display</h2>
                <p>We take pride in having you as our client, so much that we want to show off!</p>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-anchor-placement="center-center" class="sHeading">
                <h2>See What Perks You Get With Us</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" class="sContent">
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-signal"></i>
                    </span>
                    <h3>Extend Your Reach</h3>
                    <p>Our ads will be easily seen from anywhere, and will be sure to gain attraction.</p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-target"></i>
                    </span>
                    <h3>Target A Specific Audience</h3>
                    <p>Our advertising service can pertain to specific sub groups of a community, where your ads are bound to be more effective.</p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-search"></i>
                    </span>
                    <h3>Be More Accessible</h3>
                    <p>Through our ads, people will be able to connect with you easier.</p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-stats-up"></i>
                    </span>
                    <h3>Collect Data</h3>
                    <p>Your ads don't just have to bring in exposure. They can also bring in important data useful to your business's strategy.</p>
                </div>
            </div>
        </section>
        <section id="parallaxAdv" class="nGrid-12">
            <div class="clmn-12">
                <div class="parallax-container">
                    <div class="parallax">
                        <img src="img/Digital-Signage.jpg">
                    </div>
                    <div class="alignBot2">
                        <span class="parallaxLine" <h2>Imagine Seeing Yourself There</h2>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section id="displayAdv">
            <div id="displayAdvHead" class="sHeading">
                <h2>Now See It For Real</h2>
                <p>We Have Kiosks At 43 Different Locations</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" class="clmn-12">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/bg3.jpg">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Location, Address</span>
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <section id="interest" class=" center-align">
        <h3>Interested? We'd Love To Talk!</h3>
        <button class="contactBtn btn">Contact Us</button>
    </section>

    <section id="newsletter">
        <div data-aos="slide-right" data-aos-duration="1500" data-aos-delay "500" class="nGrid-12">
            <div class="sHeading">
                <h2>Subscribe To Our Newsletter</h2>
                <p>Be the first to learn about new opportunities exclusively through us!</p>
            </div>
            <form class="inline-form">
                <div class="form-group">
                    <div class="input-field">
                        <input id="fullName" type="text">
                        <label for="fullName">Full Name</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-field">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-field">
                        <div class="valign-wrapper">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="nGrid-12">
            <div class="footerAbout">
                <h5>About Us</h5>
                <p>We strive to help the Filipino-Canadian community build stronger connections between themselves and others
                </p>
            </div>
            <div class="footerLinks">
                <h5>Links</h5>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li>
                        <a href="advertising.php">Advertising</a>
                    </li>
                    <li>
                        <a href="webdesign.php">Web Design</a>
                    </li>
                    <li>
                        <a href="media.php">Media</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            <div class="footerSocial">
                <h5>Get In Touch</h5>
                <ul>
                    <li>
                        <a href="#"><i class="material-icons">local_phone</i>+1 234 567 890</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons">mail</i>info@isletDigital.ca</a>
                    </li>
                    <li>
                        <a href="#"><i class="material-icons">chat</i>Live Chat</a>
                    </li>
                    <li>
                        <p></p>
                        <!-- Break -->
                    </li>
                    <li>
                        <a href="#"><i class="ti-twitter-alt"></i>Twitter</a>
                    </li>
                    <li>
                        <a href="#"><i class="ti-facebook"></i>Facebook</a>

                    </li>
                    <li>
                        <a href="#"><i class="ti-linkedin"></i>LinkedIn</a>
                    </li>
                </ul>
            </div>
            <div class="clmn-12">
                <hr>
                <p>Copyright &copy; 2018</p>
            </div>
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>

        //AOS
        AOS.init({
            once: true,
        });
        //Sidenav
        const sideNav = document.querySelector('.sidenav');
        M.Sidenav.init(sideNav, {});

        //Dropdown
        const dropdown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropdown, {});

        //Slider

        var slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {});

        //parallax

        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax, {});

        const carousel = document.querySelectorAll('.carousel');
        M.Carousel.init(carousel, {});
    </script>
</body>

</html>