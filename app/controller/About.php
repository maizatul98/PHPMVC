<?php

class About extends Controller {
	
	public function index($nama = 'mei', $pekerjaan = 'police')
	{
		$this->view('about/index');
	}

	public function page()
	{
		$this->view('about/page');
	}
}