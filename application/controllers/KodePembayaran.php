<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class KodePembayaran extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    var $ctrlname = 'Booking';

    public function index()
    {
        $data=[
			'title'=>"Kode Pembayaran",
			'ctrlname' => $this->ctrlname,
			// 'headers' => "dashboard/header",
			'contents' => "kodepembayaran_view",
			// 'footers' => "dashboard/footer",
			'data' => array()
		];
		$this->load->view('contents/kodepembayaran_view');
    }

}

/* End of file Controllername.php */
