<?php 


namespace App\entity;

use App\classes\Pessoa;
use App\helpers\ClearNumbers;

class Aluno extends Pessoa {
    private string $cpf;
    public function __construct(string $nome, string $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        echo $this->nome;
        echo ClearNumbers::clearCpf($this->cpf);
    }
}