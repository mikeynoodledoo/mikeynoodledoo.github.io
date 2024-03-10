<?php
session_start();
if (!isset($_SESSION["logged_in"])) {
    header("Location: home.php");
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
				<div id="details" class="detailsContainer"  >
					
					
				</div>
				<div class="titleContainer">
					<h1 class="prdyb">PRDYB</h1>
					<div class="regLabel">
						<h3 class="regLabel">Home</h3>
					</div>
					<img class="titlePic" loading="lazy" alt="" src="./images/silhouette.png"/>
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
</html>