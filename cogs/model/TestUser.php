<?php
class TestUser extends Models
{
    protected $db;

    public function FirstName(){
        return $this->db['firstName'];
    }

    public function LastName(){
        return $this->db['lastName'];
    }
}