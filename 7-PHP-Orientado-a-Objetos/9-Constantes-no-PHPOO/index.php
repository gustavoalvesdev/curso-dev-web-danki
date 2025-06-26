<?php 

class MinhaClasse {
    const VALOR = 300;

    public function __construct() {
        echo self::VALOR;
    }
}

echo MinhaClasse::VALOR;
