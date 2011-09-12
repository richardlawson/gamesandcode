<?php

abstract class Application_Model_Abstract{

	public function __construct(array $options = null){
		if (is_array($options)){
            $this->setOptions($options);
        }
    }
	
	public function setOptions(array $options){
		$methods = get_class_methods($this);
		foreach($options as $key => $value){
			$method = 'set' . ucfirst($key);
			if(in_array($method, $methods)){
				$this->$method($value);
			}
		}
		return $this;
	}
	
	public function __set($name, $value){
		$method = 'set' . $name;
		if(!method_exists($this, $method)){
			throw new Exception('Invalid ' . __CLASS__ . ' property');
		}
		$this->$method($value);
    }
 
    public function __get($name){
		$method = 'get' . $name;
		if(!method_exists($this, $method)){
			throw new Exception('Invalid ' . __CLASS__ . ' property');
		}
		return $this->$method();
    }

    public function toArray(){
    	$objArray = array();
    	$methods = get_class_methods($this);
    	foreach($methods as $method){
    		// we only want to get the getMethods
			$property = $this->findClassProperty($method);
			if(!is_null($property)){
				$value = $this->$method();
				if($value instanceof Zend_Date){
					$value = $value->toString('dd/MM/YYYY');
				}
				$objArray[$property] = 	$value;
			}
		}
    	return $objArray;
    }
    
    private function findClassProperty($methodName){
    	if((strlen($methodName) > 3) && ('get' == substr($methodName, 0, 3))){
			$property = substr($methodName, 3);
			$property{0} = strtolower($property{0});
			return $property; 
		}
		return null;
    }

}

