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
      // $go = $this->input->post('go');
      $date = $this->input->post('back');

      $back = date("Y-m-d", strtotime($date));
      
      if($back == "1970-01-01")
        {$back = null;}
 
       $adult = $this->input->post('adult');
      $child = $this->input->post('child');
      $infant = $this->input->post('infant');        
      $airlines = $this->input->post('maskapai');

      $date = $this->input->post('go');;
      $go = date("Y-m-d", strtotime($date));
      
      $data = $this->maskapai($adult,$child,$infant,$from, $to, $go,$back , $airlines);
      //print_r($data ) or die;    
      if($data['status'] == 'failed' && !isset($data['progress'][0]['data']))
      {
        $result['status'] = 'Tanggal Yang anda masukkan harus setelah hari ini';
        ini_set('display_errors', 'Off');
        error_reporting(0);
define('MP_DB_DEBUG', false); 
      }
      if(!is_null($data['progress'][0]['data']) && isset($data['progress'][0]['data']) )
      {
        $result=  $this->show($data,$airlines) ;
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
              $result['bagasi']= $this->bagasi($airlines);
      // print_r($result)  or die();
            $data=[
               'title'=>"Search Murahtiketnya",
               'ctrlname' => $this->ctrlname,
               'headers' => "dashboard/header",
               'contents' => "search_view2",
               'footers' => "dashboard/footer",
               'data' =>  $result,
               'maskapai' => $airlines
             ];

        $this->load->view('layouts/template-tiketnya',$data);
   }
    public function filter()
    {
      $group =$this->input->post('group');
      $from =$this->input->post('from');
      $to =$this->input->post('to');
      $return = $this->input->post('return');
    
      $date = $this->input->post('go');;
      $go = date("Y-m-d", strtotime($date));

      $back = $this->input->post('back');
      $adult = $this->input->post('adult');
      $child = $this->input->post('child');
      $infant = $this->input->post('infant');        
      $airlines = $this->input->post('maskapai');

      $data = $this->maskapai($from, $to, $go, $airlines);

     if(!is_null($data['progress'][0]['data']) && isset($data['progress'][0]['data']) )
      {
        $result[0][$airlines] =  $this->show($data,$airlines) ;
      }

        $this->load->view('contents/filter', array('data' => $result));
    }

   public function diskonApi(){
        $this->load->library('curl'); 
        $api =  "http://murahtiketnya.com/affan/diskon.php";
        $data['diskon'] = json_decode($this->curl->simple_get($api));
     
   }

   public function maskapai($adult,$child,$infant ,$from, $to, $go, $back = null ,$airlines){
            if($back != null){
              $return = 1;
            }
            else {
              $return = 0;
            }
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
            //var_dump($result) or die;
            // tutup cURL resource 
            curl_close ($ch);
            
            $result= json_decode($result, true);
      //      var_dump($result) or die();
            
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

 
    public function show($data,$maskapai)
    { 
          $awal = $data;
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
                 
                                         $diskon = $this->diskon($total,$maskapai);
                                        
                                       $show[$i]['pro']['diskon']=$pro['id'] ;                                       
                                        
                                       $show[$i]['pro']['diskon']=$diskon ;

                 
                                       $show[$i]['pro']['total']=$pro['id'] ;     
                                       $show[$i]['pro']['total']=$total ;
                                        $a =$this->perjalanan($data,'go');
                                        for ($l= 0;$l < count($a) ; $l++ ) {
                                        
                                          $show[$i]['pro']['perjalanan'] =$a[$i];
                                        }
                                  }

                                  if($eco != 1){
                                      $fares = $data['progress'][0]['data']['go'][$i]['fares']['eco'];
                                      $total = $fares['by_ages']['adult']['total'];
                                      $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                       $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
                 
                                      $diskon = $this->diskon($total,$maskapai);
                                        
                                       $show[$i]['eco']['diskon']=$eco['id'] ;                                       
                                       $show[$i]['eco']['diskon']=$diskon;
                 
                                       $show[$i]['eco']['id_harga']= $eco['id'] ; 
                                      
                                       $show[$i]['eco']['total'] =$total  ;
                                        $a =$this->perjalanan($data,'go');
                                        $show[$i]['eco']['perjalanan'] = $a[$i];

                                  }

                                  if($bus != 1){
                                      $fares = $data['progress'][0]['data']['go'][$i]['fares']['bus'];
                                      $total = $fares['by_ages']['adult']['total'];
                                      $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                       $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
                 
                                          $diskon = $this->diskon($total,$maskapai);
                                        
                                       $show[$i]['bus']['diskon']=$bus['id'] ;                                       
                                       $show[$i]['bus']['diskon']=$diskon ;
                 
                                      $show[$i]['bus']['id_harga']=$bus['id'] ;     
                                      $show[$i]['bus']['total']= $total ;
                                      $a =$this->perjalanan($data,'go');
                                      $show[$i]['bus']['perjalanan'] = $a[$i];
                                  }

 

          }
          

           $show['go'] = array([$data['progress'][0]['airline_code'] => $show]);
          

           for($a=0;$a<count($data['progress'][0]['data']['go']) ; $a++){
             unset($show[$a]);   

           }

           //back
          if($data['progress'][0]['data']['back'] != null){
                       for ($a = 0; $a< count($awal['progress'][0]['data']['back']); $a++) {
            $back[$a] = [  ];
          }

         for($i=0;$i<count($awal['progress'][0]['data']['back']);$i++){
          //harga
                        //fares
                            $pro = isset($awal['progress'][0]['data']['back'][$i]['fares']['pro']) 
                            ? $awal['progress'][0]['data']['back'][$i]['fares']['pro']  : 1 ;
                            $eco = isset($awal['progress'][0]['data']['back'][$i]['fares']['eco']) ?  
                            $awal['progress'][0]['data']['back'][$i]['fares']['eco']
                            : 1;
                            $bus = isset($awal['progress'][0]['data']['back'][$i]['fares']['bus']) ? 
                            $awal['progress'][0]['data']['back'][$i]['fares']['bus']
                             : 1;


                                 if ($pro =! 1 ){
                                    $fares = $awal['progress'][0]['data']['back'][$i]['fares']['pro'];
                                    $total = $fares['by_ages']['adult']['total'];
                                    $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                     $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
               
                                       $diskon = $this->diskon($total,$maskapai);
                                      
                                     $back[$i]['pro']['diskon']=$pro['id'] ;                                       
                                      
                                     $back[$i]['pro']['diskon']=$diskon ;

               
                                     $back[$i]['pro']['total']=$pro['id'] ;     
                                     $back[$i]['pro']['total']=$total ;
                                      $a =$this->perjalanan($awal,'back');
                                      for ($l= 0;$l < count($a) ; $l++ ) {
                                      
                                        $back[$i]['pro']['perjalanan'] =$a[$i];
                                      }
                                }

                                if($eco != 1){
                                    $fares = $awal['progress'][0]['data']['back'][$i]['fares']['eco'];
                                    $total = $fares['by_ages']['adult']['total'];
                                    $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                     $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
               
                                    $diskon = $this->diskon($total,$maskapai);
                                      
                                     $back[$i]['eco']['diskon']=$eco['id'] ;                                       
                                     $back[$i]['eco']['diskon']=$diskon;
               
                                     $back[$i]['eco']['id_harga']= $eco['id'] ; 
                                    
                                     $back[$i]['eco']['total'] =$total  ;
                                      $a =$this->perjalanan($awal,'back');
                                      $back[$i]['eco']['perjalanan'] = $a[$i];

                                }

                                if($bus != 1){
                                    $fares = $awal['progress'][0]['data']['back'][$i]['fares']['bus'];
                                    $total = $fares['by_ages']['adult']['total'];
                                    $total += (!empty($fares['by_ages']['child']['total']) ?  $fares['by_ages']['child']['total'] :  0);
                                     $total += (!empty($fares['by_ages']['infant']['total']) ?  $fares['by_ages']['infant']['total'] :  0);
               
                                        $diskon = $this->diskon($total,$maskapai);
                                      
                                     $back[$i]['bus']['diskon']=$bus['id'] ;                                       
                                     $back[$i]['bus']['diskon']=$diskon ;
               
                                    $back[$i]['bus']['id_harga']=$bus['id'] ;     
                                    $back[$i]['bus']['total']= $total ;
                                    $a =$this->perjalanan($awal,'back');
                                    $back[$i]['bus']['perjalanan'] = $a[$i];
                                }



        }

        
         
           $show['back'] = $back;

          }          
          //print_r($show) or die;
          return $show ;

    }


    private function perjalanan($data,$tipe){

        //flight
                           // total total_perjalanan
                    for($i=0;$i<count($data['progress'][0]['data'][$tipe]);$i++){
                            for($j=0;$j<count($data['progress'][0]['data'][$tipe][$i]['flights']);$j++){
                                    if($j ==0){
                 
                                         $berangkat = new DateTime($data['progress'][0]['data']
                                            [$tipe][$i]['flights'][0]['depart_datetime'], 
                                            new DateTimeZone($data['progress'][0]['data'][$tipe][$i]['flights'][0]['depart_timezone'])); 

                                    }
                                    if($j == count($data['progress'][0]['data'][$tipe][$i]['flights']) - 1){
                                        $sampai = new DateTime(
                                             $data['progress'][0]['data']
                                            [$tipe][$i]
                                            ['flights'][count($data['progress'][0]['data'][$tipe][$i]['flights']) - 1]
                                             ['arrive_datetime'], new DateTimeZone(
                                             $data['progress'][0]['data']
                                            [$tipe][$i]
                                             ['flights'][count($data['progress'][0]['data'][$tipe][$i]['flights'])-1]
                                            ['arrive_timezone']));
                                        
                                         // echo $berangkat->format('H:i:s') . "<br>";
                                         // echo $sampai->format('H:i:s') . "<br>";
                                         $duration = $berangkat->diff($sampai); //$duration is a DateInterval object
                                         $show[$i]['total_perjalanan'] = $duration->format("%H:%I");
                                    }

                                }

                                  $a =[];
                          for($j=0;$j<count($data['progress'][0]['data'][$tipe][$i]['flights']);$j++){
//pesawat
                                $a[$j]['id_penerbangan'] = $data['progress'][0]['data'][$tipe][$i]['flights'][$j]['id'];
                                $a[$j]['kode_pesawat'] = $data['progress'][0]['data'][$tipe][$i]['flights'][$j]['flight_num'];                          
//total_perjalanan           
                               
                                  $a[$j]['berangkat']['jam'] = $data['progress'][0]['data'][$tipe][$i]['flights'][$j]['depart_time'];
                                   $a[$j]['berangkat']['kota'] = $data['progress'][0]['data'][$tipe][$i]['flights'][$j]['depart_city'];
                                   $a[$j]['berangkat']['kode'] =$data['progress'][0]['data'][$tipe][$i]['flights'][$j]['depart_port'];
                              
                                   $a[$j]['sampai']['jam']=$data['progress'][0]['data'][$tipe][$i]['flights'][$j]['arrive_time'];
                                   $a[$j]['sampai']['kota']=$data['progress'][0]['data'][$tipe][$i]['flights'][$j]['arrive_city'];
                                   $a[$j]['sampai']['kode']=$data['progress'][0]['data'][$tipe][$i]['flights'][$j]['arrive_port'];

                              
                              
                        }
                                  $show[$i]['detail'] = $a;
                      
                }
                return $show;
    }

    public function diskon($uang,$maskapai)
    {
        if ($maskapai == 'LIO' )
         $hasil = $uang - ($uang * 0.011) ; 
        if($maskapai == 'GAR')
        $hasil = $uang - ($uang * 0.01) ;
        if($maskapai == 'CIT')
        $hasil = $uang - ($uang * 0.025) ;
        if($maskapai == 'SRI')
        $hasil = $uang - ($uang * 0.08) ;
        if($maskapai == 'TRI')
        $hasil = $uang - ($uang * 0.015) ;
         if($maskapai == 'AIR'){
        $hasil = $uang - ($uang * 0.002) ;}
       
        if($maskapai == 'TRA'){
        $hasil = $uang - ($uang * 0.011) ;}
       return $hasil ;
    }
    public function bagasi($maskapai){

        if($maskapai == 'GAR'){

        $hasil = '20' ;
        }
        else if($maskapai == 'CIT'){
        $hasil = '20';
        }
        else if($maskapai == 'SRI'){
        $hasil = '15';
        }
        else if($maskapai == 'TRI'){
        $hasil = '20';
        }
         else if($maskapai == 'AIR'){
        $hasil = '15';
        }

        else if($maskapai == 'TRA'){
        $hasil = '10';
        }

        else {
          $hasil = null;
        }
        return $hasil;
      }
}

/* End of file Controllername.php */
