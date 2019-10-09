<?php
namespace Source;

	class Database{
		protected static $db;
		private function __construct(){
			$db_host = "localhost";
            $db_nome = "projetointegrador2";
			//$db_nome = "projintegrador2";
			$db_usuario = "root";
			$db_senha = "";
			$db_driver = "mysql";
			$sistema_titulo = "Sistemas de Reservas";
			
			try{
				self::$db = new \PDO("$db_driver:host=$db_host;dbname=$db_nome",$db_usuario,$db_senha);
				
				self::$db->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
				
				self::$db->exec('SET NAMES utf8');
			}catch(PDOException $e){
				echo "PDOException em $sistema_titulo", $e->getMessge();
				die("Connection Error: ".$e->getMessage());
			}
		}
		public static function conexao(){
			if(!self::$db){
				new Database();
			}
			return self::$db;
		}
	}
