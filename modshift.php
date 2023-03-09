<h1>Munkaidő módosítás:</h1>

<?php 
    $id = $_GET["ID"];
    $results = $db->query("select workerID from shifts where ID=$id");
    $work = new Worker($results[0]["workerID"]);
    foreach ($work->shifts as $shift){
        if ($shift->ID == $_GET["ID"]){
            $_POST = array(
                "starttime"=>$shift->starttime,
                "endtime"=>$shift->endtime,
                "day"=>$shift->day
            );
        }
    } 
    $_POST;

    $db->autoForm(
        "action|shifts_mod&ID=".$id."¤
        
        time|starttime|Kezdés¤
        time|endtime|Végzés¤
        date|day|Dátum
        "
    )


?>