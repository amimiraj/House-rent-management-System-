<?php

require_once ('dbh.php');

$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$phn_num = $_POST['phone_num'];


$reg_sql = "INSERT INTO `house_owner`(`owner_id`, `email`, `password`, `name`, `phone_number`) VALUES (NULL, '$email', '$password', '$name', '$phn_num')";

$reg_q = mysqli_query($conn, $reg_sql);


if(($reg_q) == 1){

    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Successfully Signed Up , Please Log In')
    window.location.href='..//owner-login.html';
    </SCRIPT>");
    
    // header("Location: ..//owner-login.html");
}

else{
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}

?>