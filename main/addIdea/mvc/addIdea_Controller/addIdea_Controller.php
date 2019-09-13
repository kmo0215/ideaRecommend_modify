<?php

include '../addIdea_Model/addIdea_Model.php';

class Controller
{
    private $addIdea;

    public function __construct()
    {
        $this->addIdea = new addIdea();
    }

    public function AddIdea($title, $password, $subject, $content)
    {   
        $this->addIdea->SetaddIdea($title, $password, $subject, $content);
    }

}

?>

