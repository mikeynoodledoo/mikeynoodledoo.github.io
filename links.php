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
		<title>PRDYB - Social Media Links</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="initial-scale=1, width=device-width"/>
		<link rel="stylesheet" href="./global.css"/>
		<link rel="stylesheet" href="./links.css"/>
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
				
                <div class="titleHead" style="
    text-align: center;
">
    <span style="
    font-size: 65px;
    font-family: var(--font-just-another-hand);
">Links</span> <br>
    <img src="./images/silhouette2.png" style="
    width: 309px;
">
				 <div class="linksContainer">

        <div class="links"> 
    
            <a class="ref" href="https://www.facebook.com/prodyboo" target="_blank">
                <img class="pngs" src="./links/fb.png" alt="Michael Manuel">
                
            </a>
    
            <a class="ref" href="https://twitter.com/prdybb" target="_blank">
                <img class="pngs" src="./links/twt.png" alt="prdybb(@prdybb)">
            </a>
        
            <a class="ref" href="https://www.instagram.com/prdyb/" target="_blank">
                <img class="pngs" src="./links/ig.png" alt="prdyb(@prdyb)">
            </a>
            
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