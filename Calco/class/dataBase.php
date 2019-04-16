<?php   
    require 'constantes.php';    
   class DataBase
   {
        
        public static $db_host = 'localhost';
        public static $db_Name = 'construction';
        public static $db_user = 'root';
        public static $db_psw='';
        private $db=null;
            public static function connect(){       
                try{
                    $db=new PDO("mysql:host=" .self::$db_host. "; dbname=".self::$db_Name,self::$db_user,self::$db_psw);
                    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                }
                catch(PDOException $e){
                    die($e->getMessage());
                }
                return $db;
            }

            public static function Desconexte(){
                $db=null;
            }
        
    }
    
?>