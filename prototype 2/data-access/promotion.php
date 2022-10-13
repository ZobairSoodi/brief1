<?php

use promotion as GlobalPromotion;

    class Promotion{
        private $id;
        private $nom;

        function get_nom(){
            return $this->nom;
        }

        function set_nom($nom){
            $this->nom = $nom;
        }

        function get_id(){
            return $this->id;
        }

        function set_id($id){
            $this->id = $id;
        }
    }

?>