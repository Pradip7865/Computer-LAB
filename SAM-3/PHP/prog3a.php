<?php
    /*
        B.Tech Computer Science and Engineering
        SAURABH YADAV
        202103103510362
    */

    // While Loop prime fibonaci series
    
    // Initilizing the variables
    $num = 0;
    $sum = 1;
    $temp = 0;
    $iterate = 1;
    $count = 20;

    // Iterationg and Printing the fibonaci series
    while ($iterate <= $count){
        $temp = $sum + $num;
        $sum = $num;
        $num = $temp;
        echo $temp." ";
        $iterate++;
    }
?>