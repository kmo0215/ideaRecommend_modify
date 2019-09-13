<?php

include '../addComment_Controller/addComment_Controller.php';


if(isset($_GET['id'])) 
{
    $_id = $_GET['id'];
}

if(isset($_POST['addComment']))
{
    $controller = new Controller();
    $controller->AddComment($_POST['id'],$_POST['commentcontent'],$_POST['password']);
    $move = "location:http://localhost/ideaRecommend/MVC/main/selectIdea/addComment/mvc/addComment_View/addComment_Complete_View.php?id=".$_POST['id'];
    header($move);
}
else
{

}



?>


<!DOCTYPE html>
<html>
<head>
    <title>Write comment</title>
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
            <a href="http://localhost/ideaRecommend/MVC/main/selectIdea/mvc/selectIdea_View/selectedIdae_View.php?id={$row['id']}\" data-role="button">Back</a>
            <h1>댓글 쓰기</h1>

            <form action="addComment_View.php" method="post">
            <input type="hidden" name="id" value="<?=$_id?>">
            <label for ="password">비밀번호</label>
            <p><input type="password" name="password" id="password" value=""></p>
            <textarea cols="40" rows="8" name="commentcontent" id="commentcontent"></textarea> 
            <input type="submit" value = "등록" name="addComment" id="addComment"/>
            </form>
            </div>
  </div>

  </body>
</html>