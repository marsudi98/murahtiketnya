<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Landing_model');
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
        $data['select_airport']= $this->Landing_model->get_data_airport();
		$this->load->view('layouts/template',$data);
    }

}

/* End of file Controllername.php */
