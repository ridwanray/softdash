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
          <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">MAKE PAYMENT</h1>  
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xm-6">
      <a href="http://localhost/uport/applicationdashboard.php"><button type="button" class="btn-block btn btn-info btn-sm">Dashboard</button></a>
    </div>
</div>
</div>
         <!-- Start content here --> 

         <div class="content mt-2 container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="card card-default">
<div class="card-title text-center font-weight-bold">Make Payment</div>
<hr style="margin-top:10px;">
<div class="card-body">
<div class="row margin-t-10">
<div class="col-md-2">
Full Name:
</div>
<div class="col-md-10">
<span class="left text-uppercase label label-default f-size-16">Alaba Ridwan</span>
</div>
</div>
<div class="row  margin-t-10">
<div class="col-md-2">
Applicant ID:
</div>
<div class="col-md-10">
<span class="left text-uppercase label label-primary f-size-16">CUAB/UG/2019/03319 </span>
</div>
</div>
<div class="row  margin-t-10">
<div class="col-md-2">
Reference No:
</div>
<div class="col-md-10">
<span class="left text-uppercase label label-danger f-size-16"> 15826407224011 </span>
</div>
</div>
<div class="row  margin-t-10">
<div class="col-md-2">
Fees Name:
</div>
<div class="col-md-10">
<span class="left text-uppercase label label-warning f-size-16">UNDERGRADUATE 2019/2020 </span>
</div>
</div>
<div class="row  margin-t-10">
<div class="col-md-2">
Amount:
</div>
<div class="col-md-10">
<span class="left text-uppercase label label-success f-size-16">&#8358; 7,300.00 </span>
</div>
</div>
<div class="row  margin-t-10">
<div class="col-md-offset-2 col-md-10">



<a href="" class="btn btn-danger btn-sm">
<i class="fa fa-remove"></i> CANCEL
</a> &nbsp;&nbsp;  &nbsp;&nbsp; 
<button type="submit" name="submit" class="btn btn-success btn-sm">
<i class="fa fa-credit-card"></i> PAY NOW!
</button>
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
