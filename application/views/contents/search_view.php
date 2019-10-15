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

      <div class="content-wrapper">
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
      </div>
  
      <!-- <section class="section">
          <div class="container">
              <div class="card is-fullwidth">
                  <header class="card-header">
                      <p class="card-header-title">Card #1</p>
                      <a class="card-header-icon card-toggle">
                          <i class="fa fa-angle-down"></i>
                      </a>
                  </header>
                  <div class="card-content is-hidden">
                      <div class="content">
                          Content goes here <small>Small text</small>
                      </div>
                  </div>
              </div>

              <div class="card is-fullwidth">
                  <header class="card-header">
                      <p class="card-header-title">Card #2</p>
                      <a class="card-header-icon card-toggle">
                          <i class="fa fa-angle-down"></i>
                      </a>
                  </header>
                  <div class="card-content is-hidden">
                      <div class="content">
                          Some more content. Look at all this whitespace. <small>(Unless you are on mobile)</small>
                      </div>
                  </div>
              </div>
          </div>
      </section> -->
      
        
      


      <div class="content-wrapper">
        <!-- Card -->
        <?php         

        for($i = 0 ;$i < count($data['go'][0]['LIO']) ; $i++){ ?>
        <div class="flex-card media-card light-bordered hover-inset pertama toggle-wrap">
          <div class="columns is-desktop is-centered is-vcentered trigger active">

              <div class="column is-2 has-text-centered ">
                  <div class="mcard-content">
                      <figure class="image is-64x64 container">
                          <img src="<?php echo base_url() ?>assets/img/logo-pesawat/garuda-indonesia.png">
                      </figure>
                      <h3 class="mcard-title is-centered"><a href="#"> LIO </a></h3>
                  </div>
              </div>

              <div class="column is-2 has-text-centered">
                  <?php for ($j = 0; $j < count($data['go'][0]['LIO'][$i]['perjalanan']) ; $j++) { ?>                    
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data['go'][0]['LIO'][$i]['perjalanan'][$j]['berangkat']['jam'].'->'.$data['go'][0]['LIO'][$i]['perjalanan'][$j]['sampai']['jam'] ;  ?></a></h3>
                      <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                  </div>
                  <?php } ?>
              </div>

               <div class="column is-2 has-text-centered">
                  <?php for ($j = 0; $j < count($data['go'][0]['LIO'][$i]['perjalanan']) ; $j++) { ?>                    
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data['go'][0]['LIO'][$i]['perjalanan'][$j]['berangkat']['jam'].'->'.$data['go'][0]['LIO'][$i]['perjalanan'][$j]['sampai']['jam'] ;  ?></a></h3>
                      <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                  </div>
                  <?php } ?>
              </div>

              <div class="column is-2 has-text-centered">
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data['go'][0]['LIO'][$i]['total_perjalanan']  ?></a></h3>
                      <p class="mcard-description is-hidden-touch">langsung</p>
                  </div>
              </div>

              <div class="column is-2 has-text-centered">
                  <div class="mcard-content">
                      <div class="mcard-actions ml-auto">
                          <span><i class="material-icons">work</i></span>
                      </div>
                  </div>
              </div>     
              <div class="column is-2 has-text-centered">
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#" style="color: #66bb6a; font-size: 16px;">Rp. 725.600 / org</a></h3>
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
               <?php for ($j = 0; $j < count($data['go'][0]['LIO'][$i]['pesawat']) ; $j++) { ?>                    
           
                      <h5 class="mcard-title is-centered is-5"><?=  $data['go'][0]['LIO'][$i]['pesawat'][$j] ?></h5>
                <?php } ?>
                      <p class="mcard-description is-hidden-touch is-centered">Economy</p>
                  </div>
              </div>
              <div class="column is-6 is-multiline">
                  <div class="columns">
                      <div class="column is-4">
                                         <?php for ($j = 0; $j < count($data['go'][0]['LIO'][$i]['perjalanan']) ; $j++) { ?>                    
                  <div class="mcard-content">
                      <h3 class="mcard-title"><a href="#"><?= $data['go'][0]['LIO'][$i]['perjalanan'][$j]  ?></a></h3>
                      <!--<p class="mcard-description is-hidden-touch">Malang (MLG)</p>-->
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
                      <?php for ($j = 0; $j < count($data['go'][0]['LIO'][$i]['harga']) ; $j++) { ?>                    
   
                      <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn"><?= $data['go'][0]['LIO'][$i]['harga'][$j] ?></a>
                    <?php } ?>
                  </div>
              </div>
          </div>
          <!-- End of Detail -->
        </div>
        <?php } ?>
        <!-- End of Card -->
      </div>
  </div>
</section>