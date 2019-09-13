<?php
if(isset($_GET['id'])) 
{
    $_id = $_GET['id'];
    $link = '<a href="http://localhost/ideaRecommend/MVC/main/selectIdea/updateIdea/mvc/updateIdea_View/updateIdea_View.php?id='.$_id.'" data-role="button">수정하기</a>';
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
                <h1>수정하시겠습니까?</h1>
            </div>
        </div>
    </body>
</html>