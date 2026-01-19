<?php
    require __DIR__ . '/vendor/autoload.php';

    // require 'src/pessoa.php'; // ERRADO
    use RCM\Playground\Pessoa;
    
    $pessoa = new Pessoa();echo 'A pessoa disse: ' . $pessoa->ficarFeliz();
