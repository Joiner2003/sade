<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<?php header("Content-Type: text/html; charset=utf-8");?>
</head>

<?php 

/*session_start();
if(!isset($_SESSION["Email"])){
	header("location: ../../Views/pages/login.php");
}else{*/
	require_once('../../Controllers/HomeController.php');
	$HomeController = new HomeController();

	require '../../Lib/FlashMessages.php';
	if (!session_id()) @session_start();
	// Instantiate the class
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();
	date_default_timezone_set('America/Mexico_City');
    
    
    $Id = $_POST['IdUsuario'];
    $Codigo = $_POST['codigo'];
    $Roles = $_POST['Roles'];
    $NSeguroSocial = $_POST['numerosocial'];
    $Rfc = $_POST['rfc1'];
	$Curp = $_POST['curp'];
    $TipoSangre = $_POST['TipoSangre'];
    $Alergia = $_POST['alergia'];
    $Selecolonia = $_POST['selecolonia'];
    $Calleynum = $_POST['calleynum'];
    $Seletutoraca = $_POST['seletutoraca'];
    $Selepadre = $_POST['Selepadre'];
    $Seleturno = $_POST['seleturno'];
	
    
	if ($Roles == 4) {
        if($HomeController->CompletarAlumnos($Id, $Codigo,$NSeguroSocial,$Rfc,$Curp,$TipoSangre,$Alergia,$Selecolonia,$Calleynum,$Seletutoraca,$Selepadre,$Seleturno) == true){

            $msg->success('¡Informacion Alumnos Completada con Exito!');
            header("location: ../../Views/pages/tablas.php");
        }else{
            $msg->error('¡ERROR, no se Agregó!..');
        }
		}else if($Roles == 5){
			
			if($HomeController->CompletarTutorAca($Id,$Selecolonia,$Calleynum) == true){

                $msg->success('¡Informacion Tutor Academico Completada con Exito!');
				header("location: ../../Views/pages/tablas.php");
			}else{
				$msg->error('¡ERROR, no se Agregó!..');
			}
		}else if($Roles == 6){
        
            if($HomeController->CompletarTutorPadre($Id,$Selecolonia,$Calleynum) == true){

                $msg->success('¡Informacion Tutor Padre Completada con Exito!');
				header("location: ../../Views/pages/tablas.php");
			}else{
				$msg->error('¡ERROR, no se Agregó!..');
			}
        }else{
            $msg->error('!ERROR, Rol No admite completar Información¡');
				
				header("location: ../../Views/pages/tablas.php");
        }
	


	
//}
?>