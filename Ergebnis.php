<!DOCTYPE html>
<head>
</head>
<html>
<body>
    <?php
    $no1=$_GET["z1"];
    $no2=$_GET["z2"];

    echo"Hallo "; echo $_GET["email"]; echo" hier ist ihr Ergebnis";
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

</body>
</html>