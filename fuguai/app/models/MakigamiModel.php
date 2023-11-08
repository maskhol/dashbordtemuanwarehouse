<?php
class MakigamiModel
{
    private $tabel = "makigami_fuguai";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT * FROM $tabel ORDER BY id_makigami ASC");
        return $this->db->resultSet();
    }
}
