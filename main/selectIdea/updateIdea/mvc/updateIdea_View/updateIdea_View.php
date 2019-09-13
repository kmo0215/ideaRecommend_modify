<?php

include '../updateIdea_Controller/updateIdea_Controller.php';

$previous = array(
    'id'=>' ',
    'title'=>' 이전내용 ',
    'content'=>' 이전내용 ',
    'subject'=>' 이전내용 ',
    'deletepassword'=>' 이전내용 '
  );


if(isset($_GET['id']))
{
    $controller = new Controller();
    $_id = $_GET['id'];
    $controller->loadPreviousIdea($_id);
    $previous['title'] = $controller->getPreviousTitle();
    $previous['subject'] = $controller->getPreviousSubject();
    $previous['deletepassword'] = $controller->getPreviousPassword();
    $previous['content'] = $controller->getPreviousContent();
}

if(isset($_POST['updateidea']))
{
    $controller = new Controller();

    $updateid = $_POST['id'];
    $updatetitle = $_POST['ideatitle'];
    $updatesubject = $_POST['select_subject'];
    $updatepassword = $_POST['password'];
    $updatecontent =  $_POST['ideacontent'];

    $controller->Updated($updateid, $updatetitle, $updatepassword, $updatesubject, $updatecontent);
    $move = "location:http://localhost/ideaRecommend/MVC/main/selectIdea/updateIdea/mvc/updateIdea_View/updateIdea_View_Complete.php?";
    header($move);
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Modify Idea</title>
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
            <a href="http://localhost/ideaRecommend/MVC/main/mvc/main_View/main_view.php?" data-role="button">Back</a>
            <h1>Modify</h1>
            <form action="updateIdea_View.php" method="post">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <label for ="text-baisc">아이디어 제목</label>
            <p><input type="text" name="ideatitle" id="ideatitle" value="<?=$previous['title']?>"></p>
            <label for ="password">비밀번호</label>
            <p><input type="password" name="password" id="password" value="<?=$previous['deletepassword']?>"></p>
            <fieldset data-role="controlgroup" data-type="horizontal">
            <legend>주제 선택</legend>
            <label for="select-h-1a">Select subject</label>
            <select name="select_subject" id="select_subject" value = <?=$previous['subject']?>>
            <p><option value="경제">경제</option></p>
            <p><option value="사회">사회</option></p>
            <p><option value="IT">IT</option></p>
            <p><option value="일상">일상</option></p>
            </select>
            <p><textarea cols="40" rows="8" name="ideacontent" id="ideacontent"><?=$previous['content']?></textarea></p>
            <input type="submit" value = "수정" name="updateidea" id="updateidea"/>
            </form>
            </div>
  </div>

  </body>
</html>


