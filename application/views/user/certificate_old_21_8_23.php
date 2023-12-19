<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- font cdn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&family=Poppins:ital@1&family=Roboto+Condensed&family=Roboto:wght@300&display=swap"
        rel="stylesheet">
    <style>
        .rahiwasi {
            border: dashed 2px black;
            width: 700px;
            /* height: 855px; */
            padding: 10px;
            font-size: 15px;

        }

        .header-border {
            border: solid 1px black;
            margin-left: 11px;
            width: 97%;
            height: 150px;
        }

        .certi-img {
            border-right: solid 1px black;
        }

        .para-certi {
            border-bottom: solid 1px black;
            border-right: solid 1px black;
            border-left: solid 1px black;
            margin-left: 11px;
            width: 97%;
            font-family: 'Times New Roman', Times, serif;
        }

        .head-para {
            line-height: 25px;
            font-size: 16px;
            font-family: 'Times New Roman', Times, serif;
            text-align: center;

        }

        .head-heading {
            text-align: center;
            font-weight: bold;
            font-family: 'Times New Roman', Times, serif;
        }

        .certi-img {
            display: inline-block;
            width: 22%;
        }

        .certi-img1 {
            display: inline-block;
            width: 78%;
        }

        .middle-para {
            margin-left:25px;
            line-height: 12px;
            font-size: 15px;
    
            font-family: 'Times New Roman', Times, serif;
        }

        .only-border {
            border-bottom: dashed 2px black;
            width: 97%;
            position: relative;
            left: 10px;

        }

        .main-para1 {
            font-family: 'Times New Roman', Times, serif;
            line-height: 30px;
        }

        .footer {
            display: inline-block;
            width: 49%;
        }

        .footer {
            width: 49%;
            display: inline-block;
        }

        .dakhla {

            margin-left: 25px;
        }

        .para-border {
            border-bottom: dashed 2px black;
            border-top: dashed 2px black;
        }
       .footer-line{
        border-bottom: solid 5px brown;
        width: 97%;
       
        position: relative;
            left: 10px;
            bottom: 10px;
       }
       .footer-text{
        font-size: 12px;
       }
       .head-email{
        font-size: 13px;
        text-decoration: underline;

       }
    </style>
</head>

<body>


    <section class="dakhla">


        <div class="container img-fluid mt-4">

            <div class="rahiwasi ">
                <div class=" row">

                    <div class=" row header-border">
                        <div class=" certi-img">
                            <img class="img-fluid mt-4 " src="<?php echo site_url('assests/images/certilogo.png'); ?>"
                                alt="">
                        </div>

                        <div class=" certi-img1">
                            <div class=" head-heading mt-1">
                                <span class="text-success">महाराष्ट्र</span>
                                <span><img src="<?php echo site_url('assests/images/shortlogo.png'); ?>" alt=""
                                        style="height: 35px; width: 35px; position: relative; bottom: 4px;"></span>
                                <span class="text-success">शासन</span>
                            </div>
                            <h6 class="fw-bold head-para">प्रकल्प अधिकारी, एकात्मिक आदिवासी विकास प्रकल्प, तळोदा
                                जि.नंदुरबार
                                शासकिय दुध डेअरीच्या मागे, शहादा रोड तळोदा,
                                जि. नंदुरबार (425413) <p class="mt-3">
                                दुरध्वनी क्रमांक-(02567) 232220.
                                <span class="text-danger head-email"> (Email ID - poitdp.taloda-mh@gov.in) </span>
                                </p> </h6>
                        </div>

                    </div>
                    <p class="para-certi fw-bold">
                        <span style="float: left;">जाक्र </span>
                        <span class="text-danger">&nbsp; पेसा/DSC
                            <?php echo $form_info ? $form_info[0]->r_f_id : ''; ?></span>
                        /2023/ तळोदा
                        <span
                            style="float: right;">दि.<?php echo $form_info ? date('d/m/Y', strtotime($form_info[0]->application_date)) : ''; ?></span>
                            
                    </p>
                    <br>
                    <br>



                    <div class="middle-para">
                        <p>1. भारत सरकार राजपत्र नवी दिल्ली सोमवार दि.डिसेंबर 02,1985/अग्रहाय 11.1907 अन्वये </p>
                        <p>2. मा.राज्यपाल म. यांचे अ.सु. क्र.RB / TC/E- 13016 (1) (2019) SchArea recruitment /156 दि. 29.08.2019</p>
                        <p>3. सामान्य प्रशासन विभाग शासन निर्णय समक्रमांक दि. 01/02/2023</p>
                        <p>4. सामान्य प्रशासन विभाग शासन शुद्धीपत्रक क्र बीसीसी 2018/प्रक्र 427/16-ब दि.28/02/2023</p>
                        <p>5. सामान्य प्रशासन विभाग शासन बीसीसी 2018/प्रक्र 427/16-ब दि. 01/02/2023 व 10/05/2023</p>
                        <p>6. आदिवासी विकास विभाग शासन परिपत्रक आविवि- 2023/प्रक्र.132/का-14 दि.16/06/2023</p>
                        <p>7.श्री/श्रीमती/कु. <span class="text-danger fw-bold">
                                <?php  echo $form_info?$form_info[0]->firstname_marathi:''; ?>
                                <?php echo $form_info?$form_info[0]->middlename_marathi:''; ?>
                                <?php echo $form_info?$form_info[0]->lastname_marathi:''; ?></span>
                            यांचा अर्ज दिनांक
                            <span class="text-danger fw-bold">
                                <?php echo $form_info ? date('d/m/Y', strtotime($form_info[0]->application_date)) : ''; ?></span>
                        </p>
                    </div>
                    <div class="only-border">

                    </div>
                    <?php
