<?php

class SelectedIdea
{
     public $title;
     public $subject;
     public $craeted;
     public $content;

     public $cnt_comment;
     public $cnt_recommend;
    

     private $_conn;
     
    public function __construct()
    {
        $this->ideaList = "";
        $this->_conn = mysqli_connect("localhost", "root", "123456","ideadb");//DB 접속
    }

    public function GetQuery($id)
    {
        $filterted_id = mysqli_real_escape_string($this->_conn, $id);
        $sql = "SELECT * FROM idea WHERE id={$filterted_id}";

        return $sql;
    }

    public function SetSelectedIdea($query)
    {
        $result = mysqli_query($this->_conn,$query);
        $row = mysqli_fetch_array($result);
        $this->title = $row['title'];
        $this->subject = $row['subject'];
        $this->craeted = $row['created'];
        $this->content = $row['content'];
    }

    public function GetSelectedIdeaTitle()
    {
        return $this->title;
    }

    public function GetSelectedIdeaSubject()
    {
        return $this->subject;
    }

    public function GetSelectedIdeaCreated()
    {
        return $this->craeted;
    }

    public function GetSelectedIdeaContent()
    {
        return $this->content;
    }
}

class CommentList
{
    public $commentList;

    private $_conn;

    public function __construct()
    {
        $this->commentList = "";
        $this->_conn = mysqli_connect("localhost", "root", "123456","ideadb");//DB 접속
    }
    public function GetQuery($id)
    {
        $filterted_id = mysqli_real_escape_string($this->_conn, $id);
        $sql = "SELECT * FROM comment WHERE searchid = {$filterted_id}";
        return $sql;
    }
    public function SetCommentList($query)
    {
        $result = mysqli_query($this->_conn,$query);
        while($row = mysqli_fetch_array($result))
        {
            $commentcontent = $row['content'];
            
            $this->commentList = $this->commentList.'
            <li class="media">
                <div class="media-left">
                    <a href="http://localhost/ideaRecommend/MVC/main/selectIdea/deleteComment/mvc/deleteComment_View/deleComment_View.php?id='.$row['id'].'">삭제</a>
                </div>
                    <div class="media-body">
                    <h4 class="media-heading">익명</h4>
                    '.$commentcontent.'
                </div>
            </li>
            ';
            //"http://localhost/ideaRecommend/MVC/main/selectIdea/deleteComment/mvc/deleteComment_View/deleComment_View?id='..$row['id']..'"
        }
    }
    public function GetCommentList()
    {
        return $this->commentList;
    }

}


?>