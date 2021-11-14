<?php

// if email is not empty, set a cookie of email with post function
if(!empty($_POST["receiver_email"]))
    setcookie("receiver_emailCookie", $_POST["receiver_email"], time() +(86400 * 30), "/");

// if password is not empty, set a cookie of password with post function
if(!empty($_POST["email_title"]))
    setcookie("email_titleCookie", $_POST["email_title"], time()+ (86400 * 30), "/");

if(!empty($_POST["email_message"]))
    setcookie("email_messageCookie", $_POST["email_message"], time()+ (86400 * 30), "/");
?>

 ?>
 

<!DOCTYPE html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/screenfull.js"></script>
 <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">
  <script src="assests/plugins/datatables/jquery.dataTables.min.js"></script> 
  <!-- bootstrap js -->
    <script src="assests/bootstrap/js/bootstrap.min.js"></script>


		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
		<style type="text/css" media="screen">
		#container {
    min-width: 310px;
    height: 400px;
    margin: 0 auto;
}	
		</style>
</head>
<body class="dashboard-page">

	<nav class="main-menu">
		<ul>
			<li>
				<a href="received_messages.php">
					<i class="fa fa-home nav_icon"></i>
					<span class="nav-text">
					Inbox
					</span>
				</a>
			</li>
		
			<li>
				<a href="message.php">
					<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">
					Compose
					</span>
				</a>
			</li>
			<li>
				<a href="sent_messages.php">
					<i class="fa fa-bar-chart nav_icon"></i>
					<span class="nav-text">
					Sent
					</span>
				</a>
			</li>
			
	
		</ul>
		<ul class="logout">
			<li>
			<a href="logout.php">
			<i class="icon-off nav-icon"></i>
			<span class="nav-text">
			Logout
			</span>
			</a>
			</li>
		</ul>
	</nav>
 


    <div class="banner">
					<h2>
						<a href="index.php">Home</a>
						<i class="fa fa-angle-right"></i>
						Compose Mail
					</h2>
				</div>
				
				<div class="blank">
					<div class="blank-page">
                    <?php
    $emailErr = $messageErr = $titleErr = " ";
    $redic = true;

    // using POST
    if($_SERVER ["REQUEST_METHOD"] == "POST"){

        // if email is empty, request it and set redirect to false
        if(empty($_POST["receiver_email"])){
            $emailErr = "User Email is required";
            $redic = false;
        }

        if(empty($_POST["email_title"])){
            $titleErr = "Title is required";
            $redic = false;
        }

        if(empty($_POST["email_message"])){
            $messageErr = "Message is required";
            $redic = false;
        }

        // if true, then redirect it
        if($redic){
            header('LOCATION: connect_message.php');
            exit();
        }
    }

    ?><?php require_once "messages.php"; ?>
				<form method="post">
					<table class="table-condensed" width="50%" align="center">
					<tr><td>To:<input  class="form-control" placeholder="@gmail.com" input type = "email" name = "receiver_email" required></td></tr>
					<tr><td>Title:<input type="text"  required="" name="email_title" class="form-control" placeholder="Title"></td></tr>
					<tr><td>Message: <textarea id = "email_message" placeholder="msg" name="email_message" rows="8" cols="34" class="form-control" required> </textarea></td></tr>
                    <tr><td>  <input type = "submit" value = "Send" class="btn btn-primary" required formaction ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>"></td></tr>					
                </table>
				</form>
				<br><br>
				
					</div>	
				
				</div>					         
 
		<!-- footer -->
		<div class="footer">
			<p> All Rights Reserved . Design by <a href="">Department of Computer Engineering</a></p>
		</div>
		<!-- //footer -->
	</section>
	
                       
<!--js -->
<link rel="stylesheet" href="assets/bootstrap/css/datatable1.css">
<script type="text/javascript" src="assets/jquery/datatable1.js"></script>
<script type="text/javascript" src="assets/jquery/datatable2.js"></script>
<script type="text/javascript" src="assets/jquery/datatable3.js"></script>
 <script src="assests/plugins/fileinput/js/plugins/canvas-to-blob.min.js'); ?>" type="text/javascript"></script> 
  <script src="assests/plugins/fileinput/js/plugins/sortable.min.js" type="text/javascript"></script> 
  <script src="assests/plugins/fileinput/js/plugins/purify.min.js" type="text/javascript"></script>
  <script src="assests/plugins/fileinput/js/fileinput.min.js"></script> 
  
</body>
</html>
