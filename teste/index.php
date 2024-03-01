<?php 
// namespace app;
use app; 
use app\ampp\htdocs\php_estagio\teste\Pessoa;
require "../vendor/autoload.php";

class Dev extends Pessoa { 
    public $nome ;


    public function getNome(){ 
        echo $this->nome;
    }
}


$pessoa1 = new Dev; 
$pessoa1->nome = 'lucas'; 
var_dump($pessoa1);