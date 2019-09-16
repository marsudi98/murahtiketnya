<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    var $ctrlname = 'Landing';

    public function index()
    {
        $data=[
			'title'=>"SAI Maintenance",
			'ctrlname' => $this->ctrlname,
			// 'headers' => "dashboard/header",
			'contents' => "landing_view",
			// 'footers' => "dashboard/footer",
			'data' => array()
		];
		$this->load->view('layouts/template',$data);
    }

}

/* End of file Controllername.php */
