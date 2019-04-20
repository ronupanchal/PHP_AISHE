<?php
include("connection.php");
	$res = mysql_query("SELECT (MAX(code_of_college)+1) as clg_code from college WHERE FLAG=1");
	
	$slect=mysql_query("SELECT * FROM country WHERE FLAG=1");
	//$slect=mysql_query("SELECT * FROM state WHERE FLAG=1");
	//$slect=mysql_query("SELECT * FROM district WHERE FLAG=1");
	$cores=mysql_query("SELECT * FROM course WHERE FLAG=1");
	$ures=mysql_query("SELECT * FROM university WHERE FLAG=1");
	$sslect=mysql_query("SELECT * FROM statutory_body WHERE flag=1");
	$collegeres=mysql_query("SELECT * FROM college WHERE flag=1");
?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
<!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.min.css">

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

<style type="text/css" class="init">
	
	div.dataTables_wrapper {
		width: 1000px;
		margin: 0 auto;
	}
</style>
 
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
			
       
    });
 
});
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
            <h1>COLLEGE INFORMATION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
              <li class="breadcrumb-item active">COLLEGE DETAIL</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
		
          <button id="addRow" onclick="showdiv('formdiv');" class="btn btn-block btn-primary"style="width:120px;padding:10px;">Add Institution</button><br/>
					
			<div id="formdiv" style="display:none;" >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">DCF Detail</h3>
              </div>
              <!-- /.card-header -->
			  
              <!-- form start -->
              <form role="form" action="mainaisheAdd.php" method="post">
                <div class="card-body">
				  <div class="form-group">
                    <label for="exampleInputEmail1">Code of the College / Institution</label>
					<?php while($row=mysql_fetch_object($res)) { 
					    if($row->clg_code == null)
						{
							?>
							<input type="text" class="form-control" name="codeofinst" value="1" placeholder="Code of the Institution" readonly>
							
							<?php
						}
						else
						{
					  ?>
					  <input type="text" class="form-control" name="codeofinst" value="<?php echo $row->clg_code; ?>" placeholder="Code of the Institution" readonly>
                    
					  <?php 
					    }
					  } ?>
                    
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
                  <select class="form-control select2" id="country" name="country" style="width: 100%;" >
                    <option selected="selected">---Select Country---</option>
				     <?php while($row=mysql_fetch_object($slect)) 
					 {?>
					     <option value="<?php echo $row->c_id; ?>" ><?php echo $row->c_name; ?></option>
					 <?php } ?>
                 </select>
                </div>
				<div class="form-group" id="state">
                  <label>State</label>
				  
				  
                  <select class="form-control select2 state_list" style="width: 100%;" name="statename" >
				  <option selected="selected">---Select State---</option>
				   <?php while($row=mysql_fetch_object($slect)) 
					 {?>
					     <option value="<?php echo $row->s_id; ?>" ><?php echo $row->s_name; ?></option>
					 <?php } ?>
				  </select>
				  </div>
                <div class="form-group" id="district">
				
                  <label>District</label>
						<select class="form-control select2 district_list" style="width: 100%;" name="districtname" >
				  <option selected="selected">---Select District---</option>
				   <?php while($row=mysql_fetch_object($slect)) 
					 {?>
					     <option value="<?php echo $row->d_id; ?>" ><?php echo $row->d_name; ?></option>
					 <?php } ?>
				  </select>
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
                  <select class="form-control select2" style="width: 100%;" name="nameofuniversity">
                    <option selected="selected">---SELECT UNIVERSITY---</option>
					 <?php
					  $res2 = mysql_query("select st_id,st_name from  university where flag=1");
					  
                        while($row=mysql_fetch_object($ures))
					  {
						   
                         echo "<option value=".$row->u_id.">".$row->u_name."</option>";
                   }?>
                         				
                  </select>
                </div>
				<div class="form-group">
                  <label>University Type</label>
                  <select class="form-control select2" style="width: 100%;" name="typeofuniversity">
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
                     <option>OTHER</option>
                  </select>
                </div>
				<div class="form-group">
                  <label>The Statutory body through which recognized</label>
                  <select class="form-control select2" style="width: 100%;" name="nameofstatutorybody">
                    <option selected="selected">---SELECT STATUTORY BODY---</option>
					<?php
					  $res2 = mysql_query("select st_id,st_name from  statutory_body where flag=1");
					  
                        while($row=mysql_fetch_object($res2))
					  {
						   
                         echo "<option value=".$row->st_id.">".$row->st_name."</option>";
                   }?>
                   
                  </select>
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Year of Affiliation with University</label>
                    <input type="text" class="form-control" name="yearaffiliation" placeholder="Enter Year of Affiliation with University">
                  </div>
				  <div class="form-group">
				  <label for="exampleInputEmail1">Location of the College/ Institution</label>
                  <select class="form-control select2" style="width: 100%;" name="location">
                    <option selected="selected">---SELECT LOCATION---</option>
                    <option value="Rural">Rural</option>
                    <option value="Urban">Urban</option>
					</select>
                  </div>
				  <div class="form-group">
					<label for="exampleInputEmail1">Geographical referencing</label>
                    
                    <div class="form-check">
                      <label for="exampleInputEmail1">Longitude (in degree)</label>
                    <input type="text" class="form-control" name="longitude" placeholder="Longitude (in degree)">
                    </div>
					<div class="form-check">
                      <label for="exampleInputEmail1">Latitude (in degree)</label>
                    <input type="text" class="form-control" name="latitude" placeholder="Latitude (in degree)">
                    </div>
                  
				   <div class="form-group">
					<label for="exampleInputEmail1">Level of Course</label>
                    <select class="form-control select2" style="width: 100%;" name="course_level">
                    <option selected="selected">---SELECT LEVEL COURSE---</option>
                    <option value="Under-Graduate">Under Graduate</option>
                    <option value="Post-Graduate">Post Graduate</option>
					</select>
                    </div>
                  </div>
				  <div class="form-group">
                  <label>Type of College</label>
                  <select class="form-control select2" style="width: 100%;" name="typeofinstitution">
                    <option selected="selected">---SELECT TYPE OF COLLEGE---</option>
                    <option>AFFILIATED COLLEGE</option>
                     <option>CONSTITUENT / UNIVERSITY COLLEGE</option>
                     <option>PG CENTER / OFF-CAMPUS CENTER</option>
                     <option>RECOGNIZED CENTER</option>                   
                  </select>
                </div>
				  <div class="form-group">
                  <label>Management of College/ Institution</label>
                  <select class="form-control select2" style="width: 100%;" name="typeofmanagement">
                    <option selected="selected">---SELECT MANAGEMENT---</option>
                    <option>CENTRAL GOVERNMENT</option>
                    <option>STATE GOVERNMENT</option>
                    <option>LOCAL BODY</option>
                    <option>GOVERNMENT AIDED</option>
                    <option>UNIVERSITY MANAGED-Govt</option>
                    <option>PRIVATE AIDED</option>
                    <option>UN-AIDED PRIVATE </option>
                  </select>
                </div>
				 <div class="form-group">
                  <label>Courses</label>
                  <select class="form-control select2" style="width: 100%;" name="coursename">				  
                    <option selected="selected">---SELECT COURSE---</option>
					    <?php
					  $res2 = mysql_query("select st_id,st_name from  course where flag=1");
					  
                        while($row=mysql_fetch_object($cores))
					  {
						   
                         echo "<option value=".$row->co_id.">".$row->co_name."</option>";
                   }?>
                                        
                  </select>
                </div>
				 
                <div class="form-group">
                  <label>Pre-Requesting Course(s)</label>
                 <input type="text" class="form-control" name="prerequesting" placeholder="Enter prerequesting course">

                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Fee</label>
                    <input type="text" class="form-control" name="fee" placeholder="Enter Fee">
                 </div>
				 <div class="form-group">
                    <label for="exampleInputEmail1">Intake</label>
                    <input type="text" class="form-control" name="intake" placeholder="Enter Intake">
                 </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="reset" name="btncancel"  onclick="disdiv('formdiv');" class="btn btn-primary">Cancel</button>
				  <button type="submit" name="submita"  class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
			  <!-- form end -->
			  
            </div>
            <!-- /.card -->
             </div>
          </div>		

		  
		   
		  
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">College With Full Features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" >
                <thead>
                <tr>
                  <th>Code Of College</th>
                  <th>Name Of College</th>
				  <th>AISHE Code</th>
				  <th>Postal Address Line1</th>
				  <th>Postal Address Line2</th>
				  <th>Country</th>
				  <th>State</th>
				  <th>District</th>
				  <th>Pincode</th>
				  <th>Website</th>
				  <th>Year of Establishment</th>
				  <th>Name Of Principal</th>
				  <th>Principal Contact No</th>
				  <th>Principal Email Id</th>
				  <th>Name of College Nodal Officer</th>
				  <th>Designation Of Nodal Officer</th>
				  <th>Telephone No Of Nodal Officer</th>
				  <th>Mobile No Of Nodal Officer</th>
				  <th>Email Id Of Nodal Officer</th>
				  <th>Name of University</th>
				  <th>University Type</th>
				  <th>Statutory body</th>
				  <th>Year of Affiliation with University</th>
				  <th>Location</th>
				  <th>Longitude</th>
				  <th>Latitude</th>
				  <th>Level of Course</th>
				  <th>Type of College</th>
				  <th>Management Of College</th>
				  <th>Course</th>
				  <th>Pre-Requesting Course(s)</th>
				  <th>Fee Amount</th>
				  <th>Intake</th>
				  <th>Edit</th>
				  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
               <?php
   
						while($data=mysql_fetch_assoc($collegeres))
						{
					?>
					<tr>
						<td><?php echo $data['code_of_college']; ?></td>
						<td><?php echo $data['name_of_college']; ?></td>		
						<td><?php echo $data['aishe_code']; ?></td>		
						<td><?php echo $data['postal_address_line1']; ?></td>		
						<td><?php echo $data['postal_address_line2']; ?></td>		
						<td><?php echo $data['country']; ?></td>		
						<td><?php echo $data['state']; ?></td>		
						<td><?php echo $data['district']; ?></td>		
						<td><?php echo $data['pin_code']; ?></td>		
						<td><?php echo $data['web_site']; ?></td>		
						<td><?php echo $data['year_of_establishment']; ?></td>		
						<td><?php echo $data['name_of_principal']; ?></td>		
						<td><?php echo $data['principal_contactno']; ?></td>		
						<td><?php echo $data['principal_email_id']; ?></td>		
						<td><?php echo $data['name_of_collage_nodal_officer_for_aishe']; ?></td>		
						<td><?php echo $data['designation_of_nodel_officer']; ?></td>		
						<td><?php echo $data['telephone_no_of_nodel_officer']; ?></td>		
						<td><?php echo $data['mobile_no_of_nodel_officer']; ?></td>		
						<td><?php echo $data['email_id_of_nodel_officer']; ?></td>		
						<td><?php echo $data['name_of_university_to_which_affiliated']; ?></td>		
						<td><?php echo $data['university_type']; ?></td>		
						<td><?php echo $data['the_statutory_body_through_which_recognized']; ?></td>		
						<td><?php echo $data['year_of_affiliation_with_university']; ?></td>		
						<td><?php echo $data['location_of_the_college']; ?></td>		
						<td><?php echo $data['longi']; ?></td>	
						<td><?php echo $data['lati']; ?></td>		
						<td><?php echo $data['level_of_course']; ?></td>		
						<td><?php echo $data['type_of_college']; ?></td>		
						<td><?php echo $data['management_of_college']; ?></td>		
						<td><?php echo $data['course']; ?></td>		
						<td><?php echo $data['pre_requesting_course']; ?></td>		
						<td><?php echo $data['fee']; ?></td>		
						<td><?php echo $data['intake']; ?></td>		
						<td><a href="mainaisheEdit.php?edit=<?php echo $data['code_of_college']; ?>" class="btn btn-block btn-success">Edit</a></td>
						<td><a href="mainaisheDelete.php?delet=<?php echo $data['code_of_college']; ?>" onclick="return confirm('Are you sure to delete this record?')" class="btn btn-block btn-danger">Delete</a></td>
                </tr>
    
				<?php }
			?>				
                 </tbody>
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



<!-- Page script -->
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 200,
        "scrollX": true
    } );
} );
</script>
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
      "autoWidth": true
    });
  });
</script>
</body>
</html>
