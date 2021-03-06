<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include 'sidebar.php';?>
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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Student Dashboard</h1>
            
          </div>

          
          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-8 mb-4">
				
				<!-- Notice and late Registration -->
				<div class="row">
					
				</div>

              

              <!-- student information System -->
              <div class="row">
				  
				  
			    <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">PERSONAL INFORMATION</h6>
                </div>
                <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                  </thead>
                  <tfoot>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Full Name</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Matric Number</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Marital Status</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Date of Birth</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Phone Number</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Current Level</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Current Session</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Current Semester</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Student Type</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Degree in View</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Programme</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Email Address</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>Year of Entry</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2">&nbsp;</td>
                    </tr>
                  </tbody>
                </table>
              </div>

            </div>

            <div class="col-lg-4 mb-4">

              <!-- Payment information -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-info">PAYMENT INFORMATION</h6>
                </div>
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
						
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">For--</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">EXPECTED PAYMENT</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
						 <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">TOTAL PAID</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
						 <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">BALANCE</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-success">CHECKLIST FOR REGISTRATION</h6>
                </div>
                <div class="card-body">
                  <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce CSS bloat and poor page performance. Custom CSS classes are used to create custom components and custom utility classes.</p>
                  <p class="mb-0">Before working with this theme, you should become familiar with the Bootstrap framework, especially the utility classes.</p>
                </div>
              </div>
				
				<!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-danger">**IMPORTANT INFORMATION <i class="fas fa-fw fa-info-circle"></i></h6>
					
                </div>
                <div class="card-body text-danger">
                  <dl>
                    <dd>All students have been directed to consult their Departmental Level Advisers before registering for courses.</dd>
                  </dl>
                 
                  <dl>
                    <dd>Level Advisers must endorse the Course Registration forms before students submit to the Academic Office. This is to ensure that courses registered for are on the advice of the Level Advisers.</dd>
                  </dl>
                  
                  <dl>
                    <dd>Students should collect their copies of the Registration forms in their Departments Seventy-two hours (72 hours) after submission to the Academic Office.</dd>
                  </dl>
                  <p>&nbsp;</p>
                </div>
              </div>

            </div>
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
