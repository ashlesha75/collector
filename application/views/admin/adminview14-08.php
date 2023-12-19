
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



<form class="add form-hrm" method="post" name="inv_master_report" id="inv_master_report" style="display:inline;">
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
        <br>
        <br>
        

        <div class="search-btn-container col-sm-6 "><br>
        
        <button type="submit" class="btn btn-sm btn-success" style="height:25px;width:70px;text-align:center;">Search</button>
  </div>

  </div>
      </form>

  <!-- <div class="col-sm-6">
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

 Add a line break to move the search button to the next row -->
  <!-- <br>

  <div class="search-btn-container col-sm-6 ">
    <input type="button" value="Search" id="search-btn">
  </div> --> 
 
</div>
    <br>
    <div class="table-responsive extra-box1 bg-white p-2">
      <table id="application_form" class="table table-striped table-bordered dataTable">
  <thead>
    <tr>
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
      <td><?php if($form_row->deleted_status!=1){ if($form_row->po_verify!=1){?><a class="btn btn-danger" style="width: 100px; height:32px; font-size:12px;"  href="<?php echo base_url(); ?>admin/Dashboard/view_detail/<?php echo $form_row->r_id; ?>">Take Action</a><?php } } ?></td>
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


<!-- <script>
$(document).ready(function () {
  var empDataTable = $('#application_form').DataTable({
    dom: 'Blfrtip',
    buttons: [
      // ... (existing buttons configuration)
    ],
  });

  // Add search functionality
  $('#search-btn').on('click', function () { 
    var fromDate = $('#from-date').val();
    var toDate = $('#to-date').val();
    var name = $('#name').val();
    var aadharNo = $('#aadhar-no').val();
    var village = $('#village').val();

    


    empDataTable.column(1).search(fromDate).draw(); // "From Date" with "Application Date" column
    empDataTable.column(1).search(toDate).draw(); // "To Date" with "Application ID" column
    empDataTable.column(3).search(name).draw(); // "Name" with corresponding column
    empDataTable.column(6).search(aadharNo).draw(); // "Aadhar Number" with corresponding column
    empDataTable.column(7).search(village).draw(); // "Village" with corresponding column
  });
});</script> -->



<script>
$("#inv_master_report").submit(function(e){
	e.preventDefault();
  var fromDate = $('#from-date').val();
    var toDate = $('#to-date').val();
    var name = $('#name').val();
    var aadharNo = $('#aadhar-no').val();
    var village = $('#village').val();
   var application_form = $('#application_form').dataTable({
		"pageLength": 25,
	    "aaSorting": [],
	    "dom": 'Bfrtip',
	    "deferRender":true,
      "sorting":false,
      "ordering": false,
      "scroller":true,
      "scrollY":"50vh",
      "scrollX":true,
      "scrollCollapse":false,
	    "buttons": [
	        // 'excel', 'pdf'
	    ],
	    "bPaginate": false,
		"bDestroy": true,
		"ajax": {
            url : "http://localhost/rahivasi_dakhla/admin/Dashboard/application_list/?fromDate="+fromDate+"&toDate="+toDate+"&name="+name+"&aadharNo="+aadharNo+"&aadharNo="+village,
            type : 'GET'
        },
		"fnDrawCallback": function(settings){
		$('[data-toggle="tooltip"]').tooltip();          
		}
    });
});

var sal_month_year = $('#sal_month_year').val();
$('#sal_month_year1').val(sal_month_year);

jQuery("#admincompany").change(function(){
    
  jQuery.get(base_url+"/empinfo/"+jQuery(this).val(), function(data, status){
    jQuery('#company').html(data);
    
  });
  
});
</script>





       
    </body>

</html>
