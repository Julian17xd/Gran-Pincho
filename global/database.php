<?php
   //$server = '127.0.0.1:3307';
   //$username = 'root';
   //$password = '';
   //$database = 'elgranpincho';

   //$conn = mysqli_connect($server, $username, $password, $database);

   
   //if (!$conn) {
      //die("La conexión a la base de datos ha fallado: " . mysqli_connect_error());
   //}
   include('config.php');
   $servirdor="mysql:dbname=".BD.";host=".SERVIDOR;
   
   try {
      $pdo= new PDO($servirdor,USUARIO,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   } catch (PDOException $e) {
      echo "s<script>alert('Error...')</script>";
   }
?>