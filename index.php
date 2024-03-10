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
	    <title>PRDYB - Registration</title>
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
    //validate the submit button
    if(isset($_POST["Register"])){
        $LastName = $_POST["lName"];
        $FirstName = $_POST["fName"];
        $Phone = $_POST["num"];
        $Country = $_POST["country"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $RepeatPassword = $_POST["confirmPass"];
        $Score = 0;

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $errors = array();
    // validate if all fields are empty
        if (empty($LastName) OR empty($FirstName) OR empty($email) OR empty($password) OR empty($RepeatPassword)) {
            array_push ($errors, "All fields are required");
        }
    //validate if the email is not validated
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) ){
            array_push($errors, "Email is not valid");
        }
    // password should not be less than 8
        if(strlen($password) <8) {
            array_push ($errors, "Password must be at least 8 characters long");
        }
    // check if password is the same
        if($password!= $RepeatPassword){
            array_push ($errors, "Password does not match");
        }
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE Email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
            array_push($errors, "Email Already Exist!");
        }

        if (count($errors)>0){
            foreach($errors as $error) {
                echo"<div class='alert alert-danger'>$error</div>";
                }
            }else {
                echo '<script>console.log("registration successful");</script>';
                require_once "database.php";
                $sql = "INSERT INTO users (LastName, FirstName, Phone, Country, email, password) VALUES (?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
               $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                if ($preparestmt){
                    mysqli_stmt_bind_param($stmt, "ssssss", $LastName, $FirstName, $Phone, $Country, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
					echo "<div class = 'alert alert-success'> You are now registered Successfully! </div>";
					echo '<script> setTimeout(() => window.location.href = "login.php", 3000); </script>';
					
					die();
                 } else {
                    die("Something went wrong");
                }
            }
        }
    ?>
		<div class="topContainer">
			<section class="mainContainer">
				<div id="details" class="detailsContainer"  >
					<div  >
<form id="registrationForm" action="index.php" method="post" class="userInformation" >
						<div class="titleTextbox">
							<label  for="fName">First Name:</label>
							<input class="inputBox" type="text" id="fName" name="fName">
						</div>
						
						<div class="titleTextbox">
							<label  for="lName">Last Name:</label>
							<input class="inputBox" type="text" id="lName" name="lName">
						</div>
						
						<div class="titleTextbox">
							<label  for="num">Phone Number:</label>
							<input class="inputBox" type="text" id="num" name="num">
						</div>
						
						<div class="titleTextbox">
							<label  for="country">Country:</label>
							<input class="inputBox" type="text" id="country" name="country">
						</div>
						
						<div class="titleTextbox">
							<label  for="email">Email:</label>
							<input class="inputBox" type="text" id="email" name="email">
						</div>
						
						<div class="titleTextbox">
							<label  for="password">Password:</label>
							<input class="inputBox" type="password" id="password" name="password">
						</div>
						
						<div class="titleTextbox">
							<label  for="confirmPass">Confirm Password:</label>
							<input class="inputBox" type="password" id="confirmPass" name="confirmPass">
						</div>
						<div class="titleTextbox">
							<input type="submit" id="registerBtn" name="Register" value="Register" placeholder="submit">
						</div>
						</form>
						<div><p>Already registered? <a href="login.php">Login</a></div>
					</div>
					
				</div>
				<div class="titleContainer">
					<h1 class="prdyb">PRDYB</h1>
					<div class="regLabel">
						<h3 class="regLabel">Registration</h3>
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
