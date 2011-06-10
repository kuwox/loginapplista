<?php
class UsersController extends AppController {
	var $components = array('Auth');
	#Ir a login.ctp usando la autenticación de Joomla	
	function login(){
		$tipo = null;
		$user = null;
	#buscamos un usuario en la BASE de datos a partir de su 'username'
	if(!empty($this->data) && strlen($this->data['User']['clave'])>6)
		$user = $this->User->findAllByUsername($this->data['User']['username']);
		#verificamos que el usuario exista
		if(count($user) == 1) {
			$user = $user[0];
			#hacemos el login del joomla
			#dividiendo el password en la BD en 2 partes a partir del simbolo ':'
			$parts	= explode( ':', $user['User']['password'] );
			#la 1ra parte es el password ya encriptado
			$crypt	= $parts[0];
			#la 2da la cadena salt q se concatena con el password para ecriptar
			$salt	= @$parts[1];
			#Joomla ocupa MD5 como mecanismo de encriptacion y cakephp SHA1
			$passcrypt = md5($this->data['User']['clave'].$salt);
			#comparamos el password encriptado con el generado.
			if ($crypt == $passcrypt) {
				#CONGRATULATION! ';¬D,
				$this->data['User']['password'] = $passcrypt.':'.$salt;
				$this->Auth->login($this->data);
				$this->redirect('index');
			}
	}
	}
	
	#Ir al index.ctp
	function index() { 
		#$this->User->find('all',array('conditions'=>'User.username = username'));
		#$this->set('users', $this->User->find('first'));
		#$this->render();
		#$this->set('users', $this->Thing->findAll('username'));
      # la lista generada será indexada por Post.id, con valor de Post.title
      $this->set('users', $this->User->find('list', array('fields'=>'User.name')));		
	}
	
	#Cerrar Sessión
	function logout() {
		// Redirect users to this action if they click on a Logout button.
		// All we need to do here is trash the session information:
		//$this->Session->delete('User');
	   // And we should probably forward them somewhere, too...
		//$this->redirect('login');
		$this->redirect($this->Auth->logout());
	}
}
?>