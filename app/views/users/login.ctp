<?php
if ($session->check('Message.flash')) {
		$session->flash();
	}
	if ($session->check('Message.auth')) {
		$session->flash('auth');
	}
    echo $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('username', array('label'=> 'Usuario'));
    echo $form->input('clave', array('type'=>'password'));
    echo $form->end('Entrar');
?>
</br>
			<a href="/index.php/component/user/reset.html" target="_blank">¿Has perdido la contraseña?</a>
</br></br>
			<a href="/index.php/component/user/remind.html" target="_blank">¿Has olvidado tu nombre de usuario?</a>
</br></br>
				<p>¿Sin cuenta aún?</p><a href="/index.php?option=com_virtuemart&page=shop.registration&Itemid=80" target="_blank">Registrate</a>