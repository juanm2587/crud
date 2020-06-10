<html>
    
    <head>
    	<title> Ingreso de Tareas</title>
    </head>
    <header>
    Ingresa los datos de la Tarea
    </header>
    <form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<td>Trabajo Practico:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
                <tr>
			<td>Fecha de asignacion:</td>
			<td> <input type='text' name='asignacion'></td>
		</tr>
                <tr>
			<td>Descripcion:</td>
			<td> <input type='text' name='descripcion'></td>
		</tr>
                <tr>
			<td>Fecha de Entrega:</td>
			<td> <input type='text' name='entrega'></td>
		</tr>
		<tr>
			<td>Autor:</td>
			<td><input type='text' name='autor' ></td>
		</tr>
		<tr>
			<td>Observaciones:</td>
			<td><input type='text' name='edicion' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
    </form>

</html>