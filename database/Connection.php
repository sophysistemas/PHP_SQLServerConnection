<?php
    class Connection
    {
        public static function connect()
        {

            # DEV
            $server = "LOCALHOST\SQLEXPRESS";
            $connectionInfo = array("Database"=>"teste", "UID"=>"sa", "PWD"=>"123456", "CharacterSet"=>"UTF-8");            

            try {
                $conn = sqlsrv_connect($server, $connectionInfo);
            } catch (Exception $pe) {
                die("Erro de conexão:" . $pe->getMessage());
            }
            
            return $conn;
        }
    }
	