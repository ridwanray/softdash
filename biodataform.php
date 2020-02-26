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
          <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">BIODATA REGISTRATION FORM</h1>  
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xm-6">
      <a href="http://localhost/uport/applicationdashboard.php"><button type="button" class="btn btn-info btn-sm">Dashboard</button></a>
    </div>
</div>
</div>
         <!-- Start content here --> 

         <div class="content container animate-panel"  style="margin-top: 10px;">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div style="margin-top: 10px;">
</div>
<p class="lead"> FORM A: BIODATA REGISTRATION FORM</p>
<div class="row">
<div class="col-md-8 col-sm-12">
<form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
<input name="_token" type="hidden">
<div class="form-group">
<label for="surname" class="control-label form-label col-sm-3 ">Surname</label>
<div class="col-sm-9">
<input class="form-control" name="surname" type="text" value="Real">
</div>
</div>
<div class="form-group">
<label for="firstname" class="required control-label form-label col-sm-3 ">First Name</label>
<div class="col-sm-9">
<input class="form-control" name="firstname" type="text" value="Real">
</div>
</div>
<div class="form-group">
<label for="middlename" class="control-label form-label col-sm-3 ">Middle Name</label>
<div class="col-sm-9">
<input class="form-control" name="middlename" type="text" value="" id="middlename">
</div>
</div>
<div class="form-group row container">

<label for="gender" class="control-label form-label col-lg-3  ">Gender</label>
            <div class="radio radio-info radio-inline col-lg-3 ">
                <input id="male" class="" name="gender" type="radio" value="M">
                <label for="male">MALE</label>
            </div>
            <div class="radio radio-info radio-inline col-lg-3">
                <input id="female" class="" name="gender" type="radio" value="F">
                <label for="female">FEMALE</label>
            </div>
</div>
<div class="form-group row container">

<label for="gender" class="control-label form-label col-lg-3  ">Marital Status</label>
            <div class="radio radio-info radio-inline col-lg-3 ">
                <input id="male" class="" name="MAR" type="radio" value="SS">
                <label for="male">SINGLE</label>
            </div>
            <div class="radio radio-info radio-inline col-lg-3">
                <input id="female" class="" name="MAR" type="radio" value="F">
                <label for="female">MARRIED</label>
            </div>
</div>
<div class="form-group row container">

<label for="gender" class="control-label form-label col-lg-3  ">Religion</label>
            <div class="radio radio-info radio-inline col-lg-3 ">
                <input id="male" class="" name="REL" type="radio" value="DF">
                <label for="male">ISLAM</label>
            </div>
            <div class="radio radio-info radio-inline col-lg-3">
                <input id="female" class="" name="REL" type="radio" value="DF">
                <label for="female">CHRISTIANITY</label>
            </div>
            <div class="radio radio-info radio-inline col-lg-3">
                <input id="female" class="" name="REL" type="radio" value="FDD">
                <label for="female">OTHERS</label>
            </div>
</div>

<div class="form-group row container">

<label for="gender" class="control-label form-label col-lg-3  ">Has Disability?</label>
            <div class="radio radio-info radio-inline col-lg-3 ">
                <input id="male" class="" name="DISAB" type="radio" value="DIAA">
                <label for="male">YES</label>
            </div>
            <div class="radio radio-info radio-inline col-lg-3">
                <input id="female" class="" name="DISAB" type="radio" value="DIAA">
                <label for="female">NO</label>
            </div>
</div>

<div class="form-group">
<label for="date_of_birth" class="control-label form-label col-sm-3 ">Date Of Birth</label>
<div class="col-sm-9">
<div class="control-group">
<div class="controls">
<div class="input-prepend input-group">
<span class="add-on input-group-addon"> </span>  
<input type='text' class="form-control" data-provide="datepicker" placeholder="select date" style='width: 300px;'>
<!-- Script -->
<script type="text/javascript">
          $(document).ready(function(){
          $('#datepicker').datepicker(); 
          });
</script>
</div>
</div>
</div>
</div>
</div>
<div class="form-group">
<div class="col-sm-9">
<div>
</div>
</div>
 </div>
<div class="form-group">
<div class="col-sm-9">
</div>
</div>
<div class="form-group">
<div class="col-sm-9">


