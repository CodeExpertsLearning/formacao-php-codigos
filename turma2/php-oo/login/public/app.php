<?php
use App\Authenticator\Auth;
use App\User\User;

$url = isset($_GET['p'])? $_GET['p'] : null;

if($url == 'login') {
    
    if($_SERVER['REQUEST_METHOD']
    == 'POST') {
    	$data = $_POST;
    	$a = new Auth($pdo);
    	$a->setCredentials($data);

    	if(!$user = $a->login()) { 
    		print 'Usuário não cadastrado...'; 
    		die;
    	}

    	$_SESSION['user'] = $user;

    	header('Location: /');
    }

    if($_SERVER['REQUEST_METHOD']
    == 'GET') {
    require $views . $url . '.phtml';
    }
}

if($url == 'logout') {
	$a = (new Auth($pdo))->logout();
	header('Location: /');
}

if($url == 'users') {
    if(!(new Auth($pdo))->isLogged()) header('Location: /?p=login');

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $data = $_POST;
        
        if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            print 'Email inválido...';
            return;
        }

        $user = new User($pdo);
        
        $password = sha1(KEY . $data['password']);

        $user->setName($data['name'])
             ->setEmail($data['email'])
             ->setPassword($password)
             ->saveUser();

        return;
    }

    require $views . 'users/save.phtml';

}

if(is_null($url)) {
    if(!(new Auth($pdo))->isLogged()) header('Location: /?p=login');    
	require $views . 'index.phtml';
}