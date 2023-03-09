<?php
    $workersQuery = $db->query("select ID from workers");
    $workers = array();
    foreach ($workersQuery as $dt) {
        array_push($workers, new Worker($dt["ID"]));
    }
    echo '<h3 class="text-center">Műszakok listája</h3><hr>';
    $db->query("SELECT shifts.ID as 'ID',
                workers.name as 'Dolgozó neve',
                starttime as 'Kezdés',
                endtime as 'Végzés',
                day as 'Nap'
                FROM shifts
                INNER JOIN workers on workers.ID=workerID");
    $db->toTable('c|i|u|d');

?>
<div id="calendar"></div>



<script src="./js/fullcalendar/index.global.min.js"></script>
<script>
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        events:[
            <?php 
                foreach ($workers as $worker){
                    echo join($worker->CreateFullCalendarEvent(), ",");
                }
            ?>
        ],
        eventClick: function(info){
            console.log(info.event);
        }
    });
    calendar.render();



</script>