<?php
//clases para canciones
require_once("conexion.php");
class Cancion{
	//ATRIBUTOS
	private var $id;
	private var $titulo;
	private var $grupo;
	private var $caratula;
	private var $cancion;
	private var $notas;
	private var $duracion;

	//CONSTRUCTOR
	public function __construct() {
     
    }
	//METODOS


	//ESTATICOS
	public static function listarCanciones(){
		
		$sql="SELECT * FROM canciones";

		
	}
}
?>