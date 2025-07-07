<?php 

class HomeController extends Controller {
    public function index() {
        session_start();

        //Verifica se esta logado
        if(!isset($_SESSION['usuario_id'])) {
            header("Location: /users/login");
            exit();
        }
        $this->view('pages/home', [
            'nome' => $_SESSION['usuario_nome']
        ]);
    }
}

?>