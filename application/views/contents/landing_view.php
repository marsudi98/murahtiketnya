<div id="wrapper">
   <a id="booking"></a>
   <section class="section is-medium is-skewed-sm" id="booking">
      <div class="container is-reverse-skewed-sm">
         <!--Title-->
         <div class="section-title-wrapper has-text-centered">
            <div class="clean-bg-symbol"><i class="fas fa-search    "></i></div>
            <div>
               <h2 class="clean-section-title">Booking</h2>
               <h3 class="subtitle is-5 pt-10">
                  <i>Cari tiket keberangkatan Pesawat anda.</i>
               </h3>
            </div>
         </div>
         <!--Content-->
         <div class="content-wrapper">
            <div class="column">
               <div class="navigation-tabs outlined-pills animated-tabs mb-40">
                  <!-- <div class="tabs is-centered">
                     <ul>
                        <li class="tab-link is-active" data-tab="step-1"><a>Kereta Api</a></li>
                        <li class="tab-link" data-tab="step-2"><a>Pesawat Terbang</a></li>
                     </ul>
                     </div> -->
                  <!-- Pill content -->
                  <div id="step-1" class="navtab-content pt-50 pb-50 is-active">
                     <div class="columns is-vcentered">
                        <div class="column is-10 is-offset-1">
                           <div class="flex-card light-bordered light-raised">
                              <div class="card-body">
                                 <h2 class="title is-4 text-bold mb-20">Cari Tiket Pesawat Terbang</h2>
                                 <form action="<?=base_url('Search') ?>"  method="post">
                                    <div class="columns mt-20">
                                       <div class="column">
                                          <div class="control">
                                             <label>Asal</label>
                                             <select id="asal" name="from" class="chosen-select" data-placeholder="Pilih Asal">
                                                <option label="App category"></option>
                                                <?php foreach ($select_airport as $key => $value):?>
                                                   <option value="<?php echo $value->kode_bandara ?>"><?php echo $value->lokasi_bandara ." - "; echo "\n";  echo $value->kode_bandara ." - "; echo $value->nama_bandara ?></option>
                                                <?php endforeach ?> 
                                             </select>
                                          </div>
                                          <div class="field mb-20">
                                             <label>Tanggal Berangkat</label>
                                             <div class="control has-icons-right">
                                                <input data-toggle="datepicker" type="text" class="input is-medium" name="go" autocomplete="off" placeholder="Pilih Tanggal">
                                                <span class="icon is-right is-medium">
                                                   <i class="im im-icon-Calendar-4"></i>
                                                </span>
                                             </div>
                                          </div>
                                          <!-- <div class="control has-icons-right">
                                             <label>Tanggal Berangkat</label>
                                             <input id="datepicker1" data-toggle="datepicker" value="2019-12-29" dateFormat="Y-M-D" name="go"  class="input is-secondary-focus is-medium mt-5">
                                             <span class="icon is-right is-medium">
                                                <i class="im im-icon-Calendar-4"></i>
                                             </span>
                                          </div> -->
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
                                             <label>Tujuan</label>
                                             <select id="tujuan" name="to" class="chosen-select" data-placeholder="Pilih Tujuan">
                                                <option label="App category"></option>
                                                <?php foreach ($select_airport as $key => $value):?>
                                                   <option value="<?php echo $value->kode_bandara ?>"><?php echo $value->lokasi_bandara ." - "; echo "\n";  echo $value->kode_bandara ." - "; echo $value->nama_bandara ?></option>
                                                <?php endforeach ?> 
                                             </select>
                                          </div>
                                          <div class="field mb-20" id="show">
                                             <label>Pulang Pergi</label>
                                             <div class="control has-icons-right">
                                                <input data-toggle="datepicker"  id="myInput" type="text" class="input is-medium" name="back" autocomplete="off" placeholder="Pilih Tanggal" disabled>
                                                <span class="icon is-right is-medium">
                                                   <i class="im im-icon-Calendar-4"></i>
                                                </span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="columns">
                                       <div class="column">
                                          <div class="control">
                                             <label>Maskapai</label>
                                             <div class="select is-fullwidth">
                                                <select class="is-hovered" name="maskapai">
                                                   <option value="" selected disabled hidden>Pilih Maskapai</option>
                                                   <option value="SRI">Sriwijaya</option>
                                                   <option value="CIT">Citilink</option>
                                                   <option value="GAR">Garuda</option>
                                                   <option value="LIO">Lion</option>
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
                                                   <option value="1">1</option>
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
                                       <input type="reset" class="button no-lh" value="Cancel">
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</div>
</section>
<!--/How to use-->
<a id="adventage"></a>
<!-- Keuntungan -->
<section id="adventage" class="section is-medium is-skewed-sm">
   <div class="container is-reverse-skewed-sm">
      <div class="section-title-wrapper has-text-centered">
         <div class="clean-bg-symbol"><i class="fas fa-percent    "></i></div>
         <div>
            <h2 class="clean-section-title">Keuntungan.</h2>
            <h3 class="subtitle is-5 pt-10">
               Mengapa memesan di Murahtiketnya
            </h3>
         </div>
      </div>
      <div class="content-wrapper">
         <div class="columns is-vcentered">
            <div class="column is-4 offset-1">
               <!--Title-->
               <div class="title quick-feature">
                  <h2 class="title is-3 clean-text">Harga Jujur</h2>
               </div>
               <!-- /Title -->
               <div class="title-divider"></div>
               <span class="section-feature-description">Bebas biaya transaksi. Tanpa biaya tersembunyi.</span>
            </div>
            <div class="column is-6 is-offset-1">
               <img src="<?php echo base_url() ?>assets/img/1-people.JPG" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Feature -->
