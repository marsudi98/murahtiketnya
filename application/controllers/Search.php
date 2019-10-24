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
      $group =$this->input->post('group');
      $from =$this->input->post('from');
      $to =$this->input->post('to');
      $return = $this->input->post('return');
      $go = $this->input->post('go');
      $back = $this->input->post('back');
      $adult = $this->input->post('adult');
      $child = $this->input->post('child');
      $infant = $this->input->post('infant');        
      $airlines = $this->input->post('maskapai');

      $data = $this->maskapai($from, $to, $go, $airlines);
              
      if(!is_null($data['progress'][0]['data']) ){
        $result[0][$airlines] =  $this->show($data) ;
      }

              // $airlines = 'GAR';  
              // $data = $this->maskapai($from, $to, $go, $airlines);
              // if(!is_null($data['progress'][0]['data']) ){
              //   $a++;
              //   $result[$a]['GAR'] =  $this->show($data) ;
              // }

              // $airlines = 'LIO';  
              // $data = $this->maskapai($from, $to, $go, $airlines);
              // if(!is_null($data['progress'][0]['data']) ){
              //   $a++;
              //   $result[$a]['LIO'] =  $this->show($data) ;
              // }

              // $airlines = 'SRI';  
              // $data = $this->maskapai($from, $to, $go, $airlines);
              // if(!is_null($data['progress'][0]['data']) ){
              //   $a++;
              //   $result[$a]['SRI'] =  $this->show($data) ;
              // }

              // $airlines = 'TRA';  
              // $data = $this->maskapai($from, $to, $go, $airlines);
              // if(!is_null($data['progress'][0]['data']) ){
              //   $a++;
              //   $result[$a]['TRA'] =  $this->show($data) ;
              // }

              // $airlines = 'TRI';  
              // $data = $this->maskapai($from, $to, $go, $airlines);
              // if(!is_null($data['progress'][0]['data']) ){
              //   $a++;
              //   $result[$a]['TRI'] =  $this->show($data) ;
              // }

              // $airlines = 'AIR';  
              // $data = $this->maskapai($from, $to, $go, $airlines);
              // if(!is_null($data['progress'][0]['data']) ){
              //   $a++;
              //   $result[$a]['AIR'] =  $this->show($data) ;
              // }

              $result['from'] = $from;
              $result['to'] = $to;
              $result['tanggal_pergi'] = $go;
