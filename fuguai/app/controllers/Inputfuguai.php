<?php

class Inputfuguai extends Controller
{
    public function index()
    {
        $data['title'] = 'INPUT TEMUAN';
        $data['nav-active'] = 'inputfuguai';
        $data['pelapors'] = $this->model('NamaModel')->getAll();
        $data['makigamis'] = $this->model('MakigamiModel')->getAll();
        $data['jenis_fuguais'] = $this->model('JenisFuguaiModel')->getAll();

        $this->view('inputfuguai', $data);
    }

    public function simpanFuguai()
    {

        if (empty($foto)) {
            $_POST['foto'] = '';
        } else {
            $_POST['foto'] = $_FILES['foto']['name'];
            // 
            move_uploaded_file($_FILES['foto']['tmp_name'], "foto/" . $_FILES['foto']['name']) or die();
        }

        if (empty($_POST['tgl']) || empty($_POST['pelapor']) || empty($_POST['area']) || empty($_POST['no_proses'])) {
            Flasher::setMessage('GAGAL', 'DITAMBAHKAN KARENA DATA TIDAK LENGKAP Tanggal /Pelapor/ Area/ No Proses ?', 'danger');
            header('location: ' . base_url . '/Inputfuguai');
            exit;
        }

        if ($this->model('FuguaiModel')->tambahFuguai($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'ditambahkan', 'success');
            header('location: ' . base_url . '/Inputfuguai');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'ditambahkan', 'danger');
            header('location: ' . base_url . '/Inputfuguai');
            exit;
        }
    }
}
