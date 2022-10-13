<?php

include("conexion.php");

$nombre = $_POST("user");
$pass = $_POST("pass");

//Login
if(isset($_POST["btnlogin"])){

    $query = mysql_query($conn,"SELECT * FROM login WHERE User = '$nombre' AND Pass = '$pass'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        echo "<script> alert('Bienvenido $nombre'); window.location = 'problemario.html' </script>";
    }
    else{
        echo "<script> alert('El usuario no existe.'); window.location = 'login.html' </script>";
    }

}

//Registrar
if(isset($_POST["btnsignup"])){

    $sqlwrite = "INSERT INTO login(user, pass) values ('$nombre', '$pass')";

    if(mysql_query($conn, $sqlwrite)){
        echo "<script> alert('USUARIO $nombre REGISTRADO CON EXITO'); window.location = 'login.html' </script>";
    }
    else{
        echo "ERROR: ".$sql."<br>".mysql_error($conn);
    }

}


?>