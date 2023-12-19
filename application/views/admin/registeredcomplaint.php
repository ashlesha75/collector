<?php
$userid = $this->session->userdata('adid'); ?>
<!doctype html>
<html>

<head>
  <title>Rahiwasi Applications</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Datatable CSS -->
  <link href='https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
  <link href='https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo site_url('assests/css/datepicker.css'); ?>">
  <style type="text/css">
    .dt-buttons {
      width: 50%;
      padding: 5px;
    }

    td th {
      padding: 2px !important;
    }

    .search-btn-container {
      text-align: center;
      margin-top: 10px;
    }

    .extra-box {
      margin-top: 20px;
      background-color: #f9f9f9;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Style for the search form labels */
    .extra-box label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    /* Style for the search form input fields */
    .extra-box input[type="date"],
    .extra-box input[type="text"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }

    .search-btn-container input[type="button"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
    }

    /* Style for the search button on hover */
    .search-btn-container input[type="button"]:hover {
      background-color: #45a049;

    }
  </style>
  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Datatable JS -->
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body style="background-color:#a2dce7;">
  <?php include('includes/header.php'); ?>



  <div class=" mt-4 container   table-rahi ">

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">Your remark for this complaint has been successfully saved.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <!-- harshal -->
    <?php foreach ($registered_users_complaint as $value) : ?>
      <div class="modal fade" id="remarkModal_<?= $value->c_id ?>" tabindex="-1" role="dialog" aria-labelledby="remarkModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="remarkModalLabel">Remark for this complaint :</h5>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form id="remarkForm" action="<?php echo base_url() ?>admin/Dashboard/update_registered_users_complaint" method="post" enctype="multipart/form-data">
              <input type="hidden" name="remark_id" value="<?= $value->c_id ?>" id="remark_id">
              <div class="modal-body">
                <div class="form-group">
                  <label for="remarkTextarea">Remarks:</label>
                  <textarea class="form-control" id="remarksTextarea_<?= $value->c_id ?>" name="remarks" rows="6" <?php if ($value->clerk_remark) echo 'readonly';?>  >  <?= $value->clerk_remark ?></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" data-target="remarksTextarea_<?= $value->c_id ?>"  class="btn btn-secondary edit-again-btn" id="editAgainBtn" >Edit Again</button>
                <button type="submit" name="submit" id="saveRemarkBtn" class="btn btn-primary">Save Remark</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <?php endforeach ?>

   

    <div class="table-responsive extra-box1 bg-white p-2">
      <table id="application_form" class="table table-bordered dataTable"  >
        <thead>
          <tr>
            <th scope="col" style="border-top:1px solid #dee2e6;display:none;">hidden date</th>
            <?php if ($form_info && $userid["admin_type"] == "po" && $form_info['0']->po_verify == 1) { ?>
              <th scope="col" style="border-top:1px solid #dee2e6;">Select All <input type="checkbox" name="user_mail_all" id="user_mail_all" class="user_mail_all" /> </th>
            <?php } else { ?>
              <th scope="col" style="border-top:1px solid #dee2e6;display:none;"></th>
            <?php } ?>
            <th scope="col" style="border-top:1px solid #dee2e6;">Sr No.</th>
            <th scope="col" style="border-top:1px solid #dee2e6;">Name</th>
            <th scope="col" style="border-top:1px solid #dee2e6;">Email</th>
            <th scope="col" style="border-top:1px solid #dee2e6;">Details</th>
            <th scope="col" style="border-top:1px solid #dee2e6;">Phone Number</th>
            <th scope="col" style="border-top:1px solid #dee2e6;">Uploaded File</th>
            <!-- <th scope="col" style="border-top:1px solid #dee2e6;">Action</th> -->
            <th scope="col" style="border-top:1px solid #dee2e6;">Remark</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $srno = 0;
          foreach ($registered_users_complaint as $value) : $srno++
          ?>
            <tr>
              <td><?= $srno ?></td>
              <td><?= $value->firstname ?></td>
              <td><?= $value->email ?></td>
              <td><?= $value->details ?></td>
              <td><?= $value->phone ?></td>
              <td><a href="<?php echo base_url('./assests/uploads/' . $value->file); ?>" target="_blank" download><?= $value->file ?></a>
              </td>
              <td><a href="#remarkModal_<?= $value->c_id ?>" data-bs-toggle="modal" style="color:black"> <i class='fas fa-pen-alt' style='font-size:14px'></i></a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
  </section>
  <br>
  <?php include('includes/footer.php'); ?>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<?php if ($this->session->flashdata('success_message')) : ?>
  <script>
    $(document).ready(function() {
      $('#successModal').modal('show'); 
    });
  </script>
<?php endif; ?>

<script>
  var editAgainButtons = document.querySelectorAll('#editAgainBtn');
  editAgainButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var targetTextareaId = this.getAttribute('data-target'); 
      var textarea = document.getElementById(targetTextareaId); 
      textarea.removeAttribute('readonly');
    });
  });
</script>

<!-- data-target -->
<script>

  var minDate, maxDate;
  $.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
      var min = minDate.val();
      var max = maxDate.val();
      var date = new Date(data[0]);
      if (min) {
        var min = new Date(min).toISOString().slice(0, 10);
      }
      if (max) {
        var max = new Date(max).toISOString().slice(0, 10);
      }
      if (date) {
        var date = new Date(date).toISOString().slice(0, 10);
      }

      if (
        (min === null && max === null) ||
        (min === null && date <= max) ||
        (min <= date && max === null) ||
        (min <= date && date <= max)
      ) {
        return true;
      }
      return false;
    }
  );

  $(document).ready(function() {
    // Create date inputs
    minDate = new DateTime($('#min'), {
      format: 'DD-MM-YYYY'
    });
    maxDate = new DateTime($('#max'), {
      format: 'DD-MM-YYYY'
    });

    // DataTables initialisation
    var table = $('#application_form').DataTable({
      dom: 'Blfrtip',
      buttons: [
        // ... (existing buttons configuration)
      ],
      order: [
        [2, 'asc']
      ],
      columnDefs: [{
        'targets': [1], // column index (start from 0)
        'orderable': false, // set orderable false for selected columns
      }]
    });

    // Refilter the table
    $('#min, #max').on('change', function() {
      table.draw();
    });

    // Add search functionality
    $('#search-btn').on('click', function() {
      var name = $('#name').val();
      var aadharNo = $('#aadhar-no').val();
      var village = $('#village').val();

      table.column(5).search(name).draw(); // "Name" with corresponding column
      table.column(8).search(aadharNo).draw(); // "Aadhar Number" with corresponding column
      table.column(9).search(village).draw(); // "Village" with corresponding column
      table.draw();
    });

  });
</script>