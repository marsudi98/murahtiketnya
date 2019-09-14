<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favicon.ico" />
    <title>Murah Tiketnya - Beli Tiket Murah Ya Disini Tempatnya.</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/core_green.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/easyAutocomplete/easy-autocomplete.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick-carousel/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/ggpopover/ggtooltip.css">
    <!-- Icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="css/icons.min.css">
</head>
    <body>
      <!-- Page Loader -->
      <div class="pageloader"></div>
      <div class="infraloader is-active"></div>
      <!-- Hero (Parallax) and nav -->
      <div class="hero parallax is-cover is-relative is-default is-bold" data-background="https://images.unsplash.com/photo-1520779708000-dfd7d8f7f9d6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=626&q=80" data-color="#66bb6a" data-color-opacity="0.93">
        <div class="navbar-wrapper navbar-fade navbar-light">
            <div class="hero-head">
            <!-- Nav -->
            <div class="container">
                <nav class="nav">
                    <div class="container big">
                        <div class="nav-left" style="overflow: visible;">
                            <a class="nav-item" href="#" target="_blank">
                                <img class="light-logo" src="<?php echo base_url() ?>assets/images/logos/bulkit-w.png" alt="Logo">
                            </a>
                            <a href="#home" class="nav-item is-tab nav-inner is-not-mobile">Home</a>
                            <a href="#booking" class="nav-item is-tab nav-inner is-not-mobile">Booking</a>
                            <a href="#adventage" class="nav-item is-tab nav-inner is-not-mobile">Adventage</a>
                            <a href="#jadwal" class="nav-item is-tab nav-inner is-not-mobile">Jadwal</a>
                            <a href="#testimoni" class="nav-item is-tab nav-inner is-not-mobile">Testimoni</a>
                        </div>
                        <!-- Responsive toggle -->
                        <span class="nav-toggle">
                                <span></span>
                                <span></span>
                                <span></span>
                        </span>
                        <div class="nav-right nav-menu">
                            <a href="#home" class="nav-item is-tab nav-inner is-menu-mobile">Home</a>
                            <a href="#booking" class="nav-item is-tab nav-inner is-menu-mobile">Booking</a>
                            <a href="#adventage" class="nav-item is-tab nav-inner is-menu-mobile">Adventage</a>
                            <a href="#jadwal" class="nav-item is-tab nav-inner is-menu-mobile">Destinasi</a>
                            <a href="#testimoni" class="nav-item is-tab nav-inner is-menu-mobile">Testimoni</a>
                            <!-- <span class="nav-item">
                                 <a href="signup.html"><div id="signup-btn" class="button button-cta btn-align btn-outlined is-bold light-btn centered">Join Distributor </div></a>
                            </span> -->
                         </div>
                    </div>
                </nav>
            </div>
            <!--/Nav-->
        </div>
    </div>

    <!-- Hero image -->
            <div id="home" class="hero-body is-clean">
                <div class="container has-text-centered">
                    <div class="columns is-vcentered">
                        <div class="column is-5 caption-column has-text-left">
                            <h1 class="clean-title light-text">
                                Murah Tiketnya.
                            </h1>
                            <div class="subtitle is-5 light-text no-margin">
                                Beli tiket murah, ya disini tempatnya !!
                            </div>
                            <div class="cta-wrapper has-text-left">
                                <a href="#product" class="button button-cta btn-align btn-outlined is-bold light-btn">
                                    Get Started
                                </a>
                            </div>
                        </div>
                        <div class="column is-9 is-offset-1">
                            <figure class="image is-3by2">
                                <img class="clean-hero-mockup mt-80 z-index-2" src="<?php echo base_url() ?>assets/img/macbook-app.png" alt="">
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /Hero image -->
    </div>
    <!-- /Hero and nav -->

    <a id="booking"></a>
    <!--Booking-->
    <section class="section section-feature-grey is-medium">
        <div class="section-title-wrapper has-text-centered">
            <h2 class="title section-title has-text-centered dark-text text-bold">
                Booking Tiket
            </h2>
        </div>

        <div class="columns is-vcentered">
            <div class="column is-4 is-offset-4">
                <div class="info-block has-text-centered">
                    <i>Cari tiket keberangkatan kereta anda.</i>
                </div>
            </div>
        </div>

        <!-- 2 columns -->
        <div class="columns is-vcentered">
            <div class="column is-6 is-offset-3 is-flex-mobile">
                <div class="flex-card light-bordered light-raised">
                    <ul class="card-body">
                        <h2 class="title is-4 mb-20">Cari Keberangkatan Anda.</h2>
                         <form>
                                <div class="columns mt-50">
                                    <div class="column">
                                        <div class="control">
                                            <label>Asal Keberangkatan</label>
                                            <input class="input is-secondary-focus mt-5" type="text">
                                        </div>
                                        <div class="field mb-20">
                                            <div class="control">
                                              <label>Tanggal Berangkat</label>
                                                <input type="date" class="input is-secondary-focus mt-5">
                                            </div>
                                        </div>
																		</div>
																		
                                    <div class="column">
                                        <div class="control">
                                            <label>Tujuan Keberangkatan</label>
                                            <input class="input is-secondary-focus mt-5" type="text">
																				</div>
																				<div class="control">
																						<label class="checkbox-wrap is-medium" style="line-height: 6;">
																								<input id="myCheck" type="checkbox" class="d-checkbox" onclick="myFunction()">
																								<span></span>
																								Tiket Pulang Pergi
																						</label>
																				</div>
                                    </div>
																	</div>

																	<div class="columns">
																		<div class="column">
																				<div class="control" id="show" style="display: none;">
                                            <label>Pulang Pergi</label>
                                            <input type="date" class="input is-secondary-focus mt-5">
																				</div>
																		</div>
																	</div>
																	
                                  <div class="columns">
                                      <div class="column">
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

                                  <div class="columns">
                                      <div class="column">
                                        <label>Bayi</label>
                                         <div class="select is-fullwidth">
                                          <select class="is-hovered">
                                              <option value="0">0</option>
                                              <option name="1">1</option>
                                          </select>
                                          </div>
                                          <small style="color: #bdbdbd;">3 tahun ke bawah*</small>
                                      </div>
                                  </div>
                                    

                                <div class="mt-30">  
                                    <button class="button btn-align no-lh raised primary-btn">Submit</button>
                                    <button class="button is-link no-lh">Cancel</button>
                                </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2 columns -->
        </section>
