<?php 
	include("connection.php");
	
	$eid=$_GET['edit'];
	$q="SELECT * FROM teacherinformation WHERE sl_no=".$eid;
	
		$res=mysql_query($q);			  
	 
   
?>
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
<!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Teacher Information</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
              <li class="breadcrumb-item active">Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
		
         
					
			<div id="formdiv"  >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Teacher Information</h3>
              </div>
              <!-- /.card-header -->
			  
              <!-- form start -->
              <form role="form" action="teacherinfoAdd.php" method="post">
                <div class="card-body">
				
					
				  <input type="text" class="form-control" name="teachinfocode" value="<?php echo $eid; ?>" >
                  <div class="form-group">
				 <?php while($row=mysql_fetch_object($res))
				  {
				     ?>
                    <label for="exampleInputEmail1">Name of Employee</label>
                    <input type="text" class="form-control" name="ename" placeholder="Name of the employee" value="<?php echo $row->name_of_the_employee; ?>">
                  </div>
				   <div class="card-body">
				  <div class="form-group">
                  <label>Designation</label>
                  <select class="form-control select2" name="desi" style="width: 100%;">
                    <option selected="selected"><?php echo $row->designation; ?></option>
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
					<option selected="selected"><?php echo $row->gender; ?></option>
					    <option>Male</option> 
					    <option>Female</option> 
					    <option>Other</option> 
					</select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Aadhar Number</label>
                    <input type="text" class="form-control" name="anumber" value="<?php echo $row->aadhar_number; ?>" placeholder="Enter Aadhar Number">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Birth</label>
                    <input type="date" class="form-control" name="birth" value="<?php echo $row->date_of_birth; ?>">
                  </div>
				 <div class="form-group">
                  <label>Social Category</label>
                  <select class="form-control select2" style="width: 100%;" name="scategory">
				  <option selected="selected"><?php echo $row->social_category; ?></option>
                    <option>OPEN</option>
                     <option>OBC</option>
                     <option>SC/ST</option>
                  </select>
                </div>
				  <div class="form-group">
                  <label>Religious Community</label>
                  <select class="form-control select2" style="width: 100%;" name="rcommunity">
				  <option selected="selected"><?php echo $row->religious_community; ?></option>
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
					   <option selected="selected"><?php echo $row->pwd; ?></option>
                    <option>YES</option>
                    <option>NO</option>
					</select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Nature Of Appointment</label>
                       <select class="form-control select2" style="width: 100%;" name="nappo">
					   <option selected="selected"><?php echo $row->nature_of_appointment; ?></option>
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
					   <option selected="selected"><?php echo $row->selection_mode; ?></option>
                    <option>DIRECT</option>
                    <option>CAS</option>
                    <option>PROMOTION</option>
					</select>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Joining The Institution</label>
                    <input type="date" class="form-control" name="dofins"  value="<?php echo $row->date_of_joining_institution; ?>"placeholder="Enter Date Of Joining The Institution">
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Date Of Teaching Profession</label>
                    <input type="date" class="form-control" name="doftp" value="<?php echo $row->date_of_joining_teaching_profession; ?>" placeholder="Enter Date Of Teaching Profession">
                  </div>
				  <div class="form-group">
                  <label>Highest Qualification</label>
                  <select class="form-control select2" style="width: 100%;" name="hq">
				  <option selected="selected"><?php echo $row->highest_qualification; ?></option>
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
					<option selected="selected"><?php echo $row->eligibility_qualification; ?></option>
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
					<option selected="selected"><?php echo $row->broad_discipline_group_category; ?></option>
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
                    <input type="text" class="form-control" name="bdgroup" value="<?php echo $row->broad_discipline; ?>" placeholder="Enter Broad Discipline Group">
                  </div>
				  
				<div class="form-group">
                  <label>Number Of Years Spent In Other Than Teaching Job</label>
                   <input type="text" class="form-control" name="noyeart" value="<?php echo $row->years_spent_exclusively_in_other_job; ?>" placeholder="Enter Number Of Years Spent In Other Than Teaching Job">
                </div>
				<div class="form-group">
                    <label for="exampleInputEmail1">Job Status</label>
				<select class="form-control select2" style="width: 100%;" name="jstatus">
				<option selected="selected"><?php echo $row->job_status; ?></option>
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
                    <input type="text" class="form-control" name="datecstatus" value="<?php echo $row->date_of_change_in_status; ?>" placeholder="Date Of Change Status">
                  </div>
				    <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php echo $row->email; ?>"  placeholder="Enter Email">
                  </div>
			      <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="text" class="form-control" name="mnum" value="<?php echo $row->mobile; ?>" placeholder="Enter Mobile Number">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
				  <?php }?>
                  <button type="reset" name="btncancel"  onclick="disdiv('formdiv');" class="btn btn-primary">Cancel</button>
				  <button type="submit" name="submitedit"  class="btn btn-primary pull-right">Submit</button>
                </div>
              </form>
			  <!-- form end -->
			  
            </div>
            <!-- /.card -->
             </div>
          </div>		

         
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	<?php  include('footer.php'); ?>

 