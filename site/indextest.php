
<?php
require 'database.php';


$orderSQL = "";

if(isset($_GET['sort'])){
  $type  = $_GET['sort'];

  if($type == 'minuten'){
    $orderSQL= "ORDER BY MinutesINT DESC";
  }

  if($type == 'prijs'){
    $orderSQL= "ORDER BY prijs DESC";
    // var_dump($type);die;
  }

    if($type == 'moeilijkheid'){
      $orderSQL= "ORDER BY Moelijkheid DESC";
    
  }
}


$sql = "SELECT * FROM Recepten $orderSQL";

$result = mysqli_query($conn,$sql);

$Recepten = mysqli_fetch_all($result, MYSQLI_ASSOC);




?>



<link rel="stylesheet" href="styleB.css">
<link rel="stylesheet" href="style.css">

<!-- Background & animion & navbar & title -->
  <div class="container-fluid">
<!-- Background animtion-->
    <div class="background">
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
      <div class="cube"></div>
    </div>
<!-- header -->
   <header>
   <nav class="header">
        <div class="headerdiv">
        <div><img src="images/Logorecept.png" width="160" height="70"></div>           
        <ul>
            <li><a class="active" href="#home">Home</a></li>
        </ul>
        </div>
    </nav>
     
<!-- title & content -->
      <section class="header-content">

      <div class ="aboveTitle">Echte Welsche Recepten</div>
      <div class="collegeimg"><img src="images/collage.png" width="700" height="450"></div>

      <div class="divcontainer2">
        <section class="row2">      
                <div class="sort"><a href="indextest.php?sort=minuten">sort by minutes</a></div>
                <div class="sort"><a href="indextest.php?sort=prijs">sort by price</a></div>
                <div class="sort"><a href="indextest.php?sort=moeilijkheid">sort by difficulty</a></div>             
        </section>      
      </div>
        
      

<?php foreach ($Recepten as $Recept) : ?>
    <section class="divcontainer"> 
        <div>
            <div class="Title"><?php echo $Recept['Naam']?></div>
            <section class="row">
            <div class="image"><img src="images/<?php echo $Recept['image']?>" width="280" height="170"></div>
            <div class="description"><?php echo $Recept['description']?></div>  
            <div class="button"><a href="<?php echo $Recept['link']?>">Make!</a></div>
            </section>
              <section class="row">
                 <div class="underdiv"><?php echo $Recept['tijd']?></div>
                 <div class="underdiv"><?php echo $Recept['ingredienten']?></div>
                 <div class="underdiv">Prijs $<?php echo $Recept['prijs']?></div>
                 <div class="underdiv">moelijkheid :<?php echo $Recept['Moelijkheid']?></div>
              </section>                     
        </div>   
    </section>
    <?php endforeach; ?>  

  </header>

  <footer></footer>