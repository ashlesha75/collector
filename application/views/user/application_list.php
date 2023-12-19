
<!doctype html>
<html>
    <head>
        <title>Rahiwasi Applications</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Datatable CSS -->
        <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
        <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
         
        <style type="text/css">
           
           
           .dt-buttons{
                width: 20%;
                padding: 5px;
            }
            td th{
              padding: 2px!important;
            }
           
        </style>

        <!-- jQuery Library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        
        <!-- Datatable JS -->
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <style>
            html{
                height: 100%;

            }
            body{
                position: relative;
                margin: 0;
                min-height: 100%;
                padding-bottom: 2.74rem;
            }
        </style>
    </head>
    <body  >
<?php include('includes/header.php'); ?>

  
  <div class=" container col-12 bg-white p-3 mt-4">
    <h2 class="text-center sub-application ad-rahiwasi1">List of Rahiwasi Applications</h2>
    <br>
    <div class="table-responsive">
      <table id="application_form" class="table table-striped table-bordered dataTable">
  <thead  class="lable-size">
    <tr>
      <th scope="col" style="border-top:1px solid #dee2e6;">Sr No.</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Application Date</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Name</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">नाव</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Phone Number</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Status</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Remark</th>
      <!-- <th scope="col" style="border-top:1px solid #dee2e6;">APO Status</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">APO Remark</th> -->
      <th scope="col" style="border-top:1px solid #dee2e6;" >Action</th>
      <th scope="col" style="border-top:1px solid #dee2e6;" >Edit</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $srno =1;
    foreach ($form_info as $form_row) {
   ?>
    <tr  class="lable-size">
      <th scope="row"><?php echo $srno++; ?></th>
      <td><?php echo date('d/m/Y',strtotime($form_row->application_date)); ?></td>
      <td><?php echo "$form_row->firstname $form_row->middlename $form_row->lastname"; ?></td>
      <td><?php echo "$form_row->firstname_marathi $form_row->middlename_marathi $form_row->lastname_marathi"; ?></td>
      <td><?php echo $form_row->phone; ?></td>
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
      <td><?php 
           if($form_row->clerk_verify==2){
             echo $form_row->clerk_remark;
           }
          ?>
      </td>
      <!-- <td><?php 
           // if($form_row->apo_verify==1){
           //   echo "Approved";
           // }elseif($form_row->apo_verify==2){
           //   echo "Rejected";
           // }else{
           //   echo "Pending";
           // }
          ?>
      </td>
      <td><?php 
           // if($form_row->apo_verify==2){
           //   echo $form_row->apo_remark;
           // }
          ?>
      </td> -->
      <td ><a class="btn btn-primary" style="width: 120px; height:32px; font-size:12px;" href="<?php echo base_url(); ?>user/Dashboard/view_detail/<?php echo $form_row->r_id; ?>">View Application</a></td>
      <td>
        <?php if($form_row->deleted_status==2){ ?>
        <a class="btn btn-success" style="width: 120px; height:32px; font-size:12px;" href="<?php echo base_url(); ?>user/Dashboard/rahivasi_list/<?php echo $form_row->r_id; ?>">Edit Application</a>
        <?php } ?>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
  </div> 











  </section>
  <br>
  <div>
        

  <?php include ('includes/footer.php') ?>
  </div>
    </body>
</html>



        <!-- Script -->
        <script>
        $(document).ready(function(){
            var empDataTable = $('#application_form').DataTable({
                dom: 'Blfrtip',
                buttons: [
                    // {
                    //     extend: 'copy',
                    // },
                    // {
                    //     extend: 'pdf',
                    //     exportOptions: {
                    //         columns: [0,1] // Column index which needs to export
                    //     }
                    // },
                    // {
                    //     extend: 'csv',
                    // },
                    {
                        extend: 'excel',
                    }         
                ]  
            
            });

        });
        </script>
        
    </body>

</html>
