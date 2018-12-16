<?php
	Session_start();
	
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == "1"){
		header("Location: error.php");
		die();
		
	}
	
	
?>


<!DOCTYPE html>
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
</head>

<body>
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
					
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li class="active">
                        <a href="login.php", id="login_btn">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

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
    <header>
        <div class="nGrid-12">
            <div class="showcase" id="scLogin">
                <div class="scCover"></div>
            </div>
            <div class="cRow" id="loginCard">
                <div class="card login">
                    <div class="card-content">
                        <div class="card-title teal-text">
                            <h1>
                                <i class="large material-icons" style="font-size: 70px">account_circle</i>
                        </div>
                        <div class="card-action">
						
						<form action="php/log_in.php", method="post", onsubmit="return checkForm();", id="myForm">
                            <div class="input-field">
                                <input id="email" type="email", name="email", autocomplete="off">
                                <label for="email">Email</label>
                            </div>
							
                            <div class="input-field">
                                <input id="password" type="password", name="password", autocomplete="off">
                                <label for="password">Password</label>
                            </div>
                            <p>
                                <input id="remember" type="checkbox" for="remember">
                                <label>
                                    <input type="checkbox" />
                                    <span>Remember Me</span>
                                </label>
                            </p>
                            <div class="input-field">
                                <div class="valign-wrapper">
                                    <button class="btn outlined waves-effect waves-light" type="submit" name="action">Submit
                                    </button>
                                </div>
                            </div>
							</form>
                            <a href="register.php">Don't have an account?</a>
                        </div>
                        
<script>
						var temp = null;
						var go = 1;
							function checkForm(){
								var email = document.getElementById('email').value;
								var password = document.getElementById('password').value;
								var thing = false;
								var go = 1;

								
								if(email.length == 0){
									M.toast({html: "Email cannot be empty"});
									go = 0;		
								}
								if(password.length == 0){
									M.toast({html: "Password cannot be empty"});
									go=0;
								}
								if(go == 1){
									
									var ajax = new XMLHttpRequest();
									var method = "GET";
									var url = "php/getEmailandPass.php?q=" + email + "&ped=" + password;
									var asynchronous = true;
																
									ajax.open(method, url, asynchronous);
									ajax.send();
									ajax.onreadystatechange = function(){
										
										if(this.readyState == 4 && this.status == 200){
											temp = this.responseText;
											
											if(temp !== "lol1"){
											M.toast({html: "Please check username or password again"});
											go=0;
										}
										else{
											
											document.forms['myForm'].submit();
										}
										}
										thing = true;
									};
									
								}
								if(go == 1 && thing){	
									return true;
								}
								else{
									return false;
								}
						}						
						</script>
						
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="nGrid-12">
        <footer class="clmn-12">
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
        </div>
    </header>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        //Sidenav
        const sideNav = document.querySelector('.sidenav');
        M.Sidenav.init(sideNav, {});
        //Login
        const dropDown = document.querySelectorAll('.dropdown-trigger');
        M.Dropdown.init(dropDown, {});
    </script>
</body>

</html>


