<?php 
$servidor="localhost";
$user="yeiider95";
$db="raicesc";
$pass="y3id3r/95/12";
$connet= new mysqli($servidor,$user,$pass,$db) or die(mysqli_connect_error());
if(isset($_POST["enviar"])){

		$nombre=$_POST["nombre"];
		$direccion=$_POST["direccion"];
	do {
        $suma=0;

		$c1=rand(0000,9999);
		$c2=rand(0000,9999);
		$g1=$connet->query("SELECT Codigo FROM usuarios WHERE Codigo='$c1");
		$g2=$connet->query("SELECT Codigo2 FROM usuarios WHERE Codigo2='$c2'");
		$p1=$connet->query("SELECT Codigo FROM padilla WHERE Codigo='$c1");
		$p2=$connet->query("SELECT Codigo2 FROM padilla WHERE Codigo2='$c2'");
		$s1=$connet->query("SELECT CODIGO FROM sur WHERE CODIGO='$c1");
		$s2=$connet->query("SELECT CODIGO2 FROM sur WHERE CODIGO2='$c2'");
        
        $g1=$g1->num_rows;
        $g2=$g2->num_rows;
        $p1=$p1->num_rows;
        $p2=$p2->num_rows;
        $s1=$s1->num_rows;
        $s2=$s2->num_rows;
        $suma=$p1+$p2+$g1+$g2+$s1+$s2;
        echo $suma;
	    } while ($suma!=0);
	    
	    if ($suma==0) {
	    	session_start();
	    	$us=$_SESSION["user"];
            if($us=="guachene"){
	    	$isert=$connet->query("INSERT INTO  usuarios (Nombre,Direccion,Codigo,Codigo2) VALUES ('$nombre','$direccion','$c1','$c2')");
	    	return header("location:index.php");
	    	}
	    	if($us=="padilla"){
	    	$isert=$connet->query("INSERT INTO  padilla (Nombre,Direccion,Codigo,Codigo2) VALUES ('$nombre','$direccion','$c1','$c2')");
	    	return header("location:index.php");
	    	}
	    	if($us=="ciudadSur"){
	    	$isert=$connet->query("INSERT INTO  sur (NOMBRE,DIRECCION,CODIGO,CODIGO2) VALUES ('$nombre','$direccion','$c1','$c2')");
	    	return header("location:index.php");
	    	}
	    }

	    echo $suma;
}

?>