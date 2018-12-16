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
	<link rel="stylesheet" href="css/material2.css">
	<link type="text/css" rel="stylesheet" href="css/databoard.css">
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
	<div class="navbar-fixed z-depth-0" id="dashboard">
		<nav id="dashNav" class="nav-extended">
			<div class="nav-wrapper">

				<a href="#" data-target="mobile-nav" class="sidenav-trigger show-on-large">
					<i class="material-icons black-text">menu</i>
				</a>
				<a href="#" class="brand-logo"><img style="height: 100%" src="img/logosecondary.svg" alt=""></a>
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
			<div class="nav-content">
				<ul class="tabs tabs-transparent">
					<li class="tab">
						<a href="#test1">Advertise</a>
					</li>
					<li class="tab">
						<a class="active" href="#test2">Search</a>
					</li>
					<li class="tab">
						<a href="#test3">Analyze</a>
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

	<div class="fixed-action-btn">
		<a class="btn-floating btn-large">
			<i class="large material-icons teal">more_horiz</i>
		</a>
		<ul>
			<li>
				<a class="btn-floating ">
					<i class="material-icons teal darken-1">insert_chart</i>
				</a>
			</li>
			<li>
				<a class="btn-floating teal darken-1">
					<i class="material-icons">format_quote</i>
				</a>
			</li>
			<li>
				<a class="btn-floating teal darken-1">
					<i class="material-icons">publish</i>
				</a>
			</li>
			<li>
				<a class="btn-floating teal darken-1">
					<i class="material-icons">attach_file</i>
				</a>
			</li>
		</ul>
	</div>

	<section id="dashContent">
		<div id="test1" class="nGrid-12">
			<div id="tabGrid" class="nGrid-12">
				<div id="createAd" class="clmn-8 advertiseDetails center-align">
					<div class="clmn-12">
						<h1>Make A Post</h1>
					</div>
					<div class="nGrid-12">
						<div class="clmn-3 center-align postIcon">
							<a class="modal-trigger" href="#formHire">
								<i class="material-icons">group_add</i>
								<p>Jobs</p>
							</a>
						</div>
						<div class="clmn-3 center-align postIcon">
							<a class="modal-trigger" href="#formService">
								<i class="material-icons">home</i>
								<p>Rent</p>
							</a>
						</div>
						<div class="clmn-3 center-align postIcon">
							<a href="#">
								<i class="material-icons">event_note</i>
								<p>Event</p>
							</a>
						</div>
						<div class="clmn-3 center-align postIcon">
							<a href="#">
								<i class="ti-tag"></i>
								<p>Promotions</p>
							</a>
						</div>
					</div>
				</div>
				<div id="viewBProfile" class="clmn-2 advertiseDetails center-align">
					<a href="#">
						<i class="material-icons">contacts</i>
						<p>Business Profile</p>
					</a>
				</div>
				<div id="viewBProfile" class="clmn-2 advertiseDetails center-align">
					<a href="#">
						<i class="ti-pin-alt"></i>
						<p>Existing Posts</p>
					</a>
				</div>
				<div id="viewBProfile" class="clmn-2 advertiseDetails center-align">
					<a href="#">
						<i class="material-icons">contact_mail</i>
						<p>Inquiries</p>
					</a>
				</div>
				<div id="viewBProfile" class="clmn-2 advertiseDetails center-align">
					<a href="#">
						<i class="material-icons">feedback</i>
						<p>Comments</p>
					</a>
				</div>
				<div id="searchUsers" class="clmn-4 advertiseDetails center-align">
					<a href="#">
						<i class="material-icons">people_outline</i>
						<p>Search Client Users</p>
					</a>
				</div>
			</div>
		</div>
		<div class="nGrid-12" id="test2">
			<div data-aos="fade-up" data-aos-duration="1000" data-aos-anchor-placement="top-center" id="tabGrid" class="nGrid-12">
				<div id="searchFilter" class="clmn-3 searchDetails">
					<h3>Filters</h3>
					<form action="*">
						<p>
							<div class="input-field">
								<select>
									<option value="" disabled selected>Search For</option>
									<option value="1">Jobs</option>
									<option value="2">Services</option>
									<option value="3">Events</option>
									<option value="3">Promotions</option>
								</select>
								<label>Type Of Posting</label>
							</div>
						</p>
						<p>
							<div class="input-field">
								<select>
									<option value="" disabled selected>Before/After</option>
									<option value="1">Before</option>
									<option value="2">After</option>
									<option value="3">Any Time</option>
								</select>
								<label>Time Of Posting</label>
							</div>
						</p>
						<p>
							<div id="datepicker" class="input-field">
								<input id="date" type="text" class="datepicker">
								<label for="Date" class="active">Choose A Date</label>
							</div>
						</p>
						<p>
							<div class="chips chips-placeholder">
								<input class="input" placeholder="Prioritize Tags">
							</div>
						</p>
					</form>


				</div>
				<div id="searchBar" class="clmn-9 searchDetails">
					<h1>Search Postings</h1>
					<div class="input-field">
						<input type="text" id="autocomplete-input" placeholder="Search Postings" class="white grey-text autocomplete">
					</div>
				</div>
				<div id="searchSuggestions" class="clmn-3 searchDetails">
					<p>Trending Searches:</p>
					<ul>
						<li>
							<a href="#">A Trend</a>
						</li>
						<li>
							<a href="#">A Trend</a>
						</li>
						<li>
							<a href="#">A Trend</a>
						</li>
						<li>
							<a href="#">A Trend</a>
						</li>
					</ul>
				</div>
				<div id="userProfile" class="clmn-3 searchDetails center-align">
					<a href="#">
						<i class="material-icons">account_box</i>
						<p>Create Your Personal Profile</p>
					</a>
				</div>
				<div id="searchBusinesses" class="clmn-3 searchDetails ">
					<div class="center-align ">
						<a href="#">
							<i class="material-icons">business_center</i>
							<p>Browse Businesses</p>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="test3" class="nGrid-12">
			<div id="tabGrid" class=" nGrid-12">
				<div class="analyzeGraph clmn-12">
					<div class="">
						<svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
							<use xlink:href="#piechart" mask="url(#piemask)" />
							<text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82
								<tspan font-size="0.2" dy="-0.07">%</tspan>
							</text>
						</svg>
						<svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
							<use xlink:href="#piechart" mask="url(#piemask)" />
							<text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82
								<tspan dy="-0.07" font-size="0.2">%</tspan>
							</text>
						</svg>
						<svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
							<use xlink:href="#piechart" mask="url(#piemask)" />
							<text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82
								<tspan dy="-0.07" font-size="0.2">%</tspan>
							</text>
						</svg>
						<svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
							<use xlink:href="#piechart" mask="url(#piemask)" />
							<text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" dy="0.1">82
								<tspan dy="-0.07" font-size="0.2">%</tspan>
							</text>
						</svg>
					</div>
				</div>
				<div class="clmn-9 analyzeGraph">
					<svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
						<use xlink:href="#chart" />
					</svg>
				</div>
				<div class="clmn-3 analyzeDetails">
					<h1>Data Options</h1>
					<p>
						<input id="" type="checkbox" for="">
						<label>
							<input type="checkbox" />
							<span>Clicks Per Post</span>
						</label>
					</p>
					<p>
						<input id="" type="checkbox" for="">
						<label>
							<input type="checkbox" />
							<span>Views Per Post</span>
						</label>
					</p>
					<p>
						<input id="" type="checkbox" for="">
						<label>
							<input type="checkbox" />
							<span>Post Inquiries</span>
						</label>
					</p>
					<p>
						<input id="" type="checkbox" for="">
						<label>
							<input type="checkbox" />
							<span>Followers</span>
						</label>
					</p>
				</div>
				<div id="analyzeBottom" class="nGrid-12 clmn-12 analyzeDetails">
					<div class="clmn-3">
						<i class="ti-layout-list-thumb"></i>
						<p>View Followers</p>
					</div>
					<div class="clmn-3">
						<i class="material-icons">contact_mail</i>
						<p>View Inquiries</p>
					</div>
					<div class="clmn-3">
						<i class="material-icons">location_on</i>
						<p>Stats By Location</p>
					</div>
					<div class="clmn-3">
						<i class="material-icons">feedback</i>
						<p>See Comments</p>
					</div>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
			<defs>
				<mask id="piemask" maskContentUnits="objectBoundingBox">
					<circle cx=0.5 cy=0.5 r=0.49 fill="white" />
					<circle cx=0.5 cy=0.5 r=0.40 fill="black" />
				</mask>
				<g id="piechart">
					<circle cx=0.5 cy=0.5 r=0.5 />
					<path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)" />
				</g>
			</defs>
		</svg>
		<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 250" style="position: fixed; left: -1000px; height: -1000px;">
			<defs>
				<g id="chart">
					<g id="Gridlines">
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="27.3" x2="468.3" y2="27.3" />
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="66.7" x2="468.3" y2="66.7" />
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="105.3" x2="468.3" y2="105.3" />
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="144.7" x2="468.3" y2="144.7" />
						<line fill="#888888" stroke="#888888" stroke-miterlimit="10" x1="0" y1="184.3" x2="468.3" y2="184.3" />
					</g>
					<g id="Numbers">
						<text transform="matrix(1 0 0 1 485 29.3333)" fill="#888888" font-family="'Roboto'" font-size="9">500</text>
						<text transform="matrix(1 0 0 1 485 69)" fill="#888888" font-family="'Roboto'" font-size="9">400</text>
						<text transform="matrix(1 0 0 1 485 109.3333)" fill="#888888" font-family="'Roboto'" font-size="9">300</text>
						<text transform="matrix(1 0 0 1 485 149)" fill="#888888" font-family="'Roboto'" font-size="9">200</text>
						<text transform="matrix(1 0 0 1 485 188.3333)" fill="#888888" font-family="'Roboto'" font-size="9">100</text>
						<text transform="matrix(1 0 0 1 0 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">1</text>
						<text transform="matrix(1 0 0 1 78 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">2</text>
						<text transform="matrix(1 0 0 1 154.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">3</text>
						<text transform="matrix(1 0 0 1 232.1667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">4</text>
						<text transform="matrix(1 0 0 1 309 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">5</text>
						<text transform="matrix(1 0 0 1 386.6667 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">6</text>
						<text transform="matrix(1 0 0 1 464.3333 249.0003)" fill="#888888" font-family="'Roboto'" font-size="9">7</text>
					</g>
					<g id="Layer_5">
						<polygon opacity="0.36" stroke-miterlimit="10" points="0,223.3 48,138.5 154.7,169 211,88.5
						294.5,80.5 380,165.2 437,75.5 469.5,223.3 	" />
					</g>
					<g id="Layer_4">
						<polygon stroke-miterlimit="10" points="469.3,222.7 1,222.7 48.7,166.7 155.7,188.3 212,132.7
						296.7,128 380.7,184.3 436.7,125 	" />
					</g>
				</g>
			</defs>
		</svg>
		<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
	</div>
