<?php

class Allfuguai extends Controller
{
    public function index()
    {
        $data['title'] = 'ALL FUGUAI';
        $data['fuguai'] = $this->model("FuguaiModel")->getAllClosed();
        $data['nav-active'] = 'allfuguai';
        $this->view('allfuguai', $data);
    }
}
