<?php
namespace app;


require "../vendor/autoload.php";
use app\Produto ;
// use app\PessoaFisica;
// use

// class Estagiario extends PessoaFisica { 
//     public function __construct(string $nome ,string $cpf ,int $idade)
//        {
//            parent::__construct($nome,$cpf,$idade); 
//        }
//    }
   
//    try {
//        $pessoa1 = new Estagiario ('lucas','12345678901',25);


//         // var_dump($pessoa1);
//         // $this->nome. "\n" .$this->cpf. "\n" .$this->idade;
//       echo $pessoa1->$nome;
//    }catch (\Throwable $th){ 
//        echo $th->getMessage();
//    }

// $pessoa1->setNome('flavio');
// // $pessoa1->getNome($nome);
// echo $pessoa1->$nome;


$produto1 = new Produto;
$produto1->nome = 'jara';
echo $produto1->nome;
