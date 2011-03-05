<?php

class StatisticsController extends Zend_Controller_Action
{

    public function indexAction()
    {
        // action body
        $daemon = new \PhpTaskDaemon\Core\Runner();
        $this->view->status = $daemon->getStatistics();
    }

}

