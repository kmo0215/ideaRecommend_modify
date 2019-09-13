<?php

require_once 'googleapi/vendor/autoload.php';

class YoutubeSearchResult
{
    private $like_avg;
    private $dislike_avg;
    private $viewcount_avg;
    private $commentcount_avg;

    private $Developer_Key;
    private $client;
    private $Youtube;

    private $_conn;
    private $_similarSubject;
    private $_similarSubjectsComment;


    public function __construct()
    {
        $this->like_avg = 0;
        $this->dislike_avg = 0;
        $this->viewcount_avg = 0;
        $this->commentcount_avg = 0;

        $this->Developer_Key="AIzaSyDwwnsgNGetbKPLyuBEBB4bZ3ah_UQ44ZI";
        $this->client = new Google_Client();
        $this->client->setDeveloperKey($this->Developer_Key);
        $this->Youtube = new Google_Service_Youtube($this->client);

        $this->_conn = mysqli_connect("localhost", "root", "123456","ideadb");
    }

    function VideosList($YouTube,$part,$params)
    {
        $response = $YouTube->videos->listVideos(
            $part,
            $params
        );
        return $response;
    }

    function SearchVideosList($YouTube,$searchword)
    {
        $count = 10;
        $searchResponse = $YouTube->search->listSearch('snippet', array('q'=>$searchword,'maxResults' => $count));
        return $searchResponse;
    }

    public function Calculate_Average($searchword)
    {
        $getSearchItems = $this->SearchVideosList($this->Youtube,$searchword);
        $searchItems = $getSearchItems->items;

        $count = 0;
        $totalLike = 0;
        $totalDislike = 0;
        $totalView = 0;
        $totalComment = 0;

        foreach($searchItems as $key => $item)
        {
            $videoid = $item->id;

            $videoid_search = $videoid->videoId;
            if($videoid_search === NULL){}
            else
            {
                $count = $count + 1;


                $searchvideo = $this->VideosList($this->Youtube,'snippet,statistics,id',array('id'=>$videoid_search));

                $_searchvideo = $searchvideo->items;
                foreach($_searchvideo as $key => $item)
                {
                    $views = $item->statistics->viewCount;
                    $likes = $item->statistics->likeCount;
                    $dislikes = $item->statistics->dislikeCount;
                    $comment = $item->statistics->commentCount;

                    $totalLike = $totalLike + $likes;
                    $totalDislike = $totalDislike + $dislikes;
                    $totalView = $totalView + $views;
                    $totalComment = $totalComment + $comment;
                }
            }
        }

        $this->like_avg = $totalLike / $count;
        $this->dislike_avg = $totalDislike / $count;
        $this->viewcount_avg = $totalView / $count;
        $this->commentcount_avg = $totalComment / $count;

    }

    public function GetLike_Average()
    {
        return $this->like_avg;
    }

    public function GetDisLike_Average()
    {
        return $this->dislike_avg;
    }

    public function GetViewCount_Average()
    {
        return $this->viewcount_avg;
    }

    public function GetCommentCount_Average()
    {
        return $this->commentcount_avg;
    }

    public function GetSimiliarSubject()
    {
        return $this->_similarSubject;
    }

    public function GetQuery($keyword)
    {
            $sql = "SELECT * FROM idea WHERE subject LIKE '%$keyword%' ORDER BY id DESC"; // 주제별로 정렬
            $query = mysqli_query($this->_conn,$sql);
            return $query;
    }

    public function SetSimiliarSubject($query)
    {
	    $count = 3;
        while($row = mysqli_fetch_array($query))
        {
            if($count > 0)
            {
                $commentcnt = $row['commentcnt'];
                $recommend = $row['recommend'];
                $subject = $row['subject'];

                $this->_similarSubject = $this->_similarSubject.
                '<div class="col-lg-3 col-md-6 mb-4">
                <div class="card">
                <div class="view overlay">
                <a><div class="mask rgba-white-slight"></div></a>
                </div>
                <div class="card-body text-center">
                <a href="" class="grey-text"><h5>'.$row['subject'].'</h5></a>
                <h5><strong><a href=http://localhost/ideaRecommend/MVC/main/selectIdea/mvc/selectIdea_View/selectedIdae_View.php?id='.$row['id'].' class="dark-grey-text">'.$row['title'].'</a></strong></h5>
                </div>
                </div>
                </div>';
                $count = $count - 1;
            }
        }
    }



}

?>