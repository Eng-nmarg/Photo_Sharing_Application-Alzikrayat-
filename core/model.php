<?php

require_once __DIR__.'/../config/database.php';

# 
abstract class Model{
    protected $db;
    public function __construct(){
        $this->db= Database::getInstanse();
        echo"Database Connection Successful!";
    }
}



?>