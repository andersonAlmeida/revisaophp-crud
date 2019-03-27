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
            foreach( $this->lista as $i => $prod ) {
                if( $prod->get_indice() == $indice )
                    array_splice( $this->lista, $i, 1 );
            }
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