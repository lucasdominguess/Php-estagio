<?php 
namespace app;

declare(strinct_types=1);




abstract class PessoaFisica {
//     protected $nome;
//     protected $cpf;
//     protected $idade;
    public function __construct(
        protected string $nome ,
        protected string $cpf ,
        protected int $idade)
    {   
        // $this->nome = $nome;
        // $this->cpf =$cpf;
        // $this->idade= $idade;
        $this->dados();
    }
    private function dados(){
          $len_cpf= strlen($this->cpf);
          
        if ($len_cpf !== 11 or !preg_match("/^[a-z\s?]{5,}$/im",$this->nome)) {
            throw new \Exception("Cpf invalido");
        }
    }

    public function setNome($nome){
        $this->nome = $nome ; 
    }
    public function setCpf($cpf){
        $this->cpf= $cpf ; 
    }
    public function setIdade($idade){
        $this->idade = $idade ; 
    }
    public function getNome($nome){
        $this->nome = $nome;
        echo $this->$nome;

    }


   
}