</section>

<!-- Modals -->
<script>
function validateFormHire(){
	var go = 1;
	var database = document.getElementById('database_location').value;
	var position = document.getElementById('position').value;
	var wage = document.getElementById('wage').value;
	var contact = document.getElementById('contact_info').value;
	if(!database || database === ""){
		M.toast({html: "Please choose a type!"});
		go = 0;
	}
	if(!position || position === ""){
		M.toast({html: "Position cannot be empty"});
		go = 0;
	}
	if(!wage || wage === ""){
		M.toast({html: "Wage cannot be empty"});
		go = 0;
	}
	if(!contact || contact === ""){
		M.toast({html: "Contact cannot be empty"});
		go = 0;
	}

	var table = document.getElementById('myTable');

	for(var i = 1; i < table.rows.length; i++){

		var tempObject = table.rows[i].cells[1].children;


		if(!tempObject[0].value || tempObject[0].value === ""){
			M.toast({html: "Table value missing!"});
			go = 0;
			i = table.rows.length;
		}

	}
	if(go == 1){
		document.getElementById('myForm').submit();
	}
}
</script>



<div id="formHire" class="modal">
	<div class="modal-content">
		<h2>Looking for Workers</h2>
		<form id="myForm" , action="php/worker.php" , method="post">
			<select name="database_location", id="database_location">
				<option value="" disabled selected>Type</option>
				<option value="worker_hiring">Labor</option>
				<option value="babysitter_hiring">BabySitter</option>
				<option value="culinary_hiring">Cooking Help</option>
				<option value="cleaningService_hiring">Cleaning Services</option>
			</select>
			<br>
			<div class="input-field">
				<input id="position" name="position" type="text" autocomplete="off">
				<label for="position">Position Title</label>
			</div>
			<br>
			<br>
			<table id="myTable">
				<tr>
					<th> Entries</th>
					<th>Notes and Qualifications</th>
				</tr>
				<tr>
					<td>1</td>
					<td>
						<input type="text" , style="width:100%;height:100%;" , name="qual1" autocomplete="off"/>
					</td>
					<td style="visibility:hidden" , id="remove1">
						<li>remove</li>
					</td>
				</tr>
			</table>
			<br>
			<li onclick="add();" , class="btn">add entry</li>
			<br>
			<br>
			<div class="input-field">
				<input id="wage" name="wage" type="text" autocomplete="off">
				<label for="wage">Wages Offered</label>
			</div>
			<br>
			<div class="input-field">
				<input name="contact_info" id="contact_info" type="text" autocomplete="off">
				<label for="contact_info">Contact Info</label>
			</div>
			<br>
			<div class="input-field">
				<textarea id="message" name="notes" class="materialize-textarea" autocomplete="off"></textarea>
				<label for="message">Message</label>
			</div>
			<div style="display:none", id="bCardTemplate1-1">
				<p id="positionLabel1-1">Position</p>
				<p id="wageLabel1-1">Wage</p>
				<p id="contactLabel1-1">###-###-####</p>
				<img src="img/template1.jpg" style="width:100%">
			</div>
			<div style="display:none", id="bCardTemplate1-2">

				<p id="positionLabel1-2">Position</p>
				<p id="wageLabel1-2">Wage</p>
				<p id="contactLabel1-2">###-###-####</p>
				<p> lol1</p>
			</div>

			<div style="display:none", id="bCardTemplate1-3">

				<p id="positionLabel1-3">Position</p>
				<p id="wageLabel1-3">Wage</p>
				<p id="contactLabel1-3">###-###-####</p>
				<p> lol2</p>

			</div>

			<div style="display:none", id="templatelist1">
				<li style="display:inline", class="btn", onclick="changeTemplate(1);">1</li>
				<li style="display:inline", class="btn", onclick="changeTemplate(2);">2</li>
				<li style="display:inline", class="btn", onclick="changeTemplate(3);">3</li>
			</div>



			<div class="input-field", id="generateBtn">
				<div class="valign-wrapper">
					<div class="btn waves-effect waves-light", onclick="generateTemplate();this.innerHTML='Update Template';">Generate Template
					</div>
				</div>
			</div>

			<script>
			var currentTemplate = 1;

			function generateTemplate(){

				var object = document.getElementById('bCardTemplate1-'+ currentTemplate);
				var position = document.getElementById('positionLabel1-'+ currentTemplate).value;
				var wage = document.getElementById('wageLabel1-' + currentTemplate).value;
				var contact = document.getElementById('contactLabel1-' + currentTemplate).value;

				for(var i = 1; i < 4; i++)
				{
					if(i != currentTemplate){
						document.getElementById('bCardTemplate1-'+i).style.display="none";
					}
				}
				object.style.display="inline";
				object.style.height="10em";
				object.style.width="100%";

				document.getElementById('templatelist1').style.display="inline";

				if(position !== "" && position){
					alert();
					document.getElementById('positionLabel1-'+currentTemplate).innerHTML = position;
				}
				else{

					document.getElementById('positionLabel1-'+currentTemplate).innerHTML = "Position"+currentTemplate;
				}
				if(wage !== "" && wage){
					document.getElementById('wageLabel1-'+currentTemplate).innerHTML = wage;
				}
				else{
					document.getElementById('wageLabel1-'+currentTemplate).innerHTML = "Wage";
				}
				if(contact !== "" && contact){
					document.getElementById('contactLabel1-'+currentTemplate).innerHTML = contact;
				}
				else{
					document.getElementById('contactLabel1-'+currentTemplate).innerHTML = "###-###-####";
				}
			}
			function changeTemplate(num){

				currentTemplate = num;
				generateTemplate();
			}
			</script>

			<div class="input-field">
				<div class="valign-wrapper">
					<div class="btn waves-effect waves-light", onclick="validateFormHire()">Submit
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="modal-footer">
		<a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
	</div>
