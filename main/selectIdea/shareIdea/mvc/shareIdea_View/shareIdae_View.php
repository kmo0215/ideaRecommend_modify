<?php

include '../shareIdea_Controller/shareIdae_Controller.php';

$result = " ";
$resultMessage = " ";
$kakaolink = "";

if(isset($_GET['id'])) 
{
    $kakaocontroller = new KaKaoController();
    $id = $_GET['id'];
    $kakaocontroller->setKaKaoLink($id);
    $kakaolink = $kakaocontroller->getKaKaoLink();
}

/* "shareIdae_View.php?twit_id=<?=$id?>" */ 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
<title>KakaoLink v2 Demo(Default / Feed) - Kakao JavaScript SDK</title>
<script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>

</head>
<body>
<div data-role="header">
<div data-role="content">
<h1>SNS공유</h1>
<a id="kakao-link-btn" href="javascript:;">
<img src="//developers.kakao.com/assets/img/about/logos/kakaolink/kakaolink_btn_medium.png"/>
</a>
<a id="twitter-link-btn" href="http://localhost/ideaRecommend/MVC/main/selectIdea/shareIdea/mvc/shareIdea_View/twit_send_complete_view.php?id=<?=$id?>" data-rel="dialog">
<img src="twitter_logo-300x300.png"/>
</a>
</div>
</div>

<div>
<?=$resultMessage?>
</div>

<!-- 카카오 연동 -->
<script type='text/javascript'>
    // // 사용할 앱의 JavaScript 키를 설정해 주세요.
    Kakao.init('3097a8a616afd0a29d547da34448eafe');
    // // 카카오링크 버튼을 생성합니다. 처음 한번만 호출하면 됩니다.
    Kakao.Link.createDefaultButton({
      container: '#kakao-link-btn',
      objectType: 'feed',
      content: {
        title: '이런 아이디어 어때요?',
        description: '#테스트 #카카오톡 #링크',
        imageUrl: 'http://mud-kage.kakao.co.kr/dn/Q2iNx/btqgeRgV54P/VLdBs9cvyn8BJXB3o7N8UK/kakaolink40_original.png',
        link: {
          mobileWebUrl:'<?=$kakaolink?>',
          webUrl:'<?=$kakaolink?>'
          
        }
      },
      social: {
        likeCount: 286,
        commentCount: 45,
        sharedCount: 845
      },
      buttons: [
        {
          title: '웹으로 보기',
          link: {
            mobileWebUrl:'<?=$kakaolink?>',
            webUrl:'<?=$kakaolink?>'
          }
        },
        {
          title: '앱으로 보기',
          link: {
            mobileWebUrl:'<?=$kakaolink?>',
            webUrl:'<?=$kakaolink?>'
          }
        }
      ]
    });
</script>

</body>
</html>