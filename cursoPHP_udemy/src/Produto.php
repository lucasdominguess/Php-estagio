<?php 
namespace app;



Class Produto { 
    public $id ;
    public $nome ; 
    public $preco ; 
    private $estoque ;

    public function aumentaEstoque($qtd){ 
        $this->estoque += $qtd;
    }
    public function aumentaPreco($percentual){ 
        $this->preco = $this->preco + ($this->preco * ($percentual / 100));
    }   
    public function getEstoque(){
        return $this->estoque;
    }
    public function setEstoque($valor){ 
        if(!is_numeric($valor)){
            echo 'Valor Invalido!';
            return;
        }
        $this->estoque=$valor ; 
    }
}