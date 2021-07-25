<?php
include_once "db.php";
$db=new DB();
$query=$_POST['qry'];

if(!$query)
{
    echo "Query is Emplty";
    return;
}

if (strpos($query, 'select') !== false || strpos($query, 'SELECT') !== false)
{
    $res=$db->insert($query);
    while ($result=$res->fetch_field())
    {


       echo $result->name."<br>";
       while ($my=$res->fetch_array())
       echo $my[0]."<br>";


    }
}else  if (strpos($query, 'update') !== false || strpos($query, 'UPDATE') !== false)
{
        $res=$db->update($query);
        echo "Your update Query is Running";
}else if(strpos($query, 'delete') !== false || strpos($query, 'DELETE') !== false) {
    $res=$db->delete($query);
    echo "Your delete Query is Running";
}else if(strpos($query, 'insert') !== false || strpos($query, 'INSERT') !== false) {
    $res=$db->insert($query);
    echo "Your Insert Query is Running";
}else
{
    echo "Your Query is Not Correct";
}

//
//var_dump($res);
//if($res!=false)
//{
//
//
//
//
//
//
//
//
//}else
//{
//    echo $res;
//    echo $db->error;
//}




?>