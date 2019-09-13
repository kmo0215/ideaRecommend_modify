<?php

class UpdateIdea
{
    private $id;
    private $title;
    private $password;
    private $subject;
    private $content;

    private $conn;

    public $verifypassword;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "123456","ideadb");
        $this->id = "";
        $this->title = "이전내용";
        $this->password = "이전내용";
        $this->subject = "이전내용";
        $this->content = "이전내용";

        $this->verifypassword = "";
    }

    public function LoadPreviousIdea($id)
    {
        $filtered_id = mysqli_real_escape_string($this->conn, $id);
        $sql = "SELECT * FROM idea WHERE id={$filtered_id}";

        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_array($result);

        $this->id = $filtered_id;
        $this->title = $row['title'];
        $this->password = $row['deletepassword'];
        $this->subject = $row['subject'];
        $this->content = $row['content'];
    }

    
    public function GetID()
    {
        return $this->id;
    }

    public function GetTitle()
    {
        return $this->title;
    }
    public function GetPassword()
    {
        return $this->password;
    }
    public function GetSubject()
    {
        return $this->subject;
    }
    public function GetContent()
    {
        return $this->content;
    }


    public function UpdateSelectedIdea($id, $title, $password, $subject, $content)
    {
        $filtered = array(
        'id'=>mysqli_real_escape_string($this->conn, $id),
        'ideatitle'=>mysqli_real_escape_string($this->conn, $title),
        'select_subject'=>mysqli_real_escape_string($this->conn, $subject),
        'ideacontent'=>mysqli_real_escape_string($this->conn, $content),
        'deletepassword'=>mysqli_real_escape_string($this->conn, $password)
        );
        $sql= "UPDATE idea SET title = '{$filtered['ideatitle']}', subject = '{$filtered['select_subject']}', deletepassword = '{$filtered['deletepassword']}', content = '{$filtered['ideacontent']}' WHERE id = {$filtered['id']}";
        mysqli_query($this->conn, $sql);
        //sql문 만들고 날림
    }

    public function SetVerify($id)
    {
        $filtered_id = mysqli_real_escape_string($this->conn, $id);
        $sql = "SELECT id,deletepassword FROM idea WHERE id = {$filtered_id}";
        $query = mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_array($query); 
        $this->id = $row['id'];
        $this->password = $row['deletepassword'];
    }

}

?>