<!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php include ('includes/header.php') ?>

<html>
    <head>
        <style>
            html{
                height: 100%;

            }
            body{
                position: relative;
                margin: 0;
                min-height: 100%;
                padding-bottom: 2.74rem;
            }
        </style>
    </head>
    <body>
<div class=" container p-2 admin-list bg-white">
    <!-- <h2>User Dashboard</h2> -->


    <!-- ********************* For Rahiwasi Application************************** -->
    <form id="your-form-id" action="<?php echo base_url('user/dashboard/rahivasi_list'); ?>" method="post" enctype="multipart/form-data">
    <section class=" zoom-in-2 mb-4">
        <div class="container">
            <div class="row ">
                <div class="text-center  custom-input">
                    <h2 class="fw-bold sub-application">Submit Application For Rahiwasi</h2>
                </div>

                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="firstname"> First Name:</label>
                        <input type="text" class=" form-control col-sm-8  col-md-9 col-lg-7 " name="firstname" id="firstname" placeholder=" Enter Your Name" aria-label="Username"
                            aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->firstname:''; ?>" required>
                            <!-- <?php echo form_error('firstname'); ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                    </div>
                </div>

                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size mt-2 col-sm-4 col-md-3  col-lg-5"  for="firstname_marathi"> पहिलं नाव:</label>
                        <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7" name="firstname_marathi" id="firstname_marathi" placeholder=" पहिलं नाव" aria-label="Username"
                            aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->firstname_marathi:''; ?>" required>
                            <!-- <?php echo $form_info[0]->firstname_marathi; ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                    </div>
                </div>
                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="middlename"> Middle Name:</label>
                        <input type="text" class="form-control col-sm-8  col-md-9 col-lg-7" name="middlename" id="middlename" placeholder=" Enter Your Middle Name"
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->middlename:''; ?>" required>
                            <!-- <?php echo form_error('middlename'); ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                    </div>
                </div>

                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5 " for="middlename_marathi"> वडिलांचे / पतीचे नाव:</label>
                        <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7 " name="middlename_marathi" id="middlename_marathi" placeholder=" वडिलांचे/पतीचे नाव"
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->middlename_marathi:''; ?>" required>
                            <!-- <?php echo form_error('middlename_marathi'); ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                    </div>
                </div>
                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="lastname"> Last Name:</label>
                        <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7" name="lastname" id="lastname" placeholder=" Enter Your Last Name"
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->lastname:''; ?>" required>
                            <!-- <?php echo form_error('lastname'); ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                    </div>
                </div>
                
                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="lastname_marathi"> आडनाव:</label>
                        <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7" name="lastname_marathi" id="lastname_marathi" placeholder=" आडनाव"
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->lastname_marathi:''; ?>" required>
                            <!-- <?php echo form_error('lastname_marathi'); ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                    </div>
                </div>

                <div class=" custom-input col-lg-6">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="phone"> Phone Number:</label>
                        <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7" pattern="[0-9]+" minlength="10" maxlength="10"  name="phone" id="phone" placeholder=" Enter Your Phone Number"
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->phone:''; ?>" required>
                            <!-- <?php echo form_error('phone'); ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-phone-fill"></i></span> -->
                    </div>
                </div>

                <div class=" custom-input col-lg-6">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="district_name"> Select District Name:</label>
                    <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="district_name" id="district_name" onchange="loadTaluka()" >
                    <!-- <?php echo form_error('district_name'); ?> -->
                    </select>
                    </div>
                </div>

                <div class=" custom-input col-lg-6">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="taluka_name"> Select Taluka Name:</label>
                    <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="taluka_name" id="taluka_name" onchange="loadVillage()" required>
                    <!-- <?php echo form_error('taluka_name'); ?> -->
                          
                    </select>
                    </div>
                </div>

                <div class=" custom-input col-lg-6">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="village_name"> Select Village Name:</label>
                    <select class="form-select  col-sm-8  col-md-9 col-lg-7" name="village_name" id="village_name" required>
                    <!-- <?php echo form_error('village_name'); ?> -->
                    </select>
                    </div>
                </div>

                <div class=" custom-input col-lg-6">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="area"> Area:</label>
                        <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7" name="area" id="area" placeholder=" Enter Your Area Name"
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->area:''; ?>" required>
                            <!-- <?php echo form_error('area'); ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-person-fill"></i></span> -->
                    </div>
                </div>

                <div class=" custom-input col-lg-6">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="aadharno"> Aadhar Card Number:</label>
                        <input type="text" class="form-control  col-sm-8  col-md-9 col-lg-7" pattern="[0-9]+" minlength="12" maxlength="12" name="aadharno" id="aadharno" placeholder=" Enter Your Aadhar number"
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->aadharno:''; ?>" required>
                            <!-- <?php echo form_error('aadharno'); ?> -->
                        <!-- <span class="input-group-text"><i class="bi bi-list-ol"></i></span> -->
                    </div>
                </div>

                <div class=" custom-input col-lg-6 ">
                    <div class="input-group mb-3 row">
                        <label class="fw-bold lable-size  mt-2 col-sm-4  col-md-3  col-lg-5" for="birthdate"> Birth Date:</label>
                        <input type="date" class="form-control  col-sm-8  col-md-9 col-lg-7" name="birthdate" id="birthdate" placeholder="Select Your Birth Date"
                            aria-label="Username" aria-describedby="basic-addon1" value="<?php echo $form_info?$form_info[0]->birthdate:''; ?>" required>
                            <!-- <?php echo form_error('birthdate'); ?> -->
                    </div>
                </div>

                <div class="doc-header row" style="background-color:#f3aba4;">
                <div class=" col sm-6 col-lg-6 Upload-Documents  ">
                    <h4 class="fw-bold">Upload Documents</h4>
                </div>

                <div class=" col sm-6 col-lg-6 Upload-Documents">
                    <h4 class="fw-bold">Select File</h4>
                </div>

              <!--   <div class=" col sm-4 col-lg-2 Upload-Documents  ">
                    <h4 class="fw-bold">Action</h4>
                </div> -->
            </div>

            <div id="fileUploadContainer" class="mt-3">
                <!--- edit entry ---->
                <?php if($form_info_doc){ $rowid = 5000; ?>                 
                <?php foreach($form_info_doc as $row){ ?>
                <div class="row dive_<?php echo $rowid++;?>" id='dive_<?php echo $rowid;?>'>
                    <div class="custom-input  col-lg-6" >
                    <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname"> <?php echo $row->doc_name ?>  :</label>
                        </div>
                   
                        <div class="input-group mb-3 " style="display: none;">
                        
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="" selected>Select Documents</option>
                                <option value="लाभार्थ्याचा विनंती अर्ज" <?php echo $row->doc_name=="लाभार्थ्याचा विनंती अर्ज"?"selected":''; ?>>लाभार्थ्याचा विनंती अर्ज</option>
                                <option value="तहसीलदार यांचेकडील अधिवास प्रमाणपत्र (Domicile)" <?php echo $row->doc_name=="तहसीलदार यांचेकडील अधिवास प्रमाणपत्र (Domicile)"?"selected":''; ?>>तहसीलदार यांचेकडील अधिवास प्रमाणपत्र (Domicile)</option>
                                <option value="शाळा सोडल्याचा दाखला" <?php echo $row->doc_name=="शाळा सोडल्याचा दाखला"?"selected":''; ?>>शाळा सोडल्याचा दाखला</option>
                                <option value="जातीचा दाखला" <?php echo $row->doc_name=="जातीचा दाखला"?"selected":''; ?>>जातीचा दाखला</option>
                                <option value="आधार कार्ड" <?php echo $row->doc_name=="आधार कार्ड"?"selected":''; ?>>आधार कार्ड</option>
                                <option value="स्वयंघोषणा पत्र" <?php echo $row->doc_name=="स्वयंघोषणा पत्र"?"selected":''; ?>>स्वयंघोषणा पत्र</option>
                                <option value="विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र" <?php echo $row->doc_name=="विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र"?"selected":''; ?>>विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र</option>
                                <option value="अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र" <?php echo $row->doc_name=="अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र"?"selected":''; ?>>अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र</option>
                                <option value="अन्य" <?php echo $row->doc_name=="अन्य"?"selected":''; ?>>अन्य</option>
                            </select>
                        </div>
                    </div>

                    <div class="custom-input  col-lg-6">
                        <div class="input-group ">
                            <input type="file" class="form-control file-input ed-add" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" <?php echo $row->doc_name=="अन्य"?"":''; ?>>
                            <input type="hidden" name="edit_image[]" id="edit_image" value="<?php echo $row->doc_path; ?>">
                            <a class="" target="_blank" href="<?php echo base_url(); ?><?php echo $row->doc_path; ?>">View</a>
                        </div>
                    </div>

                 <!--    <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button id="remove_<?php echo $rowid;?>" onclick="remove_edit(this.id)" class="bg-primary add-btn" type="button"><i class="bi bi-dash"></i> </button>
                        </div>
                    </div> -->
                </div>
                <?php } } else {?>
                <!-- Initial file upload section -->
                <div class="row">
                    <div class="custom-input col-lg-6">
                        <div class="input-group mb-3" style="display: none;">
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="लाभार्थ्याचा विनंती अर्ज">लाभार्थ्याचा विनंती अर्ज</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname">लाभार्थ्याचा विनंती अर्ज <span class="text-danger ">*</span> :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" required>
                        </div>
                    </div>

                  <!--   <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>    
                <div class="row">
                    <div class="custom-input col-lg-6">
                        <div class="input-group mb-3" style="display: none;" >
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="तहसीलदार यांचेकडील अधिवास प्रमाणपत्र (Domicile)">तहसीलदार यांचेकडील अधिवास प्रमाणपत्र (Domicile)</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname">तहसीलदार यांचेकडील अधिवास प्रमाणपत्र (Domicile) <span class="text-danger ">*</span> :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" required>
                        </div>
                    </div>

              <!--       <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>  
                <div class="row">
                    <div class="custom-input col-lg-6">
                    <div class="input-group mb-3" style="display: none;" >
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="शाळा सोडल्याचा दाखला">शाळा सोडल्याचा दाखला</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname">शाळा सोडल्याचा दाखला <span class="text-danger ">*</span> :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" required>
                        </div>
                    </div>

                  <!--   <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>  
                <div class="row">
                    <div class="custom-input col-lg-6">
                    <div class="input-group mb-3" style="display: none;" >
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="जातीचा दाखला">जातीचा दाखला</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname">जातीचा दाखला <span class="text-danger ">*</span> :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" required>
                        </div>
                    </div>

                 <!--    <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>  
                <div class="row">
                    <div class="custom-input col-lg-6">
                    <div class="input-group mb-3" style="display: none;" >
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="आधार कार्ड">आधार कार्ड</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname">आधार कार्ड <span class="text-danger ">*</span> :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" required>
                        </div>
                    </div>

                   <!--  <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>  
                <div class="row">
                    <div class="custom-input col-lg-6">
                    <div class="input-group mb-3" style="display: none;" >
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="स्वयंघोषणा पत्र">स्वयंघोषणा पत्र</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname">स्वयंघोषणा पत्र <span class="text-danger ">*</span> :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" required>
                        </div>
                    </div>

                   <!--  <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>  
                <div class="row">
                    <div class="custom-input col-lg-6">
                    <div class="input-group mb-3" style="display: none;" >
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र">विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname">विवाहित महिलांकरिता विवाह नोंदनी प्रमाणपत्र :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" >
                        </div>
                    </div>
<!-- 
                    <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>  
                <div class="row">
                    <div class="custom-input col-lg-6">
                    <div class="input-group mb-3" style="display: none;" >
                            <select class="form-select document-type " name="document_type[]" required >
                                <option value="अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र">अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र</option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size " for="firstname">अर्जदार राहत असलेला पाडा हा पेसा क्षेत्रात येत असल्याबाबतचे महसूल ग्रामपंचायतीचे ग्रामसेवकाचे प्रमाणपत्र <span class="text-danger ">*</span> :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF" required>
                        </div>
                    </div>

                  <!--   <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>  
                <div class="row">
                    <div class="custom-input col-lg-6">
                    <div class="input-group mb-3" style="display: none;" >
                            <select class="form-select document-type " name="document_type[]"  >
                                <option value="अन्य">अन्य </option>
                            </select>
                        </div>
                        <div class="input-group mb-3" >
                        <label class="fw-bold lable-size mt-2 col-sm-4  col-md-3  col-lg-5" for="firstname">अन्य :</label>
                        </div>
                    </div>

                    <div class="custom-input col-lg-6">
                        <div class="input-group">
                        <input type="file" class="form-control file-input fi-choose" name="files[]" accept=".jpg,.jpeg,.png,.gif,.pdf,.JPG,.JPEG,.PNG,.GIF,.PDF">
                        </div>
                    </div>

                   <!--  <div class="custom-input col-lg-2 mt-1">
                        <div class="text-center">
                            <button class="bg-primary p-2 add-btn" type="button" id="selectAllOptions"><i class="bi bi-plus-lg"></i></button>
                        </div>
                    </div> -->
                </div>

                <?php } ?>           
            </div>

            <div class="text-center mt-3">
                <input type="hidden" name="id" id="id" value="<?php echo $form_info?$form_info[0]->r_id:''; ?>">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>

            <!-- <?php if (isset($validation_errors)): ?>
                <div class="text-center mt-3 alert-danger">
                    <?php echo $validation_errors; ?>
                </div>
            <?php endif; ?> -->
        </section>
    </form>
