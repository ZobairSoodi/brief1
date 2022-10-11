<?php
    class promotion{
        private $server = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "brief1";
        private $conn;

        function __construct($id,$nom){
            $this->id = $id;
            $this->nom = $nom;
            $this->conn = new mysqli($this->server,$this->user,$this->pass,$this->db);
        }

        function insert(){
            $insert_pro = "INSERT INTO promotion(nom) VALUES('$this->nom')";
            $this->conn->query($insert_pro);
        }

        function update(){
            $update_pro = "UPDATE promotion SET nom = '$this->nom' WHERE id = $this->id";
            $this->conn->query($update_pro);
        }

        function delete(){
            $delete_pro = "DELETE FROM promotion WHERE id = $this->id";
            $this->conn->query($delete_pro);
        }

        function search(){
            $search_pro = "SELECT * FROM promotion WHERE nom LIKE '%$this->nom%'";
            $res = $this->conn->query($search_pro);
            $rows = [];
            if($res->num_rows > 0){
                while($row = $res->fetch_assoc()){
                    $rows[] = $row;
                }
            }
            return $rows;
        }
    }
