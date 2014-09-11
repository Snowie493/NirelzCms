<?php
session_start();
 require('../config/db_connect.php'); //databas anslutning
 include('../config/db_connect.php'); //databas anslutning

function sha_password($user,$pass)
{
    $user = strtoupper($user);
    $pass = strtoupper($pass);
    return SHA1($user.':'.$pass);
}

if (isset($_POST['username']) and isset($_POST['password'])){ //Kolla om man skrivit in något i de 2 fälten och kör den kod innanför {taggen}

$username = $_POST['username'];
$password = sha_password($username,$_POST['password']);

$query = "SELECT * FROM `account` WHERE username='$username' and sha_pass_hash='$password'"; //kollar om kontot finns i databasen

$result = mysql_query($query) or die(mysql_error()); // definierar sökningen i databasen, ifall det blir error skriv ut de.
$count = mysql_num_rows($result); // definierar hur många rader som matchade sökningen i databasen

if ($count == 1){ // om det finns 1 rad som matchade sökningen så kör koden innanför {taggen}
$_SESSION['username'] = $username;
header("Location: ../index.php");
}else{ //om den inte hittar något i databsen som matchar det man skrivit in i formen tidigare så kör det inom {taggen}
header("Location: ../error.php");
}
}