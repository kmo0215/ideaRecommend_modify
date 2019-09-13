<?php

include '../recommendIdea_Controller/recommendIdea_Controller.php';

if(isset($_GET['id'])) 
{
    $controller = new Controller();
    $controller->setID($_GET['id']);
    $controller->Recommend();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Recommend</title>
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
                <h1>아이디어를 추천하셨습니다 ! ! !</h1>
            </div>
        </div>
    </body>
</html>