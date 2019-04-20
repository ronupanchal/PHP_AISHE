<?php 
	include("connection.php");
	
	$eid=$_GET['edit'];
	$q="SELECT * FROM country WHERE c_id=".$eid;
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
            <h1>Country Master</h1>
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
                <h3 class="card-title">Country Detail</h3>
              </div>
              <!-- /.card-header -->
			  
              <!-- form start -->
              <form role="form" action="countryAdd.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Country Code</label>
					  
							<input type="text" class="form-control" name="ccode" value="<?php echo $eid; ?>" placeholder="Enter Country Code">
							
                  </div>
				  <div class="form-group">
				  <?php while( $row=mysql_fetch_object($res) )
				  {
				     ?>
                    <label for="exampleInputEmail1">Country Name</label>
                    <input type="text" class="form-control" name="cname" value="<?php echo $row->c_name; ?>" placeholder="Enter Country Name">
					<?php  } ?>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="countryDetail.php" class="btn btn-primary">Cancel</a><button type="submit" name="submite"  class="btn btn-primary pull-right">Submit</button>
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

 