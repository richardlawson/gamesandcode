<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initViewSettings(){
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('HTML5');
        $view->headMeta()->setCharset('iso-8859-1');
    }
    
 	// Do not rename this method _initDoctrine() this will result in a circular dependency error.
	protected function _initDoctrineExtra(){
    	$doctrine = $this->bootstrap('doctrine')->getResource('doctrine');    
    	$em = $doctrine->getEntityManager();
    	Zend_Registry::set('em', $em);
	}
	
	protected function _initFacebookProperties(){
		Zend_Registry::set('facebookProperties', $this->getOption('facebook'));	
	}
    
    
}

