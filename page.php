<?php
session_start();
include 'hak_akeses.php';
            require 'functions.php';
            $username = $_SESSION['username'];

            $sqlhak = "SELECT * FROM user WHERE username='$username'";
            $queryhak = mysqli_query($conn, $sqlhak);
            $rowhak    = mysqli_fetch_array($queryhak);
            if(mysqli_num_rows($queryhak) > 0)
            {
            if($rowhak['level']=="admin"){
            @$_SESSION['username'] = $rowhak['username'];
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
      </head>
      <body>
          haha
      </body>
      </html>
      <?php }}?>
      