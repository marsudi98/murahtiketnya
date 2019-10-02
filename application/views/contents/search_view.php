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
          <h3 class="title text-bold is-5">JKT (Semua Bandara) → MLG (Abdurahman Saleh Airport)</h3>
          <div class="columns">
            <div class="column is-6">
              <h3 class="subtitle is-6 pt-10">
                  <p class="text-bold" style="color: #757575;">Senin, 30 September 2019</p>
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
                            <h2 class="title is-4 text-bold mb-20">Cari Tiket Kereta Api</h2>
                            <form action="<?php echo site_url('Search');?>">
                                <div class="columns mt-50">
                                    <div class="column">
                                        <div class="control">
                                            <label>Asal</label>
                                            <input class="input is-secondary-focus is-medium mt-5" id="asal" name="asal" type="text">
                                        </div>
                                        <div class="control">
                                            <label>Tanggal Berangkat</label>
                                            <input type="date" class="input is-secondary-focus is-medium mt-5">
                                        </div>
                                    </div>
                                    <div class="column">
                                          <br>
                                          <a type="button" class="button button-cta primary-btn rounded"  id="go" onclick="swapValues()"><i class="fas fa-exchange-alt"></i>&nbsp;&nbsp;Swap Jadwal</a>
                                        <div class="control">
                                            <label class="checkbox-wrap is-medium" style="line-height: 6.8;">
                                                <input id="myCheck" type="checkbox" class="d-checkbox" onclick="myFunction()">
                                                <span></span>
                                                Pulang-Pergi
                                            </label>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="control">
                                            <label>Berangkat</label>
                                            <input class="input is-secondary-focus is-medium mt-5" id="berangkat" name="berangkat" type="text">
                                        </div>
                                        <div class="control" id="show" style="display: none;">
                                            <label>Pulang Pergi</label>
                                            <input type="date" class="input is-secondary-focus is-medium mt-5">
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
                                            <small style="color: #bdbdbd;">3 tahun ke atas*</small>
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
                                            <small style="color: #bdbdbd;">Bawah 3 tahun*</small>
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
            <div class="flex-card media-card  light-bordered hover-inset pertama toggle-wrap">
                <div class="columns is-desktop mt-20 ml-60 is-vcentered trigger active">
             
                    <div class="column is-2">
                        <div class="mcard-content">
                            <!-- <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png"> -->
                            <figure class="image is-64x64">
                                <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                            </figure>
                            <h3 class="mcard-title ml-10"><a href="#">10:40</a></h3>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">10:40</a></h3>
                            <p class="mcard-description is-hidden-touch">Jakarta (CGK)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">12:05</a></h3>
                            <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">1j 25m</a></h3>
                            <p class="mcard-description is-hidden-touch">Langsung</p>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="mcard-content">
                            <h3 class="mcard-title mb-10"><a href="#" style="color: #66bb6a">Rp. 725.600 / orang</a></h3>
                            <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>

                    <!-- <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#" style="color: #66bb6a">Rawdaw0</a></h3>
                            <p class="mcard-description is-hidden-touch">/ orang
                        </div>
                    </div> -->
                </div>
                <div class="columns is-desktop mt-20 ml-60 is-vcentered toggle-container" >
                    
                    <div class="column is-11">
                        <hr>
                    </div>
                    <div class="columns">
                    <div class="column is-2">
                        <div class="mcard-content">
                            <!-- <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png"> -->
                            <figure class="image is-64x64">
                                <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                            </figure>
                            <h3 class="mcard-title ml-10"><a href="#">10:40</a></h3>
                        </div>
                    </div>
                    </div>
                </div>
               
            </div>

            <div class="flex-card media-card  light-bordered hover-inset pertama toggle-wrap">
                <div class="columns is-desktop mt-20 ml-60 is-vcentered trigger active">
             
                    <div class="column is-2">
                        <div class="mcard-content">
                            <!-- <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png"> -->
                            <figure class="image is-64x64">
                                <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                            </figure>
                            <h3 class="mcard-title ml-10"><a href="#">10:40</a></h3>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">10:40</a></h3>
                            <p class="mcard-description is-hidden-touch">Jakarta (CGK)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">12:05</a></h3>
                            <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">1j 25m</a></h3>
                            <p class="mcard-description is-hidden-touch">Langsung</p>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="mcard-content">
                            <h3 class="mcard-title mb-10"><a href="#" style="color: #66bb6a">Rp. 725.600 / orang</a></h3>
                            <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>

                    <!-- <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#" style="color: #66bb6a">Rawdaw0</a></h3>
                            <p class="mcard-description is-hidden-touch">/ orang
                        </div>
                    </div> -->
                </div>
                <div class="columns is-desktop mt-20 ml-60 is-vcentered toggle-container" >
             
                    <div class="column is-2">
                        <div class="mcard-content">
                            <!-- <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png"> -->
                            <figure class="image is-64x64">
                                <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                            </figure>
                            <h3 class="mcard-title ml-10"><a href="#">10:40</a></h3>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">10:40</a></h3>
                            <p class="mcard-description is-hidden-touch">Jakarta (CGK)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">12:05</a></h3>
                            <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">1j 25m</a></h3>
                            <p class="mcard-description is-hidden-touch">Langsung</p>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="mcard-content">
                            <h3 class="mcard-title mb-10"><a href="#" style="color: #66bb6a">Rp. 725.600 / orang</a></h3>
                            <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>

                    <!-- <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#" style="color: #66bb6a">Rawdaw0</a></h3>
                            <p class="mcard-description is-hidden-touch">/ orang
                        </div>
                    </div> -->
                </div>
               
            </div>

            <div class="flex-card media-card  light-bordered hover-inset pertama toggle-wrap">
                <div class="columns is-desktop mt-20 ml-60 is-vcentered trigger active">
             
                    <div class="column is-2">
                        <div class="mcard-content">
                            <!-- <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png"> -->
                            <figure class="image is-64x64">
                                <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                            </figure>
                            <h3 class="mcard-title ml-10"><a href="#">10:40</a></h3>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">10:40</a></h3>
                            <p class="mcard-description is-hidden-touch">Jakarta (CGK)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">12:05</a></h3>
                            <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">1j 25m</a></h3>
                            <p class="mcard-description is-hidden-touch">Langsung</p>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="mcard-content">
                            <h3 class="mcard-title mb-10"><a href="#" style="color: #66bb6a">Rp. 725.600 / orang</a></h3>
                            <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>

                    <!-- <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#" style="color: #66bb6a">Rawdaw0</a></h3>
                            <p class="mcard-description is-hidden-touch">/ orang
                        </div>
                    </div> -->
                </div>
                <div class="columns is-desktop mt-20 ml-60 is-vcentered toggle-container" >
             
                    <div class="column is-2">
                        <div class="mcard-content">
                            <!-- <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png"> -->
                            <figure class="image is-64x64">
                                <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                            </figure>
                            <h3 class="mcard-title ml-10"><a href="#">10:40</a></h3>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">10:40</a></h3>
                            <p class="mcard-description is-hidden-touch">Jakarta (CGK)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">12:05</a></h3>
                            <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">1j 25m</a></h3>
                            <p class="mcard-description is-hidden-touch">Langsung</p>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="mcard-content">
                            <h3 class="mcard-title mb-10"><a href="#" style="color: #66bb6a">Rp. 725.600 / orang</a></h3>
                            <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>

                    <!-- <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#" style="color: #66bb6a">Rawdaw0</a></h3>
                            <p class="mcard-description is-hidden-touch">/ orang
                        </div>
                    </div> -->
                </div>
               
            </div>

            <div class="flex-card media-card  light-bordered hover-inset pertama toggle-wrap">
                <div class="columns is-desktop mt-20 ml-60 is-vcentered trigger active">
                    <div class="column is-2">
                        <div class="mcard-content">
                            <!-- <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png"> -->
                            <figure class="image is-64x64">
                                <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                            </figure>
                            <h3 class="mcard-title ml-10"><a href="#">10:40</a></h3>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">10:40</a></h3>
                            <p class="mcard-description is-hidden-touch">Jakarta (CGK)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">12:05</a></h3>
                            <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">1j 25m</a></h3>
                            <p class="mcard-description is-hidden-touch">Langsung</p>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="mcard-content">
                            <h3 class="mcard-title mb-10"><a href="#" style="color: #66bb6a">Rp. 725.600 / orang</a></h3>
                            <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>
                </div>
                <div class="columns is-desktop mt-20 ml-60 is-vcentered toggle-container" >
                    
                    <div class="column is-2">
                        <div class="mcard-content">
                            <!-- <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png"> -->
                            <figure class="image is-64x64">
                                <img src="<?php echo base_url() ?>assets/img/logo-pesawat/lion-air.png">
                            </figure>
                            <h3 class="mcard-title ml-10"><a href="#">10:40</a></h3>
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">10:40</a></h3>
                            <p class="mcard-description is-hidden-touch">Jakarta (CGK)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">12:05</a></h3>
                            <p class="mcard-description is-hidden-touch">Malang (MLG)</p>
                        </div>
                    </div>

                    <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#">1j 25m</a></h3>
                            <p class="mcard-description is-hidden-touch">Langsung</p>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="mcard-content">
                            <h3 class="mcard-title mb-10"><a href="#" style="color: #66bb6a">Rp. 725.600 / orang</a></h3>
                            <a href="<?=base_url('BookingPesawat')?>" class="button button-cta primary-btn">Pesan Sekarang</a>
                        </div>
                    </div>

                    <!-- <div class="column is-2">
                        <div class="mcard-content">
                            <h3 class="mcard-title"><a href="#" style="color: #66bb6a">Rawdaw0</a></h3>
                            <p class="mcard-description is-hidden-touch">/ orang
                        </div>
                    </div> -->
                </div>
               
            </div>

            <div class="columns is-vcentered mt-20">
                    <div class="column is-12">
                        <div class="single-toggle-wrapper">
                            <div class="toggle-wrap">
                                <span class="trigger active"><a href="#"><i class="im im-icon-Coding is-icon-2x"></i> SHOW CODE<i class="im im-icon-Add"></i></a></span>
                                <div class="toggle-container" style="display: block;">
                                    <p class="no-padding mt-10">Lorem ipsum dolor sit amet, cu ius oratio appareat partiendo. Solet civibus nam te. Eu vel veri putent. Et suas reprimique adversarium duo, ex vel ridens graecis. Mel ipsum oratio voluptatum et.</p>
                                    <p class="no-padding mt-10">Errem latine pro id, sea ei dolor legendos constituam. Ut pri decore persius concludaturque, et magna omittam vituperatoribus per. Et cetero eripuit his. Eum rebum moderatius appellantur ea.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
  </section>