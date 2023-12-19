<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php include ('includes/header.php') ?>

   <br>
<br>
<br>
<div class=" container p-2 admin-list bg-white">
    <!-- <h2>User Dashboard</h2> -->

   <br>


    <!-- ********************* Check Status************************** -->
    <form id="your-form-id" action="<?php echo base_url('user/dashboard/rahivasi_list'); ?>" method="post" enctype="multipart/form-data">
 
    <section class="">
        <div class="container">
            <div class="row ">
            <br>
            <br>
            <br>
                <div class="text-center  custom-input">
                    <h2 class="fw-bold sub-application">Check Status
</h2>
                </div>

                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row ">
                        <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="firstname">  Enter Your Tocken Number:</label>
                        <input type="text" class=" form-control col-sm-8  col-md-9 col-lg-7 " name="firstname" id="firstname" placeholder=" Enter Your Tocken Number" aria-label="Username"
                            aria-describedby="basic-addon1">                     
                    </div>
                </div>

                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row ">
                        <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="firstname">  Enter Your Email ID:</label>
                        <input type="text" class=" form-control col-sm-8  col-md-9 col-lg-7 " name="firstname" id="firstname" placeholder=" Enter Your Email ID" aria-label="Username"
                            aria-describedby="basic-addon1">                     
                    </div>
                </div>

          
<br>
<br>
<br>
<br>
           <div class="row">
           <div class="text-center mt-3 col-sm-6">
                <button class="btn btn-danger" type="">Clear</button>
            </div>

           <div class="text-center mt-3 col-sm-6">
                <button class="btn btn-success" type="">Search Status</button>
            </div>
           </div>

           
        </section>
    </for0m>
</div>







<?php include ('includes/footer.php') ?>