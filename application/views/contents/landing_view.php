<div id="wrapper">
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
</div>