<!DOCTYPE html>
<html lan="en">
<head>

	<meta charset="utf-8">
	<title>Sharewheels | Book and Give Rides</title>

	<!-- Import External files -->
	<link rel="stylesheet" href="./assets/css/index.css">
	<link rel="stylesheet" href="./assets/css/bookride.css">


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
                <a href="./index.php">HOME</a>
				<a href="./about.php">ABOUT US</a>
				<div id="givetake-buttons">
					<div id="button-container">
						<a id="current" href="./bookride.php">BOOK</a>
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


    <!-- Input Bar -->
	<div class="wallpaper">
		<img src="./assets/img/bookride-wallpaper.png">
        <p id="message">Book Yourself a Ride.</p>
	</div>


    <!-- Results Fields -->
    <div class="result-tab">

        <div class="left-tab">
            <div class="search-bar">
                <input type="search" placeholder="Search for places..." style="width: 300px;" onclick="function1()">
                <button><i class="fas fa-search"></i></button>
            </div>
            <p id="head">Short By</p>
            <div class="price">
                <input id="range-slider" type="range">
                <div id="price-range">
                    <input value="100">
                    <input value="999">
                </div>
            </div>
        </div>

        <div class="right-tab">
            <p id="heading">Results:</p>
            <div class="item">
                <div class="left">
                    <img src="./assets/img/users/1.png">
                    <p id="name">Harish Kashyap</p>
                    <p id="user-points"><i class="fas fa-star"></i> <span>20</span></p>
                    <a href="https://wa.me/9909099909" target="_blank" id="message"><i class="fab fa-whatsapp"></i></a>
                </div>

                <div class="right">
                    <div class="destination">
                        <p id="from">Samba<span>19:00</span></p>
                        <p><i class="fas fa-arrow-right"></i> </p>
                        <p id="to">Vijaypur<span>20:00</span></p>
                    </div>

                    <p id="price">Price: <span>20.00$</span></p>

                    <div class="bottom">
                        <p id="vehicle-type">Type: <span>Car</span></p>
                        <p id="vehicle-number">JK21A25</p>
                        <p id=""></p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="left">
                    <img src="./assets/img/users/2.png">
                    <p id="name">Saksham Jamwal</p>
                    <p id="user-points"><i class="fas fa-star"></i> <span>8</span></p>
                    <a href="https://wa.me/9909099909" target="_blank" id="message"><i class="fab fa-whatsapp"></i></a>
                </div>

                <div class="right">
                    <div class="destination">
                        <p id="from">Samba<span>19:00</span></p>
                        <p><i class="fas fa-arrow-right"></i> </p>
                        <p id="to">Vijaypur<span>20:00</span></p>
                    </div>

                    <p id="price">Price: <span>18.00$</span></p>

                    <div class="bottom">
                        <p id="vehicle-type">Type: <span>Bike</span></p>
                        <p id="vehicle-number">JK02A325</p>
                        <p id=""></p>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="left">
                    <img src="./assets/img/users/3.png">
                    <p id="name">Nitish</p>
                    <p id="user-points"><i class="fas fa-star"></i> <span>20</span></p>
                    <a href="https://wa.me/9909099909" target="_blank" id="message"><i class="fab fa-whatsapp"></i></a>
                </div>

                <div class="right">
                    <div class="destination">
                        <p id="from">Jammu<span>15:00</span></p>
                        <p><i class="fas fa-arrow-right"></i> </p>
                        <p id="to">Kathua<span>20:00</span></p>
                    </div>

                    <p id="price">Price: <span>50.00$</span></p>

                    <div class="bottom">
                        <p id="vehicle-type">Type: <span>Car</span></p>
                        <p id="vehicle-number">JK212225</p>
                        <p id=""></p>
                    </div>
                </div>
            </div>

            </div>
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
				<a href="link to insta"><i class="fab fa-instagram"></i></a>
				<a href="link to twritter"><i class="fab fa-twitter"></i></a>
				<a href="link to discord"><i class="fab fa-discord"></i></a>
			</div>
		</div>
	</div>
	<div class="footer-end">
		<p>Copyright 2023 and that C icon.</p>
		<a href="IDK">Terms and Conditions</a>
	</div>
    <script id="messenger-widget-b" src="https://cdn.botpenguin.com/website-bot.js" defer>6573fd8491144160ce314cc4,6573fd21478d273f284ecb90</script>
</body>
</html>