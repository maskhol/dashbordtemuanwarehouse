<?php

class FuguaiModel
{

    private $tabel = "fuguai_rmpm";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllClosed()
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT * FROM $tabel WHERE status = 'CLOSED' ORDER BY tgl DESC");
        return $this->db->resultSet();
    }

    public function getInboundRM()
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT * FROM $tabel WHERE status = 'ON PROGRESS' AND area = 'INBOUND RM' ORDER BY tgl DESC");
        return $this->db->resultSet();
    }

    public function getInboundPM()
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT * FROM $tabel WHERE status = 'ON PROGRESS' AND area = 'INBOUND PM' ORDER BY tgl DESC");
        return $this->db->resultSet();
    }

    public function getOutboundRMPM()
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT * FROM $tabel WHERE status = 'ON PROGRESS' AND area = 'OUTBOUND RMPM' ORDER BY tgl DESC");
        return $this->db->resultSet();
    }

    public function getInventory()
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT * FROM $tabel WHERE status = 'ON PROGRESS' AND area = 'INVENTORY RMPM' ORDER BY tgl DESC");
        return $this->db->resultSet();
    }

    public function updateStatus($id)
    {
        $tabel = $this->tabel;
        $query = "UPDATE $tabel SET status = 'CLOSED' WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getJumlahFuguai()
    {
        $tabel = $this->tabel;
        $this->db->query("select COUNT(fuguai) as total from $tabel");
        $data = $this->db->resultSet();
        return $data[0]["total"];
    }

    public function getJumlahFuguaiRM()
    {
        $tabel = $this->tabel;
        $this->db->query("select COUNT(fuguai) as rm from $tabel where area='INBOUND RM'");
        $data = $this->db->resultSet();
        return $data[0]["rm"];
    }

    public function getJumlahFuguaiPM()
    {
        $tabel = $this->tabel;
        $this->db->query("select COUNT(fuguai) as pm from $tabel where area='INBOUND PM'");
        $data = $this->db->resultSet();
        return $data[0]["pm"];
    }

    public function getJumlahFuguaiOutboundRMPM()
    {
        $tabel = $this->tabel;
        $this->db->query("select COUNT(fuguai) as outbound from $tabel where area='OUTBOUND RMPM'");
        $data = $this->db->resultSet();
        return $data[0]["outbound"];
    }

    public function getJumlahFuguaiInventory()
    {
        $tabel = $this->tabel;
        $this->db->query("select COUNT(fuguai) as inventory from $tabel where area='INVENTORY RMPM'");
        $data = $this->db->resultSet();
        return $data[0]["inventory"];
    }

    public function tambahFuguai($data)
    {
        $tabel = $this->tabel;
        $this->db->query("insert into $tabel (tgl, pelapor, fuguai, fuguai_11, area, no_proses, kategori, korektif, pic, do_date, tag, status, foto) 
        values(:tgl, :pelapor, :fuguai, :fuguai_11, :area, :no_proses, :kategori, :korektif, :pic, :do_date , :tag, :status, :foto)");
        $this->db->bind('tgl', $data['tgl']);
        $this->db->bind('pelapor', $data['pelapor']);
        $this->db->bind('fuguai', $data['fuguai']);
        $this->db->bind('fuguai_11', $data['fuguai_11']);
        $this->db->bind('area', $data['area']);
        $this->db->bind('no_proses', $data['no_proses']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('korektif', $data['korektif']);
        $this->db->bind('pic', $data['pic']);
        $this->db->bind('do_date', $data['do_date']);
        $this->db->bind('tag', $data['tag']);
        $this->db->bind('status', 'ON PROGRESS');
        $this->db->bind('foto', $data['foto']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateFuguai($data)
    {
        $tabel = $this->tabel;
        $this->db->query("UPDATE $tabel SET tgl = :tgl, pelapor = :pelapor, fuguai = :fuguai, fuguai_11 = :fuguai_11, area = :area, no_proses = :no_proses, kategori = :kategori, korektif = :korektif, pic = :pic, do_date = :do_date, tag = :tag, foto = :foto WHERE id = :id");
        $this->db->bind('tgl', $data['tgl']);
        $this->db->bind('pelapor', $data['pelapor']);
        $this->db->bind('fuguai', $data['fuguai']);
        $this->db->bind('fuguai_11', $data['fuguai_11']);
        $this->db->bind('area', $data['area']);
        $this->db->bind('no_proses', $data['no_proses']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('korektif', $data['korektif']);
        $this->db->bind('pic', $data['pic']);
        $this->db->bind('do_date', $data['do_date']);
        $this->db->bind('tag', $data['tag']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getFuguaiById($id)
    {
        $tabel = $this->tabel;
        $this->db->query("SELECT * FROM $tabel WHERE id = '$id'");
        $result = $this->db->resultSet();
        if (count($result) > 0) return $result[0];
        return [];
    }
}
