<?php
  include_once('../conexion/conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Problema</title>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="StyleSheet" href="../estilos.css" type="text/css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
		<body>
			<div  id="contenedor">
				<div id="cabecera">
					<div id="navegacion">
						<ol id="menuhorizontal"> 
							<li><a href="https://www.ucab.edu.ve/personal/"> PERSONAL</a></li>
							<li><a href="registropadres.html">PADRES</a></li>
							<li><a href="https://www.ucab.edu.ve/estudiantes/">ESTUDIANTES</a></li>
							<li><a href="https://www.ucab.edu.ve/egresados/">EGRESADOS</a></li>
							<li><a href="https://www.ucab.edu.ve/aspirantes/">ASPIRANTES</a></li>
						</ol>
					</div>
				</div>
				<div id="columna1">
					<div id="logo">
						<img src="../ucab.jpeg"/>
					</div>
				</div>
				<div id="pie">
					<ol id="menuhorizontal2">
						<li><a href="https://www.ucab.edu.ve/informacion-institucional/">INFORMACIÓN INSTITUCIONAL</a></li>
						<li><a href="https://www.ucab.edu.ve/estudios/">ESTUDIOS</a></li>
						<li><a href="https://www.ucab.edu.ve/investigacion/">INVESTIGACIÓN</a></li>
						<li><a href="https://www.ucab.edu.ve/cultura-y-vida-universitaria/">CULTURA Y VIDA UNIVERSITARIA</a></li>
						<li><a href="">Pais</a></li>
						<li><a href="https://www.ucab.edu.ve/guia_contingencia_academica_2020_2021/">GUÍA CONTIGENCIA ACADÉMICA 2020-2021</a></li>
					</ol>
				</div>
			</div>
				<div class="row">
					<div class="col-lg-4">
					</div>	
					<div class="col-lg-4">
						<form method="post" action="pais.php">
							  <div class="form-group">
							    <label for="pais">Pais</label>
							    <input type="text" class="form-control" id="pais" aria-describedby="pais" placeholder="Ingrese País" name='pais'>
							  </div>
							  <button type="submit" class="btn btn-primary" name="guardar" value="guardar">Guardar</button>
						</form>
				<?php
				  if($_REQUEST['guardar']=="guardar"){
					$sql = "insert into pais(pa_nombre)values('".$_REQUEST['pais']."')" ;
					if ($conexion->query($sql)) {	
					    printf("Se ejecuto correctamente");
					}else{
						 printf("Error: %s\n", $conexion->error);
					}								  	
				  }
				  $sql ="select * from pais";
				  echo "<table class='table' border='1' width='100%'>
					   <tr>
					   	<thead class='thead-dark'>
					     <th>Id</th>
					     <th>Pais</th>
					    </thead> 
					   </tr> <tbody>";
					   $result= $conexion->query($sql);
					   while ($row = $result->fetch_assoc()) { 
						   echo" <tr>
						     <td>".$row["pa_id"]."</td>
						     <td>".$row["pa_nombre"]."</td>
						   </tr>";
					   } 
					echo " </tbody></table>";
				?>

					</div>	
					<div class="col-lg-4">
					</div>	

				</div> 
		</body>
</html> 