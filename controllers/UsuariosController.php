<?php
require_once 'model/Usuario.php';
require_once 'model/UsuarioDAO.php';

class UsuariosController{
    private $usuario;
    private $usuarioDao;

    function __construct()
    {
        $this->usuarioDao = new UsuarioDAO();
    }

    public function index(){        
        require_once 'view/home.php';
    }

    public function cadastro(){        
        require_once 'view/cadastro.php';
    }

    public function store(){        
        $this->usuario = new Usuario();
        $this->usuario->setNome($_REQUEST['nome']);
        $this->usuario->setEmail($_REQUEST['email']);
        $this->usuario->setSenha($_REQUEST['senha']);
        
        if($this->usuarioDao->store($this->usuario)){
            $_REQUEST['store'] = true;
        }else{
            $_REQUEST['store'] = false;
        }

        $this->cadastro();
    }

    public function update(){
        $this->usuario = new Usuario();
        $this->usuario->setId($_REQUEST['id']);
        $this->usuario->setNome($_REQUEST['nome']);
        $this->usuario->setEmail($_REQUEST['email']);
        $this->usuario->setSenha($_REQUEST['senha']);

        if($this->usuarioDao->update($this->usuario)){
            $_REQUEST['update'] = true;
        }else{
            $_REQUEST['update'] = false;
        }

        $this->index();        
    }

    public function delete(){
        if(!$_REQUEST['id']){
            return false;  
        }

        if($this->usuarioDao->delete($_REQUEST['id'])){
            $_REQUEST['delete'] = true;
        }else{
            $_REQUEST['delete'] = false;
        }

        $this->index();
    }
}