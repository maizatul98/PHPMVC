<?php

class About {
	
	public function index($nama = 'mei', $pekerjaan = 'police')
	{
		echo "My name is $nama, I am a $pekerjaan";
	}

	public function page()
	{
		echo 'About/page';
	}
}