<?php
    $db->query("SELECT ID as 'ID',
        name as 'Név',
        wage as 'Órabér (Ft)'
        FROM position
        ");

    echo '<h3 class="text-center">Dolgozók listája</h3><hr>';

    $db->toTable('c|i|u|d');

?>