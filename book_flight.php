<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){


    $id = $_GET["id"];

    $journey_date = $_GET["journey_date"];

    $sql = "SELECT * FROM flight_detail WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    $timeString1 = $row['departure_time'];
    $timeString2 = $row['travel_time'];

    // Split time strings into hours, minutes, and seconds
    list($hours1, $minutes1, $seconds1) = explode(":", $timeString1);
    list($hours2, $minutes2, $seconds2) = explode(":", $timeString2);

    // Perform addition
    $totalSeconds = ($hours1 + $hours2) * 3600 + ($minutes1 + $minutes2) * 60 + ($seconds1 + $seconds2);

    // Convert total seconds back to hours, minutes, and seconds
    $sumHours = floor($totalSeconds / 3600);
    $sumMinutes = floor(($totalSeconds % 3600) / 60);
    $sumSeconds = $totalSeconds % 60;

    // Format the sum time string
    $sumTimeString = sprintf("%02d:%02d:%02d", $sumHours, $sumMinutes, $sumSeconds);
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

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
      <script src="https://kit.fontawesome.com/a24879a822.js"></script>

<style>
	.error{
		background-color: red;
		color: white;
		padding: 10px;
		border-radius: 5px;
		margin: 20px auto;
	}
</style>

</head>
<body style="background-image: url('images/img-19.png'); background-repeat: no-repeat; background-size: cover; ">




            

                <br><br>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="card">
        <form action="final_booking.php" method="POST">
            <div class="card-header" style="text-align: center; color: white; background-color: black;">
                <h2 style="font-size: 20px;">Flight Details</h2><br>
                
            </div>
            <div class="card-body" style="background-color: #D3D3D3;">
            
            <div class="row">
                <div class="col-md-6">
                    <label>Flight Name</label>
                    <input type="text" name="flight_name" class="form-control" value="<?php echo $row['flight_name'] ?>" readonly>
                    <label>From</label>
                    <input type="text" name="source" class="form-control" value="<?php echo $row['source_name'] ?> (<?php echo $row['source'] ?>)" readonly>
                    <label>Departure Time</label>
                    <input type="text" name="dept_time" class="form-control" value="<?php echo $row['departure_time'] ?>" readonly>
                    <input type="hidden" name="total_distance" class="form-control" value="<?php echo $row['total_ditance'] ?>">
                    <input type="hidden" name="journey_date" class="form-control" value="<?php echo $journey_date; ?>">


                </div>
                <div class="col-md-6">
                    <label>Flight Numberr</label>
                    <input type="text" name="flight_number" class="form-control" value="<?php echo $row['flight_number'] ?>" readonly>
                    <label>To</label>
                    <input type="text" name="destination" class="form-control" value="<?php echo $row['destination_name'] ?> (<?php echo $row['destination'] ?>)" readonly>
                    <label>Arrival Time</label>
                    <input type="text" name="arr_time" class="form-control" value="<?php echo $sumTimeString ?>" readonly>
                </div>
            </div>

            
            

            


            </div> 
            <div class="card-header" style="text-align: center; color: white; background-color: black;">
                <h2 style="font-size: 20px;">Add Passenger Details</h2><br>
            </div>
            <div class="card-body" style="background-color: #D3D3D3;">
            
            <div class="row">
            <div class="col-md-6">
            <label>Passenger Name</label>
            <input type="text" name="full_name" class="form-control" placeholder="Enter full name" required>
            <label>Contact Number</label>
            <input type="number" name="phone" class="form-control" placeholder="Enter contact number" required>
            <label>Full Address</label>
            <input type="text" name="address" class="form-control" placeholder="Enter full address" required>
            </div>
            <div class="col-md-6">
            <label>Id Card Number</label>
            <input type="text" name="id_number" class="form-control" placeholder="Enter id card number" required>
            <label>Email Address</label>
            <input type="text" name="email" class="form-control" placeholder="Enter email address" required>
            </div>

            </div>

            
            

            


            </div> 

            <div class="card-header" style="text-align: center; color: white; background-color: black;">
                <h2 style="font-size: 20px;">Payment Details</h2><br>
            </div>
            <div class="card-body" style="background-color: #D3D3D3;">
            
            <div class="row">
            <div class="col-md-6">
            <label>Total Fair ($)</label>
            <input type="number" name="total_price" class="form-control" value="<?php echo $row['ticket_price'] ?>" readonly>
            <label>Expiry Date</label>
            <input type="date" name="expiry_date" class="form-control"  required>
            
            </div>
            <div class="col-md-6">
            
            <label>Card Number</label>
            <input type="number" name="card_number" class="form-control" placeholder="Enter card number" required>
            </div>

            </div>
            <br>
            <div  style="text-align: center">
            <!-- <div class="card-footer">Reach before 4PM</div> -->
            <button type="submit" name="submit" class="btn btn-success" style="background-color: green;">Pay and Submit</button>
            <a href="new_booking.php" class="btn btn-danger">Cancel</a>
            </div>

            </form>
        </div>
        </div>
  
    </div>
  
</div>
            
              
<br><br>
           

           


</body>
</html>


<?php

}else{
    header("location: login.php");
    exit();
}
?>