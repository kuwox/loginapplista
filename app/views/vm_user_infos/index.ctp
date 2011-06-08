<h2>Tareas</h2>
<?php if(empty($vm_user_infos)): ?>
No hay tareas en la lista
<?php else: ?>
<table>
<tr>
<th>Nombre</th>
<th>Nombre de Usuario</th>
<th>Correo Electrónico</th>
<th>Modificado</th>
<th>Acciones</th>
</tr>
<?php foreach ($vm_user_infos as $vm_user_info): ?>
<tr>
<td>
<?php echo $vm_user_info['Vm_User_Info']['name'] ?>
</td>
<td>
<?php
if($user['Users']['hecha']) echo "Hecha";
else echo "Pendiente";
?>
</td>
<td>
<?php echo $user['User']['creado'] ?>
</td>
<td>
<?php echo $user['User']['modificado'] ?>
</td>
<td>
<!-- acciones en las tareas serán añadidas más tarde -->
</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
<?php echo $html->link('Añadir Tarea', array('action'=>'add')); ?>