</div>

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
                        <img src="<?php echo base_url() ?>assets/img/3-people.jpg" alt="">
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
                        <img src="<?php echo base_url() ?>assets/img/4-people.jpg" alt="">
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
                <div class="clean-bg-symbol"><i class="fas fa-train    "></i></div>
                    <div>
                        <h2 class="clean-section-title">Jadwal.</h2>
                        <h3 class="subtitle is-5 pt-10">
                           Jadwal Keberangkatan Kereta hari ini.
                        </h3>
                    </div>
            </div>
            <div class="columns is-vcentered pt-30">
                <!-- Demo section -->
                <div class="column is-10 is-offset-1">
                    <table class="responsive-table is-primary mb-40">
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
                                    <img src="<?php echo base_url() ?>assets/img/icons/fast-delivery.svg" alt="Respond Cepat">
                                </div>
                                <div class="has-text-centered mt-20">
                                    <span class="clean-text">Respond Cepat</span>
                                </div>
                        </div>
                        <!--Floating Icons-->
                        <div class="column is-4">
                                <div class="floating-circle levitate is-icon-reveal">
                                    <img src="<?php echo base_url() ?>assets/img/icons/price-tag.svg" alt="Harga Terjangkau">
                                </div>
                                <div class="has-text-centered mt-20">
                                    <span class="clean-text">Biaya Terjangkau</span>
                                </div>
                        </div>
                        <!--Floating Icons-->
                        <div class="column is-4">
                                <div class="floating-circle levitate is-icon-reveal">
                                    <img src="<?php echo base_url() ?>assets/img/icons/shield.svg" alt="Barang Aman Sampai Tujuan">
                                </div>
                                <div class="has-text-centered mt-20">
                                    <span class="clean-text">Barang Aman Sampai Tujuan</span>
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

    <!--Footer-->
   <footer class="footer footer-light">
      <div class="container">
          <div class="columns footer-columns is-flex-mobile">
              <div class="column is-half-mobile">
                  <div class="footer-column">
                      <div class="footer-header">
                          <h3>Product</h3>
                      </div>
                      <ul class="link-list">
                          <li><a href="">Kereta Api</a></li>
                          <li><a href="">Pesawat</a></li>
                          <li><a href="">Hotel</a></li>
                          <li><a href="">Pelni</a></li>
                      </ul>
                  </div>
              </div>
              <div class="column is-half-mobile">
                  <div class="footer-column">
                      <div class="footer-header">
                          <h3>Company</h3>
                      </div>
                      <ul class="link-list">
                          <li><a href="http://deliv.co.id/bantuan"> Help Center</a></li>
                          <li><a href="http://deliv.co.id/bantuan/privasi">Privacy policy</a></li>
                          <li><a href="http://deliv.co.id/bantuan/layanan">Terms of service</a></li>
                      </ul>
                  </div>
              </div>
              <div class="column is-half-mobile">
                  <div class="footer-column">
                      <div class="footer-header">
                          <h3>Learning</h3>
                      </div>
                      <ul class="link-list">
                          <li><a href="">Resources</a></li>
                          <li><a href="http://blog.deliv.co.id">Blog</a></li>
                          <li><a href="#">FAQ</a></li>
                      </ul></div>
                  </div>
              <div class="column is-half-mobile">
                  <div class="footer-column">
                      <div class="footer-logo">
                          <img src="assets/images/logos/bulkit-logo-green.png" alt="">
                      </div>
                      <div class="footer-header"><nav class="level is-mobile">
                          <div class="level-left level-social">
                              <a class="level-item" href="https://www.facebook.com/">
                                  <span class="icon"><i class="fab fa-facebook"></i></span>
                              </a>
                              <a class="level-item" href="https://www.instagram.com/">
                                  <span class="icon"><i class="fab fa-instagram"></i></span>
                              </a>
                              <a class="level-item" href="https://www.linkedin.com/">
                                  <span class="icon"><i class="fab fa-linkedin"></i></span>
                              </a>
                              <a class="level-item" href="#"></a>
                          </div>
                      </nav>
                  </div>
                  <div class="copyright"><span class="moto">Copyright © 2019 by Murah Tiketnya</span></div>
              </div>
          </div>
      </div>
  </div>
</footer>

<div id="backtotop"><a href="#"></a></div>
			<script>
				function myFunction() {
					var checkBox = document.getElementById("myCheck");
					var show = document.getElementById("show");
					if (checkBox.checked == true){
						show.style.display = "block";
					} else {
						show.style.display = "none";
					}
				}
			</script>

      <!-- Core js -->
      <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/core/modernizr.min.js"></script>
      <!-- Plugins js -->
      <script src="<?php echo base_url() ?>assets/js/slick-carousel/slick.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/ggpopover/ggtooltip.js"></script>
      <script src="<?php echo base_url() ?>assets/js/scrollreveal/scrollreveal.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/datepicker/datepicker.min.js"></script>
      <script src="<?php echo base_url() ?>assets/js/easyAutocomplete/jquery.easy-autocomplete.min.js"></script>
      <!-- Bulkit js -->
      <script src="<?php echo base_url() ?>assets/js/main.js"></script>
      <!-- Page specific JS -->
      <script src="<?php echo base_url() ?>assets/js/pages/landingv1.js"></script>
    </body>
</html>