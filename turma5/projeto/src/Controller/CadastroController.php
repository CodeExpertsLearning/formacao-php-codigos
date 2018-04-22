<?php
namespace Code\Controller;

use Code\Authenticator;
use Code\DB\Connection;
use Code\Entity\User;
use Code\Service\SessionService;
use Code\View;

class CadastroController extends BaseController
{
	public function index()
	{
		$view = new View('cadastro');
		return $view->render();
	}

	public function novo()
	{
		$method = $_SERVER['REQUEST_METHOD'];

		if ($method == 'POST'){
			$data = $_POST;

			$password = new \Code\PasswordHash();
			$password = $password->setPassword($data['password'])->generate();

			$user = new User(Connection::getInstance($this->getConfig( 'database' )));
			$user->name     = $data['name'];
			$user->email    = $data['email'];
			$user->password = $password;

			if (!$user = $user->insert()) {
				$this->addFlash('error', 'Erro ao cadastrar usuário!');
				return $this->redirect('cadastro');
			}

			(new SessionService())->sessionStart();
			$_SESSION['user']['id']   = $user;
			$_SESSION['user']['name'] = $data['name'];

			$this->addFlash('success', 'Escolha Uma Forma de Pagamento!');
			return $this->redirect('checkout');
		}

		return $this->redirect('cadastro');
	}

	public function login()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$data = $_POST;
			try {
				$user = new User(Connection::getInstance($this->getConfig('database')));

				$authenticator = new Authenticator($data, $user);
				$user = $authenticator->authenticate();

				$authenticator->setUserInSession(new SessionService(), $user);

				return $this->redirect('checkout');
			} catch(\Exception $e) {
				$this->addFlash('warning', $e->getMessage());
				return $this->redirect('cadastro');
			}
		}
	}
}