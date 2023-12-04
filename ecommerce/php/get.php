<?php 
include 'php/back.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Phone=$_GET['Phone'];
    $Email=$_GET['Email'];

    $query="SELECT * FROM `purchase` WHERE Email=LIKE '$Email' OR Phone=LIKE '$Phone'";
        echo "<script>alert('New record created successfully')</script>";
        header("Location: faq.html");
        echo "<table>";
        echo "<tr>";
        echo "<th>Fname</th>";
        echo "<th>Lname</th>";
        echo "<th>Address</th>";
        echo "<th>Phone</th>";
        echo "<th>Email</th>";
        echo "<th>Product</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Fname'] . "</td>";
            echo "<td>" . $row['Lname'] . "</td>";
            echo "<td>" . $row['Address'] . "</td>";
            echo "<td>" . $row['Phone'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Product'] . "</td>";
            echo "</tr>";
        }
       echo "</table>";
    echo"<pre>";
    header("Location: faq.html");
}