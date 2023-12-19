<?php $userid = $this->session->userdata('adid'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Date Range Filter In Datatable jQuery Example - Websolutionstuff</title>
        <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
        <link rel="stylesheet" href="<?php echo site_url('assests/css/datepicker.css'); ?>">
    </head>
    <body >
        <table border="0" cellspacing="5" cellpadding="5">
            <tbody><tr>
                <td>Minimum date:</td>
                <td><input type="text" id="min" name="min"></td>
            </tr>
            <tr>
                <td>Maximum date:</td>
                <td><input type="text" id="max" name="max"></td>
            </tr>
        </tbody></table>
        <table id="example" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th scope="col" style="border-top:1px solid #dee2e6;">hidden date</th>
                    <?php if($form_info && $userid["admin_type"]=="po" && $form_info['0']->po_verify==1){ ?>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Select All <input type="checkbox" name="user_mail_all" id="user_mail_all" class="user_mail_all" />  </th>
                    <?php } ?>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Sr No.</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Application Date</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Application ID</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Name</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">नाव</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Phone Number</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Aadhar Number</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Village</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">Clerk Status</th>
                    <!-- <th scope="col" style="border-top:1px solid #dee2e6;">Clerk Remark</th> -->
                    <th scope="col" style="border-top:1px solid #dee2e6;">APO Status</th>
                    <!-- <th scope="col" style="border-top:1px solid #dee2e6;">APO Remark</th> -->
                    <th scope="col" style="border-top:1px solid #dee2e6;">PO Status</th>
                    <!-- <th scope="col" style="border-top:1px solid #dee2e6;">PO Remark</th> -->
                    <th scope="col" style="border-top:1px solid #dee2e6;">Action</th>
                    <th scope="col" style="border-top:1px solid #dee2e6;">View</th>
                </tr>
            </thead>
            <tbody>
    <?php 
    $srno =1;
    foreach ($form_info as $form_row) { 
   ?>
    <tr>
      <td><?php echo date('Y-m-d',strtotime($form_row->application_date)); ?></td>
      <?php 
      if($userid["admin_type"]=="po" && $form_row->po_verify==1){
      if($form_row->send_dsc==0){ ?>
          <th scope="row"><input type="checkbox" name="user_mail[]" id="user_mail" class="user_mail" value="<?php echo $form_row->r_id; ?>" /></th>
      <?php }else{ ?>
          <th scope="row"></th>
      <?php } } ?>

      <th scope="row"><?php echo $srno++; ?></th>
      <td><?php echo date('d/m/Y',strtotime($form_row->application_date)); ?></td>
      <td><?php echo $form_row->r_id; ?></td>
      <td><?php echo "$form_row->firstname $form_row->middlename $form_row->lastname"; ?></td>
      <td><?php echo "$form_row->firstname_marathi $form_row->middlename_marathi $form_row->lastname_marathi"; ?>
      <td><?php echo $form_row->phone; ?></td>
      <td><?php echo $form_row->aadharno; ?></td>
      <td><?php echo $form_row->village_name; ?></td>
      <td><?php 
           if($form_row->clerk_verify==1){
             echo "Approved";
           }elseif($form_row->clerk_verify==2){
             echo "Rejected";
           }else{
             echo "Pending";
           }
          ?>
      </td>
      <!-- <td>
           if($form_row->clerk_verify==2){
             echo $form_row->clerk_remark;
           }
          ?>
      </td> -->
      <td><?php 
           if($form_row->apo_verify==1){
             echo "Approved";
           }elseif($form_row->apo_verify==2){
             echo "Rejected";
           }else{
             echo "Pending";
           }
          ?>
      </td>
      <!-- <td>
           if($form_row->apo_verify==2){
             echo $form_row->apo_remark;
           }
          ?>
      </td> -->
      <td><?php 
           if($form_row->po_verify==1){
             echo "Approved";
           }elseif($form_row->po_verify==2){
             echo "Rejected";
           }else{
             echo "Pending";
           }
          ?>
      </td>
      <!-- <td>
           if($form_row->po_verify==2){
             echo $form_row->po_remark;
           }
          ?>
      </td> -->
      <td>

        <?php if($form_row->deleted_status!=1){ if($form_row->po_verify!=1){?><a class="btn btn-danger" style="width: 100px; height:32px; font-size:12px;"  href="<?php echo base_url(); ?>admin/Dashboard/view_detail/<?php echo $form_row->r_id; ?>">Take Action</a><?php } } ?>

        <?php if($form_row->send_dsc==1){ ?> 
        <a class="text-white text-decoration-none btn btn-info" style="width: 120px; height: 32px; font-size: 13px;" href="<?php echo base_url(); ?>user/registration/certificate/<?php echo $form_row->r_id; ?>" target="_blank">View Certificate</a>
      <?php } ?>

     </td>
      <td><a class="btn btn-primary"  style="width: 120px; height:32px; font-size:12px;" href="<?php echo base_url(); ?>admin/Dashboard/view_app_detail/<?php echo $form_row->r_id; ?>">View Application</a></td>
      
    </tr>
    <?php } ?>
  </tbody>

        </table>
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script>
var minDate, maxDate;
 
 // Custom filtering function which will search data in column four between two values
 $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         var date = new Date( data[0] );

         if(min){ var min = new Date(min).toISOString().slice(0, 10); }
         if(max){ var max = new Date(max).toISOString().slice(0, 10); }
         if(date){ var date = new Date(date).toISOString().slice(0, 10); }

         if (
             ( min === null && max === null ) ||
             ( min === null && date <= max ) ||
             ( min <= date   && max === null ) ||
             ( min <= date   && date <= max )
         ) {
             return true;
         }
         return false;
     }
 );
  
 $(document).ready(function() {
     // Create date inputs
     minDate = new DateTime($('#min'), {
         format: 'DD-MM-YYYY'
     });
     maxDate = new DateTime($('#max'), {
         format: 'DD-MM-YYYY'
     });
  
     // DataTables initialisation
     var table = $('#example').DataTable();
  
     // Refilter the table
     $('#min, #max').on('change', function () {
         table.draw();
     });
 });
</script>