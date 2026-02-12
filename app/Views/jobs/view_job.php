<style>
    input {
        border:0;
        background-color: transparent;
    }
    textarea {
        border: 0;
        background-color: transparent;
    }
</style>

            <section id="new-client">
                <form id="job_form">
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="card">
                            <div class="card-header"> -->
                            <?php if ($job->branch=="ny" || $job->branch=="NY") $job_branch = "[New York]"; 
							  		if ($job->branch=="nj" || $job->branch=="NJ") $job_branch = "[New Jersey]";
									if ($job->branch=="messny") $job_branch = "[Messenger NY]";
									if ($job->branch=="outside") $job_branch = "[Outside]";
									?>
                                <div>
                                    <h4 class="card-title">Job No : <?= $job->job_no ?> <?= $job_branch ?></h4>
                                </div>
                                <div>
                                    <h4 class="card-title">Reference No : <?= $job->reference_no ?></h4>
                                </div>
                            <!-- </div>
                    </div> -->
                </div>
            </div>
<hr>
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="card">
                            <div class="card-body"> -->
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b>Client Account No.
                                                    :</b></label>
                                            <input type="text" required class="col-sm-8" name="account_no"
                                                id="account_no" onblur="account_check()" value="<?= $job->account_no ?>">
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                        <label for="invalid-state" class="col-sm-4 label_inline"><b>Client Name
                                                    :</b></label>
                                            <div class="col-sm-18" id="c_name">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b> Client Price Table
                                                    :</b></label>
                                            <input type="text" required class="col-sm-8" name="reference_no"
                                                id="reference_no" value="<?= get_cpt_name($job->client_price_table) ?>">
                                        </div>
                                        <br>
                                    </div>

                                <div class="col-sm-6 col-12">
                                    <div class="input-group row">
                                        <label for="invalid-state" class="col-sm-4 label_inline"><b> Job Status
                                                :</b></label>
                                        <input type="text" required class="col-sm-8" name="reference_no"
                                            id="reference_no" value="<?= $job->phase ?> &nbsp;&nbsp; '<?= $job->job_type_2 ?>'">
                                    </div>
                                </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state"
                                                class="col-sm-4 label_inline"><b>Caller Name :</b></label>
                                            <input type="text" class="col-sm-8" name="caller_name" value="<?= $job->caller_name ?>"
                                                placeholder="" id="caller_name">
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state"
                                                class="col-sm-4 label_inline"><b>Date Time :</b></label>
                                            <?= h_gdate($job->c_date) ."&nbsp;[".h_gtime($job->c_time)."]&nbsp;&nbsp;&nbsp;<span class='form_heading2'>".$job->signature."</span>" ?>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state"
                                                class="col-sm-4 label_inline"><b>Service Type :</b></label>
                                            <input type="text" class="col-sm-8" name="caller_name" value="<?= $job->service_type ?>">
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state"
                                                class="col-sm-4 label_inline"><b>Assign Airport :</b></label>
                                            <input type="text" class="col-sm-8" name="caller_name" value="<?= $job->ass_airport ?>">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state"
                                                class="col-sm-4 label_inline"><b>Important Note :</b></label>
                                            <input type="text" class="col-sm-8" name="caller_name" value="<?= $job->service_type ?>">
                                        </div>
                                        <br>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group row">
                                            <label for="invalid-state"
                                                class="col-sm-4 label_inline"><b>Internal Job No :</b></label>
                                            <input type="text" class="col-sm-8" name="caller_name" value="<?= $job->int_job_no ?>">
                                        </div>
                                    </div>
                                    

                                    <div class="col-md-4">Show Time: <strong><?= h_gcdate($job->show_time) ?></strong></div>
									<div class="col-md-4">EST From: <strong><?= h_gcdate($job->est_from) ?></strong></div>
									<div class="col-md-4">EST To: <strong><?= h_gcdate($job->est_to) ?></strong></div>

                                </div>
                            </div>
                        <!-- </div>
                    </div> -->
                </div>
