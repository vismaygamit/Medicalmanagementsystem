
<?php
session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $a=9;
        $b=9;
        //$a=$_SESSION['o'];
        //$b=$_SESSION['q'];
        $n=$a*$b;
        echo $_SESSION['o']*$_SESSION['q'];
        $_SESSION['f']=$_SESSION['d']."*".$_SESSION['e'];
        echo "<table border=1><tr><td colspan='5'>VDK Medical Shop <p>Shop no-4, Kadodara-Bardoli Road, Kadodara-394327, Gujarat,India</td></tr>"
        . ""."<tr><td colspan='4'>"."Name:".$_SESSION['a']."</br>"."Billing Address:".$_SESSION['d']."".$_SESSION['e']."".$_SESSION['f']."".$_SESSION['g']."</td><td>"."Date:".date("Y/m/d")."<br>"."Invoice No:".mt_rand(1,100)."</td></tr>"
                ."<tr><td>Date</td><td>Product Name</td><td>Quantity</td><td>Unit Cost</td><td>Amount</td></tr>"
                ."<tr><td>".date("Y/m/d")."</td><td>".$_SESSION['p']."</td><td>".$_SESSION['o']."</td><td>".$_SESSION['q']."</td><td>".$n=$a*$b."</td></tr>"
                . "</table>";
        ?>
    </body>
</html>
