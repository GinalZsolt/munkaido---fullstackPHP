


<h1>Munkás edit:</h1>



<?php 
    $id = $_GET['ID'];
    if (isset($_POST["submit"])){
        $name = escapeshellcmd($_POST["name"]);
        if (empty($name)) showMessage("Nem adtál meg nevet!", "danger");
        else {
            $db->exec("update workers set name='$name' where ID=$id");
        }
    }
    $results = $db->query("SELECT * FROM workers WHERE ID=".$_GET['ID']);
    $_POST= $results[0];

    $db->query("select * from workers where ID=$id");
    $db->autoForm("action|workers_mod&ID=".$id."¤
    text|name|Munkás neve¤
    submit|submit|Módosítás|warning
    ");


?>