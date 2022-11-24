<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loginreg";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion con base de datos: ".mysqli_connect_error());
}

$nombre = $_POST["User"];
$pass = $_POST["Pass"];

//Login
if(isset($_POST["btnlogin"])){
    

    $query = mysqli_query($conn,"SELECT * FROM login WHERE User = '$nombre' AND Pass = '$pass'");
    $nr = mysqli_num_rows($query);

    if($nr == 1){
        echo "<script> alert('Bienvenido $nombre'); window.location = '/xampp/Affectum/SistEncu/problemario.php' </script>";
    }
    else if($nr == 0){
        echo "<script> alert('El usuario no existe.'); window.location = 'login.html' </script>";
    }

}

//Registrar
if(isset($_POST["btnsignup"])){

    $sqlwrite = "INSERT INTO login(user, pass) values ('$nombre', '$pass')";

    if(mysqli_query($conn, $sqlwrite)){
        echo "<script> alert('USUARIO $nombre REGISTRADO CON EXITO'); window.location = 'login.html' </script>";
    }
    else{
        echo "ERROR: ".$sql."<br>".mysql_error($conn);
    }

}

?>