</div>

<script>
function validateRoomForm(){
	var go = 1;
	var location = document.getElementById('Location').value;
	var description = document.getElementById('description').value;
	var price = document.getElementById('price').value;
	var pnum = document.getElementById('PhoneNumber').value;
	var email = document.getElementById('email').value;

	if(!location || location === ""){
		go = 0;
		M.toast({html: "Location cannot be empty"});
	}
	if(!description || description === ""){
		go = 0;
		M.toast({html: "Description cannot be empty"});
	}
	if(!price || price == ""){
		M.toast({html: "Price cannot be empty"});
		go = 0;
	}
	if((!pnum || pnum === "") && (!email || email === "")){
		go = 0;
		M.toast({html: "At least one contact info please!"});
	}
	if(go == 1){
		document.getElementById('RoomForm').submit();
	}

}



</script>


<div id="formService" class="modal">
	<div class="modal-content">
		<h2>Room for Rent</h2>
		<form id="RoomForm" action="php/renting_room_registration.php", method="post", enctype="multipart/form-data">

			<div class="input-field">
				<input id="Location" name="Location" type="text" autocomplete="off">
				<label for="Location">Location</label>
			</div>
			<br>

			<div class="input-field">
				<textarea type="text", name="description", autocomplete="off" form="RoomForm", class="materialize-textarea" id = "description"></textarea>
				<label for="description", style="left:0.5%;">Description</label>
			</div>
			<br>
			<div class="input-field">
				<input name="price" id="price" type="text" autocomplete="off">
				<label for="price">Price</label>
			</div>
			<br>
			<div class="input-field">
				<input name="PhoneNumber" id="PhoneNumber" type="text" autocomplete="off">
				<label for="PhoneNumber">Phone-Number</label>
			</div>
			<br>
			<div class="input-field">
				<input name="email" id="email" type="text" autocomplete="off">
				<label for="email">Email</label>
			</div>
			<br>
			<div class="input-field">
				<textarea id="notes" name="notes" class="materialize-textarea" autocomplete="off", form="RoomForm"></textarea>
				<label for="notes">Message</label>
			</div>


		</form>
		<form>
			<div class="file-field input-field">
				<div style="width: 10%"class="btn">
					<div class="valign-wrapper">
						<span>File</span>
						<input type="file", onchange="clone()" id="cloneNode", name="fileToUpload"/>
					</div>
				</div>
				<div class="file-path-wrapper">
					<input class="file-path validate" type="text">
				</div>
			</div>


			<br>
			<div class="input-field">
				<div class="valign-wrapper">
					<button type="button" class="btn waves-effect waves-light" onclick="validateRoomForm()">Submit
					</button>
				</div>
			</div>

		</form>

		<script>
		var count = 1;
		function clone(){

			var copy = document.getElementById('cloneNode').cloneNode(true);
			copy.name = "fileToUpload" + count;
			copy.removeAttribute('id');
			copy.style.display="none";
			count++;
			document.getElementById('RoomForm').appendChild(copy);


		}


		</script>

		<div class="modal-footer">
			<a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
		</div>
	</div>
