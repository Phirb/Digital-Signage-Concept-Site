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
                    <i class="material-icons teal-text">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li class="active">
                        <a class="dropdown-trigger" href="#!" data-target="services1">Services (Media)
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
            <div class="nGrid-12" id="scMed">
                <div class="scCover"></div>
                <div data-aos="fade-up" data-aos-duration="3000" class="scMainline">
                    <h1>Media</h1>
                </div>
            </div>
        </header>

        <section class="nGrid-12  perks">
            <div data-aos="flip-down" data-aos-duration="1500" class="empHeading">
                <h2>We Make You Look Good</h2>
                <p>We take pride in having you as our client, so much that we want to show off!</p>
            </div>
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-anchor-placement="center-center" class="sHeading">
                <h2>See What Perks You Get With Us</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" class="sContent">
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-money"></i>
                    </span>
                    <h3>Affordable</h3>
                    <p>Our jobs are cheap, effective, and their use will last forever.</p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="material-icons">hd</i>
                    </span>
                    <h3>HD Images and Video</h3>
                    <p>To us, using bad cameras is cruel to the eyes of people. We take it seriously that our photography is done with the best camera equipment available.</p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-upload"></i>
                    </span>
                    <h3>Automatic Use On Your Ads</h3>
                    <p>Our photography combined with our ad services have the greatest effective in making your businesses visually appealing.</p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-thumb-up"></i>
                    </span>
                    <h3>100% Ownership</h3>
                    <p>You can do what you want with the photos we take.</p>
                </div>
            </div>
        </section>
        <section id="parallaxAdv" class="nGrid-12">
            <div class="clmn-12">
                <div class="parallax-container">
                    <div class="parallax">
                        <img src="img/CameraEquipment.jpg">
                    </div>
                    <div class="alignBot2">
                        <span class="parallaxLine" <h2>We Use The Best of Equipment</h2>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <section id="displayAdv">
            <div id="displayAdvHead" class="sHeading">
                <h2>Now See It For Real</h2>
                <p>We Have Done Over 100 Photography Jobs For Clients</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" class="clmn-12">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="img/picjob1.jpg">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob2.jpg">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob3.jpg">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob1.jpg">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob2.jpg">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob3.jpg">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob1.jpg">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob2.jpg">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob3.jpg">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob1.jpg">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob2.jpg">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                        <li>
                            <img src="img/picjob3.jpg">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3 class="boldh3">
                                    <span class="imgLine">Job For Client</span>
                                </h3>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

    <section id="interest" class="center-align">
        <ul class="test">
            <li><h3>Interested? We'd Love To Talk!</h3></li>
            <li><a href="contact.php"><button class="contactBtn btn">Contact Us</button></a></li>
        </ul>
    </section>

    <section id="newsletter">
        <div data-aos="slide-right" data-aos-duration="1500" data-aos-delay "500" class="nGrid-12">
            <div class="sHeading">
                <h2>Subscribe To Our Newsletter</h2>
                <p>Be the first to learn about new opportunities exclusively through us!e.</p>
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