<?php
include("connection.php");
	
	$res = mysql_query("SELECT (MAX(d_id)+1) as d_code from district WHERE FLAG=1");
	
	$slect=mysql_query("SELECT * FROM district WHERE flag=1");
		
	
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
            <h1>District Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="adminhome.php">Home</a></li>
              <li class="breadcrumb-item active">DISTRICT DETAIL</li>
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
					style="width:120px;padding:10px;">Add district</button><br/>
					
			<div id="formdiv" style="display:none;" >
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">District Detail</h3>
              </div>
              <!-- /.card-header -->
			  
              <!-- form start -->
              <form role="form" action="districtAdd.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">district Code</label>
					  <?php while($row=mysql_fetch_object($res))
					  {
					    if($row->d_code == null)
						{
							?>
							<input type="text" class="form-control" name="dcode" value="1" placeholder="Enter district Code" readonly>
							<?php
						}
						else
						{
					  ?>
                    <input type="text" class="form-control" name="dcode" value="<?php echo $row->d_code; ?>" placeholder="Enter district Code" readonly>
					  <?php 
					  }
					  } ?>
                  </div>
				  <div class="form-group">
                    <label for="exampleInputEmail1">district Name</label>
                    <input type="text" class="form-control" name="dname" placeholder="Enter distict Name">
                  </div>
				  <div class="form-group">
                  <label>State</label>
                  <select class="form-control select2" id="state" name="state" style="width: 100%;">
                    <option selected="selected">---Select State---</option>
					<?php
					  $res2 = mysql_query("select s_id,s_name from state where flag=1");
					  
                        while($row=mysql_fetch_object($res2))
					  {
						   
                         echo "<option value=".$row->s_id.">".$row->s_name."</option>";
                   }?> 
                   
                  </select>
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
                  <th>District Code</th>
                  <th>District Name</th>
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
        <td><?php echo $data['d_id']; ?></td>
        <td><?php echo $data['d_name']; ?></td>
		<td><a href="districtEdit.php?edit=<?php echo $data['d_id']; ?>" class="btn btn-block btn-success">Edit</a></td>
		<td><a href="districtDelete.php?delet=<?php echo $data['d_id']; ?>" onclick="return confirm('Are you sure to delete this record?')" class="btn btn-block btn-danger">Delete</a></td>
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
