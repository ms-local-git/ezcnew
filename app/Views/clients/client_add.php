<?= $this->extend('layouts/app') ?>
<?php $request = $request ?? \Config\Services::request(); ?>

<?= $this->section('content') ?>
<section id="new-client">
            <div>
               <h2 class="card-title">Create New Client:</h2>


               <br>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4>Client General Information</h4>
                        </div>
                     </div>
                     <label for="valid-state"><b>&nbsp;&nbsp;&nbsp;Account no:</b><br>
                        <span style="color:red">&nbsp;&nbsp;&nbsp;Auto Genrate</span></label>
                     <div class="card-body">
                        <form class="form" action="<?= base_url() ?>/clients/createclient" method="POST">
                           <div class="row">
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Client Name:</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="name" placeholder="" value="<?= old('name') ?>" required=>
                                 </div>
                              </div>
                              <div class="col-md-3 col-12">
                                 <div class="form-group">

                                    <label for="valid-state"><b>Branch:</b></label>

                                    <div class="form-group">
                                       <select class="form-control" name="branch" id="basicSelect">
                                          <!-- <option value="Online-2019">Online-2019</option value="Online-2020">
                                             <option value="Online-2020">Online-2020</option>
                                             <option value="Online-2021">Online-2021</option> -->
                                          <option value="online" {{ old('branch') == 'online' ? 'selected' : '' }}>
                                             Online - 2000...
                                          </option>

                                          <option value="nj" {{ old('branch') == 'nj' ? 'selected' : '' }}>
                                             New Jersey - 4000...
                                          </option>

                                          <option value="ezwarehouse" {{ old('branch') == 'ezwarehouse' ? 'selected' : '' }}>
                                             E Z Trucking &amp; Warehousing - 5000...
                                          </option>

                                          <option value="ny" {{ old('branch') == 'ny' ? 'selected' : '' }}>
                                             New York -7000...
                                          </option>

                                          <option value="trucking" {{ old('branch') == 'trucking' ? 'selected' : '' }}>
                                             Trucking - 9000...
                                          </option>

                                       </select>
                                    </div>
                                 </div>

                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Group:</b></label>
                                    <div class="form-group">
                                       <select class="form-control" name="client_group" id="basicSelect">
                                          <option value="A" {{ old('client_group') == 'A' ? 'selected' : '' }}>Type A</option>
                                          <option value="B" {{ old('client_group') == 'B' ? 'selected' : '' }}>Type B</option>
                                          <option value="C" {{ old('client_group') == 'C' ? 'selected' : '' }}>Type C</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Status:</b></label>
                                    <div class="form-group">
                                       <select class="form-control" name="status" id="basicSelect">
                                          <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                          <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Inactive</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Phone 1:</b><span style="color:red">*</span></label>
                                    <input type="phone" class="form-control " name="phone1" placeholder="" value="<?= old('phone1') ?>" required>
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b> Phone 2:</b></label>
                                    <input type="phone" class="form-control " name="phone2" placeholder="" value="<?= old('phone2') ?>">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Emergency Phone:</b></label>
                                    <input type="phone" class="form-control " name="emer_phone" placeholder="" value="<?php old('emer_phone') ?>">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Fax:</b></label>
                                    <input type="text" class="form-control " name="fax" placeholder="" value="<?= old('fax') ?>">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Street Address:</b> <span style="color:red">*</span></label>
                                    <input type="address" class="form-control " name="street" placeholder="" value="<?= old('street') ?>" required="">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Country:</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="country" placeholder="" value="<?= old('country') ?>" required="">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>State:</b><span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="state" placeholder="" value="<?= old('state') ?>" required="">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>City: </b><span style="color:red">*</span></label>
                                    <input type="text" class="form-control " required name="city" placeholder="" value="">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Zip:</b> <span style="color:red">*</span></label>
                                    <input type="text" class="form-control " name="zip" placeholder="" value="<?= old('zip') ?>" required="">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Emergency Contact:</b></label>
                                    <input type="phone" class="form-control " name="emer_name" placeholder="" value="<?= old('emer_name') ?>">
                                 </div>
                              </div>
                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Attention:</b><span style="color:red">*</span></label>
                                    <input type="text" name="attention" required class="form-control " name="street" placeholder=" " value="<?= old('attention') ?>">
                                 </div>
                              </div>

                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="valid-state"><b>Caller:</b><span style="color:red">*</span></label>
                                    <input type="text" class="form-control " required name="caller_person" placeholder="" value="<?= old('caller_person') ?>">
                                 </div>
                              </div>

                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label for="invalid-state"><b>Compulsory Service Type:</b><span style="color:red">*</span></label>
                                    <div class="form-group">
                                       <select class="form-control" name="service_type_required" required id="basicSelect">
                                          <option value="1" { old('service_type_required')=='1' ? 'selected' : '' }}>Yes</option>
                                          <option value="0" { old('service_type_required')=='0' ? 'selected' : '' }}>No </option>
                                       </select>
                                    </div>
                                 </div>
                              </div>

                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label><b>Job Color:</b></label>
                                    <input
                                       type="color"
                                       name="job_color"
                                       class="form-control form-control-color"
                                       value="<?= old('state' ?? '#3498db') ?>"
                                       title="Choose your color">
                                 </div>
                              </div>








                           </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Web Information:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="invalid-state"><b>Website: </b><span style="color:red">*</span></label>
                                 <input type="text" class="form-control " name="website" placeholder="" value="<?= old('website') ?>" required="">
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"><b>Email:</b> <span style="color:red">*</span></label>
                                 <input type="email" class="form-control " name="email" placeholder="" value="<?= old('email') ?>" required="">
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="invalid-state"><b>User Id (Site Login):</b></label>
                                 <input type="text" class="form-control " name="login_id" placeholder="" value="<?= old('login_id') ?>">
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="invalid-state"><b> Password (Site Login):</b></label>
                                 <input type="text" class="form-control " name="password" placeholder="" value="<?= old('password') ?>">
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="invalid-state"><b>Invoice Email:</b></label>
                                 <input type="email" class="form-control " name="invoice_email" placeholder="" value="<?= old('email') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <label style="position: absolute;top: 27px;background: #c0a9a9;padding: 6px;color: #fff;"><b>Invoice Emailing Address:</b></label>

                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Others:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="invalid-state"><b>Remarks: </b><span style="color:red">*</span></label>
                                 <input type="text" class="form-control " name="remarks" placeholder="" value="<?= old('remarks') ?>" required="">
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <label for="valid-state" style="color: #000;position: absolute;top: 27px;">(It Will Display on Job Entry Time)</label>

                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="invalid-state"><b>Details Notes:</b></label>
                                 <textarea class="form-control" name="remarks_2" rows="3" cols="6" placeholder="" value="<?= old('remarks_2') ?>"></textarea>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Finance / Software Information:</h4>

                        </div>
                     </div>
                     <label for="valid-state"><b>&nbsp;&nbsp;&nbsp;Client Price Code::</b><br>
                        <span style="color:red">&nbsp;&nbsp;&nbsp;Auto Genrate</span></label>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"><b>Account Start Date:</b><span style="color:red">*</span></label>
                                 <div class="form-group">
                                    <input type="date" name="doj" class="form-control" name="doj" required="" value="<?= old('doj') ?>">
                                 </div>
                              </div>

                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"><b>Opening Balancing Date:</b></label>
                                 <div class="form-group">
                                    <input type="date" class="form-control" name="opening_balance_date" value="<?= old('opening_balance_date') ?>">
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"><b>Opening Balance:</b> <span style="color:red">*</span></label>
                                 <input type="text" class="form-control " name="opening_balance" placeholder="" required="" value="<?= old('opening_balance') ?>">
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="invalid-state"><b>Credit Limit:</b><span style="color:red">*</span></label>
                                 <input type="number" class="form-control " name="credit_limit" placeholder="" value="<?= old('credit_limit') ?>" required="">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Special Discount:</label>
                                 <input type="number" class="form-control " name="special_discount" placeholder="" value="<?= old('special_discount') ?>" required="">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Int Rate[30 Days]:</label>
                                 <input type="text" class="form-control " name="int_rate_30" placeholder="" value="<?= old('int_rate_30') ?>" required="">
                              </div>
                           </div>



                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Int Rate[60 Days]:</label>
                                 <input type="text" class="form-control " name="int_rate_60" placeholder="" value="<?= old('int_rate_60') ?>" required="">
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Int Rate[90 Days]:</label>
                                 <input type="text" class="form-control " name="int_rate_90" placeholder="" value="<?= old('int_rate_90') ?>" required="">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Priority:</label><span style="color:red">*</span>
                                 <select class="form-control" name="priority" required>
                                    <?php for ($i = 1; $i <= 10; $i++): ?>
                                       <option value="<?= $i ?>" <?= old('priority') == $i ? 'selected' : '' ?>>
                                          <?= $i ?>
                                       </option>
                                    <?php endfor; ?>
                                 </select>
                              </div>
                           </div>


                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Reffrence Required:</label>
                                 <select class="form-control" name="referencer_required">
                                    <option value="1" <? old('referencer_required') == "1" ? 'selected' : '' ?>>Yes</option>
                                    <option value="0" <? old('referencer_required') == "0" ? 'sselcted' : '' ?>>No</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Billing Method:</label><span style="color:red">*</span>
                                 <select class="form-control" name="billing_method" required>
                                    <option value="daily" <? old('billing_method') == "daily" ? 'selected' : '' ?>>Daily</option>
                                    <option value="weekly" <? old('billing_method') == "weekly" ? 'selected' : '' ?>>Weekly</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Quality Control Window:</label>
                                 <select class="form-control" name="quality_window">
                                    <option value="1" <? old('quality_window') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('quality_window') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>



                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Warehouse:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-3 col-12">

                              <div class="form-group">
                                 <label for="valid-state">Compulsory Serial: <span style="color:red">*</span></label>
                                 <select class="form-control" name="is_wh_sr" required="">
                                    <option value="1" <? old('is_wh_sr') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('is_wh_sr') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Invoice Printouts:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Print inv. Cover Page:</label>
                                 <select class="form-control" name="p_coverpage">
                                    <option value="1" <? old('p_coverpage') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('p_coverpage') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Print inv. Long Details Page:</label>
                                 <select class="form-control" name="p_long">
                                    <option value="1" <? old('p_long') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('p_long') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Print inv. Acc Page:</label>
                                 <select class="form-control" name="billig">
                                    <option value="1" <? old('billig') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('billig') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Print inv. Ref Details Page:</label>
                                 <select class="form-control" name="p_ref_sum">
                                    <option value="1" <? old('p_ref_sum') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('p_ref_sum') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"> Print Job Ticket:</label>
                                 <select class="form-control" name="p_ticket">
                                    <option value="1" <? old('p_ticket') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('p_ticket') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Auto Email:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Job Recieved:</label>
                                 <select class="form-control" name="ae_job">
                                    <option value="1" <? old('ae_job') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('ae_job') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_email_job" value="<? old('a_emnail_job') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">ETD:</label>
                                 <select class="form-control" name="af_del_time">
                                    <option value="1" <? old('af_del_time') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('af_del_time') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_email_del" value="<? old('a_email_del') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Send IC Board Image:</label>
                                 <select class="form-control" name="ae_pickup_image">
                                    <option value="1" <? old('ae_pickup_image') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('ae_pickup_image') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="ae_email_icupdate" value="<? old('ae_email_icupdate') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">POD:</label>
                                 <select class="form-control" name="ae_pod">
                                    <option value="1" <? old('ae_pod') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('ae_pod') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_email_pod" value="<? old('a_email_pod') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Sent Charges:</label>
                                 <select class="form-control" name="  ae_sent_ch">
                                    <option value="1" <? old('ae_sent_ch') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('ae_sent_ch') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_email_ch" value="<? old('a_email_ch') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">On Board Time:</label>
                                 <select class="form-control" name="brd_time_select">
                                    <option value="1" <? old('brd_time_select') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('brd_time_select') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="brd_a_email_time" value="<? old('brd_a_email_time') ?>">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Auto Fax:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Job Recieved:</label>
                                 <select class="form-control" name="af_job">
                                    <option value="1" <? old('af_job') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('af_job') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_fax_job" value="<? old('a_fax_job') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">ETD:</label>
                                 <select class="form-control" name="af_del_time">
                                    <option value="1" <? old('af_del_time') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('af_del_time') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_fax_del" value="<? old('a_fax_del') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">POD:</label>
                                 <select class="form-control" name="af_pod">
                                    <option value="1" <? old('af_pod') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0">no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_fax_pod" value="<? old('a_fax_pod') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">Sent Charges:</label>
                                 <select class="form-control" name="af_sent_ch">
                                    <option value="1" <? old('af_sent_ch') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('af_sent_ch') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_fax_ch" value="<? old('a_fax_ch') ?>">
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state">On Board Time:</label>
                                 <select class="form-control" name="brd_time">
                                    <option value="1" <? old('brd_time') == "1" ? 'selected' : '' ?>>yes</option>
                                    <option value="0" <? old('brd_time') == "0" ? 'selected' : '' ?>>no</option>
                                 </select>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <label for="valid-state"></label>
                                 <input type="text" class="form-control" name="a_email_time">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Alert Information:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-3 col-6">
                                       <label for="valid-state">Auto Web:</label>
                                    </div>
                                    <div class="col-sm-3 col-6">
                                       <select class="form-control" name="web_alert">
                                          <option value="1" <? old('web_alert') == "1" ? 'selected' : '' ?>>yes</option>
                                          <option value="0" <? old('web_alert') == "0" ? 'selected' : '' ?>>no</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-3 col-6">
                                       <label for="valid-state">Auto Call:</label>
                                    </div>
                                    <div class="col-sm-3 col-6">
                                       <select class="form-control" name="auto_alert">
                                          <option value="1" <? old('auto_alert') == "1" ? 'selected' : '' ?>>yes</option>
                                          <option value="0" <? old('auto_alert') == "0" ? 'selected' : '' ?>>no</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-3 col-6">
                                       <label for="valid-state">Job Deadline:</label>
                                    </div>
                                    <div class="col-sm-3 col-6">
                                       <select class="form-control" name="is_job_deadline">
                                          <option value="1" <? old('is_job_deadline') == "1" ? 'selected' : '' ?>>yes</option>
                                          <option value="0" <? old('is_job_deadline') == "0" ? 'selected' : '' ?>>no</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Airport Information:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">1st Airport Code:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="airport1" value="<? old('airport1') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">1st Airport Miles:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="airport_miles1" value="<? old('airport_miles1') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">2nd Airport Codes:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="airport2" value="<? old('airport2') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">2nd Airport Miles:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="airport_miles2" value="<? old('airport_miles2') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">3rd Airport Codes:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="airport3" value="<? old('airport3') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">3rd Airport Miles:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="airport_miles3" value="<? old('airport_miles3') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Sales Person Information:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state"> Sales Person 1:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="sales_person1" value="<? old('sales_person1') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">Sales Person 2:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="sales_person2" value="<? old('sales_person2') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">Sales Person 3:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="sales_person3" value="<? old('sales_person3') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">Sales Person 4:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="sales_person4" value="<? old('sales_person4') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-md-12">
                  <div class="card">

                     <!-- HEADER -->
                     <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Credit Card Information</h4>
                        <button type="button" class="btn btn-sm btn-primary" id="addCardDetail">
                           + Add Credit Card
                        </button>
                     </div>

                     <!-- BODY (ALWAYS VISIBLE) -->
                     <div class="card-body">

                        <!-- MAIN CREDIT CARD SETTINGS (SINGLE) -->
                        <div class="row mb-3">

                           <div class="col-sm-3 col-12">
                              <label>Card Holder Name <span class="text-danger">*</span></label>
                              <input type="text" class="form-control" name="card_name">
                           </div>

                           <div class="col-sm-3 col-12">
                              <label>Accept Credit Card <span class="text-danger">*</span></label>
                              <select class="form-control" name="cc_accept">
                                 <option value="1">yes</option>
                                 <option value="0">no</option>
                              </select>
                           </div>

                           <div class="col-sm-3 col-12">
                              <label>Auto Credit Card <span class="text-danger">*</span></label>
                              <select class="form-control" name="cc_auto_pay">
                                 <option value="1">yes</option>
                                 <option value="0">no</option>
                              </select>
                           </div>

                        </div>

                        <hr>

                        <!-- CARD DETAILS (MULTIPLE) -->
                        <h6 class="mb-2">Card Details</h6>

                        <div id="cardDetailsWrapper">

                           <!-- DEFAULT CARD ROW -->
                           <div class="card-detail-row border p-2 mb-2">
                              <div class="row">

                                 <div class="col-sm-3">
                                    <label>Credit Card Name</label>
                                    <input type="text" name="card_type[]" class="form-control">
                                 </div>

                                 <div class="col-sm-3">
                                    <label>Credit Card No</label>
                                    <input type="text" name="card_num[]" class="form-control">
                                 </div>

                                 <div class="col-sm-2">
                                    <label>Exp Month</label>
                                    <input type="text" name="card_exp_month[]" class="form-control">
                                 </div>

                                 <div class="col-sm-2">
                                    <label>Exp Year</label>
                                    <input type="text" name="card_exp_year[]" class="form-control">
                                 </div>

                                 <div class="col-sm-1">
                                    <label>CVV</label>
                                    <input type="password" name="card_cvv2_code[]" class="form-control">
                                 </div>

                                 <div class="col-sm-1 d-flex align-items-end">
                                    <button type="button" class="btn btn-danger removeCardRow">✕</button>
                                 </div>

                              </div>
                           </div>

                        </div>

                     </div>
                  </div>
               </div>
            </div>


            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-header">
                        <div>
                           <h4 class="card-title">Billing Information:</h4>

                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">Name:<span style="color:red">*</span></label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_name" required="" value="<?= old('card_name') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">Address:<span style="color:red">*</span></label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_address" required="" value="<?= old('card_address') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">City:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_city" value="<?= old('card_city') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">State:</label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_state" value="<?= old('card_state') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">Zipcode:<span style="color:red">*</span></label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_zip" required="" value="<?= old('card_zip') ?>">
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-3 col-12">
                              <div class="form-group">
                                 <div class="row">
                                    <div class="col-sm-4 col-6">
                                       <label for="valid-state">Phone:<span style="color:red">*</span></label>
                                    </div>
                                    <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_phone" required="" value="<?= old('card_phone') ?>"><br><br>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-sm-12 col-12">
                              <div class="form-group">
                                 <button class="btn btn-primary waves-effect waves-float waves-light" type="submit" style="min-width: 180px; width: auto; height: 40px; margin-top: 16px;">Submit</button>
                              </div>
                           </div>
                        </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>

      </div>
   </div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- BEGIN: Page JS-->


   <!-- END: Page JS-->

   <script>
      $(document).ready(function() {
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

   <script type="text/javascript">
      $(document).ready(function() {


         $("#client_form").on('submit', (function(e) {
            alert('Details Added Success');
            $.ajax({
               type: "POST",
               url: "<?php echo site_url('clients/createclient'); ?>",
               data: new FormData(this),
               contentType: false,
               cache: false,
               processData: false,
               beforeSend: function() {},
               success: function(data) {

                  $('.branch').val('');
                  $('.group').val('');
                  $('.status').val('');
                  $('.attention').val('');
                  $('.phone1').val('');
                  $('.phone2').val('');
                  $('.name').val('');
                  $('.caller_person').val('');
                  $('.fax').val('');
                  $('.street').val('');
                  $('.emer_name').val('');
                  $('.city').val('');
                  $('.emer_phone').val('');
                  $('.zip').val('');
                  $('.status').val('');
                  $('.country').val('');
                  $('.website').val('');
                  $('.email').val('');
                  $('.login_id').val('');
                  $('.password').val('');
                  $('.invoice_email').val('');
                  $('.remarks').val('');
                  $('.remarks_2').val('');
                  $('.doj').val('');
                  $('.opening_balance_date').val('');
                  $('.credit_limit').val('');
                  $('.opening_balance').val('');
                  $('.special_discount').val('');
                  $('.int_rate_30').val('');
                  $('.referencer_required').val('');
                  $('.int_rate_60').val('');
                  $('.priority').val('');
                  $('.int_rate_90').val('');
                  $('.billing_method').val('');
                  $('.quality_window').val('');
                  $('.p_coverpage').val('');
                  $('.p_long').val('');
                  $('.p_ref_sum').val('');
                  $('.a_email_job').val('');
                  $('.af_del_time').val('');

                  $('.a_fax_pod').val('');
                  $('.a_fax_ch').val('');
                  $('.web_alert').val('');
                  $('.auto_alert').val('');
                  $('.airport1').val('');
                  $('.airport_miles1').val('');
                  $('.airport2').val('');
                  $('.airport_miles2').val('');
                  $('.airport3').val('');
                  $('.airport_miles3').val('');
                  $('.sales_person1').val('');
                  $('.sales_person2').val('');
                  $('.sales_person3').val('');
                  $('.sales_person4').val('');
                  $('.cc_accept').val('');
                  $('.cc_auto_pay').val('');
                  $('.card_name').val('');
                  $('.card_no').val('');
                  $('.card_address').val('');
                  $('.card_city').val('');
                  $('.card_state').val('');
                  $('.card_phone').val('');

               }
            });

            return false;

         }));

      });
   </script>

   <script>
      $(document).ready(function() {

         $('#addCardDetail').click(function() {

            let row = `
    <div class="card-detail-row border p-2 mb-2">
      <div class="row">

        <div class="col-sm-3">
          <input type="text" name="card_type[]" class="form-control" placeholder="Card Name">
        </div>

        <div class="col-sm-3">
          <input type="text" name="card_num[]" class="form-control" placeholder="Card No">
        </div>

        <div class="col-sm-2">
          <input type="text" name="card_exp_month[]" class="form-control" placeholder="MM">
        </div>

        <div class="col-sm-2">
          <input type="text" name="card_exp_year[]" class="form-control" placeholder="YYYY">
        </div>

        <div class="col-sm-1">
          <input type="password" name="card_cvv2_code[]" class="form-control" placeholder="CVV">
        </div>

        <div class="col-sm-1">
          <button type="button" class="btn btn-danger removeCardRow">✕</button>
        </div>

      </div>
    </div>`;

            $('#cardDetailsWrapper').append(row);
         });

         $(document).on('click', '.removeCardRow', function() {
            $(this).closest('.card-detail-row').remove();
         });

      });
   </script>
   <script>
      $(function () {
         var cardForm = $('form[action*="/clients/createclient"]').first();
         if (!cardForm.length) {
            return;
         }

         cardForm.on('submit', function () {
            var $form = $(this);
            var $rows = $('#cardDetailsWrapper .card-detail-row');
            if (!$rows.length) {
               return true;
            }

            var cards = [];
            $rows.each(function () {
               var $row = $(this);
               var card = {
                  card_type: ($row.find('input[name="card_type[]"]').val() || '').trim(),
                  card_num: ($row.find('input[name="card_num[]"]').val() || '').trim(),
                  card_exp_month: ($row.find('input[name="card_exp_month[]"]').val() || '').trim(),
                  card_exp_year: ($row.find('input[name="card_exp_year[]"]').val() || '').trim(),
                  card_cvv2_code: ($row.find('input[name="card_cvv2_code[]"]').val() || '').trim()
               };

               if (card.card_type || card.card_num || card.card_exp_month || card.card_exp_year || card.card_cvv2_code) {
                  cards.push(card);
               }
            });

            $form.find('.generated-card-input').remove();

            $('#cardDetailsWrapper input[name="card_type[]"], #cardDetailsWrapper input[name="card_num[]"], #cardDetailsWrapper input[name="card_exp_month[]"], #cardDetailsWrapper input[name="card_exp_year[]"], #cardDetailsWrapper input[name="card_cvv2_code[]"]').removeAttr('name');

            cards.forEach(function (card) {
               $('<input>', { type: 'hidden', name: 'card_type[]', value: card.card_type, class: 'generated-card-input' }).appendTo($form);
               $('<input>', { type: 'hidden', name: 'card_num[]', value: card.card_num, class: 'generated-card-input' }).appendTo($form);
               $('<input>', { type: 'hidden', name: 'card_exp_month[]', value: card.card_exp_month, class: 'generated-card-input' }).appendTo($form);
               $('<input>', { type: 'hidden', name: 'card_exp_year[]', value: card.card_exp_year, class: 'generated-card-input' }).appendTo($form);
               $('<input>', { type: 'hidden', name: 'card_cvv2_code[]', value: card.card_cvv2_code, class: 'generated-card-input' }).appendTo($form);
            });

            return true;
         });
      });
   </script>
<?= $this->endSection() ?>





