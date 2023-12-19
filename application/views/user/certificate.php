
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
          font-weight: bold;
         
          /* font-family: 'Poppins', sans-serif; */
            font-family: 'Times New Roman',serif;
          

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
            font-weight: bold;
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
    <!-- http://localhost/rahivasi_dakhla/html2pdf/dist/html2pdf.bundle.min.js -->
    <script src="<?php echo site_url('html2pdf/dist/html2pdf.bundle.min.js'); ?>"></script>
    <script>
        
        function generatePDF() { 
    if (!confirm("Press ok to download the Certificate PDF file")) {
    return false;
    } 
    document.getElementById("kk").style.borderStyle = "dashed";
    const element =document.getElementById("dakhla").innerHTML;

    var opt = {
    margin:       [0.0, 0.3, 0.0, 0.0], //[top, left, bottom, right].
    filename:     'Certificate.pdf',
    html2canvas: {scale: 2, logging: true},        
    jsPDF:        { unit: 'in', format: 'A4', orientation: 'portrait' },
    pagebreak: {  avoid: '.page2el',after:'.after' }
    };

    html2pdf()
      .from(element)
      .set(opt)
      .save();                    
}
    </script>
</head>

<body>
<!-- <span style="font-weight:bold;font-size: 15px;width: 97%;position: relative;padding: 0px!important;">-----------------------------------------------------------------------------------</span> -->
<!-- kiran download certificate --->
<div class="col-sm-12 text-right"><button onclick="generatePDF()" class="btn btn-danger">Download Certificate</button></div>

    <section class="dakhla" id="dakhla" style="margin-left: 65px;">


        <div class="container img-fluid mt-4">

            <div id="kk" style="border: 2px dashed black!important;width: 700px;padding: 10px;font-size: 15px;border-style: dashed!important;">
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
                        <span>/2023/ तळोदा</span>
                        <span
                            style="float: right;">दि.<?php echo $form_info ? date('d/m/Y', strtotime($form_info[0]->application_date)) : ''; ?></span>
                            
                    </p>
                    <br>
                    <br>



                    <div class="middle-para ">
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
                    <div style="border-bottom: dashed 2px black!important;width: 97%;position: relative;left: 10px;">
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
                        <p class="fw-bold" style="font-size: 15px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;सदरचे अनुसूचित
                            क्षेत्र (पेसा) रहिवासी दाखला हा सरळसेवेची पदे भरती कामी खालील कागदपत्राच्या आधारे
                            देण्यात येत आहे.</p>


                       
                            <p class=" p-2 para-border" style="border-bottom: dashed 2px black!important;border-top: dashed 2px black!important;">  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 1) उमेदवाराचा जात वैधता प्रमाणपत्र अथवा जातीचा दाखला 2) आधिवास
                            प्रमाणपत्र 3) स्वयंघोषणापत्र   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) शाळा सोडल्याचा दाखला 5) आधार कार्ड 6) ग्रामसेवकांचा दाखला
                        </p>

                    </div>

                    <div class=" p-4 fw-bold">
                        <div class="footer">
                            <p>ठिकाण :- तळोदा <br> दिनांक :- <?php echo $form_info ? date('d/m/Y', strtotime($form_info[0]->dsc_date)) : ''; ?></p>
                        </div>

                        <div class="footer text-center" >
                            <?php if($form_info[0]->send_dsc==1){ ?>
                         <span><img class="img-fluid mt-4 " src="<?php echo site_url('assests/images/verify_sign.jpeg'); ?>"
                                alt=""> 
                        <?php //echo $form_info?$form_info[0]->dsc_code:''; ?>
                        </span>  <br/> <?php } ?>

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
<!------

 /////////////////////////////////////////////////////////
 
