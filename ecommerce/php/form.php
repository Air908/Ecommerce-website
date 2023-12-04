<?php 
include 'php/back.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $FNAME=$_POST['fname'];
    $LNAME=$_POST['lname'];
    $ADDRESS=$_POST['Address'];
    $PHONE=$_POST['phone'];
    $EMAIL=$_POST['email'];
    $SUBJECT=$_POST['subject'];

    

    $query="INSERT INTO `purchase` (`Fname`, `Lname`, `Address`, `Phone`, `Email`, `Product`) VALUES ('$FNAME', '$LNAME', '$ADDRESS','$PHONE', '$EMAIL', '$SUBJECT')";
        echo "New record created successfully";
        header("Location: contact.html");
}
?>