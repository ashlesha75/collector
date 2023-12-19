<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HTML to PDF Eample</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="dist/html2pdf.bundle.min.js"></script>

    <script>
      function generatePDF() {
        // Choose the element that our invoice is rendered in.
        const element = document.getElementById("invoice");
        // Choose the element and save the PDF for our user.
        html2pdf()
          .from(element)
          .save();
      }
    </script>
  </head>
  <body>
    <button onclick="generatePDF()">Download as PDF</button>
    <div id="invoice">
      <h1>Our Invoice</h1>
      
      
      
    </div>
  </body>
</html>