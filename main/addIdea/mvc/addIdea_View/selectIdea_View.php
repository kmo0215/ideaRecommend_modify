<?php

include '../selectIdea_Controller/selectedIdae_Controller.php';

if(isset($_GET['id'])){
    $controller = new Controller();
    $sql = $controller->getQuery($_GET['id']);
    $controller->setSelectedIdea($sql);
    $title = $controller->getSelectedIdeaTitle();
    $subject = $controller->getSelectedIdeaSubject();
    $created = $controller->getSelectedIdeaCreated();
    $content = $controller->getSelectedIdeaContent();

    $commentsql = $controller->getCommentListQuery($_GET['id']);
    $controller->setCommentList($commentsql);
    $commentList = $controller->getCommentList();

    $update_link = '<a href="http://localhost/ideaRecommend/MVC/main/selectIdea/updateIdea/mvc/updateIdea_View/updateIdea_Verify_View.php?id='.$_GET['id'].'" class = "ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-right ui-btn-icon-right ui-icon-check">수정</a>';
    $delete_link = '<a href="http://localhost/ideaRecommend/MVC/main/selectIdea/deleteIdea/mvc/deleteIdea_View/deleteIdea_View.php?id='.$_GET['id'].'" class = "ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-left ui-btn-icon-left ui-icon-delete" >삭제</a>';
    $recmnd_link = '<a href="http://localhost/ideaRecommend/MVC/main/selectIdea/recommendIdea/mvc/recommendIdea_View/recommendIdea_View.php?id='.$_GET['id'].'" class = "ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-left ui-btn-icon-left ui-icon-star" data-rel="dialog">추천</a>';
    $commnt_link = '<a href="http://localhost/ideaRecommend/MVC/main/selectIdea/addComment/mvc/addComment_View/addComment_View.php?id='.$_GET['id'].'" class = "ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-left ui-btn-icon-left ui-icon-edit">댓글달기</a>';
    $kakaot_link = '<a href="http://localhost/ideaRecommend/MVC/main/selectIdea/shareIdea/mvc/shareIdea_View/shareIdae_View.php?id='.$_GET['id'].'" class = "ui-btn ui-corner-all ui-btn-inline ui-mini footer-button-left ui-btn-icon-left ui-icon-comment" data-rel="dialog">공유</a>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong class="blue-text">MDB</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">

        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container dark-grey-text mt-5">

      <!--Grid row-->
      <div class="row wow fadeIn">
        <div class="col-md-6 mb-4">
          <div class="p-4">
            <div class="mb-3">
              <a href="">
                <span class="badge purple mr-1"><?=$subject?></span>
              </a>
            </div>
            <p class="lead">
              <span>작성일자 : <?=$created?></span>
            </p>
            <p class="lead font-weight-bold"><?=$title?></p>
            <p><?=$content?></p>
            <form class="d-flex justify-content-left">
            </form>
          </div>
        </div>
      </div>
      <hr>
      <div class="row d-flex justify-content-center wow fadeIn">

        <!--Grid column-->
        <div class="col-md-6 text-center">

        <div date-role = "commentview">
        <h1>댓글</h1>
        <ul data-role ="listview">
        <?=$commentList?>
        </div>


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <!-- <a class="btn btn-outline-white" href="http://localhost/ideaRecommend/MVC/main/selectIdea/updateIdea/mvc/updateIdea_View/updateIdea_Verify_View.php?id=<?=$_GET['id']?>" target="_blank"
        role="button">수정
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="http://localhost/ideaRecommend/MVC/main/selectIdea/deleteIdea/mvc/deleteIdea_View/deleteIdea_View.php?id=<?=$_GET['id']?>" target="_blank" role="button">삭제
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="http://localhost/ideaRecommend/MVC/main/selectIdea/recommendIdea/mvc/recommendIdea_View/recommendIdea_View.php?id=<?=$_GET['id']?>" target="_blank" role="button">추천
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="http://localhost/ideaRecommend/MVC/main/selectIdea/addComment/mvc/addComment_View/addComment_View.php?id=<?=$_GET['id']?>" target="_blank" role="button">댓글달기
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="http://localhost/ideaRecommend/MVC/main/selectIdea/shareIdea/mvc/shareIdea_View/shareIdae_View.php?id=<?=$_GET['id']?>" target="_blank" role="button">공유하기
        <i class="fas fa-graduation-cap ml-2"></i>
      </a> -->
    </div>
    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://mdbootstrap.com/education/bootstrap/" target="_blank"> kit computer software engineering </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>
