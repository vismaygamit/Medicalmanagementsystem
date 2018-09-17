<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Medical Management System</title>
        <style>

        </style>

    </head>
     <body background="back.jpg" >
    <?php
    $con=new mysqli("localhost", "root", "", "project");
            $result=$con->query("select Medicine_name,Discription,price from product");
            echo"<table border=1><tr><td>Medicine_name</td><td>Discription</td><td>Price</td><td>Purchase</td></tr>";
            if ($result->num_rows > 0) {
     
             echo "<tr>";   
     while($row = $result->fetch_assoc()) {
            $_SESSION['x']=$row["Medicine_name"];
            $_SESSION['y']=$row["price"];
         echo "<td>".$_SESSION['x']."</td>", "<td>".$row["Discription"]."</td>" , "<td>".$_SESSION['y']."</td>"."<td><a href='purchase.php'>Add to Cart</a></td>"."</tr>";         
     $_SESSION['mn']=$row["Medicine_name"];
         
     }      
}
else
    {
echo "0 results";
} echo "</table>";
    ?>
         <hr>         
         <div></div>           
    </body>
</html>
