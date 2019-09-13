<?php

include 'Config.php';

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



?>