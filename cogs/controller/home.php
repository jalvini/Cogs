<?php
class Home{
    private $records;
    private $user;
    private $state;
    private $statename;
    private $multi;

    public function GetUsers($user, $state, $statename, $multi){
        $this->user = $user;
        $this->state = $state;
        $this->statename = $statename;
        $this->multi = $multi;

        $this->records = Database::Select($this->user, $this->state, $this->statename, $this->multi);
    }

    public function SetUsers(){
        return $this->records;
    }
}
