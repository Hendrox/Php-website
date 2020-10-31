<!DOCTYPE html>
<head>
    <link href="TestSeite.css" rel="stylesheet">
    <title>Start</title>
</head>
<body>
    <div class="wrapper">
        <header>
          <!-- Kommentar-->
          <a href="index.html">Start</a>
          <a href="Seite1.html">Seite 1</a>
          <a href="Seite2.html">Seite 2</a>
          <a href="rechner.php">Rechner</a>
          <p></p>
        </header>

        <article class="main">
            <?php
    $no1=$_GET["z1"];
    $no2=$_GET["z2"];

    echo"Hallo "; echo $_GET["name"]; echo" hier ist ihr Ergebnis";
    echo"<br><br>";
    

   echo" $no1 + $no2 = "; echo $no1 + $no2 ;
   echo"<br>";
   echo" $no1 - $no2 = ";echo $no1 - $no2 ; 
   echo"<br>";
   echo" $no1 * $no2 = ";echo $no1 * $no2 ;
   echo"<br>";
   echo" $no1 / $no2 = ";echo $no1 / $no2 ;
   echo"<br>";
   echo" sqrt($no1) = ";echo sqrt($no1) ;
   echo"<br>";
   echo" sqrt($no2) = ";echo sqrt($no2) ;
   echo"<br>";
   
   echo" $no1 % $no2 = ";echo $no1 % $no2 ;
   echo"<br>";
   echo" $no1 ^ $no2 = ";echo $no1 ** $no2 ;
   echo"<br>";
   echo" random number = ";echo rand(1,6) ;
   echo"<br>";
   
    ?>
    <?php
    date_default_timezone_set("Europe/Berlin");
    echo "The time is " . date("h:i:sa");

?>
        </article>

        <aside class="aside aside-1">
        2

        </aside>

        <aside class="aside aside-2">
         3  
        </aside>
        <footer>
           5
        </footer>
    </div>
</body>