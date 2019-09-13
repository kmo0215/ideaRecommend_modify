<?php

include 'functions.php';


/*$getTrendingItems = VideosList($Youtube, 'snippet,contentDetails,statistics',array
('chart'=>'mostPopular','maxResults'=>10,'regionCode'=>'pk'));*/

$getSearchItems = SearchVideosList($Youtube);
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
    if($videoid_search === NULL)
    {
        echo "---------------NULL---------------";
    }
    else
    {
        $count = $count + 1;

        echo "videoID : ";
        var_dump($videoid_search);

        $searchvideo = VideosList($Youtube,'snippet,statistics,id',array('id'=>$videoid_search));

        /*echo "videoInfo : ";
        var_dump($searchvideo);*/
        $_searchvideo = $searchvideo->items;
        foreach($_searchvideo as $key => $item)
        {
            $views = $item->statistics->viewCount;
            $likes = $item->statistics->likeCount;
            $dislikes = $item->statistics->dislikeCount;
            $comment = $item->statistics->commentCount;

            $totalLike = $totalLike + $views;
            $totalDislike = $totalDislike + $likes;
            $totalView = $totalView + $dislikes;
            $totalComment = $totalComment + $comment;

            echo "<h4>views :".$views."</h4>";
            echo "<h4>like :".$likes."</h4>";
            echo "<h4>dislike :".$dislikes."</h4>";
            echo "<h4>comment :".$comment."</h4>";
        }
    }
}

echo "<h4>totalviews :".$totalLike."</h4>";
echo "<h4>totallike :".$totalDislike."</h4>";
echo "<h4>totaldislike :".$totalView."</h4>";
echo "<h4>totalcomment :".$totalComment."</h4>";

$likes_avg = $totalLike / $count;
$dislikes_avg = $totalDislike / $count;
$views_avg = $totalView / $count;
$comment_avg = $totalComment / $count;

echo "---------------------Average-------------------------";
echo "<h4>average views :".$likes_avg."</h4>";
echo "<h4>average like :".$dislikes_avg."</h4>";
echo "<h4>average dislike :".$views_avg."</h4>";
echo "<h4>average comment :".$comment_avg."</h4>";



?>