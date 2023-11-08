<?php

class Home extends Controller
{
	public function index()
	{
		$data['title'] = 'TEMUAN WAREHOUSE';
		$data['nav-active'] = 'home';
		$data['jumlah_fuguai'] = $this->model("FuguaiModel")->getJumlahFuguai();
		$data['jumlah_fuguai_rm'] = $this->model("FuguaiModel")->getJumlahFuguaiRM();
		$data['jumlah_fuguai_pm'] = $this->model("FuguaiModel")->getJumlahFuguaiPM();
		$data['jumlah_fuguai_outbound'] = $this->model("FuguaiModel")->getJumlahFuguaiOutboundRMPM();
		$data['jumlah_fuguai_inventory'] = $this->model("FuguaiModel")->getJumlahFuguaiInventory();

		$this->view('home', $data);
	}
}
