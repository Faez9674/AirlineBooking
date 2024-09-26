<?php 
include "dbconn.php";
session_start();
if(isset($_SESSION['id']) && $_SESSION['user_name'] && $_SESSION['email']){


    


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

<?php 


if(isset($_POST['submit'])){


    $source = $_POST['source'];
    $destination = $_POST['destination'];
    $departure_date = $_POST['departure_date'];

    $dateString = $departure_date;
    $date = strtotime($dateString);
    $dayName = date("l", $date);

    if($source != "" && $destination != "" && $departure_date != ""){
        $sql = "SELECT * FROM flight_detail WHERE source='$source' AND destination='$destination' AND travel_date='$dayName'";

     

        $result = mysqli_query($conn, $sql);
        $result1 = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){

            $row1 = mysqli_fetch_assoc($result1);
            ?>
            

                <br><br><br><br><br>

<div class="container">
    <div class="row">
    <div class="col-md-5">
        <div class="card">
        <div class="card-header" style="text-align: center; color: white; background-color: black;">
            Route Map
        </div>
        <div class="card-body">
            <?php 
            if($row1['source'] == "NZNE" && $row1['destination'] == "YMHB"){
                ?>
            <img src="images/map/location1.png" style="height: 310px; width: 580px;">

            <?php } else if($row1['source'] == "YMHB" && $row1['destination'] == "NZNE"){

                ?>

                <img src="images/map/location2.png" style="height: 310px; width: 580px;">

                <?php

            }else if($row1['source'] == "NZNE" && $row1['destination'] == "NZRO"){

                ?>

                <img src="images/map/location3.png" style="height: 310px; width: 580px;">

                <?php

            }else if($row1['source'] == "NZRO" && $row1['destination'] == "NZNE"){

                ?>

                <img src="images/map/location3.png" style="height: 310px; width: 580px;">

                <?php

            }else if($row1['source'] == "NZNE" && $row1['destination'] == "NZGB"){

                ?>

                <img src="images/map/location4.png" style="height: 310px; width: 580px;">

                <?php

            }else if($row1['source'] == "NZGB" && $row1['destination'] == "NZNE"){

                ?>

                <img src="images/map/location4.png" style="height: 310px; width: 580px;">

                <?php

            }else if($row1['source'] == "NZNE" && $row1['destination'] == "NZCI"){

                ?>

                <img src="images/map/location5.png" style="height: 310px; width: 580px;">

                <?php

            }else if($row1['source'] == "NZCI" && $row1['destination'] == "NZNE"){

                ?>

                <img src="images/map/location5.png" style="height: 310px; width: 580px;">

                <?php

            }else if($row1['source'] == "NZNE" && $row1['destination'] == "NZTL"){

                ?>

                <img src="images/map/location6.png" style="height: 310px; width: 580px;">

                <?php

            }else if($row1['source'] == "NZTL" && $row1['destination'] == "NZNE"){

                ?>

                <img src="images/map/location6.png" style="height: 310px; width: 580px;">

                <?php

            }
            
            
            ?>
        </div>
        </div>
    </div>
        <div class="col-md-7">
        
        <div class="card">
            <div class="card-header" style="text-align: center; color: white; background-color: black;">

                <h2 style="font-size: 25px;">Flight Details</h2> 
                <br>
                <h4 style="font-size: 18px;">From: <?php echo $row1['source_name']; ?> (<?php echo $row1['source']; ?>) - To: <?php echo $row1['destination_name']; ?> (<?php echo $row1['destination']; ?>)</h4>
                <br><h4 style="font-size: 18px;">Flight Name: <?php echo $row1['flight_name']; ?> / Flight Number: <?php echo $row1['flight_number']; ?> </h4>
                <br><a href="new_booking.php" class="btn btn-danger">Back</a>
            </div>
            <div class="card-body" style="background-color: #D3D3D3;">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th style="text-align: center;">Flight Details</th>
                    <th style="text-align: center;">Departure Date</th>
                    <th style="text-align: center;">Total Seat Available</th>
                    <th style="text-align: center;">Action</th>
                </tr>
                </thead>
                <?php
                while($row = mysqli_fetch_array($result)){

                    $timeString = $row['departure_time'];
                    $dep_time = date("h:i A", strtotime($timeString));
    
                    
    
                    ?>
                <tbody style="text-align: center;">
                <tr>
                    <td>
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo $row['source_name']; ?> (<?php echo $row['source']; ?>)
                                <br>
                                <label class="badge badge-danger">Departure Time:</label> <?php echo $dep_time; ?>
                            </div>
                            <div class="col-md-6">
                                <?php echo $row['destination_name']; ?> (<?php echo $row['destination']; ?>)
                                <br>
                                <label class="badge badge-success">Arrival Time:</label> <?php 
                                
                                // $arr_time = date("h:i A", strtotime($timeString1));


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

                                $arr_time = date("h:i A", strtotime($sumTimeString));

                                echo $arr_time; 
                                ?>
                            </div>
                        </div>
                        
                    </td>
                    <td><?php echo $dayName; ?> </td>
                    <td><?php echo $row['remaining_seat']; ?> </td>
                    <td><a href="book_flight.php?id=<?php echo $row['id']; ?>&journey_date=<?php echo $departure_date; ?>" class="btn btn-primary">Book</a></td>
                </tr>
               
                </tbody>
                <?php } ?>
            </table>
            </div> 

            
            <!-- <div class="card-footer">Reach before 4PM</div> -->
        </div>
        </div>
  
    </div>
  
</div>
            


              
               
           

           <?php
          
                

        }else{
            header("location: search_flight.php?error=No flight found!!!");
            exit();
        }
        
    }else{
        echo "Source, destination, and departure date cannot be empty!";
    }
}


?>
<br><br><br><br><br><br>
<div class="row">
    
<?php if(isset($_GET['error'])){ ?>
						<p class="error" style="font-size: 20px"><?php echo $_GET['error']; ?></p>
                        <br>
                        
					<?php } ?>
                    

</div>
<br>
<div class="row">
<?php if(isset($_GET['error'])){ ?>
    <div class="col-md-5"></div>
    <div class="col-md-6" style="padding-left: 120px;"><a href="new_booking.php" class="btn btn-success">BACK</a></div>
    <?php } ?>
</div>
          

</body>
</html>


<?php

}else{
    header("location: login.php");
    exit();
}
?>