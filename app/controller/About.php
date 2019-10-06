<?php

class About extends Controller {
	
	public function index($nama = 'Maizatul', $pekerjaan = 'Student', $umur = 21)
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['title'] = 'About Me';
		$this->view('template/header', $data);
		$this->view('about/index', $data);
		$this->view('template/footer');
	}

	public function page()
	{
		$data['title'] = 'Pages';
		$this->view('template/header', $data);
		$this->view('home/index');
		$this->view('template/footer');
	}
}