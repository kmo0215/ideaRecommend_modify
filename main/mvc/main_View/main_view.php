<?php
include '../main_Controller/main_controller.php'; // controller클래스를 사용하기위해 호출

$query = "query";
$sqloption= " ";

if(isset($_POST['sortmenu']))
{
    $sqlType = 1;
    $sqloption = $_POST['sortmenu'];
}
else if(isset($_POST['subjectsort']))
{
    $sqlType = 2;
    $sqloption = $_POST['subjectsort'];
}
else
{ 
    $sqlType = 3;
    $sqloption= " ";
}

$controller = new Controller(); //model.php의 ideaList클래스 호출
$query = $controller->getQuery($sqloption, $sqlType);
$controller->setIdeaItem($query);
$idealist = $controller->getIdeaItem();
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
  <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

  </style>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
        <strong class="blue-text">Idea Recomend</strong>
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
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade pt-4" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%282%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>소개 문구</strong>
              </h1>

              <p>
                <strong>소개 문구</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>소개 문구</strong>
              </p>

              <a target="_blank" href="http://localhost/ideaRecommend/MVC/main/addIdea/mvc/addIdea_View/addIdea_View.php?" class="btn btn-outline-white btn-lg">아이디어 게시하기
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%283%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

             <!-- Content -->
             <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>소개 문구</strong>
              </h1>

              <p>
                <strong>소개 문구</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>소개 문구</strong>
              </p>

              <a target="_blank" href="http://localhost/ideaRecommend/MVC/main/trendeAnalyze/mvc/trendeanalyze_View/trendeanalyze_View.php?" class="btn btn-outline-white btn-lg">트렌드 분석하기
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
              <a target="_blank" href="http://localhost/ideaRecommend/MVC/main/trendeDevide/mvc/trendeDevide_View/trendeDevide_View.php?" class="btn btn-outline-white btn-lg">키워드 분석하기
                <i class="fas fa-graduation-cap ml-2"></i>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/8-col/img%285%29.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-strong d-flex justify-content-center align-items-center">

             <!-- Content -->
             <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>소개 문구</strong>
              </h1>

              <p>
                <strong>소개 문구</strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>소개 문구</strong>
              </p>
              <a class="btn btn-outline-white" role="button" data-toggle="modal" data-target="#sortmenuView">정렬
              <i class="fas fa-graduation-cap ml-2"></i></a>
              <a class="btn btn-outline-white" role="button" data-toggle="modal" data-target="#subjectmenuView">주제별로 찾기
              <i class="fas fa-graduation-cap ml-2"></i></a>
              </a>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
    <div class="container">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark mdb-color lighten-3 mt-3 mb-5">

        <!-- Navbar brand -->
        <span class="navbar-brand">아이디어</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">

          </ul>
        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->


      <!--Section: 아이디어 리스트-->
      <section class="text-center mb-4">
        <!--Grid row-->
        <div class="row wow fadeIn">        
        <?=$idealist?>
      </section>
    </div>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" role="button" data-toggle="modal" data-target="#sortmenuView">정렬</a>
      <a class="btn btn-outline-white" role="button" data-toggle="modal" data-target="#subjectmenuView">주제별로 찾기</a>
    </div>
    <!--/.Call to action href="http://localhost/ideaRecommend/MVC/main/sortMenu/mvc/sortMenu_View/sortMenu_View.php/"-->

       <!-- Side Modal Top Right Success-->
       <div class="modal fade right" id="sortmenuView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-side modal-top-right modal-notify modal-success" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading lead">필터로 정렬하기</p>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="false" class="white-text">&times;</span>
                      </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>
                            특정 필터를 통해 정렬하고싶으신가요?
                            최신순, 댓글순, 추천순으로 필터를 적용하여 아이디어를 정렬해서 볼 수 있습니다. 원하는 필터를 선택해주세요!
                        </p>
                      </div>
                    </div>
                    <form action="http://localhost/ideaRecommend/MVC/main/mvc/main_View/main_view.php" method="post">
                      <select class="custom-select d-block w-100" name="sortmenu" id="sortmenu" required>
                      <option value="id">최신순</option>
                      <option value="recommend">추천순</option>
                      <option value="commentcnt">댓글순</option>
                      </select>                  
                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                      <button type="submit" class="btn btn-test">전송</button>
                    </form>
                      </a>
                      <a role="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No,
                        thanks</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!-- Side Modal Top Right Success-->
                    
            <!-- Side Modal Top Right Success-->
            <div class="modal fade right" id="subjectmenuView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true" data-backdrop="false">
                <div class="modal-dialog modal-side modal-top-right modal-notify modal-success" role="document">
                  <!--Content-->
                  <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                      <p class="heading lead">주제로 정렬하기</p>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="false" class="white-text">&times;</span>
                      </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                      <div class="text-center">
                        <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
                        <p>
                            특정 주제를 통해 정렬하고싶으신가요?
                            원하는 주제로 필터를 적용하여 아이디어를 정렬해서 볼 수 있습니다. 원하는 필터를 선택해주세요!
                        </p>
                      </div>
                    </div>
                    <form action="http://localhost/ideaRecommend/MVC/main/mvc/main_View/main_view.php" method="post">
                      <input type="search" name="subjectsort" id="subjectsort" placeholder="주제를 입력하세요" aria-label="Search" class="form-control">
                    <div class="modal-footer justify-content-center">
                      <button type="submit" class="btn btn-test">적용</button>
                    </form>
                      </a>
                      <a role="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">No,
                        thanks</a>
                    </div>
                  </div>
                  <!--/.Content-->
                </div>
              </div>
              <!-- Side Modal Top Right Success-->
    <hr class="my-4">
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
