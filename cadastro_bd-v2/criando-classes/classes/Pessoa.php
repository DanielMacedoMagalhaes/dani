<?php
class Pessoa {
    private $nome;
    private $idade;

    private $falando = False;
    private $comendo = False;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function falar($assunto) {
        if ($this->falando) {
            echo "{$this->nome} já está falando.\n";
            return;
        }

        if ($this->comendo) {
            echo "{$this->nome} não pode falar comendo.\n";
            return;
        }

        echo "{$this->nome} está falando sobre $assunto.\n";
        $this->falando = True;
    }

    public function parar_falar() {
        if (!$this->falando) {
            echo "{$this->nome} não está falando\n";
            return;
        }

        echo "{$this->nome} parou de falar\n";
        $this->falando = False;
    }

    public function comer($alimento) {
        if ($this->falando) {
            echo "{$this->nome} não pode comer falando\n";
            return;
        }

        if ($this->comendo) {
            echo "{$this->nome} já está comendo\n";
            return;
        }

        echo "{$this->nome} está comendo $alimento.\n";
        $this->comendo = True;
    }

    public function parar_comer() {
        if (!$this->comendo) {
            echo "{$this->nome} não está comendo...";
            return;
        }

        echo "{$this->nome} parou de comer.";
        $this->comendo = False;
    }

    public function get_ano_nascimento() {
        return date('Y') - $this->idade;
    }
}