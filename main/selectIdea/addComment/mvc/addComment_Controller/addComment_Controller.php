<?php

include '../addComment_Model/addComment_Model.php';


class Controller
{
    private $addComment;

    public function __construct() //생성자
    {
        $this->addComment = new Comment();
    }

    public function AddComment($ideaId, $commentcontent, $password)
    {   
        $this->addComment->SetComment($ideaId, $commentcontent, $password);
    }


}

?>