<?php $adid = $this->session->userdata('adid'); ?>
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

<body>

  <section class="user-dash1 ">
    <div class="container-fluid">
      <div class="user-mobile d-flex">
        <div class="">
          <a class="text-decoration-none" href="#">
            <img src="<?php echo site_url('assests/images/certilogo.png'); ?>" alt=""
              style="height: 45px; width: 50px; position: relative;top: 3px;">
            <span style=" color: white; position: relative; bottom: 10px; font-size: 11px;">एकात्मिक आदिवासी विकास
              <p style=" color: white; position: relative; left: 55px; bottom: 10px;"> <span>महाराष्ट्र शासन प्रकल्प
                  तळोदा</span> </p> </span>
          </a>
        </div>

        <div class="">
          <a class="text-decoration-none" href="<?php echo site_url('admin/Login/logout'); ?>">
            <h4 class="text-white " style="font-size:11px; position: relative; top: 20px;"> <span><i
                  class="bi bi-box-arrow-left"></i></span> Log Out
            </h4>
          </a>
        </div>
      </div>


      <div class="text-center mobile-div">
        <a style=" color: white; position: relative; bottom: 25px; text-decoration: none; font-size: 11px;" href="#">
          Welcome <?php if($adid['admin_type']=='apo'){
      echo "APO";
    }
    
    if($adid['admin_type']=='clerk'){
      echo "CLERK";
    } 
    if($adid['admin_type']=='po'){
      echo "PO";
    }
  ?> &nbsp;| &nbsp; <span> <a class="text-white "
              style="font-size:11px; position: relative; bottom: 25px; text-decoration: none;" href="<?php echo site_url('admin/Dashboard'); ?>">Home</a> </span>
        </a>
      </div>

    </div>
  </section>



  <section class=" user-desktop1">
    <div class="user-dash">
      <div class="d-flex container-fluid user-admin">

        <div class="mt-3 ms-2">
          <a class="text-decoration-none" href="#">
            <img src="<?php echo site_url('assests/images/certilogo.png'); ?>" alt=""
              style="height: 75px; width: 90px; position: relative; bottom: 13px;border-radius: 5px;">
            <span style=" color: white; position: relative; bottom: 13px; font-size: 15px;">एकात्मिक आदिवासी विकास
              महाराष्ट्र शासन प्रकल्प तळोदा</span>
          </a>
        </div>

        <div>
          <a style=" color: white; position: relative; top: 24px; text-decoration: none; font-size: 15px;" href="#">
            Welcome <?php if($adid['admin_type']=='apo'){
      echo "APO";
    }
    
    if($adid['admin_type']=='clerk'){
      echo "CLERK";
    } 
    if($adid['admin_type']=='po'){
      echo "PO";
    }
  ?> | <span> <a style=" color: white; position: relative; top: 24px; text-decoration: none; font-size: 15px;"
                href="<?php echo site_url('admin/Dashboard'); ?>">Home</a></span> </a>
        </div>



        <div class=" me-2">
          <a class="text-decoration-none" href="<?php echo site_url('admin/Login/logout'); ?>">
            <h4 class="text-white " style="font-size:15px; position: relative; top: 28px;"> <span><i
                  class="bi bi-box-arrow-left"></i></span> Log Out
            </h4>
          </a>
        </div>
      </div>
    </div>



  </section>

<?php if($this->session->flashdata('flashSuccess')):?>
  <div class="alert alert-success alert-dismissible show text-center" role="alert">
    <strong><?php echo $this->session->flashdata('flashSuccess')?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endif?>

  <?php if($this->session->flashdata('flashError')):?>
  <div class="alert alert-danger alert-dismissible show text-center" role="alert">
    <strong><?php echo $this->session->flashdata('flashError')?></strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endif?>

  <?php if($this->session->flashdata('flashInfo')):?>
  <p class='flashMsg flashInfo'> <?php echo $this->session->flashdata('flashInfo')?> </p>
  <?php endif?>

  <?php if($this->session->flashdata('flashWarning')):?>
  <p class='flashMsg flashWarning'> <?php echo $this->session->flashdata('flashWarning')?> </p>
  <?php endif?>






<script type="text/javascript">
        setTimeout(function () {
          // Closing the alert
          $('.alert').alert('close');
        }, 3000);
</script>





















  <!-- Bootstrap script cdn -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>