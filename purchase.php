<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Medical Management System</title>
        <style>
table{color:black;font-size: 30px; }
p{color: red;}
</style>

    </head>
     <body background="back.jpg" >
    <header><?php
            include('header.php');
            ?>
    </header>
         <hr>
   <?php
   $a=0;
   
   $x=$b=$c=$d=$e=$f=$g=$h=NULL;
   if(isset($_POST['btnsub']))
   {      $_SESSION['p']=$_SESSION['x'];
     $_SESSION['q']=$_SESSION['y'];
        $_SESSION['a']=$_POST['txtfn'];
             $_SESSION['b']=$_POST['txtmob'];
              $_SESSION['c']=$_POST['txtpc'];
               $_SESSION['d']=$_POST['add'];
                $_SESSION['e']=$_POST['txtl']; 
                $_SESSION['f']=$_POST['txtci'];
                 $_SESSION['g']=$_POST['txts'];
                 $_SESSION['o']=$_POST['txtq'];
       if($_POST['txtfn']==NULL)
       {
       $x="<p>Please enter Fullname</p>";$a=1;
       }
       if($_POST['txtmob']==NULL)
       {
       $b="<p>Please enter Fullname</p>";$a=1;
       
       }
       
       if($_POST['txtpc']==NULL)
       {
       $c="<p>Please enter Fullname</p>";
       $a=1;
       }
       
       if($_POST['add']==NULL)
       {
       $d="<p>Please enter Fullname</p>";
       $a=1;
       }
       
       if($_POST['txtl']==NULL)
       {
       $e="<p>Please enter Fullname</p>";
       $a=1;
       }
       
       if($_POST['txtci']==NULL)
       {
       $f="<p>Please enter Fullname</p>";
       $a=1;
       }
       
       if($_POST['txts']==NULL)
       {
       $g="<p>Please enter Fullname</p>";
       $a=1;
       }
       if($_POST['txtq']==NULL)
       {
       $h="<p>Please enter Quantity</p>";
       $a=1;
       }
       if($a==0)
       {   /* $_SESSION['a']=$_POST['txtfn'];
             $mob=$_POST['txtmob'];
              $pin=$_POST['txtpc'];
               $add=$_POST['add'];
                $lan=$_POST['txtl']; 
                $city=$_POST['txtci'];
                 $sta=$_POST['txts'];*/
           $con=new mysqli("localhost","root","","project");
            $result=$con->query("insert into Address values('".$_SESSION['a']."','".$_SESSION['b']."','".$_SESSION['o']."','".$_SESSION['c']."','".$_SESSION['d']."','".$_SESSION['e']."','".$_SESSION['f']."','".$_SESSION['g']."')");
        if($result==true)
        {
           // echo 'Your Address has been Successfuly Saved';
            header('location:bill.php');
        }
        else{echo"Failed";}
       }
   }
   ?>
        
        <div>
            
            <form method="post">
            <table>
                <tr style="background-color: white"><td style="color:#0416B0"><b>Delivery Address</b></td></tr>
            <tr><td>Fullname:<input type="text" name="txtfn" ><span><?php echo $x;?></span></td></tr>
       <tr><td> Mobile number:<input type="tel" name="txtmob" maxlength="10"><span><?php echo $b;?></span></td></tr>
       <tr><td>Product Quantity:<input type="text" name="txtq"><span><?php echo $h;?></span></td></tr>
            <tr><td>Pincode:<input type="text" name="txtpc"  maxlength="6"><span><?php echo $c;?></span></td></tr>
            <tr><td> Flat / House No. / Floor / Building:<textarea cols="20" rows="5" name="add"></textarea><span><?php echo $d;?></span></td></tr>
            
            <tr><td> Landmark:<input type="text" name="txtl" placeholder="E.g. Near AIIMS Flyover"><?php echo $e;?></td></tr>
             <tr><td>Town/City:<input type="text" name="txtci" ><?php echo $f;?></td></tr>
       <tr><td>State:<input type="text" name="txts" ><?php echo $g;?></td></tr>
        <tr><td><input type="submit" name="btnsub" value="Deliver to this address"></tr></td></table>
            
            </form>
            </div>
        <footer>
           <?php
            include('footer.php');
            ?>
        </footer>
       
    </body>
</html>
