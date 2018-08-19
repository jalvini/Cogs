<?php
class TestUser extends System\Models{

	protected $id;
	protected $Username;
	protected $Password;
	protected $FirstName;
	protected $LastName;
	protected $Address;
	protected $City;
	protected $State;
	protected $Zip;
	protected $Position;

	public function id(){
	 	 $this->id = $this->db['id'];
	 	 return $this->id;
	 }

	public function Username(){
	 	 $this->Username = $this->db['Username'];
	 	 return $this->Username;
	 }

	public function Password(){
	 	 $this->Password = $this->db['Password'];
	 	 return $this->Password;
	 }

	public function FirstName(){
	 	 $this->FirstName = $this->db['FirstName'];
	 	 return $this->FirstName;
	 }

	public function LastName(){
	 	 $this->LastName = $this->db['LastName'];
	 	 return $this->LastName;
	 }

	public function Address(){
	 	 $this->Address = $this->db['Address'];
	 	 return $this->Address;
	 }

	public function City(){
	 	 $this->City = $this->db['City'];
	 	 return $this->City;
	 }

	public function State(){
	 	 $this->State = $this->db['State'];
	 	 return $this->State;
	 }

	public function Zip(){
	 	 $this->Zip = $this->db['Zip'];
	 	 return $this->Zip;
	 }

	public function Position(){
	 	 $this->Position = $this->db['Position'];
	 	 return $this->Position;
	 }
}