<hr>
<div>
    <table class="table table-bordered">
        <tr>
            <th>Assigned Drivers : </th>
<?php for($i=0; $i <=6; $i++) { 
    if(isset($drivers[$i])) {
    $dr_code=$drivers[$i]["code"];
	$dr_datetime=h_gtime($drivers[$i]["dr_datetime"]);
    } else {
        $dr_code="";
        $dr_datetime="";
    }
    ?>
    
            <td class="text-center"><?= $dr_code ?> <hr> <?= $dr_datetime ?></td>
<?php } ?> 
        </tr>
        <tr>
            <th>Assigned Agents : </th>
<?php for($i=0; $i <=6; $i++) { 
    if(isset($agents[$i])) {
    $dr_code=$agents[$i]["code"];
	$dr_datetime=h_gtime($agents[$i]["a_datetime"]);
    } else {
        $dr_code="";
        $dr_datetime="";
    }
    ?>
    
            <td class="text-center"><?= $dr_code ?> <hr> <?= $dr_datetime ?></td>
<?php } ?>
        </tr>
    </table>
    <div class="row">
        <div class="col-md-3">
            <p>Pu. Arr.: <?= h_gtime($job->pu_arr_dt) ?></p>
        </div>
        <div class="col-md-3">
            <p>Pu. Depart.: <?= h_gtime($job->pu_dep_dt) ?></p>
        </div>
        <div class="col-md-3">
            <p>Del. Arr.: <?= h_gtime($job->de_arr_dt) ?></p>
        </div>
        <div class="col-md-3">
            <p>Del. Depart.: <?= h_gtime($job->de_dep_dt) ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>Disp Time: <?= $job->disp_time ?></p>
        </div>
        <div class="col-md-6">
            <p>Travel Time: <?= h_gtime($job->travel_time) ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p>POD: <?= $job->pod ?></p>
        </div>
        <div class="col-md-6">
            <p>Travel Time.: <?= $job->pod_depart ?></p>
        </div>
    </div>
</div>
<hr>
                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="card">
                            <div class="card-header"> -->
                                <div>
                                    <h4>Commodity Information :</h4>
                                </div>
                            <!-- </div> -->
                            <!-- <div class="card-body"> -->
                                <div class="row">
                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <label for="invalid-state" class="col-sm-4"><b>Commodity :</b></label>
                                            <label for="invalid-state" class="col-sm-4"><b><?= $job->commodity ?></b></label>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b> Service Type
                                                    :</b></label>
                                            <label class="col-sm-8"><b><?= $job->service_type ?></b></label>
                                        </div>
                                    </div>

                                    <!-- <div class="col-sm-6"></div> -->

                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b>Total Pieces
                                                    :</b></label>
                                            <input type="text" class="col-sm-8" name="total_pcs"
                                                placeholder="" value="<?= $job->total_pcs ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                        <div class="input-group mb-1 row">
                                            <label for="invalid-state" class="col-sm-4 label_inline"><b>Total
                                                    Weight :</b></label>
                                            <input type="text" class="col-sm-8" name="total_weight"
                                                placeholder="" value="<?= $job->total_weight ?>">
                                        </div>
                                    </div>

                                </div>
                            <!-- </div>
                        </div> -->
                    </div>
                </div>

