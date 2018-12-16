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
    <link type="text/css" rel="stylesheet" href="css/style.css"> <!-- Let browser know website is optimized for mobile-->
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
                    <li class="active">
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
        <header id="about">
            <div class="nGrid-12" id="scAbout">
                <div class="scCover"></div>
                <div data-aos="fade-up" data-aos-duration="3000" class="scMainline">
                    <h1>About Us</h1>
                </div>
            </div>
        </header>

        <section id="history">
            <div data-aos="zoom-in-up" data-aos-duration="1000" class="sHeading">
                <h2>Our Vision Statement</h2>
                <p>To be a company that connects overseas Filipino communities to each other.</p>
            </div>
            <div data-aos="flip-down" data-aos-duration="1500"class="empHeading">
                <h2>Company History</h2>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" class="clmn-6">
                <p>A casual conversation at a Vietnamese restaurant lead to Raymond Chua and his nephew, Kyle Carlos, seeing the need for a proper network to connect the Filipino overseas communities.
                It did not take long for an idea to fill that need to arise. The answer was digital signage, something that we unknowingly interact with everyday.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" class="clmn-6">
                <p>Soon enough, Adam Hou and Philip Bondoc were added to the project. Work began on a kiosk interface, an introductory website, and a database. Eventually, what was initially an experiment grew to be a full project. At the end of August 2018, the full concept of the service was determined and plans were immediately made to bring it into full effect.</p>
            </div>
            <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="700" class="clmn-12">
                <div class="slider">
                    <ul class="slides">
                        <li>
                            <img src="">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3>Memory 1</h3>
                                <h5 class="light grey-text text-lighten-3">Context</h5>
                            </div>
                        </li>
                        <li>
                            <img src="">
                            <!-- random image -->
                            <div class="caption left-align">
                                <h3>Memory 2</h3>
                                <h5 class="light grey-text text-lighten-3">Context</h5>
                            </div>
                        </li>
                        <li>
                            <img src="">
                            <!-- random image -->
                            <div class="caption right-align">
                                <h3>Memory 3</h3>
                                <h5 class="light grey-text text-lighten-3">Context</h5>
                            </div>
                        </li>
                        <li>
                            <img src="">
                            <!-- random image -->
                            <div class="caption center-align">
                                <h3>Memory 4</h3>
                                <h5 class="light grey-text text-lighten-3">Context</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="profiles">
            <div class="nGrid-12">
                <div data-aos="zoom-in-up" data-aos-duration="1000" class="sHeading">
                    <h2>Meet The Team</h2>
                </div>
                <div class="clmn-3">
                    <div data-aos="fade-up" data-aos-duration="1500" class="bio">
                        <img src="img/profilepic.png" alt="" class="circle responsive-img middlepls">
                        <h5>Adam Hou</h5>
                        <h6>Backend Developer</h6>
                        <p>Once upon a time Adam was happily playing Warframe within the safe confines of his room. But then
                            suddenly one day, Kyle drags him out of the house to do slavework for his new venture... Digital
                            Signage. The nightmare begins where Adam gets haunted day and night by Digital Signage. Everywhere
                            he goes he sees digital signage. Outside the windows, at Mcdonalds, in an elevator... He saw
                            digital signage everywhere until one day... he peers into the mirror, and he realizes that he
                            himself has become digital signage.
                        </p>
                    </div>
                </div>
                <div class="clmn-3">
                    <div data-aos="fade-up" data-aos-duration="1500"  class="bio">
                        <img src="img/profilegen.jpg" alt="" class="circle responsive-img middlepls">
                        <h5>Raymond Chua</h5>
                        <h6>Marketing Lead</h6>
                        <p>Guy with the original idea.
                        </p>
                    </div>
                </div>
                <div class="clmn-3">
                    <div data-aos="fade-up" data-aos-duration="1500"  class="bio">
                        <img src="img/profilegen.jpg" alt="" class="circle responsive-img middlepls">
                        <h5>Philip Bondoc</h5>
                        <h6>Frontend Developer</h6>
                        <p>Refer to Kyle's.
                        </p>
                    </div>
                </div>
                <div class="clmn-3">
                    <div data-aos="fade-up" data-aos-duration="1500"  class="bio">
                        <img src="img/kylepic.jpg" alt="" class="circle responsive-img middlepls">
                        <h5>Kyle Carlos</h5>
                        <h6>Kiosk Developer</h6>
                        <p>Adam's majestic bio outshines anything I have to offer, so writing a bio is futile.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section id="newsletter">
        <div data-aos="slide-right" data-aos-duration="1500" data-aos-delay "500"  class="nGrid-12">
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