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


}
