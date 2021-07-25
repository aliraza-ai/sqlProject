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

    function getCatsById($id)
    {
        $select="select * from sql_cats where id='$id'";
        return $this->db->select($select);
    }
    function updateCates($cats,$id)
    {
        $select="update sql_cats set title='$cats' where id='$id'";
        return $this->db->select($select);
    }

    function getAllCats()
    {
        $select="select * from sql_cats";
       return $this->db->select($select);
    }

    function deleteCats($id)
    {

        $select2="delete from articles where cat='$id'";
        $this->db->delete($select2);
        $select="delete from sql_cats where id='$id'";
        return $this->db->delete($select);
    }

    function addArticle($cat,$title,$article,$example_detail,$example_code,$quiz)
    {
        $article =$this->db->link->real_escape_string($article);
        $example_detail =$this->db->link->real_escape_string($example_detail);
        $example_code =$this->db->link->real_escape_string($example_code);
        return $this->db->insert("INSERT INTO articles(cat,title,article_detail,example_details,example_code,quiz,date) VALUES('$cat','$title','$article','$example_detail','$example_code','$quiz',NOW())");
    }

    function updateArt($cat,$title,$article,$example_detail,$example_code,$quiz,$id)
    {
        $article =$this->db->link->real_escape_string($article);
        $example_detail =$this->db->link->real_escape_string($example_detail);
        $example_code =$this->db->link->real_escape_string($example_code);
        return $this->db->insert("update articles set cat='$cat',title='$title',article_detail='$article',example_details='$example_detail',example_code='$example_code',quiz='$quiz' where id='$id'");
    }

    function getArticleAll()
    {
        return $this->db->select("select * from articles");
    }
    function getArticleById($id)
    {
        return $this->db->select("select * from articles where id='$id'");
    }

    function deleteArt($id)
    {
        $select="delete from articles where id='$id'";
         $this->db->delete($select);
    }




}