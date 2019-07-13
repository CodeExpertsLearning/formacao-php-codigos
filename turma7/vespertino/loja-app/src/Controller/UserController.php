<?php
namespace LojaApp\Controller;

use LojaApp\MVC\View;
use LojaApp\Model\User;
use LojaApp\Database\Connection;
use LojaApp\Http\Session;
use LojaApp\Http\Flash;

class UserController
{
    public function index()
    {
        return View::render('login');
    }

    public function register()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;
            $data['password'] = password_hash($data['password'], PASSWORD_ARGON2I);

            $user = new User(Connection::getInstance());
            $user = $user->createUser($data);
            
            Session::add('user', $user);

            return header('Location: ' . HOME . '/cart/checkout');
        }
    }

    public function login()
    {

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $_POST;

            $user = new User(Connection::getInstance());
            $user = $user->getUserByEmail($data['email']);

            if(!$user) {
                Flash::add('warning', 'Usuário ou senha inválidos!');
                return header('Location: ' . HOME . '/cart');
            }
            
            if(!password_verify($data['password'], $user->password)) {
                Flash::add('warning', 'Usuário ou senha inválidos!');
                return header('Location: ' . HOME . '/cart');
            }

            unset($user->password);

            Session::add('user', $user);

            return header('Location: ' . HOME . '/cart/checkout');
        }
    }

    public function logout()
    {
        Session::remove('user');
        
        return header('Location: ' . HOME);
    }
}