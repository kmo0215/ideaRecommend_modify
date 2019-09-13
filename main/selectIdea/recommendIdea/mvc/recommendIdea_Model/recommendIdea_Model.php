<?php
class RecommendIdea
{
    public $id;

    public function __construct()
    {
        $this->id = "";
        $this->_conn = mysqli_connect("localhost", "root", "123456","ideadb");//DB 접속
    }

    public function SetID($id)
    {
        $filtered_id = mysqli_real_escape_string($this->_conn, $id);
        $this->id = $filtered_id;
    }

    public function GetID()
    {
        return $this->id;
    }   

    public function IncreaseRecommend($id)
    {
        $sql= "UPDATE idea SET recommend = recommend + 1 WHERE id = {$id}";
        $result = mysqli_query($this->_conn, $sql);
    }

}

?>