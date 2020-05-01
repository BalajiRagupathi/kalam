<?php	
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>KALAM REGISTRATION</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
    body{
        background: url("thanks.jpg");
        background-attachment: fixed;
        background-size: cover;
    }
</style>
</head>
<body>
	<div class="container-contact100">
		<div class="wrap-contact100">
                    
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Thanks for registering with us. 
					<BR>
				</span>
				<div class="container">
				  <p>All registered categories of you:-</p>                                          
				  <table class="table table-striped table-bordered table-hover table-condensed">
					<thead>
					  <tr style="color: #fff;">
						<th>Sl.No</th>
						<th>Category</th>
						<th>Event</th>
					  </tr>
					</thead>
					<tbody>
					<?php
					if(isset($_SESSION["emailId"]))
						$email = $_SESSION["emailId"];
					$res1=mysqli_query($link,"SELECT `events` FROM `users` WHERE email='$email'");
					$res2='';
					$sl = 1;
					if ($row = $res1->fetch_assoc())
						$res2=(string)($row['events']);
					
					$myArray = explode(',', $res2);
					
					foreach($myArray as $row1)
					{
						$numb = (int)$row1;
						$res4=mysqli_query($link,"Select `name`,`categoryId` FROM `events` WHERE id = $numb");
						if($res3 = $res4->fetch_assoc())
						{
							echo '<tr';
							?>
							style="color: #fff;"
							<?php
							echo '><td>'.$sl++.'</td><td>'.$res3['name'].'</td>';
							$catId = $res3['categoryId'];
							echo '<td>';
							$res5=mysqli_query($link,"Select `name` FROM `category` WHERE id = $catId");
							if($res6 = $res5->fetch_assoc())
							{
								echo $res6['name'];
							}
							echo '</td>';
							
							echo '</tr>';
						}
					}
					?>
					</tbody>
				  </table>
				</div>
				<span class="contact100-form-title">
				<CENTER><img src="load.gif"></CENTER><br>
					<font size="5">Please wait while we redirect you to the homepage...</font>
				</span>
				</form>
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" onclick="javascript:location.href='end.php'">
							<span>
								HOME
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script type="text/javascript">   
    function Redirect() 
    {  
        window.location="end.php"; 
    } 
    document.write("You will be redirected to a new page in few seconds"); 
    setTimeout('Redirect()', 10000);   
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>
</html>









