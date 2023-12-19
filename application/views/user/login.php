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





  <!-- **************** for user login******************** -->
  <section class=" new-add-window">
    <section class="login-section">
      <div class="container">
        <br>
        <div class=" row ">

          <form action="<?php echo base_url('user/login'); ?>" method="post">
            <div class="main2">
              <div class="log-border">
          


              <a class="text-decoration-none add-login " href="#">
            <img src="<?php echo site_url('assests/images/certilogo.png'); ?>" alt="" style="height: 120px; width:120px ;">
          </a>

                <!-- Registration Successfull Message -->
                <!-- <?php if ($this->session->flashdata('success')) { ?>
                <p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
                </div>
                <?php } ?> -->

                <!-- Login Error Message -->
                <!-- <?php if ($this->session->flashdata('error')) { ?>
              <p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
              <?php } ?> <br> -->
           

                <h2 class=" user-login lg-in fw-bold text-dark text-center">Log In</h2>
                <br>
                <div class="custom-input ">
                  <label class="fw-bold text-dark lable-size" for="username">Your UserName</label>
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" id="pass" name="username" placeholder="Enter Your Username"
                      aria-label="Username" aria-describedby="basic-addon1" required>
                    <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                  </div>
                </div>

                <div class="custom-input">
                  <label class="fw-bold text-dark lable-size" for="password">Your Password</label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" id="pass" name="password"
                      placeholder="Enter Your Password" aria-label="Username" aria-describedby="basic-addon1" required>
                    <!-- <span class="input-group-text"><i class="bi bi-lock-fill"></i></span> -->
                  </div>

                  <div>
                    <a class="text-decoration-none" href="<?php echo base_url('user/forget_password'); ?>">
                      <h6 class="log-btn fw-bold text-dark">Forget Password</h6>
                    </a>
                  </div>

                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success">Log In</button>
                </div>

                <br>
                <div class="text-center">
                  <a href="<?php echo base_url('user/registration'); ?>" class="btn btn-secondary">Register Here</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>


    <section class="login-section ">
      <div class="container">
        <br>
        <div class=" row ">
          <form action="<?php echo base_url('user/login'); ?>" method="post">
            <div class="main2">
              <div class="log-border-document">
                <h2 class=" user-login lg-in text-dark text-center fw-bold p-1" style="font-size:20px ;">महसूल
                  विभागांतर्गत दिल्या जाणाऱ्या सेवा</h2>

                <div class="scrollable-list-1 p-1 row">
                  <ul class="col-lg-6" style="border-right: solid 1px #ccc ; list-style: none;">
                    <li>1) मिळकतीचे प्रमाणपत्र</li>
                    <li>2) रहिवास प्रमाणपत्र</li>
                    <li>3) वय, राष्ट्रीयत्व आणि अधिवास प्रमाणपत्र</li>
                    <li>4) ज्येष्ठ नागरिक प्रमाणपत्र</li>
                    <li>5) अल्पभूधारक शेतकरी असल्याचे प्रतिज्ञापत्र</li>
                    <li>6) पत दाखला</li>
                    <li>7) सांस्कृतिक कार्यक्रम परवाना</li>
                    <li>8) स्टोन क्रशर परवाना</li>
                    <li>9) वंशावळीचे प्रतिज्ञापत्र</li>
                    <li>10) दगड खाणपट्टा परवाना</li>
                    <li>11) गौण खनिज परवाना</li>
                    <li>12) वारसा प्रमाणपत्र</li>
                    <li>13) डोंगरी असल्याचा दाखला</li>
                    <li>14) जात प्रमाणपत्र</li>
                   </ul>
                    <ul class="col-lg-6" style="list-style: none;">
                    <li>15) विशेष सहाय्य योजना</li>
                    <li>16) बिगर शेतकी जमीन परवानगी प्रमाणपत्र</li>
                    <li>17) कौटूंबिक शिधापत्रीका</li>
                    <li>18) अर्थ कुटुंब सहाय्य योजना</li>
                    <li>19) भूमिहीन असल्याचे प्रमाणपत्रासाठी अर्ज</li>
                    <li>20) ३0% महिला आरक्षण</li>
                    <li>21) नॉन क्रिमीलेअर प्रमाणपत्र</li>
                    <li>22) प्रमाणित नक्कल मिळणे बाबत अर्ज</li>
                    <li>23) प्रकल्प प्रभावित प्रमाणपत्र</li>
                    <li>24) हॉटेल परवाना</li>
                    <li>25) माहितीचा अधिकार अधिनियम २००५ प्रमाणपत्र</li>
                    <li>26) लॉज परवाना</li>
                    <li>27) खानावळ परवाना</li>
                    <li>28) अधिकार अभिलेखात नाव नोंदणीचा अर्ज</li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
      </form>
    </section>

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
    window.onload = function () {
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