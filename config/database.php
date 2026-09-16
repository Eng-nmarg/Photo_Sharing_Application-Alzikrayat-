<?php
class Database{
    private static $instance= null;
    private$pdo;
    private function __construct(){
        $dsn='mysql:host=localhost;port=3307;dbname=Alzikrayat';
        $user = 'root';
        $pass='';

        $options=[
              PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
              
             
        ];
         
   
        try{

        $this->pdo= new PDO($dsn,$user ,$pass,$options);
       die('you are connected  3434343 ooooooooooooooo');
       
        }

        catch(PDOException $e){
        die('faild' .$e->getMessage());
        }
    }
    private function __clone(){}
        public static function getInstanse(){
            if(self::$instance ===null){
                self::$instance = new Database();
            }
            return self::$instance->pdo;
        }
 }
 






?>