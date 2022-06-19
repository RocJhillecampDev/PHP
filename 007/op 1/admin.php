<!DOCTYPE html>
<html>
<head>
    <title>PHP Opdrachten</title>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
<?php
          session_start();
          if(isset($_SESSION["user"])&&$_SESSION["user"]["rol"]=="Administrator"){
                echo "<h1>Welkom".$_SESSION["user"]. " op het admingedeelte van de
                          website";
                  echo "<p><a href='login.php'> login </a></p>";
          }else{
                   header('location:login.php');
                  // terug naar inlogscherm
          }
?>
</body>!
</html>