<?php /*
// var_dump($pdf_detail);exit();
// create new PDF document
require_once('application/libraries/tcpdf.php');

class MYPDF extends TCPDF {

    //Page header
   

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-9);
        $this->SetX(-10);
        // Set font
        $this->SetFont('times', '',8);
        // Page number
            $this->SetY(-20);
         $this->SetX(20);
         //$this->Cell(0, 10, 'Prepared By Tuljai HR Services ', 0, false, 'L', 0, '', 0, false, 'T', 'M');
    }
}
// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);


// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->setPrintHeader(false);
// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell marg,ins
$pdf->setCellMargins(1, 1, 1, 1);
// set margins
$pdf->SetMargins(5,5);
//$pdf->SetMargins(PDF_MARGIN_LEFT,PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// $pdf->setPageOrientation('L');

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell marg,ins
$pdf->setCellMargins(1, 1, 1, 1);
// set font
//$pdf->SetFont('times', '', 12);
//$pdf->SetFont('freesans', '', 12);
$pdf->SetFont('timesbi', '', 12);

// add a page
$pdf->AddPage();

// set some text to print

  //$leave=1;

$table .= '

<html>
<body> .';

        $table .=   '<table style="border: 1px dashed black;width:100%" padding="5px">
        <table style="padding-right: 5px;padding-left: 5px;width:80%">
   <tr>
<td>
<div class=" row header-border">
                        <div class=" certi-img">
                            <img class="img-fluid mt-4 " src="'.site_url('assests/images/certilogo.png').'"
                                alt="">
                        </div>

                        <div class=" certi-img1">
                            <div class=" head-heading mt-1">
                                <span class="text-success">महाराष्ट्र</span>
                                <span><img src="" alt=""
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
</td>
   </tr>
<tr>
        <td style="border-left: 1.2px solid #000000;border-top: 1.1px solid #000000; font-weight: bold;width:118px;" height="10" align="left" valign=bottom><font face="Calibri"><span style="font-size:10px"> Total Earnings : </span></font></td>
        <td style="border-top: 1.1px solid #000000;width:103px;" align="right" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Calibri"><span style="font-size:10px"><b>kiran</span></b></font></td>
        <td style="border-top: 1.1px solid #000000;width:104px;" align="right" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Calibri"><span style="font-size:10px"><b>vvv</span></b></font></td>

        <td style="border-top: 1.1px solid #000000; font-weight: bold; border-left: 1px solid #000000;width:191px;" height="10" align="left" valign=bottom><font face="Calibri"><span style="font-size:10px"> Total Deductions :</span></font></td>
        <td style="border-top: 1.1px solid #000000;border-right: 1.2px solid #000000;width:155px;" align="right" height="10" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Calibri"><b><span style="font-size:10px">12</span></b></font></td>
    </tr>
    <tr>
    
    <td colspan="3" style="border-top: 1.1px solid #000000;border-left: 1.2px solid #000000; font-weight: bold;" height="10" align="right" valign=bottom><font face="Calibri"><span style="font-size:11px"></span></font></td>
    <td colspan="" style="border-top: 1.1px solid #000000;border-left: 1.2px solid #000000;border-bottom: 1.1px solid #000000; font-weight: bold;" height="10" align="left" valign=bottom><font face="Calibri"><span style="font-size:10px">Net Pay :</span></font></td>
    <td style="border-top: 1.1px solid #000000;border-right: 1.2px solid #000000;border-bottom: 1.2px solid #000000;" align="right" valign=bottom sdval="0" sdnum="1033;0;0.00"><font face="Calibri"><b><span style="font-size:10px">p</span></b></font></td>
    </tr> 
    <tr>
    <td  colspan="5" style="border-left: 1.2px solid #000000;border-right: 1.2px solid #000000;border-bottom: 1.2px solid #000000;" height="10" align="left" valign=bottom><font face="Calibri"> <span style="font-weight: normal;font-size:9px">Amount in words - </span></font></td>
    </tr>
    <tr>
    <td  colspan="5" style="border-left: 1.2px solid #000000;border-right: 1.2px solid #000000;border-bottom: 1.2px solid #000000;padding:0px;" height="10" align="center" valign=bottom><font face="Calibri"> <span style="font-weight: normal;font-size:9px"><br/><br/><br/>शासकिय दुध डेअरीच्या This is Computer Generated Payslip. Signature is Not Required.</span></font></td>
    </tr>
    
 </table>

</table>

 <footer >


</footer>

</body>
</html>

';
$pdf->WriteHTMLCell(0, 0, '', '', $table,  0, 1, 0, true, 'A4', true);


$pdf->lastPage();

// ---------------------------------------------------------
ob_clean();
$pdf->Output('kk.pdf', 'I');

$filename=$_SERVER['DOCUMENT_ROOT'].''.str_replace(' ', '_', $tuljai_id).'.pdf';


*/



//$filename=$_SERVER['DOCUMENT_ROOT'].''.str_replace(' ', '_', $cmpnameshort).'_'.str_replace(' ', '_', $full_name).'_'.substr($sal_month_year, 0, 3).'_'.substr($sal_month_year,-2).'.pdf';
   //$filename=$_SERVER['DOCUMENT_ROOT'].''.$cmpnameshort.' '.$full_name.' '.substr($sal_month_year, 0, 3).' '.substr($sal_month_year,-2).'.pdf';
        /* $pdf->Output($filename, 'F');
       $session = $this->session->userdata('username');
        $recordno=0;


        $d = explode('-',$sal_month_year_g);
        $get_month = date('F', mktime(0, 0, 0, $d[1], 10));
        $sal_month_year_get = $get_month.' '.$d[0];
            $msg ="Dear Sir/Madam,<br />";
            $msg .="<br />";
            $msg .="Please find the attached salary slip<br />";
            $msg .="for the month ".$sal_month_year_get.".<br />";
            $msg .="<br />";
            $msg .="Thanking You!<br />";
            $msg .="<br />";
            // $msg .="Regards <br />";
            $to =$email;
            $from =$salary_slip_email;
            $headers ="From : $from";
            require_once('application/helpers/PHPMailer.php');
            require_once('application/helpers/SMTP.php');
            $mail = new PHPMailer(); // create a new object
            $mail->IsSMTP(); // enable SMTP
            $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 25; // or 587
            $mail->IsHTML(true);
            $mail->Username = $from;
            $mail->Password = $salary_slip_email_password;
            $mail->SetFrom($from);
            $mail->Subject ='Salary slip '.$sal_month_year_get;
            $mail->Body = $msg;
                            
            $mail->AddAttachment($filename);   
            $mail->AddAddress($to);
          
        $mobileNumber= $contact_no;
        $message=str_replace(' ', '_', $cmpnameshort).'_'.str_replace(' ', '_', $full_name).'_'.substr($sal_month_year, 0, 3).'_'.substr($sal_month_year,-2); 
        $filenamewtp=base_url().''.str_replace(' ', '_', $tuljai_id).'.pdf';

         $this->Admin_assign_task_scope_model->sendWhatsappSms($mobileNumber,$message,$filenamewtp);
          echo "<script>window.close();</script>"; */

?>   --->
</body>

</html>