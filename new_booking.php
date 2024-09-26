<?php 
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
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
      <script src="https://kit.fontawesome.com/a24879a822.js"></script>
</head>
<body style="background-image: url('images/img-18.png'); background-repeat: no-repeat; background-size: cover; ">



<div >

<br><br><br><br><br><br><br>
  <form class="m-auto bg-white drop-shadow-lg rounded-lg overflow-hidden w-96 accent-gray-800" action="search_flight.php" method="POST">
    <div class="p-6">
      <div style="text-align: center;">
        
          <h4>Search Your Flight</h4>
    
      </div>
      <div class="mt-4 relative">
        <div class="absolute top-0 left-0 w-8 h-8 flex justify-center items-center">
          <i class="text-sm text-gray-400 fa-regular fa-location-dot"></i>
        </div>
        <select class="w-full bg-gray-100 text-xs font-bold border-none py-2 pl-8 pr-4 rounded placeholder:text-gray-800" name="source" required>
            <option value="" selected disabled>---Select From---</option>
            <option value="NZNE">Dairy Flat (NZNE)</option>
            <option value="YMHB">Hobart (YMHB)</option>
            <option value="NZRO">Rotorua (NZRO)</option>
            <option value="NZGB">Claris (NZGB)</option>
            <option value="NZCI">Tuuta (NZCI)</option>
            <option value="NZTL">Lake Tekapo (NZTL)</option>
        </select>
      
      </div>
      <div class="mt-4 relative">
        <div class="absolute top-0 left-0 w-8 h-8 flex justify-center items-center">
          <i class="text-sm text-gray-400 fa-regular fa-location-dot"></i>
        </div>
        <select class="w-full bg-gray-100 text-xs font-bold border-none py-2 pl-8 pr-4 rounded placeholder:text-gray-800" name="destination" required>
            <option value="" selected disabled>---Select To---</option>
            <option value="NZNE">Dairy Flat (NZNE)</option>
            <option value="YMHB">Hobart (YMHB)</option>
            <option value="NZRO">Rotorua (NZRO)</option>
            <option value="NZGB">Claris (NZGB)</option>
            <option value="NZCI">Tuuta (NZCI)</option>
            <option value="NZTL">Lake Tekapo (NZTL)</option>
        </select>
      </div>
      <div class="flex max-xs:flex-col gap-4 mt-4">


        <div class="flex-1 relative">
          <div class="absolute top-0 left-0 w-8 h-8 flex justify-center items-center">
            <i class="text-sm text-gray-400 fa-regular fa-calendar"></i>
          </div>
          <input class="w-full bg-gray-100 text-xs font-bold border-none py-2 pl-8 pr-4 rounded placeholder:text-gray-800" name="departure_date" placeholder="Choose Date" type="date" required>
        </div>
       
      </div>
      
    </div>
    <div>
      <button class="bg-gray-800 uppercase py-4 w-full text-white text-xs tracking-widest" name="submit">Search Flights</button>
      </form>
      <button class="bg-red-700 uppercase py-4 w-full text-white text-xs tracking-widest" onclick="window.location.href = 'home.php';">Back</button>
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