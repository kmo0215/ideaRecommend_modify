<?php

include '../deleteIdea_Model/deleteIdea_Model.php';

class Controller
{
    public $deleteidea;

    public function __construct() //생성자
    {
        $this->deleteidea = new DeleteIdea();
    }

    public function setDeleteIdea($id)
    {
        $this->deleteidea->SetDeleteIdea($id);
    }

    public function VerifyPassword($inputpassword)
    {
        $verifyPassword = $this->deleteidea->GetPassword();

        if($inputpassword === $verifyPassword)
        {
            $this->deleteidea->DeleteSelectedIdea($this->deleteidea->GetID());
            return 1;   
        }
        else
        {
            return 2;
        }
    }
}

?>