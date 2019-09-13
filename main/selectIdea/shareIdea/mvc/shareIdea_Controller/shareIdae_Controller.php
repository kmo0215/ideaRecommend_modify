<?php
include '../shareIdea_Model/shareIdae_Model.php';
require "autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

class Controller
{
    public function __construct() //생성자
    {
        
    }
}

class KaKaoController
{
    private $idea_to_send_kakao;

    public function __construct() //생성자
    {
        $this->idea_to_send_kakao = new IdeaToSendKaKao();
    }

    public function setKaKaoLink($id)
    {
        $this->idea_to_send_kakao->SetIdealink($id);
    }

    public function getKaKaoLink()
    {
       return $this->idea_to_send_kakao->GetIdealink();
    }
}

class TwitterController
{
    private $idea_to_send_twitter;

    private $sendtwit;

    public function __construct() //생성자
    {
        $this->idea_to_send_twitter = new IdeaToSendTwitter();
        $this->sendtwit = "";
    }

    public function setIdeaToSendTwitter($id)
    {
        $this->idea_to_send_twitter->SetIdeaToSendTwitter($id);
        $this->sendtwit = $this->idea_to_send_twitter->GetTiwt();
    }

    public function SendTiwt()
    {
        define('CONSUMER_KEY','hfG3woLVWq9WgCXkiCU0odbdh');
        define('CONSUMER_SECRET','ASeTRcICeyfFY0l4e5zlxrpaev8sIc6HLMJxQpBk7lsK5qn82b');        
        $access_token = '1153322938549981186-vUehtt1J9IoGjI0g9RJSFiQRe26OHb';
        $access_token_secret = 'tu5MpmP81qIMDzNhTCYRf33jDqpQX0fJpM5MPJHfxOsW0';
        $conn_twitter = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
        $conn_twitter->get("account/verify_credentials");
        $_twit = $this->sendtwit;
        $conn_twitter->post("statuses/update",["status"=>"{$_twit}"]);

        if($conn_twitter->getLastHttpCode()==200)
        {
            return 1;
        }
        else
        {
            return 2;
        }
    }


    public function getIdeaTitle()
    {
        return $this->idea_to_send_twitter->GetIdeaTitle();
    }

    public function getIdeaLink()
    {
        return $this->idea_to_send_twitter->GetIdeaLink();
    }
}

class FackeBookController
{
    public function __construct() //생성자
    {
        
    }
}

?>