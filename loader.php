<?php
    $page = @$_GET['pg'];

    switch ($page){
        default:{include("munkaidok.php");break;}
        case "workers":{include("dolgozok.php");break;}

        case "workers_del":{include("delworker.php");break;}
        case "shifts_del":{include("delshift.php");break;}

        case "shifts_add":{include("newshift.php");break;}
        case "workers_add":{include("newworker.php");break;}

        case "workers_info":{include("infoworker.php");break;}
        case "shifts_info":{include("infoshift.php");break;}

        case "shifts_mod":{include("modshift.php");break;}
        case "workers_mod":{include("modworker.php");break;}

    }
?>