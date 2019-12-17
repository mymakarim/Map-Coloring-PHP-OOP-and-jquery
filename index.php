<!DOCTYPE html>
<?php
require_once("districts.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">

    <div id="Kunduz" class="district">
      <span>Kunduz</span>
    </div>
    <div id="ChaharDara"  class="district">
      <span>ChaharDara</span>
    </div>
    <div id="AliAbad"  class="district">
      <span>AliAbad</span>
    </div>
    <div id="KhanAbad"  class="district">
      <span>KhanAbad</span>
    </div>
    <div id="Archi" class="district">
      <span>Archi</span>
    </div>
    <div id="QalaQazi" class="district">
      <span>QalaQazi</span>
    </div>
    <div id="ImamSahib" class="district">
      <span>ImamSahib</span>
    </div>
    <img src="Kunduz_districts.png" class="img" alt="">
  </div>
  <div class="sidebar">
    <p>
    <b>Author: </b><br> Mohammad Yahya Rahmani<br>
    Ahmad Samim Hamza
    </p>
    <p>
      <b>Class: </b><br> SE 5th Semester
    </p>
    <p>
      <b>Instructor: </b><br> Ramazan Ali Bahrami
    </p>
    <hr>
    <p>
      <b>You Can Find Me :) </b><br>
      <b>Website:</b> Https://CodeNawis.com
      <br>
      <b>Email:</b> Ceo@codenawis.com<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ymakarim@gmail.com
      <br>
      <b>Github:</b> @ymakarim
      <br> 
      <b>Twitter:</b> @mymakarim
      <br> 
      <b>Facebook:</b> yahyamakarim
      <br> 
      <b>Instagram:</b> mymakarim
      <br> 
    </p>
  </div>
  <script src="jquery.js"></script>
  <script>
  $(document).ready(function() {
    let districts = ['Kunduz', 'ImamSahib','QalaQazi', 'Archi', 'KhanAbad', 'AliAbad', 'ChaharDara'];
    let x =0;
    interval = setInterval(
      function(){ 
        var color = $('[name='+districts[x]+']').val();
        $("#"+ districts[x] +"").addClass(color);
        // console.log(color);
        x++;
      }, 1000);
    });
  </script>
</body>
</html>
