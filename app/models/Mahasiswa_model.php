<?php

class Mahasiswa_model{

	private $table = 'mahasiswa';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultSet();
	}

	public function getMahasiswaByStudentID($studentID)
	{
		$this->db->query('SELECT * FROM ' . $this->table . 'WHERE studentID=:studentID');
		$this->db->bind('studentID', $studentID);
		return $this->db->single();
	}
}