<hr>

                <div class="row">
                    <div class="col-md-6">
                        <!-- <div class="card"> -->
                            <!-- <div class="card-header"> -->
                                <div class="row w-100">
                                    <h4 class="col-sm-12">Shipping Information</h4>
                                </div>
                            <!-- </div> -->
                            <!-- <div class="card-body"> -->

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Pickup Date :
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" required class="col-sm-9" name="f_date"
                                                    placeholder="" value="<?= $job->from_date ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>Pickup Time
                                                        :</b></label>
                                                <input type="text" required class="col-sm-9" name="f_time"
                                                    placeholder="" value="<?= $job->from_time ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Company Name:</b></label>
                                                <input type="text" required class="col-sm-9" id="company_name_s" name="f_name" value="<?= $job->from_name ?>">
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address 1
                                                        :</b></label>
                                                <input type="text" class="col-sm-9" id="address_1_s" name="f_address1" value="<?= $job->from_address1 ?>">
                                               
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address 2
                                                        :</b></label>
                                                <input type="text" class="col-sm-9" id="address_2_s" name="f_address2" value="<?= $job->from_address2 ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b> Room /FL
                                                        No. :</b></label>
                                                <input type="text" name="f_room_no" value="<?= $job->from_room_no ?>" class="col-sm-9" id="room_s">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>City :
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" required class="col-sm-3" id="city_s" name="f_city" value="<?= $job->from_city ?>">

                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>State :
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" required class="col-sm-3"  id="state_s" name="f_state" value="<?= $job->from_state ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Zip
                                                        :</b></label>
                                                <input type="text" required class="col-sm-3" id="zip_s" name="f_zip" value="<?= $job->from_zip ?>">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Country
                                                        :</b></label>
                                                <input type="text" required class="col-sm-3" name="f_zone" value="<?= $job->from_zone ?>" id="country_s">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Phone
                                                        :</b></label>
                                                <input type="text" required class="col-sm-3" name="f_phone" value="<?= $job->from_phone ?>" id="phone_s">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Ext
                                                        :</b></label>
                                                <input type="text" required class="col-sm-3" name="f_ext" value="<?= $job->from_phone_ext ?>" id="ext_s">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Contact Name
                                                        :</b></label>
                                                <input type="address" name="f_contact" value="<?= $job->from_contact_name ?>" class="col-sm-9" id="contact_name_s">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Instruction
                                                        :</b></label>
                                                <textarea class="col-sm-9" name="f_instruction1" id="instruction_s"><?= $job->from_instruction ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                            <!-- </div>
                        </div> -->
                    </div>
<hr>
                    <div class="col-md-6">
                        <!-- <div class="card">
                            <div class="card-header"> -->
                                <div class="row w-100">
                                    <h4 class="col-sm-12">Consignee Information</h4>
                                </div>
                            <!-- </div>
                            <div class="card-body"> -->

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Pickup Date :
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" required class="col-sm-9" name="t_date"
                                                    placeholder="" value="<?= $job->to_date ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>Pickup Time
                                                        :</b></label>
                                                <input type="text" required class="col-sm-9" name="t_time"
                                                    placeholder="" value="<?= $job->to_time ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Company Name:</b></label>
                                                <input type="text" required class="col-sm-9" id="company_name_c" name="t_name" value="<?= $job->to_name ?>">
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address 1
                                                        :</b></label>
                                                <input type="text" class="col-sm-9" id="address_1_c" name="t_address1" value="<?= $job->to_address1 ?>">
                                                
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Address 2
                                                        :</b></label>
                                                <input type="text" class="col-sm-9" id="address_2_c" name="t_address2" value="<?= $job->to_address2 ?>">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="invalid-state" class="col-sm-3 label_inline"><b> Room /FL
                                                        No. :</b></label>
                                                <input type="text" name="t_room_no" value="<?= $job->to_room_no ?>" class="col-sm-9" id="room_c">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>City :
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" name="t_city" value="<?= $job->to_city ?>" required class="col-sm-3" id="city_c">

                                                <label for="invalid-state" class="col-sm-3 label_inline"><b>State :
                                                    </b><span style="color:red">*</span></label>
                                                <input type="text" name="t_state" value="<?= $job->to_state ?>" required class="col-sm-3"  id="state_c">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Zip
                                                        :</b></label>
                                                <input type="text" name="t_zip" value="<?= $job->to_zip ?>" required class="col-sm-3" id="zip_c">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Country
                                                        :</b></label>
                                                <input type="text" name="t_zone" value="<?= $job->to_zone ?>" required class="col-sm-3" id="country_c">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Phone
                                                        :</b></label>
                                                <input type="text" required name="t_phone" value="<?= $job->to_phone ?>" class="col-sm-3" id="phone_c">

                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Ext
                                                        :</b></label>
                                                <input type="text" name="t_ext" value="<?= $job->to_phone_ext ?>" required class="col-sm-3" id="ext_c">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Contact Name
                                                        :</b></label>
                                                <input type="address" name="t_contact" value="<?= $job->to_contact_name ?>" class="col-sm-9" id="contact_name_c">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-1 row">
                                                <label for="valid-state" class="col-sm-3 label_inline"><b>Instruction
                                                        :</b></label>
                                                <textarea class="col-sm-9" name="t_instruction1" id="instruction_c"
                                                   ><?= $job->to_instruction ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                            <!-- </div>
                        </div> -->
                    </div>

                </div>

