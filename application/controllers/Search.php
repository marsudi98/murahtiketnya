<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    var $ctrlname = 'Search';

    public function index()
    {
        $data=[
			'title'=>"Search Murahtiketnya",
			'ctrlname' => $this->ctrlname,
			// 'headers' => "dashboard/header",
			'contents' => "search_view",
			// 'footers' => "dashboard/footer",
			'data' => array( 'tooi')
    ];
		$this->load->view('layouts/template-tiketnya',$data);
    }
    
     public  function post(){
                $group =$this->input->post('group');
                $from =$this->input->post('from');
                $to =$this->input->post('to');
                $is = $this->input->post('return');
                $go = $this->input->post('go');
                $back = $this->input->post('back');
                $adult = $this->input->post('adult');
                $child = $this->input->post('child');
                $infant = $this->input->post('infant');
                $airlanes = $this->input->post('airlanes');

                // URL API                 
                $url  =
                  'http://193.168.195.29/demo/find.php' ; 

                // buat sumber daya cURL baru 
                $ch  =  curl_init ( $url ); 

                // atur permintaan untuk mengirim json melalui POST 
                $data  = array ( 
                        "group" => $group,
                      "from_code" => $from,
                      "to_code" => $to,
                      "is_return" => $return,
                      "go_date" => $go,
                      "back_date" => $back,
                      "adult_count" => $adult,
                      "child_count" => $child,
                      "infant_count" => $infant,
                      "airlines" => $airlines 
                );

                $payload  =  json_encode ( $data );
                //echo $payload; 

                // lampirkan string JSON yang disandikan ke bidang POST 

                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

                // setel tipe konten ke application / json 
                curl_setopt ( $ch ,  CURLOPT_HTTPHEADER , array ( 'Content-Type: application/json' )); 

                // kembalikan respons alih-alih mengeluarkan 
                curl_setopt ( $ch ,  CURLOPT_RETURNTRANSFER ,  true ); 

                // jalankan permintaan POST 
                $result  =  curl_exec ($ch);

                // tutup cURL resource 
                curl_close ($ch);
                
                $data= json_decode($result, true);

                return $data ;
    }

    public function show($type,$data)
    {
                        //pergi
           for($i=0;$i<count($data['progress'][0]['data']['go']);$i++){
//maskapai    
                      if($type == 'maskapai')
                            echo  $data['progress'][0]['airline_code'];
//kode pesawat
                      if($type == 'kode_pesawat'){
                          //flight
                            for($j=0;$j<count($data['progress'][0]['data']['go'][$i]['flights']);$j++){
                               
                                echo $data['progress'][0]['data']['go'][$i]['flights'][$j]['flight_num']."<br>";
                            }
                      }
// total perjalanan
                      if($type == 'total_perjalanan'){
                            for($j=0;$j<count($data['progress'][0]['data']['go'][$i]['flights']);$j++){
                                    if($j ==0){
                 
                                         $berangkat = new DateTime($data['progress'][0]['data']
                                            ['go'][$i]['flights'][0]['depart_datetime'], 
                                            new DateTimeZone($data['progress'][0]['data']['go'][$i]['flights'][0]['depart_timezone'])); 

                                    }
                                    if($j == count($data['progress'][0]['data']['go'][$i]['flights']) - 1){
                                        $sampai = new DateTime(
                                             $data['progress'][0]['data']
                                            ['go'][$i]
                                            ['flights'][count($data['progress'][0]['data']['go'][$i]['flights']) - 1]
                                             ['arrive_datetime'], new DateTimeZone(
                                             $data['progress'][0]['data']
                                            ['go'][$i]
                                             ['flights'][count($data['progress'][0]['data']['go'][$i]['flights'])-1]
                                            ['arrive_timezone']));
                                        
                                         // echo $berangkat->format('H:i:s') . "<br>";
                                         // echo $sampai->format('H:i:s') . "<br>";
                                         $duration = $berangkat->diff($sampai); //$duration is a DateInterval object
                                         echo $duration->format("%H:%I");
                                    }

                                }
                        }
//perjalanan
                        if($type == 'perjalanan'){
                          for($j=0;$j<count($data['progress'][0]['data']['go'][$i]['flights']);$j++){
                              if($j == 0){
                                  echo  "<br>".$data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_time']
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_city']." ("
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_port'].")<br>" 
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_time']
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_city']." ("
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_port'].")<br>"  ;
                              }

                              if($j > 0){
                                echo  $data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_time']
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_city']." ("
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_port'].")<br>" 
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_time']
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_city']." ("
                                  .$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_port'].")<br>"  ;
                              }

                              if($j == count($data['progress'][0]['data']['go'][$i]['flights'])-1){
                                  echo "<br>";
                              }
                        }
                      }
//harga
                      if($type == 'harga'){
                          //fares
                              $pro = isset($data['progress'][0]['data']['go'][$i]['fares']['pro']) ? 1 : 0 ;
                              $eco = isset($data['progress'][0]['data']['go'][$i]['fares']['eco']) ? 1 : 0;
                              $bus = isset($data['progress'][0]['data']['go'][$i]['fares']['bus']) ? 1 : 0;


                                   if ($pro == 1 ){
                                      $fares = $data['progress'][0]['data']['go'][$i]['fares']['pro'];
                                      $total = $fares['by_ages']['adult']['total'];
                                      $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                       $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
                                             
                                      echo "Promo Rp.".number_format( $total, 2, ',', '.')."<br>" ;
                                  }

                                  if($eco == 1){
                                      $fares = $data['progress'][0]['data']['go'][$i]['fares']['eco'];
                                      $total = $fares['by_ages']['adult']['total'];
                                      $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                       $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
                                             
                                      echo "Ekonomi Rp.".number_format( $total, 2, ',', '.')."<br>" ;
                             
                                  }

                                  if($bus == 1){
                                      $fares = $data['progress'][0]['data']['go'][$i]['fares']['bus'];
                                      $total = $fares['by_ages']['adult']['total'];
                                      $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                       $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
                                             
                                      echo "Bisnis Rp.".number_format( $total, 2, ',', '.')."<br>" ;
                             
                                  }


                            }
          }

    }



}

/* End of file Controllername.php */
