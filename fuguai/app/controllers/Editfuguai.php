<?php

class Editfuguai extends Controller
{
    public function index()
    {
        return "not found";
    }

    public function update()
    {
        if (empty($foto)) {
            $_POST['foto'] = '';
        } else {
            $_POST['foto'] = $_FILES['foto']['name'];
            // 
            move_uploaded_file($_FILES['foto']['tmp_name'], "foto/" . $_FILES['foto']['name']) or die();
        }

        if (empty($_POST['tgl']) || empty($_POST['pelapor']) || empty($_POST['area']) || empty($_POST['no_proses'])) {
            Flasher::setMessage('GAGAL', 'MEMPERBARUI DATA KARENA TIDAK ADA YANG DIUBAH ?', 'danger');
            header('location: ' . base_url . $_POST['next']);
            exit;
        }

        if ($this->model('FuguaiModel')->updateFuguai($_POST) > 0) {
            Flasher::setMessage('Berhasil', 'diperbarui', 'success');
            header('location: ' . base_url . $_POST['next']);
            exit;
        } else {
            Flasher::setMessage('Tidak', 'diperbarui', 'danger');
            header('location: ' . base_url . $_POST['next']);
            exit;
        }
    }
}
