<html>
    <head>
        <meta charset="UTF-8">
        <title>Medical Management System</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <header>
            <?php
            include('header.php');
            ?>
        </header>
        <hr>
<div class="w3-content w3-section">
    <img class="mySlides" src="Drugs_1.JPG" height="350" width="1000">
    <img class="mySlides" src="slide.png" height="350" width="1000">
     <img class="mySlides" src="login.jpg" height="350" width="1000">
</div>
     <script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>   
       <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>      
       <footer>
           <?php 
           include('footer.php') 
           ?>
       </footer>
    </body>
</html>
