<?php

include '../recommendIdea_Model/recommendIdea_Model.php';

class Controller
{
    public $recommendIdea;

    public function __construct()
    {
        $this->recommendIdea = new RecommendIdea();
    }

    public function setID($id)
    {
        $this->recommendIdea->SetID($id);
    }

    public function Recommend()
    {
        $this->recommendIdea->IncreaseRecommend($this->recommendIdea->GetID());        
    }


}

?>