
<?php
require 'database.php';

$sql = "SELECT * FROM Recepten";

$result = mysqli_query($conn,$sql);

$Recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    
</head>         
<body>

    <header class="header">
        <div class="headerdiv">
        <div><img src="images/Logorecept.png" width="160" height="70"></div>           
        <ul>
            <li><a class="active" href="#home">Trending</a></li>
            <li><a href="#Sales">Sales</a></li>
            <li><a href="#Shopping cart">Shopping cart</a></li>
            <li><a href="#Contact">contact</a></li>
        </ul>
        </div>
    </header>

    <nav></nav>

    <main>  

    <div class ="aboveTitle">Echte Welsche Recepten</div>

    <?php foreach ($Recepten as $Recept) : ?>
        <section class="divcontainer"> 
            <div>
                <div class="Title"><?php echo $Recept['Naam']?></div>
                <section class="row">
                <div class="image"><img src="images/<?php echo $Recept['image']?>" width="280" height="140"></div>
                <div class="description"><?php echo $Recept['description']?></div>  
                </section>
                  <section class="row">
                     <div class="underdiv"><?php echo $Recept['tijd']?></div>
                     <div class="underdiv"><?php echo $Recept['ingredienten']?></div>
                     <div class="underdiv">Prijs $<?php echo $Recept['prijs']?></div>
                  </section>                     
            </div>   
        </section>
        <?php endforeach; ?>   

    </main>

    <footer>
        
    </footer>
</body>
</html>