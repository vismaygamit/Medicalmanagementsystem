<?php session_start();?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title><style>
table{color:black;font-size: 30px; } 
h1 p {font-size: 50px;
    color: #06BDE2;
    text-align: center;
     
}
p{color: red;}
        </style>
    </head>
   <header>
           <?php 
           include('header.php') 
           ?>
       </header>
    <body background="back.jpg">
              
<?php 
$no=0;
$u=NULL;
$p=NULL;

if(isset($_POST['btnsi']))
{
    if($_POST['txtus']==NULL)
	{
		$u="<p>Please Enter the UserName!!!</p>";
		$no=1;
	}
	if($_POST['txtpass']==NULL)
	{
		$p="<p>Please Enter the Password!!!</p>";
		$no=1;
	}
       // if($_POST['txtus']==Admin && $_POST['txtpass']==Admin){header('location:admin.php');}
        if($no==0)
        {
            $en=$_POST['txtus'];
            $pa=$_POST['txtpass'];           
            $mysql =new mysqli("localhost","root","","project");
            $result=$mysql->query("select fname,email,password from sigin where email='".$en."' and password='".$pa."'");
            
            if($result==TRUE)
            {
               $row=$result->fetch_assoc();
                $_SESSION['un']=$row['fname'];
                $_SESSION['enroll']=$row['email'];
                 $_SESSION['password']=$row['password'];
                 
                 if($_SESSION['enroll']==$en &&  $_SESSION['password']==$pa)
                 {
                     echo 'login';
                     header('location:admin.php');
                     
                 }
                 else {
                    echo 'Operation failed!!!';
                 }
                
            }
                else {
                     echo 'Incorrect email or password!!!';
                }
            
        }
}
?>
        
   
     
        <div>
        <form method="post">
            
            <table align="center">
                <tr style="background-color: white"><td style="color:#0416B0"><b>Sign In</b></td><tr>
            <tr><td>Username:<input type="text" name="txtus" placeholder="Username"><span><?php echo $u; ?></span></td></tr><br>
       <tr><td> Password:<input type="password" name="txtpass" placeholder="Password"><span><?php echo $p; ?></span></td></tr><br>
       <tr><td><input type="submit" name="btnsi" value="Log in"></td><td><a href="new.php"><input type="submit" value="Create New Account"></a></td></tr>
            </table>
        </form>
           
        </div>
        
       <br><br><br><br><br><br><br><br><br><br><br><br>
        <footer>
           <?php 
           include('footer.php') 
           ?>
       </footer>
    </body>
</html>
