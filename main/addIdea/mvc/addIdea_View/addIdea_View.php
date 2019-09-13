<?php

include '../addIdea_Controller/addIdea_Controller.php';

$subject1 = "";
$subject2 = "";
$subject3 = "";

if($subject1 === "사회")
{
  $subject2 = "";
  $subject3 = "";
}
else if($subject1 === "경제")
{
  
}
else if($subject1 === "일상")
{
  
}else if($subject1 === "IT")
{
  
}

$keyword = "";

if(isset($_GET['keyword']))
{
  $keyword = $_GET['keyword'];
}
else
{

}


if(isset($_POST['addIdea']))
{
    $addSubject = "#".$_POST['select_subject']."#".$_POST['select_subject_2']."#".$_POST['select_subject_3'];
    $controller = new Controller();
    $controller->AddIdea($_POST['ideatitle'],$_POST['password'],$addSubject,$_POST['ideacontent']);
    header('Location:addIdea_Complete_View.php');
}
else
{

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Write Your Idea ! ! !</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
    <div class="container">


      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container wow fadeIn">

      <!-- Heading -->
      <h2 class="my-5 h2 text-center">아이디어 작성</h2>

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">

          <!--Card-->
          <div class="card">

            <!--Card content-->
            <form action="addIdea_View.php" method="post" class="card-body">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-md-6 mb-2">
                  <div class="md-form ">
                    <input type="text" name="ideatitle" id="ideatitle" class="form-control">
                    <label for="firstName" class="">아이디어 제목</label>
                  </div>
                </div>
                <div class="col-md-6 mb-2">
                  <div class="md-form">
                    <input type="password" name="password" id="password" class="form-control">
                    <label for="lastName" class="">비밀번호</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-4 col-md-4 mb-2">
                  <label for="country">주제1</label>

                  <select class="custom-select d-block w-100" name="select_subject" id="select_subject" required>
                  <p><option value="경제">경제</option></p>
                  <p><option value="사회">사회</option></p>
                  <p><option value="IT">IT</option></p>
                  <p><option value="일상">일상</option></p>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>
                </div>

                <div class="col-xs-4 col-md-4 mb-2">
                  <label for="country">주제2</label>
                  <input type="text" name="select_subject_2" id="select_subject_2" class="form-control" value="<?=$keyword?>">
                </div>

                <div class="col-xs-4 col-md-4 mb-2">
                  <label for="country">주제3</label>
                  <input type="text" name="select_subject_3" id="select_subject_3" class="form-control">
                </div>

              </div>
                <textarea cols="80" rows="8" name="ideacontent" id="ideacontent"></textarea>
              </div>
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="addIdea" id="addIdea">아이디어 등록</button>
            </form>
          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          

        
        </div>
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
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
        <i class="fas fa-graduation-cap ml-2"></i>
      </a>
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
