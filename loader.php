<?php
    $page = @$_GET['pg'];

    switch ($page){
        default:{include("munkaidok.php");break;}
        case "workers":{include("dolgozok.php");break;}

        case "delworker":{include("delworker.php");break;}
        case "delshift":{include("delshift.php");break;}

        case "newshift":{include("newshift.php");break;}
        case "newworker":{include("newworker.php");break;}

        case "infoworker":{include("infoworker.php");break;}
        case "infoshift":{include("infoshift.php");break;}

        case "modshift":{include("modshift.php");break;}
        case "modworker":{include("modworker.php");break;}
        
    }
?>