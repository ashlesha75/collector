 <!-- **************** for admin forget password******************** -->
 <section class="">
    <div class="container ">
      <br>
      <div class=" row ">

        <form action="<?php echo base_url('user/login'); ?>" method="post">
          <div class="main2">
            <div class="log-border">
              <h2 class=" lg-in fw-bold text-center">Forget Password Panal</h2>
              <br>
              <div class="custom-input ">
                <label class="fw-bold" for="username">Mobile Number</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Enter Your Number" aria-label="Username"
                    aria-describedby="basic-addon1">
                  <span class="input-group-text"><i class="bi bi-phone-fill"></i></span>
                </div>
              </div>
                      
              <div class="">
              <button type="submit" class="btn btn-primary">Send OTP</button>
              </div>
         
              <div class="custom-input">
                <label class="fw-bold" for="password">Enter OTP</label>
                <div class="input-group mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Enter Your Password" aria-label="Username"
                    aria-describedby="basic-addon1">
                  <span class="input-group-text"><i class="bi bi-chat-left-text-fill"></i></span>
                </div>

                <div class="d-flex ">
              <div class="text-center col-lg-6 ">
              <button type="submit" class="btn btn-primary">Submit</button>
              </div>

              <div class="text-center col-lg-6 ms-4">
              <button type="submit" class="btn btn-primary">Cancel</button>
              </div>
              </div>

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

