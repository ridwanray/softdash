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
          <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">EXTRA RELATED INFORMATION</h1>  
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xm-6">
      <a href=""><button type="button" class="btn btn-info btn-sm">Dashboard</button></a>
    </div>
</div>
</div>
         <!-- Start content here --> 

         <div class="content container mt-2">
<div class="row">
<div class="col-md-12">
<div class="card mb-2">
<div class="card-body">
<p class="lead text-center">
FORM D: EXTRA RELATED INFORMATION
</p>
<hr class="" style="margin-top:10px;">
<div class="row">
<div class="col-md-8 col-sm-12">
<form method="post" action="">
<input name="_token" type="hidden" value="hbpVJEf2uWUAx0cQM0VjQZYDdLC3oKCgCfqFxCMm">
<div class="form-group">
<label for="social_works" class="form-label">Describe details of any voluntary social or community activites you have been involved in</label>
<textarea class="form-control" rows="4" name="social_works" cols="50" id="social_works"></textarea>
</div>
<div class="form-group">
<label for="honours" class="form-label">Have you received any academic honours, scholarships or awards? Give details here</label>
<textarea class="form-control" rows="4" name="honours" cols="50" id="honours"></textarea>
</div>
<div class="form-group">
<label for="honours" class="form-label">Do you have special talents? Give details here</label>
<textarea class="form-control" rows="4" name="talents" cols="50"></textarea>
</div>
<div class="form-group">
<label for="researchs" class="form-label">Have you done any research work or submitted research papers in the past? Give details here</label>
<textarea class="form-control" rows="4" name="researchs" cols="50" id="researchs"></textarea>
</div>
<div class="form-group">
<label for="memberships" class="form-label">Do you belong to any academic or proffesional affiliations, society or associations? Give Details here</label>
<textarea class="form-control" rows="4" name="memberships" cols="50" id="memberships"></textarea>
</div>
<div class="form-group">
<label for="suspended" class="form-label">Have you been suspended before?</label>
<div class="col-sm-9">
<div class="radio">
<input id="yes" class="" name="suspended" type="radio" value="Y">
<label for="yes">YES, Give Reason: </label>
<input class="form-control" name="institution_name" type="text" id="institution_name">
</div>
<div class="radio">
<input id="no" class="" name="suspended" type="radio" value="N">
<label for="no">NO</label>
</div>
</div>
</div>

<div class="form-group">
<label for="about_us" class="form-label">Where did you hear about us?</label>
<select class="form-control" id="about_us" name="about_us"><option value="1">Newspapers</option><option value="2">Our Website</option><option value="3">Other Related</option><option value="4">Marketing</option><option value="5">Other Students</option><option value="6">University Staff</option></select>
</div>
<div class="form-group justify-content-center">
<div class="">
<a href="" class="btn btn-success">Submit Form</a>&nbsp;&nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger">Cancel</a>
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
