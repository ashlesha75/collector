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

 <!-- **************** for admin login******************** -->
 <section class="login-section">
    <div class="container ">
      <br>
      <div class=" row ">
   
        <form action="<?php echo base_url('admin/login'); ?>" method="post">
          <div class="main2">
            
            <div class="log-border">
            <a class="text-decoration-none add-login " href="#">
            <img src="<?php echo site_url('assests/images/certilogo.png'); ?>" alt="" style="height: 120px; width:120px ;">
          </a>

              <h2 class=" user-login lg-in fw-bold text-center">Log In</h2>
              <br>
              <div class="custom-input ">
                <label class="fw-bold lable-size" for="username">Username</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control ad-in" name="username" placeholder="Enter Your Username" aria-label="Username"
                    aria-describedby="basic-addon1" required>
                  <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                </div>
              </div>

              <div class="custom-input">
                <label class="fw-bold lable-size" for="password">Password</label>
                <div class="input-group mb-3">
                  <input type="password" class="form-control ad-in" name="password" placeholder="Enter Your Password" aria-label="Username"
                    aria-describedby="basic-addon1" required>
                  <!-- <span class="input-group-text"><i class="bi bi-lock-fill"></i></span> -->
                </div>

                <div>
                  <a class="text-decoration-none" href="<?php echo base_url('admin/forget_password'); ?>">
                    <h6 class="log-btn fw-bold text-dark">Forget Password</h6>
                  </a>
                </div>

              </div>
              <div class="text-center">
              <button type="submit" class="btn btn-success">Log In</button>
              </div>
              <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php } ?>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php include ('includes/footer.php') ?>

  <script>
    // Function to show success or error message as an alert
    function showMessage(type, message) {
      let alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
      let alertMessage = `<div class="alert ${alertClass} alert-dismissible fade show" role="alert">
                            ${message}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>`;
      document.querySelector('.container').insertAdjacentHTML('afterbegin', alertMessage);
      // You can also choose a different container element to append the alert message
      // For example: document.querySelector('#alertContainer').insertAdjacentHTML('afterbegin', alertMessage);
    }

    // Check if the success or error message is available and call the showMessage function
    window.onload = function() {
      let successMessage = "<?php echo $this->session->flashdata('success'); ?>";
      let errorMessage = "<?php echo $this->session->flashdata('error'); ?>";

      if (successMessage) {
        showMessage('success', successMessage);
      }

      if (errorMessage) {
        showMessage('error', errorMessage);
      }
    };
  </script>
  <!-- Bootstrap script cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  
</body>

</html>