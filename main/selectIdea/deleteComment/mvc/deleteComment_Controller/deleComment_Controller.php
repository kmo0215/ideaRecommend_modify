<?php

include '../deleteComment_Model/deleComment_Model.php';

class Controller
{
    public $deletecomment;
    
    public function __construct() //생성자
    {
        $this->deletecomment = new DeleteComment();
    }

    public function setDeleteComment($id)
    {
        $this->deletecomment->SetDeleteComment($id);
    }

    public function getCommentSearchId()
    {
        return $this->deletecomment->searchid;
    }

    public function VerifyPassword($inputpassword) //비밀번호 입력후 실행, 수정필요
    {
        $verifypassword = $this->deletecomment->password;

        if($inputpassword === $verifypassword)
        {
            //맞으면 삭제후 삭제완료 뷰로 이동 -> 삭제완료 뷰 메세지 = 삭제되었습니다.
            $sql = $this->deletecomment->GetQueryDecreaseCommentCount($this->deletecomment->id);
            mysqli_query($this->deletecomment->conn, $sql);
            $sql = $this->deletecomment->GetQueryDeletePassword($this->deletecomment->id);
            mysqli_query($this->deletecomment->conn, $sql);
            return 1;
            //쿼리가 모델클래스에서 실행될수있게 수정이 필요함.
        }
        else
        {
            //아닐경우 삭제완료 뷰로 이동 -> 삭제완료 뷰 메세지 = 비밀번호가 틀립니다.
            return 2;
        }
    } // 수정필요

}

?>