<?php

class StatusController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $state = \PhpTaskDaemon\Daemon\State::getState();
        $this->view->state = $state;
    }

}

