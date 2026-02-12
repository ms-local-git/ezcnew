<?= $this->extend('layouts/app') ?>

<?= $this->section('page_header') ?>
<div class="content-header row">
   <div class="content-header-left col-md-9 col-12 mb-2">
      <h2 class="content-header-title mb-0">Edit Agent</h2>
      <p class="text-muted mt-1">
         Edit Agent
      </p>
   </div>
</div>


<?= $this->endSection() ?>



<?= $this->section('content') ?>
<section name="invoice-printout">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-header">
               <div>
                  <h6 class="card-title">Edit Agent ::</h6>
                  <br />
               </div>
            </div>
            <div class="card-body">
               <form action="<?= base_url() ?>/Agent/update" method="POST" enctype="multipart/form-data">
                  <div class="row">
                     <div class="col-sm-12 col-12">
                        <div class="form-group">
                           <label for="valid-state"><b>Agent Name: </b><span style="color:red">*</span></label>
                           <input type="hidden" class="form-control " name="id" placeholder=" " value="<?= $row['id'] ?>" required />
                           <input type="text" class="form-control " name="agent_name" placeholder=" " value="<?= $row['agent_name'] ?>" required />
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="valid-state"><b>Phone 1: </b></label>
                           <input type="text" class="form-control " name="phone" placeholder=" " value="<?= $row['phone'] ?>" required />
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="valid-state"><b>Phone 2:</b> </label>
                           <input type="text" class="form-control " name="em_phone" placeholder="" value="<?= $row['em_phone'] ?>">
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>Cell Phone:</b> </label>
                           <input type="text" class="form-control " name="cellphone" placeholder="" value="<?= $row['cellphone'] ?>">
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="valid-state"><b>Fax : </b> <span style="color:red">*</span></label>
                           <input type="text" class="form-control " name="fax" value="<?= $row['fax'] ?>" required />
                        </div>
                     </div>

                     <div class="col-sm-12 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>Notes:</b> </label>
                           <textarea class="form-control" name="notes" rows="3" value="<?= $row['notes'] ?>"></textarea>
                        </div>
                     </div>
                  </div>

                  <div class="card-header">
                     <div>
                        <h6 class="card-title">Other Personal Information ::</h6>
                        <br />
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="valid-state"><b>Starting Date: </b><span style="color:red">*</span></label>
                           <input type="date" class="form-control " name="start_date" placeholder=" " value="<?= $row['start_date'] ?>" required />
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="valid-state"><b>Customer Account: </b></label>
                           <input type="text" class="form-control " name="customer_no" placeholder=" " value="<?= $row['customer_no'] ?>" required />
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="valid-state"><b>Street Address:</b> </label>
                           <input type="text" class="form-control " name="address1" placeholder="" value="<?= $row['address1'] ?>">
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>Category:</b> </label>
                           <select class="form-control " name="category">
                              <option>Select</option>
                              <option value="<?= $row['category'] ?>"><?= $row['category'] ?></option>
                           </select>
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="valid-state"><b>City : </b> <span style="color:red">*</span></label>
                           <input type="text" class="form-control " name="city" placeholder="" value="<?= $row['city'] ?>" required />
                        </div>
                     </div>

                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>Email:</b> </label>
                           <input type="text" class="form-control" name="email" value="<?= $row['email'] ?>">
                        </div>
                     </div>

                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>State:</b> </label>
                           <input type="text" class="form-control" name="state">
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>Website:</b> </label>
                           <input type="text" class="form-control" name="website" value="<?= $row['website'] ?>">
                        </div>
                     </div>

                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>ZIP Code:</b> </label>
                           <input type="text" class="form-control" name="zip" value="<?= $row['zip'] ?>">
                        </div>
                     </div>

                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>Attention Person:</b> </label>
                           <input type="text" class="form-control" name="attention" value="<?= $row['attention'] ?>">
                        </div>
                     </div>

                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>AIN No:</b> </label>
                           <input type="text" class="form-control" name="ain" value="<?= $row['ain'] ?>">
                        </div>
                     </div>
                     <div class="col-sm-6 col-12">
                        <div class="form-group">
                           <label for="invalid-state"><b>SSN No:</b> </label>
                           <input type="text" class="form-control" name="ssn" value="<?= $row['ssn'] ?>">
                        </div>
                     </div>

                     <div class="col-sm-12 col-12">
                        <table class="table table-bordered" id="airportTable">
                           <thead>
                              <tr>
                                 <th>Airport</th>
                                 <th>ZIP Code</th>
                                 <th>WD Rank</th>
                                 <th>WE Rank</th>
                                 <th>Truck</th>
                                 <th>Radius</th>
                                 <th>Discount Miles</th>
                                 <th>Add Percentage</th>
                                 <th>Shiney Rank</th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php

                              if (!empty($airports)) : ?>
                                 <?php foreach ($airports as $row1) : ?>
                                    <tr>
                                       <td>
                                          <input type="hidden" name="airport_id[]" value="<?= $row1['id'] ?>">
                                          <input type="text" class="form-control" name="air_port[]" value="<?= $row1['air_port'] ?>">
                                       </td>
                                       <td><input type="text" class="form-control" name="a_zip_code[]" value="<?= $row1['a_zip_code'] ?>"></td>
                                       <td><input type="text" class="form-control" name="wday_rank[]" value="<?= $row1['wday_rank'] ?>"></td>
                                       <td><input type="text" class="form-control" name="wend_rank[]" value="<?= $row1['wend_rank'] ?>"></td>
                                       <td>
                                          <input
                                             type="checkbox"
                                             name="truck[]"
                                             value="1"
                                             <?= ($row1['truck'] == 1) ? 'checked' : '' ?>>
                                       </td>
                                       <td><input type="text" class="form-control" name="radius[]" value="<?= $row1['radius'] ?>"></td>
                                       <td><input type="text" class="form-control" name="discount_miles[]" value="<?= $row1['discount_miles'] ?>"></td>
                                       <td><input type="text" class="form-control" name="add_percentage[]" value="<?= $row1['add_percentage'] ?>"></td>
                                       <td><input type="text" class="form-control" name="main_rank[]" value="<?= $row1['main_rank'] ?>"></td>
                                       <td>
                                          <button type="button" class="btn btn-danger btn-sm removeRow">−</button>
                                       </td>
                                    </tr>
                                 <?php endforeach; ?>
                              <?php endif; ?>
                           </tbody>
                        </table>

                        <button type="button" class="btn btn-success btn-sm mt-1" id="addRow">
                           ➕ Add Airport
                        </button>

                     </div>


                     <div class="card-header">
                        <div>
                           <h6 class="card-title">
                              ACH Settlement ::
                              <a href="<?= base_url('Agent/ach/' . $row['id']) ?>">Click Here</a>
                           </h6>
                           <br />
                        </div>
                     </div>


                     <div class="col-sm-2"></div>
                     <div class="col-sm-8 col-12">
                        <div class="form-group">
                           <button class="btn btn-primary" type="submit" style="width: 100%;
                        height: max-content;
                        margin-top: 22px;">Submit</button>
                        </div>
                     </div>
                     <div class="col-sm-2"></div>
                  </div>
                  <form>
            </div>
         </div>
      </div>
   </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>



<script>
   $(document).on('click', '#addRow', function() {
      let row = `
        <tr>
            <td>
                <input type="hidden" name="airport_id[]" value="">
                <input type="text" class="form-control" name="air_port[]" value="">
            </td>
            <td><input type="text" class="form-control" name="a_zip_code[]" value=""></td>
            <td><input type="text" class="form-control" name="wday_rank[]" value=""></td>
            <td><input type="text" class="form-control" name="wend_rank[]" value=""></td>
           <td><input type="checkbox" name="truck[]" value="1"></td>
            <td><input type="text" class="form-control" name="radius[]" value=""></td>
            <td><input type="text" class="form-control" name="discount_miles[]" value=""></td>
            <td><input type="text" class="form-control" name="add_percentage[]" value=""></td>
            <td><input type="text" class="form-control" name="main_rank[]" value=""></td>
            <td>
                <button type="button" class="btn btn-danger btn-sm removeRow">−</button>
            </td>
        </tr>
    `;
      $('#airportTable tbody').append(row);
   });

   $(document).on('click', '.removeRow', function() {
      $(this).closest('tr').remove();
   });
</script>

<?= $this->endSection() ?>
