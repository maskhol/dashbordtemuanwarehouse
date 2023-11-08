<?php

class Inventory extends Controller
{
    public function index()
    {
        $data['title'] = 'TEMUAN INVENTORY RMPM';
        $data['nav-active'] = 'fuguai';
        $data['nav-active-child'] = 'inventory';
        $data['fuguai'] = $this->model("FuguaiModel")->getInventory();
        $this->view('inventory', $data);
    }

    public function updatestatus($id)
    {
        if ($this->model('FuguaiModel')->updateStatus($id) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/Inventory');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/Inventory');
            exit;
        }
    }

    public function edit($id)
    {
        $data['id'] = $id;
        $data['title'] = 'EDIT FUGUAI';
        $data['nav-active'] = 'editfuguai';
        $data['pelapors'] = $this->model('NamaModel')->getAll();
        $data['makigamis'] = $this->model('MakigamiModel')->getAll();
        $data['jenis_fuguais'] = $this->model('JenisFuguaiModel')->getAll();
        $data['fuguai'] = $this->model('FuguaiModel')->getFuguaiById($id);
        $data['next'] = 'Inventory';

        $this->view('editfuguai', $data);
    }
}
