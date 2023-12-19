<?php $userid = $this->session->userdata('adid'); ?>
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
                width: 50%;
                padding: 5px;
            }
            td th{
              padding: 2px!important;
            }

            .search-btn-container {
              text-align: center;
              margin-top: 10px;
           }

           .extra-box {
  margin-top: 20px;
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Style for the search form labels */
.extra-box label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

/* Style for the search form input fields */
.extra-box input[type="date"],
.extra-box input[type="text"] {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
}

.search-btn-container input[type="button"] {
  background-color: #4CAF50;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 10px;
}

/* Style for the search button on hover */
.search-btn-container input[type="button"]:hover {
  background-color: #45a049;

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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

        
    </head>
    <body  style="background-color:#a2dce7;">
<?php include('includes/header.php'); ?>

 

<div class=" mt-4 container   table-rahi " >
  <h2 class="text-center fw-bold  sub-application ad-rahiwasi1 bg-white">List of Rahiwasi Applications</h2>
  <div class="extra-box mt-4 bg-white container">
<div class="row">

  <div class="col-sm-6">
    <label for="from-date">From Date:</label>
    <input class="ex-box" type="date" id="from-date">
  </div>

  <div  class="col-sm-6">
    <label for="to-date">To Date:</label>
    <input  class="ex-box" type="date" id="to-date">
  </div>

  <div  class="col-sm-6">
    <label for="name">Name:</label>
    <input  class="ex-box" type="text" id="name" placeholder="Enter Name...">
  </div>

  <div  class="col-sm-6"> 
    <label for="aadhar-no">Aadhar Number:</label>
    <input   class="ex-box" type="text" id="aadhar-no" placeholder="Enter Aadhar Number...">
  </div>

  <div  class="col-sm-6">
    <label for="village">Village:</label>
    <input  class="ex-box" type="text" id="village" placeholder="Enter Village...">
  </div>

  <!-- Add a line break to move the search button to the next row -->
  <br>

  <div class="search-btn-container col-sm-6 ">
    <input type="button" value="Search" id="search-btn">
  </div>


  </div>
  <?php if($dcs_status==1 && $userid["admin_type"]=="po" ){ ?>
  <div class="search-btn-container col-sm-6 ">
  <a class="btn btn-primary"  style="width: 120px; height:32px; font-size:12px;" href="<?php echo base_url(); ?>admin/Dashboard/verify">Verify</a>
  </div>
  <?php } ?>
</div> 
    <br>
    <div class="table-responsive extra-box1 bg-white p-2">
      <?php if($dcs_status==1 && $userid["admin_type"]=="po" ){ ?>
      <div class="col-sm-12" style="text-align:left;"><button type="button" class="btn btn-mini btn-success" onclick="Sendtodsi();">Approve DSC</button></div><?php  } ?>
      <table id="application_form" class="table table-striped table-bordered dataTable">
  <thead>
    <tr>
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
    </div>
  </div> 











  </section>
  <br>
  <?php include('includes/footer.php'); ?>
     <!-- Script -->
     <script>
        // $(document).ready(function(){
        //     var empDataTable = $('#application_form').DataTable({
        //         dom: 'Blfrtip',
        //         buttons: [
        //             // {
        //             //     extend: 'copy',
        //             // },
        //             // {
        //             //     extend: 'pdf',
        //             //     exportOptions: {
        //             //         columns: [0,1] // Column index which needs to export
        //             //     }
        //             // },
        //             // {
        //             //     extend: 'csv',
        //             // },
        //             {
        //                 extend: 'excel',
        //             }         
        //         ]  
            
        //     });

        // });

        function delete_entry(id){ 
          if (confirm("Are you sure ?") == true) {
            jQuery.ajax({
              url: "<?php echo site_url('admin/Dashboard/delete_entry'); ?>",
              type: 'POST',
              data : {
                 id: id
              },
              success: function (response) {
                  alert("Application Successfully Deleted");
                  location.href="<?php echo site_url('admin/Dashboard/index'); ?>";
              }
            });
          } 
          }
        </script>


<!-- <script>
document.getElementById('search-btn').addEventListener('click', function() {
  // Get the values from the input fields
  var fromDate = document.getElementById('from-date').value;
  var toDate = document.getElementById('to-date').value;
  var name = document.getElementById('name').value;
  var aadharNo = document.getElementById('aadhar-no').value;
  var village = document.getElementById('village').value;

  // Create an object to hold the search criteria
  var searchData = {
    from_date: fromDate,
    to_date: toDate,
    name: name,
    aadhar_no: aadharNo,
    village: village
  };

  // Perform the AJAX request to the server
  // Replace 'your_search_endpoint' with the actual endpoint on your server to handle the search
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'adminview.php', true);
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Parse the response JSON data
      var responseData = JSON.parse(xhr.responseText);

      // Call the function to update the table with the filtered data
      updateTable(responseData);
    }
  };

  // Convert the searchData object to JSON format
  var jsonData = JSON.stringify(searchData);

  // Send the AJAX request with the JSON data
  xhr.send(jsonData);
});

