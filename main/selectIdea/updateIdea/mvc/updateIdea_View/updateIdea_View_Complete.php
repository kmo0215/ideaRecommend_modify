<?php

$link = '<a href="http://localhost/ideaRecommend/MVC/main/mvc/main_View/main_view.php?" data-role="button">돌아가기</a>';


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
                <h1>아이디어가 수정되었습니다</h1>
            </div>
        </div>
    </body>
</html>