if (isset($form_info) && isset($form_info[0]->aadharno)) {
    $aadharno = $form_info[0]->aadharno;
} else {
    $aadharno = '';
}

// Add a space after every four digits in the Aadhar number
$spaced_aadharno = implode(' ', str_split($aadharno, 4));
?>
                    <div class="mt-3">
                        <h5 class="text-center fw-bold text-decoration-underline h5-tag">-:- अनुसूचित क्षेत्रातील (पेसा) रहीवासी दाखला -:-</h5>

                        <br>

                        <p class="p-1 main-para1 " >
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;प्रमाणित करण्यात येते की,
                            श्री/श्रीम. <span class="text-danger fw-bold">
                                <?php echo $form_info?$form_info[0]->firstname_marathi:''; ?>
                                <?php echo $form_info?$form_info[0]->middlename_marathi:''; ?>
                                <?php echo $form_info?$form_info[0]->lastname_marathi:''; ?></span>

                            वय वर्ष <span class="text-danger fw-bold"><?php echo $form_info?$form_info[0]->age:''; ?></span>
                            हे/ह्या महसुली गाव
                            <span
                                class="text-danger fw-bold"><?php echo $form_info?$form_info[0]->village_name_marathi:''; ?></span>
                            पैकी <span
                                class="text-danger fw-bold"><?php echo $form_info?$form_info[0]->village_name_marathi:''; ?></span>
                                &nbsp;&nbsp;ता.
                            <span
                                class="text-danger fw-bold"><?php echo $form_info?$form_info[0]->taluka_name_marathi:''; ?></span>
                            जि. नंदुरबार येथील रहिवासी असून, सदरचे महसुली गाव
                            हे प्रकल्प कार्यालय, एकात्मिक आदिवासी विकास प्रकल्प तळोदा जि. नंदुरबार अंतर्गत
                            अनुसूचित क्षेत्रात समाविष्ट आहे.
                            त्याचा आधारकार्ड क्रमांक  <span class="text-danger fw-bold"><?php echo $spaced_aadharno; ?></span> असा आहे.</p>
                        <p class="fw-bold" style="font-size: 14px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;सदरचे अनुसूचित
                            क्षेत्र (पेसा) रहिवासी दाखला हा सरळसेवेची पदे भरती कामी खालील कागदपत्राच्या आधारे
                            देण्यात येत आहे.</p>


                       
                            <p class=" p-2 para-border">  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 1) उमेदवाराचा जात वैधता प्रमाणपत्र अथवा जातीचा दाखला 2) आधिवास
                            प्रमाणपत्र 3) स्वयंघोषणापत्र   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) शाळा सोडल्याचा दाखला 5) आधार कार्ड 6) ग्रामसेवकांचा दाखला
                        </p>

                    </div>

                    <div class=" p-4 fw-bold">
                        <div class="footer">
                            <p>ठिकाण :- तळोदा <br> दिनांक :- &nbsp;&nbsp; / &nbsp; &nbsp; /2023</p>
                        </div>

                        <div class="footer text-center" >
                         <span>   (मंदार पत्की, भा. प्र. से)</span> <br>
                            प्रकल्प आधिकरी, तथा सहा. जिल्हाधिकारी एकात्मिक आदिवासी विकास प्रकल्प <br>  <span>तळोदा जि. नंदुरबार</span>
                        </div>

                    </div>

                    <div class="footer-line" >
                
                    </div>
                  <span class="footer-text fw-bold" >  पेसा रहीवासी दाखला</span>




                </div>


            </div>

        </div>
    </section>

















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>