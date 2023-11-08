<?php

class Outboundrmpm extends Controller
{
    public function index()
    {
        $data['title'] = 'TEMUAN OUTBOUND RMPM';
        $data['nav-active'] = 'fuguai';
        $data['nav-active-child'] = 'outboundrmpm';
        $data['fuguai'] = $this->model("FuguaiModel")->getOutboundRMPM();
        $this->view('outboundrmpm', $data);
    }

    public function updatestatus($id)
    {
        if ($this->model('FuguaiModel')->updateStatus($id) > 0) {
            Flasher::setMessage('Berhasil', 'diupdate', 'success');
            header('location: ' . base_url . '/Outboundrmpm');
            exit;
        } else {
            Flasher::setMessage('Gagal', 'diupdate', 'danger');
            header('location: ' . base_url . '/Outboundrmpm');
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
        $data['next'] = 'Outboundrmpm';

        $this->view('editfuguai', $data);
    }
}
