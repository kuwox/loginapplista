<h3>Descarga Lista de Precios</h3>
<?php
if ($session->check('Message.flash')) {
		$session->flash();
	}
	if ($session->check('Message.auth')) {
		$session->flash('auth');
	}
    echo $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('username');
    echo $form->input('pass', array('type'=>'password'));
    echo $form->end('Login');
?>