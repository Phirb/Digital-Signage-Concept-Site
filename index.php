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
    <link type="text/css" rel="stylesheet" href="css/style.css" <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/themify-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
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
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="services1">Services
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



    <div class="mainGrid">
        <header>
            <div class="nGrid-12" id="scHome">
                <div class="scCover"></div>
                <div data-aos="fade-up" data-aos-duration="3000" class="scMainline">
                    <h1>Grow Your Business With Us!</h1>
                    <p>We Connect Filipino-Canadian Businesses Through Digital Signage</p>
                </div>
            </div>
        </header>
        <section data-aos="fade-up" data-aos-duration="1500" data-aos-anchor-placement="center-center" id="keyAreas">
            <div class=" card-md">
                <span class="icon">
                    <i class="ti-search"></i>
                </span>
                <h3>Online Exposure</h3>
                <p>The internet is the farthest-reaching, most accessible method of connecting with clients and other businesses. We make the process of getting you there simple and effective.</p>
            </div>
            <div class=" card-lg">
                <span class="icon">
                    <i class="ti-tablet"></i>
                </span>
                <h3>Digital Signage</h3>
                <p>The world is changing. Digital signage is gaining momentum, with businesses like newspaper companies already making the move to digital. Your businesses can partner with to take advantage of this trending tool.</p>
            </div>
            <div class=" card-md">
                <span class="icon">
                    <i class="ti-stats-up"></i>
                </span>
                <h3>Data Analytics</h3>
                <p>Data is powerful. The world is currently collecting more data than ever before. Collecting it and using it as an aid to your businesses plans becomese easy through our innovative data analysis tools.</p>
            </div>
        </section>
        <section id="features">
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-anchor-placement="center-center" class="sHeading">
                <h2>What We Offer</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" class="sContent">
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-video-camera"></i>
                    </span>
                    <h3>Photography</h3>
                    <p>Our professional photography allows for a businesses's appearance to change from local to large scale. </p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-plus"></i>
                    </span>
                    <h3>New Connections</h3>
                    <p>Other ambitious businesses and entrepreners want to work with you to find success together. Our service helps you meet them.</p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-announcement"></i>
                    </span>
                    <h3>Advertising</h3>
                    <p>Our advertising is sure to gain you an increased audience and client base.</p>
                </div>
                <div class="card-sm">
                    <span class="icon">
                        <i class="ti-ruler-pencil"></i>
                    </span>
                    <h3>Web Design</h3>
                    <p>A professional-looking website is very important for a businesses to make their first impression on someone. We make it easy for you to create one.</p>
                </div>
            </div>
        </section>

        <section id="gallery">
            <div data-aos="zoom-in-up" data-aos-duration="1000" class="sHeading">
                <h2>See The Growth</h2>
                <p>These ads are already gaining attraction!</p>
            </div>
            <div class="nGrid-12">
                <div data-aos="fade-up-right" data-aos-duration="1500" class="pic-lg">
                    <span class="alignBot">
                        <h5>
                            Advertisement
                        </h5>
                    </span>
                    <span class="alignBot2">
                        <p>description</p>
                    </span>
                </div>
                <div data-aos="fade-up-left" data-aos-delay="500" data-aos-duration="1500" class="pic-sm">
                    <span class="alignBot">
                        <h5>
                            Advertisement
                        </h5>
                    </span>
                    <span class="alignBot2">
                        <p>description</p>
                    </span>
                </div>
                <div data-aos="fade-up-right" data-aos-duration="1500" class="pic-md">
                    <span class="alignBot">
                        <h5>
                            Advertisement
                        </h5>
                    </span>
                    <span class="alignBot2">
                        <p>description</p>
                    </span>
                </div>
                <div data-aos="fade-up-left" data-aos-delay="500" data-aos-duration="1500" class="pic-md">
                    <span class="alignBot">
                        <h5>
                            Advertisement
                        </h5>
                    </span>
                    <span class="alignBot2">
                        <p>description</p>
                    </span>
                </div>
                <div data-aos="fade-up-right" data-aos-duration="1500" class="pic-sm">
                    <span class="alignBot">
                        <h5>
                            Advertisement
                        </h5>
                    </span>
                    <span class="alignBot2">
                        <p>description</p>
                    </span>
                </div>
                <div data-aos="fade-up-left" data-aos-delay="500" data-aos-duration="1500" class="pic-lg">
                    <span class="alignBot">
                        <h5>
                            Advertisement
                        </h5>
                    </span>
                    <span class="alignBot2">
                        <p>description</p>
                    </span>
                </div>
                <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="500" class="clmn-12" id="gallerybtn">
                    <a href="#more">
                        <button class="btn outlined waves-effect waves-light">See More Ads
                        </button>
                    </a>
                </div>
            </div>
        </section>

        <section id="stats">
            <div data-aos="zoom-in-up" data-aos-duration="1000" data-aos-anchor-placement="center-center" class="sHeading">
                <h2>The Numbers Say A Lot!</h2>
            </div>
            <div class="sContent">
                <div id="statsCard" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="300" class="card-sm">
                    <h3>435</h3>
                    <p>Jobs Completed</p>
                </div>
                <div id="statsCard" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="600" class="card-sm">
                    <h3>128</h3>
                    <p>Happy Clients</p>
                </div>
                <div id="statsCard" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="900" class="card-sm">
                    <h3>43</h3>
                    <p>Kiosk Locations</p>
                </div>
                <div id="statsCard" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="1200" class="card-sm">
                    <h3>2018</h3>
                    <p>Year Started</p>
                </div>
            </div>
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
                            <input id="fullNameSub" type="text">
                            <label for="fullNameSub">Full Name</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-field">
                            <input id="emailSub" type="email" class="validate">
                            <label for="emailSub">Email</label>
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
    </div>

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
        const dropDown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropDown, {});
    </script>
</body>

</html>