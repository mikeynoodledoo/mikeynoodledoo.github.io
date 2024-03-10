<?php
    session_start();
    if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === "yes"){
        header("Location: home.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
	<head>
        <title>PRDYB - Login</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="initial-scale=1, width=device-width"/>
		<link rel="stylesheet" href="./global.css"/>
		<link rel="stylesheet" href="./log-reg.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin Sans:wght@400&display=swap"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Just Another Hand:wght@400&display=swap"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Kodchasan:wght@400&display=swap"/>
	</head>
	<body>
	<?php
           if(isset ($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
                require_once "database.php";
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $users = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                if ($users) {
                    if(password_verify($password, $users["password"])) {
                       echo "<div class = 'alert alert-success'> You are now logged in successfully! </div>";
                       echo '<script> setTimeout(() => window.location.href = "home.php", 3000); </script>';
                      $_SESSION["curr_email"] = $email;
                      $logged_email = $_SESSION["curr_email"];
                      
                       $_SESSION["logged_in"] = "yes";
                       exit();
                } else {
                    echo "<div class= 'alert alert-danger'> Password does not match </div>";
                }
            } else {
                echo "<div class= 'alert alert-danger'> Email does not match </div>";
                }
            }

        ?>
		<div class="topContainer">
			<section class="mainContainer">
				<div id="details" class="detailsContainer"  >
					<div >
                    <form id="loginForm" action="login.php" method="post" class="userInformation">
                        <div class="titleTextbox">
                            <label for="email">Email:</label>
                            <input type="email" name="email" class= "inputBox" required>
                        </div>
                        
                        <div class="titleTextbox">
                            <label for="password">Password:</label>
                            <input type="password" name="password" class= "inputBox" required>
                        </div>
                        
                        <div class="titleTextbox">
                            <label for="login"></label>
                    <input type="submit" value="Login" name="login" id="registerBtn">
                        </div>
                    </form>
                    <div><p>Not Registered yet? <a href="index.php"> Register</a></p></div>
                </div>
                </div>
	
				<div class="titleContainer">
					<h1 class="prdyb">PRDYB</h1>
					<div class="regLabel">
						<h3 class="regLabel">Login</h3>
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