// Function to update the table with the filtered data
function updateTable(data) {
  var tableBody = document.getElementById('table-body');
  tableBody.innerHTML = ''; // Clear the current table data

  // Iterate through the data and add new rows to the table
  for (var i = 0; i < data.length; i++) {
    var row = document.createElement('tr');

    // Build the row using data from the response
    row.innerHTML = '<td>' + data[i].sr_no + '</td>' +
                    '<td>' + data[i].application_date + '</td>' +
                    '<td>' + data[i].application_id + '</td>' +
                    '<td>' + data[i].name + '</td>' +
                    '<td>' + data[i].name_marathi + '</td>' +
                    '<td>' + data[i].phone_number + '</td>' +
                    '<td>' + data[i].aadhar_number + '</td>' +
                    '<td>' + data[i].village + '</td>' +
                    '<td>' + getClerkStatus(data[i].clerk_verify) + '</td>' +
                    '<td>' + getAPOStatus(data[i].apo_verify) + '</td>' +
                    '<td>' + getPOStatus(data[i].po_verify) + '</td>' +
                    '<td><a class="btn btn-danger" style="width: 100px; height:32px; font-size:12px;"  href="' + data[i].action_url + '">Take Action</a></td>' +
                    '<td><a class="btn btn-primary"  style="width: 120px; height:32px; font-size:12px;" href="' + data[i].view_url + '">View Application</a></td>';

    tableBody.appendChild(row);
  }
}

// Helper functions to get status labels
function getClerkStatus(statusCode) {
  if (statusCode === 1) {
    return 'Approved';
  } else if (statusCode === 2) {
    return 'Rejected';
  } else {
    return 'Pending';
  }
}

function getAPOStatus(statusCode) {
  if (statusCode === 1) {
    return 'Approved';
  } else if (statusCode === 2) {
    return 'Rejected';
  } else {
    return 'Pending';
  }
}

function getPOStatus(statusCode) {
  if (statusCode === 1) {
    return 'Approved';
  } else if (statusCode === 2) {
    return 'Rejected';
  } else {
    return 'Pending';
  }
}
</script> -->


<script>
$(document).ready(function () {
  var empDataTable = $('#application_form').DataTable({
    dom: 'Blfrtip',
    buttons: [
      // ... (existing buttons configuration)
    ],
    order : [[1, 'asc']],
    columnDefs: [ {
           'targets': [0], // column index (start from 0)
           'orderable': false, // set orderable false for selected columns
     }]
  });

  // Add search functionality
  $('#search-btn').on('click', function () { 
    var fromDate = $('#from-date').val();
    var toDate = $('#to-date').val();
    var name = $('#name').val();
    var aadharNo = $('#aadhar-no').val();
    var village = $('#village').val();

    alert(fromDate);


    empDataTable.column(1).search(fromDate).draw(); // "From Date" with "Application Date" column
    empDataTable.column(1).search(toDate).draw(); // "To Date" with "Application ID" column
    empDataTable.column(3).search(name).draw(); // "Name" with corresponding column
    empDataTable.column(7).search(aadharNo).draw(); // "Aadhar Number" with corresponding column
    empDataTable.column(8).search(village).draw(); // "Village" with corresponding column
  });
});</script>


<script>
// $(document).ready(function () {
//   var empDataTable = $('#application_form').DataTable({
//     dom: 'Blfrtip',
//     buttons: [
//       // ... (existing buttons configuration)
//     ],
//   });

  // // Add search functionality
  // $('#search-btn').on('click', function () { 
 
  //   var fromDate = moment($('#from-date').val(), 'YYYY-MM-DD').format('DD/MM/YYYY');
  //   var toDate = moment($('#to-date').val(), 'YYYY-MM-DD').format('DD/MM/YYYY');
  //   var name = $('#name').val();
  //   var aadharNo = $('#aadhar-no').val();
  //   var village = $('#village').val();

    

//     minDate = $('#from-date').val();

//     maxDate = $('#to-date').val();
   
  
//     var minDates = minDate.split("-");
//     var minyear = minDates[0];
//     var minmonth = minDates[1];
//     var minday = minDates[2];
//     var fromDate = minday + "/" + minmonth + "/" + minyear;

//     var maxDates = maxDate.split("-");
//     var maxyear = maxDates[0];
//     var maxmonth = maxDates[1];
//     var maxday = maxDates[2];
//     var toDate = maxday + "/" + maxmonth + "/" + maxyear;

