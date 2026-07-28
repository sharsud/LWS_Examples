<!DOCTYPE HTML>
<html>
<head>
    <title>Registration - Learn with Psudo | Python, Automation & Selenium Tutorials</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../images/logo.ico" />
	<link rel="icon" href="../images/logo.ico" type="image/x-icon"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="../assets/css/main.css" />
    <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    <script>
    function openPopup(name) {
        document.getElementById("popupMessage").innerText = `Hello, ${name}!`;
        document.getElementById("namePopup").style.display = "block";
        document.getElementById("overlay").style.display = "block";
    }

    function closePopup() {
        document.getElementById("namePopup").style.display = "none";
        document.getElementById("overlay").style.display = "none";
    }
</script>

</head>
<body class="landing">
    <div id="page-wrapper">
	<?php
	include "../includes/generic_header.php";
	?>
	<article id="main">
		<header>
			<h2>Selenium Demo </h2>
			<p>Use this as a practice area for web elements interactionss</p>
		</header>
		<section class="wrapper style5">
			<div class="inner">
					<div style="display: flex; justify-content: space-between; align-items: center;">
                        <h2>Student Registration</h2>
                        <div>
                            <a href="#" class="button small" onclick="openPopup('Guest')">Hello, Guest</a>
                            <a href="#" class="button small" onclick="openPopup('Psudo')">Hello, Psudo</a>
                            <a href="#" class="button small" onclick="openPopup('Admin')">Hello, Admin</a>
                        </div>
                    </div>

                    <!-- Popup Modal -->
                    <div id="namePopup" class="modal" style="display:none; position:fixed; top:30%; left:50%; transform:translate(-50%,-50%); background:white; padding:20px; box-shadow:0px 0px 10px rgba(0,0,0,0.4); z-index:999;">
                        <p id="popupMessage">Hello!</p>
                        <button onclick="closePopup()" class="button small">Close</button>
                    </div>
                    <div id="overlay" style="display:none; position:fixed; top:0; left:0; height:100vh; width:100vw; background:rgba(0,0,0,0.4); z-index:998;" onclick="closePopup()"></div>

          
					<form id="registrationForm" name="registrationForm" method="post" action="#">
					<div class="fields">

					  <!-- First & Last Name (two half-width fields) -->
					  <div class="field half">
						<label for="firstName">First Name</label>
						<input type="text" id="firstName" name="first_name" placeholder="Enter first name" />
					  </div>
					  <div class="field half">
						<label for="lastName">Last Name</label>
						<input type="text" id="lastName" name="last_name" placeholder="Enter last name" />
					  </div>

					  <!-- Email & Password (two half-width fields) -->
					  <div class="field half">
						<label for="emailAddress">Email Address</label>
						<input type="email" id="emailAddress" name="email" placeholder="your@email.com" />
					  </div>
					  <div class="field half">
						<label for="password">Password</label>
						<input type="password" id="password" name="user_password" placeholder="Minimum 8 characters" />
					  </div>

					  <!-- Date of Birth & Gender Radios -->
					  <div class="field half">
						<label for="dob">Date of Birth</label>
						<input type="date" id="dob" name="dob" />
					  </div>
					  <div class="field half">
						<label>Gender</label>
						<div class="fields">
						  <div class="field quarter">
							<input type="radio" id="genderMale" name="gender" value="male" />
							<label for="genderMale">Male</label>
						  </div>
						  <div class="field quarter">
							<input type="radio" id="genderFemale" name="gender" value="female" />
							<label for="genderFemale">Female</label>
						  </div>
						  <div class="field quarter">
							<input type="radio" id="genderOther" name="gender" value="other" />
							<label for="genderOther">Other</label>
						  </div>
						</div>
					  </div>

					  <!-- Country (select) & Short Bio (textarea) -->
					  <div class="field half">
						<label for="country">Country</label>
						<select id="country" name="country">
						  <option value="">– Select Country –</option>
						  <option value="netherlands">Netherlands</option>
						  <option value="germany">Germany</option>
						  <option value="india">India</option>
						</select>
					  </div>
					  <div class="field half">
						<label for="bio">Short Bio</label>
						<textarea id="bio" name="bio" rows="3" placeholder="Tell us about yourself…"></textarea>
					  </div>

					  <!-- Skills (checkboxes) -->
					  <div class="field">
						<label>Skills</label>
						<div class="fields">
						  <div class="field quarter">
							<input type="checkbox" id="skillPython" name="skills" value="python" />
							<label for="skillPython">Python</label>
						  </div>
						  <div class="field quarter">
							<input type="checkbox" id="skillJava" name="skills" value="java" />
							<label for="skillJava">Java</label>
						  </div>
						  <div class="field quarter">
							<input type="checkbox" id="skillSelenium" name="skills" value="selenium" />
							<label for="skillSelenium">Selenium</label>
						  </div>
						  <div class="field quarter">
							<input type="checkbox" id="skillJS" name="skills" value="javascript" />
							<label for="skillJS">JavaScript</label>
						  </div>
						</div>
					  </div>

					  <!-- Profile Picture Upload -->
					  <div class="field">
						<label for="profilePic">Upload Profile Picture</label>
						<input type="file" id="profilePic" name="profile_pic" />
					  </div>

					  <!-- Agree to Terms (checkbox) -->
					  <div class="field">
						<input type="checkbox" id="agreeTerms" name="terms" />
						<label for="agreeTerms">I agree to the 
						  <a href="" id="termsLink" onclick="alert('Link Clicked ✅')">terms and conditions</a>
						</label>
					  </div>

					</div> <!-- /.fields -->

					<!-- Actions (Submit & Reset) -->
					<ul class="actions">
					  <li><button type="submit" id="submitBtn" class="button primary">Register</button></li>
					  <li><button type="reset" id="resetBtn" class="button">Reset</button></li>
					</ul>

					<!-- Login Link -->
					<p>Already registered? 
					  <a href="https://examples.learnwithpsudo.com/pages/login.php" id="loginLink">Click here to log in</a> OR <a href="https://examples.learnwithpsudo.com/pages/login.php" id="loginLink">Log In</a>
					</p>

				</form>
			</div>
		</section>
	</article>
<?php
include "../includes/generic_footer.php";
?>