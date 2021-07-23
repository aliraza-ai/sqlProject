<?php
$filepath=realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');

class MyAdmin
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    function addCates($cats)
    {

        $select="select * from sql_cats where title='$cats'";
        $res=$this->db->select($select);
        if($res==false)
        {
            $Insert="INSERT INTO sql_cats(title) VALUES('$cats')";
            $this->db->insert($Insert);
            return "Category Inserted";
        }else
        {
            return "Category Already Exist";
        }


    }

    function getAllCats()
    {
        $select="select * from sql_cats";
       return $this->db->select($select);
    }

    function deleteCats($id)
    {
        $select="delete from sql_cats where id='$id'";
        return $this->db->select($select);
    }





}