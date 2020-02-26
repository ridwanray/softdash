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
          <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">PROGRAMME CHOICE FORM</h1>  
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xm-6">
      <a href="http://localhost/uport/applicationdashboard.php"><button type="button" class="btn btn-block btn-info btn-sm">Dashboard</button></a>
    </div>
</div>
</div>
         <!-- Start content here --> 




         <div class="content animate-panel container mt-2">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div style="margin-top: 10px;">
</div>
<div class="card card-default">
<div class="card-title text-center font-weight-bold">FORM D: CHOICE OF PROGRAMME</div>
<hr style="margin-top:15px;">
<div class="card-body">
<div class="row">
<div class="col-md-8 col-sm-12">
<form method="post" action="http://portal.crescent.edu.ng/admissions/admission/student/choice">
<input name="_token" type="hidden" value="hbpVJEf2uWUAx0cQM0VjQZYDdLC3oKCgCfqFxCMm">
<div class="form-group">
<label for="choice1" class="form-label">Pick Your First Choice of Course</label>
<select class="form-control" rows="4" id="choice1" name="choice1"><option value="18">Accounting</option><option value="12">Architecture</option><option value="19">Banking and Finance</option><option value="23">Biochemistry</option><option value="3">Business Administration</option><option value="24">Chemistry</option><option value="16">Computer Science</option><option value="1">Computer Science/Economics</option><option value="2">Computer Science/Statistics</option><option value="20">Economics with Operation Research</option><option value="14">Environmental and Water Resources</option><option value="13">Estate Management</option><option value="6">Fisheries and Aquaculture</option><option value="17">Information Technology</option><option value="11">Islamic Law</option><option value="5">Islamic Studies</option><option value="10">Law</option><option value="9">Law</option><option value="21">Mass Communication</option><option value="8">Mathematics</option><option value="22">Microbiology</option><option value="7">Physics</option><option value="4">Political Science and International Relations</option><option value="15">Urban and Regional Planning</option></select>
</div>
<div class="form-group">
<label for="choice2" class="form-label">Pick Your Second Choice of Course</label>
<select class="form-control" rows="4" id="choice2" name="choice2"><option value="18">Accounting</option><option value="12">Architecture</option><option value="19">Banking and Finance</option><option value="23">Biochemistry</option><option value="3">Business Administration</option><option value="24">Chemistry</option><option value="16">Computer Science</option><option value="1">Computer Science/Economics</option><option value="2">Computer Science/Statistics</option><option value="20">Economics with Operation Research</option><option value="14">Environmental and Water Resources</option><option value="13">Estate Management</option><option value="6">Fisheries and Aquaculture</option><option value="17">Information Technology</option><option value="11">Islamic Law</option><option value="5">Islamic Studies</option><option value="10">Law</option><option value="9">Law</option><option value="21">Mass Communication</option><option value="8">Mathematics</option><option value="22">Microbiology</option><option value="7">Physics</option><option value="4">Political Science and International Relations</option><option value="15">Urban and Regional Planning</option></select>
</div>
<div class="form-group">
<div class="col-sm-9 col-sm-offset-3">
<a href="" class="btn btn-success">Submit Form</a>  &nbsp;&nbsp;<a href="" class="btn btn-danger">Cancel</a>
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