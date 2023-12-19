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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>

<body class="reg-bg">


    <section class=" new-add-window ">

        <form action="<?php echo base_url('user/registration/add'); ?>" method="post">



            <section class=" mt-1 reg-custom   reg-custom-new-alig">
                <div class="container reg-back">
                        <a class="text-decoration-none add-regis " href="#">
            <img src="<?php echo site_url('assests/images/certilogo.png'); ?>" alt="" style="height: 100px; width:100px ;">
          </a>
                    <div class="row  ">
                        <!---- Success Message ---->
                        <!-- <?php if ($this->session->flashdata('success')) { ?>
        <p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
        </div>


        <?php } ?> -->

                        <!---- Error Message ---->

                        <?php if ($this->session->flashdata('error')) { ?>
                        <p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>

                        <?php } ?>


                        <div class="text-center  custom-input">

                            <h2 class="fw-bold Create-acc">Create An Account</h2>
                        </div>


                        <div class="custom-input ">
                            <div class="input-group row mb-3">
                                <label class="fw-bold lable-size  mt-2  ms-2  col-sm-2  col-md-2 col-md-2 col-lg-3"
                                    for="applicant_name"> Your Name<span class="text-danger ">*</span>:</label>
                                <input type="text" class="form-control ms-3  col-sm-10  col-md-10 col-lg-9"
                                    name="applicant_name" id="applicant_name"
                                    value="<?php echo set_value('applicant_name'); ?>" placeholder="Enter Your Name"
                                    aria-label="Username" aria-describedby="basic-addon1" required>
                                <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                            </div>
                        </div>

                        <div class="custom-input">
                            <div class="input-group row mb-3">
                                <label class="fw-bold lable-size ms-2  col-sm-2  col-md-2 col-lg-3  mt-2 "
                                    for="district_name">
                                    District Name<span class="text-danger ">*</span>:</label>
                                <select class="form-select ms-3 col-sm-10  col-md-10 col-lg-9 " name="district_name"
                                    id="district_name" onchange="loadTaluka()">
                                </select>
                            </div>
                        </div>

                        <div class="custom-input">
                            <div class="input-group row mb-3">
                                <label class="fw-bold lable-size  ms-2 col-sm-2  col-md-2  mt-2 me-1 col-lg-3"
                                    for="taluka_name">Taluka Name<span class="text-danger ">*</span>:</label>
                                <select class="form-select akash ms-3 col-sm-10  col-md-10 col-lg-9 " name="taluka_name"
                                    id="taluka_name" value="<?php echo set_value('taluka_name'); ?>"
                                    onchange="loadVillage()" required>

                                </select>
                            </div>
                        </div>

                        <div class="custom-input">
                            <div class="input-group row mb-3">
                                <label class="fw-bold lable-size  ms-2 col-sm-2  col-md-2 col-lg-3  mt-2 "
                                    for="village_name">Village Name<span class="text-danger ">*</span>:</label>
                                <select class="form-select ms-3 col-sm-10  col-md-10 col-lg-9 " name="village_name"
                                    id="village_name" value="<?php echo set_value('village_name'); ?>" required>

                                </select>
                            </div>
                        </div>

                        <div class="custom-input">
                            <div class="input-group row mb-3">
                                <label class="fw-bold lable-size ms-2  col-sm-2  col-md-2 col-lg-3  mt-2 "
                                    for="phone">PhoneNumber<span class="text-danger  ">*</span>:</label>
                                  
                                <input type="text" pattern="[0-9]+" minlength="10" maxlength="10"
                                    class="form-control ms-3   col-sm-10  col-md-10 col-lg-9  " name="phone" id="phone"
                                    value="<?php echo set_value('phone'); ?>" placeholder="Enter Your Phone Number"
                                    aria-label="Username" aria-describedby="basic-addon1" required>
                                <!-- <span class="input-group-text"><i class="bi bi-phone-fill"></i></span> -->
                            </div>
                        </div>

                        <div class="custom-input">
                            <div class="input-group row mb-3">
                                <label class="fw-bold lable-size ms-2  col-sm-2  col-md-2 col-lg-3 mt-2  " for="email">
                                    Your
                                    E-mail <span class="text-danger ">*</span> :</label>
                                <input type="text"
                                    pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$"
                                    class="form-control ms-3  col-sm-10  col-md-10 col-lg-9 " name="email" id="email"
                                    value="<?php echo set_value('email'); ?>" placeholder="Enter Your E-mail"
                                    aria-label="Username" aria-describedby="basic-addon1" required>
                                <!-- <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span> -->
                            </div>
                        </div>

                        <div class="text-center ">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>


            </section>
        </form>





        <section class="document-required bg-white">


            <div class="">
                <div class="centered-container">
                    <h2 class=" user-login lg-in text-dark text-center fw-bold p-1" style="font-size:20px ;">आवश्यक
                        कागदपत्रे
                    </h2>

                    <div class="">
                        <ul>
                            <li> लाभार्थ्याचा विनंती अर्ज
                            </li>
                            <li> तहसीलदार यांचेकडील अधिवास प्रमाणपत्र
                            </li>
                            <li> शाळा सोडल्याचा दाखला
                            </li>
                            <li> जातीचा दाखला
                            </li>
                            <li> आधार कार्ड
                            </li>
                            <li> स्वयंघोषणा पत्र
                            </li>
                            <li> विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र
                            </li>
                            <li> अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल
                                ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र
                            </li>
                            <li> अन्य
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </section>
        
    </section>

    <?php include('includes/footer.php'); ?>


    <script>
        $(document).ready(function () {
            loadDistrict();
        });

        function loadDistrict() {

            $.ajax({
                url: "<?php echo site_url('user/registration/loadDistrict'); ?>",
                type: 'POST',
                data: {

                },
                success: function (response) {
                    $('#district_name').html(response);
                    loadTaluka();
                }
            });
        }


        function loadTaluka() {
            var district_name = $('#district_name').val();
            $.ajax({
                url: "<?php echo site_url('user/registration/loadTaluka'); ?>",
                type: 'POST',
                data: {
                    district_name: district_name
                },
                success: function (response) {
                    $('#taluka_name').html(response);
                }
            });
        }

        function loadVillage() {
            var district_name = $('#district_name').val();
            var taluka_name = $('#taluka_name').val();
            $.ajax({
                url: "<?php echo site_url('user/registration/loadVillage'); ?>",
                type: 'POST',
                data: {
                    district_name: district_name,
                    taluka_name: taluka_name

                },
                success: function (response) {
                    $('#village_name').html(response);
                }
            });
        }
    </script>


    <!-- <?php if ($this->session->flashdata('success')): ?>
    <script>
        $(document).ready(function () {
            alert("<?php echo $this->session->flashdata('success'); ?>");
        });
    </script>
<?php endif; ?> -->

    <!-- <?php if ($this->session->flashdata('error')): ?>
    <script>
        $(document).ready(function () {
            alert("<?php echo $this->session->flashdata('error'); ?>");
        });
    </script>
<?php endif; ?> -->








    <!-- Bootstrap script cdn -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>