<?php

class Mahasiswa extends Controller {
	public function index()
	{
		$data['title'] = 'Daftar Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
		$this->view('template/header', $data);
		$this->view('mahasiswa/index', $data);
		$this->view('template/footer');
	}


	public function detail($studentID)
	{
		$data['title'] = 'Detail Mahasiswa';
		$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaByStudentID($studentID);
		$this->view('template/header', $data);
		$this->view('mahasiswa/detail', $data);
		$this->view('template/footer');
	}
}