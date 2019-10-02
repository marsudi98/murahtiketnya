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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/easy-autocomplete.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick-carousel/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/datepicker/datepicker.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/easyAutocomplete/easy-autocomplete.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/slick-carousel/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/ggpopover/ggtooltip.css">
    <!-- Icons -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/icons.min.css">
    <style>
        .jst-hours {
            float: left;
            font-size: 40px;
        }
        .jst-minutes {
            float: left;
            font-size: 40px;
        }
        .jst-seconds {
            float: left;
            font-size: 40px;
        }
        .jst-clearDiv {
            clear: both;
        }

        .bodyTimeoutBackground {
         background: white;
        }

        .timeout {
            color: red;
            -webkit-animation-name: blinker;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: cubic-bezier(1.0,0,0,1.0);
            -webkit-animation-duration: 1s;
            }
            @-webkit-keyframes blinker {
            from { opacity: 1.0; }
            to { opacity: 0.0; }
        }
    </style>
    <!-- Javascript -->
    <script src="<?php echo base_url() ?>assets/js/core/jquery.min.js"></script>
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
                            <span class="nav-item">
                                <a href="<?=base_url('KodePembayaran')?>"><div class="button button-cta btn-align is-bold light-btn centered">Kode Pembayaran </div></a>
                            </span>
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

    <!-- Content -->
    <?php $this->load->view('contents/'.$contents); ?>

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
                            <li><a href="">Help Center</a></li>
                            <li><a href="">Privacy policy</a></li>
                            <li><a href="">Terms of service</a></li>
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
                            <li><a href="">Blog</a></li>
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
    </footer>

    <div id="backtotop"><a href="#"></a></div>
    <script>
        function myKereta() {
            var checkBox = document.getElementById("myCheck");
            var show = document.getElementById("show");
            if (checkBox.checked == true){
                show.style.display = "block";
            } else {
                show.style.display = "none";
            }
        }

        function myPesawat() {
            var checkBox = document.getElementById("myPswt");
            var showPswt = document.getElementById("showPswt");
            if (checkBox.checked == true){
                showPswt.style.display = "block";
            } else {
                showPswt.style.display = "none";
            }
        }

        function swapValues(){
            var tmp = document.getElementById("asal").value;
            document.getElementById("asal").value = document.getElementById("berangkat").value;
            document.getElementById("berangkat").value = tmp;     
        }

        function swapPesawat(){
            var tmp = document.getElementById("asalPesawat").value;
            document.getElementById("asalPesawat").value = document.getElementById("berangkatPesawat").value;
            document.getElementById("berangkatPesawat").value = tmp;     
        }

        $(document).ready(function() {
            $("#button_search").click(function() {
                $("#form_search").toggle();
            });
        });

        $(function(){
            $('.timer').startTimer();
        });

        $(document).ready(function() {
			var options = {
				url: "assets/js/asalberangkatpesawat.json",

				categories: [{
					listLocation: "cengkareng",
					header: "Jakarta - Cengkareng"
				}, {
					listLocation: "halim",
					header: "Jakarta - Halim"
			    }, {
					listLocation: "malang",
					header: "Malang"
			    }]

			};

			$("#asal").easyAutocomplete(options);
		});

        $(document).ready(function() {
			var options = {
				url: "assets/js/asalberangkatpesawat.json",

				categories: [{
					listLocation: "cengkareng",
					header: "Jakarta - Cengkareng"
				}, {
					listLocation: "halim",
					header: "Jakarta - Halim"
			    }, {
					listLocation: "malang",
					header: "Malang"
			    }]

			};

			$("#berangkat").easyAutocomplete(options);
		});

    </script>



    <!-- Core js -->
    <script src="<?php echo base_url() ?>assets/js/core/modernizr.min.js"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url() ?>assets/js/slick-carousel/slick.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ggpopover/ggtooltip.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/datepicker/datepicker.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/easyAutocomplete/jquery.easy-autocomplete.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.simple.timer.js"></script>
    <!-- Bulkit js -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <!-- Page specific JS -->
    <script src="<?php echo base_url() ?>assets/js/pages/landingv1.js"></script>
</body>
</html>