<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Medical Management System</title>
        <style>           
table{color:black;font-size: 30px; }
</style>
  </head>
     <body background="back.jpg" onload="pageLoad()"> 
    <header><?php
            include('head.php');
            ?></header>
    <hr>
    <!--Insert-->
        <?php
        $a=NULL;
        $b=NULL;
        $c=NULL;
        $d=NULL;
        $e=NULL;
        $f=NULL;
        $g=NULL;
        $no=0;
        //$a=$_SESSION['name'];
        //$b=$_SESSION['name'];
        if(isset($_POST['binsert']))
        {
           /* if($_POST['txtid']==NULL)
            {
                $a="Enter the Medicine id";
                $no=1;
            }*/
             if($_POST['mname']==NULL)
            {
                $b="Enter the Medicine Name";
                $no=1;
            }
             if($_POST['mdate']==NULL)
            {
                $c="Enter the Manufacture Date";
                $no=1;
            }
             if($_POST['edate']==NULL)
            {
                $d="Enter the Expiry Date";
                $no=1;
            }
             if($_POST['description']==NULL)
            {
                $e="Enter the description";
                $no=1;
            }
             if($_POST['mq']==NULL)
            {
                $f="Enter the Quantity";
                $no=1;
            }
             if($_POST['price']==NULL)
            {
                $g="Enter the price";
                $no=1;
            }
            if($no==0)
            {
              $mn=$_POST['mname'];
              $md=$_POST['mdate'];
               $ed=$_POST['edate'];
                $des=$_POST['description']; 
                $q=$_POST['mq'];
                 $pr=$_POST['price'];
            $con= new mysqli("localhost","root","","project");
		$sql=$con->query("insert into medicine(mname,mdate,Expiry_date,description,qty,price) values('".$mn."','".$md."','".$ed."','".$des."','".$q."','".$pr."')");
                if($sql==TRUE)
                {
                    echo "Data Insertd SuccessFully";
                }
                else
                {
                        echo "fail";
                }
        }
        }
        
       
  //  <!--displaya-->
   
       if(isset($_POST['bdisplay']))
        {
header('location:display.php');
        }
        
        ?>
   
        <form method="post">
    <table id="ins">
         <tr style="background-color: white"><td style="color:#0416B0"><b>Product Details</b></td></tr>
         <tr><td>
        Medicine name: <input type="text" name="mname" size="20" /><span><?php echo $b; ?></span></td><tr>
<tr><td>
Manufacture date: <input type="date" name="mdate" /><span><?php echo $c; ?></span></td><tr>
<tr><td>
    Expiry date: <input type="date" name="edate" /><span><?php echo $d; ?></span></td><tr>
<tr><td>
Medicine Description:                           
<textarea rows="5" cols="50" name="description" placeholder="Enter the Description">

</textarea><span><?php echo $e; ?></span></td></tr>
<tr><td>
        Quantity:        <input type="int" name="mq" min="1" /><span><?php echo $f; ?></span></td><tr>
<tr><td>
Price: <input type="text" name="price" max="1" /><span><?php echo $g; ?></span></td><tr>
<tr>
    <td><input type="submit" name="binsert" value="insert" ></td>
   
   
    <td><input type="submit" name="bdisplay" value="display" ></td>
    
</tr></table></form>

    <footer>
                       
           <?php
            include('footer.php');
            ?>
           </footer>
    </body>
</html>
