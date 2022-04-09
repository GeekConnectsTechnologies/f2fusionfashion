<?php
include('../db.php');
session_start();// Starting Session
//$conn = mysqli_connect('localhost','roshanme_sensegood','somethinsecure2229','roshanme_sensegood');
// Storing Session
$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT username from login where username = '$user_check'";
$ses_sql = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];
?>