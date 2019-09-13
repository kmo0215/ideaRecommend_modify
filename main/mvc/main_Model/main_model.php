<?php

class IdeaList
{
    public $ideaList;
    private $_conn;
    private $_sql;
    private $_qurey;

    public $idaeitem;
    /*private $paginationNum;
    private $ideaItemArray;*/

    public function __construct()
    {
        $this->ideaList = "";
        $this->idaeitem = "";

        $this->paginationNum="";
        $this->ideaItemArray="";

        $this->_conn = mysqli_connect("localhost", "root", "123456","ideadb");//DB 접속
    }

    public function _SetIdeaItem_test($query)
    {
        while($row = mysqli_fetch_array($query))
            {

            $commentcnt = $row['commentcnt'];
            $recommend = $row['recommend'];
            $subject = $row['subject'];

            $this->idaeitem = $this->idaeitem.
            '<div class="col-lg-3 col-md-6 mb-4">
            <div class="card">
            <div class="view overlay">
            <a><div class="mask rgba-white-slight"></div></a>
            </div>
            <div class="card-body text-center">
            <a href="" class="grey-text"><h5>'.$row['subject'].'</h5></a>
            <h5><strong><a href=http://localhost/ideaRecommend/MVC/main/selectIdea/mvc/selectIdea_View/selectedIdae_View.php?id='.$row['id'].' class="dark-grey-text">'.$row['title'].'</a></strong></h5>
            <h4 class="font-weight-bold blue-text"><strong>.댓글 : '.$commentcnt.'  추천 : '.$recommend.'</strong></h4>
            </div>
            </div>
            </div>';
            }
    }
    public function _GetIdeaItem_test()
    {
        return $this->idaeitem;
    }
    
    public function _SetIdeaList($query)
    {
        while($row = mysqli_fetch_array($query))
            {
            $commentcnt = $row['commentcnt'];
            $recommend = $row['recommend'];
            $subject = $row['subject'];
            
            $this->ideaList = $this->ideaList."<li><a href=\"http://localhost/ideaRecommend/MVC/main/selectIdea/mvc/selectIdea_View/selectedIdae_View.php?id={$row['id']}\" >{$row['title']}</a></li>"."[".$subject."]"." 댓글 : [".$commentcnt."]"."  추천 : [".$recommend."]";
            //$list = $list."<li><a href=\"process_select_idea.php?id={$row['id']}\" >{$row['title']}</a></li>"."[".$subject."]"." 댓글 : [".$commentcnt."]"."  추천 : [".$recommend."]";
            }
    }

    public function SetIdeaList($query)
    {
        $this->ideaList = $this->ideaList.$query;
    }//삭제필요


    public function GetQuery($sqloption, $sqlType)
    {
        $sql = " ";
        $qurey = " ";
        if($sqlType === 1)
        {
            if($sqloption === 'commentcnt')
            {
                $sql = "SELECT * from idea ORDER BY commentcnt DESC"; // 옵션에 따라서 정렬
                $query = mysqli_query($this->_conn,$sql);
                return $query;
            }
            else if($sqloption === 'id')
            {
                $sql = "SELECT * from idea ORDER BY id DESC"; // 옵션에 따라서 정렬
                $query = mysqli_query($this->_conn,$sql);
                return $query;
            }
            else if($sqloption === 'recommend')
            {
                $sql = "SELECT * from idea ORDER BY recommend DESC"; // 옵션에 따라서 정렬
                $query = mysqli_query($this->_conn,$sql);
                return $query;
            }
        }
        else if($sqlType === 2)
        {
            $sql = "SELECT * FROM idea WHERE subject LIKE '%$sqloption%' ORDER BY id DESC"; // 주제별로 정렬
            $query = mysqli_query($this->_conn,$sql);
            return $query;
        }
        else if($sqlType === 3)
        {
            $sql = "SELECT * from idea ORDER BY id DESC"; //최신순으로 정렬
            $query = mysqli_query($this->_conn,$sql);
            return $query;
        }
    }

    public function GetIdeaList()
    {
        return $this->ideaList;
    }
}

?>