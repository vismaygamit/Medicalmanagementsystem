<?php session_start(); ?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>table{color:black;font-size: 30px; }</style>
    </head>
     <body background="back.jpg" > 
    <header><?php
            include('head.php');
            ?></header>
    <hr>
        <?php
        $a=NULL;
        $b=NULL;
        $c=NULL;
        $d=NULL;
        $e=NULL;
        $f=NULL;
        $g=NULL;
        $no=0;
       $id=$_REQUEST['id'];
     $con=new mysqli("localhost","root","","project");               
		$sql=$con->query("select * from medicine where id='".$id."' ");
                if($sql==TRUE){
                                       
                   while ($raw=$sql->fetch_assoc()){  
                       $ti=$raw['id'];
                       $mn=$raw['mname'];
                       $md=$raw['mdate'];
                       $ed=$raw['Expiry_date'];
                       $mde=$raw['description'];
                       $q=$raw['qty'];
                       $p=$raw['price'];
                   }
                   }
                                       
                ?>
        
        <?php
                if(isset($_POST['bupdate']))
        {
          
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
		$sql=$con->query("update medicine SET mname='$mn', mdate='$md', Expiry_date='$ed', description='$des', qty=$q, price=$pr where id=$ti ");
                if($sql==TRUE)
                {
                    //echo "Data update SuccessFully";
                    header("location:display.php");
                }
                else
                {
                        echo "fail";
                }
        }
                 
        }
        
        ?>
        <form method="post">
    <table id="ins">
         <tr style="background-color: white"><td style="color:#0416B0"><b>Product Details</b></td></tr>
          <tr><td>Medicine id: <input type="text" name="txtid" value="<?php echo  $ti ;?>"/><span><?php echo $a; ?></span></td><tr>
<tr><td>
        Medicine name: <input type="text" name="mname" size="20" value="<?php echo  $mn ;?>"/><span><?php echo $b; ?></span></td><tr>
<tr><td>
Manufacture date: <input type="date" name="mdate" value="<?php echo  $md ;?>"/><span><?php echo $c; ?></span></td><tr>
<tr><td>
    Expiry date: <input type="date" name="edate" value="<?php echo  $ed ;?>"/><span><?php echo $d; ?></span></td><tr>
<tr><td>
Medicine Description:                           
<textarea rows="5" cols="50" name="description" placeholder="Enter the Description">
<?php echo  $mde ;?>
</textarea><span><?php echo $e; ?></span></td></tr>
<tr><td>
        Quantity:        <input type="int" name="mq" min="1" value="<?php echo  $q ;?>"/><span><?php echo $f; ?></span></td><tr>
<tr><td>
Price: <input type="text" name="price" max="1" value="<?php echo  $p ;?>"/><span><?php echo $g; ?></span></td><tr>
   
<tr>
   
    <td><input type="submit" name="bupdate" value="update" ></td>
   
    
    
</tr></table></form>
       <footer><?php
            include('footer.php');
            ?></footer> 
    </body>
</html>
