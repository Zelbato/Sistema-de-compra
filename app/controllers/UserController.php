<?php 

class UserController extends Controller {

    public function index() {
        $this->view('Users/formulario');
    }

    public function salvar() {
        file_put_contents('debug.txt', "ENTROU NO MÉTODO SALVAR\n", FILE_APPEND);

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['nome'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = password_hash($_POST['senha'] ?? '', PASSWORD_DEFAULT);

            $userModel = $this->model('User');

            if($userModel->existeEmail($email)) {
                echo "E-mail já cadastrado";
                return;
            }

            // $userModel->inserir($name,$email,$password);
            $sucesso = $userModel->inserir($name, $email, $password);

            if($sucesso) {
                header("Location: /user/login");
                die('Redirecionando.....');
                exit();
            } else {
                echo "ERROR -> TENTE NOVAMENTE";
            }
        }
    }

    public function autenticar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['senha'] ?? '';

            $userModel = $this->model('User');
            $user = $userModel->buscarPorEmail($email);

            if($user && password_verify($password, $user['senha'])) {
                
                session_start();
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['usuario_nome'] = $user['nome'];

                header("location: /pages/home");
                exit();
            } else {
                echo "E-mail ou senha incorretos!";
            }

        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: Users/login");
        exit();
    }

    
}

?>