<?php
    $page = @$_GET['pg'];

    switch ($page){
        default:{include("munkaidok.php");break;}
        case "workers":{include("dolgozok.php");break;}

        case "workers_del":{include("delworker.php");break;}
        case "shift_del":{include("delshift.php");break;}

        case "shift_add":{include("newshift.php");break;}
        case "workers_add":{include("newworker.php");break;}

        case "workers_info":{include("infoworker.php");break;}
        case "shift_info":{include("infoshift.php");break;}

        case "shift_mod":{include("modshift.php");break;}
        case "workers_mod":{include("modworker.php");break;}

    }
?>