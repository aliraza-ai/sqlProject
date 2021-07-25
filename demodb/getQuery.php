<?php
include_once "db.php";
$db=new DB();
$query=$_POST['qry'];

$res=$db->select($query);

if($res!=false)
{


    while ($result=$res->fetch_field())
    {
        echo '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">'.$result->name.'</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>';
  //  echo $result->name;  //getting filed name
        $total=$res->fetch_array();
      // var_dump($total[2]);
        echo '
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>

  </tbody>
</table>';



    }
}else
{
    echo $res;
    echo $db->error;
}




?>