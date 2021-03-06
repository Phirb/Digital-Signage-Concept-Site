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
                    <li>
                        <a class="dropdown-trigger" href="#!" data-target="services1">Services
                            <i class="material-icons right">arrow_drop_down</i>                                
                        </a>
                    </li>
					
                    <li class="active">
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
        <header id="about">
            <div class="nGrid-12" id="scAbout">
                <div class="scCover"></div>
                <div data-aos="fade-up" data-aos-duration="3000" class="scMainline">
                    <h1>Contact</h1>
                </div>
            </div>
        </header>
        <section data-aos="zoom-in" data-aos-duration="1500" id="contactForm">
            <div class="nGrid-12">
                <div class="clmn-6">
                    <form action="#">
                        <h3>Have Questions? Need A Quota? Ask Away!</h3>
                        <div class="input-field">
                            <input id="fullName" type="text">
                            <label for="fullName">Full Name</label>
                        </div>
                        <div class="input-field">
                            <input id="email" type="email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input id="subject" type="text">
                            <label for="subject">Subject</label>
                        </div>
                        <div class="input-field">
                            <textarea id="message" class="materialize-textarea"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <div class="input-field">
                            <div class="valign-wrapper">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="getInTouch" class="clmn-6">
                    <h3>Other Ways To Keep In Touch</h3>
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
            </div>
        </section>

    </div>

    <section id="newsletter">
        <div data-aos="slide-right" data-aos-duration="1500" data-aos-delay "500" class
        
        ="nGrid-12">
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

    </script>
</body>

</html>