</div>

<footer>
	<hr>
	<p>Copyright &copy; 2018</p>
</footer>
</body>



<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
var floatactbtn = document.querySelectorAll('.fixed-action-btn');
M.FloatingActionButton.init(floatactbtn, {});

//AOS
AOS.init({
	once: false,
});
//Sidenav
M.AutoInit();

//autocomplete
const ac = document.querySelector('.autocomplete');
M.Autocomplete.init(ac, {
	data: {
		"Room For Rent": null,
		"Car Repair": null,
		"Moving Services": null,
	}
})

//forms

var index = 2;
var table = document.getElementById("myTable");
function add() {
	if (index <= 15) {
		var row = table.insertRow(index);
		row.innerHTML = "<td>" + index + "</td>";
		row.innerHTML += "<td><input type='text', style='width:100%;height:100%;'/></td>"
		row.innerHTML += "<td onclick='remove(this)'> <button id='removebtn' class='btn red'><span class='removeitem'>remove</span></button></td>";
		index++;
		for (var i = 1; i < index; i++) {
			table.rows[i].cells[0].innerHTML = i;
			table.rows[i].cells[1].getElementsByTagName('input')[0].name = "qual" + i;
		}
	}
}
function remove(ele) {
	ele.parentNode.remove();
	index--;
	for (var i = 1; i < index; i++) {
		table.rows[i].cells[0].innerHTML = i;
		table.rows[i].cells[1].getElementsByTagName('input')[0].name = "qual" + i;
	}
}


</script>

</html>
