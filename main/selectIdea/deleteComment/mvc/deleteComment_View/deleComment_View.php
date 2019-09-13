<?php

include '../deleteComment_Controller/deleComment_Controller.php';

if(isset($_GET['id']))
{
    $_id = $_GET['id'];
}

if(isset($_POST['deletecomment']))
{
    $controller = new Controller();
    $controller->setDeleteComment($_POST['id']);

    $result = $controller->VerifyPassword($_POST['password']);
    if($result === 1)
    {
        $__id = $controller->getCommentSearchId();
        $move = "location:http://localhost/ideaRecommend/MVC/main/selectIdea/deleteComment/mvc/deleteComment_View/deleComment_Complete_View.php?id=".$__id;
        header($move);
    }
    else
    {
        $__id = $controller->getCommentSearchId();
        $move = "location:http://localhost/ideaRecommend/MVC/main/selectIdea/deleteComment/mvc/deleteComment_View/deleComment_Complete_Fail_View.php?id=".$__id;
        header($move);
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
                <h1>비밀번호를 입력해주십시오</h1>
                <form action="deleComment_View.php" method="post">
                <p><input type="hidden" name="id" value="<?=$_id?>"></p>
                <label for ="password">비밀번호</label>
                <p><input type="password" name="password" id="password" value=""></p>
                <p><input type="submit" value = "확인" name="deletecomment" id="deletecomment"/></p>
                </form>
            </div>
        </div>
    </body>
</html>