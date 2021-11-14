<?php
session_start();
$valid = true;
$servername = "localhost: 3306";
$username = "root";
$pass = "";
$database_name = "Email_Server";

$con = new mysqli($servername, $username, $pass, $database_name); //server connection
if($con-> connect_error) //failed to connect
    die("failed to connect to database: ".$con-> connect_error);

$sender_email_address = $_SESSION['user_email'];

$sql = "SELECT * FROM email WHERE Sender = '".$sender_email_address."'";
$res = $con->query($sql);
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
                  <a href="profile.php">Home</a>
                  <i class="fa fa-angle-right"></i>
                  Sent Mail
               </h2>
            </div>
            
            <div class="blank">
               <div class="blank-page">
               <?php if($res->num_rows == 0){?>
    <h3>You didn't receive any Messages!</h3> <?php } ?>
    <?php
if($res->num_rows > 0){

            echo "<form method='post'>

             <table id='example' class='table table-striped table-bordered' cellspacing='0' width='100%'>
               <thead><tr><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSr. No.</th><th width='20%'>Receiver</th><th  width='30%'>Title</th><th  width='30%'>Message</th><th>Time</th></tr></thead>";
               $t=1;
               while($row = $res->fetch_assoc()) { 
                echo "<tr><th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$t</th><th>$row[Reciever]</th><th>$row[Title]</th><th>$row[Body]</th><th>$row[Time]</th></tr>";
$t++;
              }    }
?>
</tbody>a
</table>

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
