<?php
    $day=date('D');

    //menampilkan hari ini
    switch ($day)
    {
        case "Sun":
            $hari = "Minggu";
            break;
        case "Mon":
            $hari = "Senin";
            break; 
        case "Tue":
            $hari = "Selasa";
            break;
        case "Wed":
            $hari = "Rabu";
            break; 
        case "Thu":
            $hari = "Kamis";
            break;
        case "Fri":
            $hari = "Jumat";
            break;
        case "Sat":
            $hari = "Sabtu";
            break;              
    }
    echo $hari;
    echo "<br/>";
    echo date('d - m - Y');


?>