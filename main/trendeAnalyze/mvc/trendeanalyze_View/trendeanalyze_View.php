<?php

include '../trendeanalyze_Controller/trendeanalyze_Controller.php';

$like = 0;
$dislike = 0;
$viewcount = 0;
$commentcount = 0;
$resultkeyword = "";

$similarSubject = "";
$similarSubjectComments = "";

if(isset($_GET['searchWord']))
{
    $searchword = $_GET['searchWord'];
    $controller = new Controller();
    $controller->analyizeStart($searchword);
    $like = $controller->getLike_Average();
    $dislike = $controller->getDisLike_Average();
    //$viewcount = $controller->getViewCount_Average();
    $commentcount = $controller->getCommentCount_Average();

    $resultkeyword = "키워드 : ".$searchword;

    $query = $controller->getQuery($searchword);
    $controller->setSimiliarSubject($query);
    $similarSubject = $controller->getSimiliarSubject();

}

if(isset($_POST['searchYotube']))
{
    $searchword = $_POST['searchYotube'];
    $controller = new Controller();
    $controller->analyizeStart($searchword);
    $like = $controller->getLike_Average();
    $dislike = $controller->getDisLike_Average();
    //$viewcount = $controller->getViewCount_Average();
    $commentcount = $controller->getCommentCount_Average();

    $resultkeyword = "키워드 : ".$searchword;

    $query = $controller->getQuery($searchword);
    $controller->setSimiliarSubject($query);
    $similarSubject = $controller->getSimiliarSubject();
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
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">
          <strong class="blue-text">Idea Recommend</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

         

        </div>

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <img src="#" class="#" alt="">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i> <?=$resultkeyword?> 분석 결과
        </a>
      </div>

      <br>

      <div class="list-group list-group-flush">
        <a href="http://localhost/ideaRecommend/MVC/main/addIdea/mvc/addIdea_View/addIdea_View.php?keyword='<?=$searchword?>'" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i> <?=$resultkeyword?> 주제로 아이디어 작성
        </a>
      </div>

    </div>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      <!-- Heading -->
      <div class="card mb-4 wow fadeIn">

        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Idea Recommend</a>
            <span>/</span>
            <span> <?=$resultkeyword?> 분석결과 </span>
          </h4>
          <form action="http://localhost/ideaRecommend/MVC/main/trendeAnalyze/mvc/trendeanalyze_View/trendeanalyze_View.php" method="post" class="d-flex justify-content-center">
            <!-- Default input -->
            <input type="search" placeholder="주제 검색" aria-label="Search" name="searchYotube" id="searchYotube" class="form-control">
            <button class="btn btn-primary btn-sm my-0 p" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>

      </div>s
      <!-- Heading -->

      <!--Grid row-->
      <div class="row wow fadeIn">

        <!--Grid column-->
        <div class="col-md-9 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <div class="card-body">

              <canvas id="myChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-4">

          <!--Card-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header text-center">
              원형 그래프
            </div>

            <!--Card content-->
            <div class="card-body">

              <canvas id="pieChart"></canvas>

            </div>

          </div>
          <!--/.Card-->

          

        </div>
        <!--Grid column-->

        <div class="col-md-10 mb-10">

          <!--Card-->
          <div class="card mb-4">

            <!-- Card header -->
            <div class="card-header text-center">
              인공지능 분석결과
            </div>

            <!--Card content-->
            <div class="card-body">

              <canvas id="pieChart"></canvas>

            </div>

            </div>
          <!--/.Card-->

            </div>


        <div class="col-md-10 mb-10">

        <!--Card-->
        <div class="card mb-4">

          <!-- Card header -->
           <!--캔버스-->
          <div class="card-header text-center">
            유사한 아이디어
          </div>

          <!--Card content-->
          <div class="card-body">
          <div class="row wow fadeIn">   
            <?=$similarSubject?>
          </div>
          </div>

        </div>
        <!--/.Card-->

        </div>
      <!--캔버스-->

      <!--캔버스-->
      <div class="col-md-10 mb-10">

      <!--Card-->
      <div class="card mb-4">

        <!-- Card header -->
        <div class="card-header text-center">
          유사한 아이디어 댓글
        </div>

        <!--Card content-->
        <div class="card-body">

          <canvas id="pieChart"></canvas>

        </div>

        </div>
      <!--/.Card-->

        </div>
      <!--캔버스-->

      </div>
      
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn">

   

    <hr class="my-4">

    <!-- Social icons -->
    
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

  <!-- Charts -->
  <script>
    // Line
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Like", "Dislike", "View", "Comment"],
        datasets: [{
          label: '# of Votes',
          data: [<?=$like?>, <?=$dislike?>, <?=$viewcount?>, <?=$commentcount?>],
          backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
          ],
          borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    });

    //pie
    var ctxP = document.getElementById("pieChart").getContext('2d');
    var myPieChart = new Chart(ctxP, {
      type: 'pie',
      data: {
        labels: ["Like", "Dislike", "View", "Comment"],
        datasets: [{
          data: [<?=$like?>, <?=$dislike?>, <?=$viewcount?>, <?=$commentcount?>],
          backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1"],
          hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5"]
        }]
      },
      options: {
        responsive: true,
        legend: false
      }
    });


    




  </script>

  
</body>

</html>
