<?php

include '../deleteIdea_Controller/deleteIdea_Controller.php';

if(isset($_GET['id']))
{
    $_id = $_GET['id'];
}

if(isset($_POST['deleteidea']))
{
    $controller = new Controller();
    $controller->setDeleteIdea($_POST['id']);

    $result = $controller->VerifyPassword($_POST['password']);
    if($result === 1)
    {
        $move = "location:http://localhost/ideaRecommend/MVC/main/selectIdea/deleteIdea/mvc/deleteIdea_View/deleteIdea_Complete_View.php?";
        header($move);
    }
    else
    {
        $move = "location:http://localhost/ideaRecommend/MVC/main/selectIdea/deleteIdea/mvc/deleteIdea_View/deleteIdea_Complete_Fail_View.php?";
        header($move);
    }
}

?>

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
                <h1>비밀번호를 입력해주십시오</h1>
                <form action="deleteIdea_View.php" method="post">
                <p><input type="hidden" name="id" value="<?=$_id?>"></p>
                <label for ="password">비밀번호</label>
                <p><input type="password" name="password" id="password" value=""></p>
                <p><input type="submit" value = "확인" name="deleteidea" id="deleteidea"/></p>
                </form>
            </div>
        </div>
    </body>
</html>