<!doctype html>
<html>

<head>
  <title>Rahiwasi Applications</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Datatable CSS -->
  <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>

  <style type="text/css">
    .dt-buttons {
      width: 50%;
      padding: 5px;
    }

    td th {
      padding: 2px !important;
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

<body class="body-hidden" style="background-color:#a2dce7; ">
  <?php include('includes/header.php'); ?>





<!-- 
  <div class="col-12  ">
    <div class="extra-box  bg-white text-center">
      <div class="  row">
        <div class="col-12 col-sm-6">
          <a class="new-btn5" href="#"> <span class="border-icon"><i class="bi bi-file-earmark-text-fill"></i></span>
            Rahiwasi Application</a>
        </div>

        <div class="col-12 ">
          <a class="new-btn6" href="#"> <span class="border-icon1"><i
                class="bi bi-file-earmark-text-fill"></i></span>Registration </a>
        </div>
      </div>
    </div>
  </div>
    -->

    <section class="login-section">
    <div class="container main-flex bg-white ">
        <div class="row center-container">

             <div class="flex-btn mt-3 ">
              <span class="icon-file"><i  class="bi bi-file-earmark-text-fill"></i></span>        
             <a clas class="Submit-Application5" style="position: relative; top: 10px;" href="<?php echo site_url('admin/Dashboard/application_list'); ?>"> Pending Application <p>  <span style="position: relative; top: -13px; left: 100px;" > (<?php echo $this->Admin_Dashboard_Model->get_rahivasi_form_details_count(); ?>)</a>
            </div>


            <div class="flex-btn  flex-10 mt-3">
              <span class="icon-file"><i  class="bi bi-file-earmark-text-fill"></i></span>        
             <a clas class="Submit-Application5" style="position: relative; top: 10px; left: 10px;" href="<?php echo site_url('admin/Dashboard/reject_application_list'); ?>"> Reject Application (<?php echo $this->Admin_Dashboard_Model->get_reject_application_count(); ?>)</a>
            </div>

            <?php if($adid['admin_type']=='po'){ ?>
            <div class="flex-btn  flex-10 fl-10 mt-3">
              <span class="icon-file"><i  class="bi bi-file-earmark-text-fill"></i></span>        
             <a clas class="Submit-Application5" style="position: relative; top: 10px; left: 10px;" href="<?php echo site_url('admin/Dashboard/approved_application_list'); ?>"> Approved <p><span style="position: relative; top: -13px; left: 70px;" >Application (<?php echo $this->Admin_Dashboard_Model->get_approved_application_count(); ?>)</a>
            </div>
            <?php  } ?>

            <div class="flex-btn  flex-10 fl-10 mt-3">
              <span class="icon-file"><i  class="bi bi-file-earmark-text-fill"></i></span>        
             <a clas class="Submit-Application5" style="position: relative; top: 10px; left: 10px;" href="<?php echo site_url('admin/Dashboard/applicant_list'); ?>">Total Registered  <p>  <span style="position: relative; top: -13px; left: 90px;" > Applicant (<?php echo $this->Admin_Dashboard_Model->get_applicant_count(); ?>)</span> </p> </a>
            </div>

            <?php if($adid['admin_type']=='clerk'){ ?>
              <!-- harshal -->
            <div class="flex-btn mt-3  Registered-complaint ">
              <span class="icon-file"><i  class="bi bi-file-earmark-text-fill"></i></span>        
             <a clas class="Submit-Application5" style="position: relative; top: 10px;" href="<?php echo site_url('admin/Dashboard/registeredcomplaint'); ?>"> Registered complaints <p>  <span style="position: relative; top: -13px; left: 100px;" > </a>
            </div>
              <?php }?>


        </div> 
        <div class="row center-container">

        </div>
    </div>
   </section>
   <div id="custom-alert-container" style="display: none; position: fixed; top: 25%; left: 50%; transform: translate(-50%, -50%); background-color: #D3F5F5; padding: 20px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); width: 500px;">
    <p id="custom-alert-message">Pending application count : 0</p>
    <button id="custom-alert-close-btn" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 20px; cursor: pointer;">X</button>
  </div>

  <script>
    // JavaScript code to show the alert when the page loads
    window.onload = function() {
      var count = <?php echo $this->Admin_Dashboard_Model->get_rahivasi_form_details_count(); ?>;
      var customAlertContainer = document.getElementById("custom-alert-container");
      var customAlertMessage = document.getElementById("custom-alert-message");

      if (count > 0) {
        customAlertMessage.textContent = "Pending application count : " + count;
        customAlertContainer.style.display = "block";
      }

      document.getElementById("custom-alert-close-btn").addEventListener("click", function() {
        customAlertContainer.style.display = "none";
      });
    };
  </script>

  <?php include ('includes/footer.php') ?>
</body>

</html>