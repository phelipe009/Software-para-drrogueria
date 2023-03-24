<?php 
include("conn.php");


if (isset($_POST['enviar'])) {
   if(strlen($_POST['nombre'])  >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['mensaje']) >= 1 ){
   	$nombre = trim($_POST['nombre']);
   	$correo = trim($_POST['correo']);
   	$telefono = trim($_POST['telefono']);
   	$mensaje = trim($_POST['mensaje']);	
   	$s="INSERT INTO contacto(nombre, correo, telefono, mensaje) VALUES ('$nombre','$correo','$telefono','$mensaje')";
   $r=mysqli_query($conn,$s) ;

						if($r){

									//$id=mysqli_insert_id($conn);
						     echo ""; 
						}else{
								echo "Error al copiar el archivo, archivo ya existente en base de datos";
							 }
				}
				 else{
						?>
						<h3 class="bad"> por favor complete los campos </h3>
						     
						<?php  
				} 
			
   }


 ?>
 <style type="text/css"> 
figcaption  {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}



 </style>