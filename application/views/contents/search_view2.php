<!--Search2-->
<section class="section is-medium is-skewed-sm">
<?= print_r($data)  or die ?>
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
        
        <div class="columns">
          
          <div class="column is-6">
          <h3 class="title text-bold is-5"><?= '( '.$data['from'].' )' ; ?> →  <?= '( '.$data['to'].' )';  ?> </h3>
            <h3 class="subtitle is-6 pt-10">
              <?php
                $originalDate = $data['tanggal_pergi'];
                $newDate = date("l, d F Y", strtotime($originalDate));
              ?>
              <p class="text-bold" style="color: #757575;"><?= $newDate  ?></p>
              <br/>
              <p class="text-bold" style="font-size: 13px; color: #757575;">1 Dewasa | Ekonomi </p>
            </h3>
          </div>
          <div class="column is-6 mt-40">
              <a id="button_search" class="button button-cta primary-btn is-pulled-right">Ganti Pencarian</a>
          </div>
        </div>

        <div class="columns is-vcentered">
          <div class="column is-10 is-offset-1">
            <div class="flex-card light-bordered light-raised" id="form_search" style="display: none">
                <div class="card-body">
                  <h2 class="title is-4 text-bold mb-20">Cari Tiket Pesawat Terbang</h2>
                  <form action="<?=base_url('Search') ?>"  method="post">
                      <div class="columns mt-20">
                        <div class="column">
                            <div class="control">
                              <div class="select is-fullwidth">
                                <select id="asal" name="from" class="chosen-select" data-placeholder="Project category">
                                  <option label="App category"></option>
                                  <option>Document management</option>
                                  <option>HR management</option>
                                  <option>ERP</option>
                                  <option>Invoicing</option>
                                  <option>Email marketing</option>
                                  <option>CRM</option>
                                  <option disabled>Helpdesk</option>
                                  <option>Corporate chat</option>
                                </select>
                              </div>
                              <!-- <label>Asal</label>
                              <input class="input is-secondary-focus is-medium mt-5" id="asal" name="from" type="text" value="CGK"> -->
                            </div>
                            <div class="control">
                              <label>Tanggal Berangkat</label>
                              <input data-toggle="datepicker" value="2019-12-29" dateFormat="Y-M-D" name="go"  class="input is-secondary-focus is-medium mt-5">
                            </div>
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
                              <label>Berangkat</label>
                              <input class="input is-secondary-focus is-medium mt-5" id="berangkat" name="to" type="text" value="SUB">
                            </div>
                            <div class="control" id="show">
                              <label>Pulang Pergi</label>
                              <input data-toggle="datepicker" id="myInput" class="input is-secondary-focus is-medium mt-5" disabled>
                            </div>
                        </div>
                      </div>
                      <div class="columns">
                        <div class="column">
                            <div class="control">
                              <label>Maskapai</label>
                              <div class="select is-fullwidth">
                                  <select class="is-hovered" name="maskapai">
                                    <option value="CIT">Citilink</option>
                                    <option value="GAR">Garuda</option>
                                    <option value="LIO">Lion</option>
                                    <option value="SRI">Sriwijaya</option>
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
                                    <option  value="1">1</option>
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
                        <button class="button no-lh">Cancel</button>
                      </div>
                  </form>
                </div>
            </div>
          </div>
        </div>

        <!-- pulper tab -->
        <div class="navigation-tabs simple-tabs">
          <div class="tabs is-centered">
              <ul>
                  <li class="is-active" data-tab="tab-c1"><a><span class="icon"><i class="fa fa-plane"></i></span> <span>Penerbangan Pergi</span></a></li>
                  <li data-tab="tab-c2"><a><span class="icon"><i class="fa fa-plane" data-fa-transform="rotate-180"></i></span> <span>Penerbangan Pulang</span></a></li>
              </ul>
          </div>
          <div id="tab-c1" class="navtab-content is-active">
            <!-- pulper wrap1 -->
            
             
            <!-- end pulper wrap2 -->
          </div>
        </div>

        
        <!-- end pulper tab -->
      </div>
    </div>

    </div>
  </div>

    <script type="text/javascript"> 
      var $filterCheckboxes = $('input[type="checkbox"]');
      var filterFunc = function() {
        
        var selectedFilters = {};
        $filterCheckboxes.filter(':checked').each(function() {
          if (!selectedFilters.hasOwnProperty(this.name)) {
            selectedFilters[this.name] = [];
          }
          selectedFilters[this.name].push(this.value);
        });
        // create a collection containing all of the filterable elements
        var $filteredResults = $('.single-toggle-wrapper');
        // loop over the selected filter name -> (array) values pairs
        $.each(selectedFilters, function(name, filterValues) {
          // filter each .animal element
          $filteredResults = $filteredResults.filter(function() {
            var matched = false,
              currentFilterValues = $(this).data('category').split(' ');
            // loop over each category value in the current .animal's data-category
            $.each(currentFilterValues, function(_, currentFilterValue) {
              // if the current category exists in the selected filters array
              // set matched to true, and stop looping. as we're ORing in each
              // set of filters, we only need to match once
              if ($.inArray(currentFilterValue, filterValues) != -1) {
                matched = true;
                return false;
              }
            });
            // if matched is true the current .animal element is returned
            return matched;
          });
        });
        $('.single-toggle-wrapper').hide().filter($filteredResults).show();
      }
      $filterCheckboxes.on('change', filterFunc);  
    </script>


</section>