<?php
include("connection.php");
	
	$res = mysql_query("SELECT (MAX(sl_no)+1) as sl_code from teacherinformation WHERE FLAG=1");
	
	$slect=mysql_query("SELECT * FROM teacherinformation WHERE FLAG=1");
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
/*$(document).ready(function(){
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
            });*/
			
       
  /*  });
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
		*/	
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
            <h1>TEACHER INFORMATION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
              <li class="breadcrumb-item active">TEACHER DETAIL</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
		
          <button id="addRow" onclick="showdiv('formdiv');" class="btn btn-block btn-primary" style="width:120px;padding:10px;">Add Teacher</button>&nbsp;
			<form action="csv_upload.php" method="post" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <input type="file" name="file" id="file" accept=".csv">
				<br /><br />
                <button type="submit" id="submit" name="import" class="btn btn-block btn-primary" style="width:300px;padding:10px;">Upload Teacher Information using Excel</button>
				<br/>
				<br/>
        
            </div>
        
        </form>
				
					
			<div id="formdiv" style="display:none;" >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Teacher Detail</h3>
              </div>
              <!-- /.card-header -->
			  
              <!-- form start -->
              <form role="form" action="teacherinfoAdd.php" method="post">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name of Employee</label>
                    <input type="text" class="form-control" name="ename" placeholder="Name of the employee">
                  </div>
				   <div class="card-body">
				  <div class="form-group">
                  <label>Designation</label>
                  <select class="form-control select2" name="desi" style="width: 100%;">
                    <option selected="selected">---SELECT DESIGNATION---</option>
					    <option>PROFESSOR & EQUIVA</option>                
					    <option>ASSOCIATE PROFESSOR READER</option>                
					    <option>LECTURER</option>                
					    <option>ASSISTANT PROFESSOR</option>                
					    <option>LECTURER(SENIOR)</option>                
					    <option>TUTOR</option>                
					    <option>SEMONSTRATOR</option>                
                  </select>
                </div>
                 <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <select class="form-control select2" name="gen" style="width: 100%;">
                    <option selected="selected">---Select Gender---</option>
					    <option>Male</option> 
					    <option>Female</option> 
					    <option>Other</option> 
					</select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Aadhar Number</label>
                    <input type="text" class="form-control" name="anumber" placeholder="Enter Aadhar Number">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Birth</label>
                    <input type="date" class="form-control" name="birth">
                  </div>
				 <div class="form-group">
                  <label>Social Category</label>
                  <select class="form-control select2" style="width: 100%;" name="scategory">
                    <option selected="selected">---SELECT SOCIAL CATEGORY---</option>
                    <option>OPEN</option>
                     <option>OBC</option>
                     <option>SC/ST</option>
                  </select>
                </div>
				  <div class="form-group">
                  <label>Religious Community</label>
                  <select class="form-control select2" style="width: 100%;" name="rcommunity">
                    <option selected="selected">---SELECT RELIGIOUS COMMUNITY---</option>
                    <option>Hindu</option>
                     <option>Muslim</option>
                     <option>Sikh</option>
                     <option>Christian</option>
                     <option>Buddhist</option>
                     <option>Jainism</option>
                  </select>
				  </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">PWD</label>
                       <select class="form-control select2" style="width: 100%;" name="pwd">
                    <option selected="selected">---SELECT PWD---</option>
                    <option>YES</option>
                    <option>NO</option>
					</select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Nature Of Appointment</label>
                       <select class="form-control select2" style="width: 100%;" name="nappo">
                    <option selected="selected">---Nature Of Appointment---</option>
                    <option>REGULAR</option>
                    <option>PART-TIME</option>
                    <option>AD-HOC</option>
                    <option>TEMPORARY</option>
                    <option>VISITING</option>
                    <option>DEPUTIATION</option>
					</select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Selection Mode</label>
                       <select class="form-control select2" style="width: 100%;" name="smode">
                    <option selected="selected">---SELECTION MODE---</option>
                    <option>DIRECT</option>
                    <option>CAS</option>
                    <option>PROMOTION</option>
					</select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Joining The Institution</label>
                    <input type="date" class="form-control" name="dofins" placeholder="Enter Date Of Joining The Institution">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Teaching Profession</label>
                    <input type="date" class="form-control" name="doftp" placeholder="Enter Date Of Teaching Profession">
                  </div>
				  <div class="form-group">
                  <label>Highest Qualification</label>
                  <select class="form-control select2" style="width: 100%;" name="hq">
                    <option selected="selected">---SELECT QUALIFICATION---</option>
                    <option>Post Graduation Degree</option>
                     <option>Graduate Diploma</option>
                     <option>Bachelor Degree(Honours)</option>
                     <option>Below Under Graduation</option>
                     <option>Under Graduation</option>
                     <option>M.Phil</option>
                     <option>Ph.D</option>
                  </select>
				  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Eligibility Qualification</label>
                    <select class="form-control select2" style="width: 100%;" name="equa">
                    <option selected="selected">---SELECT QUALIFICATION---</option>
                    <option>PG Diploma</option>
                    <option>NET</option>
                    <option>SLET</option>
                    <option>Certificate</option>
                    <option>Diploma</option>
					</select>
                  </div>
				  <div class="form-group">
                   <label for="exampleInputEmail1">Broad Discipline Group Category</label>
					<select class="form-control select2" style="width: 100%;" name="bdgcat">
                    <option selected="selected">---SELECT BROAD DISCIPLINE GROUP CATEGORY---</option>
                    <option>Agriculture</option>
                    <option>Area Studies</option>
                    <option>Arts</option>
                    <option>Commerce</option>
                    <option>criminology</option>
                    <option>Defence study</option>
                    <option>Design</option>
                    <option>cultural study</option>
                    <option>It & Computer science</option>
					</select>
					</div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Broad Discipline Group</label>
                    <input type="text" class="form-control" name="bdgroup" placeholder="Enter Broad Discipline Group">
                  </div>
				  
				<div class="form-group">
                  <label>Number Of Years Spent In Other Than Teaching Job</label>
                   <input type="text" class="form-control" name="noyeart" placeholder="Enter Number Of Years Spent In Other Than Teaching Job">
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Job Status</label>
				<select class="form-control select2" style="width: 100%;" name="jstatus">
                    <option selected="selected">---SELECT JOB STATUS---</option>
                    <option>Continue</option>
                    <option>New Approach</option>
                    <option>Promoted</option>
                    <option>Transfered</option>
                    <option>Retired</option>
                    <option>Left</option>
                    <option>Death</option>                  
                </select> 
					</div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Change Status</label>
                    <input type="text" class="form-control" name="datecstatus" placeholder="Date Of Change Status">
                  </div>
				    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                  </div>
			      <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="text" class="form-control" name="mnum" placeholder="Enter Mobile Number">
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
          </div>		

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Teacher Information With Full Features</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" >
                <thead>
                <tr>
                  <th>Sl No</th>
				  
				  <th>Name Of The Employee</th>
				  <th>Designation</th>
				  <th>Gender</th>
				  <th>Aadhar Number</th>
				  <th>Date Of Birth</th>
				  <th>Social Category</th>
				  <th>Religious Community</th>
				  <th>PWD</th>
				  <th>Nature Of Appointment</th>
				  <th>Selection Mode</th>
				  <th>Date Of Joining Institution</th>
				  <th>Date of Joining Teaching Profession</th>
				  <th>Highest Qualification</th>
				  <th>Eligibility Qualification</th>
				  <th>Broad Discipline Group Category</th>
				  <th>Broad Discipline</th>
				  <th>Years Spent Exclusively In Other Job</th>
				  <th>Job Status</th>
				  <th>Date Of Change In Status</th>
				  <th>Email</th>
				  <th>Mobile No</th>
				   <th>Edit</th>
					<th>Delete</th>
                </tr>
                </thead>
				<tbody>
					<?php
   
						while($data=mysql_fetch_assoc($slect))
						{
					?>
					<tr>
						<td><?php echo $data['sl_no']; ?></td>		
						<td><?php echo $data['name_of_the_employee']; ?></td>		
						<td><?php echo $data['designation']; ?></td>		
						<td><?php echo $data['gender']; ?></td>		
						<td><?php echo $data['aadhar_number']; ?></td>		
						<td><?php echo $data['date_of_birth']; ?></td>		
						<td><?php echo $data['social_category']; ?></td>		
						<td><?php echo $data['religious_community']; ?></td>		
						<td><?php echo $data['religious_community']; ?></td>		
						<td><?php echo $data['nature_of_appointment']; ?></td>		
						<td><?php echo $data['selection_mode']; ?></td>		
						<td><?php echo $data['date_of_joining_institution']; ?></td>		
						<td><?php echo $data['date_of_joining_teaching_profession']; ?></td>		
						<td><?php echo $data['highest_qualification']; ?></td>		
						<td><?php echo $data['eligibility_qualification']; ?></td>		
						<td><?php echo $data['broad_discipline_group_category']; ?></td>		
						<td><?php echo $data['broad_discipline']; ?></td>		
						<td><?php echo $data['years_spent_exclusively_in_other_job']; ?></td>		
						<td><?php echo $data['job_status']; ?></td>		
						<td><?php echo $data['date_of_change_in_status']; ?></td>		
						<td><?php echo $data['email']; ?></td>		
						<td><?php echo $data['mobile']; ?></td>		
						<td><a href="teacherinfoEdit.php?edit=<?php echo $data['sl_no']; ?>" class="btn btn-block btn-success">Edit</a></td>
						<td><a href="teacherinfoDelete.php?delet=<?php echo $data['sl_no']; ?>" onclick="return confirm('Are you sure to delete this record?')" class="btn btn-block btn-danger">Delete</a></td>
					</tr>
					<?php 
						}
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
