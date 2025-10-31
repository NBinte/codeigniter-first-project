<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;


class CustomModel{

    protected $db;

    public function __construct(ConnectionInterface &$db)   {
        $this->db = & $db;
    } 

    function getPosts(){
        $builder = $this->db->table("posts");

        $builder->join("");

        $posts = $builder->select("");
    }

}