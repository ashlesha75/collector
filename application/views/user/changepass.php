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
  <section class="">
    <div class="container akash">
      <br>
      <div class=" row ">

        <form action="<?php echo base_url('user/forget_password/changepassword'); ?>" method="post">
          <div class="main2">
            <div class="log-border">
              <h2 class="lg-in text-center text-dark fw-bold">Change Password</h2>
              <br>
              <div class="custom-input">
                <label class="fw-bold text-dark" for="password">New Password</label>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" id="password" name="password" placeholder="New Password"
                    aria-label="password" aria-describedby="basic-addon1" required>
                  <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                </div>
              </div>

              <div class="custom-input">
                <label class="fw-bold text-dark" for="cpassword">Confirm Password</label>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password"
                    aria-label="cpassword" aria-describedby="basic-addon1" required>
                  <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                </div>
              </div>

              <div class="">
                <div class=" mt-2 ">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="<?php echo base_url('user/login'); ?>" class="btn btn-primary" role="button">Cancel</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Bootstrap script cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>
