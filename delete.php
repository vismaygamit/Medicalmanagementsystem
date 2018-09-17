<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       $id=$_REQUEST['id'];
     $con=new mysqli("localhost","root","","project");               
		$sql=$con->query("DELETE from medicine where id='".$id."' ");
                if($sql==TRUE)
                {
                    echo "Data Delete SuccessFully";
                    header("location:display.php");
                }
                else
                {
                        echo "fail";
                }

        ?>
    </body>
</html>
