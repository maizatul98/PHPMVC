<?php

class Mahasiswa_model{
	private $mhs = [
		[
			"name" => "Maizatul Fatihah",
			"matric no" => "252605",
			"email" => "maizatulfatihah@ymail.com",
			"course" => "Software Engineering"
		],

		[
			"name" => "Amiera Syazlin",
			"matric no" => "2253920",
			"email" => "syazlinazhar97@gmail.com",
			"course" => "Artificial Intelligence"
		],

		[
			"name" => "Amiera Syaqinah Fatihah",
			"matric no" => "290867",
			"email" => "as.fatihah@gmail.com",
			"course" => "Data Science"
		]
	];

	public function getAllMahasiswa()
	{
		return $this->mhs;
	}
}