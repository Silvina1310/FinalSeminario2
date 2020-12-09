<?php
/**
 * Silvina Páez
 */
class DataBase
{
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "silvina");
		return $this->con;
	}
}
?>