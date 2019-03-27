<?php 
    class Produtos {
        private $lista;

        function __construct() {
            $this->lista = [];
        }

        function add_produto($produto) {
            array_push( $this->lista, $produto );
        }

        function delete_produto( $indice ) {
            array_splice( $this->lista, $indice, 1 );
        }

        function get_produto( $indice = false ) {
            if( !$indice ) {
                return $this->lista;
            }

            return $this->lista[$indice];
        }

        function get_lista() {
            return $this->lista;
        }
    }
?>