</div>
</div>
<div class="form-group">
<label for="mothers_maiden_name" class="control-label form-label col-sm-4 ">Mothers Maiden Name</label>
<div class="col-sm-9">
<input class="form-control" name="mothers_maiden_name" type="text" id="mothers_maiden_name">
</div>
</div>
<div class="form-group">
<label for="town" class="control-label form-label col-sm-3 ">Town of Birth</label>
<div class="col-sm-9">
<input class="form-control" name="town" type="text" id="town">
</div>
</div>
<div class="form-group">
<label for="state" class="control-label form-label col-sm-3 ">State of Origin</label>
<div class="col-sm-9">
<select class="form-control" id="state" name="state"><option value="12">Abia</option><option value="13">Abuja FCT</option><option value="14">Adamawa</option><option value="15">Akwa Ibom</option><option value="16">Anambra</option><option value="17">Bauchi</option><option value="18">Bayelsa</option><option value="19">Benue</option><option value="20">Borno</option><option value="21">Cross River</option><option value="22">Delta</option><option value="23">Ebonyi</option><option value="24">Edo</option><option value="25">Ekiti</option><option value="26">Enugu</option><option value="27">Gombe</option><option value="28">Imo</option><option value="29">Jigawa</option><option value="30">Kaduna</option><option value="31">Kano</option><option value="32">Katsina</option><option value="33">Kebbi</option><option value="34">Kogi</option><option value="35">Kwara</option><option value="36">Lagos</option><option value="37">Nasarawa</option><option value="38">Niger</option><option value="49">Non Nigerian / Others</option><option value="39">Ogun</option><option value="40">Ondo</option><option value="41">Osun</option><option value="42">Oyo</option><option value="43">Plateau</option><option value="44">Rivers</option><option value="45">Sokoto</option><option value="46">Taraba</option><option value="47">Yobe</option><option value="48">Zamfara</option></select>
</div>
</div>
<div class="form-group">
<label for="lga" class="control-label form-label col-sm-3 ">Local Govt</label>
<div class="col-sm-9">
<input class="form-control" name="lga" type="text" id="lga">
</div>
</div>
<div class="form-group">
<label for="nationality" class="control-label form-label col-sm-3 ">Nationality</label>
<div class="col-sm-9">
<select class="form-control" id="nationality" name="nationality"><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei Darussalam</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Congo</option><option value="50">Congo, the Democratic Republic of the</option><option value="51">Cook Islands</option><option value="52">Costa Rica</option><option value="53">Cote D&#039;Ivoire</option><option value="54">Croatia</option><option value="55">Cuba</option><option value="56">Cyprus</option><option value="57">Czech Republic</option><option value="58">Denmark</option><option value="59">Djibouti</option><option value="60">Dominica</option><option value="61">Dominican Republic</option><option value="62">Ecuador</option><option value="63">Egypt</option><option value="64">El Salvador</option><option value="65">Equatorial Guinea</option><option value="66">Eritrea</option><option value="67">Estonia</option><option value="68">Ethiopia</option><option value="69">Falkland Islands (Malvinas)</option><option value="70">Faroe Islands</option><option value="71">Fiji</option><option value="72">Finland</option><option value="73">France</option><option value="74">French Guiana</option><option value="75">French Polynesia</option><option value="76">French Southern Territories</option><option value="77">Gabon</option><option value="78">Gambia</option><option value="79">Georgia</option><option value="80">Germany</option><option value="81">Ghana</option><option value="82">Gibraltar</option><option value="83">Greece</option><option value="84">Greenland</option><option value="85">Grenada</option><option value="86">Guadeloupe</option><option value="87">Guam</option><option value="88">Guatemala</option><option value="89">Guinea</option><option value="90">Guinea-Bissau</option><option value="91">Guyana</option><option value="92">Haiti</option><option value="93">Heard Island and Mcdonald Islands</option><option value="94">Holy See (Vatican City State)</option><option value="95">Honduras</option><option value="96">Hong Kong</option><option value="97">Hungary</option><option value="98">Iceland</option><option value="99">India</option><option value="100">Indonesia</option><option value="101">Iran, Islamic Republic of</option><option value="102">Iraq</option><option value="103">Ireland</option><option value="104">Israel</option><option value="105">Italy</option><option value="106">Jamaica</option><option value="107">Japan</option><option value="108">Jordan</option><option value="109">Kazakhstan</option><option value="110">Kenya</option><option value="111">Kiribati</option><option value="112">Korea, Democratic People&#039;s Republic of</option><option value="113">Korea, Republic of</option><option value="114">Kuwait</option><option value="115">Kyrgyzstan</option><option value="116">Lao People&#039;s Democratic Republic</option><option value="117">Latvia</option><option value="118">Lebanon</option><option value="119">Lesotho</option><option value="120">Liberia</option><option value="121">Libyan Arab Jamahiriya</option><option value="122">Liechtenstein</option><option value="123">Lithuania</option><option value="124">Luxembourg</option><option value="125">Macao</option><option value="126">Macedonia, the Former Yugoslav Republic of</option><option value="127">Madagascar</option><option value="128">Malawi</option><option value="129">Malaysia</option><option value="130">Maldives</option><option value="131">Mali</option><option value="132">Malta</option><option value="133">Marshall Islands</option><option value="134">Martinique</option><option value="135">Mauritania</option><option value="136">Mauritius</option><option value="137">Mayotte</option><option value="138">Mexico</option><option value="139">Micronesia, Federated States of</option><option value="140">Moldova, Republic of</option><option value="141">Monaco</option><option value="142">Mongolia</option><option value="143">Montserrat</option><option value="144">Morocco</option><option value="145">Mozambique</option><option value="146">Myanmar</option><option value="147">Namibia</option><option value="148">Nauru</option><option value="149">Nepal</option><option value="150">Netherlands</option><option value="151">Netherlands Antilles</option><option value="152">New Caledonia</option><option value="153">New Zealand</option><option value="154">Nicaragua</option><option value="155">Niger</option><option value="156">Nigeria</option><option value="157">Niue</option><option value="158">Norfolk Island</option><option value="159">Northern Mariana Islands</option><option value="160">Norway</option><option value="161">Oman</option><option value="162">Pakistan</option><option value="163">Palau</option><option value="164">Palestinian Territory, Occupied</option><option value="165">Panama</option><option value="166">Papua New Guinea</option><option value="167">Paraguay</option><option value="168">Peru</option><option value="169">Philippines</option><option value="170">Pitcairn</option><option value="171">Poland</option><option value="172">Portugal</option><option value="173">Puerto Rico</option><option value="174">Qatar</option><option value="175">Reunion</option><option value="176">Romania</option><option value="177">Russian Federation</option><option value="178">Rwanda</option><option value="179">Saint Helena</option><option value="180">Saint Kitts and Nevis</option><option value="181">Saint Lucia</option><option value="182">Saint Pierre and Miquelon</option><option value="183">Saint Vincent and the Grenadines</option><option value="184">Samoa</option><option value="185">San Marino</option><option value="186">Sao Tome and Principe</option><option value="187">Saudi Arabia</option><option value="188">Senegal</option><option value="189">Serbia and Montenegro</option><option value="190">Seychelles</option><option value="191">Sierra Leone</option><option value="192">Singapore</option><option value="193">Slovakia</option><option value="194">Slovenia</option><option value="195">Solomon Islands</option><option value="196">Somalia</option><option value="197">South Africa</option><option value="198">South Georgia and the South Sandwich Islands</option><option value="199">Spain</option><option value="200">Sri Lanka</option><option value="201">Sudan</option><option value="202">Suriname</option><option value="203">Svalbard and Jan Mayen</option><option value="204">Swaziland</option><option value="205">Sweden</option><option value="206">Switzerland</option><option value="207">Syrian Arab Republic</option><option value="208">Taiwan, Province of China</option><option value="209">Tajikistan</option><option value="210">Tanzania, United Republic of</option><option value="211">Thailand</option><option value="212">Timor-Leste</option><option value="213">Togo</option><option value="214">Tokelau</option><option value="215">Tonga</option><option value="216">Trinidad and Tobago</option><option value="217">Tunisia</option><option value="218">Turkey</option><option value="219">Turkmenistan</option><option value="220">Turks and Caicos Islands</option><option value="221">Tuvalu</option><option value="222">Uganda</option><option value="223">Ukraine</option><option value="224">United Arab Emirates</option><option value="225">United Kingdom</option><option value="226">United States</option><option value="227">United States Minor Outlying Islands</option><option value="228">Uruguay</option><option value="229">Uzbekistan</option><option value="230">Vanuatu</option><option value="231">Venezuela</option><option value="232">Viet Nam</option><option value="233">Virgin Islands, British</option><option value="234">Virgin Islands, U.s.</option><option value="235">Wallis and Futuna</option><option value="236">Western Sahara</option><option value="237">Yemen</option><option value="238">Zambia</option><option value="239">Zimbabwe</option></select>
</div>
</div>
<div class="form-group">
<label for="residential_address" class="control-label form-label col-sm-3 ">Residential Address</label>
<div class="col-sm-9">
<textarea class="form-control" rows="2" name="residential_address" cols="50" id="residential_address"></textarea>
</div>
</div>
<div class="form-group">
<label for="permanent_address" class="control-label form-label col-sm-4">Permanent Home Address</label>
<div class="col-sm-9">
<textarea class="form-control" rows="2" name="permanent_address" cols="50" id="permanent_address"></textarea>
</div>
</div>
<div class="form-group">
<div class="col-sm-9 col-sm-offset-3">
<input class="btn btn-warning" type="submit" value="Submit Form">
</div>
</div>
</form>
</div>
<div class="col-md-4 col-sm-12">

<div class="form-group">
<div id="preview">
<img src="img/av3.jpg" width="150" style="border: 2px solid #000" class="margin-l-10" />
</div>
<div id="loader"></div>
<form action="" method="post" enctype="multipart/form-data">
<input id="passport" name="passport" type="file" class="passport form-control input-md col-md-12 mt-2 mb-2" />
<button type="button" id="upload-btn" class="btn btn-success upload-btn">
<i class="fa fa-cloud-upload-alt"></i>
Upload Passport
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
  <!-- Datepicker -->
<link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
<script src='js/bootstrap-datepicker.min.js' type='text/javascript'></script>


</body>

</html>
