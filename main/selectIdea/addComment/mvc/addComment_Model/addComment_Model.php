<?php

class Comment
{
    private $ideaId; //댓글이달릴 게시글의 id값
    private $password;
    private $commentcontent;
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "123456","ideadb");
        $this->ideaId = "";
        $this->password = "";
        $this->commentcontent = "";
    }

    public function SetComment($ideaId, $commentcontent, $password)
    {
        $this->ideaId = $ideaId;
        $this->password = $password;
        $this->commentcontent = $commentcontent;

        $filtered = array(
            'id'=>mysqli_real_escape_string($this->conn, $this->ideaId),
            'commentcontent'=>mysqli_real_escape_string($this->conn, $this->commentcontent),
            'password'=>mysqli_real_escape_string($this->conn, $this->password),
        );

        $sql= "INSERT INTO comment (searchid, content, created, deletepassword) VALUES('{$filtered['id']}' , '{$filtered['commentcontent']}' , NOW(),'{$filtered['password']}')";
        $udtsql = "UPDATE idea SET commentcnt = commentcnt + 1 WHERE id = {$filtered['id']}";
        mysqli_query($this->conn,$sql);
        mysqli_query($this->conn,$udtsql);


    }



}
?>