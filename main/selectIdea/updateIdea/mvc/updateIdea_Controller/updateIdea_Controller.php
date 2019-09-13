<?php

include '../updateIdea_Model/updateIdea_Model.php';


class Controller
{
    public $updateidea;

    public function __construct() //생성자
    {
        $this->updateidea = new UpdateIdea();
    }

    public function setVerify($id)
    {
        $this->updateidea->SetVerify($id);
    }

    public function VerifyPassword($inputpassword)
    {
        $verifyPassword = $this->updateidea->GetPassword();

        if($inputpassword === $verifyPassword)
        {
            //패스워드가 맞을경우
            //아이디어 업데이트화면을 띄워준다.
            //업데이트뷰에는 id값만 넘겨준다.
            return 1;   
        }
        else
        {
            //패스워드가 틀린경우
            //검증실패화면을 띄워준다.
            return 2;
        }
    }

    public function loadPreviousIdea($id)
    {
        //아이디어 수정뷰가 띄워지면 이전에 기록된 내용들을 보여준다.

        $this->updateidea->LoadPreviousIdea($id);
        //loadPreviousIdea함수를 통해 updateidea의 값들이 정해진다.
        //Get함수들을 이용하여 이전의 내용들을 보여준다.
    }

    public function getPreviousTitle()
    {
        return $this->updateidea->GetTitle();
    }
    public function getPreviousContent()
    {
        return $this->updateidea->GetContent();
    }
    public function getPreviousSubject()
    {
        return $this->updateidea->GetSubject();
    }
    public function getPreviousPassword()
    {
        return $this->updateidea->GetPassword();
    }

    public function Updated($id, $title, $password, $subject, $content)
    {
        //수정 뷰의 등록버튼을 누르면 실행된다.
        //입력한 내용들을 업데이트한다.
        $this->updateidea->UpdateSelectedIdea($id, $title, $password, $subject, $content);
    }
}

?>