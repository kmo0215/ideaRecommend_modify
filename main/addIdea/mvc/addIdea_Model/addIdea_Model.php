<?php

class addIdea
{
    private $conn;
    private $title;
    private $password;
    private $subject;
    private $content;

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "123456","ideadb");
        $this->title = "";
        $this->password = "";
        $this->subject = "";
        $this->content = "";
    }

    public function SetaddIdea($title, $password, $subject, $content)
    {
        $this->title = $title;
        $this->password = $password;
        $this->subject = $subject;
        $this->content = $content;

        $filtered = array(
            'ideatitle'=>mysqli_real_escape_string($this->conn, $this->title),
            'select_subject'=>mysqli_real_escape_string($this->conn, $this->subject),
            'ideacontent'=>mysqli_real_escape_string($this->conn, $this->content),
            'password'=>mysqli_real_escape_string($this->conn, $this->password)
        );

        $sql= "INSERT INTO idea (title, content, created, deletepassword, subject, recommend, commentcnt) VALUES('{$filtered['ideatitle']}' , '{$filtered['ideacontent']}' , NOW(),'{$filtered['password']}','{$filtered['select_subject']}', 0,0)";
        $result = mysqli_query($this->conn,$sql);
    }



}

?>