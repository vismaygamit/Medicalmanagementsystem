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
        <style>
            table{background-color: aliceblue}
            
        </style>
    </head>
    <body>
        <header>
           <?php 
           include('he.php') 
           ?>
       </header>
        <?php
           $con= new mysqli('localhost','root','','project');
		$sql=$con->query("select * from medicine");
                echo"<table border=1><tr><td>Medicine_id</td><td>Medicine Name</td><td>Manufacture Date</td><td>Expiry Date</td><td>Description</td><td>Quantity</td><td>Price</td><td>Delete</td><td>Edit</td></tr>";
                if($sql==TRUE)
                {                   
                  echo "<tr>";
                while ($raw=$sql->fetch_assoc()){                  
                echo "<td>".$raw['id']."</td>". "<td>".$raw['mname']."</td>". "<td>".$raw['mdate']."</td>"."<td>".$raw['Expiry_date']."</td>"."<td>".$raw['description']."</td>"."<td>".$raw['qty']."</td>"."<td>".$raw['price']."</td>"."<td><a href='delete.php?id=$raw[id]'>Delete</a></td>"."<td><a href='Edit.php?id=$raw[id]'>Edit</a></td>"."</tr>";
                      
                }
                }
            else
                {
                  "fail";
                 }
                 echo '</table>';
            

        
        
        ?>
        <br><br><br><br><br><br><br><br><br>
<footer>
           <?php 
           include('footer.php') 
           ?>
       </footer>
    </body>
</html>
