<?php
    require_once 'model/UsuarioDao.php';

    class AuthController{
        private $usuarioDao;

        function __construct()
        {
            $this->usuarioDao = new UsuarioDAO();
        }

        public function login(){    
            require_once 'view/login.php';
        }

        public function verificaUsuario(){       
            $email = $_REQUEST['email'];
            $senha = $_REQUEST['senha'];

            $usuario = $this->usuarioDao->find($email);

            if(!$usuario){
                $_REQUEST['login'] = true;

                return $this->login();
            }

            if($usuario['senha'] == $senha){
                return $this->home();
            }else{
                $_REQUEST['login'] = true;

                return $this->login();
            }
            
        }

        public function home(){
            require_once 'view/home.php';
        }

    }
?>