<!DOCTYPE html>
<head>
<title>Agrox | Technology</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/tms-0.3.js"></script>
<script type="text/javascript" src="js/tms_presets.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
 <link rel="stylesheet" href="css1/style.css">
</head>
<body id="page3">
<div class="body1">
  <div class="main">
      
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">Agrox Agriculture Company</a></h1>
        <nav>
          <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="DataEntry.html">Climate/ETo</a></li>
            <li class="active"><a href="fertilizers.html">Fertilizers</a></li>
            <li><a href="Irrigation.html">Irrigation</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav>
      </div>
    </header>
<?php
    $user = 'root';
    $pass = '';
    $db = 'agridb';

    $con = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

    //echo"Great Work!!!<br>";

    $b = $_POST['crop'];
    $c = $_POST['nitrogen'];
    $d = $_POST['phosphorous'];
    $e = $_POST['potassium'];

    //echo $a," ",$b," ",$c,"<br>",

    $sql = "INSERT INTO soiltest (id,crop,nitrogen,phosphorous,potassium) VALUES (NULL,'$b','$c','$d','$e')";

    if(!mysqli_query($con,$sql))
    {
        echo 'Oppsssss Something Went Wrong!!!   :(';
    }
    else
    {
        
        if($c < 10)
        {
            echo "<center>"
            . "<br><h2><b>Nitrogen Value <i>too less</i>!!!</b></h2>"
            . "<br><h3>Amount of Nitrogen needed:</h3>"
            . "<div class=container><h4>"
            . "<br><table><tr><td>Vegetable Crops:</td><td>&nbsp &nbsp Heavy</td></tr>"
            . "<tr><td>Orchard, Vineyard & Lawns:</td><td>&nbsp &nbsp Heavy</td></tr>"
            . "<tr><td>Grasses & Grains:</td><td>&nbsp &nbsp Moderate</td></tr>"
            . "</table></h4></div><br>";
                    
            $sql = "SELECT * FROM fertilizer WHERE id='6' OR id='7' OR id='8' OR id='9'";
        }
        else if($c < 20)
        {
            echo "<center>"
            . "<br><h2><b>Nitrogen Value <i>low</i>!!!</b></h2>"
            . "<br><h3>Amount of Nitrogen needed:</h3>"
            . "<div class=container><h4>"
            . "<br><table><tr><td>Vegetable Crops:</td><td>&nbsp &nbsp Heavy</td></tr>"
            . "<tr><td>Orchard, Vineyard & Lawns:</td><td>&nbsp &nbsp Moderate</td></tr>"
            . "<tr><td>Grasses & Grains:</td><td>&nbsp &nbsp Light</td></tr>"
            . "</table></h4></div><br>";
            
            $sql = "SELECT * FROM fertilizer WHERE id='7' OR id='5' OR id='3'";
        }
        else if($c < 30)
        {
            echo "<center>"
            . "<br><h2><b>Nitrogen Value <i>moderate</i>!!!</b></h2>"
            . "<br><h3>Amount of Nitrogen needed:</h3>"
            . "<div class=container><h4>"
            . "<br><table><tr><td>Vegetable Crops:</td><td>&nbsp &nbsp Moderate</td></tr>"
            . "<tr><td>Orchard, Vineyard & Lawns:</td><td>&nbsp &nbsp Light</td></tr>"
            . "<tr><td>Grasses & Grains:</td><td>&nbsp &nbsp DO NOT ADD</td></tr>"
            . "</table></h4></div><br>";
            
            $sql = "SELECT * FROM fertilizer WHERE id='5' OR id='4' OR id='3' OR id='2'";
        }
        else if($c < 40)
        {
            echo "<center>"
            . "<br><h2><b>Nitrogen Value <i>high</i>!!!</b></h2>"
            . "<br><h3>Amount of Nitrogen needed:</h3>"
            . "<div class=container><h4>"
            . "<br><table><tr><td>Vegetable Crops:</td><td>&nbsp &nbsp Light</td></tr>"
            . "<tr><td>Orchard, Vineyard & Lawns:</td><td>&nbsp &nbsp DO NOT ADD</td></tr>"
            . "<tr><td>Grasses & Grains:</td><td>&nbsp &nbsp DO NOT ADD</td></tr>"
            . "</table></h4></div><br>";
            
            $sql = "SELECT * FROM fertilizer WHERE id='2' OR id='1'";
        }
        else
        {
            echo "<center>"
            . "<br><h2><b>Nitrogen Value <i>very high</i>!!!</b></h2>"
            . "<br><h3>Amount of Nitrogen needed:</h3>"
            . "<div class=container><h4>"
            . "<br><table><tr><td>Vegetable Crops:</td><td>&nbsp &nbsp DO NOT ADD</td></tr>"
            . "<tr><td>Orchard, Vineyard & Lawns:</td><td>&nbsp &nbsp DO NOT ADD</td></tr>"
            . "<tr><td>Grasses & Grains:</td><td>&nbsp &nbsp DO NOT ADD</td></tr>"
            . "</table></h4></div><br>";
            
            
        }
            /*echo "<center>"
            . "<br><h2><b>HEAVY Nitrogen Application</b></h2>"
            . "<div class=container><h4>"
            . "<br><table><tr><th>Product</th><th>&nbsp &nbsp Rate per Acre</th></tr>"
            . "<tr><td>F101 Blood Meal (14% nitrogen)</td><td>&nbsp &nbsp 600-1,200 pounds</td></tr>"
            . "<tr><td>F1055 Fish Meal (10% nitrogen)</td><td>&nbsp &nbsp 1,000-2,000 pounds</td></tr>"
            . "<tr><td>F790 Cottonseed Meal (6% nitrogen)</td><td>&nbsp &nbsp 1,200-2,400 pounds</td></tr>"
            . "<tr><td>F940 Feather Meal (12% nitrogen)</td><td>&nbsp &nbsp 800-1,600 pounds</td></tr>"
            . "</table></h4></div><br>";
            
            echo "<center>"
            . "<br><h2><b>MODERATE Nitrogen Application</b></h2>"
            . "<div class=container><h4>"
            . "<br><table><tr><th>Product</th><th>&nbsp &nbsp Rate per Acre</th></tr>"
            . "<tr><td>F101 Blood Meal (14% nitrogen)</td><td>&nbsp &nbsp 500-1,000 pounds</td></tr>"
            . "<tr><td>F1055 Fish Meal (10% nitrogen)</td><td>&nbsp &nbsp 750-1,500 pounds</td></tr>"
            . "<tr><td>F790 Cottonseed Meal (6% nitrogen)</td><td>&nbsp &nbsp 1,000-2,000 pounds</td></tr>"
            . "</table></h4></div><br>";
            
            echo "<center>"
            . "<br><h2><b>LIGHT Nitrogen Application</b></h2>"
            . "<div class=container><h4>"
            . "<br><table><tr><th>Product</th><th>&nbsp &nbsp Rate per Acre</th></tr>"
            . "<tr><td>F101 Blood Meal (14% nitrogen)</td><td>&nbsp &nbsp 350-700 pounds pounds</td></tr>"
            . "<tr><td>F1055 Fish Meal (10% nitrogen)</td><td>&nbsp &nbsp 500-1,000 pounds</td></tr>"
            . "<tr><td>F790 Cottonseed Meal (6% nitrogen)</td><td>&nbsp &nbsp 700-1,400 pounds</td></tr>"
            . "</table></h4></div><br>";*/
        
        if($result = mysqli_query($con, $sql)){
                if(mysqli_num_rows($result) > 0){
                    
                    echo "<center>"
            . "<br><h2>Nitrogen Application</h2>"
            . "<div class=container><h4>"
            . "<br><table><tr><th><u>Product</u></th><th>&nbsp &nbsp <u>Rate per Acre</u></th></tr>";
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>&nbsp &nbsp " . $row['name'] . "</td>";
                        echo "<td>&nbsp &nbsp " . $row['rate'] . "</td>";
                        echo "</tr>";
                    }
            echo "</table></h4></div><br>";
                    
                    // Close result set
                    mysqli_free_result($result);
                } else{
                    echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
    }