<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingPesawat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    var $ctrlname = 'Booking';

    public function index()
    {
        $data=[
			'title'=>"SAI Maintenance",
			'ctrlname' => $this->ctrlname,
			// 'headers' => "dashboard/header",
			'contents' => "bookingpesawat_view",
			// 'footers' => "dashboard/footer",
			'data' => array()
		];
		$this->load->view('layouts/template-tiketnya',$data);
    }

   


}

/* End of file Controllername.php */
