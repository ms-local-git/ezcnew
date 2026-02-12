
    <!-- BEGIN: Vendor JS-->
    <script src="<?=base_url()?>/assets/app/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->










    
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/responsive.bootstrap4.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>

    <script src="<?=base_url()?>/assets/app/vendors/js/tables/datatable/buttons.print.min.js"></script>

    


    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=base_url()?>/assets/app/js/core/app-menu.js"></script>
    <script src="<?=base_url()?>/assets/app/js/core/app.js"></script>
    
    <script src="<?=base_url()?>/assets/app/js/scripts/customizer.min.js"></script>


    <!-- END: Theme JS-->
<script>
    $(document).ready(function() {
        <?php if(isset($_SESSION['error'])) { ?>
            Swal.fire('Error','<?= $_SESSION['error'] ?>','error');
        <?php } ?>
        <?php if(isset($_SESSION['msg'])) { ?>
            Swal.fire('Success','<?= $_SESSION['msg'] ?>','success');
        <?php } ?>

        var current = location.href;
        $('.nav-item .menu-content li a').each(function(){
            var $this = $(this);
            // if the current path is like this link, make it active
            if($this.attr('href') == current) {
                // alert(current);
                $this.parent('li').addClass('active');
                $this.closest('.has-sub-main').addClass('sidebar-group-active');
                $this.closest('.has-sub-main').addClass('open');
                $this.closest('.has-sub').addClass('sidebar-group-active');
                $this.closest('.has-sub').addClass('open');
            }
        })

        bookmark_check();
    });

    $(document).ready(function() {
         $('.datatables-basic').DataTable();
    });

    $('#search_header_form').submit(function(e) {
        e.preventDefault();
        var search = $('#search_header_input').val();

        if(search!="") {
            alert('ok');
            $.ajax({
                type: "post",
                url: "<?= base_url() ?>/quick_search",
                data: "search=" +search,
                dataType: "json",
                success: function (response) {
                    if(response===false) {
                        Swal.fire('Error','Result Not Found','error');
                    } else {
                        window.location.href = response;
                    }
                }
            });
        }
    });

    function add_bookmark_fun() {
        var page = location.href;
        var title = $(document).attr('title');
        $.ajax({
            type: "post",
            url: "<?= base_url() ?>/ajaxController/add_bookmark",
            data: "page=" +page+"&title=" +title,
            dataType: "json",
            success: function (response) {
                if(response==false) {
                    Swal.fire('Success','Page Removed from Favourites','success');
                    $('.star-bookmark').removeClass('text-warning');
                    $('.star-bookmark').addClass('text-secondary');
                } else {
                    Swal.fire('Success','Page Added to Favourites','success');
                    $('.star-bookmark').removeClass('text-secondary');
                    $('.star-bookmark').addClass('text-warning');
                }
            }
        });
    }

    function bookmark_check() {
        var page = location.href;
        $.ajax({
            type: "post",
            url: "<?= base_url() ?>/ajaxController/bookmark_check",
            data: "page=" +page,
            dataType: "json",
            success: function (response) {
                if(response==false) {
                    $('.star-bookmark').removeClass('text-warning');
                    $('.star-bookmark').addClass('text-secondary');
                } else {
                    $('.star-bookmark').removeClass('text-secondary');
                    $('.star-bookmark').addClass('text-warning');
                }
            }
        });
    }

    $('.btn_job_notes').click(function() {
        alert('ok');
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