//          print_r($result)  or die();
            $data=[
               'title'=>"Search Murahtiketnya",
               'ctrlname' => $this->ctrlname,
               'headers' => "dashboard/header",
               'contents' => "search_view",
               'footers' => "dashboard/footer",
               'data' =>  $result,
               'maskapai' => $airlines
             ];

        $this->load->view('layouts/template-tiketnya',$data);
   }

   public function maskapai($from, $to, $go, $airlines){

          $this->load->library('curl');
            // URL API 
            $url  =  'http://193.168.195.29/demo/find.php' ; 

            // buat sumber daya cURL baru 
            $ch  =  curl_init ( $url ); 

            // atur permintaan untuk mengirim json melalui POST 
            $data  = array( 
                    "group" => null,
                  "from_code" => $from,
                  "to_code" => $to,
                  "is_return" => 0,
                  "go_date" => $go,
                  "back_date" => null,
                  "adult_count" => "1",
                  "child_count" => "0",
                  "infant_count" => "0",
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
            //var_dump($result) or die;
            // tutup cURL resource 
            curl_close ($ch);
            
            $result= json_decode($result, true);

            return $result;
   }

//     public function a(){
// for ($a = 0; $a < 10; $a++) {
//   $show[$a] = [];
// for($b = 0; $b < 10; $b++){
//   array_push( $show[$a] , $b.'a');
// }


// }
// print_r($show) ;
//     }

 
    public function show($data)
    { 

            //pergi
           for ($a = 0; $a< count($data['progress'][0]['data']['go']); $a++) {
              $show[$a] = [  ];
            }

           for($i=0;$i<count($data['progress'][0]['data']['go']);$i++){
//harga
                          //fares
                              $pro = isset($data['progress'][0]['data']['go'][$i]['fares']['pro']) 
                              ? $data['progress'][0]['data']['go'][$i]['fares']['pro']  : 1 ;
                              $eco = isset($data['progress'][0]['data']['go'][$i]['fares']['eco']) ?  
                              $data['progress'][0]['data']['go'][$i]['fares']['eco']
                              : 1;
                              $bus = isset($data['progress'][0]['data']['go'][$i]['fares']['bus']) ? 
                              $data['progress'][0]['data']['go'][$i]['fares']['bus']
                               : 1;


                                   if ($pro =! 1 ){
                                      $fares = $data['progress'][0]['data']['go'][$i]['fares']['pro'];
                                      $total = $fares['by_ages']['adult']['total'];
                                      $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                       $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
                                       $show[$i]['pro']['total']=$pro['id'] ;     
                                       $show[$i]['pro']['total']=number_format( $total, 2, ',', '.') ;
                                        $a =$this->perjalanan($data);
                                        for ($l= 0;$l < count($a) ; $l++ ) {
                                        
                                          $show[$i]['pro']['perjalanan'] =$a[$i];
                                        }
                                  }

                                  if($eco != 1){
                                      $fares = $data['progress'][0]['data']['go'][$i]['fares']['eco'];
                                      $total = $fares['by_ages']['adult']['total'];
                                      $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                       $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
                                       $show[$i]['eco']['id_harga']= $eco['id'] ; 
                                       $show[$i]['eco']['total'] =number_format( $total, 2, ',', '.')  ;
                                        $a =$this->perjalanan($data);
                                        $show[$i]['eco']['perjalanan'] = $a[$i];
                                  }

                                  if($bus != 1){
                                      $fares = $data['progress'][0]['data']['go'][$i]['fares']['bus'];
                                      $total = $fares['by_ages']['adult']['total'];
                                      $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                       $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
                                      $show[$i]['bus']['id_harga']=$bus['id'] ;     
                                      $show[$i]['bus']['total']= number_format( $total, 2, ',', '.') ;
                                      $a =$this->perjalanan($data);
                                      $show[$i]['bus']['perjalanan'] = $a[$i];
                                  }

 

          }

          // $show['go'] = array([$data['progress'][0]['airline_code'] => $show]);
          

          // for($a=0;$a<count($data['progress'][0]['data']['go']) ; $a++){
          //   unset($show[$a]);   

          // }



         
          // $show['back'] = [];
          // for($a=0;$a<count($data['progress'][0]['data']['back']) ; $a++){
          // array_push($show['back'],  $show[$a]);
          // }
          // for($a=0;$a<count($data['progress'][0]['data']['back']) ; $a++){
          
          //   unset($show[$a]);
          // }

          return $show ;
    }


    private function perjalanan($data){

        //flight
                           // total total_perjalanan
                    for($i=0;$i<count($data['progress'][0]['data']['go']);$i++){
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
                                         $show[$i]['total_perjalanan'] = $duration->format("%H:%I");
                                    }

                                }

                                  $a =[];
                          for($j=0;$j<count($data['progress'][0]['data']['go'][$i]['flights']);$j++){
//pesawat
                                $a[$j]['id_penerbangan'] = $data['progress'][0]['data']['go'][$i]['flights'][$j]['id'];
                                $a[$j]['kode_pesawat'] = $data['progress'][0]['data']['go'][$i]['flights'][$j]['flight_num'];                          
//total_perjalanan           
                               
                                  $a[$j]['berangkat']['jam'] = $data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_time'];
                                   $a[$j]['berangkat']['kota'] = $data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_city'];
                                   $a[$j]['berangkat']['kode'] =$data['progress'][0]['data']['go'][$i]['flights'][$j]['depart_port'];
                              
                                   $a[$j]['sampai']['jam']=$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_time'];
                                   $a[$j]['sampai']['kota']=$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_city'];
                                   $a[$j]['sampai']['kode']=$data['progress'][0]['data']['go'][$i]['flights'][$j]['arrive_port'];

                              
                              
                        }
                                  $show[$i]['detail'] = $a;
                      
                }
                return $show;
    }
}

/* End of file Controllername.php */
