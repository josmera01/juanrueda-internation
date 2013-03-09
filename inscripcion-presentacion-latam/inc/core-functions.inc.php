<?php
session_start(); // Initialize session data
ob_start(); // Turn on output buffering
?>
<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");    // Date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
header("Cache-Control: no-store, no-cache, must-revalidate");  // HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");                          // HTTP/1.0  
//define("URLIMG", "http://localhost:8080/piccolo/PermodaADMIN/fotos");
?>
<?php include "db-functions.inc.php" ?>
<?php
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
$IDacc = $_GET["acc"];
if($IDacc == "reggen"){
	
	$conn = phpmkr_db_connect(HOST, USER, PASS, DB, PORT);
	
	$tNombre = $_POST["cNombre"];
	$tApellido = $_POST["cApellido"];
	$tEmail = $_POST["cEmail"];
	$tPais = $_POST["cPais"];
	$tSede = $_POST["cSede"];
	$tEmpresa = $_POST["cEmpresa"];
	$tCargo = $_POST["cCargo"];
	
	$SQLver = "SELECT * FROM `form_prejuanrueda` WHERE `EMAIL` ='".$tEmail."'";
	$rs_ver = phpmkr_query($SQLver, $conn);
	$rs_num = phpmkr_num_rows($rs_ver);
	
	if($rs_num <= 0){
	
		$SQLin = "INSERT INTO 
				  `form_prejuanrueda`
				(
					`FIRSTNAME`,
					`LASTNAME`,
					`EMAIL`,
					`COUNTRY`,
					`EMPRESA`,
					`SEDE`,
					`CARGO`
				) 
				VALUE (
				  '".utf8_decode($tNombre)."',
				  '".utf8_decode($tApellido)."',
				  '".utf8_decode($tEmail)."',
				  '".utf8_decode($tPais)."',
				  '".utf8_decode($tEmpresa)."',
				  '".utf8_decode($tSede)."',
				  '".utf8_decode($tCargo)."'
				);";
		//echo $SQLin;
		$rs_exec = phpmkr_query($SQLin, $conn);
	
	}else{
		
		$SQLin = "UPDATE 
				  `form_prejuanrueda`
				SET
				  `FIRSTNAME` = '".utf8_decode($tNombre)."',
				  `LASTNAME` = '".utf8_decode($tApellido)."',
				  `EMAIL` = '".utf8_decode($tEmail)."',
				  `COUNTRY` = '".utf8_decode($tNacimiento)."',
				  `EMPRESA` = '".utf8_decode($tGenero)."',
				  `SEDE` = '".utf8_decode($tPais)."',
				  `CARGO` = '".utf8_decode($tCiudad)."'
				 WHERE
				  `EMAIL` ='".$tEmail."'";
		//echo $SQLin;
		$rs_exec = phpmkr_query($SQLin, $conn);
	
	}
				
	phpmkr_db_close($conn);
	
	echo "1";
	
}
if($IDacc == "vergen"){
	
	$conn = phpmkr_db_connect(HOST, USER, PASS, DB, PORT);
	
	$tEmail = $_POST["email"];
	
	$SQLver = "SELECT * FROM `form_prejuanrueda` WHERE `EMAIL` ='".$tEmail."'";
	$rs_ver = phpmkr_query($SQLver, $conn);
	$rs_num = phpmkr_num_rows($rs_ver);
	
	if($rs_num <= 0){
	
		echo "0";
			
	}else{
		
		while($row = phpmkr_fetch_array( $rs_ver )) {
			
			$FIRSTNAME = $row['FIRSTNAME'];
			
			//$rsmenu .= '<li><a href="javascript:;" onclick="loadProductos(idcat='.$IDCATE.');">'.$CATEGORIA.'</a></li>';`
			$rsmenu .= '<li><a href="/'.$_GET["catid"].'/'.$SLUG.'">'.$CATEGORIA.'</a></li>';

		}

		$spl_FIRSTNAME = explode(" ", $FIRSTNAME);
		
		$_SESSION["username"] = $spl_FIRSTNAME[0];
		
		echo "1";
		
	}
				
	phpmkr_db_close($conn);
	
	
	
}

?>