<?php


	abstract class Model{

		protected $connection;
		protected $table;


		public function __construct($nameTable){

			$this->table = $nameTable;

			if (file_exists("application/settings/database.php")) require "application/settings/database.php";
			else require "system/settings/database.php";

			try {

				$this->connection = new PDO('mysql:host='.$database['host'].'; dbname='.$database['name'].'; charset=UTF8',$database['user'], $database['password']);

			} catch (PDOException $e) {

				echo $e->getMessage();
				die();
			}
				
		}

		public function select($query){

			$result = $this->connection->query($query);
			if($result == null) return false;
			
			$result->setFetchMode(PDO::FETCH_ASSOC);
			return $result->fetchAll();
		}

		public function insert($query){

			return $this->connection->query($query);
		}


		public function update($query){

			return $this->connection->query($query);
		}


		public function delete($query){

			return $this->connection->query($query);
		}

		public function getTable(){
			return $this->table;
		}

		public function __call($method, $args){

			if(isset($this->$method)){

				//$function = ;
				return call_user_func($this->$method->bindTo($this), $args);
			}
		}

		public function toString(){

			return get_class($this);
		}
	}