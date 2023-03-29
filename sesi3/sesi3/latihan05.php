<?php
    //model1 Associative
    $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

   // print_r($age);

    //echo "Umur Peter adalah ".$age["Peter"];
    foreach($age as $p => $u ) {
        echo $p." umurnya " . $u;

        echo "<br>";
    }