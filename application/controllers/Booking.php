<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
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
			'contents' => "booking_view",
			// 'footers' => "dashboard/footer",
			'data' => array()
		];
		$this->load->view('layouts/template',$data);
    }

    public function booking_pesawat()
    {
        $data=[
			'title'=>"SAI Maintenance",
			'ctrlname' => $this->ctrlname,
			// 'headers' => "dashboard/header",
			'contents' => "bookingpesawat_view",
			// 'footers' => "dashboard/footer",
			'data' => array()
		];
		$this->load->view('layouts/template',$data);
    }

    public function detailbooking_pesawat()
    {
        $data=[
			'title'=>"SAI Maintenance",
			'ctrlname' => $this->ctrlname,
			// 'headers' => "dashboard/header",
			'contents' => "detailbookingpesawat_view",
			// 'footers' => "dashboard/footer",
			'data' => array()
		];
		$this->load->view('layouts/template',$data);
    }

    public function booking_kereta()
    {
        $data=[
			'title'=>"SAI Maintenance",
			'ctrlname' => $this->ctrlname,
			// 'headers' => "dashboard/header",
			'contents' => "bookingkereta_view",
			// 'footers' => "dashboard/footer",
			'data' => array()
		];
		$this->load->view('layouts/template',$data);
    }

}

/* End of file Controllername.php */
