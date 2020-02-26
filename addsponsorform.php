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
          <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">SPONSORS</h1>  
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xm-6">
      <a href="http://localhost/uport/applicationdashboard.php"><button type="button" class="btn btn-info btn-sm">Dashboard</button></a>
    </div>
</div>
</div>
         <!-- Start content here --> 

         <p class="lead container">
         FORM C: Sponsors
</p>
<p class="container">
<h4 class="color10 container" style="text-decoration: underline;">Instruction</h4>

<div class="container">Kindly use the form below to add all your parents details, your sponsors and your next of kin.
Note: Sponsor and Next of Kin Details are compulsory!.
</div>
</p>
<div class="row padding-t-20 container">
<div class="col-md-12 col-sm-12 container">
<table class="table table-striped container">
<thead>
<tr>
<th>SN</th>
<th>RELATIONSHIP</th>
<th>FULL NAME</th>
<th>ADDRESS</th>
<th>PHONE NO</th>
<th>EMAIL</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<tr><td colspan="7">You have not added any sponsors/relative information</td></tr>
</tbody>
</table> </div>
</div>
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-12 ">
<h2 class="text-center">Add Sponsors</h2>
<div class=""><hr /></div>
</div>


<form method="" action="" class="form-horizontal">

<div class=" row container mb-1 ml-10">
<label  class=" col-lg-4 ">Relationship</label>
<div class="col-lg-8">
<select class="form-control" id="relationship" name="relationship"><option value="1">FATHER</option><option value="2">MOTHER</option><option value="3">SPONSOR</option><option value="4">NEXT OF KIN</option><option value="5">OTHERS</option></select>
</div>
</div>


<div class=" row container mt-2">
<label  class=" col-lg-4 ">Full Name</label>
<div class="col-lg-8">
<input class="form-control" name="institution_name" type="text" id="institution_name" style='width: 500px;'>
</div>
</div>

<div class=" row container mt-2">
<label  class=" col-lg-4 ">Address</label>
<div class="col-lg-8">
<textarea class="form-control" name="address" cols="" ></textarea>
</div>
</div>


<div class=" row container mt-2">
<label  class=" col-lg-4 ">Phone no</label>
<div class="col-lg-8">
<input class="form-control" name="phone" type="text" id="phone">
</div>
</div>



<div class=" row container mt-2">
<label  class=" col-lg-4 ">E-mail</label>
<div class="col-lg-8">
<input class="form-control" name="institution_name" type="text" id="institution_name" style='width: 500px;'>
</div>



</div>



<div class="form-group row container justify-content-center mt-2">
<div class=" ">
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
