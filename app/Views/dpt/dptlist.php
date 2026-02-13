<?= $this->extend('layouts/app') ?>

<?php $request = $request ?? \Config\Services::request(); ?>

<?= $this->section('styles') ?>
<style>
  .milesbox {
    height: 350px;
    overflow: hidden;
  }

  .milesran {
    overflow: auto;
    height: 250px
  }

  .waiting-body {
    overflow: auto;
    height: 250px;
  }

  .weight-box {
    height: 350px;
    overflow: hidden;
  }

  .county-div {
    overflow: auto;
    height: 260px;
  }

  .waiting-box {
    height: 350px;
    /* overflow: hidden; */
  }

  .weight-ran {

    overflow: auto;
    height: 260px;
  }

  .county-box {
    height: 260px;
    overflow: hidden;
  }

  .waves-float {

    display: inline-block;
    font-weight: 400;
    color: #6e6b7b;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    background-color: transparent;
    border: 1px solid transparent;
    /* padding: 0.786rem 1.5rem; */
    padding: 8px;

    width: 51px;
    /* font-size: 0rem; */
    font-size: 12px;
    line-height: 1;
    border-radius: 0.358rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border 0s;
  }

  /* .col-md-12{
    box-shadow: 0 1px 3px rgb(255 249 249 / 96%), 0 1px 2px rgb(255 254 254 / 24%);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    background: #fff;
  } */

  .form-control {
    background: #f0effc;
    border-color: #7367f014;
    color: #353535;
    height: 32px;
  }

  .form_heading2 {
    font-size: 11px;
  }

  .toggle-form-group {
    display: flex;
    justify-content: center;
    margin-top: 23px;
    border-bottom: 1px solid #8080802e;
    width: 100%;
    padding: 12px;
  }

  .second-text-filed {
    display: flex !important;
    justify-content: space-between;
    align-items: center;

  }

  .myform-input {
    width: 140px;
  }

  .col-md-12 {
    padding: 0px;
  }

  /* .input2 {
    height: 27px;
  } */


  .card-body {

    /* border: 2px solid black; */
    /* padding: 0.5rem; */
  }

  .switch {
    display: inline-block;
    height: 23px;
    position: relative;
    width: 48px;
    margin: 0;
    margin-right: 5px;
  }

  .switch input {
    display: none;
  }

  .slider {
    background-color: #ccc;
    bottom: 0;
    cursor: pointer;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transition: .4s;
  }

  .slider:before {
    background-color: #fff;
    bottom: 4px;
    content: "";
    height: 15px;
    left: 4px;
    position: absolute;
    transition: .4s;
    width: 15px;
  }

  input:checked+.slider {
    background-color: #66bb6a;
  }

  input:checked+.slider:before {
    transform: translateX(26px);
  }

  .slider.round {
    border-radius: 34px;
  }

  .slider.round:before {
    border-radius: 50%;
  }

  .invoice-printout .card {
    min-height: 350px;
  }

  .common-row {
    border: 1px solid #8080802e;
    margin: 15px;

    margin-bottom: 30px;
  }

  .common-row .col-md-6 {
    border-right: 1px solid #8080802e;
  }

  .text-filed {
    height: 30px;
    display: flex !important;
    justify-content: space-between;
    align-items: center;
  }

  .toggle-btn {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .t-text-wrap {
    display: flex;
    align-items: center;
    margin: 20px 2px;
    padding-bottom: 30px;
  }

  .v-input {
    padding: 2px;

  }

  .v-input span {
    width: 50%;
  }

  .invoice-printout h4 b {
    margin-left: 15px;
  }

  .cpt-box1 {
    padding: 30px 0px 30px 30px;
    max-width: 450px;
    margin: 0 auto;
  }

  .cpt-box2 {
    padding: 30px 30px 30px 0px;
    max-width: 450px;
    margin: 0 auto;
  }

  .t-text-wrap2 {
    margin: 101px 2px;
    display: flex;
  }

  /* .row1{
    height: 340px !important;
    overflow: scroll;
  } */

  .form_heading {
    font-size: 12px;
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section name="invoice-printout" class="invoice-printout">
        
          <div class="row">
            <!-- LEFT SIDE -->
            <div class="col-md-6">
              <div class="row cpt-box1 general-info">
                <div class="col-md-12">
                  <div class="">

                    <div class="card-body" style="border: 1px solid #8080802e;">

                      <div class="row">
                        <div class="col-sm-12 col-12 mt-1">

                          <div class="row">
                            <div class="col-md-5">

                              <input type="hidden" name="dpt_id" id="dpt_id" value="<?= isset($dptrecord_data['id']) ? $dptrecord_data['id']:''; ?>">
                              <label for="valid-state"><b>DPT Name  :</b> <span style="color:red">*</span></label>

                       

                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                              <input type="text" class="form-control" name="dpt_name" value="<?= isset($dptrecord_data['name']) ? $dptrecord_data['name']:'' ; ?>" placeholder="">
                            </div>
                          </div>
                        </div>

                        <div class="col-sm-12 col-12 mt-1">

                          <div class="row">
                            <div class="col-md-5">
                              <label for="valid-state"><b>Description :</b> <span style="color:red">*</span></label>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                              <input type="text" class="form-control " name="dpt_description" value="<?= isset($dptrecord_data['description']) ? $dptrecord_data['description']:'' ?>" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

    
    


            
            <div class=" col-md-6">
              <div class="row cpt-box2">
                <div class="col-md-12">
                  <div class="">

                    <div class="card-body" style="border: 1px solid #8080802e;">
                      <div class="row">

                        <div class="col-sm-12 col-12 mt-1">

                          <div class="row">
                            <div class="col-md-5">
                              <label for="valid-state"><b>copy Dpt Form:</b> <span style="color:red">*</span></label>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5">
                              <select class="form-control" onchange="GetUserRecord(this.value)" name="startup">
                                <?php foreach ($dpt_recordsdata as $data) {
                                ?>
                                  <option value="<?= $data['id'] ?>" <?= ($data['id'] == $dpt_id) ? 'selected' : '' ?>>
                                    <?= $data['name'] ?>
                                  </option>

                                <?php } ?>

                              </select>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="form-group">

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


          <div class="col-md-12">
            <div class="">
              <h4 class=""><b>Miles/Base:</b></h4>
            </div>
            <div class="row common-row milesbox">
              <!-- LEFT SIDE -->
              <div class="col-md-6">
                <div class="row general-info">
                  <div class="col-md-12">
                    <div class="">
                      <div class="form-group toggle-form-group">
                        <label for="valid-state" class="toggle-btn"><b>ByFormula</b><span style="color:red">*</span></label>
                        <label class="switch" for="miles_formula">
                          <input type="checkbox" <?= $dptrecord_data['miles_for'] == '1' ? 'checked' : '' ?> id="miles_formula" name="miles_formula" />
                          <div class="slider round"></div>
                        </label>
                      </div>
                      <div class="card-body">

                        <div class="row mt-5">
                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(A). Minimum Miles Base:</b>
                                  <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="min_miles_base" placeholder="" value="<?= isset($milesfor['min_miles']) ? $milesfor['min_miles'] : '' ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(B). Minimum Charges:</b>
                                  <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control " name="min_charges" placeholder="" value="<?= isset($milesfor['min_charges']) ? $milesfor['min_charges'] : '' ?>">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(C). Per Miles Charges::</b>
                                  <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control " name="per_mile_charge" placeholder="" value="<?= isset($milesfor['per_charges']) ? $milesfor['per_charges'] : ''  ?>">
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <!-- RIGHT SIDE -->
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="text-center">
                      <form id="milesranform" method="post" enctype="multipart/form-data">
                      <div class="form-group toggle-form-group">
                        <label for="valid-state" class="toggle-btn"><b>By Range</b><span style="color:red">*</span></label>
                        <label class="switch" for="miles_range">
                          <input type="checkbox" id="miles_range" <?= $dptrecord_data['miles_ran'] == '1' ? 'checked' : '' ?> name="miles_range" />
                          <div class="slider round"></div>
                        </label>
                      </div>

                      <div class="card-body milesran">
                          <div class="row-milesran">
                            <?php foreach ($milesran as $milesRan) { ?>
                              <div class="row">
                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" value="<?= $milesRan['from1'] ?>" id="miles_from" name="miles_from[]">
                                    <input type="hidden" class="form-control" value="<?= $milesRan['id'] ?>" id="miles_from" name="milesran_id[]">
                                  </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="invalid-state"><b>To:</b></label>
                                    <input type="text" class="form-control" value="<?= $milesRan['to1'] ?>" id="miles_to" name="miles_to[]">
                                  </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="invalid-state"><b>Charges</b></label>
                                    <input type="text" class="form-control" value="<?= $milesRan['value1'] ?>" id="miles_charges" name="miles_base_charge[]">
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                            <div class="row">
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                  <input type="text" class="form-control" id="miles_from_new" name="miles_from[]">
                                </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="invalid-state"><b>To:</b></label>
                                  <input type="text" class="form-control" id="miles_to_new" name="miles_to[]">
                                </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="invalid-state"><b>Charges</b></label>
                                  <input type="text" class="form-control" id="miles_charges_new" name="miles_base_charge[]">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-12" >
                            <div class="form-group">
                              <button class="btn btn-primary waves-effect waves-float waves-light milesranbtn" type="submit" style="margin-top: 23px;">Save</button>
                            </div>
                          </div>
                   
                      </div>
                     </form>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        


          <div class="col-md-12">
            <div class="">
              <h4 class=""><b>Weight:</b></h4>
            </div>
            <div class="row common-row  weight-box">
              <!-- LEFT SIDE -->
              <div class="col-md-6">
                <div class="row general-info">
                  <div class="col-md-12">
                    <div class="text-center">
                      <div class="form-group toggle-form-group">
                        <label for="valid-state" class="toggle-btn"><b>ByFormula</b><span style="color:red">*</span></label>
                        <label class="switch" for="weight_byformula">
                          <input type="checkbox" <?= $dptrecord_data['weight_for'] == '1' ? 'checked' : '' ?> id="weight_byformula" name="weight_byformula" />
                          <div class="slider round"></div>
                        </label>
                      </div>
                      <div class="card-body">

                        <div class="row">
                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(A).Minimum Weight:</b>
                                  <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control weightfor" value="<?= isset($weightfor['min_weight']) ? $weightfor['min_weight'] : '' ?>" name="min_weight" placeholder="">
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(B).Minimum Charges:</b>
                                  <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control weightfor" value="<?= isset($weightfor['min_charges']) ? $weightfor['min_charges'] : '' ?>" name="minweight_charge" placeholder="">
                              </div>
                            </div>



                          </div>
                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(C).Per Weight Charges: (for
                                    one LBS)</b> <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control weightfor " value="<?= isset($weightfor['per_charges']) ? $weightfor['per_charges'] : '' ?>" name="per_weight_charge" placeholder="">
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- RIGHT SIDE -->
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <form id="userweightingform" method="POST" enctype="multipart/form-data">
                        <div class="form-group toggle-form-group">
                          <label for="valid-state" class="toggle-btn"><b>By Range</b><span style="color:red">*</span></label>
                          <label class="switch" for="weight_byrange">
                            <input type="checkbox" id="weight_byrange" <?= $dptrecord_data['weight_ran'] == '1' ? 'checked' : '' ?>  name="weight_byrange" />
                            <div class="slider round"></div>
                          </label>
                        </div>
                      </div>
                      <div class="card-body weight-ran ">
                        
                          <div class="commom-row ">
                            <?php foreach ($weightran as $waitrecord) { ?>
                              <div class="row">
                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" value="<?= $waitrecord['from1'] ?>" id="weight_from" name="weight_form[]">
                                    <input type="hidden" class="form-control" value="<?= $waitrecord['id'] ?> " id="weightranid" name="weightranid[]">
                                  </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="invalid-state"><b>To:</b></label>
                                    <input type="text" class="form-control" value="<?= $waitrecord['to1'] ?>" id="weight_to" name="weight_to[]">
                                  </div>
                                </div>

                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="invalid-state"><b>Charges</b></label>
                                    <input type="text" class="form-control" value="<?= $waitrecord['value1'] ?>" id="weight_charges" name="weight_charge[]">
                                  </div>
                                </div>
                              </div>
                            <?php } ?>


                            <div class="row">

                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                  <input type="text" class="form-control" id="weight_from" name="weight_form[]">

                                </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="invalid-state"><b>To:</b></label>
                                  <input type="text" class="form-control" id="weight_to" name="weight_to[]">
                                </div>
                              </div>

                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="invalid-state"><b>Charges</b></label>
                                  <input type="text" class="form-control" id="weight_charges" name="weight_charge[]">
                                </div>
                              </div>

                            </div>
                          </div>

                          <div class="col-sm-12 col-12">
                            <div class="form-group">
                              <div class="form-group">
                                <button class="btn btn-primary waves-effect waves-float waves-light weight-btn" type="submit" style="    margin-top: 23px;">save</button>
                              </div>
                            </div>
                          </div>
                        
                      </div>
                     </form>
                </div>
              </div>
            </div>
          </div>

         

          <div class="col-md-12">
            <div class="">
              <h4 class=""><b>Waiting Time:</b></h4>
            </div>
            <div class="row common-row waiting-box">
              <!-- LEFT SIDE -->
              <div class="col-md-6">

                <div class="row general-info">
                  <div class="col-md-12">
                    <div class="">
                      <div class="">
                        <div class="form-group toggle-form-group">
                          <label for="valid-state" class="toggle-btn"><b>By Formula</b><span style="color:red">*</span></label>
                          <label class="switch" for="waiting_byformula">
                            <input type="checkbox" <?= $dptrecord_data['waiting_for'] == '1' ? 'checked' : '' ?> id="waiting_byformula" name="waiting_byformula" />
                            <div class="slider round"></div>
                          </label>
                        </div>
                      </div>
                      <div class="card-body">

                        <div class="row">
                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(A).Minimum W.Time::</b>
                                  <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" value="<?= isset($waitingfor['min_waiting']) ? $waitingfor['min_waiting'] : '' ?>" name="Minimum_w_Time" placeholder="" value="">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(B).Minimum Charges:</b>
                                  <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control " value="<?= isset($waitingfor['min_charges']) ? $waitingfor['min_charges'] : '' ?>" name="min_wei_time_chrage" placeholder="" value="">
                              </div>
                            </div>
                          </div>

                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>(C).Per W.Time Charges:(for
                                    a min.):</b> <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control " value="<?= isset($waitingfor['per_charges']) ? $waitingfor['per_charges'] : ''  ?>" name="per_w_time_Charges" placeholder="" value="">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


              <!-- RIGHT SIDE -->
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="">
                      <form id="userwaitingForm" method="post" enctype="multipart/form-data" action="">
                    

                        <div class="form-group toggle-form-group">
                          <label for="valid-state" class="toggle-btn"><b> By Range</b><span style="color:red">*</span></label>
                          <label class="switch" for="waiting_byrange">
                            <input type="checkbox" id="waiting_byrange" <?= $dptrecord_data['waiting_ran'] == '1' ? 'checked' : '' ?> name="waiting_byrange" />
                            <div class="slider round"></div>
                          </label>
                        </div>

                      
                         <div class="card-body waiting-body">
                       
                          <div class="row-waiting">
                            <?php foreach ($waitingran as $Waitingran) { ?>
                              <div class="row">
                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" value="<?= isset($Waitingran['from1']) ? $Waitingran['from1'] : '' ?>" id="waiting_from" name="waiting_time_form[]">
                                    <input type="hidden" class="form-control" value="<?= $Waitingran['id'] ?>" id="waiting_from" name="waitranid[]">
                                  </div>
                                </div>
                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="invalid-state"><b>To:</b></label>
                                    <input type="text" class="form-control" value="<?= isset($Waitingran['to1']) ? $Waitingran['to1'] : '' ?>" id="waiting_to" name="waiting_time_to[]">
                                  </div>
                                </div>

                                <div class="col-sm-4 col-12">
                                  <div class="form-group">
                                    <label for="invalid-state"><b>Charges</b></label>
                                    <input type="text" class="form-control" id="waiting_charges" value="<?= isset($Waitingran['value1']) ? $Waitingran['value1'] : '' ?>" name="waiting_time_charges[]">
                                  </div>
                                </div>
                              </div>
                            <?php } ?>
                            <div class="row">
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                  <input type="text" class="form-control" id="waiting_from" name="waiting_time_form[]">
                                  <input type="hidden" class="form-control" id="waiting_from" name="waitranid[]">
                                </div>
                              </div>
                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="invalid-state"><b>To:</b></label>
                                  <input type="text" class="form-control" id="waiting_to" name="waiting_time_to[]">
                                </div>
                              </div>

                              <div class="col-sm-4 col-12">
                                <div class="form-group">
                                  <label for="invalid-state"><b>Charges</b></label>
                                  <input type="text" class="form-control" name="waiting_time_charges[]">
                                </div>
                              </div>
                            </div>

                          </div>
                          <div class="col-sm-12 col-12" >
                            <div class="form-group">
                              <div class="form-group">
                                <button class="btn btn-primary waves-effect waves-float waves-light waiting-btn" type="submit" style="    margin-top: 23px;">save</button>
                              </div>
                            </div>
                          </div> 
                          </form>                   
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

   

          <div class="col-md-12">
            <div class="">
              <h4 class=""><b>Misc :</b></h4>
            </div>
            <div class="row common-row">
              <!-- LEFT SIDE -->
              <div class="col-md-6">
                <div class="row general-info">
                  <div class="col-md-12">
                    <div class="" style="min-height: 100px;">
                      <div class="card-body">

                        <div class="row">
                          <div class="col-sm-12 col-12 mt-1">

                            <div class="row">
                              <div class="col-md-5">
                                <label for="valid-state"><b>Fuel Charges %:</b> <span style="color:red">*</span></label>
                              </div>
                              <div class="col-md-2"></div>
                              <div class="col-md-5">
                                <input type="text" class="form-control" name="fuel" placeholder="" value="<?= isset($dptrecord_data['fuel']) ? $dptrecord_data['fuel'] : '' ?>">
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- RIGHT SIDE -->
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-12">
                    <div class="" style="min-height: 117px;">
                      <div class="">

                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="">
              <h4 class=""><b>Weekend / Holiday / Night :</b></h4>
            </div>
            <table width="100%" height="100%" border="1" bordercolor="#e2e2e2" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>

                  <td width="100%" height="122">
                    <table width="100%" height="204" border="0" cellpadding="0" cellspacing="0" bgcolor="#F2F3F4" class="my-3">
                      <tbody>
                        <tr valign="top">
                          <td width="25%" height="175" valign="top">
                            <div align="center">
                              <table width="220" height="216" border="1" cellpadding="0" bordercolor="#e2e2e2" cellspacing="0" bordercolor="#808080">
                                <tbody>
                                  <tr class="">
                                    <td width="220" height="280" align="center" valign="top" bgcolor="">
                                      <div align="center">

                                        <div class="t-text-wrap">
                                          <label class="switch" for="weekend_charges">

                                            <input type="checkbox" id="weekend_charges" name="weekend_charges" <?= $dptrecord_data['is_weekend'] == '1' ? 'checked' : '' ?> />
                                            <div class="slider round"></div>
                                          </label>
                                          <span class="form_heading"><b>
                                              Weekend Charges</b>
                                          </span>
                                        </div>
                                        <table width="200" height="63" bordercolor="#e2e2e2" border="1" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr class="mapping">
                                              <td width="88" height="19">
                                                <div class="d-flex align-items-center py-1" align="center">
                                                  <label class="switch" for="Weekend_fixed">
                                                    <input type="checkbox" id="Weekend_fixed" name="is_weekend_per" <?= $dptrecord_data['is_weekend_per'] == '1' ? 'checked' : '' ?> />
                                                    <div class="slider round"></div>
                                                  </label>
                                                  <span class="form_note2">is_weekend_per<b></b></span>
                                                </div>
                                              </td>
                                            
                                            </tr>
                                            <tr>
                                              <td height="44" colspan="2">
                                                <div class="d-flex align-items-center v-input " align="center">
                                                  <span class="form_heading">Weekend-per:</span>
                                                  <input name="weekend_value" type="text" class="form-control " value="<?= $dptrecord_data['weekend_per'] ?>" id="weekend_value" size="6" maxlength="6" value="">
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                          </td>
                          <td width="25%" valign="top">
                            <div align="center">
                              <table width="200" height="100%" border="1" bordercolor="#e2e2e2" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                <tbody>
                                  <tr class="mapping">
                                    <td width="220" height="280" align="center" valign="top" bgcolor="">
                                      <div align="center">

                                        <div class="t-text-wrap">
                                          <label class="switch" for="holiday">
                                            <input type="checkbox" <?= $dptrecord_data['is_holiday'] == '1' ? 'checked' : '' ?> id="holiday" name="holiday" />
                                            <div class="slider round"></div>
                                          </label>
                                          <span class="form_heading">
                                            <b> Holiday Charges</b>
                                          </span>
                                        </div>
                                        <table width="220" height="63" border="1" bordercolor="#e2e2e2" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr>
                                              <td width="88" height="19">
                                                <div class="d-flex align-items-center py-1" align="center">
                                                  <label class="switch" for="holiday_fixed">
                                                    <input type="checkbox" <?= $dptrecord_data['is_holiday_per'] == '1' ? 'checked' : '' ?> id="holiday_fixed" name="is_holiday_per" />
                                                    <div class="slider round"></div>
                                                  </label>
                                                  <span class="form_note2">is_holiday_per</span>
                                                </div>
                                              </td>
                                              
                                            </tr>
                                            <tr>
                                              <td height="44" colspan="2">
                                                <div class="d-flex align-items-center v-input " align="center">
                                                  <span class="form_heading">holiday-per:</span>
                                                  <input name="holiday_value" value="<?= $dptrecord_data['holiday_per'] ?>" type="text" class="form-control " id="" name="holiday_value" size="6" maxlength="6" value="">
                                                </div>
                                              </td>
                                            </tr>
                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </td>
                          <td width="25%" valign="top">
                            <div align="center">
                              <table width="200" height="212" border="1" bordercolor="#e2e2e2" cellpadding="0" cellspacing="0" bordercolor="#808080">
                                <tbody>
                                  <tr>
                                    <td width="220" height="280" align="center" valign="top" bgcolor="">
                                      <div align="center">

                                        <div class="t-text-wrap">
                                          <label class="switch" for="night_charges">

                                            <input type="checkbox" <?= $dptrecord_data['is_night'] == '1' ? 'checked' : '' ?> id="night_charges" name="night_charges" />


                                            <div class="slider round"></div>
                                          </label>
                                          <span class="form_heading">
                                            <b>Night Charges</b>
                                          </span>
                                        </div>
                                        <table width="220" height="63" border="1" bordercolor="#e2e2e2" cellpadding="0" cellspacing="0">
                                          <tbody>
                                            <tr>
                                              <td width="88" height="19">
                                                <div class="d-flex align-items-center py-1" align="center">
                                                  <label class="switch" for="night_fixed">
                                                    <input type="checkbox" <?= $dptrecord_data['is_night_per'] == '1' ? 'checked' : '' ?> id="night_fixed" name="night_fixed" />
                                                    <div class="slider round"></div>
                                                  </label>
                                                  <span class="form_note2">is_night_per</span>
                                                </div>
                                              </td>
                                              
                                            </tr>
                                            <tr>
                                              <td height="44" colspan="2">
                                              <div class="d-flex  align-items-center v-input " align="center">
                                                  <span class="form_heading2">From Time :</span>
                                                  <input name="night_from2" type="time" class="form-control input2" value="<?= $dptrecord_data['night_from']?>"  id="night_form2" size="6" maxlength="6" value="">
                                                </div>

                                              <div class="d-flex align-items-center v-input " style="border-bottom: 1px solid #e2e2e2" ; padding:6px;" align="center">
                                                  <span class="form_heading2">To Time :</span>
                                                  <input name="night_to" type="time" class="form-control input2 " value="<?= $dptrecord_data['night_to']?>"  id="night_to2" size="6" maxlength="6" value="">
                                                </div>
                                                <div class="d-flex align-items-center v-input " align="center">
                                                  <span class="form_heading2">Night-per:</span>
                                                  <input name="night_value" type="text" class="form-control input2 " value="<?= $dptrecord_data['night_per']?>"  id="night_per" size="6" maxlength="6" value="">
                                                </div>
                                              </td>
                                            </tr>

                                          </tbody>
                                        </table>
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </div>
                          </td>
                          <td width="25%" valign="top">
                            <table width="220" height="212" border="1" bordercolor="#e2e2e2" cellpadding="0" cellspacing="0" bordercolor="#808080">
                              <tbody>
                                <tr>
                                  <td width="220" height="280" align="center" valign="top" bgcolor="">
                                    <table>
                                      <tr class="t-text-wrap">
                                        <td><label class="switch" for="apply">

                                            <input type="checkbox" <?= $dptrecord_data['is_higher'] == '1' ? 'checked' : '' ?> id="apply" name="apply" />


                                            <div class="slider round"></div>
                                          </label></td>
                                        <td class="t-text-wrap"><b>Apply Higher Value
                                            of
                                            [Weekend,
                                            Holiday,
                                            Night]</td></b>
                                      </tr>
                                    </table>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>


 <!---copy and dont copy modal -->
 <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteConfirmationModalLabel">Do you want to copy the form?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary waves-effect waves-light" id="copyFormBtn">Yes, Copy</button>
          <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">Don't Copy</button>


        </div>
      </div>
    </div>
  </div>
  <!--- end of copy and dont copy modal -->




    <div class="row">
      <div class="col-md-12">
        <div class="card mt-5">
          <div class="card-body p-2">
            <div class="row">
              <div class="col-sm-4 col-12">
              </div>
              <div class="col-sm-4 col-12">
                <div class="form-group">
                  <button class="btn btn-primary waves-effect waves-float waves-light submitbtn" type="button" style="width: 100%;height: max-content;margin-top: 22px;">Submit</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    </section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
      $(document).ready(function() {

        disableButton('#miles_range', 'milesranbtn');
        disableButton('#weight_byrange', 'weight-btn');
        disableButton('#waiting_byrange', 'waiting-btn');
        // disableButton('','';)



        <?php
        $search = $request->getPost("search");
        if (isset($search)) {
        ?>
          // $('#basic-datatable').show();
          // $('#searchBox').hide();
        <?php } else { ?>
          // $('#basic-datatable').hide();
        <?php } ?>
      });
      // function showFilters() {
      //     $('#searchBox').show();
      //     $('#filterBtn').hide();
      // }
      $(window).on('load', function() {
        if (feather) {
          feather.replace({
            width: 14,
            height: 14
          });
        }
      });
    </script>

    <script>
      $(document).ready(function() {
        $('#miles_formula').change(function() {

          if ($(this).is(':checked')) {


            $('#miles_range').prop('checked', false);
          }
        });


        $('#miles_range').change(function() {
          if ($(this).is(':checked')) {
            $('#miles_formula').prop('checked', false);
          }
          disableButton('#miles_range', 'milesranbtn')
        });


        $('#miles_formula').change(function() {

          if ($(this).is(':checked')) {


            $('#miles_range').prop('checked', false);
          }
        });





        $('#weight_byrange').change(function() {
          if ($(this).is(':checked')) {
            $('#weight_byformula').prop('checked', false);
          }

          disableButton('#weight_byrange', 'weight-btn')
        });

        $('#waiting_byformula').change(function() {

          if ($(this).is(':checked')) {


            $('#waiting_byrange').prop('checked', false);
          }
        });

        $('#waiting_byrange').change(function() {
          if ($(this).is(':checked')) {
            $('#waiting_byformula').prop('checked', false);
          }
          disableButton('#waiting_byrange', 'waiting-btn')
        });

      });
      // per or fixed service chanrge

      $(document).ready(function() {

        // weekend charge
        $('#Weekend_fixed').change(function() {

          if ($(this).is(':checked')) {


            $('#Weekend_Per').prop('checked', false);
          }
        });

        $('#Weekend_Per').change(function() {
          if ($(this).is(':checked')) {
            $('#Weekend_fixed').prop('checked', false);
          }
        });
        // end weekend charge


        // start holyday

        $('#holiday_fixed').change(function() {

          if ($(this).is(':checked')) {


            $('#holiday_per').prop('checked', false);
          }
        });

        $('#holiday_per').change(function() {
          if ($(this).is(':checked')) {
            $('#holiday_fixed').prop('checked', false);
          }
        });

        // end holiday



        // start night changes


        $('#night_fixed').change(function() {

          if ($(this).is(':checked')) {


            $('#night_per').prop('checked', false);
          }
        });

        $('#night_per').change(function() {
          if ($(this).is(':checked')) {
            $('#night_fixed').prop('checked', false);
          }
        });

      });



      $(document).ready(function() {
        $('.county-btn').on('click', function(event) {

          // alert('hello');
          event.preventDefault();

          // Serialize form data
          var formData = $('#COUNTY_FORM').serialize();
          let cpt_id = $('#cpt_id').val();


          formData += '&cpt_id=' + encodeURIComponent(cpt_id) + '&act=add_county';



          // AJAX request
          $.ajax({
            type: 'POST',
            url: '<?= base_url('insertcpt'); ?>',
            data: formData,
            dataType: 'JSON',
            success: function(response) {
              // Handle success response
              if (response.status === 'success') {
                // Swal.fire({
                //   position: "top-end",
                //   icon: "success",
                //   title: response.message,
                //   showConfirmButton: false,
                //   timer: 1500
                // });
                toastr.success(response.message);

                var html = `
                    <div class="row">
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                <input type="text" class="form-control" value="" id="weight_from" name="county_from[]">
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="invalid-state"><b>To:</b></label>
                                <input type="text" class="form-control" value="" id="weight_to" name="county_to[]">
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="invalid-state"><b>Charges</b></label>
                                <input type="text" class="form-control" value="" id="weight_charges" name="county_charges[]">
                            </div>
                        </div>
                    </div>`;

                $('.row-county').append(html);

              }
            },
            error: function(xhr, status, error) {
              // Handle error response
              console.error(xhr, status, error);
              alert('Form submission failed. Please try again.');
            }
          });
        });
      });





      // miles data by range 

      $('.milesranbtn').on('click', function(event) {
        event.preventDefault();
        // alert('hello');


        var milesformdata = $('#milesranform').serialize();


    
        let dpt_id = $('#dpt_id').val();

        // console.log(milesformdata);
        // return;

        milesformdata += '&dpt_id=' + encodeURIComponent(dpt_id) + '&act=add_milesran';



        // console.log(milesformdata)
        // return;
        $.ajax({
          type: 'POST',
          url: '<?= base_url('insertdpt'); ?>',
          data: milesformdata,
          dataType: 'JSON',
          success: function(response) {

            if (response.status == 'success') {
              // Swal.fire({
              //   position: "top-end",
              //   icon: "success",
              //   title: response.message,
              //   showConfirmButton: false,
              //   timer: 1500
              // });
              toastr.success(response.message);


              var html = `<div class="row">
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control" value="" id="weight_from" name="miles_from[]">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="invalid-state"><b>To:</b></label>
                                    <input type="text" class="form-control" value="" id="weight_to" name="miles_to[]">
                                </div>
                            </div>
                            <div class="col-sm-4 col-12">
                                <div class="form-group">
                                    <label for="invalid-state"><b>Charges</b></label>
                                    <input type="text" class="form-control" value="" id="weight_charges" name="miles_base_charge[]">
                                </div>
                            </div>
                        </div>`;

              $('.row-milesran').append(html);

            }
          },
          error: function(xhr, status, error) {

            console.error(xhr, status, error);
            alert('Form submission failed. Please try again.');
          }
        });
      })

      // miles data by range end 


      // weight data by range 


      $('.weight-btn').on('click', function(event) {

        event.preventDefault();


        var weightformdata = $('#userweightingform').serialize();
        let dpt_id = $('#dpt_id').val();


        weightformdata += '&dpt_id=' + encodeURIComponent(dpt_id) + '&act=add_weight';




        $.ajax({
          type: 'POST',
          url: '<?= base_url('insertdpt'); ?>',
          data: weightformdata,
          dataType: 'JSON',
          success: function(response) {

            if (response.status == 'success') {
              // Swal.fire({
              //   position: "top-end",
              //   icon: "success",
              //   title: response.message,
              //   showConfirmButton: false,
              //   timer: 1500
              // });

              toastr.success(response.message);


              var html = `<div class="row">
                                            <div class="col-sm-4 col-12">
                                              <div class="form-group">
                                                <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                                <input type="text" class="form-control" value="" id="weight_from" name="weight_form[]" >
                                              </div>
                                            </div>
                                            <div class="col-sm-4 col-12">
                                              <div class="form-group">
                                                <label for="invalid-state"><b>To:</b></label>
                                                <input type="text" class="form-control" value="" id="weight_to" name="weight_to[]">
                                              </div>
                                            </div>

                                            <div class="col-sm-4 col-12">
                                              <div class="form-group">
                                                <label for="invalid-state"><b>Charges</b></label>
                                                <input type="text" class="form-control" value="" id="weight_charges" name="weight_charge[]" >
                                              </div>
                                            </div>
                                          </div>`;

              $('.commom-row').append(html);

            }
          },
          error: function(xhr, status, error) {

            console.error(xhr, status, error);
            alert('Form submission failed. Please try again.');
          }
        });
      })


      // end weight daat by range
      // start waiting data by range

      $('.waiting-btn').on('click', function(event) {

        event.preventDefault();


        var waitingformdata = $('#userwaitingForm').serialize();
        let dpt_id = $('#dpt_id').val();

        // console.log(milesformdata);
        // return;

        waitingformdata += '&dpt_id=' + encodeURIComponent(dpt_id) + '&act=add_waiting';

        


        $.ajax({
          type: 'POST',
          url: '<?= base_url('insertdpt'); ?>',
          data: waitingformdata,
          dataType: 'JSON',
          success: function(response) {

            if (response.status == 'success') {
              // Swal.fire({
              //   position: "top-end",
              //   icon: "success",
              //   title: response.message,
              //   showConfirmButton: false,
              //   timer: 1500
              // });
              toastr.success(response.message);


              var html = `<div class="row">
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="valid-state"><b>From</b> <span style="color:red">*</span></label>
                                <input type="text" class="form-control" value="" id="weight_from" name="weight_time_form[]">
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="invalid-state"><b>To:</b></label>
                                <input type="text" class="form-control" value="" id="weight_to" name="weight_time_to[]">
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="form-group">
                                <label for="invalid-state"><b>Charges</b></label>
                                <input type="text" class="form-control" value="" id="weight_charges" name="weight_time_charges[]">
                            </div>
                        </div>
                  </div>`;

        $('.row-waiting').append(html);

            }
          },
          error: function(xhr, status, error) {

            console.error(xhr, status, error);
            alert('Form submission failed. Please try again.');
          }
        });
      })




      function disableButton(checkbox_id, button_class) {

        console.log('Button class : ' + button_class);
        console.log('Checkbox id : ' + checkbox_id);
        if ($(checkbox_id).is(':checked')) {
          $('.' + button_class).attr('disabled', false);
        } else {
          $('.' + button_class).attr('disabled', true);
        }
      }


      // function GetUserRecord(id) {

      //   Swal.fire({
      //     title: "Do you want to copy the form?",
      //     showDenyButton: true,
      //     showCancelButton: true,
      //     confirmButtonText: "Yes Copy",
      //     denyButtonText: `Don't Copy`
      //   }).then((result) => {
      //     if (result.isConfirmed) {
      //       $.ajax({
      //         url: `<?= base_url('DptController/GetUserallData') ?>?id=${id}`,
      //         method: 'GET',
      //         dataType: 'json',
      //         success: function(data) {
               

      //           // weightfor
      //           if (data.weightfor) {
      //             $('input[name="min_weight"]').val(data.weightfor.min_waiting);
      //             $('input[name="min_charge"]').val(data.weightfor.min_charges);
      //             $('input[name="per_weight_charge"]').val(data.weightfor.per_charges);
      //             $("#weight_byformula").val(data.dpt_recordsdata.weight_for == '1');
      //             $('#weight_byformula').prop('checked', data.dpt_recordsdata.weight_for == 1);
      //           }

      //           // weight range
      //           if (data.weightran) {
      //             $('input[name="weight_form"]').val(data.weightran.from1);
      //             $('input[name="weight_to"]').val(data.weightran.to1);
      //             $('input[name="weight_charge"]').val(data.weightran.value1);
      //             $("#weight_byrange").val(data.dpt_recordsdata.weight_ran == '1');
      //             $('#weight_byrange').prop('checked', data.dpt_recordsdata.weight_ran == 1);
      //           }

      //           // milesfor
      //           if (data.milesfor) {
      //             $('input[name="min_miles_base"]').val(data.milesfor.min_miles);
      //             $('input[name="min_charges"]').val(data.milesfor.min_charges);
      //             $('input[name="per_mile_charge"]').val(data.milesfor.per_charges);
      //             $("#miles_formula").val(data.dpt_recordsdata.miles_for == '1');
      //             $('#miles_formula').prop('checked', data.dpt_recordsdata.miles_for == 1);
      //           }

      //           // miles range
      //           if (data.milesran) {
      //             $('input[name="miles_form"]').val(data.milesran.from1);
      //             $('input[name="miles_to"]').val(data.milesran.to1);
      //             $('input[name="miles_base_charge"]').val(data.milesran.value1);
      //             $("#miles_range").val(data.dpt_recordsdata.miles_ran == '1');
      //             $('#miles_range').prop('checked', data.dpt_recordsdata.miles_ran == 1);
      //           }

      //           // pallets
      //           if (data.dpt_recordsdata) {
      //             $('input[name="min_pallets"]').val(data.dpt_recordsdata.min_pallets);
      //             $('input[name="min_charge"]').val(data.dpt_recordsdata.pallets_min_char);
      //             $('input[name="per_Pallets_charge"]').val(data.dpt_recordsdata.pallets_per_char);
      //           }

      //           // waiting time
      //           if (data.waitingfor) {
      //             $('input[name="Minimum_w_Time"]').val(data.waitingfor.min_waiting);
      //             $('input[name="min_wei_time_chrage"]').val(data.waitingfor.min_charges);
      //             $('input[name="per_w_time_Charges"]').val(data.waitingfor.per_charges);
      //             $("#waiting_byformula").val(data.dpt_recordsdata.waiting_for == '1');
      //             $('#waiting_byformula').prop('checked', data.dpt_recordsdata.waiting_for == 1);
      //           }

      //           // waiting range
      //           if (data.waitingran) {
      //             $('input[name="weight_time_form"]').val(data.waitingran.from1);
      //             $('input[name="weight_time_to"]').val(data.waitingran.to1);
      //             $('input[name="weight_time_charges"]').val(data.waitingran.value1);
      //             $("#waiting_byrange").val(data.dpt_recordsdata.waitingran == '1');
      //             $('#waiting_byrange').prop('checked', data.dpt_recordsdata.miles_ran == 1);
      //           }

      //           // fuel charges
      //           if (data.dpt_recordsdata) {
      //             $('input[name="fuel"]').val(data.dpt_recordsdata.fuel);
      //           }

      //           // weekend charges
      //           if (data.dpt_recordsdata) {
      //             $("#weekend_charges").val(data.dpt_recordsdata.is_weekend == '1');
      //             $('#weekend_charges').prop('checked', data.dpt_recordsdata.is_weekend == 1);
      //             $('#Weekend_fixed').prop('checked', data.dpt_recordsdata.weekend_per_fix === 'fixed');
      //             $('#Weekend_Per').prop('checked', data.dpt_recordsdata.weekend_per_fix === 'per');
      //             $('input[name="weekend_value"]').val(data.dpt_recordsdata.weekend_value);
      //           }

      //           // holiday charges
      //           if (data.dpt_recordsdata.is_holiday) {
      //             $("#holiday").val(data.dpt_recordsdata.is_holiday == '1');
      //             $('#holiday').prop('checked', data.dpt_recordsdata.is_holiday == 1);
      //             $('#holiday_fixed').prop('checked', data.dpt_recordsdata.holiday_per_fix === 'fixed');
      //             $('#holiday_per').prop('checked', data.dpt_recordsdata.holiday_per_fix === 'per');
      //             $('input[name="holiday_value"]').val(data.dpt_recordsdata.holiday_value);
      //           }

      //           // night charges
      //           if (data.dpt_recordsdata.is_night) {
      //             $("#night_charges").val(data.dpt_recordsdata.is_night == '1');
      //             $('#night_charges').prop('checked', data.dpt_recordsdata.is_night == 1);
      //             $('#night_fixed').prop('checked', data.dpt_recordsdata.night_per_fix === 'fixed');
      //             $('#night_per').prop('checked', data.dpt_recordsdata.night_per_fix === 'per');
      //             $('input[name="night_from"]').val(data.dpt_recordsdata.night_from);
      //             $('input[name="night_to"]').val(data.dpt_recordsdata.night_from2);
      //             $('input[name="night_from2"]').val(data.dpt_recordsdata.holiday_value);
      //             $('input[name="night_to2"]').val(data.dpt_recordsdata.night_to2);
      //             $('input[name="night_value"]').val(data.dpt_recordsdata.night_value);
      //           }

      //           // name and description
      //           if (data.dpt_recordsdata) {
      //             $('input[name="dpt_name"]').val(data.dpt_recordsdata.name);
      //             $('input[name="dpt_description"]').val(data.dpt_recordsdata.description);
      //           }

               

        
      //           // higher charges
      //           $("#apply").val(data.dpt_recordsdata.is_higher == '1');
      //           $('#apply').prop('checked', data.dpt_recordsdata.is_higher == 1);

      //           // Show success message
      //           copyform(data);
      //         },
      //         error: function(jqXHR, textStatus, errorThrown) {
      //           console.error('Error:', errorThrown);
      //         }
      //       });
      //     } else if (result.isDenied) {
      //       // Swal.fire("Changes are not saved", "", "info");
      //       toastr.info('Changes are not saved');
      //     }
      //   });
      // }



      function GetUserRecord(id) {
    // Show the Bootstrap modal
    $('#deleteConfirmationModal').modal('show'); 

    let isCopySuccessful = false;

    // Handle the "Yes, Copy" button click
    $('#copyFormBtn').click(function() {
        $.ajax({
            url: `<?= base_url('DptController/GetUserallData') ?>?id=${id}`,
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                // Populate form fields with data from Ajax response

                // weightfor
                if (data.weightfor) {
                    $('input[name="min_weight"]').val(data.weightfor.min_waiting);
                    $('input[name="min_charge"]').val(data.weightfor.min_charges);
                    $('input[name="per_weight_charge"]').val(data.weightfor.per_charges);
                    $("#weight_byformula").val(data.dpt_recordsdata.weight_for == '1');
                    $('#weight_byformula').prop('checked', data.dpt_recordsdata.weight_for == 1);
                }

                // weight range
                if (data.weightran) {
                    $('input[name="weight_form"]').val(data.weightran.from1);
                    $('input[name="weight_to"]').val(data.weightran.to1);
                    $('input[name="weight_charge"]').val(data.weightran.value1);
                    $("#weight_byrange").val(data.dpt_recordsdata.weight_ran == '1');
                    $('#weight_byrange').prop('checked', data.dpt_recordsdata.weight_ran == 1);
                }

                // milesfor
                if (data.milesfor) {
                    $('input[name="min_miles_base"]').val(data.milesfor.min_miles);
                    $('input[name="min_charges"]').val(data.milesfor.min_charges);
                    $('input[name="per_mile_charge"]').val(data.milesfor.per_charges);
                    $("#miles_formula").val(data.dpt_recordsdata.miles_for == '1');
                    $('#miles_formula').prop('checked', data.dpt_recordsdata.miles_for == 1);
                }

                // miles range
                if (data.milesran) {
                    $('input[name="miles_form"]').val(data.milesran.from1);
                    $('input[name="miles_to"]').val(data.milesran.to1);
                    $('input[name="miles_base_charge"]').val(data.milesran.value1);
                    $("#miles_range").val(data.dpt_recordsdata.miles_ran == '1');
                    $('#miles_range').prop('checked', data.dpt_recordsdata.miles_ran == 1);
                }

                // pallets
                if (data.dpt_recordsdata) {
                    $('input[name="min_pallets"]').val(data.dpt_recordsdata.min_pallets);
                    $('input[name="min_charge"]').val(data.dpt_recordsdata.pallets_min_char);
                    $('input[name="per_Pallets_charge"]').val(data.dpt_recordsdata.pallets_per_char);
                }

                // waiting time
                if (data.waitingfor) {
                    $('input[name="Minimum_w_Time"]').val(data.waitingfor.min_waiting);
                    $('input[name="min_wei_time_chrage"]').val(data.waitingfor.min_charges);
                    $('input[name="per_w_time_Charges"]').val(data.waitingfor.per_charges);
                    $("#waiting_byformula").val(data.dpt_recordsdata.waiting_for == '1');
                    $('#waiting_byformula').prop('checked', data.dpt_recordsdata.waiting_for == 1);
                }

                // waiting range
                if (data.waitingran) {
                    $('input[name="weight_time_form"]').val(data.waitingran.from1);
                    $('input[name="weight_time_to"]').val(data.waitingran.to1);
                    $('input[name="weight_time_charges"]').val(data.waitingran.value1);
                    $("#waiting_byrange").val(data.dpt_recordsdata.waitingran == '1');
                    $('#waiting_byrange').prop('checked', data.dpt_recordsdata.waitingran == 1);
                }

                // fuel charges
                if (data.dpt_recordsdata) {
                    $('input[name="fuel"]').val(data.dpt_recordsdata.fuel);
                }

                // weekend charges
                if (data.dpt_recordsdata) {
                    $("#weekend_charges").val(data.dpt_recordsdata.is_weekend == '1');
                    $('#weekend_charges').prop('checked', data.dpt_recordsdata.is_weekend == 1);
                    $('#Weekend_fixed').prop('checked', data.dpt_recordsdata.weekend_per_fix === 'fixed');
                    $('#Weekend_Per').prop('checked', data.dpt_recordsdata.weekend_per_fix === 'per');
                    $('input[name="weekend_value"]').val(data.dpt_recordsdata.weekend_value);
                }

                // holiday charges
                if (data.dpt_recordsdata.is_holiday) {
                    $("#holiday").val(data.dpt_recordsdata.is_holiday == '1');
                    $('#holiday').prop('checked', data.dpt_recordsdata.is_holiday == 1);
                    $('#holiday_fixed').prop('checked', data.dpt_recordsdata.holiday_per_fix === 'fixed');
                    $('#holiday_per').prop('checked', data.dpt_recordsdata.holiday_per_fix === 'per');
                    $('input[name="holiday_value"]').val(data.dpt_recordsdata.holiday_value);
                }

                // night charges
                if (data.dpt_recordsdata.is_night) {
                    $("#night_charges").val(data.dpt_recordsdata.is_night == '1');
                    $('#night_charges').prop('checked', data.dpt_recordsdata.is_night == 1);
                    $('#night_fixed').prop('checked', data.dpt_recordsdata.night_per_fix === 'fixed');
                    $('#night_per').prop('checked', data.dpt_recordsdata.night_per_fix === 'per');
                    $('input[name="night_from"]').val(data.dpt_recordsdata.night_from);
                    $('input[name="night_to"]').val(data.dpt_recordsdata.night_from2);
                    $('input[name="night_from2"]').val(data.dpt_recordsdata.holiday_value);
                    $('input[name="night_to2"]').val(data.dpt_recordsdata.night_to2);
                    $('input[name="night_value"]').val(data.dpt_recordsdata.night_value);
                }

                // name and description
                if (data.dpt_recordsdata) {
                    $('input[name="dpt_name"]').val(data.dpt_recordsdata.name);
                    $('input[name="dpt_description"]').val(data.dpt_recordsdata.description);
                }

                // higher charges
                $("#apply").val(data.dpt_recordsdata.is_higher == '1');
                $('#apply').prop('checked', data.dpt_recordsdata.is_higher == 1);

                isCopySuccessful = true;

                // Show success notification
                toastr.success('The form has been successfully copied.');

                // Close the modal
                $('#deleteConfirmationModal').modal('hide');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error:', errorThrown);
                // Show error notification
                toastr.error('An error occurred while copying the form.');

                // Close the modal
                $('#deleteConfirmationModal').modal('hide');
            }
        });
    });

    // Handle the "Don't Copy" button click
    $('#deleteConfirmationModal').on('hidden.bs.modal', function(e) {
        if (!isCopySuccessful) {
            // Show notification only if copy was not successful
            toastr.info('Changes are not saved');
        }
    });
}





      // copy function 
      function copyform(copyformdata) {
        //   console.log('hello'+coyformdata)
        let dpt_id = $('#dpt_id').val();
        //  return;
        var copyformdata = {
          dpt_id: dpt_id,
        
          dpt_recordsdata: copyformdata.dpt_recordsdata,
          // dptrecord_data: copyformdata.dptrecord_data,
          milesfor: copyformdata.milesfor,
          milesran: copyformdata.milesran,
          waitingfor: copyformdata.waitingfor,
          waitingran: copyformdata.waitingran,
          weightfor: copyformdata.weightfor,
          weightran: copyformdata.weightran
          // Add other data as needed
        };
        var formData = JSON.stringify(copyformdata);

        // console.log(copyformdata);
        // return;

        $.ajax({
          url: '<?= base_url('DptController/copydptForm') ?>',
          method: 'POST',
          dataType: 'json',
          data: copyformdata,
          success: function(response) {
            console.log(response);
            // Handle success response here
            if (response.status === 'success') {
              // Swal.fire({
              //   position: "top-end",
              //   icon: "success",
              //   title: "Data copy successfully",
              //   showConfirmButton: false,
              //   timer: 1500
              // });
              toastr.success('Data copy successfully');
            } else {
              // Swal.fire('Error!', 'Failed to save data.', 'error');
            }
          },
          error: function(jqXHR, textStatus, errorThrown) {
            console.error('AJAX Error:', errorThrown);
            // Handle error here
            // Swal.fire('Error!', 'Failed to communicate with the server.', 'error');
            toastr.error('Failed to communicate with the server.', 'Error!');
          }
        });
      }

      

      function serviceChargesCheckbox(checkedId, uncheckedId, type) {
        if ($('#' + checkedId).is(':checked')) {
          $('#' + uncheckedId).prop('checked', false);

          ($('#' + checkedId).val(type));
        }


        // return fixed ? 'fixed' : (per ? 'per' : '');
      }
    </script>

    <script>
      $('.submitbtn').click(function(event) {

        

        event.preventDefault();

      

        let dpt_id = $('#dpt_id').val();


        // miles_for

        let min_miles = $('input[name="min_miles_base"]').val();
        let min_charges = $('input[name="min_charges"]').val();
        let per_charges = $('input[name="per_mile_charge"]').val();
        let miles_formula = $('input[name="miles_formula"]').is(':checked') ? '1' : '0';

        // weightfor
        let min_weight = $('input[name="min_weight"]').val();
        let minweight_charge = $('input[name="minweight_charge"]').val();
        let per_weight_charge = $('input[name="per_weight_charge"]').val();
        let weight_byformula = $('input[name="weight_byformula"]').is(':checked') ? '1' : '0';


        // waitingfor

        let min_waiting = $('input[name="Minimum_w_Time"]').val();
        let min_waiting_charge = $('input[name="min_wei_time_chrage"]').val();
        let per_waiting_charge = $('input[name="per_w_time_Charges"]').val();
        let waiting_byformula = $('input[name="waiting_byformula"]').is(':checked') ? '1' : '0';

        // county
       
        // 
        // service charge

       

        // console.log(serviceCharges);
        // return




        let dpt_name = $('input[name="dpt_name"]').val();
        let dpt_description = $('input[name="dpt_description"]').val();

        let min_pallets = $('input[name="min_pallets"]').val();
        let min_charge = $('input[name="min_charge"]').val();
        let per_Pallets_charge = $('input[name="per_Pallets_charge"]').val();
        let fuel = $('input[name="fuel"]').val();
        let weekend_value = $('input[name="weekend_value"]').val();
        let holiday_value = $('input[name="holiday_value"]').val();
        let night_value = $('input[name="night_value"]').val();
        let night_from = $('input[name="night_from"]').val();
        let night_to = $('input[name="night_to"]').val();
        let night_from2 = $('input[name="night_from2"]').val();
        let night_to2 = $('input[name="night_to2"]').val();
        let night_per = $('input[name="night_per"]').val();

        let checkweekend = $('input[name="weekend_charges"]').is(':checked') ? '1' : '0';
        let weekend_per_fix = $('input[name="is_weekend_per"]').is(':checked')? '1' : '0'; 
        
        let checkholiday = $('input[name="holiday"]').is(':checked') ? '1' : '0';
        let holiday_per_fix = $('input[name="is_holiday_per"]').is(':checked')?'1':'0';

        let checknightcharges = $('input[name="night_charges"]').is(':checked') ? '1' : '0';
        let night_per_fix = $('input[name="night_fixed"]').is(':checked') ?'1':'0';

        let checkheigher = $('input[name="apply"]').is(':checked') ? '1' : '0';



        let dptmainformData = {
          dpt_id: dpt_id,
          dpt_name: dpt_name,
          dpt_description: dpt_description,
          min_pallets: min_pallets,
          min_charge: min_charge,
          per_Pallets_charge: per_Pallets_charge,
          fuel: fuel,
          weekend_value: weekend_value,
          holiday_value: holiday_value,
          night_value: night_value,
          night_from: night_from,
          night_to: night_to,
          night_from2: night_from2,
          night_to2: night_to2,
          checkweekend: checkweekend,
          weekend_per_fix: weekend_per_fix,
          checkholiday: checkholiday,
          holiday_per_fix: holiday_per_fix,
          checknightcharges: checknightcharges,
          night_per_fix: night_per_fix,
          checkheigher: checkheigher,

         
          waiting_byformula: waiting_byformula,
          min_waiting_charge: min_waiting_charge,
          per_waiting_charge: per_waiting_charge,
          min_waiting: min_waiting,
          weight_byformula: waiting_byformula,
          per_weight_charge: per_weight_charge,
          minweight_charge: minweight_charge,
          min_weight: min_weight,
          miles_formula: miles_formula,
          per_charges: per_charges,
          min_charges: min_charges,
          min_miles: min_miles,
         



        };
        let formData = JSON.stringify(dptmainformData)


        // console.log(dptmainformData);
        // return;


        $.ajax({
          type: 'POST',
          url: '<?= base_url('insertdpt') . '?act=dptmainformData' ?>&dpt_id=' + encodeURIComponent(dpt_id),
          data: formData,
          dataType: 'JSON',
          success: function(response) {

            if (response.status == 'success') {
              // Swal.fire({
              //   position: "top-end",
              //   icon: "success",
              //   title: response.message,
              //   showConfirmButton: false,
              //   timer: 1500
              // });
              toastr.success(response.message);
            }
          },
          error: function(xhr, status, error) {

            console.error(xhr, status, error);
            alert('Form submission failed. Please try again.');
          }
        });
      })
    </script>
<?= $this->endSection() ?>