<hr>

<div>
    <div>
        <h4 class="card-title">Air Line Information</h4>
    </div>
        <table class="table table-bordered">
            <tr>
                <td>
                    <div>Sr No. </div>
                </td>
                <td>
                    <div>Departure:</div>
                </td>
                <td>
                    <div>Airline:</div>
                </td>
                <td>
                    <div><span>&nbsp;</span>Flight#: </div>
                </td>
                <td>
                    <div><span>&nbsp;</span>ETD:</div>
                </td>
                <td>
                    <div><span>&nbsp;</span>ETA:</div>
                </td>
                <td>
                    <div><span>&nbsp;</span>Destination:</div>
                </td>
            </tr>
            <?php 
            if(empty($airports)) { ?>
                <tr>
                    <td>
                        <div><span>1.</span>&nbsp;</div>
                    </td>
                    <td>
                        <input name="departure" type="text" class="inputtext_small" id="departure" size="12"
                            maxlength="15">
                    </td>
                    <td>
                        <input name="airline" type="text" class="inputtext_small" id="airline" size="12" maxlength="15">
                    </td>
                    <td>
                        <input name="flight" type="text" class="inputtext_small" id="flight" size="12" maxlength="15">
                    </td>
                    <td>
                        <input name="etd" type="text" class="inputtext_small" id="etd" size="6" maxlength="15">
                    </td>
                    <td>
                        <input name="eta" type="text" class="inputtext_small" id="eta" size="6" maxlength="15">
                    </td>
                    <td>
                        <input name="destination" type="text" class="inputtext_small" id="destination" size="12" maxlength="15">
                    </td>
                </tr>
            <?php } else {
            $i=0; foreach ($airports as $a) { $i++; 
            ?> 
            <tr>
                <td>
                    <div><span><?= $i ?>.</span>&nbsp;</div>
                </td>
                <td>
                    <input name="departure<?= $i ?>" type="text" class="inputtext_small" id="departure<?= $i ?>" size="12"
                        maxlength="15" value="<?php $a['air_departure1'] ?>">
                </td>
                <td>
                    <input name="airline<?= $i ?>" type="text" class="inputtext_small" id="airline<?= $i ?>" size="12" maxlength="15"
                        value="<?php $a['air_airline1'] ?>">
                </td>
                <td>
                    <input name="flight<?= $i ?>" type="text" class="inputtext_small" id="flight<?= $i ?>" size="12" maxlength="15"
                        value="<?php $a['air_flight1'] ?>">
                </td>
                <td>
                    <input name="etd<?= $i ?>" type="text" class="inputtext_small" id="etd<?= $i ?>" size="6" maxlength="15"
                        value="<?php $a['air_etd1'] ?>">
                </td>
                <td>
                    <input name="eta<?= $i ?>" type="text" class="inputtext_small" id="eta<?= $i ?>" size="6" maxlength="15"
                        value="<?php $a['air_eta1'] ?>">
                </td>
                <td>
                    <input name="destination<?= $i ?>" type="text" class="inputtext_small" id="destination<?= $i ?>" size="12"
                        maxlength="15" value="<?php $a['air_destination'] ?>">
                </td>
            </tr>
            <?php } } ?>
        </table>
