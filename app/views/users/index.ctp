<h2>Franar C.A.</h2>
<h3>Lista de Precios</h3>
<h4>Bienvenido:</h4>

<table>
<tr>
<th>Nombre</th>
<th>Nombre de Usuario</th>
<th>Correo Electrónico</th>
<th>Tipo de Cliente</th>
<th>Descargar Lista</th>
</tr>
<?php ($session->read('Auth'));
		$name = ($session->read('Auth'));
	

?>
<tr>
<td>
<?php print_r($name['User']['name']) ?>
</td>
<td>
<?php print_r($name['User']['username']) ?>
</td>
<td>
<?php print_r($name['User']['email']) ?>
</td>
<td>
<?php print_r($name['User']['usertype']) ?>
</td>
<td>
<?php
	if (($name['User']['usertype']) == "Distribuidor") {
	echo "<h2></strong><br>Para descargar la Lista de Distribuidor, pulsa: <a href='./dl/LISTAS MAYORISTA  2011 ABR.zip'>Aqui</a></h2>";
	} else {
		if (($name['User']['usertype']) == "Super Administrator") {
	echo "<h4></strong><a href='./dl/LISTAS DISTRIBUIDOR ABR 2011.zip'>Lista de Precios</a></h4>";
	} else {
		if ($name == "R") {
		echo "<h4></strong><a href='./dl/LISTAS REPUESTERO 2011 ABR.zip'>Lista de Precios</a></h4>";		
	} else {
		if ($name == "S") {
		echo "<h2></strong><a href='./dl/LISTAS SICO ABRIL 2011.zip'>Lista de Precios</a></h2>";		
	}
	}
	}
	}
	?>
</td>
</tr>

</table>
<a href="/loginapplista/users/logout" class="button">Cerrar Sesión</a>