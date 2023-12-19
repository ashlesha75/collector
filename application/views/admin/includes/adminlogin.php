 <!-- **************** for admin login******************** -->
 <section class="">
    <div class="container ">
      <br>
      <div class=" row ">

        <form action="<?php echo base_url('user/login'); ?>" method="post">
          <div class="main2">
            <div class="log-border">
              <h2 class=" lg-in fw-bold text-center">Log In My Panal</h2>
              <br>
              <div class="custom-input ">
                <label class="fw-bold" for="username">Your UserName</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Enter Your Username" aria-label="Username"
                    aria-describedby="basic-addon1">
                  <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                </div>
              </div>

              <div class="custom-input">
                <label class="fw-bold" for="password">Your Password</label>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Enter Your Password" aria-label="Username"
                    aria-describedby="basic-addon1">
                  <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                </div>

                <div>
                  <a class="text-decoration-none" href="#">
                    <h6 class="log-btn fw-bold text-dark">Forget Password</h6>
                  </a>
                </div>

              </div>
              <div class="text-center">
              <button type="submit" class="btn btn-primary">Log In</button>
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
