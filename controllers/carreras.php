<?php
	
	class productosController {//vehiculos
		
		public function __construct(){
			require_once "models/carrerasModelo.php";
		}
		
		public function index(){
			require_once "models/carrerasModelo.php";
			
			$carreras = new carrera_model();
			$data["titulo"] = "carreras";
			$data["carreras"] = $carreras->get_carrera();
			
			require_once "views/carreras/carreras.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "carreras";
			require_once "views/carreras/carreras_nuevas.php";
		}
		
		public function guarda(){
			
			$nom_area = $_POST['nom_area'];
			$facultad = $_POST['facultad'];
			$nom_carr = $_POST['nom_carr'];
			$carreras = new carrera_model();
			$carreras->insertar($nom_area, $facultad, $nom_carr);
			$data["titulo"] = "carrera";
			$this->index();
		}
		
		public function modificar($id_carr){
			
			$carreras = new carrera_model();
			
			$data["id_carr"] = $id_carr;
			$data["carreras"] = $carreras->get_carrera();
			$data["titulo"] = "carreras";
			require_once "views/carreras/carreras_modificar.php";
		}
		
		public function actualizar(){

			$id_carr = $_POST['id_carr'];
			$nom_area = $_POST['nom_area'];
			$facultad = $_POST['facultad'];
			$nom_carr = $_POST['nom_carr'];
			

			$carreras = new carrera_model();
			$carreras->modificar($id_carr, $nom_area, $facultad, $nom_carr);
			$data["titulo"] = "carreras";
			$this->index();
		}
		
		public function eliminar($id_carr){
			
			$carreras = new carrera_model();
			$carreras->eliminar($id_carr);
			$data["titulo"] = "carreras";
			$this->index();
		}	
	}
?>