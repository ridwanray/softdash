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
          <!-- Page Heading -->
      <!--    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Passport Upload</h1>
            
          </div> -->

        </div>
         <!-- Start content here --> 


         <div class="content">
    <div class="row container-fluid bg-white" style="margin-left:40px;margin-right:30px;margin-top:20px;padding-top:20px; padding-bottom:20px;">
        <div class="col-md-12">
            <div class="hpanel">
                <div class="panel-body">
                    <div class="stats-title pull-left">
                        <h4>Course Registration</h4>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <form action="coursereg_online.php" method="POST" name="creg">
                                <table border="0" align="center" cellpadding="3" cellspacing="3" class="table table-striped">
                                    <tr>
                                        <td style="font-size: 13px; font-weight: bold;" colspan="7" bgcolor="#FFFFFF"><u>Total No of Course Credit(s) Registered For: (23)</u></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"><span style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;"><i>STA 79O(4) - Statistical Inference </i></span><span style="font-size: 10px; font-weight: bold;"></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"><span style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;"><i>STA 403(4) - Econometrics Method I</i></span><span style="font-size: 10px; font-weight: bold;"></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"><span style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;"><i>STA 501(4) - Cramer Rahoor STA </i></span><span style="font-size: 10px; font-weight: bold;"></span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7"><span style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;"><i>LPI 501(4) - Estimation Theory </i></span><span style="font-size: 10px; font-weight: bold;"></span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td bgcolor="#FFFFFF">&nbsp;</td>
                                        <td colspan="6" align="right" bgcolor="#FFFFFF" style="font-size: 10px">&nbsp;</td>
                                    </tr>
                                    <div class="row">
                                          <tr bgcolor="#000000" >
                                              <div class="col-6">
                                                  <td colspan="2" bgcolor="#fff">
                                                      <select name="course" id="course" class="form-control">
                                                          <option selected="selected">Select Course</option>
                                                          <option value="STA 501" ?>STA 501</option>
                                                          <option value="STA 403" ?>STA 403</option>
                                                          <option value="STA 501" ?>STA 501</option>
                                                          
                                                      </select>
                                                  </td>
                                              </div>
                                              <div class="col-6">
                                                  <td width="98" align="left" bgcolor="#fff" style="font-size: 10px">
                                                      <input type="submit" class="btn btn-warning" name="remove" id="remove" value="Delete Course" />
                                                  </td>
                                                  <td colspan="5" class="font-weight-bold" align="center" bgcolor="#fff" style="font-size: 10px; color: #F00; padding-top:20px;"><strong>SELECT THE COURSE TO DELETE AND CLICK THE Delete Course BUTTON</strong></td>
                                              </div>
                                            </tr>
                                              
                                      </div>  


                                    <tr>
                                        <td bgcolor="#FFFFFF">&nbsp;</td>
                                        <td colspan="6" align="right" bgcolor="#FFFFFF" style="font-size: 10px">
                                            <label></label><strong><span style="text-align: right"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td width="126" bgcolor="#fff">
                                            <div align="center" class="style46">
                                                <div align="left">Course Code</div>
                                            </div>
                                        </td>
                                        <td colspan="2" bgcolor="#fff">
                                            <div align="left" class="style46">
                                                <div align="left">Course Title </div>
                                            </div>
                                        </td>
                                        <td width="106" bgcolor="#fff" class="style46">
                                            <div align="left">Status</div>
                                        </td>
                                        <td width="94" bgcolor="#fff">
                                            <div align="right" class="style46">
                                                <div align="left">Unit </div>
                                            </div>
                                        </td>
                                        <td width="94" bgcolor="#fff">
                                            <div align="right" class="style46">
                                                <div align="left">Semester</div>
                                            </div>
                                        </td>
                                        <td width="72" bgcolor="#fff">
                                            <div align="left"><span class="style46">Select</span></div>
                                        </td>
                                    </tr>
                                    <tr bgcolor="#F7F7F7">
                                        <td bgcolor="#F7F7F7" style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;">STA 501
                                            <input name="cno1" type="hidden" value="STA 501" />
                                        </td>
                                        <td colspan="2" style="font-size: 10px; font-weight: bold;">Cramer Rahoor STA</td>
                                        <td style="font-size: 10px; font-weight: bold;">A</td>
                                        <td style="font-size: 10px; font-weight: bold;">4
                                            <input name="unit1" type="hidden" value="4" />
                                        </td>
                                        <td style="font-size: 10px; font-weight: bold;">
                                            First </td>
                                        <td style="font-size: 10px">
                                            <input name="chk1" type="checkbox" value="yes" />
                                        </td>
                                    </tr>
                                    <tr bgcolor="#F7F7F7">
                                        <td bgcolor="#F7F7F7" style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;">STA 503
                                            <input name="cno2" type="hidden" value="STA 503" />
                                        </td>
                                        <td colspan="2" style="font-size: 10px; font-weight: bold;">Cramer Rahoor STA</td>
                                        <td style="font-size: 10px; font-weight: bold;">A</td>
                                        <td style="font-size: 10px; font-weight: bold;">4
                                            <input name="unit2" type="hidden" value="4" />
                                        </td>
                                        <td style="font-size: 10px; font-weight: bold;">
                                            First </td>
                                        <td style="font-size: 10px">
                                            <input name="chk2" type="checkbox" value="yes" />
                                        </td>
                                    </tr>
                                    <tr bgcolor="#F7F7F7">
                                        <td bgcolor="#F7F7F7" style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;">STA 504
                                            <input name="cno3" type="hidden" value="STA 504" />
                                        </td>
                                        <td colspan="2" style="font-size: 10px; font-weight: bold;">Cramer Rahoor STA</td>
                                        <td style="font-size: 10px; font-weight: bold;">A</td>
                                        <td style="font-size: 10px; font-weight: bold;">4
                                            <input name="unit3" type="hidden" value="4" />
                                        </td>
                                        <td style="font-size: 10px; font-weight: bold;">
                                            First </td>
                                        <td style="font-size: 10px">
                                            <input name="chk3" type="checkbox" value="yes" />
                                        </td>
                                    </tr>
                                    <tr bgcolor="#F7F7F7">
                                        <td bgcolor="#F7F7F7" style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;">STA 501
                                            <input name="cno4" type="hidden" value="STA 501" />
                                        </td>
                                        <td colspan="2" style="font-size: 10px; font-weight: bold;">Cramer Rahoor STA</td>
                                        <td style="font-size: 10px; font-weight: bold;">A</td>
                                        <td style="font-size: 10px; font-weight: bold;">2
                                            <input name="unit4" type="hidden" value="2" />
                                        </td>
                                        <td style="font-size: 10px; font-weight: bold;">
                                            First </td>
                                        <td style="font-size: 10px">
                                            <input name="chk4" type="checkbox" value="yes" />
                                        </td>
                                    </tr>
                                    <tr bgcolor="#F7F7F7">
                                        <td bgcolor="#F7F7F7" style="font-size: 10px; font-weight: bold; font-family: 'Lucida Console', Monaco, monospace;">STA 598
                                            <input name="cno5" type="hidden" value="STA 598" />
                                        </td>
                                        <td colspan="2" style="font-size: 10px; font-weight: bold;">Cramer Rahoor STA</td>
                                        <td style="font-size: 10px; font-weight: bold;">C</td>
                                        <td style="font-size: 10px; font-weight: bold;">2
                                            <input name="unit5" type="hidden" value="2" />
                                        </td>
                                        <td style="font-size: 10px; font-weight: bold;">
                                            First </td>
                                        <td style="font-size: 10px">
                                            <input name="chk5" type="checkbox" value="yes" />
                                        </td>
                                    </tr>
                                    
                                    
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td colspan="2">&nbsp;</td>
                                        <td><strong>Total</strong></td>
                                        <td><strong>204</strong></td>
                                        <td style="font-size: 10px; font-weight: bold;">&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                        <td width="247">&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div align="center">
                                                <input name="submit" type="submit" class="btn btn-primary" id="submit" value="Save Seleted Courses" />
                                            </div>
                                        </td>
                                        <td colspan="4">
                                            <div align="center">
                                                <input name="submit2" type="submit" class="btn btn-danger" id="submit2" value="Continue Registration Later" />
                                            </div>
                                        </td>
                                        <td>
                                            <div align="center">
                                                <input name="submit3" type="submit" class="btn btn-success" id="submit3" value="Finalize" />
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">&nbsp;</td>
                                    </tr>
                                    <tr bgcolor="#000000">
                                        <td bgcolor="#fff" colspan="2">
                                            <select name="course2" id="course2" class="form-control">
                                                <option selected="selected">Select Course</option>
                                               
                                                <option value="STA 201" ?>STA 201</option>
                                                <option value="STA 203" ?>STA 203</option>
                                                <option value="STA 301" ?>STA 301</option>
                                               
                    
                                        
                                            </select>
                                        </td>
                                        <td bgcolor="#fff" ><span style="font-size: 10px">
<input type="submit" name="add" id="add" value="Add Course" class="btn btn-success" />
</span></td>


                                        <td colspan="6" class="text-info" bgcolor="#fff" align="center"><strong style="text-align:justify;"><span style="font-style:10px;">SELECT THE COURSE TO ADD AND CLICK THE Add Course BUTTON</span></strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                            <label></label>
                                            <div align="center"></div>
                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>














        <!-- start content here-->
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
