<?php

include '../trendeanalyze_Model/trendeanalyze_Model.php';

class Controller
{
    private $youtubesearchresult;

    public function __construct()
    {
        $this->youtubesearchresult = new YoutubeSearchResult();
    }

    public function analyizeStart($searchword)
    {
        $this->youtubesearchresult->Calculate_Average($searchword);
    }

    public function getLike_Average()
    {
        return $this->youtubesearchresult->GetLike_Average();
    }

    public function getDisLike_Average()
    {
        return $this->youtubesearchresult->GetDisLike_Average();
    }

    public function getViewCount_Average()
    {
        return $this->youtubesearchresult->GetViewCount_Average();
    }

    public function getCommentCount_Average()
    {
        return $this->youtubesearchresult->GetCommentCount_Average();
    }

    public function getResultofAnalyze()
    {
    
        //클러스터링 결과에 따라서 . . . . .

    }

    public function getQuery($keyword)
    {
        return $this->youtubesearchresult->GetQuery($keyword);
    }

    public function setSimiliarSubject($query)
    {
        $this->youtubesearchresult->SetSimiliarSubject($query);
    }

    public function getSimiliarSubject()
    {
        return $this->youtubesearchresult->GetSimiliarSubject();
    }

}

?>