<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>CoinLocker</title>



<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--
Flex Template
http://www.templatemo.com/tm-406-flex
-->
<link
	href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'
	rel='stylesheet' type='text/css'>

<link rel="stylesheet"
	href="css/bootstrap.min.css">
<link rel="stylesheet"
	href="css/font-awesome.css">
<link rel="stylesheet"
	href="css/animate.css">
<link rel="stylesheet"
	href="css/templatemo_misc.css">
<link rel="stylesheet"
	href="css/templatemo_style.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

<script
	src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
<script src="js/vendor/jquery-1.11.0.min.js"></script>
<script>
		window.jQuery
				|| document
						.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')
	</script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Map -->



<!-- templatemo 406 flex -->
<style type="text/css">
#service-1 {
	background-color: #c2b6b6;
}

#service-2 {
	background-color: #00ff00;
}

#service-3 {
	background-color: #cbf7ff;
}

h5 {
	font-size: 35px;
}

h6 {
	font-size: 30px;
}

.service-item .service-icon {
	font-size: 3em;
	padding: 35px 5px;
}

.m-b-md {
	margin-bottom: 30px;
}

.title {
	font-size: 50px;
}

.flex-center {
	align-items: center;
	display: flex;
	justify-content: center;
}

html, body {
	background-color: #001621;
	color: #001621;
	font-family: 'Nunito', sans-serif;
	font-weight: 200;
	height: 100vh;
	margin: 0;
}

body {
	background-image:
		url('js/html-color-codes-color-tutorials-hero-00e10b1f.jpg');
	width: auto;
	height: 1000px;
}

.btn {

	font-size: 30px;
}
.move {
	position: absolute;
	left: 1395px;
	top: 220px;
	width: 110px;
}
</style>
</head>
<body>



<div class="content-section" id="services">
	<div class="container">
		<div class="row">
			<div class="title m-b-md col-md-12 text-center">
				Robot Test
				<p></p>
			</div>
			<!-- /.heading-section -->
		</div>

		<!-- /.row -->
		<div class="row">
					<div class="col-md-3"></div>
			<div class="col-md-6">
				<div class="service-item" id="service-3">
					<form method="post" action="robot.php">
							<br>
						<h5>
								Please input command
							 <input type="text" name="data" value="" pattern="^[RLW0-9]*$"required>

						</h5>
						<br>

					<h5><input id="ok" type="submit" class="btn btn-info col-md-12 col-sm-6"
						value="Submit"></input> </h5> </form>
				</div>
					<br	>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</div>
<br>
<div class="move">
<img src="js/compass.png" width="300" height="300">
</div>
<div class="row">

					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="service-item" id="service-1">
							<?php if(isset($_POST['data'])){
							$sum=$_POST['data'];
							//$split=str_split($sum);
								//explode
								//str_split
							$Direction=4;
							$X="";
							$Y="";
							$All_X=0;
							$All_Y=0;
							$split=preg_split('#(?=[a-z])#i',$sum);
							//$split = array();
              //preg_match('/(\D+)(\d+)/', $sum, $split );
            //  print_r($split);
								$length = count($split);
						?>
					<h5><?php	echo "Your Input<br>".$sum;?><br>
						<?php 	for ($j = 1; $j < $length; $j++) {
						//print $split[$j];
						//echo "<br>";
						$split1=explode("W",$split[$j]);
							$length1 = count($split1);
							//print_r($split1);
								//echo "<br>";
						for ($i = 0; $i < $length1; $i++) {
						if($split1[$i]=='R'){
							$Direction=$Direction+1;
							$Direction=$Direction%4;
							//echo "OK A";
							//echo "<br>";
						}else if($split1[$i]=='L'){
							$Direction=$Direction+3;
							$Direction=$Direction%4;
							//echo "OK B";
							//echo "<br>";
						}else if($split1[$i]==''){
						}else if (is_numeric($split1[$i])) {
								if($Direction=='4'||$Direction=='0'){
										$Y=$split1[$i];
										//echo "<br>";
										//	echo "OK Y";
										//	echo "<br>";
											$All_Y=$All_Y+$Y;
								}else if($Direction=='1'){
										$X=$split1[$i];
										//echo "<br>";
									//	echo "OK X";
										//echo "<br>";
										$All_X=$All_X+$X;
								}else if($Direction=='2'){
										$Y=-1*$split1[$i];
										//echo "<br>";
										//echo "OK -Y";
										//echo "<br>";
										$All_Y=$All_Y+$Y;
								}else if($Direction=='3'){
										$X=-1*$split1[$i];
										//echo "<br>";
										//echo "OK -X";
										//echo "<br>";
										$All_X=$All_X+$X;
								}
						}
					}
							//echo "<br>";
							//echo $All_Y=$All_Y+$Y;
							//echo "<br>";
						}
						echo "<br>";
						if($Direction=='4'||$Direction=='0'){
							echo "Direction :North";
							echo " <i class='fas fa-angle-double-up' style='font-size:48px;color:blue'></i>";
						}else if($Direction=='1'){
							echo "Direction :East";
								echo " <i class='fas fa-angle-double-right' style='font-size:48px;color:blue'></i>";
						}else if($Direction=='2'){
							echo "Direction :South";
								echo " <i class='	fas fa-angle-double-down' style='font-size:48px;color:blue'></i>";
						}else if($Direction=='3'){
							echo "Direction :West";
								echo " <i class='	fas fa-angle-double-left' style='font-size:48px;color:blue'></i>";
						}

						echo "<br>";
						echo "X:".$All_X;
						echo "     ";
						echo "Y:".$All_Y;

						//print_r($split);?></h5>
				<?php } ?>
						</div>
							<br	>
					</div>

</div>
	</div>


</body>
</html>
