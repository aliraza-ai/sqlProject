<?php
$filepath=realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');
class User
{
    private $db;
    public function __construct()
    {
        $this->db=new Database();
    }

    public function changePassword($id,$oldPassword,$newPassword)
    {
        $query="select * from admin WHERE id='$id' && user_password='$oldPassword'";
        $result=$this->db->select($query);
        if($result)
        {
            $updateQuery = "update admin set user_password='$newPassword' where id='$id'";
            $updateResult = $this->db->insert($updateQuery);
            if($updateResult) {
                $msg = "Username Changed Successfully..";
                return $msg;
            }else{
                $msg="username Not Changed";
                return $msg;
            }
        }else
        {
            $msg=false;
            return $msg;
        }
    }



}
?>