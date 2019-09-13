<?php
class DeleteIdea
{
    public $id;
    public $password;
    public $conn;

    public function __construct()
    {
        $this->id = "";
        $this->conn = mysqli_connect("localhost", "root", "123456","ideadb");//DB 접속
    }

    public function SetDeleteIdea($id)
    {
        $filtered_id = mysqli_real_escape_string($this->conn, $id);
        $sql = "SELECT id,deletepassword FROM idea WHERE id = {$filtered_id}";
        $query = mysqli_query($this->conn,$sql);
        $row = mysqli_fetch_array($query); 
        $this->id = $row['id'];
        $this->password = $row['deletepassword'];
    }

    public function GetPassword()
    {
        return $this->password;
    }

    public function GetID()
    {
        return $this->id;
    }

    public function DeleteSelectedIdea($id)
    {
        $filtered_id = mysqli_real_escape_string($this->conn, $id);
        $sql= "DELETE FROM idea WHERE id = {$filtered_id}";
        mysqli_query($this->conn, $sql);
    }



}
?>