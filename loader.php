<?php
    $page = @$_GET['pg'];

    switch ($page){
        default:{
            include("login.php");
        }
    }
?>