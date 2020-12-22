<?php 

class Conexion{

	static public function conectar(){

		$link = new PDO('pgsql:host=localhost;dbname=PanteonSFA', 'postgres', '112358');

		$link ->exec("set names utf8");

		return $link;

	}

}

