<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo Formulario</title>
</head>

<body>

<form action="respuesta.php" method="get">
	Ingrese su nombre:<input type="text" name="nom" />
    <br />
    Ingrese su apellido:<input type="text" name="ap" />
 	<br />
    Seleccione un ciudad:
    <select name="pais">
    <option value="espana">Cuzco</option>
    <option value="chile">Pasco</option>
    <option value="peru">Lima</option>
    </select>
   <hr /> 
	<input type="submit" value="Enviar" title="Enviar" />
</form>

</body>

<h2>footer title</h2>
</html>