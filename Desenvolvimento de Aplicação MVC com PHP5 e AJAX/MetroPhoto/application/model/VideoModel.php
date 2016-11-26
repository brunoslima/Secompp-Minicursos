<?php


	/**
	* 
	*/
	class VideoModel extends Model{
		
		public function __construct(){

			parent::__construct("video");
		}

		public function listarVideos(){

			return $this->select("SELECT nome, source FROM {$this->table}; ");
		}
	}