<?php
    $array_buah = [
        'p' => "pepaya",
        'm' => "Mangga",
        'p' => "Pisang",
        'j' => "Jambu",
    ];
    echo '<ol>' ;
        foreach($array_buah as $key => $value) {
            echo '<li>' .$key. ' - ' .$value. '</li>' ;
        }
    echo '</ol>' ;
    sort($array_buah) ;
    echo '<hr/>' ;
    foreach ($array_buah as $key => $value) {
        echo '<li>' .$key. ' - ' .$value. '</li>' ;
    }
?>