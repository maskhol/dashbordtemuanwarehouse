<?php
class JenisFuguaiModel
{
    private $tabel = "jenis_fuguai";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT jenis_fuguai FROM $tabel ORDER BY jenis_fuguai ASC");
        return $this->db->resultSet();
    }
}