</div>

<hr>

                <div class="row">
                    <div class="col-md-12">
                        <!-- <div class="card">
                            <div class="card-header"> -->
                                <div>
                                    <h4 class="card-title">Misc. Information :</h4>

                                </div>
                            <!-- </div>
                            <div class="card-body"> -->
                                <div class="row">

                                    <div class="col-sm-3 col-12">
                                        <label for="valid-state" class="label_inline"> Driver Miles : <?= $job->driver_miles ?></label>
                                    </div>

                                    <div class="col-sm-3 col-12">
                                        <label for="valid-state" class="label_inline">Company Miles : <?= $job->miles ?></label>
                                    </div>

                                    <div class="col-sm-3 col-12">
                                        <label for="valid-state" class="label_inline">Original Miles : <?= $job->orgnial_miles ?></label>
                                    </div>
                                    <div class="col-sm-3 col-12">
                                        <label for="valid-state" class="label_inline">Agent Miles : <?= $job->agent_miles ?></label>
                                    </div>
<!-- 
                                    <div class="col-md-2">
                                        <label>Options : </label>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="input-group mb-1 row">
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="round" name="round_trip" checked value="r"
                                                        class="custom-control-input" />
                                                        &nbsp;&nbsp;<label class="custom-control-label" for="round"> Round Trip </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="continuous" name="continuous"
                                                        <?php if($job->is_continous=='1') echo "checked"; ?>
                                                        value="c" class="custom-control-input" />
                                                        &nbsp;&nbsp;<label class="custom-control-label" for="continuous"> Continuous</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="multiple" name="multiple"
                                                        <?php if($job->is_multiple=='1') echo "checked"; ?>
                                                        value="m" class="custom-control-input" />
                                                        &nbsp;&nbsp;<label class="custom-control-label" for="multiple"> Multiple
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="schedule" name="schedule"
                                                        <?php if($job->is_schedule=='1') echo "checked"; ?>
                                                        value="s" class="custom-control-input" />
                                                    &nbsp;&nbsp;<label class="custom-control-label" for="schedule"> Schedule</label>
                                                </div>
                                            </div>
                                        </div>

                                    </div> -->
                                </div>
                            <!-- </div>
                        </div> -->
                    </div>
                </div>
                </form>
