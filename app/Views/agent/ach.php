<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <head>
      <?php require(APPPATH."views/common/__header.php"); ?>
      <title>ACH</title>
      <?php require(APPPATH."views/common/__css.php"); ?>

      <style type="text/css">
         .table td { padding: 4px !important; text-align: center; }
         input, textarea {
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
         textarea { height: auto; }
      </style>
   </head>

   <body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">
      <?php require(APPPATH."views/common/__header_menu.php"); ?>

      <!-- Search Suggestions (kept as-is) -->
      <ul class="main-search-list-defaultlist d-none"> ... </ul>
      <ul class="main-search-list-defaultlist-other-list d-none"> ... </ul>

      <?php require(APPPATH."views/common/__left_menu.php"); ?>

      <!-- BEGIN: Content -->
      <div class="app-content content">
         <div class="content-overlay"></div>
         <div class="header-navbar-shadow"></div>
         <div class="content-wrapper container-xxl p-0">

            <section name="invoice-printout">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card">
                        <div class="card-body">

                           <!-- Use the passed data -->
                           <?php 
                              $charge = !empty($tempCharges) ? $tempCharges[0] : []; // First (or only) row
                           ?>

                           <form action="<?= base_url('Agent/save_ach') ?>" method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="agent_id" value="<?= esc($agent['id'] ?? '') ?>">
                              <input type="hidden" name="charge_id" value="<?= esc($charge['id'] ?? '') ?>">

                              <!-- Settlement Details -->
                              <div class="row">
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label><b>Settlement No:</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" name="settlement_no" 
                                              value="<?= esc($charge['settlement_no'] ?? '') ?>" required>
                                    </div>
                                 </div>

                                 <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                       <label><b>Agent Code:</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" name="agent_code" 
                                              value="<?= esc($agent['agent_code'] ?? '') ?>" readonly>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label><b>Name:</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" name="name" 
                                              value="<?= esc($agent['agent_name'] ?? '') ?>" readonly>
                                    </div>
                                 </div>

                                 <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                       <label><b>Sett Amt:</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" name="sett_amt" 
                                              value="<?= esc($charge['sett_amt'] ?? '') ?>" required>
                                    </div>
                                 </div>

                                 <div class="col-sm-2 col-12">
                                    <div class="form-group">
                                       <label><b>Sett Date:</b> <span style="color:red">*</span></label>
                                       <input type="date" class="form-control" name="sett_date" 
                                              value="<?= esc($charge['sett_date'] ?? '') ?>" required>
                                    </div>
                                 </div>
                              </div>

                              <hr style="margin: 30px 0; border-top: 1px solid #ddd;">

                              <!-- Cheque Details -->
                              <div class="row">
                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label><b>Check No:</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" name="check_no" 
                                              value="<?= esc($charge['check_no'] ?? '') ?>" required>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label><b>Check Date:</b> <span style="color:red">*</span></label>
                                       <input type="date" class="form-control" name="check_date" 
                                              value="<?= esc($charge['check_date'] ?? '') ?>" required>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label><b>Check Amt:</b> <span style="color:red">*</span></label>
                                       <input type="text" class="form-control" name="check_amt" 
                                              value="<?= esc($charge['check_amt'] ?? '') ?>" required>
                                    </div>
                                 </div>

                                 <div class="col-sm-3 col-12">
                                    <div class="form-group">
                                       <label><b>Notes:</b></label>
                                       <input type="text" class="form-control" name="notes" 
                                              value="<?= esc($charge['notes'] ?? '') ?>">
                                    </div>
                                 </div>
                              </div>

                              <hr style="margin: 30px 0; border-top: 1px solid #ddd;">

                              <!-- Notice -->
                              <div class="row">
                                 <div class="col-12">
                                    <div class="form-group">
                                       <label><b>Notice:</b></label>
                                       <textarea class="form-control" name="notice" rows="5"><?= esc($charge['notice'] ?? '') ?></textarea>
                                    </div>
                                 </div>
                              </div>

                              <!-- Submit Button -->
                              <div class="row mt-3">
                                 <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary" style="width: 200px;">
                                       <?= isset($charge['id']) ? 'Update ACH' : 'Create ACH' ?>
                                    </button>
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
      <!-- END: Content -->

      <div class="sidenav-overlay"></div>
      <div class="drag-target"></div>

      <?php require(APPPATH.'views/common/__footer.php'); ?>

      <script>
         $(window).on('load', function() {
            if (feather) {
               feather.replace({ width: 14, height: 14 });
            }
         });
      </script>
   </body>
</html>