<!DOCTYPE html>
<html lan="en">
<head>

	<meta charset="utf-8">
	<title>Sharewheels | Book and Give Rides</title>

	<!-- Import External files -->
	<link rel="stylesheet" href="./assets/css/index.css">


	<!-- Import google fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono&family=Nunito:wght@300;400&family=Open+Sans&family=Russo+One&display=swap" rel="stylesheet">

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/f7187ce1e1.js" crossorigin="anonymous"></script>
</head>

<body>
	<div class="navbar">
		<div id="background"></div>
		<div class="container">
			<p id="logo">Share <span>Wheels</span></p>
			
			<div class="links">
				<a id="current" href="./index.php">HOME</a>
				<a href="./about.php">ABOUT US</a>
				<div id="givetake-buttons">
					<div id="button-container">
						<a href="./bookride.php">BOOK</a>
						<a href="./giveride.php">GIVE</a>
					</div>
					<p>RIDE</p>
				</div>
				<a href="./faq.php">HELP</a>
			</div>
			<div class="login">
				<a href="signup.php">Login<span><i class="fas fa-chevron-down"></i></span></a>
				<div class="login-menu">
					<p> Don't have accout? create one</p>
					<a href="signup">Create Account</a>
				</div>
			</div>
		</div>
	</div>

	

	<div class="wallpaper">
		
		<ul class="slideshow">
			<li><div></div></li>
		    <li><div></div></li>
			<li><div></div></li>
			<li><div></div></li>
			<li><div></div></li>
		</ul> 
		<p id="message">Just Search, Choose and Go</p>
		<div class="search-bar">
			<div id="places">
				<input type="search" placeholder="Search for places..." onclick="function1()">
			</div>
			<div id="datetime">
				<span class="datepicker-toggle-button"><i class="fas fa-calendar-alt"></i></span>
				<input type="date" onclick="function1()">
			</div>
			<button><i class="fas fa-search"></i></button>			
			
		</div>
	</div> 

	<div class="features">
		<p id="heading">ShareWheels Features</p>
		<div class="list">
			<div id="list-item">
				<p id="head">Low. Lowest Price</p>
				<p id="body">
					Pick price for yourself and compare which takes you to your route at Lowest
					price. With Sharewheels you have absolute control over you ride.
				</p>
			</div>

			<div id="list-item">
				<p id="head">Tust and Security</p>
				<p id="body">
					With Sharewheels you an know which driver is most trusted to be with at first
					place. Sharewheels has a trust level which builds the trust for a driver.
				</p>
			</div>

			<div id="list-item">
				<p id="head">Customizeable Rides</p>
				<p id="body">
					Sharewheels allow you to find your type of ride. Eithere is Two wheelers, Four
					or even five! we got you covered. With sharewheels you can select which type of
					ride you want.
				</p>
			</div>

			<div id="list-item">
				<p id="head">Community Driven</p>
				<p id="body">
					ShareWheels is Community Driven. You can also be a part of one. Communities help
					us to build and bring together.
				</p>
			</div>
		</div>
	</div>

	<!-- Poster -->
	<div class="poster">
		<img src="./assets/img/poster.png">
		<p>Build Around Community.
			<br>
			<a href="https://discord.gg/J4HgxqPBVe"><button>Click to join one.</button></a>
		</p>
	</div>
   <style>
	button{
		text-align: center;
		background-color: brown;
		font-family: 'Courier New', Courier, monospace;
		color: aqua;
		position: absolute;
		left: 26%;
		top: 99%;
		padding: 10px;
		font-size: large;
	}
   </style>

	<!-- About -->
	<div class="about">
		<p id="logo">Share <span>Wheels</span></p>
		<p id="body">
			ShareWheels is not just a organization but a individual will for social work to help
			those in need. Do I need to write more about It here? 'cauze I dont know much about 
			it. Better If you do it.
		</p>
	</div>

	
	<!-- Reviews -->
	<div class="reviews">
		<p id="heading">Read Reviews from our Users</p>
		<div class="item-list">
			<div class="review-item fade-item">
				<img src="./assets/img/reviews/1.jpg">
				<p id="body"><span>User Name</span>Review of "User Name". and its good.</p>
			</div>

			<div class="review-item fade-item">
				<img src="./assets/img/reviews/2.jpg">
				<p id="body"><span>User Name</span>Review of "User Name". and its good.</p>
			</div>

			<div class="review-item fade-item">
				<img src="./assets/img/reviews/3.jpg">
				<p id="body"><span>User Name</span>Review of "User Name". and its good.</p>
			</div>

			<button id="button-left" onclick="nextEvent(-1)"><i class="fas fa-chevron-left"></i></i></button>
			<button id="button-right" onclick="nextEvent(1)"><i class="fas fa-chevron-right"></i></button>

		</div>
	</div>


	<!-- Footer -->
	<div class="footer">
		<div class="left">
			<div class="links">
				<div id="links-row">
					<p id="head">About</p>
					<a href="about">About</a>
					<a href="help">Orignals</a>
					<a href="help">Documentation</a>
				</div>

				<div id="links-row">
					<p id="head">Navigation</p>
					<a href="about">Sharewheels</a>
					<a href="help">Contacts</a>
					<a href="help"></a>
				</div>

				<div id="links-row">
					<p id="head">Help</p>
					<a href="about">Help Manual</a>
					<a href="help">How to Booka Ride?</a>
					<a href="help">Documentation</a>
				</div>
			</div>
		</div>

		<div class="right">
			<div id="moto">
				<p>Drives that Matter.</p>
				<p>Riders that Support.</p>
				<p>People that Connect.</p>
			</div>
			<div id="socialmedia">
				<a href="https://www.instagram.com/sharewheels_/"><i class="fab fa-instagram"></i></a>
				<a href="https://www.bing.com/ck/a?!&&p=6edb7e9714a23654JmltdHM9MTcwMzQ2MjQwMCZpZ3VpZD0xYzI5MzkzOS1lOGRiLTY5YjUtMDQ5Ni0yYWNiZTkyZTY4ZGUmaW5zaWQ9NTE3NA&ptn=3&ver=2&hsh=3&fclid=1c293939-e8db-69b5-0496-2acbe92e68de&psq=twitter+sharewheels&u=a1aHR0cHM6Ly90d2l0dGVyLmNvbS9zaGFyZXdoZWVsc18&ntb=1"><i class="fab fa-twitter"></i></a>
				<a href="https://discord.gg/J4HgxqPBVe"><i class="fab fa-discord"></i></a>
			</div>
		</div>
	</div>
	<div class="footer-end">
		<p>Copyright @ShareWheels 2023 </p>
	</div>

	<script src="./assets/js/index.js"></script>
   
		<script>
window.embeddedChatbotConfig = {
chatbotId: "5tkGmuYKE-xp776hBEbTS",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="5tkGmuYKE-xp776hBEbTS"
domain="www.chatbase.co"
defer>
</script>
	
</body>
</html>
