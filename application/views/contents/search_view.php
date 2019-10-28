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

      <?php //print_r($data); ?>



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
      </div>

      <!-- <div class="content-wrapper">
        <h3 class="subtitle text-bold is-6">Filter :  </h3>
        <div id="signup-btn" class="button button-cta btn-align is-bold light-btn is-drop is-centered">Urutkan &nbsp;<i class="fas fa-align-left"></i>
          <div class="dropContain">
            <div class="dropOut">
              <ul>
                <li><a href="#" style="color: #000000"> Harga Terendah</a> </li>
                <li><a href="#" style="color: #000000"> Waktu Berangkat Awal</a></li>
                <li><a href="#" style="color: #000000"> Waktu Berangkat Akhir</a></li>
                <li><a href="#" style="color: #000000">>Waktu Tiba Awal</a></li>
                <li><a href="#" style="color: #000000">Waktu Tiba Akhir</a></li>
                <li><a href="#" style="color: #000000">Durasi Tercepat</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->

      <hr>
        <div class="columns is-centered">
          <div class="column is-2">
            <p>Filter : </p>
          </div>

          <div class="column is-2">
            <!-- Dropdown trigger -->
              <button class="button" data-jq-dropdown="#maskapai" style="border: 0px;">Maskapai <i class="sl sl-icon-arrow-down is-icon-xs"></i></button>
            <!-- /Dropdown trigger -->

            <!-- Dropdown -->
            <div id="maskapai" class="jq-dropdown">
                <ul class="jq-dropdown-menu">
                    <li>
                        <label class="radio-wrap is-small is-primary">
                            <input type="radio" class="b-radio" name="radio-group">
                            <span></span>
                            Citilink
                        </label>
                    </li>
                    <li>
                        <label class="radio-wrap is-small is-secondary">
                            <input type="radio" class="b-radio" name="radio-group">
                            <span></span>
                            Garuda
                        </label>
                    </li>
                    <li>
                        <label class="radio-wrap is-small is-accent">
                            <input type="radio" class="b-radio" name="radio-group">
                            <span></span>
                            Lion
                        </label>
                    </li>
                    <li>
                        <label class="radio-wrap is-small is-accent">
                            <input type="radio" class="b-radio" name="radio-group">
                            <span></span>
                            Sriwijaya
                        </label>
                    </li>
                    <li>
                        <label class="radio-wrap is-small is-accent">
                            <input type="radio" class="b-radio" name="radio-group">
                            <span></span>
                            Transnusa
                        </label>
                    </li>
                    <li>
                        <label class="radio-wrap is-small is-accent">
                            <input type="radio" class="b-radio" name="radio-group">
                            <span></span>
                            Trigana
                        </label>
                    </li>
                    <li>
                        <label class="radio-wrap is-small is-accent">
                            <input type="radio" class="b-radio" name="radio-group">
                            <span></span>
                            Air Asia
                        </label>
                    </li>
                </ul>
            </div>
            <!-- /Dropdown -->
          </div>
          <div class="column is-2">
            <!-- Dropdown trigger -->
              <button class="button" data-jq-dropdown="#transit" style="border: 0px;">Transit <i class="sl sl-icon-arrow-down is-icon-xs"></i></button>
            <!-- /Dropdown trigger -->
          </div>

          <div class="column is-2">
            <!-- Dropdown trigger -->
            <button class="button" data-jq-dropdown="#harga" style="border: 0px;">Harga <i class="sl sl-icon-arrow-down is-icon-xs"></i></button>
            <!-- /Dropdown trigger -->
          </div>

          <div class="column is-2">
            <!-- Dropdown trigger -->
            <button class="button" data-jq-dropdown="#waktu" style="border: 0px;">Waktu <i class="sl sl-icon-arrow-down is-icon-xs"></i></button>
            <!-- /Dropdown trigger -->
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
      <hr>
    

      <div class="columns is-centered">
        <div class="content-wrapper">
          <!-- Card -->
          <?php
          if(isset($data[0][$maskapai])){         
          for($i = 0 ;$i < count($data[0][$maskapai]) ; $i++){ ?>
            <?php if (isset($data[0][$maskapai][$i]['eco']) ){ ?>
          <div class="single-toggle-wrapper">
            <div class="flex-card media-card light-bordered hover-inset pertama toggle-wrap">
              <div class="columns is-desktop is-centered is-vcentered trigger">
                  <div class="column is-2 has-text-centered ">
                      <div class="mcard-content">
                          <figure class="image is-64x64 container">
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/garuda-indonesia.png">
                          </figure>
                          <h3 class="mcard-title is-centered"><a href="#"><?= $maskapai  ?></a></h3>
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
                          <h3 class="mcard-title"><a href="#">Ekonomi</a></h2>
                          <p class="mcard-description"><a href="#" style="color: #66bb6a; font-size: 16px;"><?= $data[0][$maskapai][$i]['eco']['total'] ?></a></p>
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
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                          </figure>
                                
                      
                            
                          <h5 class="mcard-title is-centered is-5"><?=  $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][0]['kode_pesawat'] ?></h5>
                    
                          <?php if( count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) == 2){ ?>
                          <figure class="image is-48x48 container">
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                          </figure>
                          
                          <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][1]['kode_pesawat'] ?></h5>
                          <?php } ?>
                      </div>
                  </div>
                  <div class="column is-6 is-multiline">
                    <div class="columns">
                      <div class="column is-4"> 
                        <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['eco']['perjalanan']['detail']) ; $j++) { ?>                    
                        <div class="mcard-content">
                          <!-- <figure class="image is-48x48 container">
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                          </figure>
                                        
                          <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['eco']['perjalanan'][0]['kode_pesawat'] ?></h5> -->

                          <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['jam'];  ?></a></h3>
                          <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data['from'].') '; ?></p>

                          <br>
                          <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                          <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['eco']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data['to'].') '; ?></p>
                      </div>
                      <?php } ?>
                          </div>
                          <div class="column is-8 ">
                              <div class="mcard-content">
                                  <p class="mcard-title is-hidden-touch"></p>
                                  <p class="mcard-description is-hidden-touch"></p>
                              </div>
                          </div>
                      </div>
                      <div class="columns">
                          <div class="column is-4">
                              <div class="mcard-content">
                                  <p class="mcard-title is-hidden-touch"></p>
                                  <p class="mcard-description is-hidden-touch"></p>
                              </div>
                          </div>
                          <div class="column is-8">
                              <div class="mcard-content">
                                  <p class="mcard-title is-hidden-touch"></p>
                                  <p class="mcard-description is-hidden-touch"></p>
                              </div>
                          </div>
                    </div>
                  </div>
                  <div class="column is-4 is-pulled-right " >
                      <div class="mcard-content">
                          <h3 class="mcard-title"><a href="#">Detail Penerbangan</a></h3>
                          <p class="mcard-description is-hidden-touch">Pesawat Boeing <span class="has-text-black">737<span></p>
                          <p class="mcard-description is-hidden-touch ">Tata Kursi 3-3</p>
                          <p class="mcard-description is-hidden-touch">Jarak Antar Kursi 31 inci</p>
                          <p class="mcard-description is-hidden-touch mb-10">Bagasi Kabin 7 kg</p>
                          <br>
                          <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn">Pilih</a>
                      </div>
                  </div>
              </div>
              <!-- End of Detail -->
            </div>
          </div>
            <?php } ?>
          <?php } ?>
          <!-- End of Card -->
                      
          <?php for($i = 0 ;$i < count($data[0][$maskapai]) ; $i++){ ?>
          <?php if (isset($data[0][$maskapai][$i]['bus']) ){ ?>
          <div class="single-toggle-wrapper">
            <div class="flex-card media-card light-bordered hover-inset pertama toggle-wrap">
              <div class="columns is-desktop is-centered is-vcentered trigger active">

                  <div class="column is-2 has-text-centered ">
                      <div class="mcard-content">
                          <figure class="image is-64x64 container">
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/garuda-indonesia.png">
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

                  <div class="column is-1 has-text-centered">
                      <div class="mcard-content">
                          <div class="mcard-actions ml-auto">
                              <span><i class="material-icons">work</i></span>
                          </div>
                      </div>
                  </div>     
                  <div class="column is-2 has-text-centered">
                      <div class="mcard-content">
                          <h2>Bisnis</h2>
                          <h3 class="mcard-title"><a href="#" style="color: #DC143C; font-size: 16px;"> <?= $data[0][$maskapai][$i]['bus']['total'] ?></a></h3>
                      </div>
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
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                          </figure>
                                
                      
                            
                          <h5 class="mcard-title is-centered is-5"><?=  $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][0]['kode_pesawat'] ?></h5>
                    
                          <?php if( count($data[0][$maskapai][$i]['bus']['perjalanan']['detail']) == 2){ ?>
                          <figure class="image is-48x48 container">
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                          </figure>
                          
                          <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][1]['kode_pesawat'] ?></h5>
                          <?php } ?>
                      </div>
                  </div>
                  <div class="column is-6 is-multiline">
                    <div class="columns">
                      <div class="column is-4"> 
                        <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['bus']['perjalanan']['detail']) ; $j++) { ?>                    
                        <div class="mcard-content">
                          <!-- <figure class="image is-48x48 container">
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                          </figure>
                                        
                          <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['bus']['perjalanan'][0]['kode_pesawat'] ?></h5> -->

                          <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['berangkat']['jam'];  ?></a></h3>
                          <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data['from'].') '; ?></p>

                          <br>
                          <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                          <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['bus']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data['to'].') '; ?></p>
                      </div>
                      <?php } ?>
                          </div>
                          <div class="column is-8 ">
                              <div class="mcard-content">
                                  <p class="mcard-title is-hidden-touch"></p>
                                  <p class="mcard-description is-hidden-touch"></p>
                              </div>
                          </div>
                      </div>
                      <div class="columns">
                          <div class="column is-4">
                              <div class="mcard-content">
                                  <p class="mcard-title is-hidden-touch"></p>
                                  <p class="mcard-description is-hidden-touch"></p>
                              </div>
                          </div>
                          <div class="column is-8">
                              <div class="mcard-content">
                                  <p class="mcard-title is-hidden-touch"></p>
                                  <p class="mcard-description is-hidden-touch"></p>
                              </div>
                          </div>
                    </div>
                  </div>
                  <div class="column is-4 is-pulled-right " >
                      <div class="mcard-content">
                          <h3 class="mcard-title"><a href="#">Detail Penerbangan</a></h3>
                          <p class="mcard-description is-hidden-touch">Pesawat Boeing <span class="has-text-black">737<span></p>
                          <p class="mcard-description is-hidden-touch ">Tata Kursi 3-3</p>
                          <p class="mcard-description is-hidden-touch">Jarak Antar Kursi 31 inci</p>
                          <p class="mcard-description is-hidden-touch mb-10">Bagasi Kabin 7 kg</p>
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

          <?php for($i = 0 ;$i < count($data[0][$maskapai]) ; $i++){ ?>
          <?php if (isset($data[0][$maskapai][$i]['pro']) ){ ?>
          <div class="flex-card media-card light-bordered hover-inset pertama toggle-wrap">
            <div class="columns is-desktop is-centered is-vcentered trigger active">

                <div class="column is-2 has-text-centered ">
                    <div class="mcard-content">
                        <figure class="image is-64x64 container">
                            <img src="<?php echo base_url() ?>assets/img/logo-pesawat/garuda-indonesia.png">
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

                <div class="column is-1 has-text-centered">
                    <div class="mcard-content">
                        <div class="mcard-actions ml-auto">
                            <span><i class="material-icons">work</i></span>
                        </div>
                    </div>
                </div>     
                <div class="column is-2 has-text-centered">
                    <div class="mcard-content">
                      <h2>Promosi</h2>
                        <h3 class="mcard-title"><a href="#" style="color: #1E90FF; font-size: 16px;"> <?= $data[0][$maskapai][$i]['pro']['total'] ?></a></h3>
                    </div>
                </div>
            </div>
            <!-- Detail -->
            <div class="columns is-desktop is-centered is-vcentered toggle-container is-multiline" >
                <div class="column is-11 ">
                    <hr>
                </div>
                <!-- toggle -->
                <a href="#"><i class="im im-icon-Add"></i></a>
                <!-- end toggle -->
              </div>
              <!-- Detail -->
              <div class="columns is-desktop is-centered is-vcentered toggle-container is-multiline" >
                  <div class="column is-11 ">
                      <hr>
                  </div>
                  <div class="column is-2 has-text-centered is-centered is-vcentered">
                      <div class="mcard-content">
                          <figure class="image is-48x48 container">
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                          </figure>
                                
                      
                            
                          <h5 class="mcard-title is-centered is-5"><?=  $data['go'][0]['LIO'][$i]['perjalanan'][0]['kode_pesawat'] ?></h5>
                    
                          <?php if(count($data['go'][0]['LIO'][$i]['perjalanan'])>1){ ?>
                          <figure class="image is-48x48 container">
                              <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                          </figure>
                          
                        <h5 class="mcard-title is-centered is-5"><?=  $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][0]['kode_pesawat'] ?></h5>
                  
                        <?php if( count($data[0][$maskapai][$i]['pro']['perjalanan']['detail']) == 2){ ?>
                        <figure class="image is-48x48 container">
                            <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                        </figure>
                        
                        <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][1]['kode_pesawat'] ?></h5>
                        <?php } ?>
                    </div>
                </div>
                <div class="column is-6 is-multiline">
                  <div class="columns">
                    <div class="column is-4"> 
                      <?php for ($j = 0; $j < count($data[0][$maskapai][$i]['pro']['perjalanan']['detail']) ; $j++) { ?>                    
                      <div class="mcard-content">
                        <!-- <figure class="image is-48x48 container">
                            <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                        </figure>
                                      
                        <h5 class="mcard-title is-centered is-5"><?= $data[0][$maskapai][$i]['pro']['perjalanan'][0]['kode_pesawat'] ?></h5> -->

                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['berangkat']['jam'];  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['berangkat']['kota'].' ('.$data['from'].') '; ?></p>

                        <br>
                        <h3 class="mcard-title"><a href="#"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['sampai']['jam'] ;  ?></a></h3>
                        <p class="mcard-description is-hidden-touch"><?= $data[0][$maskapai][$i]['pro']['perjalanan']['detail'][$j]['sampai']['kota'].' ('.$data['to'].') '; ?></p>
                    </div>
                    <?php } ?>
                        </div>
                        <div class="column is-8 ">
                            <div class="mcard-content">
                                <p class="mcard-title is-hidden-touch"></p>
                                <p class="mcard-description is-hidden-touch"></p>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="column is-4 is-pulled-right " >
                    <div class="mcard-content">
                        <h3 class="mcard-title"><a href="#">Detail Penerbangan</a></h3>
                        <p class="mcard-description is-hidden-touch">Pesawat Boeing <span class="has-text-black">737<span></p>
                        <p class="mcard-description is-hidden-touch ">Tata Kursi 3-3</p>
                        <p class="mcard-description is-hidden-touch">Jarak Antar Kursi 31 inci</p>
                        <p class="mcard-description is-hidden-touch mb-10">Bagasi Kabin 7 kg</p>
                        <br>
                        <a href="<?=base_url('BookingPesawat')?>" class="button button-cta success-btn">Pilih</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- End of Card -->
          </div>
            <?php } ?>
          <?php } ?>
        <?php } else{ ?>
          <?= "Tiket Habis";}?>
          <!-- End of Card -->
        </div>
      </div>
      </div>
  </div>
</section>