<section class="section is-medium is-skewed-sm">
   <div class="container is-reverse-skewed-sm">
      <div class="columns is-vcentered">
         <div class="column is-6">
            <!-- Featured illustration -->
            <img src="<?php echo base_url() ?>assets/img/2-people.JPG" alt="">
            <!-- /Featured illustration -->
         </div>
         <div class="column is-4 is-offset-1">
            <!-- Title -->
            <div class="title quick-feature">
               <h2 class="clean-text">Berbagai Pilihan Pembayaran</h2>
            </div>
            <!-- /Title -->
            <div class="title-divider"></div>
            <span class="section-feature-description">Pembelian voucher menjadi semakin fleksibel dengan berbagai pilihan pembayaran, dari Transfer ATM, Kartu Kredit, hingga Internet Banking.</span>
         </div>
      </div>
   </div>
</section>
<!-- /Feature -->
<!-- Feature -->
<section class="section is-medium is-skewed-sm">
   <div class="container is-reverse-skewed-sm">
      <div class="columns is-vcentered">
         <div class="column is-4 is-offset-1">
            <!-- Title -->
            <div class="title quick-feature">
               <h2 class="clean-text">Best Price Guarantee</h2>
            </div>
            <!-- /Title -->
            <div class="title-divider"></div>
            <span class="section-feature-description">Harga kompetitif dengan jaminan harga terbaik.</span>
         </div>
         <div class="column is-6 is-offset-1">
            <!-- Featured illustration -->
            <img src="<?php echo base_url() ?>assets/img/3-people.JPG" alt="">
            <!-- /Featured illustration -->
         </div>
      </div>
   </div>
</section>
<!-- /Feature -->
<!-- Feature -->
<section class="section is-medium is-skewed-sm">
   <div class="container is-reverse-skewed-sm">
      <div class="columns is-vcentered">
         <div class="column is-6">
            <!-- Featured illustration -->
            <img src="<?php echo base_url() ?>assets/img/4-people.JPG" alt="">
            <!-- /Featured illustration -->
         </div>
         <div class="column is-4 is-offset-1">
            <!-- Title -->
            <div class="title quick-feature">
               <h2 class="clean-text">Review Tamu Asli</h2>
            </div>
            <!-- /Title -->
            <div class="title-divider"></div>
            <span class="section-feature-description">Ulasan terpercaya dari tamu hotel akan membantu Anda dalam menentukan pilihan.</span>
         </div>
      </div>
   </div>
