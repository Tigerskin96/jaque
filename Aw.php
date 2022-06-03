<!DOCTYPE html>
<html lang="en">
<head>
<title>App´sWebIC-31V</title>
<meta charset="utf-8">
 <meta name="description" content="Este es un documento HTML5">
 <meta name="keywords" content="HTML, CSS, JavaScript">
<link rel="stylesheet" href="Css/EstiloForm.css">
</head>
<body>
<form action="Ejemplophp.php" method="post">
<main>
<?php 
$name=$_POST['name'];
$ap=$_POST['ap'];
$Sexo=$_POST['Sexo'];
$Fn=$_POST['Fn'];
$Carrera=$_POST['Carrera'];
$comentario=$_POST['comentario'];
$imagen=$_POST['imagen'];

echo "$name <br>";
echo"$ap <br>";
echo"$Sexo <br>";

if(!empty($_POST['check_lista'])) {
// Contando el numero de input seleccionados "checked" checkboxes.
$checked_contador = count($_POST['check_lista']);
echo "<p>Has seleccionado ".$checked_contador." opcione(s) en la categoria Hobbi que corresponde(n) a:</p>";
// Bucle para almacenar y visualizar valores activados checkbox.
foreach($_POST['check_lista'] as $seleccion) {
echo "<p>".$seleccion ."</p>";
}
}
else{
echo "<p><b>Por favor seleccione al menos una opción.</b></p>";
}

echo "$Fn <br>";
echo "$Carrera <br>";
echo "$comentario <br>";
echo "$imagen";

 ?>
</main>
</body>
</html>