<?php

    class Add {

        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function select()
        {
            $this->db->query("SELECT * FROM voyages");
            return $this->db->resultSet();
        }

        public function delete($idVoyage)
        {
            $this->db->query("DELETE FROM voyages WHERE idVoyage = '$idVoyage' ");
            return $this->db->execute();
        }

        public function insert($id, $name, $uehuf)
        {
            $this->db->query("INSERT INTO voyages (id , name, uehuf) VALUES (:id , :name, :uehuf)");
            // Bind Values
            $this->db->bind(':id', $id);
            $this->db->bind(':name', $name);
            $this->db->bind(':uehuf', $uehuf);

            return $this->db->execute();
        }
        
        
    }