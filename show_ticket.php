<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){

        $id = $_GET['id'];

       
        $sql = "SELECT * FROM booking_detail WHERE id = '$id'";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);


?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Airticket Booking</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">

   <style>
    @import url("https://fonts.googleapis.com/css?family=Libre+Barcode+39");
@import url("https://fonts.googleapis.com/css?family=Open+Sans");
@import url("https://fonts.googleapis.com/css?family=Merienda");

body,
html {
	background: #bbbbbb;
	height: 100%;
	display: grid;
}

.ticket {
	height: 20vw;
	width: 60vw;
	margin: auto;
	border-radius: 2vw;
	position: relative;
	background: white;
}

#banner {
	height: 20vw;
	border-radius: 2vw;
	border-top: 4vw solid #3399ff;
	font-family: "Merienda";
	color: white;
}

#mainbanner {
	position: absolute;
	top: -0.4vw;
	left: 4.5vw;
	font-size: 3vw;
}

#mainbanner img {
	vertical-align: middle;
	height: 4vw;
	width: 4vw;
}

#tearoffbanner {
	position: absolute;
	top: 1vw;
	left: 46.7vw;
	font-size: 1.2vw;
}

#tearoffbanner img {
	vertical-align: middle;
	height: 2vw;
	width: 2vw;
}

#barcode {
	overflow: hidden;
	height: 3vw;
	width: 13vw;
	position: absolute;
	top: 10vw;
	left: -2vw;
	font-size: 4em;
	font-family: "Libre Barcode 39";
	transform: rotate(-90deg) scale(1, 2.5);
}

#holes {
	height: 100%;
	position: absolute;
	top: -1.8vw;
	left: 44vw;
}

#holes div {
	width: 1.8vw;
	height: 1.8vw;
	border-radius: 100%;
	background: #bbbbbb;
	margin-top: 0.5vw;
}

#data {
	text-transform: uppercase;
	font-size: 0.8vw;
	font-family: "Open Sans";
}

#maindata {
	margin: 0.5vw;
	position: absolute;
	width: 35vw;
	height: 16vw;
	top: 4vw;
	left: 9vw;
}

#data .box {
	width: 17vw;
	display: inline-block;
}

#data .box .header {
	display: block;
}

#data .box .body {
	font-size: 1.7vw;
}

#data .box.boarding {
	width: 17vw;
	bottom: 3vw;
	left: 9.3vw;
	position: absolute;
	text-align: center;
	border: 2px solid black;
	margin-top: 0.3vw;
	margin-left: 6vw;
}
#data .box.boarding .header {
	font-size: 1.8vw;
}

#data .box.boarding .body {
	font-size: 1.5vw;
}

#tearoffdata {
	position: absolute;
	width: 13vw;
	height: 16vw;
	top: 0vw;
	left: 37vw;
	font-size: 0.8vw;
}

#tearoffdata .box {
	width: 13vw;
	display: block;
}

#tearoffdata .box .header {
	text-decoration: none;
}
#tearoffdata .box .body {
	margin-left: 1vw;
	font-size: 1.2vw;
}

#tearoffdata .box.seat {
	margin-top: 0vw;
}
#tearoffdata .box.seat .body {
	font-size: 2vw;
}

   </style>



</head>
<body>
<div class="ticket">
	<div id="banner">
		<div id="topbanner"></div>
		<span id="mainbanner">
			<img src="https://lukw4l.de/utils/media/assets/flightticket/plane_logo.png">
			<?php echo $row['flight_name']; ?> Airlines
		</span>
		<span id="tearoffbanner">
			<img src="https://lukw4l.de/utils/media/assets/flightticket/plane_logo.png">
			<?php echo $row['flight_name']; ?> Airlines
		</span>
	</div>
	<div id="barcode">
		XYZASDASDXYZ
	</div>
	<div id="data">
		<div id="maindata">
			<div class="box">
				<span class="header">
					Passenger Name
				</span>
				<span class="body">
					Mr. <?php echo $row['full_name']; ?>
				</span>
			</div>
			<div class="box">
				<span class="header">
					Flight Number
				</span>
				<span class="body">
                <?php echo $row['flight_number']; ?>
				</span>
			</div>
			<div class="box">
				<span class="header">
					From
				</span>
				<span class="body">
                <?php echo $row['source']; ?>
				</span>
			</div>
			<div class="box">
				<span class="header">
					Date
				</span>
				<span class="body">
				<?php 
				$dateString = $row['journey_date'];


				$timestamp = strtotime($dateString);
				

				$formattedDate = date("j M Y", $timestamp);
				echo $formattedDate; 
				?>
				</span>
			</div>
			<div class="box">
				<span class="header">
					To
				</span>
				<span class="body">
                <?php echo $row['destination']; ?>
				</span>
			</div>
			<div class="box">
			</div>
			<div class="box">
				<span class="header">
					Gate
				</span>
				<span class="body">
                <?php echo $row['gate_number']; ?>
				</span>
			</div>
			<div class="box boarding">
				<span class="header">
					Boarding Time
				</span>
				<span class="body">
                <?php echo $row['dept_time']; ?>
				</span>
			</div>

			<div id="tearoffdata">
				<div class="box">
					<span class="header">
						Passenger Name
					</span>
					<span class="body">
						Mr. <?php echo $row['full_name']; ?>
					</span>
				</div>
				<div class="box">
					<span class="header">
						Flight Number
					</span>
					<span class="body">
                    <?php echo $row['flight_number']; ?>
					</span>
				</div>
				<div class="box">
					<span class="header">
						Date
					</span>
					<span class="body">
					<?php 
				$dateString = $row['journey_date'];


				$timestamp = strtotime($dateString);
				

				$formattedDate = date("j M Y", $timestamp);
				echo $formattedDate; 
				?>
					</span>
				</div>
				<div class="box">
					<span class="header">
						Gate
					</span>
					<span class="body">
                    <?php echo $row['gate_number']; ?>
					</span>
				</div>
				<div class="box seat">
					<span class="header">
						Seat
					</span>
					<span class="body">
						<?php echo $row['seat_number']; ?>
					</span>
				</div>
			</div>
		</div>

		<div id="holes">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>

	
</body>
</html>



<?php

}else{
    header("location: login.php");
    exit();
}
?>