<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){

   

        $id = $_GET['id'];

        
    
        $sql1 = "SELECT * FROM booking_detail WHERE id = '$id'";

        $result1 = mysqli_query($conn, $sql1);

        $row1 = mysqli_fetch_assoc($result1);

        $flight_num = $row1['flight_number'];

        $sql2 = "SELECT * FROM flight_detail WHERE flight_number = '$flight_num'";

        $result2 = mysqli_query($conn, $sql2);

        $row2 = mysqli_fetch_assoc($result2);

        $remain_st = $row2['remaining_seat']+1;

        $sql3 = "UPDATE flight_detail SET remaining_seat = '$remain_st' WHERE flight_number = '$flight_num';";

        $result3 = mysqli_query($conn, $sql3);



        $sql = "DELETE FROM booking_detail WHERE id = '$id'";
       
        $result = mysqli_query($conn, $sql);

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
    <div class="col-md-1"></div>
        <div class="col-md-10">
        
        <div class="card" style="text-align: center;">

       <br>
            <h1 style="font-size: 70px; color: red">Ticket Cancelled Successfully</h1>
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