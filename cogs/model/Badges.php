<?php
class Badges extends System\Models
{

	protected $id;
	protected $BadgeName;

	public function id(){
	 	 $this->id = $this->db['id'];
	 	 return $this->id;
	 }

	public function BadgeName(){
	 	 $this->BadgeName = $this->db['BadgeName'];
	 	 return $this->BadgeName;
	 }
}