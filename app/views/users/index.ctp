<h2>Franar C.A.</h2>
<h3>Lista de Precios</h3>


<h4>Bienvenido:</h4>
 
<table>
<tr>
<th>Nombre</th>
<th>Nombre de Usuario</th>
<th>Correo Electrónico</th>
<th>Tipo de Usuario</th>
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
<!-- acciones en las tareas serán añadidas más tarde -->
</td>
</tr>

</table>

<a href="/loginapplista/users/logout" class="button" target="_blank">Cerrar Sesión</a>