<hr>
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <a href="<?= base_url() ?>/jobs/edit_job?id=<?= $job->job_edit_id ?>" class="btn btn-primary" type="button">Edit Job</a>
                            &nbsp;
                            <button class="btn_job_notes btn btn-primary" type="button" data-id="<?= $job->job_edit_id ?>" data-toggle="modal" data-target="#job_common_modal" data-dismiss="modal">Add Notes</button>
                        </div>
                    </div>
            </section>

    <script>
        $(document).ready(function () {
            account_check();
            $("#job_form :input").prop("disabled", true);
        });

        function account_check() {
            var ac_no = <?= $job->account_no ?>;
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/ajaxController/account_check",
                data: "id="+ac_no,
                dataType: "json",
                success: function (response) {
                    if(response==null) {
                        Swal.fire('Error','Invalid Account No.','error');
                        $('#account_no').val("");
                        $('#c_name').html("");
                    } else {
                        $('#c_name').html(`<strong>`+response.name+`</strong><br><strong>`+response.phone1+`</strong>`);
                    }

                }
            });
        }

        function ref_check() {
            var ac_no = $('#reference_no').val();
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/ajaxController/ref_check",
                data: "id="+ac_no,
                dataType: "json",
                success: function (response) {
                    if(response!==null) {
                        Swal.fire('Warning','Entered Reference Already Exists. Software Auto alot new reference No.','warning');
                    
                        $('#reference_no').val(response);
                    }

                }
            });
        }

        function caller_search() {
            var ac_no = $('#account_no').val();
            if(ac_no=="") {
                Swal.fire("Warning","Please Enter an Account Number","warning");
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/caller_search",
                    data: "id="+ac_no,
                    dataType: "html",
                    success: function (response) {
                        $('#searchModalBody').html(response);
                        $('#searchModal').modal('show');
                    }
                });
            }
        }

        function callerName(id) {
            idName='#caller_'+id;
            caller = $(idName).attr('data-name');
            $('#caller_name').val(caller);
            $('#searchModal').modal('hide');
        }

        function company_search_shipping(field) {
            text = $('#'+field).val();
            var ac_no = $('#account_no').val();
            if(ac_no=="") {
                Swal.fire("Warning","Please Enter an Account Number","warning");
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/company_search",
                    data: "id="+ac_no+"&type=shipping&text="+text,
                    dataType: "html",
                    success: function (response) {
                        $('#searchModalBody').html(response);
                        $('#searchModal').modal('show');
                    }
                });
            }
        }

        function companyName_shipping(id) {
            idName='#address_'+id;
            address = $(idName).attr('data-id');
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/get_address",
                    data: "id="+address,
                    dataType: "json",
                    success: function (response) {
                        $('#company_name_s').val(response.name);
                        $('#address_1_s').val(response.address1);
                        $('#address_2_s').val(response.address2);
                        $('#room_s').val(response.room);
                        $('#city_s').val(response.city);
                        $('#state_s').val(response.state);
                        $('#zip_s').val(response.zip);
                        $('#phone_s').val(response.phone);
                        $('#ext_s').val(response.ext);
                        $('#contact_name_s').val(response.contact_name);
                        $('#searchModal').modal('hide');
                    }
                });
        }

        function company_search_consignee(field) {
            text = $('#'+field).val();
            var ac_no = $('#account_no').val();
            if(ac_no=="") {
                Swal.fire("Warning","Please Enter an Account Number","warning");
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/company_search",
                    data: "id="+ac_no+"&type=consignee&text="+text,
                    dataType: "html",
                    success: function (response) {
                        $('#searchModalBody').html(response);
                        $('#searchModal').modal('show');
                    }
                });
            }
        }

        function companyName_consignee(id) {
            idName='#address_'+id;
            address = $(idName).attr('data-id');
                $.ajax({
                    type: "post",
                    url: "<?= base_url() ?>/ajaxController/get_address",
                    data: "id="+address,
                    dataType: "json",
                    success: function (response) {
                        $('#company_name_c').val(response.name);
                        $('#address_1_c').val(response.address1);
                        $('#address_2_c').val(response.address2);
                        $('#room_c').val(response.room);
                        $('#city_c').val(response.city);
                        $('#state_c').val(response.state);
                        $('#zip_c').val(response.zip);
                        $('#phone_c').val(response.phone);
                        $('#ext_c').val(response.ext);
                        $('#contact_name_c').val(response.contact_name);
                        $('#searchModal').modal('hide');
                    }
                });
        }

        function account_search() {
            var ac_no = $('#client_search').val();
            
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/ajaxController/account_search",
                data: "id="+ac_no,
                dataType: "html",
                success: function (response) {
                    $('#clientModalBody').html(response);
                }
            });
        }

        function accountName(id) {
            idName='#account_'+id;
            account = $(idName).attr('data-name');
            $('#account_no').val(account);
            $('#searchModal').modal('hide');
        }

        $(window).on('load', function () {

            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        });

        

    $('.btn_job_notes').click(function() {
            var id = $(this).attr('data-id');
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/jobs/add_job_notes",
                data: "id="+id,
                dataType: "html",
                success: function (response) {
                    $('#job_common_modal_label').html('Add Job Notes');
                    $('#job_common_modal_body').html(response);
                }
            });
        });
    </script>

</body>
<!-- END: Body-->

</html>