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
		<title>PRDYB - Education</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="initial-scale=1, width=device-width"/>
		<link rel="stylesheet" href="./global.css"/>
		<link rel="stylesheet" href="./work.css"/>
		<link rel="stylesheet" href="./home.css"/>
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
						<a href="work.php">Education</a>
					</li>
					<li>
						<a href="links.php">Links</a>
					</li>
					<li class="logoutLi" id="logout">
					<a class="LOtxt">	Logout</a>
					</li>
				</ul>
				
				<div class="titleContainer">
					<div class="regLabel" style="margin-left: 13%;margin-right: 3%;">
						<h1 class="prdyb">PRDYB</h1>
						<h3>Work Profile</h3>
                        <h2>Education</h2>
						<div class="education">
<img class="mePic" src="./images/smccs.png">
<p class="paraWPic"> My first school, I went to Sisters of Mount Carmel for 10 years, from nursery until Grade 6 when I graduated to high school. During my stay there, I learned a lot of sports which I still play to this day, most notably volleyball, badminton, and chess. My years there shaped me to who I was initially, a meek and quiet kid learning the ropes of the world.</p>
<hr>
    <img class="mePic" src="./images/fs.png" style="float:right;margin-left: 30px;">
<p class="paraWPic"> After graduating, I entered Falcon School and studied there for 6 years, from Grade 7 to Grade 12. This is where I solidified who I was as I grew up. I met more people, experienced more things, and I grew out of my shell. I was no longer the quiet, meek kid that I was when I entered Falcon School. I took STEM for my senior high school years as I was intending to take up IT in college. Studying became harder due to the pandemic, but I came out of it prepared for the new normal that was ahead of everybody.</p>                            
                            </div><hr>
                           <img class="mePic" src="./images/nu.png">
<p class="paraWPic"> And now, I am currently taking Information Technology in National University Fairview, for about a year and a half now. I'm learning more and more about my passsion for programming and, even though it's tough sometimes with adjusting to the crunch with work, I make do and got Dean's Lister a couple of time in my first year.</p>                            
                            </div>
                            
                            
    
                            
                        </div>
					
				</section>
        <footer class="footerDiv">
										<div class="background-frame-child">
										<div class="p-r-d-y-b-label">
											<h1 class="prdyb1">PRDYB</h1>
										</div>
										<div class="ctfu-copyright">CTFU - Copyright Limited cc.</div>
									</div></footer></div>
				
               
									
									
								
							
							<script>
    document.getElementById("logout").addEventListener("click", function() {
		window.location.href = "logout.php";
	});
	
    </script>
						</body>
							<script>
    document.getElementById("logout").addEventListener("click", function() {
		window.location.href = "logout.php";
	});
	
    </script>
						</html>