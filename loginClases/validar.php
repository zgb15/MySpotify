<?php
include('bd.php');
$email=$_POST['email'];
$password=$_POST['password'];
session_start();
$_SESSION['email']=$email;
$_SESSION['password']=$password;

$conexion=mysqli_connect("localhost","root","kvMu*0Fi9RY$!Q8D","pi_public");

$consulta="SELECT * FROM usuarios where email='$email' and password='$password'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){

    header("location:../paginasPrivadas/home.php");

}else{
    ?>
    <?php
    include("../paginas/iniciarsesion.php");

    ?>
        <script> window.alert("Error de autentificación")</script>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
