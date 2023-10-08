<?php

include "../database/env.php";
$id =  $_REQUEST['id'];
$query = "UPDATE addbanners set status = 0";
$res = mysqli_query($conn, $query);


$query = "UPDATE addbanners set status = 1 WHERE id='$id'";
$res = mysqli_query($conn, $query);
// REDIRECT
header("Location: ../backend/allBanners.php");