<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: login.php");
    exit(); //  exit() after header redirect to prevent loop
} else {
    $curr_email = $_SESSION["curr_email"];
    
    
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>PRDYB - Home</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="initial-scale=1, width=device-width"/>
		<link rel="stylesheet" href="./global.css"/>
		<link rel="stylesheet" href="./log-reg.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin Sans:wght@400&display=swap"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Just Another Hand:wght@400&display=swap"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@400&display=swap"/>
	</head>
	<body>
		<div class="topContainer">
			<section class="mainContainer">
				<ul>
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="work.php">Work Profile</a>
					</li>
					<li>
						<a href="contact.asp">Links</a>
					</li>
				</ul>
				<div class="titleContainer">
					<div class="regLabel">
						<h1 class="prdyb">PRDYB</h1>
						<h3>Home</h3>
						<div class="aboutMe">
						<h2>Something about Me </h2>
						
						<img class="mePic" loading="lazy" alt="" src="./images/me.png"/>
						<p class="paraWPic">
						    
 Hi, I'm Mike, and this website is about me. I'm an IT student, with a keen interest in programming. This page is mostly a practice of my HTML and CSS skills, as well as a few applications of JavaScripting here and there. </p> <p> From a young age, I've been fascinated by anything computer-related - video games, websites, operating systems, even just how the operating system worked - and over the years, I've slowly pursued IT and honed my skills in web and app programming. With anything related in this field, I'm always excited to dive deep and explore new ideas. </p>
						<h2> What I Do</h2>
<p>I'm a second year college student currently taking an IT course with a specialization in mobile and internet technology.  Currently, I'm taking my second term in NU Fairview, where I have studied for a year and a half by now.Additionally, I'm always working on personal projects that allow me to enjoy the other sides of my life, away from work and less stressful.</p>
						
						</div>
					</div>
				</div>
				<div id="details" class="detailsContainer">
					<div class="regLabel">
					
						<div class="aboutMe">
						<h2>Things I Like</h2>
						<p class="paraWPic">
						     When I'm not coding, I do music. I produce and mainly play the drums, even performed in a band a few years ago and released some music on my own. Apart from that, I'm a gamer at heart. It's what sparked my interest in the first place back when I got my first PC as a kid. Ever since then, it just became a natural part of my life. </p>
						<img class="titlePic" loading="lazy" alt="" src="./images/silhouette2.png"/>
						
						    
 <p>I'm not just all work and leisure, too. I'm a big fan of video essays and documentaries. There's not a day that goes by that I don't watch anything related to my interests or anything intriguing to me. As with everything else taking up the majority of my time, these help me expand my horizons onto different aspects of my life. </p>
						</div>
					</div>
					
					
				</div>
									</section>
									<footer class="footerDiv">
										<div class="background-frame-child"/>
										<div class="p-r-d-y-b-label">
											<h1 class="prdyb1">PRDYB</h1>
										</div>
										<div class="ctfu-copyright">CTFU - Copyright Limited cc.</div>
									</footer>
								</div>
							</body>
							<script>
    document.getElementById("logout").addEventListener("click", function() {
		window.location.href = "logout.php";
	});
    </script>
						</html>
