<?php

class Home extends Controller{
	public function index()
	{
		$data['title'] = 'Home';
		$this->view('template/header');
		$this->view('home/index');
		$this->view('template/footer');
	}
}