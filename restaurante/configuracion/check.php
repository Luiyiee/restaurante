<?php 
session_start();
include "../configuracion/conexion.php";

//  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
//  && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
//   sleep(2);
  $conexion->set_charset('utf8');

  $_SESSION['contadorLogin'] == 0;

    $email = $conexion->real_escape_string($_POST['email']);
    $password = $conexion->real_escape_string($_POST['password']);

 if(  isset($email)  && isset($password)   ){

    if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,10})$/',$email) &&
	   !preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$password) ){
                 $resultado = $conexion->query("select * from usuarios where 
                 email='".$email."' and password='".sha1($password)."' and estado='Activado' limit 1")or die($conexion->error);
                 if(mysqli_num_rows($resultado)>0){
                    $datos_usuario = mysqli_fetch_row($resultado); 

                    $id_usuario = $datos_usuario[0];
                    $usuario = $datos_usuario[1];
                    $email = $datos_usuario[6];
                    $imagen_perfil = $datos_usuario[8];
                    $nivel = $datos_usuario[9];
                    $estado = $datos_usuario[10];
                    $conexion = $datos_usuario[15];
                    
                     $_SESSION['datos_login']= array(
                         
                        'id_usuario'=>$id_usuario,
                        'usuario'=>$usuario,
                         'email'=>$email,
                         'imagen'=>$imagen_perfil,
                         'nivel'=>$nivel,
                         'estado'=>$estado,
                         'conexion'=>$conexion
                     );

                     if($nivel==='Administrador'){
                         header("Location: ../inicio.php");
                     }else if($nivel==='GDF'){
                         header("Location: ../inicio.php");
                     }

                 }else {
                    header("Location: ../../iniciar-sesion.php?error=Email o contraseña incorrectos");
                     $_SESSION['contadorLogin']++ ; 


                     if ($_SESSION['contadorLogin'] >= 3) {
                        $actualizar="UPDATE usuarios SET estado='Desactivado' WHERE email='$email'";
                        $result = $conexion->query($actualizar);
                     
                        header("Location: ../../iniciar-sesion.php?bloqueado=Lo sentimos usuario bloqueado. contáctese  con el administrador");
                        // header("Location: ../cca.php?bloqueado=".$_SESSION['contadorLogin']);
                    }
                 }

                 //validavion emal servidor
                }
                //
            }else{
                header("campos");
          }      


//  $conexion->close();
