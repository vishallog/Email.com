
<?php

// if email is not empty, set a cookie of email with post function
if(!empty($_POST["v_userEmail"]))
    setcookie("v_userEmailCookie", $_POST["v_userEmail"], time() +(86400 * 30), "/");

// if password is not empty, set a cookie of password with post function
if(!empty($_POST["v_userPassword"]))
    setcookie("v_userPasswordCookie", $_POST["v_userPassword"], time()+ (86400 * 30), "/");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" href="SCSS.css">
</head>
<body>
    <?php
    $emailErr = $passwordErr = $email = $password = " ";
    $redic = true;

    // using POST
    if($_SERVER ["REQUEST_METHOD"] == "POST"){

        // if email is empty, request it and set redirect to false
        if(empty($_POST["v_userEmail"])){
            $emailErr = "E-Mail is requird";
            $redic = false;
        }

        // if password is empty, request it and set redirect to false
        if(empty($_POST["v_userPassword"])){
            $passwordErr = "Password is required";
            $redic = false;
        }

        // if true, then redirect it
        if($redic){
            header('LOCATION: connect_login.php');
            exit();
        }
    }

    ?>
    <span class="error"> </span>
    <br><br>
    <?php require_once "messages.php"; ?>


<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form  method="post">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form  method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				</div>
			
			<input id="Email"  type = "email" name="v_userEmail" required/>
			<input id="password" type = "password" name="v_userPassword" required>
			<a href="register.php">New User Sign Up</a>
            
			<button type="submit" value="Login" id="submit" required formaction ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>">Sign In</button>
           
        </form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<a href="register.php"><button class="ghost">Sign Up</button></a>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
</body>
</html>
