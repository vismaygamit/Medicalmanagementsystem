
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
            hr{border: 1px solid black}
            
            #i{position:absolute;}
            
            .mySlides {display:none;} 
            
             #u{ list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #DDFAF9  ;  }
            
             #l #a {float: left;
                    display: inline-block;
                    color: blue;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;}

              a:hover {
                   background-color: #A3F8F5;}
</style>
    </head>
    <body background="back.jpg">
   <header>
        <img src="medi.jpg" height="70" width="70"  id="i">    
        <h1 style="text-align: center" >VDK Medical Shop</h1>        
    </header>       
        <ul id="u">
            <li id="l"><a class="active" href="index.php" id="a">Home</a></li>
    
    <ul style="float:right;list-style-type:none;" id="u">
        <li id="l"> <a href="signout.php" id="a">
           Sign Out</a>
            <a href="#"><?php echo "<h3 style='color:blue;'>Welcome ".$_SESSION['un']."</h3>"; ?></a></li>
    </ul>
</ul>
    </body>
</html>