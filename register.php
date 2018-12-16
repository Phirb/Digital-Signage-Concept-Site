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

    <ul class="sidenav" id="mobile-nav">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="#services">Services</a>
        </li>
        <li>
            <a href="about.php">About</a>
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
                <div class="card register">
                    <div class="card-content">
                        <div class="card-title teal-text">
                            <h1>
                                <i class="large material-icons" style="font-size: 70px">account_circle</i>
                        </div>
                        <div class="card-action">
<form action="php/re-gister.php", method="post", onsubmit=" return checkRegister();", id="myForm">
                            <div class="input-field">
                                <input id="first_name" type="text", name="first_name">
                                <label for="first_name">First Name</label>
                            </div>
							<div class="input-field">
                                <input id="last_name" type="text", name="last_name">
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class="input-field">
                                <input id="email" type="email", name="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input id="password" type="password", name="password">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                    <input id="confpassword" type="password">
                                    <label for="confpassword">Confirm Password</label>
                            </div>
							
                            <p>
                                <input id="agree" type="checkbox" for="agree">
                                <label>
                                    <input type="checkbox"/>
                                    <span>I agree to the terms and conditions and the IsletDigital privacy policy.</span>
                                </label>
                            </p>
                            <div class="input-field">
                                <div class="valign-wrapper">
                                    <button class="btn outlined waves-effect waves-light" type="submit" name="action">Submit</button>
                                </div>
                            </div>
							</form>
                            <a href="login.php">Already have an account?</a>
							<script>
							var temp = null;
							function checkRegister(){
									var first_name = document.getElementById("first_name").value;
									var last_name = document.getElementById("last_name").value;
									var email = document.getElementById("email").value;
									var password = document.getElementById("password").value;
									var confpassword = document.getElementById("confpassword").value;
									
									
									var go = 1;
									var okay = false;
									
									
									if(first_name === ""){
										M.toast({html: "First Name Empty"});
										return false;
									}
									if(last_name === ""){
										M.toast({html: "Last Name Empty"});
										return false;
									}
									if(password.length < 7){
										M.toast({html: "Password not long enough"});
										return false;
									}
									
									if(confpassword != password){
										M.toast({html: "Passwords do not match"});
										return false;
									}
									if(email === ""){
										M.toast({html: "Email Empty"});
										return false;
									}
									else{
										var ajax = new XMLHttpRequest();
										var method = "GET";
										var url = "php/getEmail.php?q=" + email;
										var asynchronous = true;
																
										ajax.open(method, url, asynchronous);
										ajax.send();
										ajax.onreadystatechange = function(){
										
										if(this.readyState == 4 && this.status == 200){
											temp = this.responseText;
											
											if(temp === "yes"){
											M.toast({html: "Email already exists"});
											go=0;
										}
										else{
											document.forms['myForm'].submit();
										}
										}
										thing = true;
									};
									
									
									}
									
									
									
									
									if(go == 12){
										return true;
									}
									return false;
									
									
									
									
									
							
							}
							

							</script>



                        </div>
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