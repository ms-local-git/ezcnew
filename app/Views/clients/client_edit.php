<?= $this->extend('layouts/app') ?>
<?php $request = $request ?? \Config\Services::request(); ?>

<?= $this->section('content') ?>
        <section id="new-client">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                           <div class="card-header">
                              <div>
                                 <h4 class="card-title">Edit Client :</h4>
                                 <br>
                                 <h5>Client General Information</h5>
                              </div>
                           </div>
                           <div class="card-body">
                              <form class="form" action="<?= base_url() ?>/clients/updateclient" method="POST">
                              <div class="row">
                                 <input type="hidden" name="id" value="<?= $row->account_no ?>">
                                 <div class="col-md-6 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Branch:</b></label>
                                       <div class="form-group">
                                          <select class="form-control" name="branch" id="basicSelect">
                                            <option value="online" <?= ($row->branch == 'online') ? 'selected' : '' ?>>Online - 2000...</option>
                                             <option value="nj" <?= ($row->branch == 'nj') ? 'selected' : '' ?>>New Jersey - 4000...</option>
                                             <option value="ezwarehouse" <?= ($row->branch == 'ezwarehouse') ? 'selected' : '' ?>>E Z Trucking &amp; Warehousing - 5000...</option>
                                             <option value="ny" <?= ($row->branch == 'ny') ? 'selected' : '' ?>>New York -7000...</option>
                                             <option value="trucking" <?= ($row->branch == 'trucking') ? 'selected' : '' ?>>Trucking - 9000...</option>
                                          </select>
                                       </div>
                                    </div>
                                    <label for="valid-state"><b>Account no:</b>&nbsp;
                                    <span style="color:red">Auto Genrate</span></label>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="basicSelect"><b>Group</b></label>
                                       <select class="form-control" name="client_group" id="basicSelect">
                                          <option value="A" <?= ($row->client_group == 'A') ? 'selected' : '' ?>>Type A</option>
                                          <option value="B" <?= ($row->client_group == 'B') ? 'selected' : '' ?>>Type B</option>
                                          <option value="C" <?= ($row->client_group == 'C') ? 'selected' : '' ?>>Type C</option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Status</b></label>
                                       <div class="form-group">
                                          <select class="form-control" name="status" id="basicSelect">
                                             <option value="1"  <?= ($row->status == '1') ? 'selected' : '' ?>>Active</option>
                                             <option value="0"<?= ($row->status == '0') ? 'selected': ''?>>Inactive</option>
                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Attention : </b><span style="color:red">*</span></label>
                                       <input type="text" name="attention" class="form-control " placeholder=" " value="<?= $row->attention ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Phone 1 : </b><span style="color:red">*</span></label>
                                       <input type="phone" class="form-control " name="phone1" placeholder="" value="<?= $row->phone1 ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Client Name :</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="name" placeholder="" value="<?= $row->name ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>After Hour. Phone 2:</b></label>
                                       <input type="phone" class="form-control " name="phone2" placeholder="" value="<?= $row->phone2 ?>">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Caller : </b><span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="caller_person" placeholder="" value="<?= $row->caller_person ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Fax:</b></label>
                                       <input type="text" class="form-control " name="fax" placeholder="" value="<?= $row->fax ?>">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Street Address :</b> <span style="color:red">*</span></label>
                                       <input type="address" class="form-control " name="street" placeholder="" value="<?= $row->street ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Emergency Contact:</b></label>
                                       <input type="phone" class="form-control " name="emer_name" placeholder="" value="<?= $row->emer_name ?>">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>City : </b><span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="city" placeholder="" value="<?= $row->city ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Emergency Phone:</b></label>
                                       <input type="phone" class="form-control " name="emer_phone" placeholder="" value="<?= $row->emer_phone ?>">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Zip :</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="zip" placeholder="" value="<?= $row->zip ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>State : </b><span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="state" placeholder="" value="<?= $row->state ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Country :</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="country" placeholder="" value="<?= $row->country ?>" required="">
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label><b>Compulsory Service Type:</b><span class="text-danger">*</span></label>
                                       <select class="form-control" name="service_type_required" required>
                                          <option value="1" <?= ($row->service_type_required == 1) ? 'selected' : '' ?>>Yes</option>
                                          <option value="0" <?= ($row->service_type_required == 0) ? 'selected' : '' ?>>No</option>
                                       </select>

                                    </div>
                                    </div>

                                    <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label><b>Job Color:</b></label>
                                       <input type="color"
                                             name="job_color"
                                             class="form-control form-control-color"
                                             value="<?= $row->job_color ?? '#3498db' ?>">
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
                                 <h4 class="card-title">Web Information :</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Website : </b><span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="website" placeholder="" value="<?= $row->website ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Email :</b> <span style="color:red">*</span></label>
                                       <input type="email" class="form-control " name="email" placeholder="" value="<?= $row->email ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>User Id (Site Login):</b></label>
                                       <input type="text" class="form-control " name="login_id" placeholder="" value="<?= $row->login_id ?>">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b> Password (Site Login):</b></label>
                                       <input type="text" class="form-control " name="password" placeholder="" value="<?= $row->password ?>">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Invoice Email:</b></label>
                                       <input type="email" class="form-control " name="invoice_email" placeholder="" value="<?= $row->invoice_email ?>">
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
                                 <h4 class="card-title">Others :</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Remarks : </b><span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="remarks" placeholder="" value="<?= $row->remarks ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                  <label for="valid-state" style="color: #000;position: absolute;top: 27px;">(It Will Display on Job Entry Time)</label>
                                       
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Details Notes:</b></label>
                                       <textarea class="form-control" name="remarks_2" rows="3" placeholder="" value="<?= $row->remarks_2 ?>"></textarea>
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
                                 <h4 class="card-title">Finance / Software Information :</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-md-6 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Account Start Date:</b></label>
                                       <div class="form-group">
                                          <input type="date"  name="doj" class="form-control" name="doj" value="<?= $row->doj ?>">
                                       </div>
                                    </div>
                                    
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label style="    position: absolute;top: 30px;"><b>Account no:</b>&nbsp;
                                    <span style="color:red">Auto Genrate</span></label>
                                    </div>
                                 </div>
                                 
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Opening Balancing Date:</b></label>
                                       <div class="form-group">
                                          <input type="date"  class="form-control" name="opening_balance_date" value="<?= $row->opening_balance_date ?>">
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="invalid-state"><b>Credit Limit : </b><span style="color:red">*</span></label>
                                       <input type="number" class="form-control " name="credit_limit" placeholder="" value="<?= $row->credit_limit ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state"><b>Opening Balance :</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control " name="opening_balance" placeholder="" value="<?= $row->opening_balance ?>" required="">
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Special Discount :</label>
                                       <input type="number" class="form-control " name="special_discount" placeholder="" value="<?= $row->special_discount ?>" required="">
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Int Rate[30 Days] :</label>
                                       <input type="text" class="form-control " name="int_rate_30" placeholder="" value="<?= $row->int_rate_30 ?>" required="">
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Reffrence Required :</label>
                                       <select class="form-control" name="referencer_required">
                                             <option value="1" <?= ($row->referencer_required == '1') ? 'selected' : '' ?>>Yes</option>
                                             <option value="0" <?= ($row->referencer_required == '0') ? 'selected' : '' ?>>No</option>
                                          </select>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Int Rate[60 Days] :</label>
                                       <input type="text" class="form-control " name="int_rate_60" placeholder="" value="<?= $row->int_rate_60 ?>" >
                                    </div>
                                 </div>

                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Priority:</label><span style="color:red">*</span>
                                       <select class="form-control" name="priority" required>
                                          <?php for ($i = 1; $i <= 10; $i++): ?>
                                             <option value="<?= $i ?>" <?= (isset($row->priority) && $row->priority == $i) ? 'selected' : '' ?>>
                                                <?= $i ?>
                                             </option>
                                          <?php endfor; ?>
                                       </select>
                                    </div>
                                 </div>


                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Int Rate[90 Days] :</label>
                                       <input type="text" class="form-control " name="int_rate_90" placeholder="" value="<?= $row->int_rate_90 ?>" required="">
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Billing Method :</label>
                                       <select class="form-control" name="billing_method">
                                             <option value="daily" <?= ($row->billing_method == 'daily') ? 'selected' : '' ?>>Daily</option>
                                             <option value="weekly"<?= ($row->billing_method == 'weekly') ? 'selected' : '' ?>>Weekly</option>
                                          </select>
                                    </div>

                                    <div class="form-group">
                                       <label for="valid-state">Quality Control Window :</label>
                                       <select class="form-control" name="quality_window">
                                             <option value="1"<?= ($row->quality_window == '1') ? 'selected' : '' ?>>yes</option>
                                             <option value="0" <?= ($row->quality_window == '0') ? 'selected' : '' ?>>no</option>
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
                                 <h4 class="card-title">Werehouse :</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 <div class="col-sm-3 col-12">
                                    
                                    <div class="form-group">
                                       <label for="valid-state">Compulsory Serial :</label>
                                       <select class="form-control" name="compulsory">

                                             <option value="1">yes</option>
                                             <option value="0">no</option>
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
                                 <h4 class="card-title">Invoice Printouts :</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Print inv. Cover Page :</label>
                                       <select class="form-control" name="p_coverpage">
                                          <option value="1" <?= ($row->p_coverpage == 'yes') ? 'selected' : '' ?>>Yes</option>
                                          <option value="0"  <?= ($row->p_coverpage == 'no')  ? 'selected' : '' ?>>No</option>
                                       </select>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Print inv. Long Details Page :</label>
                                       <select class="form-control" name="p_long">
                                          <option value="1" <?= ($row->p_long == 'yes') ? 'selected' : '' ?>>Yes</option>
                                          <option value="0"  <?= ($row->p_long == 'no')  ? 'selected' : '' ?>>No</option>
                                       </select>
                                    </div>
                                 </div>


                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Print inv. Acc Page :</label>
                                       <select class="form-control" name="p_ac_page">
                                             <option value="1">yes</option>
                                             <option value="1">no</option>
                                          </select>
                                    </div>
                                 </div>
                                <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label for="valid-state">Print inv. Rcf Details Page :</label>
                                       <select class="form-control" name="p_ref_sum">
                                             <option value="1" <?= ($row->p_ref_sum == 'yes') ? 'selected' : '' ?>>yes</option>
                                             <option value="1" <?= ($row->p_ref_sum == 'no') ? 'selected' : '' ?>>no</option>
                                          </select>
                                    </div>
                                 </div>
                                
                              </div>

                              <div class="col-sm-3 col-12">
                                 <div class="form-group">
                                    <label>Print Job Ticket:</label>
                                    <select class="form-control" name="p_ticket">
                                       <option value="1" <?= ($row->p_ticket == 'yes') ? 'selected' : '' ?>>yes</option>
                                       <option value="0" <?= ($row->p_ticket == 'no') ? 'selected' : '' ?>>no</option>
                                    </select>
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
                        <h4 class="card-title">Auto Email :</h4>
                     </div>

                     <div class="card-body">
                        <div class="row">

                           <!-- Job Received -->
                           <div class="col-sm-3 col-12">
                              <label>Job Received :</label>
                              <select class="form-control" name="ae_job">
                                 <option value="">Select</option>
                                 <option value="1" <?= ($row->ae_job == 1) ? 'selected' : '' ?>>Yes</option>
                                 <option value="0" <?= ($row->ae_job == 0) ? 'selected' : '' ?>>No</option>
                              </select>
                           </div>

                           <div class="col-sm-3 col-12">
                              <input type="text" class="form-control" name="a_email_job"
                                    placeholder="Job Email"
                                    value="<?= $row->a_email_job ?>">
                           </div>

                           <!-- ETD -->
                           <div class="col-sm-3 col-12">
                              <label>ETD :</label>
                              <select class="form-control" name="af_del_time">
                                 <option value="">Select</option>
                                 <option value="1" <?= ($row->af_del_time == 1) ? 'selected' : '' ?>>Yes</option>
                                 <option value="0" <?= ($row->af_del_time == 0) ? 'selected' : '' ?>>No</option>
                              </select>
                           </div>

                           <div class="col-sm-3 col-12">
                              <input type="text" class="form-control" name="a_email_del"
                                    placeholder="ETD Email"
                                    value="<?= $row->a_email_del ?>">
                           </div>

                           <!-- IC Board Image -->
                           <div class="col-sm-3 col-12">
                              <label>Send IC Board Image :</label>
                              <select class="form-control" name="ae_pickup_image">
                                 <option value="">Select</option>
                                 <option value="1" <?= ($row->ae_pickup_image == 1) ? 'selected' : '' ?>>Yes</option>
                                 <option value="0" <?= ($row->ae_pickup_image == 0) ? 'selected' : '' ?>>No</option>
                              </select>
                           </div>

                           <div class="col-sm-3 col-12">
                              <input type="text" class="form-control" name="ae_email_icupdate"
                                    placeholder="IC Board Email"
                                    value="<?= $row->ae_email_icupdate ?>">
                           </div>

                           <!-- POD -->
                           <div class="col-sm-3 col-12">
                              <label>POD :</label>
                              <select class="form-control" name="ae_pod">
                                 <option value="">Select</option>
                                 <option value="1" <?= ($row->ae_pod == 1) ? 'selected' : '' ?>>Yes</option>
                                 <option value="0" <?= ($row->ae_pod == 0) ? 'selected' : '' ?>>No</option>
                              </select>
                           </div>

                           <div class="col-sm-3 col-12">
                              <input type="text" class="form-control" name="a_email_pod"
                                    placeholder="POD Email"
                                    value="<?= $row->a_email_pod ?>">
                           </div>

                           <!-- Sent Charges -->
                           <div class="col-sm-3 col-12">
                              <label>Sent Charges :</label>
                              <select class="form-control" name="ae_sent_ch">
                                 <option value="">Select</option>
                                 <option value="1" <?= ($row->ae_sent_ch == 1) ? 'selected' : '' ?>>Yes</option>
                                 <option value="0" <?= ($row->ae_sent_ch == 0) ? 'selected' : '' ?>>No</option>
                              </select>
                           </div>

                           <div class="col-sm-3 col-12">
                              <input type="text" class="form-control" name="a_email_ch"
                                    placeholder="Charges Email"
                                    value="<?= $row->a_email_ch ?>">
                           </div>

                           <!-- On Board Time -->
                           <div class="col-sm-3 col-12">
                              <label>On Board Time :</label>
                              <select class="form-control" name="brd_time_select">
                                 <option value="">Select</option>
                                 <option value="1" <?= ($row->brd_time_select == 1) ? 'selected' : '' ?>>Yes</option>
                                 <option value="0" <?= ($row->brd_time_select == 0) ? 'selected' : '' ?>>No</option>
                              </select>
                           </div>

                           <div class="col-sm-3 col-12">
                              <input type="text" class="form-control" name="brd_a_email_time"
                                    placeholder="On Board Email"
                                    value="<?= $row->brd_a_email_time ?>">
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
                              <h4 class="card-title">Auto Fax :</h4>
                           </div>

                              <div class="card-body">
                                 <div class="row">

                                    <!-- Job Received -->
                                    <div class="col-sm-3 col-12">
                                       <label>Job Received :</label>
                                       <select class="form-control" name="af_job">
                                          <option value="">Select</option>
                                          <option value="1" <?= ($row->af_job == 1) ? 'selected' : '' ?>>Yes</option>
                                          <option value="0" <?= ($row->af_job == 0) ? 'selected' : '' ?>>No</option>
                                       </select>
                                    </div>

                                    <div class="col-sm-3 col-12">
                                       <input type="text" class="form-control" name="a_fax_job"
                                             placeholder="Job Fax No / Email"
                                             value="<?= $row->a_fax_job ?? '' ?>">
                                    </div>

                                    <!-- ETD -->
                                    <div class="col-sm-3 col-12">
                                       <label>ETD :</label>
                                       <select class="form-control" name="af_del_time">
                                          <option value="">Select</option>
                                          <option value="1" <?= ($row->af_del_time == 1) ? 'selected' : '' ?>>Yes</option>
                                          <option value="0" <?= ($row->af_del_time == 0) ? 'selected' : '' ?>>No</option>
                                       </select>
                                    </div>

                                    <div class="col-sm-3 col-12">
                                       <input type="text" class="form-control" name="a_fax_del"
                                             placeholder="ETD Fax No / Email"
                                             value="<?= $row->a_fax_del ?? '' ?>">
                                    </div>

                                    <!-- POD -->
                                    <div class="col-sm-3 col-12">
                                       <label>POD :</label>
                                       <select class="form-control" name="af_pod">
                                          <option value="">Select</option>
                                          <option value="1" <?= ($row->af_pod == 1) ? 'selected' : '' ?>>Yes</option>
                                          <option value="0" <?= ($row->af_pod == 0) ? 'selected' : '' ?>>No</option>
                                       </select>
                                    </div>

                                    <div class="col-sm-3 col-12">
                                       <input type="text" class="form-control" name="a_fax_pod"
                                             placeholder="POD Fax No / Email"
                                             value="<?= $row->a_fax_pod ?? '' ?>">
                                    </div>

                                    <!-- Sent Charges -->
                                    <div class="col-sm-3 col-12">
                                       <label>Sent Charges :</label>
                                       <select class="form-control" name="af_sent_ch">
                                          <option value="">Select</option>
                                          <option value="1" <?= ($row->af_sent_ch == 1) ? 'selected' : '' ?>>Yes</option>
                                          <option value="0" <?= ($row->af_sent_ch == 0) ? 'selected' : '' ?>>No</option>
                                       </select>
                                    </div>

                                    <div class="col-sm-3 col-12">
                                       <input type="text" class="form-control" name="a_fax_ch"
                                             placeholder="Charges Fax No / Email"
                                             value="<?= $row->a_fax_ch ?? '' ?>">
                                    </div>

                                    <!-- On Board Time -->
                                    <div class="col-sm-3 col-12">
                                       <label>On Board Time :</label>
                                       <select class="form-control" name="brd_time_select">
                                          <option value="">Select</option>
                                          <option value="1" <?= ($row->brd_time_select == 1) ? 'selected' : '' ?>>Yes</option>
                                          <option value="0" <?= ($row->brd_time_select == 0) ? 'selected' : '' ?>>No</option>
                                       </select>
                                    </div>

                                    <div class="col-sm-3 col-12">
                                       <input type="text" class="form-control" name="brd_a_email_time"
                                             placeholder="On Board Fax No / Email"
                                             value="<?= $row->brd_a_email_time ?? '' ?>">
                                    </div>

                                 </div>
                              </div>
                     </div>

                  </div>
               </div>



                <?php
