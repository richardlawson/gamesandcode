<?php
class Application_Model_Gamer extends Application_Model_Abstract{
	private $_id = 0;
	private $_facebookId = '';
	private $_firstName = '';
	private $_lastName = '';
	private $_scores = array();
	
	public function setId($id){
		$this->_id = (int) $id;
	}
	
	public function getId(){
		return $this->_id;
	}
	
	public function setFacebookId($facebookId){
		$this->_facebookId = (string) $facebookId;
	}
	
	public function getFacebookId(){
		return $this->_facebookId;
	}
	
	public function setFirstName($firstName){
		$this->_firstName = (string) $firstName;
	}
	
	public function getFirstName(){
		return $this->_firstName;
	}
	
	public function setLastName($lastName){
		$this->_lastName = (string) $lastName;
	}
	
	public function getLastName(){
		return $this->_lastName;
	}
	
	public function getScores(){
		return $this->_scores;
	}
	
	public function getHighScore(){
		
	}
	
	public function getLowScore(){
		
	}
	
	public function getAverageScore(){
		
	}

}