</section>
<!-- /Feature -->
<a id="jadwal"></a>
<!-- Jadwal -->
<section id="jadwal" class="section is-medium is-skewed-sm">
   <div class="container is-reverse-skewed-sm">
      <div class="section-title-wrapper has-text-centered">
         <div class="clean-bg-symbol"><i class="fas fa-plane    "></i></div>
         <div>
            <h2 class="clean-section-title">Jadwal.</h2>
            <h3 class="subtitle is-5 pt-10">
               Jadwal Keberangkatan Pesawat hari ini.
            </h3>
         </div>
      </div>
      <div class="columns is-vcentered pt-30">
         <!-- Demo section -->
         <div class="column is-10 is-offset-1">
            <table class="responsive-table is-primary mb-40 selector">
               <tbody>
                  <tr>
                     <th>No KA.</th>
                     <th>Nama Kereta</th>
                     <th>Rute</th>
                     <th>Berangkat</th>
                     <th>Actions</th>
                  </tr>
                  <tr>
                     <td data-th="ID">1</td>
                     <td data-th="Name">Argo Bromo Anggrek (eksekutif)</td>
                     <td data-th="Role">Surabaya – Jakarta</td>
                     <td data-th="Projects">08.00</td>
                     <td data-th="Actions">
                        <button class="button is-small btn-align primary-btn raised rounded btn-outlined">Detail</button>
                     </td>
                  </tr>
                  <tr>
                     <td data-th="ID">2</td>
                     <td data-th="Name">Argo Bromo Anggrek (eksekutif)</td>
                     <td data-th="Role">Jakarta – Surabaya</td>
                     <td data-th="Projects">09.30</td>
                     <td data-th="Actions">
                        <button class="button is-small btn-align primary-btn raised rounded btn-outlined">Detail</button>
                     </td>
                  </tr>
                  <tr>
                     <td data-th="ID">3</td>
                     <td data-th="Name">Argo Bromo Anggrek (eksekutif)</td>
                     <td data-th="Role">Surabaya – Jakarta</td>
                     <td data-th="Projects">20.00</td>
                     <td data-th="Actions">
                        <button class="button is-small btn-align primary-btn raised rounded btn-outlined">Detail</button>
                     </td>
                  </tr>
                  <tr>
                     <td data-th="ID">4</td>
                     <td data-th="Name">Argo Bromo Anggrek (eksekutif)</td>
                     <td data-th="Role">Jakarta – Surabaya</td>
                     <td data-th="Projects">21.30</td>
                     <td data-th="Actions">
                        <button class="button is-small btn-align primary-btn raised rounded btn-outlined">Detail</button>
                     </td>
                  </tr>
                  <tr>
                     <td data-th="ID">5</td>
                     <td data-th="Name">Argo Wilis (eksekutif)</td>
                     <td data-th="Role">Surabaya – Bandung</td>
                     <td data-th="Projects">07.00</td>
                     <td data-th="Actions">
                        <button class="button is-small btn-align primary-btn raised rounded btn-outlined">Detail</button>
                     </td>
                  </tr>
                  <tr>
                     <td data-th="ID">6</td>
                     <td data-th="Name">Argo Wilis (eksekutif)</td>
                     <td data-th="Role">Bandung – Surabaya</td>
                     <td data-th="Projects">08.30</td>
                     <td data-th="Actions">
                        <button class="button is-small btn-align primary-btn raised rounded btn-outlined">Detail</button>
                     </td>
                  </tr>
                  <tr>
                     <td data-th="ID">7</td>
                     <td data-th="Name">Argo Lawu (eksekutif)</td>
                     <td data-th="Role">Solo -Jakarta</td>
                     <td data-th="Projects">08.00</td>
                     <td data-th="Actions">
                        <button class="button is-small btn-align primary-btn raised rounded btn-outlined">Detail</button>
                     </td>
                  </tr>
               </tbody>
            </table>
            </tbody>
            </table>
         </div>
      </div>
   </div>
