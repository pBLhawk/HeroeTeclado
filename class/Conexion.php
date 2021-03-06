<?php
class Conexion {

	private $bd= "../bbdd/heroeTeclado.sqlite";
	private $conex;
	private static $instancia;

	public static function dameInstancia(){
		if ( !self::$instancia ) {
			self::$instancia = new self();
			}
		return self::$instancia;
	}
	private function __construct() {
		$this->conex = new SQLite3($this->bd);
	}

	public function conexion() {
		return $this->conex;
	}

	public function numRows($result){
		$i=0;
		while($row=$result->fetchArray()){
			$i++;
		}
		return $i;

	}
	public function cerrarConexion(){
		return $this->conex->close();
	}

	public function __clone() {
		return "La clonacion de este objeto no esta permitida";
	}
}
?>
