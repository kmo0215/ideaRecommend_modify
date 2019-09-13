<?php

class IdeaToSendKaKao
{
    private $idealink;

    public function __construct() //생성자
    {
        $this->idealink = " ";
    }

    public function SetIdealink($id)
    {
        $this->idealink ='http://localhost/ideaRecommend/MVC/main/selectIdea/mvc/selectIdea_View/selectedIdae_View.php?id='.$id;
    }

    public function GetIdealink()
    {
        return $this->idealink;
    }
}

class IdeaToSendTwitter
{
    private $idealink;
    private $ideatitle;
    private $conn;

    public function __construct() //생성자
    {
        $this->idealink = " ";
        $this->ideatitle = " ";
        $this->conn = mysqli_connect("localhost", "root", "123456","ideadb");//DB 접속
    }

    public function SetIdeaToSendTwitter($id)
    {
        $filtered_id = mysqli_real_escape_string($this->conn, $id);
        $sql = "SELECT title from idea WHERE id = {$filtered_id}";
        $result = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_array($result);
        $this->ideatitle = $row['title'];
        $this->idealink = 'http://localhost/ideaRecommend/MVC/main/selectIdea/mvc/selectIdea_View/selectedIdae_View.php?id='."{$filtered_id}";
    }

    public function GetIdeaTitle()
    {
        return $this->ideatitle;
    }

    public function GetIdeaLink()
    {
        return $this->idealink;
    }

    public function GetTiwt()
    {
        $sendtwit = "이런아이디어는 어떠신가요?"."[ "."{$this->ideatitle}"." ]  "."더 자세한 내용을 확인하고싶다면?"."{$this->idealink}";
        return $sendtwit;
    }

}

class IdeaToSendFacebook
{

}


?>