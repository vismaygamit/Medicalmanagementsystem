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
        <style>table{color:black;font-size: 30px; } 
h1 p {font-size: 50px;
    color: #06BDE2;
    text-align: center;
     
}
p{color: red;}
        </style>
    </head>
   
    <body background="back.jpg">
    
    <header>
           <?php 
           include('header.php') 
           ?>
       </header>
        <?php
         
        
        $fn=NULL;
$ln=NULL;
$mob=NULL;
$email=NULL;
$pass=NULL;
$dob=NULL;
$gen=NULL;

$no=0;
if(isset($_POST['btnsu']))
{

	if($_POST['txtfname']==NULL)
	{
		$fn="<p>Please Enter the First Name!!!</p>";
		$no=1;
	}
	if($_POST['txtlname']==NULL)
	{
		$ln="<p>Please Enter the Last Name!!!</p>";
		$no=1;
	}
	if($_POST['mob']==NULL)
        {      
  $mob="<p>Please Enter the Valid Phone Number!!!</p>";
		$no=1;
	}
	if($_POST['txtemail']==NULL)
	{
		$email="<p>Please Enter the Username!!!</p>";
		$no=1;
	}
	if($_POST['txtpass']==NULL)
	{
		$pass="<p>Please Enter the Password!!!</p>";
		$no=1;
	}
	if($_POST['dob']==NULL)
	{
		$dob="<p>Please Enter the Date of Birth!!!</p>";
		$no=1;
	}
            if(!isset($_POST['gen']))
	{
		$gen="<p>Please Select the Gender!!!</p>";
		$no=1;
	}
	if($no==0)
	{       $message = "Your Account Created Succesfully";
		$fna=$_POST['txtfname'];
		$lna=$_POST['txtlname'];
		$mobi=$_POST['mob'];
		$emai=$_POST['txtemail'];
		$pas=$_POST['txtpass'];
		$do=$_POST['dob'];
		$ge=$_POST['gen'];
		$con=new mysqli("localhost","root","","project");
		$sql=$con->query("insert into sigin values('".$fna."','".$lna."','".$mobi."','".$emai."','".$pas."','".$do."','".$ge."')");
                if($sql==TRUE)
                {   
                    echo "Your Account Created Succesfully"; 
                    header("location:login.php");
                }
                 
                else
                {
                        echo "fail";
                }
        }          
}

?>     
        <br><br><br><br>
        <form method="post">
            <table align="left">
               <tr style="background-color: white"><td style="color:#0416B0"><b>Create a new account</b></td><tr><tr></tr><tr></tr><tr></tr>
            <tr><td>First Name:<input type="text" name="txtfname" placeholder="Firstname">
<span><?php echo $fn; ?></span></td></tr>
      <tr> <td> Last name:<input type="text" name="txtlname" placeholder="Lastname"><span><?php echo $ln; ?></span></td></tr>
      <tr> <td> Phone:<input type="tel" name="mob" placeholder="Mobilenumber" maxlength="10" pattern="[0-9]{10}">
<span><?php echo $mob; ?></span></td>
            </tr>
            <tr><td>Username:<input type="email" name="txtemail" placeholder="Email Address">
<span><?php echo $email; ?></span></td></tr>
                <tr><td>Password:<input type="password" name="txtpass" placeholder="Password">
<span><?php echo $pass; ?></span></td></tr>
            <tr><td>Date of Birth:<input type="date" name="dob"><span><?php echo $dob; ?></span></td></tr>
               <tr> <td>Gender:Male<input type="radio" name="gen" value="Male">
                       Female<input type="radio" name="gen" value="Female"><span><?php echo $gen; ?></span></td></tr>
            <tr><td><input type="submit" name="btnsu" height="50px" width="50px" value="Create Account"></td></tr></table>
</table>
</form>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
           
       </footer>
    </body>
</html>
