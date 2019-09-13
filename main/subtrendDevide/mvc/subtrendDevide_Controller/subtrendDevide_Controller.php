<?php

include '../subtrendDevide_Model/subtrendDevide_Model.php';

class Controller
{
    private $subSubject;

    public function __construct()
    {
        $this->subSubject = new SubSubject();
    }

    public function setSubSubject($_categoryID)
    {
        $this->subSubject->SetsubSubjectItem($_categoryID);
    }

    public function getSubSubject()
    {
        return $this->subSubject->GetsubSubjectItem();
    }


}


?>
