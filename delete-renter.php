
<?php

include("php/dbh.php");

$renter_id = $_GET['id'];
$owner_id = $_GET['o_id'];


$sql = "DELETE FROM renters where renter_id=$renter_id ";
$result = mysqli_query($conn, $sql);


header("Location:owner-renter-list.php?owner_id=$owner_id");
?>