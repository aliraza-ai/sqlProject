<?php
include_once "db.php";
$db=new DB();
$query=$_POST['qry'];

$res=$db->select($query);

if($res!=false)
{


//    while ($result=$res->fetch_field())
//    {

        while ($result=$res->fetch_assoc())
    {

//        echo $result->name;  //getting filed name
//        $total=$res->fetch_array();
//         echo $total[0];
//        echo $total[0];


        var_dump($result);

    }






}else
{
    echo $res;
    echo $db->error;
}




?>