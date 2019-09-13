<?php

?>

<!DOCTYPE html> 
<html> 
    <head> 
    <title>Page Title</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
</head> 
<body> 
<!-- Start of second page -->
<div data-role="page" id="bar">
 
<div data-role="header">
        <h1>필터적용</h1>
    </div><!-- /header -->
 
    <div data-role="content"> 
            <h1>특정 주제를 통해 정렬하고싶으신가요?</h1>
            <p>원하는 주제로 필터를 적용하여 아이디어를 정렬해서 볼 수 있습니다. 원하는 필터를 선택해주세요!</p>

            <form action="http://localhost/ideaRecommend/MVC/main/mvc/main_View/main_view.php" method="post">
            <select name="subjectsort" id="subjectsort" >
            <option value="사회">사회</option>
            <option value="경제">경제</option>
            <option value="IT">IT</option>
            <option value="일상">일상</option>
            </select>
            <p><input type="submit" value = "적용"/></p>
            </form>

    </div><!-- /content -->

    <div data-role="footer">
    </div><!-- /footer -->
</div><!-- /page -->
</body>
</html>