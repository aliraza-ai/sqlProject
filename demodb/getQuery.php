<?php
include_once "db.php";
$db=new DB();
$query=$_POST['qry'];

$res=$db->select($query);

if($res!=false)
{
    while ($result=$res->fetch_field())
    {
       echo $result->name;  //getting filed name

           while ($value=$res->fetch_array())
           {
                var_dump($value[0]);
           }




    }
}else
{
    echo $res;
    echo $db->error;
}




?>