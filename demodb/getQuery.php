<?php
include_once "db.php";
$db=new DB();
$query=$_POST['qry'];

$res=$db->select($query);

if($res!=false)
{
    while ($result=$res->fetch_field())
    {
  //  echo $result->name;  //getting filed name
        $total=$res->fetch_array();
        echo sizeof($total[0]);
      // var_dump($total[2]);




    }
}else
{
    echo $res;
    echo $db->error;
}




?>