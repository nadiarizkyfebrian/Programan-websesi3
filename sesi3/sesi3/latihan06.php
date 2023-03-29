<?php
    $mhs = array(
        array(" Ardika","22347214","Denpasar"),
        array(" Wahyu","0010044","Malang"),
        array(" Susanti","02022200","Jakarta"),
        array(" Zizi","03030033","Flores"),
    );
    foreach($mhs as $idx => $dta){
        echo "Data ke- ".$idx."<br>";
        foreach($dta as $nval){
            echo $nval."<br>";

        }
        echo "<br>";
    }