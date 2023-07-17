<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$tel=$_POST["tel"];
$datedenaissance=$_POST["datedenaissance"];
$email=$_POST["email"];
$password=$_POST["password"];
$destination=$_POST["destination"];
$message=$_POST["message"];
$requet="Insert into distination values(Nul,'$nom','$prenom','$tel','$datedenaissance','$email','$password','$destination','$message')";
$CON=mysqli-connect("localhost","root","","destination");
mysqli-query($CON,$requet);
echo("client reservé");
?>