<div id="wrapper">
    <a id="booking"></a>
    <!--Booking-->
    <section class="section section-feature-grey">
    <div class="section-title-wrapper has-text-centered">
        <h2 class="title section-title has-text-centered dark-text text-bold">
            Konfirmasi Pembayaran
        </h2>
    </div>

    <div class="columns is-vcentered">
        <div class="column is-4 is-offset-4">
            <div class="info-block has-text-centered">
                <i>Konfirmasi Pembayaran Anda.</i>
            </div>
        </div>
    </div>

    <!-- 2 columns -->
    <div class="columns">
        <div class="column is-4 is-offset-2 is-flex-mobile">
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <form action="<?=base_url('Booking/detailbooking_pesawat')?>">
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                <h2 class="title is-5 text-bold mb-20">Kode Pemesanan</h2>
                                    <div class="columns">
                                        <div class="column">
                                            <div class="control">
                                            <h2 class="title is-5 mb-20">1568604755</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label>Nama Pengirim</label>
                                    <input class="input is-secondary-focus mt-5" type="text">
                                    <small style="color: #bdbdbd;">*Nama Pengirim Anda</small>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control">
                                    <label>Nominal Transfer</label>
                                    <input class="input is-secondary-focus mt-5" type="text">
                                    <small style="color: #bdbdbd;">*Rp. 1.500.000</small>
                                </div>
                            </div>         
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label>Sudah dibayarkan ke rekening</label>
                                    <div class="select is-fullwidth">
                                        <select class="is-hovered">
                                            <option name="">Bank BCA</option>
                                            <option name="">Bank Mandiri</option>
                                            <option name="">Bank BRI</option>
                                        </select>
                                        <small style="color: #bdbdbd;">*a/n PT. Affan Utama</small>
                                    </div>
                                </div>
                            </div>    
                        </div>

                        <div class="mt-30">  
                            <button class="button btn-align no-lh raised primary-btn">Konfirmasi</button>
                            <button class="button is-link no-lh">Cancel</button>
                        </div>
                </ul>
            </div>
        </div>
        <div class="column is-3 is-flex-mobile">
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <h2 class="title is-5 text-bold mb-20">Time Limit</h2>
                    <hr>
                      <div class="column is-10 is-offset-3">
                         <h2 class="timer is-4" data-minutes-left="180"></h2>
                      </div>
                </ul>
            </div>
        </div>
    </div>
    <!-- 2 columns -->
    </section>
</div>