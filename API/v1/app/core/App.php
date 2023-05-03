<?php


class App{
    protected $folders;
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];
 
    public function __construct(){
        $url = $this->parsURL();
//         print_r($url); exit;
        if(file_exists('../app/controllers/'.$url[0].'/'.$url[1].'.php')){
        
            $this->folders = $url[0];
            $this->controller = $url[1];
            unset($url[0]);
            unset($url[1]);
            
            
        }
//     echo "../app/controllers/".$this->folders."/".$this->controller.".php"; exit;
        require_once "../app/controllers/".$this->folders."/".$this->controller.".php";

        $this->controller = new $this->controller;
       
        if(isset($url[2])){
            if(method_exists($this->controller, $url[2])){
                $this->method = $url[2];
                unset($url[2]);
            
            }
        }
       
       $this->params = $url ? array_values($url) : [];
       call_user_func_array([$this->controller, $this->method], $this->params);
    }
    
    public function parsURL(){
        if(isset($_GET['url'])){
           return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    
    }
}
