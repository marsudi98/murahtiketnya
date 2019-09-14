<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/favicon.ico" />
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
    <section class="section section-feature-grey">
        <div class="section-title-wrapper has-text-centered">
            <h2 class="title section-title has-text-centered dark-text text-bold">
                Your Booking
            </h2>
        </div>

        <div class="columns is-vcentered">
            <div class="column is-4 is-offset-4">
                <div class="info-block has-text-centered">
                    <i>Isi data diri anda dan review pemesanan anda.</i>
                </div>
            </div>
        </div>

        <!-- 2 columns -->
        <div class="columns">
            <div class="column is-4  is-offset-3 is-flex-mobile">
                <div class="flex-card light-bordered light-raised">
                    <ul class="card-body">
                        <form>
                            <h2 class="title is-4 mb-20">Kontak Pemesan</h2>
                            <div class="columns">
                                <div class="column">
                                    <div class="control">
                                        <label>Full Name</label>
                                        <input class="input is-secondary-focus mt-5" type="text">
                                        <small style="color: #bdbdbd;">As on ID Card/passport/driving license (without degree or special characters)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="control">
                                        <label>Mobile Number</label>
                                        <input class="input is-secondary-focus mt-5" type="text">
                                        <small style="color: #bdbdbd;">e.g. +62812345678</small>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="control">
                                        <label>Email</label>
                                        <input class="input is-secondary-focus mt-5" type="text">
                                        <small style="color: #bdbdbd;">e.g. email@example.com</small>
                                    </div>
                                </div>         
                            </div>

                            <h2 class="title is-4">Data Penumpang</h2>
                            <h2 class="title is-5 mb-20">Penumpang Dewasa 1</h2>
                            <div class="columns">
                                    <div class="column">
                                        <label>Pilih Penumpang</label>
                                        <div class="select is-fullwidth">
                                            <select class="is-hovered">
                                                <option name=""></option>
                                            </select>
                                        </div>
                                    </div>       
                                </div>  
                            <div class="columns">
                                <div class="column">
                                    <label>Title</label>
                                    <div class="select is-fullwidth">
                                        <select class="is-hovered">
                                            <option name="">Mr</option>
                                            <option name="">Mrs</option>
                                            <option name="3">Miss</option>
                                            <option name="4">Ms</option>
                                            <option name="4">Dr</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <label>Jenis Kelamin</label>
                                    <div class="select is-fullwidth">
                                        <select class="is-hovered">
                                            <option name="1">Laki-laki</option>
                                            <option name="2">Perempuan</option>
                                        </select>
                                    </div>  
                                </div>         
                            </div>  
                            <div class="columns">
                                <div class="column">
                                    <div class="control">
                                        <label>Name</label>
                                        <input class="input is-secondary-focus mt-5" type="text">
                                        <small style="color: #bdbdbd;">Tanpa title dan tanda baca</small>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-30">  
                                <button class="button btn-align no-lh raised primary-btn">Submit</button>
                                <button class="button is-link no-lh">Cancel</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>

            <div class="column is-2 is-flex-mobile">
                <div class="flex-card light-bordered light-raised">
                    <ul class="card-body">
                        <form>
                            <h2 class="title is-4 mb-20"><i class="fas fa-plane fa-sm"></i> Surabaya → Jakarta</h2>
                            <div class="columns">
                                <div class="column">
                                    <div class="control">
                                        <label>Full Name</label>
                                        <input class="input is-secondary-focus mt-5" type="text">
                                        <small style="color: #bdbdbd;">As on ID Card/passport/driving license (without degree or special characters)</small>
                                    </div>
                                </div>
                            </div>
                            <div class="columns">
                                <div class="column">
                                    <div class="control">
                                        <label>Mobile Number</label>
                                        <input class="input is-secondary-focus mt-5" type="text">
                                        <small style="color: #bdbdbd;">e.g. +62812345678</small>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="control">
                                        <label>Email</label>
                                        <input class="input is-secondary-focus mt-5" type="text">
                                        <small style="color: #bdbdbd;">e.g. email@example.com</small>
                                    </div>
                                </div>         
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 2 columns -->
    </section>



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
                          <img src="assetss/images/logos/bulkit-logo-green.png" alt="">
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