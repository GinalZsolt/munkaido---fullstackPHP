<?php
    $db->query("SELECT shifts.ID as 'ID',
        workers.name as 'Dolgozó neve',
        starttime as  'Kezdés',
        endtime as 'Végzés',
        day as 'Nap'
        FROM shifts 
        INNER JOIN workers on workers.ID=workerID
        ");

    echo '<h3 class="text-center">Műszakok listája</h3><hr>';

    $db->toTable('c|i|u|d');

?>