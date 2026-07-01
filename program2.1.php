<?php
    $day = array("monday","tuesday","wednesday","thrusday","saturday","sunday");
    $ass = array(
        "jan" => 31,
        "feb"  => 28,
        "mar"  => 30,
        "apr"  => 31,
        "may"  => 30,
        "jun"  => 31,
        "jul"  => 30,
        "aug"  => 31,
        "sep"  => 30,
        "oct"  => 31,
        "nov"  => 30,
        "dec"  => 31
            
    );
    $laptop = array(
        "hp" => array(
            "modal" => "victus",
            "price" => 67000
        ),
         "asus" => array(
            "modal" => "vivobook",
            "price" => 45000
        )
    );
    echo "singal array";
    print_r($day);
    echo "<br>";
    echo "<br>";
    echo "associate array";
    print_r($ass);
    echo "<br>";
    echo "<br>";
    echo "multidimantional array";
    print_r($laptop);
    
    
    
?>    