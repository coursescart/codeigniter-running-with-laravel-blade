<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$blade_ver = '5.4';
		$codeigniter_ver = CI_VERSION;
		$this->blade->view('home',compact('blade_ver','codeigniter_ver'));
	}
}

?>