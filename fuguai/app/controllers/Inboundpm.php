<?php

class Inboundpm extends Controller
{
    public function index()
    {
        $data['title'] = 'TEMUAN PM';
        $data['nav-active'] = 'fuguai';
        $data['nav-active-child'] = 'inboundpm';
        $data['fuguai'] = $this->model("FuguaiModel")->getInboundPM();
        $this->view('inbound_pm', $data);
    }

    public function updatestatus($id)
    {
        if ($this->model('FuguaiModel')->updateStatus($id) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/Inboundpm');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/Inboundpm');
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
        $data['next'] = 'Inboundpm';

        $this->view('editfuguai', $data);
    }
}
