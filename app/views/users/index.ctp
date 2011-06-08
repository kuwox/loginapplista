<h2>Franar C.A.</h2>
<h3>Lista de Precios</h3>
<?php if(empty($users)): ?>
No se pueden mostrar los datos, por favor intente de nuevo
<?php else: ?>
<h4>Bienvenido:</h4>
 
<table>
<tr>
<th>Nombre</th>
<th>Nombre de Usuario</th>
<th>Correo Electrónico</th>
<th>Tipo de Usuario</th>
<th>Descargar Lista</th>
</tr>
<?php foreach ($users as $user): ?>

<tr>
<td>
<?php echo $user['User']['name'] ?>
</td>
<td>
<?php echo $user['User']['username'] ?>
</td>
<td>
<?php echo $user['User']['email'] ?>
</td>
<td>
<?php echo $user['User']['usertype'] ?>
</td>
<td>
<!-- acciones en las tareas serán añadidas más tarde -->
</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
<a href="/loginapplista/users/logout" class="button" target="_blank">Cerrar Sesión</a>