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

    <?php // print_r($data) ?>



    <div class="content-wrapper">
      
    </div>

    <div class="content-wrapper">
        <h3 class="title text-bold is-5"><?= '( '.$data['from'].' )' ; ?> →  <?= '( '.$data['to'].' )';  ?> </h3>
        <div class="columns">
          <div class="column is-6">
            <h3 class="subtitle is-6 pt-10">
              <p class="text-bold" style="color: #757575;"><?= $data['tanggal_pergi']  ?></p>
              <br/>
              <p class="text-bold" style="font-size: 13px; color: #757575;">1 Dewasa | Ekonomi </p>
            </h3>
          </div>
          <div class="column is-6">
              <a id="button_search" class="button button-cta primary-btn">Ganti Pencarian</a>
          </div>
        </div>

        <div class="columns is-vcentered">
          <div class="column is-8 is-offset-2">
            <div class="flex-card light-bordered hover-inset" id="form_search" style="display: none">
              <div class="card-body">
                <h2 class="title is-4 text-bold mb-20">Cari Tiket Pesawat Terbang</h2>
                <form action="<?=base_url('Search')?>">
                  <div class="columns mt-50">
                      <div class="column">
                            <div class="control">
                            <label>Asal</label>
                              <input class="input is-secondary-focus is-medium" id="asal" name="asal" type="text" style="width: 200px;">
                          </div>
                          <div class="control">
                            <label>Tanggal Berangkat</label>
                              <input data-toggle="datepicker"  name="go" class="input is-secondary-focus is-medium mt-5" style="width: 200px;">
                          </div>
                      </div>
                      <div class="column">
                        <br>
                        <a type="button" class="button button-cta primary-btn rounded"  id="go" onclick="swapValues()"><i class="fas fa-exchange-alt"></i>&nbsp;&nbsp;Swap Jadwal</a>
                          <div class="control">
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
                              <input class="input is-secondary-focus is-medium mt-5" id="berangkat" name="berangkat" type="text" style="width: 200px;">
                          </div>
                          <div class="control" id="show" style="display: none;">
                            <label>Pulang Pergi</label>
                              <input data-toggle="datepicker"  class="input is-secondary-focus is-medium mt-5" style="width: 200px;">
                          </div>
                      </div>
                      </div>
                      <div class="columns">
                        <div class="column">
                          <div class="control">
                            <label>Dewasa</label>
                              <div class="select is-fullwidth">
                                <select class="is-hovered">
                                  <option name="1">1</option>
                                  <option name="2">2</option>
                                  <option name="3">3</option>
                                  <option name="4">4</option>
                                </select>
                              </div>
                              <small style="color: #bdbdbd;">12 tahun ke atas*</small>
                          </div>
                          </div>   
                      </div>

                      <div class="columns">
                        <div class="column">
                          <div class="control">
                            <label>Anak</label>
                              <div class="select is-fullwidth">
                                <select class="is-hovered">
                                  <option name="1">1</option>
                                  <option name="2">2</option>
                                </select>
                              </div>
                              <small style="color: #bdbdbd;">2 - 11 tahun *</small>
                          </div>
                        </div>   
                      </div>
                                                                            
                      <div class="columns">
                        <div class="column">
                        <div class="control">
                          <label>Bayi</label>
                            <div class="select is-fullwidth">
                              <select class="is-hovered">
                                <option name="0">0</option>
                                <option name="1">1</option>
                              </select>
                            </div>
                            <small style="color: #bdbdbd;">Bawah 2 tahun*</small>
                        </div>
                        </div>   
                      </div>
                      <div class="mt-30">  
                        <button class="button btn-align no-lh raised primary-btn">Search</button>
                        <button class="button is-link no-lh">Cancel</button>
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
              <p>Filter : </p>
            </div>

            <div class="column is-2">
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
            </div>
            <div class="column is-2">
              <div class="button btn-align has-icon-right primary-btn btn-outlined is-drop" style="border: 0px;">Transit <i class="sl sl-icon-arrow-down is-icon-xs"></i>
                  <div class="dropContain">
                    <div class="dropOut">
                      <ul>
                        <li><a href="#" style="color: #000000">Langsung</a></li>
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
                        <li><input id="sliderWithValue" class="slider has-output is-fullwidth" min="4.121.163" max="20.091.060" value="100" step="1" type="range"></li>
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
                              <input id="check1" type="checkbox" class="b-checkbox" onchange="console.log('changed');">
                              <span style="color: #000000;"></span>
                              &nbsp;00.00 - 06.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input id="check2" type="checkbox" class="b-checkbox" onchange="console.log('changed');">
                              <span style="color: #000000"></span>
                              &nbsp;06.00 - 12.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input id="check3" type="checkbox" class="b-checkbox" onchange="console.log('changed');">
                              <span style="color: #000000"></span>
                              &nbsp;12.00 - 18.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input id="check4" type="checkbox" class="b-checkbox" onchange="console.log('changed');">
                              <span style="color: #000000"></span>
                              &nbsp;18.00 - 00.00
                          </label>
                        </li>
                        </ul>
                        <ul class="column is-6">
                        <li class="is-disabled" style="color: #000000;">Waktu Landing</li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input id="check5" type="checkbox" class="b-checkbox" onchange="console.log('changed');">
                              <span style="color: #000000"></span>
                              &nbsp;00.00 - 06.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input id="check6" type="checkbox" class="b-checkbox" onchange="console.log('changed');">
                              <span style="color: #000000"></span>
                              &nbsp;06.00 - 12.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input id="check7" type="checkbox" class="b-checkbox" onchange="console.log('changed');">
                              <span style="color: #000000"></span>
                              &nbsp;12.00 - 18.00
                          </label>
                        </li>
                        <li>
                          <label class="checkbox-wrap is-small">
                              <input id="check8" type="checkbox" class="b-checkbox" onchange="console.log('changed');">
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
        <!-- filter end -->
        <!-- detail filter -->
        <div class="columns">
          <div class="column">
            <div class="flex-card light-bordered hover-inset">
              <div class="card-body">
                  <div class="content">
                    <p class="text-bold">Filtering by : &nbsp;&nbsp;<p>
                    <p><button class="button is-white">Waktu Landing : 00.00 - 06.00 &nbsp;<i class="sl sl-icon-close is-icon-xs"></i></button>
                    <button class="button is-info">Reset All</button></p>
                    
                  </div>
              </div>  
            </div>
          </div>
        </div>
        <!-- detail filter end -->
        <!-- Card -->
        <?php 
          if(isset($data[0])){        
        for($i = 0 ;$i < count($data[0][$maskapai]) ; $i++){ ?>
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
        <?php
          if (isset($data[0][$maskapai][$i]['eco']) ){ ?>
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
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                      <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data['to'].') '; ?></p>
                  </div>
                  <?php } } ?>
              </div>

              <div class="column is-2 has-text-centered">
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['total_perjalanan']  ?></a></h3>
                      <p class="mcard-description is-hidden-touch">langsung</p>
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

      <!-- End of Card -->

        <?php if (isset($data[0][$maskapai][$i]['bus']) ){ ?>
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
                      <p class="mcard-description is-hidden-touch">langsung</p>
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