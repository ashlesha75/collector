
<!doctype html>
<html>
    <head>
        <title>Rahivashi Applications</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Datatable CSS -->
        <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
        <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

        <style type="text/css">
            .dt-buttons{
                width: 50%;
                padding: 5px;
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
        
    </head>
    <body  style="  background-color:#a2dce7;" >
<?php include('includes/header.php'); ?>

  <div class="col-12  mt-4 container admin-list  table-rahi  bg-white ">
    <!-- <h2 class="text-center  sub-application ad-rahiwasi1  bg-white">Registration</h2> -->
    <br>
    <div class="table-responsive">
      <table id="application_form" class="table table-striped table-bordered dataTable">
  <thead>
    <tr>
      <th scope="col" style="border-top:1px solid #dee2e6;">Sr No.</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Name</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Username</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Password</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Mobile No</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Email Id</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">District</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Taluka</th>
      <th scope="col" style="border-top:1px solid #dee2e6;">Village</th>
      <!-- <th scope="col" style="border-top:1px solid #dee2e6;">Action</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
    $srno =1;
    foreach ($form_info as $form_row) {
   ?>
    <tr>
      <th scope="row"><?php echo $srno++; ?></th>
      <td><?php echo $form_row->applicant_name; ?></td>
      <td><?php echo $form_row->username; ?></td>
      <td><?php echo $form_row->password; ?></td>
      <td><?php echo $form_row->phone; ?></td>
      <td><?php echo $form_row->email; ?></td>
      <td><?php echo $form_row->district_name; ?></td>
      <td><?php echo $form_row->taluka_name; ?></td>
      <td><?php echo $form_row->village_name; ?></td>
  <!--     <td><a class="btn btn-danger" style="width: 55px; height:32px; font-size:12px;"  onclick="delete_entry(<?php echo $form_row->id; ?>);" >Delete</a></td> -->
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
  </div> 











  </section>
  <br>
  <?php include ('includes/footer.php') ?>

  <!-- <div>

    <div>
      <div class="footer text-center">
        <p class="p-3">Copyright ©2023 Nandurbar District Rahiwasi Dakhla Design by:<span class=""> <a class=" text-warning" href="https://www.absoftwaresolution.com/">AB Software Solution.</a> </span></p>

      </div>
    </div>
  </div> -->
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

        function delete_entry(id){ 
          if (confirm("Are you sure ?") == true) {
            jQuery.ajax({
              url: "<?php echo site_url('admin/Dashboard/delete_entry_applicant'); ?>",
              type: 'POST',
              data : {
                 id: id
              },
              success: function (response) {
                  alert("Record Successfully Deleted");
                  location.href="<?php echo site_url('admin/Dashboard/applicant_list'); ?>";
              }
            });
          } 
          }
        </script>
        
    </body>

</html>
