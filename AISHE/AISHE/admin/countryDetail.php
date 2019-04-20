<?php
include("connection.php");
	
	$res = mysql_query("SELECT (MAX(c_id)+1) as c_code from country WHERE FLAG=1");
	
	$slect=mysql_query("SELECT * FROM country WHERE flag=1");
		
	
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
              <li class="breadcrumb-item active">COUNTRY DETAIL</li>
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
					style="width:120px;padding:10px;">Add Country</button><br/>
					
			<div id="formdiv" style="display:none;" >
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
					  <?php while($row=mysql_fetch_object($res))
					  {
					    if($row->c_code == null)
						{
							?>
							<input type="text" class="form-control" name="ccode" value="1" placeholder="Enter country Code" readonly>
							<?php
						}
						else
						{
					  ?>
                    <input type="text" class="form-control" name="ccode" value="<?php echo $row->c_code; ?>" placeholder="Enter country Code" readonly>
					  <?php 
					  }
					  } ?>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">Country Name</label>
                    <input type="text" class="form-control" name="cname" placeholder="Enter Country Name">
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="reset" name="btncancel"  onclick="disdiv('formdiv');" class="btn btn-primary">Cancel</button><button type="submit" name="courseadd"  class="btn btn-primary pull-right">Submit</button>
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
                  <th>Country Code</th>
                  <th>country Name</th>
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
        <td><?php echo $data['c_id']; ?></td>
        <td><?php echo $data['c_name']; ?></td>
		<td><a href="countryEdit.php?edit=<?php echo $data['c_id']; ?>" class="btn btn-block btn-success">Edit</a></td>
		<td><a href="countryDelete.php?delet=<?php echo $data['c_id']; ?>" onclick="return confirm('Are you sure to delete this record?')" class="btn btn-block btn-danger">Delete</a></td>
		</tr>
    <?php }
?>				
                </tr>
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
<script>
  $(function () {
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
