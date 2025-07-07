<?php 

session_start();

//Configuração do banco
require_once __DIR__ . '/../app/config/config.php';


//Núcleo do MVC
require_once __DIR__ . '/../app/core/router.php';
require_once __DIR__ . '/../app/core/Controller.php';

require_once __DIR__ . '/../app/controllers/UserController.php';
require_once __DIR__ . '/../app/models/User.php';

//Pagina de acesso 
require_once __DIR__ . '/../app/views/Users/formulario.php';

$router = new Router;
// $router->run();
?>
