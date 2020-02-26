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
          <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">PAYMENT NOTIFICATION</h1>  
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xm-6">
      <a href="http://localhost/uport/applicationdashboard.php"><button type="button" class="btn btn-info btn-sm">Dashboard</button></a>
    </div>
</div>
</div>
         <!-- Start content here --> 

        


         <div class="content container" style="margin-top: 30px;" >
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div class="panel panel-default">
<div class="card-title">TRANSACTION PAYMENT HISTORY</div>
<div class="panel-body">
<div class="row">
<div class="col-md-12 col-sm-12">
<table class="table table-striped">
<thead>
<tr>
<th>SN</th>
<th>FEES NAME</th>
<th>REFERENCE</th>
<th>DATE</th>
<th>AMOUNT</th>
<th>STATUS</th>
<th>DESCRIPTION</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<tr>
<td>1</td>
<td>UNDERGRAD PT - 2019/2020</td>
<td>15819440987669</td>
<td>2020-02-17 13:54:58</td>
<td>#10,300.00</td>
<td>Successful</td>
<td>Approved</td>
<td id="box-4265"><a href="#" class="btn btn-success   btn-sm" dataid="4265">Reconfirm </a></td>
</tr>
<tr>
<td>2</td>
<td>UNDERGRAD PT - 2019/2020</td>
<td>15819415841258</td>
<td>2020-02-17 13:13:04</td>
<td>#10,300.00</td>
<td>Failed</td>
<td>Unsuccessful</td>
<td id="box-4264"><a href="#" class="btn btn-success btn-sm" dataid="4264">Reconfirm </a></td>
</tr>
</tbody>
</table>
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