//     // if (DataTableStart >= FilterStart && DataTableEnd <= FilterEnd)
//     //     {
//     //         return true;
//     //     }
//     //     else {
//     //         return false;
//     //     }
//     alert(empDataTable.column(1));
//     // alert(fromDate + ' - ' + toDate);
 
//     // Filter the DataTable
//     // $('#application_form').DataTable().columns(1).search(fromDate + ' - ' + toDate).draw();

//     empDataTable.column(1).search(fromDate).draw(); // "From Date" with "Application Date" column
//     empDataTable.column(1).search(toDate).draw(); // "To Date" with "Application ID" column
//     empDataTable.column(3).search(name).draw(); // "Name" with corresponding column
//     empDataTable.column(6).search(aadharNo).draw(); // "Aadhar Number" with corresponding column
//     empDataTable.column(7).search(village).draw(); // "Village" with corresponding column
//   });
// });

// Extend dataTables search
// $.fn.dataTable.ext.search.push(
//     function( settings, data, dataIndex ) {
//         var min  = $('#min-date').val();
//         var max  = $('#max-date').val();
//         var createdAt = data[2] || 0; // Our date column in the table

//         if  ( 
//                 ( min == "" || max == "" )
//                 || 
//                 ( moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max) ) 
//             )
//         {
//             return true;
//         }
//         return false;
//     }
// );

// // Re-draw the table when the a date range filter changes
// $('.date-range-filter').change( function() {
//   empDataTable.draw();
// } );


// $(document).ready(function () {
// 	        $.fn.dataTableExt.afnFiltering.push(
// 	            function( oSettings, aData, iDataIndex ) {
// 	                var startDate = $('#from-date').val();
// 	                var endDate = $('#to-date').val();
// 	                var colValue = aData[1]; //here is the column index value to be filtered
// 	                var dateValue = new Date(colValue);
// 	                if ( startDate == "" && endDate == "" )
// 	                {
// 	                    return true;
// 	                }
// 	                else if (startDate != null && endDate == "")
// 	                {
// 	                    if(new Date(startDate) <= dateValue) {
// 	                        return true;
// 	                    }
// 	                }
// 	                else if ( startDate == "" && endDate != "")
// 	                {
// 	                    if(dateValue <= new Date(endDate)) {
// 	                        return true;
// 	                    }
// 	                }
// 	                else if (startDate != null && endDate != null)
// 	                {
// 	                    if(new Date(startDate) <= dateValue && dateValue <= new Date(endDate)) {
// 	                    return true;
// 	                    }
// 	                }
// 	                return false;
// 	                }
// 	            );
// 	        $('#from-date').datepicker({ onChangeMonthYear: function () { table.draw(); }, changeMonth: true, changeYear: true });
// 	        $('#to-date').datepicker({ onChangeMonthYear: function () { table.draw(); }, changeMonth: true, changeYear: true });
	    
// 	        var table = $('#application_form').DataTable({
// 	            dom: 'Bfrtip',
// 	            buttons: [
// 	                // {
// 	                //     text: 'Download Excel',
// 	                //     extend: 'excel',
// 	                //     title: 'Table Title Here',
// 	                //     exportOptions: {
// 	                //         columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
// 	                //     }
// 	                // },
// 	                // {
// 	                //     text: 'Download PDF',
// 	                //     extend: 'pdfHtml5',
// 	                //     title: 'Table Title Here',
// 	                //     download: 'open',
// 	                //     orientation: 'landscape',
// 	                //     exportOptions: {
// 	                //         columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
	            
// 	                //     }
// 	                // }
// 	            ],
// 	            pageLength: 3,
// 	            lengthMenu: [[4, 8, 12], [4, 8, 12]],
// 	            paging: true,
// 	            scrollX: 200
// 	        });
// 	        $('#from-date, #to-date').change(function () {
// 	            table.draw();
// 	        });
	
// 	    });
</script>

<!-- kiran chavan -->
<script type="text/javascript">
$(document).ready(function(){
    $('#user_mail_all').on('click',function(){
        if(this.checked){
            $('.user_mail').each(function(){
                this.checked = true;
            });
        }else{
             $('.user_mail').each(function(){
                this.checked = false;
            });
        }
    });
});

function Sendtodsi(){
  //By each()
  var testval = [];
   $('.user_mail:checked').each(function() {
     testval.push($(this).val());
   });

  jQuery.ajax({
    url: "<?php echo site_url('admin/Dashboard/Sendtodsi'); ?>",
    type: 'POST',
    data: {
      id: testval,
    },
    success: function (response) {
      alert("Applications Sended Successfully");
      //location.href = "<?php echo site_url('admin/Dashboard/approved_application_list'); ?>";
    },
    error: function (xhr, status, error) {
      alert("Error occurred while processing the request.");
    }
  });
}
</script>

       
    </body>

</html>
