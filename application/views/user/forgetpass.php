<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link rel="stylesheet" href="<?php echo site_url('assests/css/style.css'); ?>">
  <!-- Bootstarp Icon Cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- google font  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

  <title>Rahiwasi Dakhla</title>




</head>

<body class="reg-bg">
<?php if ($this->session->flashdata('error')) { ?>
              <p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
              <?php } ?> 





  <!-- **************** for user login******************** -->
   <section class="login-section">
    <div class="container">
      <br>
      <div class=" row ">

        



      <form action="<?php echo base_url('user/forget_password/send_otp'); ?>" method="post">
          <div class="main2">
            <div class="log-border">

            <a class="text-decoration-none add-login " href="#">
            <img src="<?php echo site_url('assests/images/certilogo.png'); ?>" alt="" style="height: 120px; width:120px ;">
          </a>

            <h2 class=" lg-in user-login  text-center text-dark fw-bold">Forget Password</h2>
              <br>
              <div class=" custom-input">
                        <label class="fw-bold text-dark forget-label" for=" ">Your Mobile Number</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" pattern="[0-9]+" minlength="10" maxlength="10" id="phone" name="phone" placeholder=" Enter Your Number" 
                                aria-label="Username" aria-describedby="basic-addon1" required >
                            <!-- <span class="input-group-text"><i class="bi bi-phone-fill"></i></span> -->
                        </div>
                        <div class="">
                        <button type="submit" class="btn btn-success">Send OTP </button>
                        </div>
                    </div>
</form>

<form action="<?php echo base_url('user/forget_password/verify_otp'); ?>" method="post">
                    <div class=" custom-input mt-2">
                        <label class="fw-bold text-dark forget-label" for=" ">Enter OTP</label>
                        <div class="input-group ">
                            <input type="text" class="form-control custom-input" id="otp" name="otp" placeholder="Enter OTP"
                                aria-label="Username" aria-describedby="basic-addon1">
                               
                            <!-- <span class="input-group-text"><i class="bi bi-chat-left-text-fill"></i></span> -->
                        </div>
                    </div>

                    <div class="" >
                        <div class=" mt-2 ">
                        <button type="submit"  class="btn btn-success">Submit </button>
                        
                            <a href="<?php echo base_url('user/login'); ?>" class="btn btn-primary" role="button">Cancel</a>
                        </div>
                    </div>
              
               


            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  


 











  <?php include ('includes/footer.php') ?>








  <!-- Bootstrap script cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>