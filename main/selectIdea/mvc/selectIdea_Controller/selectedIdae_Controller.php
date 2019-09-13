<?php

include '../selectIdea_Model/selectedIdae_Model.php';

class Controller
{
    public $selectedIdea;
    public $commentList;

    public function __construct() //생성자
    {
        $this->selectedIdea = new SelectedIdea();
        $this->commentList = new CommentList();
    }
    
    //아이디어 
    public function getQuery($id)
    {
        return $this->selectedIdea->GetQuery($id);
    }
    public function setSelectedIdea($query)
    {
        $this->selectedIdea->SetSelectedIdea($query);
    }

    public function getSelectedIdeaTitle()
    {
        return $this->selectedIdea->GetSelectedIdeaTitle();
    }

    public function getSelectedIdeaSubject()
    {
        return $this->selectedIdea->GetSelectedIdeaSubject();
    }

    public function getSelectedIdeaCreated()
    {
        return $this->selectedIdea->GetSelectedIdeaCreated();
    }

    public function getSelectedIdeaContent()
    {
        return $this->selectedIdea->GetSelectedIdeaContent();
    }
    //아이디어


    //코멘트
    public function getCommentListQuery($id)
    {
        return $this->commentList->GetQuery($id);
    }

    public function setCommentList($query)
    {
        $this->commentList->SetCommentList($query);
    }

    public function getCommentList()
    {
        return $this->commentList->GetCommentList();
    }
    //코멘트


}



?>