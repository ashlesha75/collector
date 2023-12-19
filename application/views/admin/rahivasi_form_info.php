<?php $adid = $this->session->userdata('adid'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link rel="stylesheet" href="<?php echo site_url('assests/css/style.css'); ?>">
  <link rel="stylesheet" href="<?php echo site_url('assests/css/modal.css'); ?>">
  <!-- Bootstarp Icon Cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- google font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Rahiwasi Dakhla</title>



</head>

<body style="  background-color:#a2dce7;">

  <!-- **************** For Admin**************** -->
  <!-- <section class="user-dash1 ">
    <div class="user-mobile d-flex">
      <div>
        <div class="mt-2 ms-2">
          <a class="text-decoration-none" href="#">
            <h4 class="text-white">Admin <span><i class=" bi bi-person-fill"></i></span></h4>
          </a>
        </div>
      </div>

      <div class="mt-1 me-2">

        <a class="btn btn-" style="background-color:#FFAE42 ;" data-bs-toggle="offcanvas" href="#offcanvasExample"
          role="button" aria-controls="offcanvasExample">
          <b><i class="biz bi-list-ul "></i></b>
        </a>
        <div class="offcanvas offcanvas-start " tabindex="-1" id="offcanvasExample"
          aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header" style="background-color: #337AB7;">
            <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Admin <span><i
                  class="bi bi-person-fill"></i></span>
            </h5>
            <button type="button" class="btn-close " data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">

            <div class="">
              <div class="text-center">
                <button class="custom-btn btn-1  Application-sub"> Dashboard</button>
              </div>
              <br>
              <div class="text-center">
                <button class="custom-btn btn-1 Application-sub"> Applications</button>
              </div>

              <div class="text-center mt-4">
                <button class="custom-btn btn-1 Application-sub">Registration</button>
              </div>

            </div>
          </div>

        </div>
      </div>


  </section> -->



  <!-- <section class=" user-desktop1">
    <div class="user-dash">
      <div class="d-flex user-admin">
        <div class="mt-3 ms-2">
          <a class="text-decoration-none" href="#">
            <h4 class="text-white" style="font-size:18px ;">Admin <span><i class="bi bi-person-fill"></i></span></h4>
          </a>
        </div>

        <div class="mt-3 me-2">
          <a class="text-decoration-none" href="<?php echo site_url('user/Login/logout'); ?>">
            <h4 class="text-white " style="font-size:18px ;"> <span><i class="bi bi-box-arrow-left"></i></span> Log Out
            </h4>
          </a>
        </div>
      </div>
    </div>

  </section> -->

  <?php include('includes/header.php'); ?>

  <div class=" container  mt-5 admin-list table-rahi  bg-white">
  <h2 class="text-center bg-white admin-appli ad-rahiwasi1"><strong>अनुसूचित क्षेत्रातील (पेसा) रहीवासी दाखला</strong></h2>
    <br>
    <div class="row">
    <div class="table-responsive col-xl-8 mt-2 ">
      <table class="table table-striped table-bordered">
  <!-- <thead>
    <tr>
      <th scope="col">Sr No.</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone Number</th>
      <th scope="col"><a href="admin/view_detail/id">View</a></th>
    </tr>
  </thead> -->
  <tbody>
    <?php 
    $srno =1;
    foreach ($form_info as $form_row) {
   ?>
    <tr>
      <th style="background-color:#f3aba4;" scope="row" colspan="4">Application Details</th>
    </tr>
    <tr>
      <td>Application Date</td>
      <td colspan="3"><?php echo date('d/m/Y',strtotime($form_row->application_date)); ?></td>
    </tr>
    <tr>
      <td>Aadhar Number</td>
      <td colspan="3"><?php echo $form_row->aadharno; ?></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td colspan="3"><?php echo $form_row->phone; ?></td>
    </tr>
    <tr>
      <td>Full Name</td>
      <td colspan="3"><?php echo "$form_row->firstname $form_row->middlename $form_row->lastname"; ?></td>
    </tr>
    <tr>
      <td>पूर्ण नाव</td>
      <td colspan="3"><?php echo "$form_row->firstname_marathi $form_row->middlename_marathi $form_row->lastname_marathi"; ?></td>
    </tr>
    <tr>
      <td>Birth Date</td>
      <td><?php echo date('d/m/Y',strtotime($form_row->birthdate)); ?></td>
      <td>Age</td>
      <td><?php echo $form_row->age; ?></td>
    </tr>
    <tr>
      <td style="background-color:#f3aba4;">District</td>
      <td><?php echo $form_row->district_name; ?></td>
      <td style="background-color:#f3aba4;">Taluka</td>
      <td><?php echo $form_row->taluka_name; ?></td>
    </tr>
    <tr>
      <td style="background-color:#f3aba4;">Village</td>
      <td><?php echo $form_row->village_name; ?></td>
      <td style="background-color:#f3aba4;">Area</td>
      <td><?php echo $form_row->area; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>

    <div class="table-responsive col-xl-4 ">
    
      <table class="table table-striped table-bordered">
  <tbody>
    <tr>
      <th style="background-color:#2cbbc1;" scope="row" colspan="4"> Attached Documents</th>
    </tr>
    <tr>
      <th></th>
      <th>Name</th>
      <th>Action</th>
    </tr>
    <input type="hidden" name="id" id="id" value="<?php echo $form_row->r_id; ?>">
    <?php foreach($form_info_doc as $form_info_doc_list){ ?>
    <tr>
      <td><input type="checkbox" name="doc_view" id="doc_view_<?php echo $form_info_doc_list->id; ?>" disabled ></td>
      <td><?php echo $form_info_doc_list->doc_name; ?></td>
      <td colspan="3"><!-- <a target="_blank" href="<?php echo base_url(); ?><?php echo $form_info_doc_list->doc_path; ?>">View</a> -->
           <a id="myBtn_2" href="#" onclick="show_view_doc(<?php echo $form_info_doc_list->id; ?>);">View</a>
      </td>
      <!--- view modal --->
      <div id="myModal_<?php echo $form_info_doc_list->id; ?>" class="modal_2">
        <div class="modal_2-content" style="border:3px solid blue;">
          <span class="close_<?php echo $form_info_doc_list->id; ?> close_p_2" style="text-align:right;">&times;</span>
          <p style="font-size: 14px;background-color: #2cbbc1;font-color:black;padding: 10px;text-align: center;font-weight: bold;"><?php echo $form_info_doc_list->doc_name; ?></p>
          <!-- <img src="<?php echo base_url(); ?><?php echo $form_info_doc_list->doc_path; ?>"> -->
         <!--  <embed src="<?php echo base_url(); ?><?php echo $form_info_doc_list->doc_path; ?>" width="800px" height="2100px" /> -->
          <iframe src="<?php echo base_url(); ?><?php echo $form_info_doc_list->doc_path; ?>" style="width: 100%;height: 500px;border: none;"></iframe> 
        </div>
      </div>

      <!--- view modal --->

      <!-- <td>Leaving Certificate</td>
      <td><a href="<?php echo base_url(); ?>assests/images/leaving.jpg<?php //echo $form_row->r_id; ?>"><img src="<?php echo base_url(); ?>assests/images/leaving.jpg<?php //echo $form_row->r_id; ?>"></a></td> -->
    </tr>
    <?php } ?>
  </tbody>

</table>

<div class="table-responsive col-xl-12 ">
    <?php foreach($form_info_remark as $form_info_remark_list){ ?>
<div class="row" style="background-color:#2cbbc1;padding-left: 20px;margin: 5px;" scope="row">
    <?php echo $form_info_remark_list->username; ?>
      <?php echo date('d/m/Y h:m:s',strtotime($form_info_remark_list->created_at)); ?></br>
      <?php echo $form_info_remark_list->remark; ?>
</div>
      <?php } ?>
          <textarea name="remark" id="remark" class="form-control" required></textarea>
  </div>
<div class="col-sm-12 text-center">

<?php if ($adid['admin_type'] === 'clerk') { ?>
  <a class="text-white text-decoration-none btn btn-primary me-2" style="width: 115px; height: 32px; font-size: 13px;" onclick="proceedtoDsc();">Send to APO</a>
  <a class="text-white text-decoration-none btn btn-danger" style="width: 115px; height: 32px; font-size: 13px;" id="myBtn" onclick="sendtouser();">Send to User</a>
  <a class="text-white text-decoration-none btn btn-primary me-2" style="width: 75px; height: 32px; font-size: 13px;" id="myBtnreject" onclick="reject();">Reject</a>
  
<?php } ?>

<?php if ($adid['admin_type'] === 'apo') { ?>
  <a class="text-white text-decoration-none btn btn-success fw-bold me-2" style="width: 115px; height: 32px; font-size: 13px;" onclick="proceedtoDsc();">Send to PO</a>
  <a class="text-white text-decoration-none btn btn-danger" style="width: 115px; height: 32px; font-size: 13px;" id="myBtn" onclick="sendtouser();">Send to User</a>
  <a class="text-white text-decoration-none btn btn-primary me-2" style="width: 115px; height: 32px; font-size: 13px;"  id="myBtnback" onclick="sendtoback();">Send to Clerk</a>
  <a class="text-white text-decoration-none btn btn-primary me-2" style="width: 75px; height: 32px; font-size: 13px;" id="myBtnreject" onclick="reject();">Reject</a>

<?php } ?>

<?php if ($adid['admin_type'] === 'po') { ?>
  <a class="text-white text-decoration-none btn btn-success fw-bold me-2" style="width: 80px; height: 32px; font-size: 13px;" onclick="changeStatus();">Approve</a>
  <a class="text-white text-decoration-none btn btn-danger" style="width: 115px; height: 32px; font-size: 13px;" id="myBtn" onclick="sendtouser();">Send to User</a>
  <a class="text-white text-decoration-none btn btn-primary me-2" style="width: 115px; height: 32px; font-size: 13px;" id="myBtnback" onclick="sendtoback();">Send to APO</a>
  <a class="text-white text-decoration-none btn btn-primary me-2" style="width: 80px; height: 32px; font-size: 13px;" id="myBtnreject" onclick="reject();">Reject</a>
  <a class="text-white text-decoration-none btn btn-info" style="width: 150px; height: 32px; font-size: 13px;" href="<?php echo base_url('user/registration/certificate'); ?>">Preview Certificate</a>
<?php } ?>


<!-- The Modal Reject-->
<!-- <div id="myModal" class="modal">

   Modal content 
  <div class="modal-content" style="border:3px solid blue;">
    <span class="close" style="text-align:right;">&times;</span>
    <p>Enter Rejection Remark</p>
    <textarea name="remark" id="remark" class="form-control" ></textarea><br>
    <button class="btn btn-primary" onclick="sendtouser();">Save</button>
  </div>

</div>

<div id="myModalback" class="modal">

Modal content
  <div class="modal-content" style="border:3px solid blue;">
    <span class="close" style="text-align:right;">&times;</span>
    <p>Enter Rejection Remark</p>
    <textarea name="remarkback" id="remarkback" class="form-control" ></textarea><br>
    <button class="btn btn-primary" onclick="sendtoback();">Save</button>
  </div>

</div>

<div id="myModalreject" class="modal">

 Modal content
  <div class="modal-content" style="border:3px solid blue;">
    <span class="close" style="text-align:right;">&times;</span>
    <p>Enter Rejection Remark</p>
    <textarea name="remarkreject" id="remarkreject" class="form-control" ></textarea><br>
    <button class="btn btn-primary" onclick="reject();">Save</button>
  </div>

</div> -->
</div>
</div>
    </div>





  </div>  
      </div>
    </div>

 <script type="text/javascript">
   function changeStatus(){ 
    var id = $('#id').val();
    var remark = $('#remark').val();
    jQuery.ajax({
        url: "<?php echo site_url('admin/Dashboard/changeStatus'); ?>",
        type: 'POST',
        data : {
           id: id,remark: remark,
        },
        success: function (response) {
            alert("Application Successfully Approved");
            location.href="<?php echo site_url('admin/Dashboard/index'); ?>";
        },
    error: function (xhr, status, error) {
      alert("Error occurred while processing the request.");
    }
      });
    }

    function sendtouser(){ 
    var id = $('#id').val();
    var remark = $('#remark').val();
    if (remark == '') {
      alert("Remark required");
      return false;
    }
    jQuery.ajax({
        url: "<?php echo site_url('admin/Dashboard/sendtouser'); ?>",
        type: 'POST',
        data : {
           id: id,remark: remark,
        },
        success: function (response) {
            //$('#district_name').html(response);required
            //loadTaluka();
            alert("Application Send to User");
            location.href="<?php echo site_url('admin/Dashboard/index'); ?>";
        },
    error: function (xhr, status, error) {
      alert("Error occurred while processing the request.");
    }
      });
    }

    function proceedtoDsc(){ 

    // const checkbox = document.getElementsByName('doc_view').value;

    var checkstatus ="0";
    var checkboxes = document.getElementsByName('doc_view');
  var checkboxesChecked = [];
if(checkboxes.length==0){
  checkstatus ="1";
}else{
  checkstatus ="0";
  // loop over them all
  for (var i=0; i<checkboxes.length; i++) {
     // And stick the checked ones onto an array...
     if (checkboxes[i].checked) {
        
     }
     else{
      checkstatus="1";
     }
  }
}if(checkstatus=="1"){
  alert("Please check all the documents");
}else{
  var id = $('#id').val();
    var remark = $('#remark').val();
    if (remark == '') {
      alert("Remark required");
      return false;
    }
    jQuery.ajax({
        url: "<?php echo site_url('admin/Dashboard/proceedtoDsc'); ?>",
        type: 'POST',
        data : {
           id: id,remark:remark
        },
        success: function (response) {
            alert("Application Successfully Sended");
            location.href="<?php echo site_url('admin/Dashboard/index'); ?>";
        },
    error: function (xhr, status, error) {
      alert("Error occurred while processing the request.");
    }
      });

}
    }

    
// Function to handle the "Send to Back" action
function sendtoback() {
  var id = $('#id').val();
    var remark = $('#remark').val();
    if (remark == '') {
      alert("Remark required");
      return false;
    }
  jQuery.ajax({
    url: "<?php echo site_url('admin/Dashboard/sendtoback'); ?>",
    type: 'POST',
    data: {
      id: id,
      remark: remark,
    },
    success: function (response) {
      alert("Application Sent to Back");
      location.href = "<?php echo site_url('admin/Dashboard/index'); ?>";
    },
    error: function (xhr, status, error) {
      alert("Error occurred while processing the request.");
    }
  });

    }

    function reject() {
      var id = $('#id').val();
        var remark = $('#remark').val();
        if (remark == '') {
          alert("Remark required");
          return false;
        }
      jQuery.ajax({
        url: "<?php echo site_url('admin/Dashboard/reject'); ?>",
        type: 'POST',
        data: {
          id: id,
          remark: remark,
        },
        success: function (response) {
          alert("Application Rejected");
          location.href = "<?php echo site_url('admin/Dashboard/index'); ?>";
        },
        error: function (xhr, status, error) {
          alert("Error occurred while processing the request.");
        }
      });
    }

 </script>   









<?php include('includes/footer.php'); ?>
</body>

<!-- <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


</script>

<script>  
// Get the modal
var modalback = document.getElementById("myModalback");

// Get the button that opens the modal
var btnback = document.getElementById("myBtnback");

// Get the <span> element that closes the modal
var spanback = document.getElementsByClassName("close")[0];


// When the user clicks the button, open the modal 
btnback.onclick = function() {
  modalback.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanback.onclick = function() {
  modalback.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modalback.style.display = "none";
  }
}
</script>

<script>  
// Get the modal
var modalreject = document.getElementById("myModalreject");

// Get the button that opens the modal
var btnreject = document.getElementById("myBtnreject");

// Get the <span> element that closes the modal
var spanreject = document.getElementsByClassName("close")[0];


// When the user clicks the button, open the modal 
btnreject.onclick = function() {
  modalreject.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanreject.onclick = function() {
  modalreject.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modalreject.style.display = "none";
  }
}
</script>
 -->

<!-- 2 model --->
<script>



function show_view_doc(id){
  // Get the modal
  $('#doc_view_'+id).attr("checked", true);
  $('#doc_view_'+id).attr("checked", false);
  var modal_2 = document.getElementById("myModal_"+id);

  // Get the <span> element that closes the modal_2
  var span = document.getElementsByClassName("close_"+id)[0];

  // When the user clicks the button, open the modal_2 
   modal_2.style.display = "block";

  
  // When the user clicks on <span> (x), close_2 the modal_2
  span.onclick = function() {
    $('#doc_view_'+id).attr("checked", true); 
    $('#doc_view_'+id).attr("disabled", false);
  
    modal_2.style.display = "none";
  }
}
</script>



<script>
// Get a reference to the checkbox element

</script>
