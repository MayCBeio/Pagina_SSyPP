<?php
	
	class producto_model {
		
		private $db;
		private $carreras;
		
		public function __construct(){
			$this->db = Conectar::conexion();
			$this->carreras = array();
		}
		
		public function get_carrera()
		{
			$sql = "SELECT * FROM carreras";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->carreras[] = $row;
			}
			return $this->carreras;
		}
		
		public function insertar($nom_area, $facultad, $nom_carr){
			
			$resultado = $this->db->query("INSERT INTO carreras (nom_area, facultad, nom_carr)VALUES ('($nom_area, $facultad, $nom_carr)");
			
		}
		
		public function modificar($nom_area, $facultad, $nom_carr){
			
			$resultado = $this->db->query("UPDATE carreras SET producto_n='$nom_area', detalles='$facultad', precio='$nom_carr' WHERE id = '$id'");			
		}
		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM carreras WHERE id = '$id'");
			
		}
		
		public function get_carrera($id)
		{
			$sql = "SELECT * FROM carreras WHERE id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>