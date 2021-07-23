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



}
