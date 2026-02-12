<?= $this->extend('layouts/app') ?>

<?= $this->section('page_header') ?>
<div class="content-header row">
   <div class="content-header-left col-md-9 col-12 mb-2">
      <h2 class="content-header-title mb-0">Add Agent</h2>
      <p class="text-muted mt-1">
         Create an Agent
      </p>
   </div>
</div>

<style type="text/css">
   .table td {
      padding: 4px !important;
      text-align: center;
   }

   input {
      display: block;
      width: 100%;
      height: 2.714rem;
      padding: 0.438rem 1rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.45;
      color: #6e6b7b;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #d8d6de;
      border-radius: 0.357rem;
      transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
   }
</style>
<?= $this->endSection() ?>



<?= $this->section('content') ?>
<div>
   <section name="invoice-printout">
      <div class="row">
         <div class="col-md-12">
            <div class="card">
               <div class="card-body">
                  <form action="<?= base_url() ?>/Agent/create" method="POST" enctype="multipart/form-data"><span style="padding: 25px 50px 75px"></span>
                     <div class="row">
                        <div class="col-sm-6 col-12">
                           <div class="form-group">
                              <label for="valid-state"><b>Agent Name: </b><span style="color:red">*</span></label>
                              <input type="text" class="form-control " name="agent_name" placeholder=" " value="<?= old('agent_name') ?>" required />
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="valid-state"><b>Phone 1: </b><span style="color:red">*</span></label>
                              <input type="text" class="form-control " name="phone" placeholder=" " value="" required />
                           </div>
                        </div>
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="valid-state"><b>Phone 2:</b> </label>
                              <input type="text" class="form-control " name="em_phone" placeholder="" value="">
                           </div>
                        </div>
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>Cell Phone:</b> </label>
                              <input type="text" class="form-control " name="cellphone" placeholder="" value="">
                           </div>
                        </div>
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="valid-state"><b>Fax : </b> <span style="color:red">*</span></label>
                              <input type="text" class="form-control " name="fax" placeholder="" value="" required />
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-sm-12 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>Notes:</b> </label>
                              <textarea class="form-control" name="notes" rows="4" placeholder="type here..."></textarea>
                           </div>
                        </div>
                     </div>


                     <div class="card-header">
                        <div>
                           <h6 class="card-title">
                              <h3>Other Personal Information:</h3>
                           </h6>
                           <br />
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="valid-state"><b>Starting Date: </b><span style="color:red">*</span></label>
                              <input type="date" class="form-control " name="start_date" placeholder=" " value="" required />
                           </div>
                        </div>
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="valid-state"><b>Customer Account: </b></label>
                              <input type="text" class="form-control " name="customer_no" placeholder=" " value="" required />
                           </div>
                        </div>
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>Category:</b> </label>
                              <select class="form-control " name="category">
                                 <option>Select</option>
                                 <option value="A">A Class</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>Attention Person:</b> </label>
                              <input type="text" class="form-control" name="attention">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-9 col-12">
                           <div class="form-group">
                              <label for="valid-state"><b>Street Address:</b> <span style="color:red">*</span></label>
                              <input type="text" class="form-control " name="address1" placeholder="" value="" required>
                           </div>
                        </div>

                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>ZIP Code:</b><span style="color:red">*</span> </label>
                              <input type="text" class="form-control" name="zip" value="" required>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="valid-state"><b>City : </b> <span style="color:red">*</span></label>
                              <input type="text" class="form-control " name="city" placeholder="" value="" required />
                           </div>
                        </div>
                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>State:</b> </label>
                              <input type="text" class="form-control" name="state">
                           </div>
                        </div>

                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>Email:</b> <span style="color:red">*</span></label>
                              <input type="text" class="form-control" name="email" required>
                           </div>
                        </div>


                        <div class="col-sm-3 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>Website:</b> </label>
                              <input type="text" class="form-control" name="website">
                           </div>
                        </div>




                        <div class="col-sm-6 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>AIN No:</b> </label>
                              <input type="text" class="form-control" name="ain">
                           </div>
                        </div>
                        <div class="col-sm-6 col-12">
                           <div class="form-group">
                              <label for="invalid-state"><b>SSN No:</b> </label>
                              <input type="text" class="form-control" name="ssn">
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
                                 <tr>
                                    <td><input type="text" name="air_port[]" class="form-control"></td>
                                    <td><input type="text" name="a_zip_code[]" class="form-control"></td>
                                    <td><input type="text" name="wday_rank[]" class="form-control"></td>
                                    <td><input type="text" name="wend_rank[]" class="form-control"></td>
                                    <td><input type="checkbox" name="truck[]" value="1"></td>
                                    <td><input type="text" name="radius[]" class="form-control"></td>
                                    <td><input type="text" name="discount_miles[]" class="form-control"></td>
                                    <td><input type="text" name="add_percentage[]" class="form-control"></td>
                                    <td><input type="text" name="main_rank[]" class="form-control"></td>
                                    <td class="text-center">
                                       <button type="button" class="btn btn-danger btn-sm remove-row">X</button>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>

                           <button type="button" class="btn btn-primary mt-2" id="addRow">
                              ➕ Add Airport
                           </button>

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
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script type="text/javascript">
   function add() {
      var new_chq_no = parseInt($('#total_chq').val()) + 1;
      var new_input = "<input type='text' id='new_" + new_chq_no + "'>";
      $('#new_chq').append(new_input);
      $('#total_chq').val(new_chq_no)
   }
</script>

<script>
   $(document).ready(function() {

      // Add new row
      $('#addRow').on('click', function() {
         let row = `
      <tr>
         <td><input type="text" name="air_port[]" class="form-control"></td>
         <td><input type="text" name="a_zip_code[]" class="form-control"></td>
         <td><input type="text" name="wday_rank[]" class="form-control"></td>
         <td><input type="text" name="wend_rank[]" class="form-control"></td>
         <td class="text-center">
            <input type="checkbox" name="truck[]" value="1">
         </td>
         <td><input type="text" name="radius[]" class="form-control"></td>
         <td><input type="text" name="discount_miles[]" class="form-control"></td>
         <td><input type="text" name="add_percentage[]" class="form-control"></td>
         <td><input type="text" name="main_rank[]" class="form-control"></td>
         <td class="text-center">
            <button type="button" class="btn btn-danger btn-sm remove-row">X</button>
         </td>
      </tr>`;

         $('#airportTable tbody').append(row);
      });

      // Remove row
      $(document).on('click', '.remove-row', function() {
         $(this).closest('tr').remove();
      });

   });
</script>

<?= $this->endSection() ?>
