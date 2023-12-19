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

<body>



  <?php include('includes/header.php'); ?>

  <div class="col-12 p-4  mt-4  container table-rahi bg-white ">
    <h2 class="text-center admin-appli ad-rahiwasi1" ><strong>अनुसूचित क्षेत्रातील (पेसा) रहीवासी दाखला</strong></h2>
    <br>
    <div class="row">
    <div class="table-responsive  col-lg-8 mt-3">
      <table class="table table-striped table-bordered">
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

    <div class="table-responsive col-lg-4 mt-3">
      <table class="table table-striped table-bordered ">
  <tbody>
    <tr>
      <th style="background-color:#f3aba4;"scope="row" colspan="4">Documents</th>
    </tr>
    <tr>
      <th>Name</th>
      <th>Action</th>
    </tr>
    <?php foreach($form_info_doc as $form_info_doc_list){ ?>
    <tr>
      <input type="hidden" name="id" id="id" value="<?php echo $form_row->r_id; ?>">
      <td><?php echo $form_info_doc_list->doc_name; ?></td>
      <td colspan="3"><a target="_blank" href="<?php echo base_url(); ?><?php echo $form_info_doc_list->doc_path; ?>">View</a></td>
      <!-- <td>Leaving Certificate</td>
      <td><a href="<?php echo base_url(); ?>assests/images/leaving.jpg<?php //echo $form_row->r_id; ?>"><img src="<?php echo base_url(); ?>assests/images/leaving.jpg<?php //echo $form_row->r_id; ?>"></a></td> -->
    </tr>
    <?php } ?>
  </tbody>
</table>


<!-- kiran -->
<div class="col-sm-12 text-center">
<?php if($form_row->send_dsc==1){ ?> 
  <a class="text-white text-decoration-none btn btn-info" style="width: 150px; height: 32px; font-size: 13px;" href="<?php echo base_url(); ?>user/registration/certificate/<?php echo $form_row->r_id; ?>" target="_blank">View Certificate</a>
<?php } ?>
</div>
<!--- kiran -->
    </div>

    </div>


  </div>  
      </div>
    </div>

 <script type="text/javascript">
   function changeStatus(){ 
    var id = $('#id').val();
    jQuery.ajax({
        url: "<?php echo site_url('admin/Dashboard/changeStatus'); ?>",
        type: 'POST',
        data : {
           id: id
        },
        success: function (response) {
            alert("Application Successfully Approved");
            location.href="<?php echo site_url('admin/Dashboard/index'); ?>";
        }
      });
    }

    function reject(){ 
    var id = $('#id').val();
    var remark = $('#remark').val();
    if(remark==''){alert("Remark required"); return false;}
    jQuery.ajax({
        url: "<?php echo site_url('admin/Dashboard/reject'); ?>",
        type: 'POST',
        data : {
           id: id,remark: remark,
        },
        success: function (response) {
            //$('#district_name').html(response);required
            //loadTaluka();
            alert("Application Successfully Rejected");
            location.href="<?php echo site_url('admin/Dashboard/index'); ?>";
        }
      });
    }

    function proceedtoDsc(){ 
    var id = $('#id').val();
    jQuery.ajax({
        url: "<?php echo site_url('admin/Dashboard/proceedtoDsc'); ?>",
        type: 'POST',
        data : {
           id: id
        },
        success: function (response) {
            alert("Application Successfully Sended");
            location.href="<?php echo site_url('admin/Dashboard/index'); ?>";
        }
      });
    }
 </script>   











  </section>
  <br>
  <div>
  <?php include ('includes/footer.php') ?>
  </div>
  </section>
</body>

<script>
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