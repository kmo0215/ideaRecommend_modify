<?php

require_once 'googleapi/vendor/autoload.php';

class SubSubject
{
    private $subjectItem;

    private $Developer_Key;
    private $client;
    private $Youtube;

    public function __construct()
    {
        $this->subjectItem = "";

        $this->Developer_Key="AIzaSyDwwnsgNGetbKPLyuBEBB4bZ3ah_UQ44ZI";
        $this->client = new Google_Client();
        $this->client->setDeveloperKey($this->Developer_Key);
        $this->Youtube = new Google_Service_Youtube($this->client);
    }

    public function VideosList($YouTube,$part,$params)
    {
        $response = $YouTube->videos->listVideos(
            $part,
            $params
        );
        return $response;
    }

    public function SearchVideosList($YouTube,$categoryId)
    {
        $count = 10;
        $searchResponse = $YouTube->search->listSearch('snippet', array('type'=>'video','maxResults' => $count,'videoCategoryId' => $categoryId));
        return $searchResponse;
    }

    public function SetsubSubjectItem($categoryId)
    {
        $getSearchItems = $this->SearchVideosList($this->Youtube,$categoryId);
        $searchItems = $getSearchItems->items;

        $_subjectItem = "";

        foreach($searchItems as $key => $item)
        {
            $videoid = $item->id;

            $videoid_search = $videoid->videoId;
            if($videoid_search === NULL){}
            else
            {
                $searchvideo = $this->VideosList($this->Youtube,'snippet,statistics,id',array('id'=>$videoid_search));

                $_searchvideo = $searchvideo->items;
                foreach($_searchvideo as $key => $item)
                {
                    $tag = $item->snippet->tags[0];
                    $_subjectItem = $_subjectItem.
                   '<div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                    <div class="view overlay">
                    <a><div class="mask rgba-white-slight"></div></a>
                    </div>
                    <div class="card-body text-center">
                    <h5><strong><a href="http://localhost/ideaRecommend/MVC/main/trendeAnalyze/mvc/trendeanalyze_View/trendeanalyze_View.php?searchWord='.$tag.'" class="dark-blue-text">'.$tag.'</a></strong></h5>
                    </div>
                    </div>
                    </div>'
                    ;
                    $views = $item->statistics->viewCount;
                }
            }
        }

        $this->subjectItem = $_subjectItem;
    }

    public function GetsubSubjectItem()
    {
        return $this->subjectItem;
    }
}

?>
