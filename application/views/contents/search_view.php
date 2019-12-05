<!--Search-->
<section class="section is-medium is-skewed-sm">

  <div class="container is-reverse-skewed-sm">
    <!--Title-->
    <div class="section-title-wrapper has-text-centered">
      <div class="clean-bg-symbol"><i class="fas fa-search"></i></div>
      <div>
        <h2 class="clean-section-title">Tiket Pesawat</h2>
        <h3 class="subtitle is-5 pt-10">
            <i>Hasil pencarian tiket anda.</i>
        </h3>
      </div>
    </div>

    <div class="content-wrapper">
        
        <div class="columns">
          
          <div class="column is-6">
          <h3 class="title text-bold is-5"><?= '( '.$data['from'].' )' ; ?> →  <?= '( '.$data['to'].' )';  ?> </h3>
            <h3 class="subtitle is-6 pt-10">
              <?php
                $originalDate = $data['tanggal_pergi'];
                $newDate = date("l, d F Y", strtotime($originalDate));
              ?>
              <p class="text-bold" style="color: #757575;"><?= $newDate  ?></p>
              <br/>
              <p class="text-bold" style="font-size: 13px; color: #757575;">1 Dewasa | Ekonomi </p>
            </h3>
          </div>
          <div class="column is-6 mt-40">
              <a id="button_search" class="button button-cta primary-btn is-pulled-right">Ganti Pencarian</a>
          </div>
        </div>

        <div class="columns is-vcentered">
          <div class="column is-10 is-offset-1">
            <div class="flex-card light-bordered light-raised" id="form_search" style="display: none">
                <div class="card-body">
                  <h2 class="title is-4 text-bold mb-20">Cari Tiket Pesawat Terbang</h2>
                  <form action="<?=base_url('Search') ?>"  method="post">
                      <div class="columns mt-20">
                        <div class="column">
                            <div class="control">
                              <div class="select is-fullwidth">
                                <select id="asal" name="from" class="chosen-select" data-placeholder="Project category">
                                  <option label="App category"></option>
                                  <option>Document management</option>
                                  <option>HR management</option>
                                  <option>ERP</option>
                                  <option>Invoicing</option>
                                  <option>Email marketing</option>
                                  <option>CRM</option>
                                  <option disabled>Helpdesk</option>
                                  <option>Corporate chat</option>
                                </select>
                              </div>
                              <!-- <label>Asal</label>
                              <input class="input is-secondary-focus is-medium mt-5" id="asal" name="from" type="text" value="CGK"> -->
                            </div>
                            <div class="control">
                              <label>Tanggal Berangkat</label>
                              <input data-toggle="datepicker" value="2019-12-29" dateFormat="Y-M-D" name="go"  class="input is-secondary-focus is-medium mt-5">
                            </div>
                        </div>
                        <div class="column has-text-centered">
                            <br>
                            <a type="button" class="button button-cta primary-btn rounded"  id="go" onclick="swapValues()"><i class="fas fa-exchange-alt"></i>&nbsp;&nbsp;Swap Jadwal</a>
                            <div class="control ml-80">
                              <label class="checkbox-wrap is-medium" style="line-height: 6.8;">
                              <input id="myCheck" type="checkbox" class="d-checkbox" onclick="myKereta()">
                              <span></span>
                              Pulang-Pergi
                              </label> 
                            </div>
                        </div>
                        <div class="column">
                            <div class="control">
                              <label>Berangkat</label>
                              <input class="input is-secondary-focus is-medium mt-5" id="berangkat" name="to" type="text" value="SUB">
                            </div>
                            <div class="control" id="show">
                              <label>Pulang Pergi</label>
                              <input data-toggle="datepicker" id="myInput" class="input is-secondary-focus is-medium mt-5" disabled>
                            </div>
                        </div>
                      </div>
                      <div class="columns">
                        <div class="column">
                            <div class="control">
                              <label>Maskapai</label>
                              <div class="select is-fullwidth">
                                  <select class="is-hovered" name="maskapai">
                                    <option value="CIT">Citilink</option>
                                    <option value="GAR">Garuda</option>
                                    <option value="LIO">Lion</option>
                                    <option value="SRI">Sriwijaya</option>
                                    <option value="TRA">TransNusa</option>
                                    <option value="TRI">Trigana</option>
                                    <option value="AIR">Air Asia</option>
                                  </select>
                              </div>
                            </div>
                        </div>
                      </div>
                      <!-- type of passengers -->
                      <div class="columns">
                        <div class="column">
                            <div class="control">
                              <label>Dewasa</label>
                              <div class="select is-fullwidth">
                                  <select class="is-hovered" name="adult">
                                    <option  value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                  </select>
                              </div>
                              <small style="color: #bdbdbd;">12 tahun ke atas*</small>
                            </div>
                        </div>
                        <div class="column">
                            <div class="control">
                              <label>Anak</label>
                              <div class="select is-fullwidth">
                                  <select class="is-hovered" name='child'>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                  </select>
                              </div>
                              <small style="color: #bdbdbd;">2 - 11 tahun *</small>
                            </div>
                        </div>
                        <div class="column">
                            <div class="control">
                              <label>Bayi</label>
                              <div class="select is-fullwidth">
                                  <select class="is-hovered" name='infant'>
                                    <option value ="0">0</option>
                                    <option value ="1">1</option>
                                  </select>
                              </div>
                              <small style="color: #bdbdbd;">Bawah 2 tahun*</small>
                            </div>
                        </div>
                      </div>

                      <div class="mt-20">  
                        <button class="button btn-align no-lh raised primary-btn">Search</button>
                        <button class="button no-lh">Cancel</button>
                      </div>
                  </form>
                </div>
            </div>
          </div>
        </div>

        <!-- filter -->
        <hr>
          <div class="columns is-centered">
            <div class="column is-2">
              <div class="button btn-align primary-btn btn-outlined" style="border: 0px;" onclick="filterSelection('all')">Show all</div>
            </div>      
            <!-- <div class="column is-2">
              <div class="button btn-align has-icon-right primary-btn btn-outlined is-drop" style="border: 0px;">Maskapai <i class="sl sl-icon-arrow-down is-icon-xs"></i>
                  <div class="dropContain">
                    <div class="dropOut">
                      <ul>
                        <li><a href="#" style="color: #000000">Citilink</a> </li>
                        <li><a href="#" style="color: #000000">Garuda</a></li>
                        <li><a href="#" style="color: #000000">Lion</a></li>
                        <li><a href="#" style="color: #000000">Sriwijaya</a></li>
                        <li><a href="#" style="color: #000000">Transnusa</a></li>
                        <li><a href="#" style="color: #000000">Air Asia</a></li>
                        <li><a href="#" style="color: #000000">Trigana</a></li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div> -->
            <div class="column is-2">
              <div class="button btn-align has-icon-right primary-btn btn-outlined is-drop" style="border: 0px;">Transit <i class="sl sl-icon-arrow-down is-icon-xs"></i>
                  <div class="dropContain">
                    <div class="dropOut">
                      <ul>
                        <li>
                          <label class="checkbox-wrap is-medium" for="checkAll">
                            <input id="checkAll" type="radio" name="transit-status" class="d-checkbox"  onclick="filterSelection('all')" checked>
                            <span></span>
                            Show All
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-medium" for="checkLangsung">
                            <input id="checkLangsung" type="radio" name="transit-status" class="d-checkbox"  onclick="filterSelection('langsung')">
                            <span></span>
                            Langsung
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-medium" for="checkTransit">
                            <input id="checkTransit" type="radio" name="transit-status" class="d-checkbox"  onclick="filterSelection('transit')">
                            <span></span>
                            Transit
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>

            <div class="column is-2">
            <div class="button btn-align has-icon-right primary-btn btn-outlined is-drop" style="border: 0px;">Harga<i class="sl sl-icon-arrow-down is-icon-xs"></i>
                  <div class="dropContain">
                    <div class="dropOut">
                      <ul>
                        <li><input id="sliderWithValue" class="slider has-output is-fullwidth" min="4.121.163" max="20.091.060" value="100" step="1" type="range" onchange="myPesawat()"></li>
                        <li><output class="is-centered" for="sliderWithValue">4.121.163</output></li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>

            <div class="column is-2">
              <div class="button btn-align has-icon-right primary-btn btn-outlined is-drop" style="border: 0px;">Waktu <i class="sl sl-icon-arrow-down is-icon-xs"></i>
                  <div class="dropContain">
                    <div class="dropOut" style="width: 450px;">
                      <ul class="column is-6">
                        <li class="is-disabled" style="color: #000000;">Waktu Takeoff</li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input value="takeOFf00.00-06.00" type="checkbox" class="b-checkbox cbTakeoff" onchange="myPesawat()">
                              <span style="color: #000000;"></span>
                              &nbsp;00.00 - 06.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input value="takeOFf06.00-12.00" type="checkbox" class="b-checkbox cbTakeoff" onchange="myPesawat()">
                              <span style="color: #000000"></span>
                              &nbsp;06.00 - 12.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input value="takeOFf12.00-18.00" type="checkbox" class="b-checkbox cbTakeoff" onchange="myPesawat()">
                              <span style="color: #000000"></span>
                              &nbsp;12.00 - 18.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                          <input value="takeOFf18.00-00.00" type="checkbox" class="b-checkbox cbTakeoff" onchange="myPesawat()">
                              <span style="color: #000000"></span>
                              &nbsp;18.00 - 00.00
                          </label>
                        </li>
                        </ul>
                        <ul class="column is-6">
                        <li class="is-disabled" style="color: #000000;">Waktu Landing</li>
                        <li>
                          <label class="checkbox-wrap is-small">
                          <input value="landing00.00-06.00" type="checkbox" class="b-checkbox cbLanding" onchange="myPesawat()">
                              <span style="color: #000000"></span>
                              &nbsp;00.00 - 06.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                          <input value="landing06.00-12.00" type="checkbox" class="b-checkbox cbLanding" onchange="myPesawat()">
                              <span style="color: #000000"></span>
                              &nbsp;06.00 - 12.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                          <input value="landing12.00-18.00" type="checkbox" class="b-checkbox cbLanding" onchange="myPesawat()">
                              <span style="color: #000000"></span>
                              &nbsp;12.00 - 18.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                          <input value="landing18.00-00.00" type="checkbox" class="b-checkbox cbLanding" onchange="myPesawat()">
                              <span style="color: #000000"></span>
                              &nbsp;18.00 - 00.00
                          </label>
                        </li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>

            <div class="column is-2">
              <div class="button btn-align has-icon-right primary-btn btn-outlined is-drop" style="border: 0px;">Sort <i class="sl sl-icon-arrow-down is-icon-xs"></i>
                  <div class="dropContain">
                    <div class="dropOut">
                      <ul>
                        <li><a href="#" style="color: #000000">Harga Terendah</a> </li>
                        <li><a href="#" style="color: #000000">Waktu Berangkat Awal</a></li>
                        <li><a href="#" style="color: #000000">Waktu Berangkat Akhir</a></li>
                        <li><a href="#" style="color: #000000">Waktu Tiba Awal</a></li>
                        <li><a href="#" style="color: #000000">Waktu Tiba Akhir</a></li>
                        <li><a href="#" style="color: #000000">Durasi Tercepat</a></li>
                      </ul>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        <hr class="mb-20">      
        
        <!-- ul start -->
        <ul>
        <!-- Card -->
        <?php 
       // var_dump($data);
          if(isset($data['go'][0])){        
        for($i = 0 ;$i < count($data['go'][0][$maskapai]) ; $i++){ ?>
        
          <?php if (isset($data[0][$maskapai][$i]['pro']) ){ ?>
        <div class="single-toggle-wrapper">
          <div class="flex-card media-card light-bordered hover-inset pertama toggle-wrap">
            <div class="columns is-desktop is-centered is-vcentered trigger">
                <div class="column is-2 has-text-centered ">
                    <div class="mcard-content">
                        <figure class="image is-48x48 container">

                          <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                          <img src="<?php echo base_url($key->logo_maskapai) ?>">
                            <?php } ?>
                        </figure>
                        <h3 class="mcard-title is-centered"><a href="#"> <?= $maskapai  ?> </a></h3>
                    </div>
                </div>
                <div class="column is-2 has-text-centered">
                  <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['pro']['perjalanan']) ; $j++) {
                      if($j == 0){ 
                    ?>                    
                    <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['berangkat']['jam']    ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data['from'].') '; ?></p>
                    </div> 
                    <?php }  } ?>
                </div>

                <div class="column is-2 has-text-centered">
                    <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['pro']['perjalanan']['detail']) ; $j++) {
                                          ?>                    
                      <?php 
                        if($j == count($data[0][$maskapai][$i]['pro']['perjalanan']['detail'])-1){
                      ?>  
                    <div class="mcard-content">
                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data['to'].') '; ?></p>
                    </div>
                    <?php } } ?>
                </div>

                <div class="column is-2 has-text-centered">
                    <div class="mcard-content">
                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['total_perjalanan']  ?></a></h3>
                        <p class="mcard-description is-hidden-touch">langsung</p>
                    </div>
                </div>

                <div class="column is-2 has-text-centered">
                    <div class="mcard-content">
                        <h2>Promosi</h2>
                        <?php if(!isset($data[0][$maskapai][$i]['pro']['diskon'])){ ?>
                        <h4 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><?= $data[0][$maskapai][$i]['pro']['total'] ?></a></h4>
                        <?php } if(isset($data[0][$maskapai][$i]['pro']['diskon'])){ 
                            $diskon = $data[0][$maskapai][$i]['pro']['diskon'];
                            $total = $data[0][$maskapai][$i]['pro']['total'];
                            $total = number_format( $total, 2, ',', '.');
                            $diskon = number_format( $diskon, 2, ',', '.');

                          ?>
                        <h4 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><strike><?=  $total ?></strike></a></h4>
                        <h3 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><?= $diskon ?></a></h3>
                        <?php } ?>

                    </div>
                </div>
            
                  
                <div class="column is-2 has-text-centered">
                  <a href="#"><i class="im im-icon-Add"></i></a>
                </div>
              
        
            </div>
            <!-- Detail -->
            <div class="columns is-desktop is-centered is-vcentered toggle-container is-multiline" >
                <div class="column is-11 ">
                    <hr>
                </div>
                <div class="column is-2 has-text-centered ">
                    <div class="mcard-content">
                        <figure class="image is-48x48 container">

                          <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                          <img src="<?php echo base_url($key->logo_maskapai) ?>">
                            <?php } ?>
                        </figure>
                          
                        <h5 class="mcard-title is-centered is-5"><?=  $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][0]['kode_pesawat'] ?></h5>
                  
                        <?php if( count($data[0][$maskapai][$i]['pro']['perjalanan']['detail']) == 2){ ?>
                        <figure class="image is-48x48 container">
                          <br>
                            <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                          <img src="<?php echo base_url($key->logo_maskapai) ?>">
                            <?php } ?>
                        </figure>
                        
                        <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][1]['kode_pesawat'] ?></h5>
                        <?php } ?>
                    </div>
                </div>
                <div class="column is-3 is-multiline">
                  <div class="columns">
                    <div class="column is-4"> 
                      <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['pro']['perjalanan']['detail']) ; $j++) { ?>                    
                      <div class="mcard-content">


                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['berangkat']['jam'];  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['berangkat']['kode'].') '; ?></p>

                        <br>
                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['sampai']['kode'].') '; ?></p>
                    </div>
                    <?php } ?>
                        </div>
                        <div class="column is-8 ">                            
                            <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['pro']['perjalanan']['detail']) ; $j++) { ?>                    
                      <div class="mcard-content">
                        <?php foreach ($this->db->select('nama_bandara')->from('bandara')->where('kode_bandara',
                      $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['berangkat']['kode']
                    )->get()->result() as $key ) {?>
                          
                            <p class="mcard-description"><?= $key->nama_bandara  ?></p>
                            <?php } ?>
                          <br>

                          <?php foreach ($this->db->select('nama_bandara')->from('bandara')->where('kode_bandara',
                      $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['sampai']['kode']
                    )->get()->result() as $key ) {?>
                          
                            <p class="mcard-description"><?= $key->nama_bandara  ?></p>
                            <?php } ?>

                    </div>
                    <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="column is-5 is-pulled-right">
                    <div class="mcard-content">
                        <h3 class="mcard-title"><a href="#">Detail Penerbangan</a></h3>
                        <p class="mcard-description is-hidden-touch">Pesawat Boeing <span class="has-text-black">737<span></p>
                        <p class="mcard-description is-hidden-touch ">Tata Kursi ---</p>
                        <p class="mcard-description is-hidden-touch">Jarak Antar --- inci</p>
                        <p class="mcard-description is-hidden-touch mb-10">Bagasi Kabin <?php if( isset($data['bagasi'])) {echo $data['bagasi'];} ?> kg</p>
                        <br>
                        <a href="<?=base_url('BookingPesawat')?>" class="button button-cta info-btn">Pilih</a>
                    </div>
                </div>
            </div>
            <!-- End of Detail -->
          </div>
        </div>
          <?php } ?>
                                  
      <!-- End of Card -->

      <li>
        <?php
          if (isset($data[0][$maskapai][$i]['eco']) ){ ?>
          
          <div class="single-toggle-wrapper 
          <?php if(count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) == 1 )
           {  echo "langsung"; $a = 'Langsung ';}
           if(count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) == 2 )
           {  echo "transit"; $a ='transit';}
            ?> ">
          <div class="flex-card media-card light-bordered hover-inset pertama toggle-wrap">
            <div class="columns is-desktop is-centered is-vcentered trigger">
                <div class="column is-2 has-text-centered ">
                    <div class="mcard-content">
                        <figure class="image is-48x48 container">
                            <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                            <img src="<?php echo base_url($key->logo_maskapai) ?>">
                              <?php } ?>
                        </figure>
                        <h3 class="mcard-title is-centered"><a href="#"> <?= $maskapai  ?> </a></h3>
                    </div>
                </div>
                <div class="column is-2 has-text-centered">
                    <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['eco']['perjalanan']) ; $j++) {
                      if($j == 0){ 
                    ?>                    
                    <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['jam']    ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data['from'].') '; ?></p>
                    </div> 
                    <?php }  } ?>
                </div>

                <div class="column is-2 has-text-centered">
                    <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) ; $j++) {
                                          ?>                    
                      <?php 
                        if($j == count($data[0][$maskapai][$i]['eco']['perjalanan']['detail'])-1){
                      ?>  
                    <div class="mcard-content" >
                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data['to'].') '; ?></p>
                    </div>
                    <?php } } ?>
                </div>

                <div class="column is-2 has-text-centered">
                    <div class="mcard-content">
                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['total_perjalanan']  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $a ?></p>
                    </div>
                </div>
                  
              <div class="column is-2 has-text-centered">
                  <div class="mcard-content">
                      <h2>Ekonomi</h2>
                      <?php if(!isset($data[0][$maskapai][$i]['eco']['diskon'])){ ?>
                        <h4 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><?= $data[0][$maskapai][$i]['eco']['total'] ?></a></h4>
                        <?php } if(isset($data[0][$maskapai][$i]['eco']['diskon'])){ 
                            $diskon = $data[0][$maskapai][$i]['eco']['diskon'];
                            $total = $data[0][$maskapai][$i]['eco']['total'];
                            $total = number_format( $total, 2, ',', '.');
                            $diskon = number_format( $diskon, 2, ',', '.');


                          ?>
                        <h4 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><strike><?= $total ?></strike></a></h4>
                        <h3 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><?=  $diskon ?></a></h3>
                        <?php } ?>

                  </div>
              </div>

              <div class="column is-2 has-text-centered">
                  <a href="#"><i class="im im-icon-Add"></i></a>
              </div>  
          
            </div>
            <!-- Detail -->
            <div class="columns is-desktop is-centered is-vcentered toggle-container is-multiline" >
                <div class="column is-11 ">
                    <hr>
                </div>  
                <div class="column is-2 has-text-centered ">
                    <div class="mcard-content">
                        <figure class="image is-48x48 container">

                            <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                            <img src="<?php echo base_url($key->logo_maskapai) ?>">
                              <?php } ?>
                        </figure>
                              
                    
                          
                        <h5 class="mcard-title is-centered is-5"><?=  $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][0]['kode_pesawat'] ?></h5>
                  
                        <?php if( count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) == 2){ ?>
                        <figure class="image is-48x48 container">
                          <br>
                            <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                            <img src="<?php echo base_url($key->logo_maskapai) ?>">

                              <?php } ?>
                        </figure>
                        
                        <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][1]['kode_pesawat'] ?></h5>
                        <?php } ?>
                    </div>
                </div>
                <div class="column is-3 is-multiline">
                  <div class="columns">
                    <div class="column is-4"> 
                      <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) ; $j++) { ?>                    
                      <div class="mcard-content">


                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['jam'];  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['kode'].') '; ?></p>

                        <br>
                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['kode'].') '; ?></p>
                    </div>
                    <?php } ?>
                        </div>
                        <div class="column is-8 ">                            
                            <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) ; $j++) { ?>                    
                      <div class="mcard-content">
                          <?php foreach ($this->db->select('nama_bandara')->from('bandara')->where('kode_bandara',
                        $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['kode']
                      )->get()->result() as $key ) {?>
                            
                            <p class="mcard-description"><?= $key->nama_bandara  ?></p>
                              <?php } ?>
                          <br>

                          <?php foreach ($this->db->select('nama_bandara')->from('bandara')->where('kode_bandara',
                        $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['kode']
                      )->get()->result() as $key ) {?>
                            
                            <p class="mcard-description"><?= $key->nama_bandara  ?></p>
                              <?php } ?>

                    </div>
                    <?php } ?>
                            
                        </div>
                    </div>
                </div>
                <div class="column is-5 is-pulled-right">
                    <div class="mcard-content">
                        <h3 class="mcard-title"><a href="#">Detail Penerbangan</a></h3>
                        <p class="mcard-description is-hidden-touch">Pesawat Boeing <span class="has-text-black">737<span></p>
                        <p class="mcard-description is-hidden-touch ">Tata Kursi ---</p>
                        <p class="mcard-description is-hidden-touch">Jarak Antar Kursi --- inci</p>
                        <p class="mcard-description is-hidden-touch mb-10">Bagasi Kabin 
                              <?php if( isset($data['bagasi'])) {echo $data['bagasi'];} ?>
                          kg</p>
                        <br>
                        <a href="<?=base_url('BookingPesawat')?>" class="button button-cta success-btn">Pilih</a>
                    </div>
                </div>
            </div>
            <!-- End of Detail -->
          </div>
        </div>
        <?php } ?>
      </li>

      <!-- End of Card -->
      <li>
        <?php if (isset($data[0][$maskapai][$i]['bus']) ){ ?>
      <div class="single-toggle-wrapper
      <?php if(count($data[0][$maskapai][$i]['bus']['perjalanan']['detail']) == 1 )
           {  echo "langsung"; $a = 'Langsung ';}
           if(count($data[0][$maskapai][$i]['bus']['perjalanan']['detail']) == 2 )
           {  echo "transit"; $a ='transit';}
            ?>
      ">
        <div class="flex-card media-card light-bordered hover-inset pertama toggle-wrap">
          <div class="columns is-desktop is-centered is-vcentered trigger">
              <div class="column is-2 has-text-centered ">
                  <div class="mcard-content">
                      <figure class="image is-48x48 container">

                          <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                          <img src="<?php echo base_url($key->logo_maskapai) ?>">
                            <?php } ?>
                      </figure>
                      <h3 class="mcard-title is-centered"><a href="#"> <?= $maskapai  ?> </a></h3>
                  </div>
              </div>
              <div class="column is-2 has-text-centered">
                  <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['bus']['perjalanan']) ; $j++) {
                    if($j == 0){ 
                  ?>                    
                  <div class="mcard-content">
                    <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['berangkat']['jam']    ?></a></h3>
                      <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data['from'].') '; ?></p>
                  </div> 
                  <?php }  } ?>
              </div>

              <div class="column is-2 has-text-centered">
                  <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['bus']['perjalanan']['detail']) ; $j++) {
                                        ?>                    
                    <?php 
                      
                      if($j == count($data[0][$maskapai][$i]['bus']['perjalanan']['detail'])-1){
                    ?>  
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                      <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data['to'].') '; ?></p>
                  </div>
                  <?php } } ?>
              </div>

              <div class="column is-2 has-text-centered">
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['total_perjalanan']  ?></a></h3>
                      <p class="mcard-description is-hidden-touch"> <?= $a ?> </p>
                  </div>
              </div>

                  
              <div class="column is-2 has-text-centered">
                  <div class="mcard-content">
                      <h2>Bisnis</h2>
                    <?php if(!isset($data[0][$maskapai][$i]['bus']['diskon'])){ ?>
                        <h4 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><?= $data[0][$maskapai][$i]['bus']['total'] ?></a></h4>
                        <?php } if(isset($data[0][$maskapai][$i]['bus']['diskon'])){ 
                            $diskon = $data[0][$maskapai][$i]['bus']['diskon'];
                            $total = $data[0][$maskapai][$i]['bus']['total'];
                            $total = number_format( $total, 2, ',', '.');
                            $diskon = number_format( $diskon, 2, ',', '.');


                          ?>
                        <h4 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><strike><?=  $total ?></strike></a></h4>
                        <h3 class="mcard-title"><a href="#" style="color: blue; font-size: 16px;"><?= $diskon ?></a></h3>
                        <?php } ?>

                  </div>
              </div>
          
            <div class="column is-2 has-text-centered">
                  <a href="#"><i class="im im-icon-Add"></i></a>
            </div>    
            
            
        
          </div>
          <!-- Detail -->
          <div class="columns is-desktop is-centered is-vcentered toggle-container is-multiline" >
              <div class="column is-11 ">
                  <hr>
              </div>
              <div class="column is-2 has-text-centered ">
                  <div class="mcard-content">
                      <figure class="image is-48x48 container">

                          <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                          <img src="<?php echo base_url($key->logo_maskapai) ?>">
                            <?php } ?>
                      </figure>
                            
                  
                        
                      <h5 class="mcard-title is-centered is-5"><?=  $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][0]['kode_pesawat'] ?></h5>
                
                      <?php if( count($data[0][$maskapai][$i]['bus']['perjalanan']['detail']) == 2){ ?>
                      <figure class="image is-48x48 container">
                        <br>
                          <?php foreach ($this->db->select('logo_maskapai')->from('maskapai')->where('kode_maskapai',$maskapai)->get()->result() as $key ) {?>
                          <img src="<?php echo base_url($key->logo_maskapai) ?>">
                            <?php } ?>
                      </figure>
                      
                      <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][1]['kode_pesawat'] ?></h5>
                      <?php } ?>
                  </div>
              </div>
              <div class="column is-3 is-multiline">
                <div class="columns">
                  <div class="column is-4"> 
                    <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['bus']['perjalanan']['detail']) ; $j++) { ?>                    
                    <div class="mcard-content">


                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['berangkat']['jam'];  ?></a></h3>
                      <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['berangkat']['kode'].') '; ?></p>

                      <br>
                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                      <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['sampai']['kode'].') '; ?></p>
                  </div>
                  <?php } ?>
                      </div>
                      <div class="column is-8 ">                            
                          <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['bus']['perjalanan']['detail']) ; $j++) { ?>                    
                    <div class="mcard-content">
                        <?php foreach ($this->db->select('nama_bandara')->from('bandara')->where('kode_bandara',
                      $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['berangkat']['kode']
                    )->get()->result() as $key ) {?>
                          
                          <p class="mcard-description"><?= $key->nama_bandara  ?></p>
                            <?php } ?>
                        <br>

                        <?php foreach ($this->db->select('nama_bandara')->from('bandara')->where('kode_bandara',
                      $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['sampai']['kode']
                    )->get()->result() as $key ) {?>
                          
                          <p class="mcard-description"><?= $key->nama_bandara  ?></p>
                            <?php } ?>

                  </div>
                  <?php } ?>
                          
                      </div>
                  </div>
              </div>
              <div class="column is-5 is-pulled-right">
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#">Detail Penerbangan</a></h3>
                      <p class="mcard-description is-hidden-touch">Pesawat Boeing <span class="has-text-black">737<span></p>
                      <p class="mcard-description is-hidden-touch ">Tata Kursi ---  </p>
                      <p class="mcard-description is-hidden-touch">Jarak Antar Kursi --- inci</p>
                      <p class="mcard-description is-hidden-touch mb-10">Bagasi Kabin 
                            <?php if( isset($data['bagasi'])) {echo $data['bagasi'];} ?>
                        kg</p>
                      <br>
                      <a href="<?=base_url('BookingPesawat')?>" class="button button-cta danger-btn">Pilih</a>
                  </div>
              </div>
          </div>
          <!-- End of Detail -->
        </div>
      </div>
        <?php } ?>
      <?php } ?>
      </li>
      <ul> <!-- end ul -->
      <!-- End of Card -->
      <?php } 
      else if(isset($data['status'])){
        echo $data['status'];
      }
      else {?>
        <h2> Tiket habis</h2>
      <?php } ?>
      
      </div>
    </div>

    </div>
  </div>
</section>