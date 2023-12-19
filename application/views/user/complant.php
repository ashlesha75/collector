<!-- jQuery Library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<?php include('includes/header.php') ?>

<div class=" container p-2 admin-list bg-white">
    <!-- <h2>User Dashboard</h2> -->

    <!-- ********************* Complaint Register************************** -->
    <form id="your-form-id" action="<?php echo base_url(); ?>user/dashboard/raise_complaint" method="post" enctype="multipart/form-data">
        <!-- harshal -->

        <section class="">
            <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <!-- <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Record Added Successfully</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
                        <div class="modal-body">
                            <!-- You can customize the message here -->
                            <!-- Your record has been added successfully. -->
                            Your complaint has been raised successfully. We will notify you shorly.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#successModal">
    Add Record
</button> -->

            <div class="container">
                <div class="row ">
                    <div class="text-center  custom-input">
                        <h2 class="fw-bold sub-application">Complaint Register
                        </h2>
                    </div>

                    <div class=" custom-input col-lg-6 ">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="firstname"> Name:</label>
                            <input type="text" class=" form-control col-sm-8  col-md-9 col-lg-7 " name="firstname" id="firstname" placeholder=" Enter Your Name" aria-label="Username" aria-describedby="basic-addon1" required>
                        </div>
                    </div>

                    <!-- 
                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size mt-2 col-sm-4 col-md-3  col-lg-5"  for="firstname_marathi"> Last Name:</label>
                        <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7" name="firstname_marathi" id="firstname_marathi" placeholder=" Last Name" aria-label="Username"
                            aria-describedby="basic-addon1" value="">                       
                    </div>                   
                </div> -->

                    <div class=" custom-input col-lg-6 ">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="middlename"> E-mail:</label>
                            <input type="text" class="form-control col-sm-8  col-md-9 col-lg-7" name="email" id="middlename" placeholder=" Enter Your E-mail" aria-label="Username" aria-describedby="basic-addon1" value="" required>
                        </div>
                    </div>

                    <div class=" custom-input col-lg-6 ">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5 " for="middlename_marathi"> Phone Number:</label>
                            <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7 " name="phone" id="middlename_marathi" placeholder="Enter Your Phone Number" aria-label="Username" aria-describedby="basic-addon1" value="" required>
                        </div>
                    </div>

                    <!-- <div class=" custom-input col-lg-6 ">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="lastname"> Land Line Number:</label>
                            <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7" name="land_line" id="lastname" placeholder=" Enter Your Land Line Number" aria-label="Username" aria-describedby="basic-addon1" value="">
                        </div>
                    </div> -->

                    <!-- <div class=" custom-input col-lg-6">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="district_name"> Select District Name:</label>
                            <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="district_name" id="district_name" onchange="loadTaluka()" required> -->
                    <!-- <?php echo form_error('district_name'); ?> -->
                    <!-- </select>
                        </div>
                    </div> -->

                    <!-- <div class=" custom-input col-lg-6">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="taluka_name"> Select Taluka Name:</label>
                            <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="taluka_name" id="taluka_name" onchange="loadVillage()" required> -->
                    <!-- <?php echo form_error('taluka_name'); ?> -->
                    <!-- </select>
                        </div>
                    </div> -->

                    <!-- <div class=" custom-input col-lg-6">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="taluka_name"> Category:</label>
                            <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="category" id="taluka_name">
                            </select>
                        </div>
                    </div> -->

                    <!-- <div class=" custom-input col-lg-6">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="taluka_name"> Service Type:</label>
                            <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="service_type" id="taluka_name">
                            </select>
                        </div>
                    </div> -->

                    <!-- <div class=" custom-input col-lg-6">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="taluka_name"> Department Name:</label>
                            <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="dep_name" id="taluka_name">
                            </select>
                        </div>
                    </div> -->

                    <!-- <div class=" custom-input col-lg-6">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="taluka_name"> Services Name:</label>
                            <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="service_name" id="taluka_name">
                            </select>
                        </div>
                    </div> -->


                    <div class=" custom-input col-lg-6 ">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="firstname"> Upload File:</label>
                            <input type="file" class=" form-control col-sm-8  col-md-9 col-lg-7 " name="file" id="firstname" placeholder=" Enter Your Name" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class=" custom-input col-lg-6 ">
                        <div class="input-group mb-3 row">
                            <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="firstname"> Details:</label>

                            <textarea class=" form-control col-sm-8  col-md-9 col-lg-7 " name="details" id="" cols="30" rows="2"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="text-center mt-3 col-sm-6">
                            <input type="hidden" name="id" id="id" value="">
                            <button class="btn btn-danger" type="submit">Reset</button>
                        </div>

                        <div class="text-center mt-3 col-sm-6">
                            <!-- <input type="hidden" name="submit" id="id" value=""> -->
                            <button class="btn btn-success" type="submit" name="submit">Submit</button>
                        </div>
                    </div>
        </section>
    </form>
