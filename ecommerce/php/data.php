<?php 
include 'php/back.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $FNAME=$_POST['fname'];
    $LNAME=$_POST['lname'];
    $ADDRESS=$_POST['Address'];
    $SUBJECT=$_POST['subject'];
    

    $query="INSERT INTO `contact` (`Fname`, `Lname`, `Address`, `Message`) VALUES ('$FNAME', '$LNAME', '$ADDRESS', '$SUBJECT')";
    if (mysqli_query($conn, $query)) {
        echo "New record created successfully";
        header("Location: ECOMMERCE/contact.html");
    }
    echo"<pre>";
}