<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Trabajo con PHP y MySQLt</title>
</head>

<body>

<form name="form" method="post" action="recibe.php">
	Nombre:<input type="text" name="nom" />
    <br />
    Pais:
    <select name="pais">
    <option value="espana">España</option>
    <option value="chile">Chile</option>
    <option value="peru">Peru</option>
    <option value="suecia">Suecia</option>
    </select>
   <br />
   Indique Sexo
   <!-- radio button tiene q tener el mismo name varia el value -->
   M<input type="radio" name="sexo" value="m">
   F<input type="radio" name="sexo" value="f">
   <hr />
   
	<input type="submit" value="Enviar" title="Enviar" />
</form>




</body>
</html>