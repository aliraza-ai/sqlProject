<?php
$filepath=realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/database.php');

class ManageClient
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getTopArticle()
    {

        return $this->db->select("select * from articles ORDER BY id ASC LIMIT 1");
    }

    public function getRandomHome()
    {
        return $this->db->select("select * from articles ORDER BY RAND() LIMIT 20");
    }

    public function GetResearch($research)
    {
        return $this->db->select("select * from articles where (title LIKE '%".$research."%')");
    }

    function getArticleById($id)
    {
        return $this->db->select("select * from articles where id='$id'");
    }
    function getArticleBycat($id)
    {
        return $this->db->select("select * from articles where cat='$id'");
    }

    function getAllCats()
    {
        $select="select * from sql_cats";
        return $this->db->select($select);
    }



}
