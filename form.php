<?php
///database connection file
 require_once 'dbconfig.php';

// get the post records
$pname = $_POST['pname'];
$pcode = $_POST['pcode'];
$pprice = $_POST['pprice'];

// database insert SQL code
$sql = "INSERT INTO `products` (`A`, `B`, `C`) VALUES ('$pname', '$pcode', '$pprice')";

// insert in database 
$rs = mysqli_query($cser, $sql);

//show success or error message
if ($rs) {
    echo "Form Records Inserted";
} else {
    echo "Error!";
}
