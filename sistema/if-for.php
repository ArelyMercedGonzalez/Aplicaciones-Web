<?php

     for ($i = 0; $i < 5; $i++) {
    print "<p>Hola</p>\n";
     }
?>
<?php
    echo "la lista de números elegidos son:";
    for($i=4; $i<=26; $i=$i+2){                
        echo "<br>";
        echo $i;
    }
    ?>
<?php
    for($i=1; $i<=15; $i++){
        echo $i;// Ciclos
        echo "<br>";
     }
     ?>
<?php
     if ($ok == "Ingreso") {
        for($b=1; $b<=10; $b=$b+1)
        { echo $b." cuantos perros ingresaron <br> " ; };
        };
        ?>
<?php
        print "<p>Comienzo</p>\n";
        for ($i=1;$i<6;$i=$i+2){
            print"<p>$i</p>\n";
        }
        print "<p>Final</p>\n";
?>
<?php 
 $lentes = true;
 if ($lentes) {
 echo "Si estas usando lentes";
 } else {
 echo "No estas utilizando lentes";
 } 
?>
<?php 
 //lentes = 1 Si uso lentes
 //lentes = 2 Si uso lentes pero solo para leer
 //lentes = 3 No uso lentes

 $lentes = 2;

 if ( $lentes == 1 ) {// Primer IF
 echo "Si uso lentes";
 } elseif( $lentes == 2 ) {// Segundo IF
 echo "Si uso lentes pero solo para leer";
 }else{// Valor falso
 echo "No uso lentes";
 }
  
?>
<?php
if ($a > $b) {
    echo "a es mayor que b";
} elseif ($a == $b) {
    echo "a es igual que b";
} else {
    echo "a es menor que b";
}
?>
