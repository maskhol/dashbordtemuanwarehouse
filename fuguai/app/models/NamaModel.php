<?php

class NamaModel
{

    private $tabel = "nama";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT nama FROM $tabel ORDER BY nama ASC");
        return $this->db->resultSet();
    }
}
