<?php
class GamerTest extends PHPUnit_Framework_TestCase{
	
	protected $_gamer;
	
	protected function setUp(){
		$application = new Zend_Application(
            APPLICATION_ENV,
            APPLICATION_PATH . '/configs/application.ini'
        );
        $application->bootstrap();
		
		$this->_gamer = new Application_Model_Gamer();
		parent::setUp();
	}


	protected function tearDown(){
	
	}
	
	public function testIdProperty(){
		$this->_gamer->id = 5;
		$this->assertEquals(5, $this->_gamer->id);
	}
	
	public function testIdSetterAndGetter(){
		$this->_gamer->setId(5);
		$this->assertEquals(5, $this->_gamer->getId());
	}
	
	public function testFacebookProperty(){
		$this->_gamer->facebookId = 'richard';
		$this->assertEquals('richard', $this->_gamer->facebookId);
	}
	
	public function testFacebookIdSetterAndGetter(){
		$this->_gamer->setFacebookId('richard');
		$this->assertEquals('richard', $this->_gamer->getFacebookId());
	}
	
	public function testFirstNameProperty(){
		$this->_gamer->firstName = 'joe';
		$this->assertEquals('joe', $this->_gamer->firstName);
	}
	
	public function testFirstNameSetterAndGetter(){
		$this->_gamer->setFirstName('joe');
		$this->assertEquals('joe', $this->_gamer->getFirstName());
	}
	
	public function testLastNameProperty(){
		$this->_gamer->lastName = 'bloggs';
		$this->assertEquals('bloggs', $this->_gamer->lastName);
	}
	
	public function testLastNameSetterAndGetter(){
		$this->_gamer->setLastName('bloggs');
		$this->assertEquals('bloggs', $this->_gamer->getLastName());
	}
	
	public function testGamerScoreIsEmptyOnDefaultInitizialization(){
		$this->assertEmpty($this->getScores());
	}
	
	public function testAddScore(){
		$this->markTestIncomplete();
	}
	
	public function testRemoveScore(){
		$this->markTestIncomplete();
	}
	
	public function testGetHighScore(){
		$this->markTestIncomplete();
	}
	
	public function testGetLowScore(){
		$this->markTestIncomplete();
	}
	
	public function testGetAverageScore(){
		$this->markTestIncomplete();
	}
	
	
}