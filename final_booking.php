<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){

    if(isset($_POST['submit'])){

        $randomNumber = rand();

        $alphabet = range('A', 'C');
        $randomAlphabet = $alphabet[rand(0, count($alphabet) - 1)];

        $numbers = range(1, 5);
        $randomNumber = $numbers[rand(0, count($numbers) - 1)];


        $alphabet1 = range('A', 'G');
        $randomAlphabet1 = $alphabet1[rand(0, count($alphabet1) - 1)];

        $numbers1 = range(1, 7);
        $randomNumber1 = $numbers1[rand(0, count($numbers1) - 1)];


        $booking_id = 'SCHRTIEO'.$randomNumber;
        $flight_name = $_POST['flight_name'];
        $source = $_POST['source'];

        $dept_time = $_POST['dept_time'];
        $flight_number = $_POST['flight_number'];
        $destination = $_POST['destination'];

        $arr_time = $_POST['arr_time'];
        $total_distance = $_POST['total_distance'];
        $full_name = $_POST['full_name'];

        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $id_number = $_POST['id_number'];

        $email = $_POST['email'];
        $total_price = $_POST['total_price'];
        $expiry_date = $_POST['expiry_date'];
        $card_number = $_POST['card_number'];

        $journey_date = $_POST['journey_date'];
        $gate_number = $randomAlphabet.$randomNumber;
        $seat_number = $randomAlphabet1.$randomNumber1;

    
    
        $sql = "INSERT INTO booking_detail (`journey_date`,`gate_number`,`seat_number`,`booking_id`, `flight_name`, `source`, `dept_time`, `flight_number`, `destination`, `arr_time`, `total_distance`, `full_name`, `phone`, `address`, `id_number`, `email`, `total_price`, `expiry_date`, `card_number`) VALUES ('$journey_date', '$gate_number', '$seat_number', '$booking_id', '$flight_name', '$source', '$dept_time', '$flight_number', '$destination', '$arr_time', '$total_distance', '$full_name', '$phone', '$address', '$id_number', '$email', '$total_price', '$expiry_date', '$card_number')";
        
        $sql1 = "SELECT * FROM flight_detail WHERE flight_name = '$flight_name'";

        $result = mysqli_query($conn, $sql);

        $result1 = mysqli_query($conn, $sql1);

        $row1 = mysqli_fetch_assoc($result1);

        $remain_st = $row1['remaining_seat']-1;

        $sql2 = "UPDATE flight_detail SET remaining_seat = '$remain_st' WHERE flight_name = '$flight_name';";

        $result2 = mysqli_query($conn, $sql2);
        
        // if (mysqli_query($conn, $sql)) {
        //     header("location: final_booking.php");
        // } else {
        //         echo "Something went wrong. Please try again later.";
        // }
        
    }

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




            

<br><br><br><br><br><br><br>

<div class="container">
    <div class="row">
    <div class="col-md-3"></div>
        <div class="col-md-6">
        
        <div class="card" style="text-align: center;">

       <br>
            <h1 style="font-size: 70px; color: red">Booking Confirmed</h1>
            <h2 style="font-size: 30px;">Thank Your For Booking With Us</h2>
            <br>

            <a href="home.php" class="btn btn-success">Go Back To Home</a>
         
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