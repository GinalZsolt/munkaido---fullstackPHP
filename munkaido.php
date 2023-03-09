<?php
    class Worker {
        private $database;
        public $ID;
        public $name;
        public $position;
        public $shifts;
        function __construct($id){
            $db = new DB("localhost", "2123szft_munkaido", "root", "");
            $data = $db->query("select ID, positionID, name from workers where ID=$id")[0];
            $this->ID = $data["ID"];
            $this->name = $data["name"];
            $this->position = new Position($data["positionID"]);
            $this->shifts = array();
            $data = $db->query("select ID from shifts where workerID=$this->ID");
            for ($i=0; $i < count($data); $i++) { 
                array_push($this->shifts, new Shift($data[$i]["ID"])); 
            }
            $db->__destruct();
            var_dump($this);
        }
    }
    class Position {
        public $ID;
        public $name;
        public $wage;
        function __construct($ID){
            $db = new DB("localhost", "2123szft_munkaido", "root", "");
            $data = $db->query("select * from position where ID=$ID")[0];
            $this->ID = $ID;
            $this->name = $data["name"];
            $this->wage = $data["wage"];
        }
    }
    class Shift{
        public $ID;
        public $starttime;
        public $endtime;
        public $day;
        function __construct($ID){
            $db = new DB("localhost", "2123szft_munkaido", "root", "");
            $data = $db->query("select * from shifts where ID=$ID")[0];
            $this->ID = $ID;
            $this->starttime = $data["starttime"];
            $this->endtime = $data["endtime"];
            $this->day = $data["day"];
        }
    }

?>