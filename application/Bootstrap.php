<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

	protected function _initViewSettings(){
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('HTML5');
        $view->headMeta()->setCharset('iso-8859-1');
    }
}

