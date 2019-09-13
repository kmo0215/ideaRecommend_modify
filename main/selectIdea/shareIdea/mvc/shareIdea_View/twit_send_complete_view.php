<?php
include '../shareIdea_Controller/shareIdae_Controller.php';
if(isset($_GET['id'])) 
{
    $resultmessge = "";
    $twittercontroller = new TwitterController();
    $id = $_GET['id'];
    $twittercontroller->setIdeaToSendTwitter($id);
    $result = $twittercontroller->SendTiwt();
    $link = '<a href="http://localhost/ideaRecommend/MVC/main/selectIdea/mvc/selectIdea_View/selectedIdae_View.php?id='.$id.'" data-role="button">돌아가기</a>';
    if($result === 1)
    {
        $resultmessge = '<h1>트위터 전송에 성공했습니다.</h1>';
    }
    else
    {
        $resultmessge = '<h1>트위터 전송에 실패했습니다.</h1>';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>My Page</title>
        <meta name="viewport" content="width=device-width, initial scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script>
        </script>
    </head>
    <body>
        <div data-role="page">
            <div data-role="header" data-position="fixed">
            <?=$link?>
            <?=$resultmessge?>
            </div>
        </div>
    </body>
</html>