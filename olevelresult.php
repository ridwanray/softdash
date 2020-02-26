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
          <h1 class="h6 mb-0 text-gray-800 font-weight-bold ">O LEVEL RESULT FORM</h1>  
    </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-xm-6">
      <a href=""><button type="button" class="btn btn-info btn-block btn-sm">Dashboard</button></a>
    </div>
</div>
</div>
         <!-- Start content here --> 




         <div class="content animate-panel container mt-2">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-body">
<div><div style="margin-top: 10px;">
</div></div>  
<h1 >FORM E: O-LEVEL RESULT FORM</h1>
<p class="lead">
PLEASE READ: Form Instructions
</p>
<p>
You are required to add a minimum of 5 different subjects and grades obtained. <br />
Please note that you are only restricted to add a maximum of two (2) sittings.
</p>
<div class="row padding-t-20">
<div class="col-md-12 col-sm-12">
<table class="table table-striped">
<thead>
<tr>
<th>SN</th>
<th>EXAM TYPE</th>
<th>YEAR</th>
<th>EXAM NUMBER</th>
<th>ACTION</th>
</tr>
</thead>
<tbody>
<tr><td colspan="5">You have not added any o-level result</td></tr>
</tbody>
</table> </div>
</div>
<div class="row">
<div class="col-md-8 col-sm-12">
<h2>Add Your O-Level Result</h2>
<hr />
<form class="form-horizontal" method="post" action="">
<fieldset>


<div class="form-group row">
<label class="col-lg-3 control-label" for="textinput">Examination Year</label>
<div class="col-lg-3">
<select id="year" class="form-control" name="year"><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option></select>
</div>

<label class="col-lg-3 control-label" for="radios">Exam Type</label>
<div class="col-lg-3">
<select class="form-control" name="examtype"><option value="1">WAEC</option><option value="2">NECO</option><option value="3">NABTEB</option><option value="4">WAEC GCE</option><option value="5">NECO GCE</option><option value="6">OTHERS</option></select>
</div>
</div>

<div class="form-group row">
<label class="col-lg-3 control-label" for="textinput">Exam Number</label>
<div class="col-lg-9">
<input class="form-control input-md" placeholder="YKDOGO YKDOGO YKDOGO YKDOGO" name="examn" type="text">
</div>

</div>

<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub1" class="form-control" name="sub1"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="radios">Grade</label>
<div class="col-md-3">
<select id="grade1" class="form-control" name="grade1"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>


<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub2" class="form-control" name="sub2"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="textinput">Grade</label>
<div class="col-md-3">
<select id="grade2" class="form-control" name="grade2"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>


<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub3" class="form-control" name="sub3"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="radios">Grade</label>
<div class="col-md-3">
<select id="grade3" class="form-control" name="grade3"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>


<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub4" class="form-control" name="sub4"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="radios">Grade</label>
<div class="col-md-3">
<select id="grade4" class="form-control" name="grade4"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>


<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub5" class="form-control" name="sub5"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="radios">Grade</label>
<div class="col-md-3">
<select id="grade5" class="form-control" name="grade5"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>


<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub6" class="form-control" name="sub6"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="radios">Grade</label>
<div class="col-md-3">
<select id="grade6" class="form-control" name="grade6"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>


<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub7" class="form-control" name="sub7"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="radios">Grade</label>
<div class="col-md-3">
<select id="grade7" class="form-control" name="grade7"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>


<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub8" class="form-control" name="sub8"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="radios">Grade</label>
<div class="col-md-3">
<select id="grade8" class="form-control" name="grade8"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>


<div class="form-group row">
<label class="col-md-3 control-label" for="textinput">Subject</label>
<div class="col-md-4">
<select id="sub9" class="form-control" name="sub9"><option value="" selected="selected">Select A Subject</option><option value="24">Agricultural Science</option><option value="5">Animal Husbandry</option><option value="13">Applied Electricity</option><option value="35">Arabic</option><option value="8">Auto Mechanic</option><option value="21">Biology</option><option value="7">Building Construction</option><option value="39">C.R.K</option><option value="22">Chemistry</option><option value="3">Civic Education</option><option value="41">Clothing &amp; Texture</option><option value="30">Commerce</option><option value="4">Computer Studies</option><option value="1">Data Processing</option><option value="31">Economics</option><option value="12">Electronics</option><option value="16">English Lanuage</option><option value="29">Financial Accounting</option><option value="26">Food &amp; Nutrition</option><option value="20">French</option><option value="15">Further Mathematics</option><option value="28">Geography</option><option value="33">Government</option><option value="19">Hausa</option><option value="25">Health Science</option><option value="38">History</option><option value="42">Home Management</option><option value="18">Igbo</option><option value="2">Insurance</option><option value="44">Introductory Technology</option><option value="36">Islamic Studies</option><option value="34">Literature</option><option value="14">Mathematics</option><option value="11">Metal Work</option><option value="37">Music</option><option value="27">Physical Education</option><option value="23">Physics</option><option value="43">Shorthand</option><option value="10">Technical Drawing</option><option value="6">Tie and dyeing.</option><option value="32">Typewriting</option><option value="40">Visual art</option><option value="9">Wood Work</option><option value="17">Yoruba</option></select>
</div>

<label class="col-md-2 control-label" for="radios">Grade</label>
<div class="col-md-3">
<select id="grade9" class="form-control" name="grade9"><option value="" selected="selected">Select Grade</option><option value="A1">A1</option><option value="B2">B2</option><option value="B3">B3</option><option value="C4">C4</option><option value="C5">C5</option><option value="C6">C6</option><option value="D7">D7</option><option value="E8">E8</option><option value="F9">F9</option><option value="AR">AR</option><option value="ABS">ABS</option></select>
</div>
</div>

<hr>

<div class="form-group row">
<label class="col-md-3 control-label" for="button1id"></label>
<div class="col-md-8">
<div class="col-sm-9 col-sm-offset-3">
<a href="" class="btn btn-success">Submit Result</a>&nbsp;&nbsp; &nbsp;&nbsp;<a href="" class="btn btn-danger">Cancel</a>
</div>
</div>
</div>
</fieldset>
</form>
</div>
<div class="col-md-4 col-sm-12"></div>
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
