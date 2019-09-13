<?php

include '../main_Model/main_model.php'; // model클래스를 사용하기위해 호출

class Controller
{
    public $_ideaList; //model.php의 ideaList클래스 호출

    private $_conn;

    public function __construct()
    {
        $this->_ideaList = new IdeaList();
        $this->_conn = mysqli_connect("localhost", "root", "123456","ideadb");//DB 접속, 삭제필요
    }

    public function getQuery($sqloption, $sqlType)
    {
        return $this->_ideaList->GetQuery($sqloption, $sqlType);
    }

    public function setIdeaList($query)
    {
        $this->_ideaList->_SetIdeaList($query);
    }
    public function getIdeaList()
    {
        return $this->_ideaList->GetIdeaList();
    }

    public function setIdeaItem($query)
    {
        $this->_ideaList->_SetIdeaItem_test($query);
    }
    public function getIdeaItem()
    {
        return $this->_ideaList->_GetIdeaItem_test();
    }
}


?>