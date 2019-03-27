<?php
    
    class Produto {
        private $nome;
        private $valor;
        private $indice;

        function __construct($nome, $valor, $indice) {
            $this->nome = $nome;            
            $this->valor = $valor;            
            $this->indice = $indice;            
        }
        
        function get_nome() {
            return $this->nome;
        }

        function get_valor() {
            return $this->valor;
        }

        function get_indice() {
            return $this->indice;
        }
    }

?>