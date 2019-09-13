<?php

class DeleteComment
{
    public $id;
    public $searchid; //댓글이 등록된 게시글의 id
    public $password;
    public $conn;

    public function __construct()
    {
        $this->id = "";
        $this->searchid = "";
        $this->password = "";
        $this->conn = mysqli_connect("localhost", "root", "123456","ideadb");//DB 접속
    }
    
    public function SetDeleteComment($id)
    {
        $filtered_id = mysqli_real_escape_string($this->conn, $id);
        $sql = "SELECT * FROM comment WHERE id = {$filtered_id}";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_array($result);

        $this->id = $row['id'];
        $this->searchid = $row['searchid'];
        $this->password = $row['deletepassword'];
    }

    public function GetQueryDeletePassword($id)
    {
        $sql= "DELETE FROM comment WHERE id = {$id}";
        return $sql;
    }

    public function GetQueryDecreaseCommentCount($id)
    {
        $searchsql = "SELECT searchid FROM comment WHERE id = {$id}";
        $searchquery = mysqli_query($this->conn,$searchsql);
        $searchrow = mysqli_fetch_array($searchquery);
        $dcrssql = "UPDATE idea SET commentcnt = commentcnt - 1 WHERE id = {$searchrow['searchid']}";
        return $dcrssql;
    }
}

?>