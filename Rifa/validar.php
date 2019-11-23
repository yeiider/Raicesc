<?php 
 $servidor="localhost";
  $user="yeiider95";
  $db="raicesc";
  $pass="y3id3r/95/12";
  $connet= new mysqli($servidor,$user,$pass,$db) or die(mysqli_connect_error());
  
  $user=$_POST["user"];
  $clave=$_POST["clave"];
  $query=$connet->query("SELECT * FROM user where user='$user' AND password='$clave'");
  if($query->num_rows>0){
   session_start();
   $_SESSION["user"]=$user;
   return header("location:index.php");
  }else{
  	echo "<script>alert('contraseñas no coinciden')</script>";
  	return header("location:Login.php");
  }
  $connet->close();
 ?>