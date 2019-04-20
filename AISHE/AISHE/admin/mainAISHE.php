<?php
set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";
    require_once "html_tag_helpers.php";

    // Setup some additional prefixes for DBpedia
    EasyRdf_Namespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#');
    EasyRdf_Namespace::set('owl', 'http://www.w3.org/2002/07/owl#');
    EasyRdf_Namespace::set('rdfs', 'http://www.w3.org/2000/01/rdf-schema#');
    EasyRdf_Namespace::set('xsd', 'http://www.w3.org/2001/XMLSchema#');
    EasyRdf_Namespace::set('ex', 'http://www.ronuphdswaishe.org/');

    $sparql = new EasyRdf_Sparql_Client('http://72.9.104.172:3030/aishephd/sparql');
?>
<?php include('header.php'); ?>
<?php include('header_datatable.php'); ?>
 
 <script language="javascript">
        function showdiv(formdiv)
		{
			var f=document.getElementById("formdiv");
			
			if(f.style.display == 'none')
			{
				f.style.display="block";
				
			}
			
			
		}
		  function disdiv(formdiv)
		{
			var ef=document.getElementById("formdiv");
			
			if(ef.style.display == 'block')
			{
				ef.style.display="none";
				
			}
			
			
		}
		
</script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <script>
$(document).ready(function(){
    $('#country').on('change',function(){
        var countryID = $(this).val();
		alert('You are selected country :' + countryID);
		
		$.ajax({
                type:'POST',
                url:'getstate.php',
                data:{countryID :countryID },
                success:function(html){
				console.log(html);	
                    $('.state_list').html(html);
                   // $('#city').html('<option value="">Select state first</option>'); 
                }
            });
			
        /*if(countryID){
             
        }else{
            $('#state').html('<option value="">Select country first</option>');
           // $('#city').html('<option value="">Select state first</option>'); 
        }*/
    });
     $('#state').on('change',function(){
        var stateID = $("#state option:selected").val();;
		alert('You are selected state :' + stateID);
		
		$.ajax({
                type:'POST',
                url:'getdistrict.php',
                data:{stateID :stateID },
                success:function(html){
				console.log(html);	
                    $('.district_list').html(html);
                   // $('#city').html('<option value="">Select state first</option>'); 
                }
            });
			
        /*if(countryID){
             
        }else{
            $('#state').html('<option value="">Select country first</option>');
           // $('#city').html('<option value="">Select state first</option>'); 
        }*/
    });
  /*  $('#state').on('change',function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'state_id='+stateID,
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });*/
});
</script>
</script>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
 

  <!-- Main Sidebar Container -->
  <?php include("menu.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>AISHE DCF Detail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">AISHE DCF Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
		
          <button id="addRow" onclick="showdiv('formdiv');" 
					class="btn btn-block btn-primary"
					style="width:120px;padding:10px;">Add Institution</button><br/>
					
			<div id="formdiv" style="display:none;" >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DCF Detail</h3>
              </div>
              <!-- /.card-header -->
			  
              <!-- form start -->
              <form role="form" action="universityAdd.php" method="post">
                <div class="card-body">
				  <div class="form-group">
                    <label for="exampleInputEmail1">Code of the College / Institution</label>
                    <input type="text" class="form-control" name="codeofinst" placeholder="Code of the Institution">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of the College / Institution</label>
                    <input type="text" class="form-control" name="nameofinst" placeholder="Name of the Institution">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">AISHE Code</label>
                    <input type="text" class="form-control" name="codeofaishe" placeholder="Enter AISHE Code">
                  </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Postal Address Line 1</label>
                    <input type="text" class="form-control" name="address1" placeholder="Postal Address Line 1">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Postal Address Line 2</label>
                    <input type="text" class="form-control" name="address2" placeholder="Postal Address Line 2">
                  </div>
				 <div class="form-group">
                  <label>Country</label>
                  <select class="form-control select2" id="country" name="country" style="width: 100%;">
                    <option selected="selected">---Select Country---</option>
					<?php
					  $result2 = $sparql->query('SELECT ?cntycode ?cntyname WHERE { ?x a ex:Country . ?x ex:codeOfCountry ?cntycode . ?x ex:nameOfCountry ?cntyname . }');
                       foreach ($result2 as $row) {
                         echo "<option value=".$row->cntycode.">".link_to($row->cntyname, $row->cntycode)."</option>";
                   }?> 
                   
                  </select>
                </div>
				
				<div class="form-group" id="state">
                  <label>State</label>
                  
				  <div class="state_list">
				  </div>
                </div>
                <div class="form-group">
                  <label>District</label>
                  
				  <div class="district_list">
				  </div>
                </div>
				
				  <div class="form-group">
                    <label for="exampleInputEmail1">Pin Code</label>
                    <input type="text" class="form-control" name="pincode" placeholder="Enter Pin Code">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Web site</label>
                    <input type="text" class="form-control" name="website" placeholder="Enter Web site">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Year of Establishment</label>
                    <input type="text" class="form-control" name="estyear" placeholder="Enter Year of Establishment">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Name of Principal</label>
                    <input type="text" class="form-control" name="nameofprincipal" placeholder="Enter Name of Principal">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Principal's Contact No</label>
                    <input type="text" class="form-control" name="contactno" placeholder="Enter Contact No">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Principal's E-mail id</label>
                    <input type="text" class="form-control" name="emailid" placeholder="Enter E-mail id">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Name of College Nodal Officer for AISHE</label>
                    <input type="text" class="form-control" name="nameofnodelofficer" placeholder="Enter Name of College Nodal Officer for AISHE">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Designation of Nodel officer</label>
                    <input type="text" class="form-control" name="designation" placeholder="Enter Designation">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Telephone No of Nodel officer</label>
                    <input type="text" class="form-control" name="telephoneno" placeholder="Enter Telephone No">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Mobile No of Nodel officer</label>
                    <input type="text" class="form-control" name="mobileno" placeholder="Enter Mobile No">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">E-mail Id of Nodel officer</label>
                    <input type="text" class="form-control" name="nodelemail" placeholder="Enter E-mail id">
                  </div>
				  
				  <div class="form-group">
                  <label>Name of University to which Affiliated</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">---SELECT UNIVERSITY---</option>
                    <?php
					  $result1 = $sparql->query('SELECT ?cntycode ?cntyname WHERE { ?x a ex:University . ?x ex:codeOfUniversity ?cntycode . ?x ex:nameOfUniversity ?cntyname . }');
                       foreach ($result1 as $row) {
                         echo "<option value=".$row->cntycode.">".link_to($row->cntyname, $row->cntycode)."</option>";
                   }?> 
                  </select>
                </div>
				<div class="form-group">
                  <label>University Type</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">---SELECT TYPE OF UNIVERSITY---</option>
                    <option>CENTRAL OPEN UNIVERSITY</option>
                     <option>CENTRAL UNIVERSITY</option>
                     <option>DEEMED UNIVERSITY-GOVERNMENT</option>
                     <option>DEEMED UNIVERSITY-GOVERNMENT-AIDED</option>
                     <option>DEEMED UNIVERSITY-PRIVATE</option>
                     <option>INSTITUTE OF NATIONAL IMPORTANCE</option>
                     <option>INSTITUTE UNDER STATE LEGISLETURE ACT</option>
                     <option>STATE OPEN UNIVERSITY</option>
                     <option>STATE PRIVATE OPEN UNIVERSITY</option>
                     <option>STATE PRIVATE UNIVERSITY</option>
                     <option>STATE PUBLIC UNIVERSITY</option>
                  </select>
                </div>
				<div class="form-group">
                  <label>The Statutory body through which recognized</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">---SELECT STATUTORY BODY---</option>
                     <?php
					  $result1 = $sparql->query('SELECT ?stcode ?stname WHERE { ?x a ex:StatutoryBody . ?x ex:codeOfStatutoryBody ?stcode . ?x ex:nameOfStatutoryBody ?stname . }');
                       foreach ($result1 as $row) {
                         echo "<option value=".$row->stcode.">".link_to($row->stname, $row->stcode)."</option>";
                   }?>
                   
                  </select>
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Year of Affiliation with University</label>
                    <input type="text" class="form-control" name="yearaffiliation" placeholder="Enter Year of Affiliation with University">
                  </div>
				  <div class="form-group">
				  <label for="exampleInputEmail1">Location of the College/ Institution</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio_rural" value="RURAL">
                      <label class="form-check-label">Rural</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio_urban" value="URBAN">
                      <label class="form-check-label">Urban</label>
                    </div>
                  </div>
				  <div class="form-group">
				  <label for="exampleInputEmail1">Geographical referencing</label>
                    <div class="form-check">
                      <label for="exampleInputEmail1">Latitude (in degree)</label>
                    <input type="text" class="form-control" name="latitude" placeholder="Latitude (in degree)">
                    </div>
                    <div class="form-check">
                      <label for="exampleInputEmail1">Longitude (in degree)</label>
                    <input type="text" class="form-control" name="longitude" placeholder="Longitude (in degree)">
                    </div>
                  </div>
				   <div class="form-group">
				  <label for="exampleInputEmail1">Level of Course</label>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio_ug" value="UG">
                      <label class="form-check-label">Under Graduate</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="radio_pg" value="PG">
                      <label class="form-check-label">Post Graduate</label>
                    </div>
                  </div>
				  <div class="form-group">
                  <label>Type of College/ Institution</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">---SELECT TYPE OF Institution---</option>
                    <option>AFFILIATED COLLEGE</option>
                     <option>CONSTITUENT / UNIVERSITY COLLEGE</option>
                     <option>PG CENTER / OFF-CAMPUS</option>
                     <option>RECOGNIZED CENTER</option>                   
                  </select>
                </div>
				  <div class="form-group">
                  <label>Management of College/ Institution</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">---SELECT MANAGEMENT---</option>
                    <option>CENTRAL GOVERNMENT</option>
                    <option>STATE GOVERNMENT</option>
                    <option>LOCAL BODY</option>
                    <option>UNIVERSITY</option>
                    <option>PRIVATE AIDED</option>
                    <option>PRIVATE UN-AIDED</option>
                  </select>
                </div>
				 <div class="form-group">
                  <label>Courses</label>
                  <select class="form-control select2" style="width: 100%;">				  
                    <option selected="selected">---SELECT COURSE---</option>
					<?php
					  $result1 = $sparql->query('SELECT ?code ?cname WHERE { ?x a ex:Course . ?x ex:codeOfCourse ?code . ?x ex:nameOfCourse ?cname . }');
                       foreach ($result1 as $row) {
                         echo "<option value=".$row->code.">".link_to($row->cname, $row->code)."</option>";
                   }?>                    
                  </select>
                </div>
				 
                <div class="form-group">
                  <label>Pre-Requesting Course(s)</label>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                          style="width: 100%;">
                    <?php
					  $result1 = $sparql->query('SELECT ?code ?cname WHERE { ?x a ex:Course . ?x ex:codeOfCourse ?code . ?x ex:nameOfCourse ?cname . }');
                       foreach ($result1 as $row) {
                         echo "<option value=".$row->code.">".link_to($row->cname, $row->code)."</option>";
                   }?>    
                  </select>
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Fee</label>
                    <input type="text" class="form-control" name="fee" placeholder="Enter Fee">
                 </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="reset" name="btncancel"  onclick="disdiv('formdiv');" class="btn btn-primary">Cancel</button><button type="submit" name="uniadd"  class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
			  <!-- form end -->
			  
            </div>
            <!-- /.card -->
             </div>
          </div>		

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Institution Code</th>
                  <th>Institution Name</th>
				  <th>AISHE Code</th>
				  <th>Full Address</th>
				  <th>Website</th>
				  <th>Year of Establishment</th>
				  <th>Name Of Principal</th>
				  <th>Contact No</th>
				  <th>Name of College Nodal Officer</th>
				  <th>Designation</th>
				  <th>Telephone No</th>
				  <th>Mobile No</th>
				  <th>Email Id</th>
				  <th>Name of University</th>
				  <th>University Type</th>
				  <th>Statutory body</th>
				  <th>Year of Affiliation with University</th>
				  <th>Location</th>
				  <th>Geographical</th>
				  <th>Level of Course</th>
				  <th>Type of Institution</th>
				  <th>Management of Institution</th>
				  <th>Name Of Course</th>
				  <th>Pre-Requesting Course(s)</th>
				  <th>Fee Amount</th>
                </tr>
                </thead>
                <tbody>
                <?php
  /*  $result = $sparql->query(
             'SELECT  ?indv ?un ?uc  WHERE  { 
  ?indv rdf:type my:University .
   ?indv my:nameOfUni ?un .
   ?indv my:codeOfUni ?uc .
} ORDER BY ?uc'
    );
    foreach ($result as $row) {
        echo "<tr><td>".link_to($row->uc, $row->uc)."</td><td>".link_to($row->un, $row->indv)."</td></tr>";
    }*/
?>				
                
                </tbody>
                <tfoot>
                <tr>
                 <th>Institution Code</th>
                  <th>Institution Name</th>
				  <th>AISHE Code</th>
				  <th>Full Address</th>
				  <th>Website</th>
				  <th>Year of Establishment</th>
				  <th>Name Of Principal</th>
				  <th>Contact No</th>
				  <th>Name of College Nodal Officer</th>
				  <th>Designation</th>
				  <th>Telephone No</th>
				  <th>Mobile No</th>
				  <th>Email Id</th>
				  <th>Name of University</th>
				  <th>University Type</th>
				  <th>Statutory body</th>
				  <th>Year of Affiliation with University</th>
				  <th>Location</th>
				  <th>Geographical</th>
				  <th>Level of Course</th>
				  <th>Type of Institution</th>
				  <th>Management of Institution</th>
				  <th>Name Of Course</th>
				  <th>Pre-Requesting Course(s)</th>
				  <th>Fee Amount</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>

<script>

  $(function () {
	    //Initialize Select2 Elements
    $('.select2').select2()
	
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>
