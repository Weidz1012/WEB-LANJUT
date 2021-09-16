<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	
	public function Hello($nama,$npm){
		echo ("Hello $nama");
		echo ("<br> $npm");
	}
	public function HelloNama($nama){
		echo ("Hello $nama");
	}
}
