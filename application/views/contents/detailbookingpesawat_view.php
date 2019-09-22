<div id="wrapper">
    <a id="booking"></a>
    <!--Booking-->
    <section class="section section-feature-grey">
    <div class="section-title-wrapper has-text-centered">
        <h2 class="title section-title has-text-centered dark-text text-bold">
            Detail Booking
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
        <div class="column is-4 is-offset-3 is-flex-mobile">
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <h2 class="title is-5 text-bold mb-20">Data Pemesanan</h2>
                    <hr>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <h2 class="title is-6 mb-20">Tanggal Pemesanan</h2>
                                <p>Senin, 16 September 2019, Jam 10:33:07</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <h2 class="title is-6 mb-20">Pemesanan</h2>
                                <p>Misbahudin</p>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <h2 class="title is-6 mb-20">Email</h2>
                                <p>misbahudin@gmail.com</p>
                            </div>
                        </div>    
                    </div>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <h2 class="title is-6 mb-20">Phone</h2>
                                <p>081755273838</p>
                            </div>
                        </div>    
                    </div>
                </ul>
            </div>
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <h2 class="title is-5 text-bold">Penerbangan Pergi</h2>
                    <hr>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <h2 class="title is-6 mb-20">Jurusan</h2>
                                <p>Surabaya (SUB) - Jakarta (CGK)</p>
                            </div>
                        </div>       
                        <div class="column">
                            <div class="control">
                                <h2 class="title is-6 mb-20">Jam Keberangkatan</h2>
                                <p>05:05</p>
                            </div>
                        </div>
                    </div>  
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <h2 class="title is-6 mb-20">Tanggal Keberangkatan</h2>
                                <p>Rabu, 23 Oktober 2019</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="control">
                                <h2 class="title is-6 mb-20">Maskapai</h2>
                                <p>AirAsia QZ 7681</p>
                            </div>
                        </div>       
                    </div>  
                </ul>
            </div>
        </div>

        
        <div class="column is-3 is-flex-mobile">
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <h2 class="title is-5 text-bold mb-20">Detail Penumpang</h2>
                    <hr>
                      <div class="column is-10 is-offset-1">
                          <table class="table is-striped">
                              <tbody>
                                  <tr>
                                      <th>ID</th>
                                      <th>Name</th>
                                  </tr>
                                  <tr>
                                      <td>1</td>
                                      <td>Michael Hoffman</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                </ul>
            </div>
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <h2 class="title is-5 text-bold mb-20">Kode Pemesanan</h2>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                            <h2 class="title is-6 mb-20">1568604755</h2>
                            </div>
                        </div>
                    </div>
                    <h2 class="title is-5 text-bold mb-20">Total Bayar</h2>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                            <h2 class="title is-6 mb-20">Rp. 671.725,00</h2>
                            </div>
                        </div>
                    </div>
                        <a href="<?=base_url('Booking/konfirmasi')?>" class="button button-cta primary-btn">Konfirmasi Pembayaran</a>
                </ul>
            </div>
        </div>
        
    </div>
    <!-- 2 columns -->
    </section>
</div>