</div>

<br>






<section class="mt-2 sticky-section-1 ">
    <div class="container" >
        <p class="p-3 text-white">
            <span class="text-white">
                Disclaimer : The content available on the Portal is taken from different sources and Government
                Department/Organisations and, they may be contacted for further information and suggestions
            </span>
            <br>
            Copyright ©2023 Nandurbar District Rahiwasi Dakhla Design by:<span class=""><a class="text-warning"
                href="https://www.absoftwaresolution.com/">AB Software Solution.
            </a></span>
        </p>
    </div>
</section>


   
























      <!-- Bootstrap script cdn -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      </script>
</body>

</html>
<!-- documents mandatory -->

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
$(document).ready(function () {
    // Add new file upload section when clicking "Add Documents" button
    rowIdx=0;
    $(".add-btn").on("click", function () {
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
    $("#submitForm").submit(function (event) {
        event.preventDefault();
        // $('.document-type').removeAttr("disabled");
        var formData = new FormData($(this)[0]);

        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // Handle success response here (e.g., display success message)
                console.log("Form submitted successfully!");
            },
            error: function (xhr, status, error) {
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

    $( document ).ready(function() {
        loadDistrict();
});

function loadDistrict(){
          
      $.ajax({
        url: "<?php echo site_url('user/registration/loadDistrict'); ?>",
        type: 'POST',
        data : {
           edit_district : '<?php echo $form_info?$form_info[0]->district_name:'';?>',
        },
        success: function (response) {
            $('#district_name').html(response);
            loadTaluka();
        }
      });
    }


    function loadTaluka(){
          var district_name = $('#district_name').val();
          $.ajax({
            url: "<?php echo site_url('user/registration/loadTaluka'); ?>",
            type: 'POST',
            data : {
               edit_taluka : '<?php echo $form_info?$form_info[0]->taluka_name:'';?>', 
               district_name : district_name
            },
            success: function (response) {
                $('#taluka_name').html(response);
                loadVillage();
            }
          });
        }

        function loadVillage(){
          var district_name = $('#district_name').val(); 
          var taluka_name = $('#taluka_name').val();
          $.ajax({
            url: "<?php echo site_url('user/registration/loadVillage'); ?>",
            type: 'POST',
            data : {
               edit_village  : '<?php echo $form_info?$form_info[0]->village_name:'';?>', 
               district_name : district_name,
               taluka_name   : taluka_name

            },
            success: function (response) {
                $('#village_name').html(response);
            }
          });
        }
        </script>





