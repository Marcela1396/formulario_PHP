<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> FORMULARIO DE AFILIACION DE TRABAJADORES Y PERSONAS A CARGO CON PHP </title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Spirax" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/materialize.min.js"> </script>
	<script type="text/javascript" src="js/misfunciones.js"></script>

</head>

<body>
	<div class="slider">
		    <ul class="slides">
		    	<li>
		    		<img src="http://www.actualicese.com/_ig/img/fotos/empree.jpg">
		    	</li>

		    	<li>
		    		<img src="http://www.congresociudadanojalisco.mx/wp-content/uploads/2016/02/utilidades.png">
		    	</li>

		    	<li>
		    		<img src="http://2.bp.blogspot.com/-3tLZ-yNGNyY/U1qdTdKVJ4I/AAAAAAAAAIQ/FYK79M7SkHM/s1600/Recursos-Humanos.png">
		    	</li>

		    </ul>
		</div>

<?php
	
	/*Capturar el valor de cada una de las variables del formulario -->
	 MOTIVO POR EL CUAL LLENA EL FORMULARIO  */
	$motivo= $_POST["motivo"];
	
	// Datos de la empresa 
	$nit_empresa = $_POST["nit_empresa"];
	$razon_social = $_POST["rzSoc_empresa"];
	$direccion_empresa = $_POST["dir_empresa"];
	$tel_empresa = $_POST["tel_empresa"];

	
	// Datos del Trabajador
	$nombres_tra = $_POST["pr_nombre_tr"]." ".$_POST["sg_nombre_tr"];
	$apellidos_tra = $_POST["pr_apellido_tr"]." ".$_POST["sg_apellido_tr"];
	$tipoDoc_tra = $_POST["tipoDoc_tr"]; //
	
	$numDoc_tra = $_POST["num_id_tr"];
	$fechaNac_tra = $_POST["fecha_nac_tr"];
	$lugarNac_tra = $_POST["lugar_nac_tr"];
	$direccion_tra = $_POST["direc_tr"];
	$ciudad_tra = $_POST["ciud_tr"];
	$tele_tra = $_POST["tel_tr"];
	$email_tra = $_POST["mail_tr"];
	$estCivil_tra = $_POST["estCiv_tr"];
	$sex_tra = $_POST["genero_tr"]; //
	$capLab_tra = $_POST["cap_lab"]; //
	$vivienda_tra =$_POST["vivi_tra"]; 
	$sector_tra = $_POST["sector_tra"]; 
	$numHor_tra = $_POST["numHor_tr"];
	$salario_tra = $_POST["salar_tr"];
	$fechaIng_tra = $_POST["fechaIngr_emp"];


	// Personas a cargo del trabajador 
	// Datos del Primer Familiar

	$nombresF1 = $_POST["nombre_1f"];
	$apellidoF1 = $_POST["apellido_1f"];
	$sexof1 = $_POST["sexo_1f"]; 
	$fechaf1 = $_POST["fecha_nac_1f"];
	$tpDocF1 = $_POST["doc_1f"]; //
	$numF1 = $_POST["num_id_1f"];
	$parentescoF1 = $_POST["par_1f"]; 
	$capacF1 = $_POST["cp_1f"]; 

	// Datos del Primer Familiar

	$nombresF2 = $_POST["nombre_2f"];
	$apellidoF2 = $_POST["apellido_2f"];
	$sexof2 = $_POST["sexo_2f"];
	$fechaf2 = $_POST["fecha_nac_2f"];
	$tpDocF2 = $_POST["doc_2f"]; //
	$num21 = $_POST["num_id_2f"];
	$parentescoF2 = $_POST["par_2f"];
	$capacF2 = $_POST["cp_2f"];

    $labelMot = "MOTIVO";
	$label1 = "INFORMACIÓN DE LA EMPRESA";
	$label2 = "INFORMACIÓN DEL TRABAJADOR";
	$label3 = "INFORMACIÓN PRIMER FAMILIAR";
	$label4 = "INFORMACIÓN SEGUNDO FAMILIAR";

	$file=fopen("datos.txt", "a");
	fwrite($file, $labelMot.";".$motivo.";".$label1.";".$nit_empresa.";".$razon_social.";".$direccion_empresa.";".$tel_empresa.";".
		   $label2.";".$nombres_tra.";".$apellidos_tra.";".$tipoDoc_tra.";".$numDoc_tra.";".$fechaNac_tra.";".$lugarNac_tra.";".
		   $direccion_tra.";".$ciudad_tra.";".$tele_tra.";".$email_tra.";".$estCivil_tra.";".$sex_tra.";".$capLab_tra.";".
		   $vivienda_tra.";".$sector_tra.";".$numHor_tra.";".$salario_tra.";".$fechaIng_tra.";".
		   $label3.";".$nombresF1.";".$apellidoF1.";".$sexof1.";".$fechaf1.";".$tpDocF1.";".$numF1.";".$parentescoF1.";".$capacF1.";".
		   $label4.";".$nombresF2.";".$apellidoF2.";".$sexof2.";".$fechaf2.";".$tpDocF2.";".$num21.";".$parentescoF2.";".
		   $capacF2.PHP_EOL);
	fclose($file);

	$file=fopen("datos.txt","r");

	while (!feof($file)) {
		if(fgets($file)!= ''){
		$x=explode(";", fgets($file)); // explode: extrae cada item o linea de texto por puntos y comas
                                   // fgets : obtiene una linea de las cadenas de texto
?>
		
		<h4> DATOS DE AFILICIACIÓN DEL TRABAJADOR Y PERSONAS A CARGO </h4>

		<div class="row" >
        	<div class="row valign-wrapper">
	         	<div class="col s9 offset-s0 valign">
	          		<div class="card teal lighten-2">
	            		<div class="card-content white-text" >
	             			<span class="card-title">  </span>
	             			
		              			<p> <?= $x[0]." : ".$x[1] ?> <br> <br> 
		              				<?= $x[2] ?>  <br>
		              			    <?= " NIT: ".$x[3] ?> &nbsp;&nbsp;&nbsp;&nbsp;
			              			<?= " Razón Social: ".$x[4] ?> &nbsp;&nbsp;&nbsp;&nbsp;
			              			<?= " Dirección :".$x[5]?> &nbsp;&nbsp;&nbsp;&nbsp;
			              			<?= " Teléfono: ".$x[6] ?> <br>
			              		</p>
		              	</div>
		              </div>
	            </div>

	            <div class="col s3 offset-s0 valign">
		            <img src="http://conceptodefinicion.de/wp-content/uploads/2011/02/Empresa.jpg" width="300" height="140">
		        </div>
	        </div>

	        <div class="col s4">
	        	<div class="card   indigo lighten-1">
	            	<div class="card-content white-text">
	            		<span class="card-title">  </span>
	              		<p> <?= $x[7] ?> <br>
	              			<?= " Nombres: ".$x[8]?> <br> <?= " Apellidos: ".$x[9]?> <br><?= " Tipo de Documento: ".$x[10]?> <br>
	              			<?= " Número de Documento: ".$x[11]?> <br> <?= " Fecha de Nacimiento: ".$x[12]?> <br> <?= " Lugar de Nacimiento: ".$x[13]?> <br>
	              			<?= " Dirección: ".$x[14]?> <br> <?= " Ciudad: ".$x[15]?> <br> <?= " Telefono: ".$x[16]?> <br> <?= " Correo Electrónico: ".$x[17]?> <br><?= " Estado Civil: ".$x[18]?> <br> <?= " Género: ".$x[19] ?> <br> <?= " Capacidad Laboral: ".$x[20]?> <br>
	              			<?= " Vivienda: ".$x[21]?> <br> <?= " Sector: ".$x[22]?> <br> <?= " Número de Horas de Trabajo: ".$x[23]?> <br>
	              			<?= " Salario: ".$x[24]?> <br> <?= " Fecha Ingreso Empresa: ".$x[25]?> 
	              		</p>
	              	</div>
	            </div>
	        </div>

	        <div class="col s4">
	        	<div class="card  blue darken-3">
	            	<div class="card-content white-text">
	            		<span class="card-title">  </span>
	            		<img src="http://www.abcdelbebe.com/sites/abcdelbebe.com/files/familia_0.jpg" width="380px" height="200px"> <br> 
	              		<p>	<?= $x[26] ?> <br>
	              			<?= " Nombres: ".$x[27]?> <br> <?= " Apellidos: ".$x[28]?> <br> <?= " Género: ".$x[29] ?> <br> <?= " Fecha de Nacimiento: ".$x[30]?> 
	              			<br> <?= " Tipo de Documento: ".$x[31] ?> <br> <?= " Número de Documento: ".$x[32] ?> <br> <?= " Parentesco: ".$x[33]?> <br>
	              			<?=" Capacidad Laboral: ".$x[34]?> <br>
	              		</p>
	               	</div>
	            </div>
	        </div>

	        <div class="col s4">
	        	<div class="card  indigo lighten-1">
	            	<div class="card-content white-text">
	            		<span class="card-title">  </span>
	            		<img src="http://resmedia.es/wordpress/wp-content/uploads/2016/03/Empresa-familiar2.jpg" width="380px" height="200px"> <br> 
	              		<p>	<?= $x[35] ?> <br>
	              			<?= " Nombres: ".$x[36]?> <br> <?= " Apellidos: ".$x[37]?> <br> <?= " Género: ".$x[38]?> <br>
	              			<?= " Fecha de Nacimiento: ".$x[39]?> <br> <?= " Tipo de Documento: ".$x[40]?> <br> <?= " Número de Documento: ".$x[41]?> <br>
	              			<?= " Parentesco: ".$x[42]?> <br> <?= " Capacidad Laboral: ".$x[43]?> <br>

	              		</p>
	              	</div>
            	</div>
         	</div>
        	
        </div> 

<?php
 	   }
 	}
    fclose($file);
?>
	
</body>
</html>