$row   = $row   ?? (object)[];
$cards = $cards ?? [];
?>

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

      <div class="card-body">

        <!-- MAIN SETTINGS (SINGLE VALUES) -->
        <div class="row mb-3">

          <div class="col-sm-4">
            <label>Billing Card Holder Name</label>
            <input type="text"
                   class="form-control"
                   name="billing_card_name"
                   value="<?= esc($row->card_name ?? '') ?>">
          </div>

          <div class="col-sm-4">
            <label>Accept Credit Card</label>
            <select class="form-control" name="cc_accept">
              <option value="1" <?= ($row->cc_accept == 1) ? 'selected' : '' ?>>Yes</option>
              <option value="0" <?= ($row->cc_accept == 0) ? 'selected' : '' ?>>No</option>
            </select>
          </div>

          <div class="col-sm-4">
            <label>Auto Credit Card</label>
            <select class="form-control" name="cc_auto_pay">
              <option value="1" <?= ($row->cc_auto_pay == 1) ? 'selected' : '' ?>>Yes</option>
              <option value="0" <?= ($row->cc_auto_pay == 0) ? 'selected' : '' ?>>No</option>
            </select>
          </div>

        </div>

        <hr>

        <!-- MULTIPLE CARD DETAILS -->
        <h6 class="mb-2">Card Details</h6>

        <div id="cardDetailsWrapper">

          <?php if (!empty($cards)) : foreach ($cards as $c) : ?>
            <div class="card-detail-row border p-2 mb-2">
              <div class="row">

                <div class="col-sm-3">
                  <input type="text"
                         class="form-control"
                         name="card_type[]"
                         placeholder="Card Type"
                         value="<?= esc($c->card_type ?? '') ?>">
                </div>

                <div class="col-sm-3">
                  <input type="text"
                         class="form-control"
                         name="card_num[]"
                         placeholder="Card Number"
                         value="<?= esc($c->card_no ?? '') ?>">
                </div>

                <div class="col-sm-2">
                  <input type="text"
                         class="form-control"
                         name="card_exp_month[]"
                         placeholder="MM"
                         value="<?= esc($c->card_exp_month ?? '') ?>">
                </div>

                <div class="col-sm-2">
                  <input type="text"
                         class="form-control"
                         name="card_exp_year[]"
                         placeholder="YYYY"
                         value="<?= esc($c->card_exp_year ?? '') ?>">
                </div>

                <div class="col-sm-1">
                  <input type="password"
                         class="form-control"
                         name="card_cvv2_code[]"
                         placeholder="CVV"
                         value="<?= esc($c->card_cvv2_code ?? '') ?>">
                </div>

                <div class="col-sm-1 d-flex align-items-end">
                  <button type="button" class="btn btn-danger removeCardRow">✕</button>
                </div>

              </div>
            </div>
          <?php endforeach; else : ?>

          <!-- DEFAULT EMPTY ROW -->
          <div class="card-detail-row border p-2 mb-2">
            <div class="row">

              <div class="col-sm-3">
                <input type="text" class="form-control" name="card_type[]" placeholder="Card Type">
              </div>

              <div class="col-sm-3">
                <input type="text" class="form-control" name="card_num[]" placeholder="Card Number">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" name="card_exp_month[]" placeholder="MM">
              </div>

              <div class="col-sm-2">
                <input type="text" class="form-control" name="card_exp_year[]" placeholder="YYYY">
              </div>

              <div class="col-sm-1">
                <input type="password" class="form-control" name="card_cvv2_code[]" placeholder="CVV">
              </div>

              <div class="col-sm-1 d-flex align-items-end">
                <button type="button" class="btn btn-danger removeCardRow">✕</button>
              </div>

            </div>
          </div>

          <?php endif; ?>

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
                                 <h4 class="card-title">Billing Information :</h4>
                                 
                              </div>
                           </div>
                           <div class="card-body">
                              <div class="row">
                                 
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-4 col-6">
                                       <label for="valid-state">Name :</label>
                                       </div>
                                       <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_name" value="<?= $row->card_name ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-4 col-6">
                                       <label for="valid-state">Address :</label>
                                       </div>
                                       <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_address" value="<?= $row->card_address ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-4 col-6">
                                       <label for="valid-state">City :</label>
                                       </div>
                                       <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_city" value="<?= $row->card_city ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-4 col-6">
                                       <label for="valid-state">State :</label>
                                       </div>
                                       <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_state" value="<?= $row->card_state ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-4 col-6">
                                       <label for="valid-state">Zipcode :</label>
                                       </div>
                                       <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_zip" value="<?= $row->card_zip ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <div class="row">
                                        <div class="col-sm-4 col-6">
                                       <label for="valid-state">Phone :</label>
                                       </div>
                                       <div class="col-sm-8 col-6">
                                       <input type="text" class="form-control" name="card_phone" value="<?= $row->card_phone ?>">
                                      </div>
                                        </div>
                                    </div>
                                 </div>

                                 <div class="col-sm-12 col-12">
                                    <div class="form-group">
                                      <button class="btn btn-primary waves-effect waves-float waves-light" type="submit" style="min-width: 180px; width: auto;
                    height: 40px;
                    margin-top: 16px;">Submit</button>
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
                if(isset($search)) { 
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
      $(document).ready(function(){
      
      
      $("#client_form").on('submit',(function(e) {
      alert('Details Added Success');
      $.ajax({
          type: "POST",
           url: "<?php echo site_url('clients/createclient'); ?>",
          data: new FormData(this),
          contentType: false,
          cache: false,
          processData: false,
          beforeSend: function(){
          },
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
      $(document).ready(function () {

      $('#addCardDetail').click(function () {
         let row = `
         <div class="card-detail-row border p-2 mb-2">
            <div class="row">

            <div class="col-sm-3">
               <input type="text" name="card_type[]" class="form-control" placeholder="Card Type">
            </div>

            <div class="col-sm-3">
               <input type="text" name="card_num[]" class="form-control" placeholder="Card Number">
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

      $(document).on('click', '.removeCardRow', function () {
         $(this).closest('.card-detail-row').remove();
      });

      });
   </script>
   <script>
      $(function () {
         var cardForm = $('form[action*="/clients/updateclient"]').first();
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