</div>


<!-- documents mandatory -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php if ($this->session->flashdata('success_message')) : ?>
    <script>
        $(document).ready(function() {
            $('#successModal').modal('show'); // Show the success modal
        });
    </script>
<?php endif; ?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Get the select element and the + button
        var selectElement = document.querySelector(".document-type");
        var selectAllButton = document.getElementById("selectAllOptions");

        // Add a click event listener to the + button
        selectAllButton.addEventListener("click", function() {
            // Loop through all options and set them as selected
            var options = selectElement.options;
            for (var i = 0; i < options.length; i++) {
                options[i].selected = true;
            }
        });
    });
</script>

<script>
    document.getElementById('your-form-id').addEventListener('submit', function(event) {
        // Get all document type select elements
        var documentTypeSelects = document.querySelectorAll('.document-type');

        // Check if any document type select is not selected
        var isAnyDocumentTypeEmpty = Array.from(documentTypeSelects).some(function(select) {
            return select.value === '';
        });

        // If any document type select is not selected, prevent form submission
        if (isAnyDocumentTypeEmpty) {
            event.preventDefault();

            // Show an error message or take appropriate action to inform the user about the missing selections
            alert('Please select all document types from the dropdowns.');
        }
    });
</script>

<script>
    $(document).ready(function() {
        // Add new file upload section when clicking "Add Documents" button
        rowIdx = 0;
        $(".add-btn").on("click", function() {
            var fileUploadSection = `
            <div class="row dive_${++rowIdx}" id='dive_${rowIdx}'>
                <div class="custom-input col-lg-5">
                    <div class="input-group mb-3">
                        <select class="form-select document-type " name="document_type[]">
                                <option value="" selected>Select Documents</option>
                                <option value="लाभार्थ्याचा विनंती अर्ज">लाभार्थ्याचा विनंती अर्ज</option>
                                <option value="तहसीलदार यांचेकडील अधिवास प्रमाणपत्र (Domicile)">तहसीलदार यांचेकडील अधिवास प्रमाणपत्र (Domicile)</option>
                                <option value="शाळा सोडल्याचा दाखला">शाळा सोडल्याचा दाखला</option>
                                <option value="जातीचा दाखला">जातीचा दाखला</option>
                                <option value="आधार कार्ड">आधार कार्ड</option>
                                <option value="स्वयंघोषणा पत्र">स्वयंघोषणा पत्र</option>
                                <option value="विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र">विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र</option>
                                <option value="अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र">अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र</option>
                                <option value="अन्य ">अन्य </option>
                        </select>
                    </div>
                </div>

                <div class="custom-input col-lg-5">
                    <div class="input-group">
                        <input type="file" class="form-control file-input ed-add" name="files[]"  accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" >
                    </div>
                </div>

                <div class="custom-input col-lg-2 mt-1" onclick="remove_edit(this);">
                    <div class="text-center">
                        
                        <button id="remove_${rowIdx}" onclick="remove_edit(this.id)" class="bg-primary add-btn" type="button"><i class="bi bi-dash"></i> </button>
                    </div>
                </div>
            </div>
        `;

            $("#fileUploadContainer").append(fileUploadSection);
            //$(".add-btn:not(:first)").hide(); // Hide the "Add Documents" button after clicking it once
        });


        // Submit form
        $("#submitForm").submit(function(event) {
            event.preventDefault();
            // $('.document-type').removeAttr("disabled");
            var formData = new FormData($(this)[0]);

            $.ajax({
                url: $(this).attr("action"),
                type: $(this).attr("method"),
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle success response here (e.g., display success message)
                    console.log("Form submitted successfully!");
                },
                error: function(xhr, status, error) {
                    // Handle error response here (e.g., display error message)
                    console.error("Error submitting form: " + error);
                },
            });
        });
    });
</script>

<script>
    function remove_edit(val) {
        var id = val;

        var split_id = String(id).split("_");
        var deleteindex = split_id[1];

        // Remove <div> with id
        $("#dive_" + deleteindex).remove();
    }

    $(document).ready(function() {
        loadDistrict();
    });

    function loadDistrict() {

        $.ajax({
            url: "<?php echo site_url('user/registration/loadDistrict'); ?>",
            type: 'POST',
            data: {
                edit_district: '<?php echo $form_info ? $form_info[0]->district_name : ''; ?>',
            },
            success: function(response) {
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
                edit_taluka: '<?php echo $form_info ? $form_info[0]->taluka_name : ''; ?>',
                district_name: district_name
            },
            success: function(response) {
                $('#taluka_name').html(response);
                loadVillage();
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
                edit_village: '<?php echo $form_info ? $form_info[0]->village_name : ''; ?>',
                district_name: district_name,
                taluka_name: taluka_name

            },
            success: function(response) {
                $('#village_name').html(response);
            }
        });
    }
</script>





<?php include('includes/footer.php') ?>