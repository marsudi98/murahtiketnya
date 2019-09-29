<div id="wrapper">
    <a id="booking"></a>
    <!--Booking-->
    <section class="section section-feature-grey">

    <!-- steps progress -->
    <ul class="steps is-narrow is-medium is-centered has-content-centered mt-60">
      <li class="steps-segment is-active has-gaps">
        <a href="#" class="has-text-dark">
          <span class="steps-marker">
            <i class="fas fa-plane fa-sm"></i>
          </span>
          <div class="steps-content">
            <p class="heading">Booking</p>
          </div>
        </a>
      </li>
      <li class="steps-segment has-gaps">
        <span class="steps-marker">
        <i class="fas fa-plane fa-sm"></i>
        </span>
        <div class="steps-content">
        <p class="heading">Detail</p>
        </div>
      </li>
      <li class="steps-segment has-gaps">
        <span class="steps-marker">
            <i class="fas fa-plane fa-sm"></i>
        </span>
        <div class="steps-content">
        <p class="heading">Confirmation</p>
        </div>
      </li>
      <li class="steps-segment">
        <span class="steps-marker">
            <i class="fas fa-plane fa-sm"></i>
        </span>
        <div class="steps-content">
          <p class="heading">Confirmation</p>
        </div>
      </li>
    </ul>
    <!-- end of steps progress -->

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
        <div class="column is-4 is-offset-3 is-flex-mobile">
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <form action="<?=base_url('DetailBooking_pesawat')?>">
                        <h2 class="title is-4 mb-20">Kontak Pemesan</h2>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label>Full Name</label>
                                    <input class="input is-secondary-focus mt-5" type="text" required>
                                    <small style="color: #bdbdbd;">As on ID Card/passport/driving license (without degree or special characters)</small>
                                </div>
                            </div>
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label>Mobile Number</label>
                                    <input class="input is-secondary-focus mt-5" type="text" required>
                                    <small style="color: #bdbdbd;">e.g. +62812345678</small>
                                </div>
                            </div>
                            <div class="column">
                                <div class="control">
                                    <label>Email</label>
                                    <input class="input is-secondary-focus mt-5" type="text" required>
                                    <small style="color: #bdbdbd;">e.g. email@example.com</small>
                                </div>
                            </div>         
                        </div>
                        <div class="columns">
                            <div class="column">
                                <div class="control">
                                    <label>Asuransi *)</label>
                                    <div class="select is-fullwidth">
                                        <select class="is-hovered" required>
                                            <option name="">Tidak, Terima Kasih</option>
                                            <option name="">Ya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>    
                        </div>
                </ul>
            </div>
            <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
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
                                <select class="is-hovered" required>
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
                                <select class="is-hovered" required>
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
                                <input class="input is-secondary-focus mt-5" type="text" required>
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
                    <h2 class="title is-4 mb-20">Flight Details</h2>
                    <div class="columns">
                        <div class="column">
                            <div class="control">
                                <label>Surabaya <i class="fas fa-plane fa-sm"></i> Jakarta</label>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <!-- <div class="column">
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
                        </div>          -->
                    </div>
                </ul>
            </div>
            <!-- <div class="flex-card light-bordered light-raised">
                <ul class="card-body">
                    <form>
                        <h2 class="title is-4 mb-20">Price Details</h2>
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
            </div> -->
        </div>
        
    </div>
    <!-- 2 columns -->
    </section>
</div>