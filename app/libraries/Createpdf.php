<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/mpdf/mpdf.php';

class Createpdf {

	public function init()
	{
		return new mPDF();
	}
}