</section>
<a id="testimoni"></a>
<!--Testimoni-->
<section id="testimoni" class="section section-feature-grey is-medium is-skewed-sm">
   <div class="container is-reverse-skewed-sm">
      <div class="section-title-wrapper has-text-centered">
         <div class="clean-bg-symbol"><i class="fab fa-servicestack    "></i></div>
         <div>
            <h2 class="clean-section-title">Service Kami.</h2>
            <h3 class="subtitle is-5 pt-10">
               Service yang ditawarkan.
            </h3>
         </div>
      </div>
      <div class="content-wrapper">
         <div class="columns is-vcentered">
            <!--Floating Icons-->
            <div class="column is-4">
               <div class="floating-circle levitate is-icon-reveal">
                  <img src="<?php echo base_url() ?>assets/img/icons/speed.svg" alt="Pelayanan Cepat">
               </div>
               <div class="has-text-centered mt-20">
                  <span class="clean-text">Pelayanan Cepat</span>
               </div>
            </div>
            <!--Floating Icons-->
            <div class="column is-4">
               <div class="floating-circle levitate is-icon-reveal">
                  <img src="<?php echo base_url() ?>assets/img/icons/tag.svg" alt="Harga Terjangkau">
               </div>
               <div class="has-text-centered mt-20">
                  <span class="clean-text">Harga Terjangkau</span>
               </div>
            </div>
            <!--Floating Icons-->
            <div class="column is-4">
               <div class="floating-circle levitate is-icon-reveal">
                  <img src="<?php echo base_url() ?>assets/img/icons/shield.svg" alt="Keamanan Terjamin">
               </div>
               <div class="has-text-centered mt-20">
                  <span class="clean-text">Keamanan Terjamin</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Testimonials section -->
<section id="card-testimonials" class="section section-feature-grey is-medium is-skewed-sm">
   <div class="container is-reverse-skewed-sm">
      <!-- Title -->
      <div class="section-title-wrapper has-text-centered">
         <div class="clean-bg-symbol"><i class="fab fa-gg"></i></div>
         <div>
            <h2 class="clean-section-title">Testimoni</h2>
            <h3 class="subtitle is-5 pt-10">
               Sebuah testimoni dari pelanggan.
            </h3>
         </div>
      </div>
      <div class="content-wrapper">
         <!-- Testimonials -->
         <div class="columns">
            <div class="column is-hidden-mobile"></div>
            <div class="column is-10">
               <div class="columns is-vcentered">
                  <div class="column is-6">
                     <!-- Testimonial item -->
                     <div class="flex-card testimonial-card light-raised padding-20">
                        <div class="testimonial-title">
                           Murah Sekali !
                        </div>
                        <div class="testimonial-text">
                           Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte. Vis mutat altera percipit ad.
                        </div>
                        <div class="user-id">
                           <img class="" src="https://place-hold.it/250x250" alt="">
                           <div class="info">
                              <div class="name clean-text">Misbahudin</div>
                              <div class="position">Mahasiswa</div>
                           </div>
                        </div>
                     </div>
                     <!-- Testimonial item -->
                     <div class="flex-card testimonial-card light-raised padding-20">
                        <div class="testimonial-title">
                           Respon Cepat !
                        </div>
                        <div class="testimonial-text">
                           Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte. Vis mutat altera percipit ad.
                        </div>
                        <div class="user-id">
                           <img class="" src="https://place-hold.it/250x250" alt="">
                           <div class="info">
                              <div class="name clean-text">Pu'ita Purnama</div>
                              <div class="position">Pekerja Kantoran</div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="column is-6">
                     <!-- Testimonial item -->
                     <div class="flex-card testimonial-card light-raised padding-20">
                        <div class="testimonial-title">
                           Ramah sekali pelayanannya
                        </div>
                        <div class="testimonial-text">
                           Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte. Vis mutat altera percipit ad.
                        </div>
                        <div class="user-id">
                           <img class="" src="https://place-hold.it/250x250" alt="">
                           <div class="info">
                              <div class="name clean-text">Muh. Marsudito</div>
                              <div class="position">UI UX</div>
                           </div>
                        </div>
                     </div>
                     <!-- Testimonial item -->
                     <div class="flex-card testimonial-card light-raised padding-20">
                        <div class="testimonial-title">
                           Tidak Ribet dan mantap
                        </div>
                        <div class="testimonial-text">
                           Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire incorrupte. Vis mutat altera percipit ad.
                        </div>
                        <div class="user-id">
                           <img class="" src="https://place-hold.it/250x250" alt="">
                           <div class="info">
                              <div class="name clean-text">Refly Ilham</div>
                              <div class="position">Graphic Designer</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="column is-hidden-mobile"></div>
         </div>
         <!-- /Testimonials -->
      </div>
   </div>
</section>
<!-- /Testimonials section -->
</div>  