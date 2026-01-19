<?php
    namespace RCM\Playground;

    class PessoaFeliz extends Pessoa
    {
        use Cachorro;

        public const QTDE_N = 12;

        public int $idade, $qtdSapatos; // Errado segundo a PSR
        public string $nome;
        public string $sobrenome;

        public function ficarFeliz()
        {
            return 'Estou feliz!';
        }
    }
    