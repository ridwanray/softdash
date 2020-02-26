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
              <div class="col-10">
                    <div class="text-left mb-2 mt-0">
                    <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">APPLICANTS DASHBOARD</h1>  
              </div>
              </div>

              <div class="col-2">
                <a href="http://localhost/uport/applicationdashboard.php"><button type="button" class="btn btn-info btn-sm">Dashboard</button></a>
              </div>

          </div>
          

        </div>
         <!-- Start content here --> 

         <div class="panel-title text-center">Admission Status: <span class="margin-l-20 color10">PENDING</span> <i class="fa fa-exclamation-triangle text-info" style="font-size:20px;"></i></div>
<div class="panel-body container">
<div style="margin-top: 30px;">
</div> 
<table class="table table-striped">
<thead>
<tr>
<td>S/N</td>
<td>Forms</td>
<td>Status</td>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>Bio-Data Form</td>
<td>
<i class="fa fa-times-circle color10" aria-hidden="true"></i>
</td>
</tr>
<tr>
<td>2</td>
<td>Educational Background Form</td>
<td>
<i class="fa fa-times-circle color10" aria-hidden="true"></i>
</td>
</tr>
<tr>
<td>3</td>
<td>Sponsors Information Form</td>
<td>
<i class="fa fa-times-circle color10" aria-hidden="true"></i>
</td>
</tr>
<tr>
<td>4</td>
<td>Extra-Related Information</td>
<td>
<i class="fa fa-times-circle color10" aria-hidden="true"></i>
</td>
</tr>
<tr>
<td>5</td>
<td>O-Level Result Form</td>
<td>
<i class="fa fa-times-circle color10" aria-hidden="true"></i>
</td>
</tr>
<tr>
<td>6</td>
<td>Programme Choice Information</td>
<td>
<i class="fa fa-times-circle color10" aria-hidden="true"></i>
</td>
</tr>
<tr>
<td>7</td>
<td>Declaration</td>
<td>
<i class="fa fa-times-circle color10" aria-hidden="true"></i>
</td>
</tr>
</tbody>
</table>
</div>


<div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="center mb-1 col-lg-4 col-md-4 col-sm-6 col-xm-6">
                        <a href="http://portal.crescent.edu.ng/admissions/admission/student/mapplication/3317" class="btn btn-outline btn-warning"> <i class="fa fa-upload"></i> Download Manual Form</a>
                        </div>
                        <div class="center mb-1 col-lg-4 col-md-4 col-sm-6 col-xm-6">
                        <a href="http://portal.crescent.edu.ng/admissions/public/docs/UndergraduateRefreenceLetter.pdf" class="btn btn-outline btn-success"> <i class="fa fa-edit"></i> Download Reference Form</a>
                        </div>
                        <div class="center mb-1 col-lg-4 col-md-4 col-sm-6 col-xm-6">
                        <i class="fa   fa-times-circle margin-r-10 text-info"></i> Incomplete Application!
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
