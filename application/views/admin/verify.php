

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <!-- <link rel="stylesheet" href="assests/css/style.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <title>Rahiwasi Dakhla</title>
</head>

<body class="barcode-bg">
<?php include('includes/header.php'); ?>

<section class="main-bar">
        <div class="row">
            <div class="">
                <div class="code-bg bg-white">
                    <div class="text-center p-2">
                        <h2 class="fw-bold fs-4">User's Verification</h2>
                    </div>
                    <div class="text-center">
                        <h5 class="fw-bold fs-5">Bar Code Information</h5>
                    </div>
                    <form action="<?php echo base_url('admin/dashboard/verify_submission'); ?>" method="post">
                        <div class="custom-input barcode-type">
                            <label class="fw-bold text-dark barcode-label" for="">Bar Code :-</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="barcode-input1" name="username"
                                    placeholder="" aria-label="Username" aria-describedby="basic-addon1" required value="<?php echo $barcode!=''?$barcode:''; ?>">
                            </div>
                        </div>
                        <div class="row p-1">
                            <div class="col-lg-4 col-md-5 col-xl-5 text-center">
                                <label class="fw-bold text-dark barcode-label" for="">Verification Image :-</label>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xl-4 text-center">
                            <span id="captcha-image"><?php echo $captcha_image; ?></span>

                            </div>
                            <div class="col-lg-4 col-md-2 col-xl-2 text-center mt-2">
                                
                            <button type="button" id="reloadCaptchaButton" onclick="getNewcaptcha();">
                                <img class="reload" src="<?php echo site_url('assests/images/reload2.png'); ?>" alt="Reload Captcha">
                            </button>
                                
                            </div>
                        </div>
                        <div class="custom-input barcode-type">
                            <label class="fw-bold text-dark barcode-label" for="">Enter The Text As In The Image
                                :-</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" id="barcode-input2" name="captcha_code"
                                    placeholder="Enter Text" aria-label="Username" aria-describedby="basic-addon1"
                                    required>
                            </div>
                        </div>
                        <div class="text-center save-btn">
                            <button type="submit" class="btn btn-success fw-bold">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php if(count($form_info)==1){ ?>
<section class="main-bar">
        
                <div class="table-responsive extra-box1 bg-white p-2">
      
      <table id="application_form" class="table table-striped table-bordered dataTable">
  <thead>
    <tr>
      <!-- <th scope="col" style="border-top:1px solid #dee2e6;">Select All <input type="checkbox" name="user_mail_all" id="user_mail_all" class="user_mail_all" /></th> -->
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
      <!-- <th scope="row"><input type="checkbox" name="user_mail[]" id="user_mail" class="user_mail" value="<?php echo $form_row->r_id; ?>" /></th> -->
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
      <td><?php if($form_row->deleted_status!=1){ if($form_row->po_verify!=1){?><a class="btn btn-danger" style="width: 100px; height:32px; font-size:12px;"  href="<?php echo base_url(); ?>admin/Dashboard/view_detail/<?php echo $form_row->r_id; ?>">Take Action</a><?php } }

      if($form_row->send_dsc==1){ ?> 
        <a class="text-white text-decoration-none btn btn-info" style="width: 150px; height: 32px; font-size: 13px;" href="<?php echo base_url(); ?>user/registration/certificate/<?php echo $form_row->r_id; ?>" target="_blank">View Certificate</a>
      <?php }
       ?></td>
      <td><a class="btn btn-primary"  style="width: 120px; height:32px; font-size:12px;" href="<?php echo base_url(); ?>admin/Dashboard/view_app_detail/<?php echo $form_row->r_id; ?>">View Application</a></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
            
    </section> <?php } ?>
  <?php include('includes/footer.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>


<script type="text/javascript">
    function getNewcaptcha(){
        $.ajax({
   url:"<?php echo base_url('admin/Dashboard/getNewCaptcha');?> ",
   success:function(response)
   {
    $('#captcha-image').html(response);
   }
    });
}

</script>


</body>

</html>
