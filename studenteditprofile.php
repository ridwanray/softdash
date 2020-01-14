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
          <div class="d-sm-flex align-items-center text-center  mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-center">Student Profile Edit</h1>
            
          </div>
          <div class="container-fluid"><hr class="sidebar-divider my-0"></div>
        </div>
         <!-- Start content here --> 

        <table class="table table-bordered table-striped" width="91%" border="0">
        <tbody><tr>
        <td>JAMB Number</td>
        <td><input class="form-control" name="jambno" type="text" id="jambno" value="12345AD"></td>
        <td>Phone Number</td>
        <td><input class="form-control" name="pno" type="text" id="pno" value="08157787640"></td>
        </tr>
        <tr>
        <td width="19%">Matric Number</td>
        <td width="33%"><input class="form-control" name="mno" type="text" id="mno" value="S2434434343" disabled></td>
        <td width="19%">Email Address</td>
        <td width="29%"><input class="form-control" name="email" type="text" id="email" value="raywire@crescent.edu.ng" disabled></td>
        </tr>
        <tr>
        <td>Last Name</td>
        <td><input class="form-control" name="surname" type="text" id="surname" value="Ray" disabled></td>
        <td><span class="style23">Current Level</span></td>
        <td><input class="form-control" name="surname" type="text" id="surname" value="900" disabled></td>
        </tr>
        <tr>
        <td>First Name </td>
        <td><input class="form-control" name="fname" type="text" id="fname" value="Online" disabled></td>
        <td>Course of Study</td>
        <td><input class="form-control" name="pos" type="text"  id="pos" value="Law" disabled></td>
        </tr>
        <tr>
        <td>Other Names</td>
        <td><input class="form-control" name="oname" type="text" id="oname" value="Wire" disabled></td>
        <td><span class="style23">Semester </span></td>
        <td><input class="form-control" name="semes" type="text" id="semes" value="First" disabled></td>
        </tr>
        <tr>
        <td>Maiden Name (If Available)</td>
        <td><input class="form-control" name="oname" type="text" id="oname" value="Wire" disabled></td>
        <td><span class="style23">Current Session</span></td>
        <td><input class="form-control" name="currsess" type="text" id="currsess" value="2018/2019" disabled></td>
        </tr>
        <tr>
        <td><span class="style23">Year of Entry</span></td>
        <td><input class="form-control" name="yrofentry" type="text" id="yrofentry" value="2014" disabled></td>
        <td><span class="style23">Mode of Entry</span></td>
        <td><select class="form-control" name="modentry" id="modentry">
        <option value="UTME">UTME</option>

        <option value="Direct Entry">Direct Entry</option>
        <option value="Transfer">Transfer</option>

        </select></td>
        </tr>
        <tr>
        <td>Date of Birth</td>
        <td><input type='text' class="form-control" data-provide="datepicker" placeholder="select date" style='width: 300px;'>
        <!-- Script -->
          <script type="text/javascript">
          $(document).ready(function(){
          $('#datepicker').datepicker(); 
          });
          </script>
        </td>
        
        <td><span class="style23">Hall of Residence</span></td>
        <td><span class="style23">
        <select name="hall" id="hall"  class="form-control">
        <option value="">Awo</option>
        <option value="">Idia</option>
        <option value="">Indy</option>
        <option value="">Kuti</option>
        </select>
        </span></td>
        </tr>
        <tr>
        <td>Sex</td>
        <td><span class="style23">
        <select name="gender" id="gender" class="form-control">
        <option value="M">Male</option>
        <option value="F">Female</option>
        </select>
        </span></td>
        <td><span class="style23">Block</span></td>
        <td><input class="form-control" name="block" type="text" id="block" value="" readonly="readonly"></td>
        </tr>
        <tr>
        <td>Marital Status</td>
        <td><span class="style23">
        <select name="mstatus" id="mstatus" class="form-control">
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        </select>
        </span></td>
        <td><span class="style23">Room No</span></td>
        <td><input class="form-control" name="rmno" type="text" id="rmno" value="" readonly="readonly"></td>
        </tr>
        <tr>


        </tr>
        <tr>
        <td>Nationality</td>
        <td><input class="form-control" name="nation" type="text" id="nation" value="Nigerian" readonly="readonly"></td>
        <td>Perm. Home Addr.</td>
        <td><textarea class="form-control" name="permaddr" cols="20" id="permaddr">No 21, Oyero Street off Adekunle Village</textarea></td>
        </tr>
        <tr>
        <td>State</td>
        <td><select name="state" id="state" class="form-control">
        <option value="Ogun">Select</option>
        <option value="Abia" ?="">Abia</option>
        <option value="Adamawa" ?="">Adamawa</option>
        <option value="Akwa-Ibom" ?="">Akwa-Ibom</option>
        <option value="Anambra" ?="">Anambra</option>
        <option value="Bauchi" ?="">Bauchi</option>
        <option value="Bayelsa" ?="">Bayelsa</option>
        <option value="Benue" ?="">Benue</option>
        <option value="Borno" ?="">Borno</option>
        <option value="Cross River" ?="">Cross River</option>
        <option value="Delta" ?="">Delta</option>
        <option value="Ebonyi" ?="">Ebonyi</option>
        <option value="Edo" ?="">Edo</option>
        <option value="Ekiti" ?="">Ekiti</option>
        <option value="Enugu" ?="">Enugu</option>
        <option value="FCT,Abuja" ?="">FCT,Abuja</option>
        <option value="Gombe" ?="">Gombe</option>
        <option value="Imo" ?="">Imo</option>
        <option value="Jigawa" ?="">Jigawa</option>
        <option value="Kaduna" ?="">Kaduna</option>
        <option value="Kano" ?="">Kano</option>
        <option value="Katsina" ?="">Katsina</option>
        <option value="Kebbi" ?="">Kebbi</option>
        <option value="Kogi" ?="">Kogi</option>
        <option value="Kwara" ?="">Kwara</option>
        <option value="Lagos" ?="">Lagos</option>
        <option value="Nassarawa" ?="">Nassarawa</option>
        <option value="Niger" ?="">Niger</option>
        <option value="Ogun" ?="">Ogun</option>
        <option value="Ondo" ?="">Ondo</option>
        <option value="Osun" ?="">Osun</option>
        <option value="Oyo" ?="">Oyo</option>
        <option value="Plateau" ?="">Plateau</option>
        <option value="Rivers" ?="">Rivers</option>
        <option value="Sokoto" ?="">Sokoto</option>
        <option value="Taraba" ?="">Taraba</option>
        <option value="Yobe" ?="">Yobe</option>
        <option value="Zamfara" ?="">Zamfara</option>
        </select></td>
        <td>Postal Address</td>
        <td><textarea class="form-control" name="postaddr" cols="20" id="postaddr">2312, Alabama Road, Rayland</textarea></td>
        </tr>
        <tr>
        <td>Local Govt</td>
        <td><input name="lga" class="form-control" type="text" id="lga" value="" onmouseout="" ?=""></td>
        <td>Home Town</td>
        <td><input class="form-control" name="htown" type="text" id="htown" value="Amazon Lane" onmouseout="" ?=""></td>
        </tr>
        <tr>
        <td>No of Children</td>
        <td><input class="form-control" name="nochild" type="text" id="nochild" value="20"></td>
        <td>Disability</td>
        <td><input class="form-control" name="disability" type="text" id="disability" value="None"></td>
        </tr>
        <tr>
        <td>Religion</td>
        <td>
        <select name="religion" id="religion" class="form-control">
        <option value="Islam">Islam</option>
        <option value="Christianity">Christianity</option>
        <option value="Others">Others</option>
        </select>
        </td>
        <td>Denomination</td>
        <td>
        <select class="form-control" name="deno" id="deno">
        <option value="Islam">Islam</option>
        <option value="Catholic">Catholic</option>
        <option value="Pentecostals">Pentecostals</option>
        <option value="Orthodox">Orthodox</option>
        <option value="Evangelical">Evangelical</option>
        <option value="Others">Others</option>
        </select>
        </td>
        </tr>

        <th colspan="4" style="text-align:center">UPDATE GUARDIAN INFOMATION BY FILLING THE FORMS BELOW APPROPRIATELY</th>


        <tr>

        </tr>
        <tr>
        <td>Title</td>
        <td><select name="gtitle" id="gtitle" class="form-control">
        <option value="Mr.">Mr.</option>
        <option value="Alhaji" ?="">Alhaji</option>
        <option value="Alhaja" ?="">Alhaja</option>
        <option value="Mr." ?="">Mr.</option>
        <option value="Mrs." ?="">Mrs.</option>
        <option value="Dr." ?="">Dr.</option>
        <option value="Prof." ?="">Prof.</option>
        <option value="HRH" ?="">HRH</option>
        <option value="Engr." ?="">Engr.</option>
        <option value="Arch." ?="">Arch.</option>
        <option value="Hon." ?="">Hon.</option>
        <option value="Hajia" ?="">Hajia</option>
        <option value="Senator" ?="">Senator</option>
        </select></td>
        <td>Surname</td>
        <td><input class="form-control" name="gsurname" type="text" id="gsurname" value="Wire"></td>
        </tr>
        <tr>

        </tr>
        <tr>
        <td>Other Name</td>
        <td><input class="form-control" name="goname" type="text" id="goname" value="Wire"></td>
        <td>First Name</td>
        <td><input class="form-control" name="gfname" type="text" id="gfname" value="Online"></td>
        </tr>
        <tr>
        </td>

        </tr>
        <tr>
        <td>Phone No</td>
        <td><input class="form-control" name="gpno" type="text" id="gpno" value="08157787640"></td>
        <td>Email Address</td>
        <td><input class="form-control" name="gemail" type="text" id="gemail" value="raywireonline@gmail.com"></td>
        </tr>
        <tr>
        <td>Relationship</td>
        <td><select class="form-control" name="guargral" id="guargral">
        <option value="UTME">Father</option>
        <option value="Direct Entry">Mother</option>
        <option value="Transfer">Husband</option>
        <option value="Transfer">Wife</option>
        <option value="Transfer">Brother</option>
        <option value="Transfer">Sister</option>
       

        </select>
        </td>
        <td>Contact Address</td>
        <td><textarea class="form-control" name="postaddr" cols="20" id="postaddr">2312, Alabama Road, Rayland</textarea></td>
        </tr>
        </tbody>
 
</table>
    <!-- button here-->
    
         <!-- button here-->
         <div class="container">
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="center mb-1 col-lg-4 col-md-4 col-sm-6 col-xm-6">
                        <a href="#" class="btn btn-outline btn-warning"> <i class="fa fa-upload"></i> Upload Passport</a>
                        </div>
                        <div class="center mb-1 col-lg-4 col-md-4 col-sm-6 col-xm-6">
                        <a href="#" class="btn btn-outline btn-success"> <i class="fa fa-edit"></i> Update Profile</a>
                        </div>
                        <div class="center mb-1 col-lg-4 col-md-4 col-sm-6 col-xm-6">
                        <a href="#" class="btn btn-outline btn-info"> <i class="fa fa-print"></i> Print Profile</a>
                        </div>
                    </div>
                  </div>
              <!-- button here-->
        <hr class="sidebar-divider my-0">




        <div class="md-form">
  
</div>





   <!-- button here-->









        
       <!-- End content here-->
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
<!-- Datepicker -->
<link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
<script src='js/bootstrap-datepicker.min.js' type='text/javascript'></script>

</body>

</html>
