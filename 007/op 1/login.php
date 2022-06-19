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
$users=array(
    "janjaap"=>"1234",
    "bert"=>"1235",
    "jans"=>"1236",
);
if(isset($_POST['knop'])
    && isset($users[$_POST["Login"]])
    &&$users[$_POST["Login"]]==$_POST['pwd']){
    $message="Welkom !!!";
}else{
    $message="Inloggen";
}
?>
</body>!
</html>