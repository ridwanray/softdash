<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include 'admissionsidebar.php';?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       <?php
		  include("topbar.php");
		  ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

         <!-- Page Heading -->
<div class="row">
    <div class="col-lg-10 col-md-8 col-sm-8 col-xm-6">
          <div class="text-left mb-2 mt-0">
          <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">ENTRY MODE FORM</h1>  
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xm-6">
      <a href="http://localhost/uport/applicationdashboard.php"><button type="button" class="btn btn-block btn-info btn-sm">Dashboard</button></a>
    </div>
</div>
</div>
         <!-- Start content here --> 

        
         <div class="content mt-2 container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="card card-default margin-t-20">
<div class="card-title text-center  text-dark font-weight-bold">FORM GR1: ENTRY MODE FORM</div>
<hr style="margin-top:10px;">
<div class="card-body">
<div style="margin-top: -20px;">
</div>
<div class="row container">

<span> Kindly read the instructions below for required documents and pick as applied to you.</span>
<ul>
<li> U.T.M.E: The regular JAMB</li>
<li> DIRECT ENTRY: options are [DIPLOMA, NCE, OND, HND]</li>
<li> TRANSFER: If are coming on transfer from an existing academic higher institution </li>
</ul>
</div>
<form method="post" action="">

<div class="row margin-t-10 container">
<div class="col-md-6">
<h4>Pick your Mode of Entry .</h4>
<div class="form-group padding-l-15">
<div class="radio radio-success">
<input type="radio" name="entry_mode" id="UTME" value="UTME" />
<label for="UTME">UTME</label>
</div>
<div class="radio radio-success">
<input type="radio" name="entry_mode" id="DIRECT ENTRY" value="DE" />
<label for="DIRECT ENTRY">DIRECT ENTRY</label>
</div>
<div class="radio radio-success">
<input type="radio" name="entry_mode" id="TRANSFER" value="TRANSFER" />
<label for="TRANSFER">TRANSFER</label>
</div>
</div>
<div class="form-group">

<button type="button" class="btn btn-light">Next</button>

</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>



        
       <!-- start content here-->
    </div>
</div>


        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

<?php
		include('footer.php');
		?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
